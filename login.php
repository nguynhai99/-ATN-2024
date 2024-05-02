<?php
session_start();
if (isset($_SESSION['user'])) {
    echo '<script>window.location="index.php?module=ds-nv";</script>';
}
include 'modules/connect.php';
if (isset($_POST['btn_login'])) {

    $taikhoan = $_POST['user'];
    $matkhau = md5($_POST['pass']);
    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$taikhoan' and `password`='$matkhau'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);
    $user = mysqli_fetch_assoc($query);

    if ($count > 0) {
        $_SESSION['user'] = $user['id'];
        echo '<script>window.location="index.php?module=ds-nv";</script>';
    } else {
        $_SESSION['err'] = 'Tài khoản hoặc mật khẩu không chính xác!';
        header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <LINK REL="SHORTCUT ICON" href="img/logo.png">
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <center>
            <div class="row justify-content-center box-login">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body login-css  p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                    <img src="img/image001.png">
                                </div>
                                <div class="col-lg-6 login-form">
                                    <div class="p-5">
                                        <form method="post" class="user">
                                            <div class="form-group">
                                                <input name="user" type="email" class="form-control form-control-user" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input name="pass" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <p style="text-align:center;color:red">
                                                <?php if (isset($_SESSION['err'])) {
                                                    echo $_SESSION['err'];
                                                } ?>
                                            </p>
                                            <button type="submit" name="btn_login" class="btn-success login-btn">
                                                Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </center>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>