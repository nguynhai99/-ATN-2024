<?php


if (isset($_POST['btn_gd'])) {
    $title = $_POST['ns_title'];
    $des = $_POST['ns_des'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time = time();
    $time = date('\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
    $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
    $time = str_replace($timeEng, $timeVie, $time);
    $xn_sql = "INSERT INTO `tbl_xinnghi`(`account`, `username`, `phongban`, `title`, `description`, `time`, `status`) 
    VALUES ('$username','$name','$pb','$title','$des','$time','0')";
    $xn_query = mysqli_query($con, $xn_sql);
    if ($xn_query == true) {
        echo '<script>window.location="index.php?module=trangthaixinnghi"; alert("Gửi đơn thành công . Xin mời kiểm tra tình trạng trọng mục Trạng Thái");</script>';
    }
}
?>
<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Đơn Xin Nghỉ </h5>
            </div>
            <div class="card-body">
                <form method="POST">

                    <div class="position-relative form-group"><label class="">Title </label><input placeholder="VD: Đơn xin nghỉ ngày ... tháng ... năm " name="ns_title" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label class="">Nội Dung</label></br><textarea style="width:100%;min-height:200px" name="ns_des"></textarea></div>
                    <button type="submit" name="btn_gd" class="mt-1 btn btn-success btn-update">Gửi</button>
                </form>

            </div>
        </div>
    </div>
</div>