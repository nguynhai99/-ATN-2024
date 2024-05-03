<?php

$id = $_GET['id'];
$user_sql="SELECT * from tbl_user where ID='$id'";
$user_query=mysqli_query($con,$user_sql);
$user_row=mysqli_fetch_array($user_query);

$delete_bc="DELETE from `tbl_baocom` where `username`=".'\''.$user_row['username'].'\'';
$bc_query=mysqli_query($con,$delete_bc);

$hide_nv = "UPDATE `tbl_nhanvien` SET `TrangThai`='3' WHERE `ID`='$id'";
$hide_query=mysqli_query($con,$delete_sql);

$delete_sql = "DELETE FROM `tbl_user` WHERE ID='$id'";
$delete_query=mysqli_query($con,$delete_sql);
 if ($delete_query == true) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time = time();
    $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
    $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
    $time = str_replace($timeEng, $timeVie, $time);
    $sql = "SELECT * from tbl_user where ID='$id_admin'";
    $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`) VALUES ('$id_admin','5','$time')";
    $log_query = mysqli_query($con, $log_sql);
    echo '<script>window.location="index.php?module=ds-user"; alert("Xóa Thành Công");</script>';
 
 }
