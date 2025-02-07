<?php
@session_start();
include "koneksi.php";
if (@$_SESSION['username'])
    {
        if(@$_SESSION['type_user'] =="Admin" )  {header ("location:../admin/index.php");}
        elseif (@$_SESSION['type_user'] =="Kasir" )  {header ("location:../kasir/index.php");}

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="../Template/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <form class="form-signin" method="post">
                                        <?php
                                          if (@$_POST['masuk'])
                                         {
                                           include 'cek_login.php';
                                             }
                                         ?>
                                            <div class="form-floating mb-3">
                                            <input name="username" type="text" autofocus="" class="form-control">
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input name="password" type="password" class="form-control">
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-group text-center">
                                                 <input type="submit" name="masuk" class="btn btn-lg btn-primary btn-block" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../Template/js/scripts.js"></script>
    </body>
</html>
