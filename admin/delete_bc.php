<?php
$id = $_GET['id'];
$bc_sql = "DELETE FROM `tbl_baocom` WHERE `ID`='$id'" ;
$bc_query = mysqli_query($con, $bc_sql);

if ($bc_query == true) {
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $time = time();
   $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
   $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
   $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
   $time = str_replace($timeEng, $timeVie, $time);
   echo '<script>window.location="index.php?module=list-bc"; alert("Đã xóa");</script>';
}
