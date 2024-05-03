<?php
$id = $_GET['id'];
$delete_sql = "UPDATE `tbl_nhanvien` SET `TrangThai`='3' WHERE `ID`='$id'";
$delete_query = mysqli_query($con, $delete_sql);
if ($delete_query == true) {
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $time = time();
   $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
   $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
   $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
   $time = str_replace($timeEng, $timeVie, $time);
   $sql = "SELECT * from tbl_nhanvien where `ID`='$id'";
   $query = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($query);

   $bc_sql = "DELETE FROM `tbl_baocom` WHERE `username`='" . $row['username'] . "'";
   $bc_query = mysqli_query($con, $bc_sql);

   $user_sql = "UPDATE `tbl_user` set `quyen`='4' where `username`='" . $row['username'] . "'";
   $user_query = mysqli_query($con, $user_sql);

   $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`) VALUES ('$id_admin','6','$time')";
   $log_query = mysqli_query($con, $log_sql);
   echo '<script>window.location="index.php?module=ds-nv"; alert("Đã Ẩn Nhân Viên");</script>';
}
