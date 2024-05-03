<?php
$check_pass = "SELECT * from tbl_user where username='$username'";
$check_query = mysqli_query($con, $check_pass);
$check_row = mysqli_fetch_array($check_query);
if (isset($_POST['btn_change_social'])) {
    $skype = $_POST['ns_skype'];
    $fb = $_POST['ns_facebook'];
    $ins = $_POST['ns_instagram'];
    $gg = $_POST['ns_google'];
    $update_social = "UPDATE `tbl_user` SET `skype`='$skype',`fb`='$fb',`ins`='$ins',`google`='$gg' WHERE `username`='$username'";
    $update_query = mysqli_query($con, $update_social);
    if ($update_query == true) {
        echo '<script>window.location="index.php?module=infor-user"; alert("Đã Đổi Thông Tin Thành Công");</script>';
    }
}



?>

<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card social-form ">
            <div class=" header-form">
                <h5 class="card-title">Social Network</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="position-relative form-group">
                        <label class="">Skype</label>
                        <input name="ns_skype" type="text" class="form-control" value="<?php echo $check_row['skype'] ?>" placeholder="Nhập Skype Name của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Facebook</label>
                        <input name="ns_facebook" type="text" class="form-control" value="<?php echo $check_row['fb'] ?>" placeholder="Nhập đường dẫn đến trang cá nhân của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Instagram</label>
                        <input name="ns_instagram" type="text" class="form-control" value="<?php echo $check_row['ins'] ?>" placeholder="Nhập đường dẫn đến trang cá nhân của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Google</label>
                        <input name="ns_google" type="text" class="form-control" value="<?php echo $check_row['google'] ?>" placeholder="Nhập mail của bạn">
                    </div>

                    <button type="submit" name="btn_change_social" class="mt-1 btn btn-success btn-update">Đặt Lại</button>
                </form>
                <div class="tut-social">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <p style="font-weight:bold;color:red;margin-top:10px;">* Hướng dẫn lấy Skype Name</p>
                        </div>
                        <div class="col-lg-3">
                            <img src="img/skype1_2.png" alt="">
                        </div>
                        <div class="col-lg-3">
                            <img src="img/skype2_2.png" alt="">
                        </div>
                        <div class="col-lg-3">
                            <img src="img/skype3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>