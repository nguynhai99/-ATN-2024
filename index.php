<?php
session_start();
include 'modules/connect.php';
include 'functions/func.php';
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
/**/
include 'functions/check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản lý nhân sự</title>
    <LINK REL="SHORTCUT ICON" href="./img/logo.png">
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lobster&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,900&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">

    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>



<body id="page-top" class="sidebar-toggled">

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <header>
                    <?php include 'modules/header.php'; ?>
                </header>

                <?php include 'modules/nav_bar_2.php'; ?>

                <?php if ($phanquyen == 1) { ?>
                    <?php
                    $name_module = $_GET['module'];
                    ///
                    switch ($name_module) {
                        case "home-sk":
                            include('home.php');
                            break;
                        case "add-sk":
                            include('add_ev.php');
                            break;
                        case "ds-nv":
                            include('admin/list_nv.php');
                            break;
                        case "infor-nv":
                            include('admin/infor_detail_3.php');
                            break;
                        case "edit-nv":
                            include('admin/edit_staff.php');
                            break;
                        case "hidden-nv":
                            include('admin/delete_staff.php');
                            break;
                        case "add-nv":
                            include('admin/add_staff.php');
                            break;
                        case "ds-user":
                            include('admin/list_user.php');
                            break;
                        case "add-user":
                            include('admin/add_user.php');
                            break;
                        case "edit-user":
                            include('admin/edit_user.php');
                            break;
                        case "delete-user":
                            include('admin/delete_user.php');
                            break;
                        case "phongban":
                            include('admin/phongban.php');
                            break;
                        case "sinhnhat":
                            include('admin/sinhnhat.php');
                            break;
                        case "search":
                            include('admin/search.php');
                            break;
                        case "logs":
                            include('admin/log.php');
                            break;
                        case "co-an":
                            include('admin/baocom_1.php');
                            break;
                        case "khong-an":
                            include('admin/baocom_2.php');
                            break;
                        case "logs_food":
                            include('admin/log_food.php');
                            break;
                        case "search-food":
                            include('admin/search_food.php');
                            break;
                        case "logs_nghiphep":
                            include('admin/log_nghiphep.php');
                            break;
                        case "infor-user":
                            include('admin/infor_user.php');
                            break;
                        case "upload-ava":
                            include('admin/profile_ava.php');
                            break;
                        case "search-nghiphep":
                            include('admin/search_nghiphep.php');
                            break;
                        case "dmk-nv":
                            include('admin/dmk_nv.php');
                            break;
                        case "dmk-user":
                            include('nhanvien/dmk.php');
                            break;
                        case "change-social":
                            include('admin/change_social.php');
                            break;
                        case "imp-excel":
                            include('admin/import_excel.php');
                            break;
                        case "list-cc":
                            include('admin/main_list_cc.php');
                            break;
                        case "detail-cc":
                            include('admin/detail_cc.php');
                            break;
                        case "search-cc":
                            include('admin/search_cc.php');
                            break;
                        case "change-ttlh":
                            include('nhanvien/change_ttlh.php');
                            break;
                        case "top-late":
                            include('admin/top-late.php');
                            break;
                        case "list-bc":
                            include('admin/list_bc.php');
                            break;
                        case "add-bc":
                            include('admin/add_bc.php');
                            break;
                        case "delete-bc":
                            include('admin/delete_bc.php');
                            break;
                        default:
                            include('login.php');
                    }
                    ///
                    ?>
                <?php } ?>

                <?php if ($phanquyen == 2) { ?>
                    <?php
                    $name_module = $_GET['module'];
                    ///
                    switch ($name_module) {

                        case "home-sk":
                            include('home.php');
                            break;
                        case "ds-nv":
                            include('admin/list_nv.php');
                            break;
                        case "baocom":
                            include('nhanvien/baocom.php');
                            break;
                        case "search":
                            include('nhanvien/search.php');
                            break;
                        case "phongban":
                            include('nhanvien/phongban.php');
                            break;
                        case "xinnghi":
                            include('nhanvien/xinnghi.php');
                            break;
                        case "trangthaixinnghi":
                            include('nhanvien/trangthai.php');
                            break;
                        case "infor-nv":
                            include('nhanvien/infor_detail_3.php');
                            break;
                        case "infor-user":
                            include('admin/infor_user.php');
                            break;
                        case "upload-ava":
                            include('admin/profile_ava.php');
                            break;
                        case "infor-nv-detail":
                            include('nhanvien/infor_nv.php');
                            break;
                        case "dmk-nv":
                            include('nhanvien/dmk.php');
                            break;
                        case "change-social":
                            include('admin/change_social.php');
                            break;
                        case "bang-cong":
                            include('nhanvien/bang_cong.php');
                            break;
                        case "search-cc":
                            include('nhanvien/search_cc.php');
                            break;
                        case "change-ttlh":
                            include('nhanvien/change_ttlh.php');
                            break;
                        case "top-late":
                            include('nhanvien/top_late.php');
                            break;

                        default:
                            include('login.php');
                    }
                    ///
                    ?>
                <?php } ?>

                <?php if ($phanquyen == 3) { ?>
                    <?php
                    $name_module = $_GET['module'];
                    ///
                    switch ($name_module) {

                        case "home-sk":
                            include('home.php');
                            break;
                        case "ds-nv":
                            include('admin/list_nv.php');
                            break;
                        case "baocom":
                            include('nhanvien/baocom.php');
                            break;
                        case "search":
                            include('nhanvien/search.php');
                            break;
                        case "phongban":
                            include('nhanvien/phongban.php');
                            break;
                        case "xinnghi":
                            include('nhanvien/xinnghi.php');
                            break;
                        case "trangthaixinnghi":
                            include('nhanvien/trangthai.php');
                            break;
                        case "acp-yc":
                            include('nhanvien/acp_yc.php');
                            break;
                        case "del-yc":
                            include('nhanvien/del_yc.php');
                            break;
                        case "infor-nv":
                            include('nhanvien/infor_detail_3.php');
                            break;
                        case "dmk-nv":
                            include('nhanvien/dmk.php');
                            break;
                        case "infor-user":
                            include('admin/infor_user.php');
                            break;
                        case "upload-ava":
                            include('admin/profile_ava.php');
                            break;
                        case "change-social":
                            include('admin/change_social.php');
                            break;
                        case "change-ttlh":
                            include('nhanvien/change_ttlh.php');
                            break;
                        case "bang-cong":
                            include('nhanvien/bang_cong.php');
                            break;
                        case "search-cc":
                            include('nhanvien/search_cc.php');
                            break;
                        default:
                            include('login.php');
                    }
                    ///
                    ?>
                <?php } ?>


            </div>

        </div>
    </div>
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>
    <script src="js/sb-admin-2.min.js "></script>
    <script src="vendor/chart.js/Chart.min.js "></script>
    <script src="js/demo/chart-area-demo.js "></script>
    <script src="js/demo/chart-pie-demo.js "></script>

</body>

</html>