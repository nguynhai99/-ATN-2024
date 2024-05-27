<?php
if (isset($_POST['btn_addstaff'])) {
    $username = $_POST['ns_username'];
    $password = $_POST['ns_password'];
    $fullname = $_POST['ns_fullname'];
    // $skype = $_POST[''];
    // $fb = $_POST[''];
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
    if ($username == "" || $password == "" || $Ho == "" || $Ten == "" || $fullname == "") {
        $_SESSION['err'] = 'Mời nhập đầy đủ thông tin';
    } else {
        $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username'";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['err'] = 'Tài khoản đã tồn tại !';
            echo '<script>window.location="./index.php?module=add-nv";</script>';
        } else {
            $add_staff = "INSERT INTO `tbl_nhanvien`( `username`, `password`,  `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `SDT`, `Mail`, `GioiTinh`, `CMTND`, `NgayCap`, `NoiCap`, `ThuongTru`, `PhongBan`, `ChucVu`, `LoaiHD`, `NgayVaoLV`, `NgayLVCT`, `BDHDLD`, `TrangThai`, `quyen`) 
            VALUES ('$username','" . md5($password) . "','$Ho','$Ten','$NgaySinh','$ThangSinh','$NamSinh','$SDT','$Mail','$GioiTinh','$CMTND','$NgayCap','$NoiCap','$ThuongTru','$PhongBan','$ChucVu','$LoaiHD','$NgayVaoLV','$NgayLVCT','$ThoiDiemBDHDLD','0',$Quyen)";
          
            $query = mysqli_query($con, $add_staff);
            if ($query == true) {
                unset($_SESSION['err']);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
                $add_user_qr = mysqli_query($con, "INSERT INTO `tbl_user`(`username`, `password`, `phongban`, `name`,`google`, `quyen`) VALUES ('$username','" . md5($password) . "','$PhongBan','$fullname','$Mail','$Quyen')");

              

                $infor_sql = "INSERT INTO `tbl_images`(`username`, `name`,`images`, `status`) Values ('$username','$fullname','profile-ava.jpg','1')";
                $infor_query = mysqli_query($con, $infor_sql);

                $bc_sql = "INSERT INTO `tbl_baocom`(`username`, `HoTen`, `status`) Values ('$username','$fullname','0')";
                $bc_query = mysqli_query($con, $bc_sql);
                echo '<script>window.location="./index.php?module=ds-nv";alert("Thêm Thành Công. Quay lại danh sách nhân viên !");</script>';
            }
        }
    }
}
?>

<div class="col-md-12">
    <div class="main-card mb-3 card">
        <div class="header-form">
            <h5 class="card-title">Thêm Hồ Sơ Nhân Viên</h5>
        </div>
        <div class="card-body">
            <form method="post">
                <p style="color:red">
                    <?php if (isset($_SESSION['err'])) {
                        echo $_SESSION['err'];
                    } ?>
                </p>
                <h4>User</h4>
                <div class="position-relative form-group"><label class="">Tài Khoản</label><input name="ns_username" type="email" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Mật Khẩu</label><input name="ns_password" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Họ Và Tên</label><input name="ns_fullname" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Phòng Ban</label><select name="ns_partment" id="exampleSelect" class="form-control">
                        <option value="1">Ban Giám Đốc</option>
                        <option value="2">HC KT</option>
                        <option value="3">Kỹ Thuật</option>
                        <option value="4">Traffic News</option>
                        <option value="5">FB Hải</option>
                        <option value="6">FB Huyền</option>
                        <option value="7">Kinh Doanh SanHo</option>
                        <option value="8">FB Hằng</option>
                        <option value="9">Video</option>
                        <option value="10">Marketing</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Quyền</label><select name="ns_pmt" id="exampleSelect" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Nhân Viên</option>
                        <option value="3">Trưởng Bộ Phận</option>
                    </select></div>
                <h4>Thông Tin Cơ Bản</h4>
                <div class="position-relative form-group"><label class="">Họ Và Tên Đệm</label><input name="ns_firstname" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Tên</label><input name="ns_lastname" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Số Điện Thoại</label><input name="ns_phone" type="text" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Sinh</label>
                    <select name="ns_day" id="exampleSelect" class="form-control">
                        <?php
                        for ($i = 1; $i < 32; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Tháng Sinh</label>
                    <select name="ns_month" id="exampleSelect" class="form-control">
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo '<option value="' . $i . '">' . 'Tháng ' . $i . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Năm Sinh</label>
                    <select name="ns_year" id="exampleSelect" class="form-control">
                        <option>- Year -</option>
                        <?php
                        for ($i = 2000; $i > 1976; $i--) {
                            echo '<option value="' . $i . '">' . 'Tháng ' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group"><label class="">Giới Tính</label><select name="ns_sex" id="exampleSelect" class="form-control">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Email</label><input name="ns_mail" type="email" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Chứng Minh Thư Nhân Dân</label><input name="ns_idcard" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Cấp</label><input name="ns_idpvd" type="date" class="col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Nơi Cấp</label><input name="ns_idlpvd" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Thường Trú</label><input name="ns_idaddr" type="text" class=" form-control"></div>

                <div class="position-relative form-group"><label class="">Vị Trí Công Việc</label><select name="ns_position" class="form-control">
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


                <div class="position-relative form-group"><label class="">Loại Hợp Đồng </label><input name="ns_lhd" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Vào Làm Việc</label><input name="ns_datec" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Vào Làm Việc Chính Thức</label><input name="ns_datect" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Thời Điểm Bắt Đầu Hợp Đồng Lao Động</label><input name="ns_dateh" type="date" class=" col-lg-3 form-control"></div>
                <button type="submit" name="btn_addstaff" class="mt-1 btn btn-secondary" style="background-color: #31af49;border-color:#31af49">Thêm</button>
            </form>
        </div>
    </div>
</div>
</div>