<?php
$id = $_GET['id'];
$placeholder = "SELECT * from `tbl_nhanvien` where `ID`='$id' ";
$query_place = mysqli_query($con, $placeholder);
$place_row = mysqli_fetch_array($query_place);
if (isset($_POST['btn_addnews'])) {

    $batdau = $_POST['ns_datec'];
    $ketthuc = $_POST['ns_datect'];
    $trangthai = $_POST['ns_position'];
    $update_staff="INSERT INTO `tbl_quatrinhcongtac`(`id_nhanvien`, `batdau`, `ketthuc`, `trangthai`) VALUES ('$id','$batdau','$ketthuc','$trangthai')";
    $query = mysqli_query($con, $update_staff);
    if ($query == true) {

        echo '<script>window.location="index.php?module=ds-nv";alert("Sửa Thành Công. Quay lại danh sách nhân viên !");</script>';
    }
}

?>
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <div class="header-form">
            <h5 class="card-title">Sửa Thông Tin Quá Trình Công Tác </h5>
        </div>
        <div class="card-body">
            <form method="post">

                <div class="position-relative form-group"><label class="">Bắt đầu</label><input name="ns_datec" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Kết thúc</label><input name="ns_datect" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Trạng thái</label>
                <select name="ns_position" class="col-lg-3  form-control">
                        <option value="1">Đang công tác</option>
                        <option value="2">Bổ nhiệm</option>
                        <option value="3">Nghỉ việc</option>
                      
                    </select></div>
                <button type="submit" name="btn_addnews" class="mt-1 btn btn-success btn-update">Thêm</button>
            </form>
        </div>
    </div>
</div>