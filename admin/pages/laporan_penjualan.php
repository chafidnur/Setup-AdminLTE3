<?php
session_start();
  include('../../config/dbcon.php');
  include(BASE_PATH . 'admin/includes/header.php');
  include(BASE_PATH . 'admin/includes/topbar.php');
  include(BASE_PATH . 'admin/includes/sidebar.php');

?>
<!-- VALIDASI LOGIN -->
<?
$kd = $_SESSION['username'];
$query_login = "SELECT * FROM admin WHERE username = '$kd' ";
$query_login_run = mysqli_query($con, $query_login);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Laporan Penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header Start-->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h2 style=" width: 100%; border-bottom: 4px solid gray; padding-bottom: 5px;"><b>Laporan Penjualan</b></h2>
                <div class="row print">
                  <div class="col-md-12">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                      <table>
                        <tr>
                          <td><input type="date" name="date1" class="form-control" value="<?= $date; ?>"></td>
                          <td>&nbsp; - &nbsp;</td>
                          <td><input type="date" name="date2" class="form-control" value="<?= $date; ?>"></td>
                          <td> &nbsp;</td>
                          <td><input type="submit" name="submit" class="btn btn-primary" value="Tampilkan"></td>
                        </tr>
                      </table>
                    </form>
                  </div>
                  <div class="col-md-3">
                    <form action="exp_penjualan.php" method="POST">
                      <table>
                        <tr>
                          <td><input type="hidden" name="date1" class="form-control float-right" value="<?= $date1; ?>"></td>
                          <td><input type="hidden" name="date2" class="form-control" value="<?= $date2; ?>"></td>
                          <td><button type="submit" class="btn btn primary btn-sm btn-success float-rg"><i class="glyphicon glyphicon-save-file"></i> Export to Excel</button></td>
                          <td> &nbsp;</td>
                          <td><a href="" onclick="window.print()" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Cetak</a></td>
                        </tr>
                      </table>
                    </form>
                  </div>
                </div>
                <br>
                <br>
                <table class="table table-striped">
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>tanggal</th>
                    <th>qty</th>
                  </tr>
                  <?php 
                  if(isset($_POST['submit'])){
                  $result = mysqli_query($conn, "SELECT * FROM produksi WHERE terima = 1 and tanggal between '$date1' and '$date2'");
                  $no=1;
                  $total = 0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama_produk']; ?></td>
                      <td><?= $row['tanggal']; ?></td>
                      <td><?= $row['qty']; ?></td>
                    </tr>
                    <?php 
                    $total += $row['qty'];
                    $no++;
                  }

                  ?>
                  <tr>
                    <td colspan="4" class="text-right"><b>Total Jumlah terjual = <?= $total; ?></b></td>
                  </tr>
                  <?php 	} ?>
                </table>
              </div>
            </div>
          </div>
        </div>

    <!-- /.content-header END -->
    </div>
  </section>
</div>

<?php include(BASE_PATH . 'config/script.php'); ?>
<?php include(BASE_PATH . 'admin/includes/footer.php'); ?>