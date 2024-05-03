<?php
$infor_sql = "SELECT * from `tbl_nhanvien` where `username`='$username'";
$infor_query = mysqli_query($con, $infor_sql);
$row = mysqli_fetch_array($infor_query);

$ava_sql = "SELECT * from tbl_images where `username`='$username' AND `status`='1'";
$ava_query = mysqli_query($con, $ava_sql);
$ava_row = mysqli_fetch_array($ava_query);

$social_sql = "SELECT * from tbl_user where `username`='$username'";
$social_query = mysqli_query($con, $social_sql);
$social_row = mysqli_fetch_array($social_query);
?>

<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="main-card mb-3 card ">
                <div class=" header-form">
                    <h5 class="card-title-ava">Thông tin cơ bản</h5>
                </div>
                <div class="card-body">
                    <center>
                        <div class="pro5-ava">
                            <a href="index.php?module=upload-ava" title="Đổi Avatar">
                                <img src="img/<?php echo $ava_row['images'] ?>" alt="">
                            </a>
                            <p class="profile-name"><?php echo $name ?></p>
                            <p>Tên đăng nhập: <?php echo $username ?></p>
                            <p>
                                <a href="index.php?module=upload-ava" title="Đổi Avatar">
                                    <button class="btn btn-success btn-change-pass">Đổi Avatar</button>
                                </a>
                            </p>
                            <p>
                                <a href="index.php?module=dmk-nv">
                                    <button class="btn btn-success btn-change-pass">Đổi mật khẩu</button>
                                </a>
                            </p>
                        </div>
                    </center>
                </div>
            </div>

          
        </div>
        <div class="col-lg-8">
            <div class="main-card mb-3 card ">
                <div class=" header-form">
                    <h5 class="card-title-ava">Hồ Sơ Cá Nhân</h5>
                </div>
                <div class="card-body">
                    <div class="col-lg-12 css-infor">
                        <p>Họ Và Tên</p>
                        <p class="infor-lc"><?php echo $row['Ho'] . " " . $row['Ten'] ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <?php
                        $pb_sql = " SELECT TenPB FROM tbl_phongban where ID=" . $row['PhongBan'];
                        $pb_query = mysqli_query($con, $pb_sql);
                        $pb_row = mysqli_fetch_array($pb_query);
                        ?>
                        <p>Phòng Ban</p>
                        <p class="infor-lc"><?php echo $pb_row['TenPB'] ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <?php
                        $cv_sql = "SELECT TenCV FROM tbl_chucvu where ID=" . $row['ChucVu'];
                        $cv_query = mysqli_query($con, $cv_sql);
                        $cv_row = mysqli_fetch_array($cv_query);
                        ?>
                        <p>Vị Trí Công Việc</p>
                        <p class="infor-lc"><?php echo $cv_row['TenCV'] ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Sinh</p>
                        <p class="infor-lc"><?php echo $row['NgaySinh'] . " " . "/" . $row['ThangSinh'] . " " . "/" . $row['NamSinh'] ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Số Điện Thoại</p>
                        <p class="infor-lc"><?php echo $row['SDT']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Mail Cá Nhân</p>
                        <p class="infor-lc">
                            <?php if ($row['Mail'] == "") {
                                echo "Không có";
                            } else echo $row['Mail']; ?>
                        </p>
                        <hr>
                    </div>

                    <!-- cột 2 -->
                    <div class="col-lg-12 css-infor">
                        <p>Giới Tính</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['GioiTinh'] == 1) {
                                echo 'Nam';
                            } else echo 'Nữ';
                            ?>
                        </p>
                        <hr>
                    </div>
                    
                   
                    <div class="col-lg-12 css-infor">
                        <p>Số Chứng Minh Thư Nhân Dân</p>
                        <p class="infor-lc"><?php echo $row['CMTND']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Cấp</p>
                        <p class="infor-lc"><?php echo date('d/m/Y', strtotime($row['NgayCap'])); ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Nơi Cấp</p>
                        <p class="infor-lc"><?php echo $row['NoiCap']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Thường Trú</p>
                        <p class="infor-lc"><?php echo $row['ThuongTru']; ?></p>
                        <hr>
                    </div>
                    <!-- 3 -->
                    <div class="col-lg-12 css-infor">
                        <p>Loại Hợp Đồng</p>
                        <p class="infor-lc"><?php if ($row['LoaiHD'] == "") {
                                                echo "Không có";
                                            } else echo $row['LoaiHD']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Vào Làm Việc</p>
                        <p class="infor-lc"><?php if ($row['NgayVaoLV'] == '0000-00-00') {
                                                echo 'Không có';
                                            } else echo date('d/m/Y', strtotime($row['NgayVaoLV'])); ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Làm Việc Chính Thức</p>
                        <p class="infor-lc">
                            <?php if ($row['NgayLVCT'] == '0000-00-00') {
                                echo 'Thử Việc';
                            } else echo date('d/m/Y', strtotime($row['NgayLVCT'])); ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Thời Điểm Bắt Đầu HĐLĐ</p>
                        <p class="infor-lc">
                            <?php if ($row['BDHDLD'] == '0000-00-00') {
                                echo 'Không có';
                            } else echo date('d/m/Y', strtotime($row['BDHDLD'])); ?>
                        </p>
                        <hr>
                    </div>
                    

                    <!-- cột 4 -->
                   
                    <div class="col-lg-12 css-infor">
                        <p>Trạng Thái</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['TrangThai'] == '0') {
                                echo 'Thử việc';
                            } elseif ($row['TrangThai'] == '1') {
                                echo 'Chính thức';
                            } else echo 'Nghỉ việc';
                            ?>
                        </p>
                        <hr>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>