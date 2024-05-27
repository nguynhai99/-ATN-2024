<?php
$id=$_GET['id'];
$acp_sql="UPDATE `tbl_xinnghi` SET `status`='1' where ID=".$id;
$acp_query=mysqli_query($con,$acp_sql);
echo '<script>window.location="trangthai.php"; alert("Xác nhận !");</script>';
?>