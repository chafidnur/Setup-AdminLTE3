<?php
session_start();
include ('../config/dbcon.php');
include(BASE_PATH . 'admin/includes/header.php');
?>

<div class="section">
    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>ADMIN LOGIN FORM</h5>
                    </div>
                    <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                        <form action="action/proses.php" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="user" required="" placeholder="Username">
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" required="" name="pass" placeholder="Password">
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <button type="submit" name="login_btn" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div><!-- .container-fluid -->
    </section>
</div>

<?php include(BASE_PATH . 'config/script.php'); ?>
<?php include(BASE_PATH . 'admin/includes/footer.php'); ?>
</div>
    