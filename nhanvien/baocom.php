<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$bc_time = time();
$bc_time = date('H', $bc_time);
$bc_timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$bc_timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
$bc_time = str_replace($bc_timeEng, $bc_timeVie, $bc_time);
$time = time();
$time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
$time = str_replace($bc_timeEng, $bc_timeVie, $time);
$status_bc = mysqli_fetch_array(mysqli_query($con, "SELECT * from tbl_baocom where `username`='$username'"));
if (isset($_POST['btn_acp'])) {
    $bc_sql = "UPDATE `tbl_baocom` SET `status`= '1' WHERE `username`='$username'"; 
    $bc_query = mysqli_query($con, $bc_sql); 
    if ($bc_query == true) {

        // $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`,`activ`) VALUES ('$id_admin','8','$time','1')";  
        // $log_query = mysqli_query($con,$log_sql);

        echo '<script>window.location="index.php?module=ds-nv"; alert("Đã Báo Cơm ! Nếu bạn muốn báo lại . Hãy vào báo lại trước 9 giờ !");</script>';
    }
}
if (isset($_POST['btn_del'])) {
    $bc_sql = "UPDATE `tbl_baocom` SET `status`= '0' WHERE `username`='$username'";
    $bc_query = mysqli_query($con, $bc_sql);
    if ($bc_query == true) {
        // date_default_timezone_set('Asia/Ho_Chi_Minh');

        // $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`,`activ`) VALUES ('$id_admin','9','$time','1')";
        // $log_query = mysqli_query($con, $log_sql);
        echo '<script>window.location="index.php?module=ds-nv"; alert("OK ! Nếu bạn muốn báo lại . Hãy vào báo lại trước 9 giờ !");</script>';
    }
}
$auto=time();
$auto_time=date('H:i:s', $auto);
if($auto_time>'9:00:00'){
    $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`,`activ`) VALUES ('$id_admin','9','$time','1')";
    $log_query = mysqli_query($con, $log_sql);
}
?>
<?php
if ($bc_time > 10 || $bc_time > 18 ) {
    if ($status_bc['status'] == 0) { ?>
        <div class="container-fluid ">
            <div class="col-lg-12">
                <div class="main-card mb-3 card list-nv">
                    <div class="card-body">
                        <form method="POST">
                            <?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $time = time();
                            $time = date('D ,\N\g\à\y d \T\h\á\n\g M', $time);
                            $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                            $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                            $time = str_replace($timeEng, $timeVie, $time);
                            ?>
                            <p class="cheetah">Trưa <?php echo $time; ?> bạn có muốn ăn cơm ở tầng 7 không ?</p>
                            <button type="submit" name="btn_acp" class="mt-1 btn-acp btn btn-success">Có <i class="far fa-smile-beam"></i></button></br>
                            <button type="submit" name="btn_del" class="mt-1 btn btn-del btn-danger">Không <i class="far fa-surprise"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    <?php if ($status_bc['status'] == 1) { ?>
        <div class="container-fluid ">
            <div class="col-lg-12">
                <div class="main-card mb-3 card list-nv">
                    <div class="card-body">
                        <form method="POST">
                            <?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $time = time();
                            $time = date('D ,\N\g\à\y d \T\h\á\n\g M', $time);
                            $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                            $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                            $time = str_replace($timeEng, $timeVie, $time);
                            ?>
                            <p class="cheetah"><?php echo $time; ?> , Bạn đã báo cơm rồi ! Bạn có muốn báo lại không ?</p>
                            <button type="submit" name="btn_acp" class="mt-1 btn-acp btn btn-success">Có <i class="far fa-smile-beam"></i></button></br>
                            <button type="submit" name="btn_del" class="mt-1 btn btn-del btn-danger">Không <i class="far fa-surprise"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    <?php }
} else if ($bc_time > 9 || $bc_time < 12) { ?>
    <div class="container-fluid ">
        <div class="col-lg-12">
            <div class="main-card mb-3 card list-nv">
                <div class="card-body">
                    <form method="POST">
                        <?php
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $time = time();
                        $time = date('D ,\N\g\à\y d \T\h\á\n\g M', $time);
                        $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                        $time = str_replace($timeEng, $timeVie, $time);
                        ?>
                        <p class="cheetah"><?php echo $time; ?> , Đã hết giờ báo cơm ! Hẹn gặp lại vào ngày mai !</p>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php } ?>