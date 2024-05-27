<?php
$check_pass = "SELECT * from tbl_user where username='$username'";
$check_query = mysqli_query($con, $check_pass);
$check_row = mysqli_fetch_array($check_query);
if (isset($_POST['btn_addstaff'])) {
    $opassword = $_POST['ns_opassword'];
    $password = $_POST['ns_password'];
    $rpassword = $_POST['ns_rpassword'];
    if ($password == "" || $opassword == "" || $rpassword == "") {
        $_SESSION['err'] = 'Mời nhập đầy đủ mục yêu cầu';
    } else if (md5($opassword) != $check_row['password']) {
        $_SESSION['err'] = 'Mật Khẩu Cũ Không Khớp';
    } else {
        if ($rpassword != $password) {
            $_SESSION['err'] = 'Mật Khẩu Mới Không Khớp';
        } else {
            $change_sql = "UPDATE `tbl_user` SET `password`='" . md5($password) . "' where username='$username' ";
            $query = mysqli_query($con, $change_sql);
            if ($query == true) {
                unset($_SESSION['err']);
                // 
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
                // 
                $sql = "SELECT * from tbl_user where ID='$id_admin'";
                $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`) VALUES ('$id_admin','7','$time')";
                $log_query = mysqli_query($con, $log_sql);
                // 
                echo '<script>window.location="index.php?module=ds-nv"; alert("Đã Đổi Mật Khẩu Thành Công");</script>';
            }
        }
    }
}


?>

<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card pass-form ">
            <div class=" header-form">
                <h5 class="card-title">Đổi Mật Khẩu</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="position-relative form-group"><label class="">Mật Khẩu Cũ</label><input name="ns_opassword" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Mật Khẩu Mới</label><input name="ns_password" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Nhập Lại Mật Khẩu</label><input name="ns_rpassword" type="text" class="form-control"></div>
                    <p class="err-form" style="color:red">
                        <?php if (isset($_SESSION['err'])) {
                            echo $_SESSION['err'];
                        } ?>
                    </p>
                    <button type="submit" name="btn_addstaff" class="mt-1 btn btn-success btn-update">Đặt Lại</button>
                </form>
            </div>
        </div>
    </div>
</div>

