<?php
$id = $_GET['id'];
$sql = "SELECT * From tbl_nhanvien where ID=$id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$cv_sql = "SELECT TenCV FROM tbl_chucvu where ID=" . $row['ChucVu'];
$cv_query = mysqli_query($con, $cv_sql);
$cv_row = mysqli_fetch_array($cv_query);
?>
<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card ">
            <div class="card-body">
                <h4 class="card-title">Hồ Sơ Cá Nhân</h4>
                <div class="row">
                    <!-- row 1 -->


                    <div class="col-lg-12 css-infor">
                        <p>Họ Và Tên</p>
                        <p class="infor-lc"><?php echo $row['HoTen'] ?></p>
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
                        <p>Vị Trí Công Việc</p>
                        <p class="infor-lc"><?php echo $cv_row['TenCV'] ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Sinh</p>
                        <p class="infor-lc"><?php echo date('d/m/Y', strtotime($row['NgaySinh'])); ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Số Điện Thoại</p>
                        <p class="infor-lc"><?php echo $row['SDT']; ?></p>
                        <hr>
                    </div>
                    <hr>
                    <div class="col-lg-12 css-infor">
                        <p>Mail Cá Nhân</p>
                        <p class="infor-lc">
                            <?php if ($row['Mail'] == "") {
                                echo "Không có";
                            } else echo $row['Mail']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Số Chứng Minh Thư Nhân Dân</p>
                        <p class="infor-lc"><?php echo $row['CMTND']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Thường Trú</p>
                        <p class="infor-lc"><?php echo $row['ThuongTru']; ?></p>
                        <hr>
                    </div>

                    <!-- row 2 -->


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
                        <p>Mã Chấm Công</p>
                        <p class="infor-lc"><?php echo $row['MaCC']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Số Thẻ Nhân Viên</p>
                        <p class="infor-lc"><?php echo $row['SoTheNV']; ?></p>
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
                    <hr>



                    <!-- row 3 -->

                    <div class="col-lg-12 css-infor">
                        <p>Loại Hợp Đồng</p>
                        <p class="infor-lc"><?php if ($row['LoaiHD'] == "") {
                                                echo "Không có";
                                            } else echo $row['LoaiHD']; ?></p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Vào Làm Việc</p>
                        <p class="infor-lc">
                            <?php if ($row['NgayVaoLV'] == '0000-00-00') {
                                echo 'Không có';
                            } else echo date('d/m/Y', strtotime($row['NgayVaoLV'])); ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Ngày Làm Việc Chính Thức</p>
                        <p class="infor-lc">
                            <?php if ($row['NgayLamCT'] == '0000-00-00') {
                                echo 'Thử Việc';
                            } else echo date('d/m/Y', strtotime($row['NgayLamCT'])); ?>
                        </p>
                        <hr>
                    </div>

                    <div class="col-lg-12 css-infor">
                        <p>Thời Điểm Bắt Đầu HĐLĐ</p>
                        <p class="infor-lc">
                            <?php if ($row['DenNgay'] == '0000-00-00') {
                                echo 'Không có';
                            } else echo date('d/m/Y', strtotime($row['DenNgay'])); ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Mã Số Thuế</p>
                        <p class="infor-lc"><?php echo $row['MaThue']; ?></p>
                        <hr>
                    </div>

                    <div class="col-lg-12 css-infor">
                        <p>Ghi Chú</p>
                        <p class="infor-lc"><?php echo $row['GhiChu'] ?></p>
                        <hr>
                    </div>


                    <!-- row 4 -->

                    <div class="col-lg-12 css-infor">
                        <p>Sơ Yếu Lý Lịch</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['SYLL'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Giấy Khai Sinh</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['GiayKS'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Giấy Khám Sức Khỏe</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['GiayKSK'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Chứng Minh Thư Nhân Dân</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['sCMTND'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Bằng</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['Bang'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Sổ Hộ Khẩu</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['SoHoKhau'] == 1) {
                                echo 'Có';
                            } else echo 'Không';
                            ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Chế Độ</p>
                        <p class="infor-lc">
                            <?php if ($row['CheDo'] == "") {
                                echo "Không có";
                            } else echo $row['CheDo']; ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-lg-12 css-infor">
                        <p>Trạng Thái</p>
                        <p class="infor-lc">
                            <?php
                            if ($row['status'] == '0') {
                                echo 'Thử việc';
                            } elseif ($row['status'] == '1') {
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