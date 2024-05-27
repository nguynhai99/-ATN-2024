<?php 
$id_user = intval($_SESSION['user']);
$get_user = getRecord("tbl_user","`id`=".$id_user,"`id`,`username`,`phongban`,`name`,`quyen`");
$phanquyen = $get_user['quyen'];
$username= $get_user['username'];
$name=$get_user['name'];
$id_admin= $get_user['id'];
$pb=$get_user['phongban'];

?>