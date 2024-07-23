<?php
session_start();
  include('../../config/dbcon.php');
  include(BASE_PATH . 'admin/includes/header.php');
  include(BASE_PATH . 'admin/includes/topbar.php');
  include(BASE_PATH . 'admin/includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

<!-- User Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Information User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form action="code2.php" method="POST"> <!-- FUNCTION CREATE / ADD DATA -->
      <div class="modal-body">
        <!--Input Modal Body Here-->
        <div class="form-group">
          <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="">Email Address / Username</label>
          <span class="check_Emailbtn"></span>
            <input type="email" id="email" name="email" class="form-control email_id"placeholder="Email Address" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="row"> <!-- Add Data in 1 Row with 2 textbox -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
            </div> 
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Account Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" required>
            </div> 
          </div>
        </div><!-- CLOSE Add Data in 1 Row with 2 textbox -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="button" id="check_Emailbtn" class="btn btn-warning">Cek</button>
        <button type="submit" name="addUser" class="btn btn-primary">SAVE</button>
        
    </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete User Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Information User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code2.php" method="POST"> <!-- FUNCTION DELETE DATA -->
      <div class="modal-body">
        <input type="hidden" name="delete_id" class="delete_user_id">
        <p>
          Are you sure want to delete this data?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-danger">YES, DELETE!</button>
    </form>
      </div>
    </div>
  </div>
</div>


<!-- Content Header (Page header) -->
<section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">  
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Master Customer Registered</h3>
            <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                      <?php
                          $nomor = 0;  ######## Penomoran Tabel HTML #######
                          $query = "SELECT * FROM user";
                          $query_run = mysqli_query($con, $query);
                          
                          
                          if(mysqli_num_rows($query_run) > 0)
                          {
                            foreach($query_run as $row)
                            {
                              $nomor++;
                              ?>
                               <tr>
                                  <td><?php echo htmlentities ($nomor);?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['phone']; ?></td>
                                  <td><?php echo $row['status']; ?></td>
                                    <td><a href="master_customer_edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">EDIT</a>
                                        <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">DELETE</button>
                                     </td>
                                </tr>
                            <?php
                            }
                          }
                          else{
                            ?>
                            <tr>
                              <td>Data Record Not Found</td>
                            </tr>
                            <?php
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
    </div>       
        </div>
      </div>
    </div><!-- /.row -->

</div><!-- .container-fluid -->
</section>
</div>

<script>
   // ############## DELETE BUTTON ###################### 
  $(document).ready(function () {
  // ############## DELETE BUTTON ######################
    $('.deletebtn').click(function (e){
      e.preventDefault();

      var user_id = $(this).val();
      //CHECK SELECTOR FUNCION AT INSPECT -> CONSOLE
      //console.log(user_id);
      $('.delete_user_id').val(user_id);
      $('#DeleteModal').modal('show');
    });
    // ############## LIVE CHECK EMAIL #################

    $('.email_id').keyup(function (e) {
      var email = $('.email_id').val();
      //console.log(email); test check
        $.ajax({
          type: "POST",
          url: "code2.php",
          data: {
                  'check_Emailbtn':1,
                  'email':email,
                },
          dataType: "dataType",
          success: function (response){
            console.log(response);
          }
      });
    });
  });

</script>

<?php include(BASE_PATH . 'config/script.php'); ?>
<?php include(BASE_PATH . 'admin/includes/footer.php'); ?>