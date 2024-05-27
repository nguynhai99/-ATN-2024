<?php
$infor_sql = "SELECT * from `tbl_nhanvien` where `username`='$username'";
$infor_query = mysqli_query($con, $infor_sql);
$row = mysqli_fetch_array($infor_query);
if (isset($_POST['btn_change_social'])) {
    $ten1 = $_POST['ns_ten1'];
    $sdt1 = $_POST['ns_sdt1'];
    $ten2 = $_POST['ns_ten2'];
    $sdt2 = $_POST['ns_sdt2'];
    $update_social = "UPDATE `tbl_nhanvien` SET `TenNT1`='$ten1',`SDTnt1`='$sdt1',`TenNT2`='$ten2',`SDTnt2`='$sdt2' WHERE `username`='$username'";

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
                <h5 class="card-title">Đổi thông tin liên hệ khác</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="position-relative form-group">
                        <label class="">Họ và Tên:</label>
                        <input name="ns_ten1" type="text" class="form-control" value="<?php echo $row['TenNT1'] ?>" placeholder="Nhập Skype Name của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Số điện thoại:</label>
                        <input name="ns_sdt1" type="text" class="form-control" value="<?php echo $row['SDTnt1'] ?>" placeholder="Nhập đường dẫn đến trang cá nhân của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Họ và Tên:</label>
                        <input name="ns_ten2" type="text" class="form-control" value="<?php echo $row['TenNT2'] ?>" placeholder="Nhập đường dẫn đến trang cá nhân của bạn">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Số điện thoại:</label>
                        <input name="ns_sdt2" type="text" class="form-control" value="<?php echo $row['SDTnt2'] ?>" placeholder="Nhập mail của bạn">
                    </div>

                    <button type="submit" name="btn_change_social" class="mt-1 btn btn-success btn-update">Cập Nhật</button>
                </form>
            </div>
        </div>

    </div>

</div>