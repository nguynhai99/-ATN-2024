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
    $search =$_GET['search'] ;
    $khongdau = convertToAscii($_GET['search']);
    $count_word = str_word_count($khongdau);


    if ($count_word == 0) {
        $sql = "SELECT * from tbl_nhanvien where `Ten` like '%$khongdau%' or `SDT` like '%$search%'  ";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
    } else if ($count_word == 1) {
        $pieces = explode(" ", $khongdau);
        $sql = "SELECT * from tbl_nhanvien where `Ten` like '%$khongdau%'  ";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
    } else if ($count_word == 2) {
        $pieces = explode(" ", $khongdau);
        $sql = "SELECT * from tbl_nhanvien where `SDT` like '%$pieces[1]%' or `Ten` like '%$pieces[1]%' and `Ho` like " . "'" . "%" . $pieces[0] . "%" . "'";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
    } else if ($count_word == 3) {
        $pieces = explode(" ", $search);
        $sql = "SELECT * from tbl_nhanvien where `SDT` like '%$pieces[2]%' or `Ten` like '%$pieces[2]%' and `Ho` like " . "'" . "%" . $pieces[0] . " " . $pieces[1] . "%" . "'";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);

    }else if ($count_word == 4) {
        $pieces = explode(" ", $search);
        $sql = "SELECT * from tbl_nhanvien where `SDT` like '%$pieces[3]%' or `Ten` like '%$pieces[3]%' and `Ho` like " . "'" . "%" . $pieces[0] . " " . $pieces[1]." ". $pieces[2] . "%" . "'";
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
                    <?php include '../modules/head-search.php'; ?>
                </header>

                <?php include '../modules/nav-bar-search.php'; ?>
                    <div class="container-fluid ">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card list-nv">
                                <div class=" header-form">
                                    <h5 class="card-title">Danh Sách Nhân Viên</h5>
                                </div>
                                <div class="card-body overflow-table">
                                    <thead>
                                        <?php if ($num > 0) {
                                            echo $num . " kết quả trả về với từ khóa <b>" . $search . "</b>";
                                            echo '<table class="mb-0 custom-table">';
                                        ?>
                                            <tr>
                                                <!-- <th></th> -->
                                                <th>ID</th>
                                                <!-- <th>Mã Chấm Công</th> -->
                                                <th>Họ Tên</th>
                                                <th>Phòng Ban</th>
                                                <th>Số điện thoại</th>
                                                <th>Mail Cá Nhân</th>

                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($query)) {
                                                $pb_sql = "SELECT TenPB from tbl_phongban where ID=" . $row['PhongBan'];
                                                $pb_query = mysqli_query($con, $pb_sql);
                                                $cv_sql = "SELECT TenCV from tbl_chucvu where ID=" . $row['ChucVu'];
                                                $cv_query = mysqli_query($con, $cv_sql);
                                        ?>
                                            <tr>
                                                <th scope="row "><?php echo $row['ID']; ?></th>
                                                <td>
                                                    <a href="../index.php?module=infor-nv&id=<?php echo $row['ID']; ?>">
                                                        <?php echo $row['Ho'] . " " . $row['Ten'] ?>
                                                    </a>
                                                </td>
                                                <?php while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                                                    <td><span><?php echo $pb_row['TenPB'] ?></span></td>
                                                <?php } ?>
                                                <td>
                                                    <a href="tel:<?php echo $row['SDT'] ?>">
                                                        <?php echo  $row['SDT'] ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="mailto:<?php echo $row['Mail'] ?>">
                                                        <?php echo $row['Mail'] ?>
                                                    </a>
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