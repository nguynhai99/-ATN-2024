<?php
$host="localhost";
$username="root";
$password="";
$database="qlns_db";
$con=mysqli_connect($host,$username,$password,$database);
if(!$con){
    echo "that bai";
}
?>