<?php
if (isset($_POST['btn_addstaff'])) {
    $username = $_POST['ns_username'];
    $password = $_POST['ns_password'];
    $fullname = $_POST['ns_fullname'];
    // $skype = $_POST[''];
    // $fb = $_POST[''];
    $MaCC = $_POST['ns_idcc'];
    $Ho = $_POST['ns_firstname'];
    $Ten = $_POST['ns_lastname'];
    $NgaySinh = $_POST['ns_day'];
    $ThangSinh = $_POST['ns_month'];
    $NamSinh = $_POST['ns_year'];
    $MaThue = $_POST['ns_pob'];
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
    $TenNT1 = $_POST['ns_namefa'];
    $SDTNT1 = $_POST['ns_phonefa'];
    $TenNT2 = $_POST['ns_namema'];
    $SDTNT2 = $_POST['ns_phonema'];
    $CheDo = $_POST['ns_opt'];
    $GhiChu = $_POST['ns_note'];
    $SYLL = $_POST['ns_infor'];
    $GiayKS = $_POST['ns_gks'];
    $GiayKSK = $_POST['ns_heath'];
    $sCMTND = $_POST['ns_identy'];
    $Bang = $_POST['ns_diploma'];
    $SoHoKhau = $_POST['ns_shk'];
    $Quyen = $_POST['ns_pmt']; 
    if ($username == "" || $password == "" || $Ho == "" || $Ten == "" || $fullname == "") {
        $_SESSION['err'] = 'Mời nhập đầy đủ thông tin';
    } else {
        $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username'";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['err'] = 'Tài khoản đã tồn tại !';
            echo '<script>window.location="./index.php?module=add-user";</script>';
        } else {
            $add_staff = "INSERT INTO `tbl_nhanvien`( `username`, `password`, `MaCC`, `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `MaThue`, `SDT`, `Mail`, `GioiTinh`, `CMTND`, `NgayCap`, `NoiCap`, `ThuongTru`, `PhongBan`, `ChucVu`, `LoaiHD`, `NgayVaoLV`, `NgayLVCT`, `BDHDLD`, `TenNT1`, `SDTnt1`, `TenNT2`, `SDTnt2`, `CheDo`, `SYLL`, `GiayKSK`, `sCMTND`, `Bang`, `SoHoKhau`, `GiayKS`, `TrangThai`, `GhiChu`, `quyen`) 
            VALUES ('$username','" . md5($password) . "','$MaCC','$Ho','$Ten','$NgaySinh','$ThangSinh','$NamSinh','$MaThue','$SDT','$Mail','$GioiTinh','$CMTND','$NgayCap','$NoiCap','$ThuongTru','$PhongBan','$ChucVu','$LoaiHD','$NgayVaoLV','$NgayLVCT','$ThoiDiemBDHDLD','$TenNT1','$SDTNT1','$TenNT2','$SDTNT2','$CheDo','$SYLL','$GiayKSK','$sCMTND','$Bang','$SoHoKhau','$GiayKS','0','$GhiChu',$Quyen)";
            echo $add_staff."<br>";
            $add_user_qr = "INSERT INTO `tbl_user`(`username`, `password`, `phongban`, `name`,`google`, `quyen`) VALUES ('$username','" . md5($password) . "','$PhongBan','$fullname','$Mail','$Quyen')";
            echo $add_user_qr;
            // $query = mysqli_query($con, $add_staff);
            if ($query == true) {
                unset($_SESSION['err']);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
     
              
                // echo '<script>window.location="./index.php?module=ds-nv";alert("Thêm Thành Công. Quay lại danh sách nhân viên !");</script>';
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20 </option>
                        <option value="21">21 </option>
                        <option value="22">22 </option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25 </option>
                        <option value="26">26 </option>
                        <option value="27">27 </option>
                        <option value="28">28 </option>
                        <option value="29">29 </option>
                        <option value="30">30 </option>
                        <option value="31">31 </option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Tháng Sinh</label>
                    <select name="ns_month" id="exampleSelect" class="form-control">
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Năm Sinh</label>
                    <select name="ns_year" id="exampleSelect" class="form-control">
                        <option>- Year -</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Mã Số Thuế</label><input name="ns_pob" type="text" class=" form-control"></div>
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


                <div class="position-relative form-group"><label class="">Mã Chấm Công</label><input name="ns_idcc" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Loại Hợp Đồng </label><input name="ns_lhd" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Vào Làm Việc</label><input name="ns_datec" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Ngày Vào Làm Việc Chính Thức</label><input name="ns_datect" type="date" class=" col-lg-3 form-control"></div>
                <div class="position-relative form-group"><label class="">Thời Điểm Bắt Đầu Hợp Đồng Lao Động</label><input name="ns_dateh" type="date" class=" col-lg-3 form-control"></div>


                <h4>Thông Tin Người Thân</h4>
                <div class="position-relative form-group"><label class="">Họ Và Tên </label><input name="ns_namefa" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Số Điện Thoại </label><input name="ns_phonefa" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Họ Và Tên</label><input name="ns_namema" type="text" class=" form-control"></div>
                <div class="position-relative form-group"><label class="">Số Điện Thoại </label><input name="ns_phonema" type="text" class=" form-control"></div>

                <h4>Giấy Tờ</h4>
                <div class="position-relative form-group"><label class="">Sơ Yếu Lý Lịch</label><select name="ns_infor" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Giấy Khai Sinh</label><select name="ns_gks" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Giấy Khám Sức Khỏe</label><select name="ns_heath" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Chứng Minh Thư Nhân Dân</label><select name="ns_identy" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Bằng Cấp</label><select name="ns_diploma" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label class="">Sổ Hộ Khẩu</label><select name="ns_shk" class="form-control">
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select></div>
                <div class="position-relative form-group"><label for="exampleText" class="">Chế Độ</label><textarea name="ns_opt" id="exampleText" class="form-control"></textarea></div>
                <div class="position-relative form-group"><label for="exampleText" class="">Ghi Chú</label><textarea name="ns_note" id="exampleText" class="form-control"></textarea></div>
                <button type="submit" name="btn_addstaff" class="mt-1 btn btn-secondary" style="background-color: #31af49;border-color:#31af49">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>