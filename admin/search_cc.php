<?php
session_start();
include '../modules/connect.php';
include '../functions/func.php';
include '../functions/simple_html_dom.php';
if (!isset($_SESSION['user'])) {
    header('location: login');
}
/**/
include '../functions/check.php';
$pb_sql = "SELECT * from tbl_phongban";
$pb_query = mysqli_query($con, $pb_sql);
$search = addslashes($_GET['search']);
$count_word = str_word_count($search);

//echo $count_word;die;

if ($count_word == 0) {
    $sql = "SELECT DISTINCT  * from `tbl_chamcong` where  `Thang` like '%$search%' group by `HoTen`,`Ngay`  ";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
} else if ($count_word == 1) {
    $sql = "SELECT DISTINCT  * from `tbl_chamcong` where  `HoTen` like '%$search%' group by `Ngay` ";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
} else if ($count_word == 2) {
    $piece = explode("tháng ", $search);
    $sql = "SELECT DISTINCT  * from `tbl_chamcong` where `HoTen` like '%$search%' and `Thang` like '%$piece[1]%' group by `HoTen`,`Ngay`";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
} else {
    $piece = explode(" tháng ", $search);
    $sql = "SELECT DISTINCT  * from `tbl_chamcong` where `HoTen` like '%$piece[0]%' and `Thang` like '%$piece[1]%' group by `HoTen`,`Ngay`";
    $query = mysqli_query($con, $sql);
    $num = mysqli_num_rows($query);
}



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
    <LINK REL="SHORTCUT ICON" href="../img/logo.png">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lobster&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,900&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <header>
                    <div class="header-main  d-sm-block ">
                        <div class="header-content">
                            <div class="info-head">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-8 left-header">
                                            <p>Xin chào, <?php echo $name ?></p>
                                        </div>
                                        <div class="col-lg-6 col-4 right-header">
                                            <div class="row">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item dropdown-1 no-arrow ">
                                                        <a class=" custom-header nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class=" acc-css">Tài Khoản </span>
                                                            <i class="fas fa-users" style="color: #31af49"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="../infor-user">
                                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Thông Tin Chi Tiết
                                                            </a>

                                                            <a class="dropdown-item" href="../dmk-user">
                                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Đổi Mật Khẩu
                                                            </a>

                                                            <a class="dropdown-item" href="../logout.php">
                                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Đăng Xuất
                                                            </a>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-none d-sm-block img-header">
                                <a href="ds-nv">
                                    <img class="d-none d-sm-block" src="../img/image001.png">
                                </a>
                            </div>


                        </div>
                    </div>
                </header>

                <nav class="navbar navbar-expand-lg navbar-light custom-nav">
                    <div class="container">
                        <div class="nav-home has-sub">
                            <a class="navbar-brand mrg-home" href="../ds-nv">
                                <i class="fas fa-home"></i>
                                <span> Trang Chủ</span>
                            </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown has-sub ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-users"></i>
                                        <span>Nhân Viên</span>
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../ds-nv">
                                            <span>Danh Sách Nhân Viên </span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../add-nv">
                                            <span>Thêm Nhân Viên</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../ds-user">
                                            <span>
                                                Danh Sách User
                                            </span>

                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../add-user ">
                                            <span>Thêm User</span>
                                        </a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown has-sub">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Phòng Ban </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                        while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                                            <a class="dropdown-item" href="../phongban&id=<?php echo $pb_row['ID'] ?>">
                                                <span>
                                                    <?php echo $pb_row['TenPB']; ?>
                                                </span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                        <?php } ?>

                                    </div>
                                </li>

                                <li class="nav-item has-sub">
                                    <a class="nav-link" href="../sinhnhat">
                                        <i class="fas fa-birthday-cake"></i>
                                        <span>
                                            Sinh Nhật
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown has-sub">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-calendar-check"></i>
                                        <span> Chấm Công </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../imp-excel">
                                            <span>Nhập File Chấm Công</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../list-cc">
                                            <span>
                                                Bảng Công
                                            </span>
                                        </a>
                                    </div>
                                </li>



                                <li class="nav-item dropdown has-sub">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-hamburger"></i>
                                        <span> Báo Cơm </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../khong-an">
                                            <span>Không Ăn</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../logs_food">
                                            <span>
                                                Lịch Sử Báo Cơm
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <!-- <li class="nav-item has-sub">
            <a class="nav-link" href="index.php?module=logs"> <i class="fas fa-history"></i>
              <span>
                Lịch Sử
              </span>
            </a>
          </li> -->
                                <li class="nav-item has-sub">
                                    <a class="nav-link" href="../logs_nghiphep"><i class="far fa-calendar-alt"></i>
                                        <span>
                                            Nghỉ Phép
                                        </span>
                                    </a>
                                </li>


                                <li>
                                    <form method="get" action="search" class=" form-inline">
                                        <div class="input-group">

                                            <input name="search" type="text" class="form-control custom-searchbar-admin border-0 small " placeholder="Nhập Họ Tên, Số điện thoại,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" style="margin-top:1px;" type="submit">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid ">
                    <div class="col-lg-12">
                        <div class="main-card mb-3 card list-nv">
                            <div class=" header-form">
                                <h5 class="card-title">Bảng Công</h5>
                            </div>
                            <form method="get" action="" class=" form-inline   navbar-search">
                                <div class="input-group">

                                    <input name="search" type="text" class="form-control searchbar-cc border-0 small " placeholder="Nhập Họ Tên, Tháng,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="card-body overflow-table">
                                <thead>
                                    <?php if ($num > 0) {
                                        echo $num . " kết quả trả về với từ khóa <b>" . $search . "</b>";
                                        echo '<table class="mb-0  custom-table">';
                                    ?>
                                        <tr>

                                            <th>Tháng</th>
                                            <th>Họ Tên</th>
                                            <th>Phòng Ban</th>
                                            <th>Ngày</th>
                                            <th>Giờ Vào</th>
                                            <th>Giờ Ra</th>
                                            <th>Vào Trễ</th>
                                            <th>Ra Sớm</th>

                                        </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                        <tr>
                                            <th scope="row "><?php echo $row['Thang']; ?></th>
                                            <td>
                                                <?php echo $row['HoTen'] ?>
                                            </td>
                                            <td><span><?php echo $row['PhongBan'] ?></span></td>
                                            <td>
                                                <?php echo  $row['Ngay'] ?>
                                            </td>
                                            <td>
                                                <?php if ($row['GioVao'] == 'null') {
                                                    echo " ";
                                                } else echo $row['GioVao'] ?>
                                            </td>
                                            <td>
                                                <?php if ($row['GioRa'] == 'null') {
                                                    echo " ";
                                                } else echo $row['GioRa'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['GioTre'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['GioSom'] ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } ?>


                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel ">Ready to Leave?</h5>
                    <button class="close " type="button " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">×</span>
                    </button>
                </div>
                <div class="modal-body ">Select "Logout " below if you are ready to end your current session.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary " type="button " data-dismiss="modal ">Cancel</button>
                    <a class="btn btn-primary " href="login.html ">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js "></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js "></script>
    <script src="../js/sb-admin-2.min.js "></script>
    <script src="../vendor/chart.js/Chart.min.js "></script>
    <script src="../js/demo/chart-area-demo.js "></script>
    <script src="../js/demo/chart-pie-demo.js "></script>
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>
    <script src="js/sb-admin-2.min.js "></script>
    <script src="vendor/chart.js/Chart.min.js "></script>
    <script src="js/demo/chart-area-demo.js "></script>
    <script src="js/demo/chart-pie-demo.js "></script>
</body>

</html>