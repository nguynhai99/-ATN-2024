<?php
$id = $_GET['id'];
$placeholder = "SELECT * from `tbl_nhanvien` where `ID`='$id' ";
$query_place = mysqli_query($con, $placeholder);
$place_row = mysqli_fetch_array($query_place);
if (isset($_POST['btn_addnews'])) {

    $Ho = $_POST['ns_firstname'];
    $Ten = $_POST['ns_lastname'];
    $NgaySinh = $_POST['ns_day'];
    $ThangSinh = $_POST['ns_month'];
    $NamSinh = $_POST['ns_year'];
    $SDT = $_POST['ns_phone'];
    $Mail = $_POST['ns_mail'];
    $GioiTinh = $_POST['ns_sex'];
    $CMTND = $_POST['ns_idcard'];
    $NgayCap = $_POST['ns_idpvd'];
    $NoiCap = $_POST['ns_idlpvd'];
    $ThuongTru = $_POST['ns_idaddr'];
    $PhongBan = $_POST['ns_partment'];
    $ChucVu = $_POST['ns_position'];
    $LoaiHD = $_POST['ns_lhd'];
    $NgayVaoLV = $_POST['ns_datec'];
    $NgayLVCT = $_POST['ns_datect'];
    $ThoiDiemBDHDLD = $_POST['ns_dateh'];
    $Quyen = $_POST['ns_pmt'];
    $trangthai = $_POST['ns_stt'];

    $update_staff = "UPDATE `tbl_nhanvien` SET 
    `Ho`='$Ho',`Ten`='$Ten',`NgaySinh`='$NgaySinh',`ThangSinh`='$ThangSinh',`NamSinh`='$NamSinh'
    ,`SDT`='$SDT',`Mail`='$Mail',`GioiTinh`=$GioiTinh,`CMTND`='$CMTND',`NgayCap`='$NgayCap',
    `NoiCap`='$NoiCap',`ThuongTru`='$ThuongTru',`PhongBan`='$PhongBan',`ChucVu`='$ChucVu',`LoaiHD`='$LoaiHD',
    `NgayVaoLV`='$NgayVaoLV',`NgayLVCT`='$NgayLVCT',`BDHDLD`='$ThoiDiemBDHDLD',`TrangThai`='$trangthai',`quyen`='$Quyen' WHERE `ID`='$id'";


    $query = mysqli_query($con, $update_staff);
    if ($query == true) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = time();
        $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
        $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
        $time = str_replace($timeEng, $timeVie, $time);
        $sql = "SELECT * from tbl_user where ID='$id_admin'";
        $log_sql = "INSERT INTO `tbl_logs`(`id_admin`, `status`, `time`) VALUES ('$id_admin','4','$time')";
        $log_query = mysqli_query($con, $log_sql);
        echo '<script>window.location="index.php?module=ds-nv";alert("Sửa Thành Công. Quay lại danh sách nhân viên !");</script>';
    }
}

?>
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <div class="header-form">
            <h5 class="card-title">Sửa Thông Tin Nhân Viên </h5>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="position-relative form-group form-title"><label class="">Thông Tin Cơ Bản</label></div>
                <div class="position-relative form-group"><label class="">Họ Và Tên Đệm</label><input name="ns_firstname" value="<?php echo $place_row['Ho'] ?>" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Tên</label><input name="ns_lastname" value="<?php echo $place_row['Ten'] ?>" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Số Điện Thoại</label><input name="ns_phone" type="text" class="form-control" value="<?php echo $place_row['SDT'] ?>" placeholder="<?php $place_row['SDT'] ?>"></div>
                <div class="position-relative form-group"><label class="">Ngày Sinh</label>
                    <select name="ns_day" id="exampleSelect" class="form-control">
                        <option value="<?php echo $place_row['NgaySinh'] ?>"><?php echo $place_row['NgaySinh'] ?></option>
                        <?php
                        for ($i = 1; $i < 32; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Tháng Sinh</label>
                    <select name="ns_month" id="exampleSelect" class="form-control">
                        <option value="<?php echo $place_row['ThangSinh'] ?>">Tháng <?php echo $place_row['ThangSinh'] ?></option>
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo '<option value="' . $i . '">' . 'Tháng ' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Năm Sinh</label>
                    <select name="ns_year" id="exampleSelect" class="form-control">
                        <option value="<?php echo $place_row['NamSinh'] ?>"><?php echo $place_row['NamSinh'] ?></option>
                        <?php
                        for ($i = 2000; $i > 1976; $i--) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Giới Tính</label><select name="ns_sex" id="exampleSelect" class="form-control">
                        <option value="<?php echo $place_row['GioiTinh'] ?>">
                            <?php
                            if ($place_row['GioiTinh'] == '1') {
                                echo 'Nam';
                            } else {
                                echo 'Nữ';
                            }
                            ?>
                        </option>
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Email</label><input name="ns_mail" type="email" class=" form-control" value="<?php echo $place_row['Mail'] ?>" placeholder="<?php echo $place_row['Mail'] ?>"></div>
                <div class="position-relative form-group"><label class="">Chứng Minh Thư Nhân Dân</label><input name="ns_idcard" type="text" class=" form-control" value="<?php echo $place_row['CMTND'] ?>" placeholder="<?php echo $place_row['CMTND'] ?>"></div>
                <div class="position-relative form-group"><label class="">Ngày Cấp</label><input name="ns_idpvd" type="date" class="col-lg-3 form-control" value="<?php echo $place_row['NgayCap'] ?>" placeholder="<?php echo $place_row['NgayCap'] ?>"></div>
                <div class="position-relative form-group"><label class="">Nơi Cấp</label><input name="ns_idlpvd" type="text" class=" form-control" value="<?php echo $place_row['NoiCap'] ?>" placeholder="<?php echo $place_row['NoiCap'] ?>"></div>
                <div class="position-relative form-group"><label class="">Thường Trú</label><input name="ns_idaddr" type="text" class=" form-control" value="<?php echo $place_row['ThuongTru'] ?>" placeholder="<?php echo $place_row['ThuongTru'] ?>"></div>
                <div class="position-relative form-group"><label class="">Phòng Ban</label><select name="ns_partment" id="exampleSelect" class="form-control">
                        <?php
                        $nv_sql = "SELECT * from tbl_nhanvien where ID=$id ";
                        $nv_query = mysqli_query($con, $nv_sql);
                        $nv_row = mysqli_fetch_array($nv_query);

                        $pb_sql = "SELECT TenPB from tbl_phongban where ID=" . $nv_row['PhongBan'];
                        $pb_query = mysqli_query($con, $pb_sql);
                        $pb_row = mysqli_fetch_array($pb_query);
                        ?>
                        <option value="<?php echo $nv_row['PhongBan'] ?>"><?php echo $pb_row['TenPB'] ?></option>
                        <option value="2">HC KT</option>
                        <option value="3">Kỹ Thuật</option>
                        <option value="4">Traffic News</option>
                        <option value="5">FB Hải</option>
                        <option value="6">FB Huyền</option>
                        <option value="7">Kinh Doanh SanHo</option>
                        <option value="8">FB Hằng</option>
                        <option value="9">Video</option>
                        <option value="9">Marketing</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Vị Trí Công Việc</label><select name="ns_position" class="form-control">
                        <?php
                        $nvcv_sql = "SELECT * from tbl_nhanvien where ID=$id ";
                        $nvcv_query = mysqli_query($con, $nvcv_sql);
                        $nvcv_row = mysqli_fetch_array($nvcv_query);
                        $cv_sql = "SELECT TenCV from tbl_chucvu where ID=" . $nvcv_row['ChucVu'];
                        $cv_query = mysqli_query($con, $cv_sql);
                        $cv_row = mysqli_fetch_array($cv_query);
                        ?>
                        <option value="<?php echo $nv_row['ChucVu'] ?>"><?php echo $cv_row['TenCV'] ?></option>
                        <option value="2">Trưởng Bộ Phận</option>
                        <option value="3">Biên Tập Viên</option>
                        <option value="4">Admin Duyệt Bài</option>
                        <option value="5">Lập Trình PHP</option>
                        <option value="6">Google Ads</option>
                        <option value="7">Nhân Viên Kiểm Thử</option>
                        <option value="8">Kế Toán</option>
                        <option value="9">NV Kinh Doanh</option>
                        <option value="10">HCNS</option>
                        <option value="11">Content</option>
                        <option value="12">Video Editor</option>
                    </select></div>


                <div class="position-relative form-group"><label class="">Loại Hợp Đồng</label><input name="ns_lhd" type="text" class=" form-control" value="<?php echo $place_row['LoaiHD'] ?>" placeholder="<?php echo $place_row['LoaiHD'] ?>"></div>
                <div class="position-relative form-group"><label class="">Ngày Vào Làm Việc</label><input name="ns_datec" type="date" class=" col-lg-3 form-control" value="<?php echo $place_row['NgayVaoLV'] ?>" placeholder="<?php echo $place_row['NgayVaoLV'] ?>"></div>
                <div class="position-relative form-group"><label class="">Ngày Làm Việc Chính Thức</label><input name="ns_datect" type="date" class="col-lg-3 form-control" value="<?php echo $place_row['NgayLVCT'] ?>" placeholder="<?php echo $place_row['NgayLVCT'] ?>"></div>
                <div class="position-relative form-group"><label class="">Thời Điểm Bắt Đầu HĐLĐ</label><input name="ns_dateh" type="date" class="col-lg-3 form-control" value="<?php echo $place_row['BDHDLD'] ?>" placeholder="<?php echo $place_row['BDHDLD'] ?>"></div>


                <div class="position-relative form-group"><label class="">Status</label><select name="ns_stt" class="form-control">
                        <option value="<?php echo $place_row['TrangThai'] ?>">
                            <?php
                            if ($place_row['TrangThai'] == 0) {
                                echo 'Thử việc';
                            } elseif ($place_row['TrangThai'] == 1) {
                                echo 'Chính thức';
                            } else {
                                echo 'Nghỉ việc';
                            }
                            ?>
                        </option>

                        <option value="1">Chính Thức</option>
                        <option value="2">Nghỉ Việc</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Quyền</label><select name="ns_pmt" class="form-control">
                        <option value="<?php echo $place_row['quyen'] ?>">
                            <?php
                            if ($place_row['quyen'] == 1) {
                                echo 'Admin';
                            } elseif ($place_row['quyen'] == 2) {
                                echo 'Nhân Viên';
                            } else {
                                echo 'Trưởng bộ phận';
                            }
                            ?>
                        </option>

                        <option value="1">Admin</option>
                        <option value="2">Nhân viên</option>
                        <option value="3">Trưởng bộ phận </option>
                    </select></div>
                <button type="submit" name="btn_addnews" class="mt-1 btn btn-success btn-update">Sửa</button>
            </form>
        </div>
    </div>
</div>