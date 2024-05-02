<?php
// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
include 'modules/connect.php';

$rs_sql = "UPDATE `tbl_baocom` SET `status`= '0'";

$rs_query = mysqli_query($con, $rs_sql);

$a1="UPDATE `tbl_baocom` SET `status` = '1' WHERE `tbl_baocom`.`ID` = 36";
$a2="UPDATE `tbl_baocom` SET `status` = '1' WHERE `tbl_baocom`.`ID` = 39";
$a3="UPDATE `tbl_baocom` SET `status` = '1' WHERE `tbl_baocom`.`ID` = 41";
$auto1 = mysqli_query($con, $a1);
$auto1 = mysqli_query($con, $a2);
$auto1 = mysqli_query($con, $a3);
?>