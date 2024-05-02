<?php
include 'modules/connect.php';
session_start();
unset($_SESSION['user']);
unset($_SESSION['err']);
header('location: login.php');
?>