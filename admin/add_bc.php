<?php
if (isset($_POST['btn_addbc'])) {
    $username=$_POST['ns_username'];
    $fullname=$_POST['ns_fullname'];
    if ($username == "" || $fullname == "") {
        $_SESSION['err'] = 'Mời nhập đầy đủ thông tin';
    } else {
        $sql = "SELECT * FROM `tbl_baocom` WHERE `username`='$username'";
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['err'] = 'Tài khoản đã tồn tại !';
            echo '<script>window.location="./index.php?module=add-bc";</script>';
        } else {
            $bc_sql = "INSERT INTO `tbl_baocom`(`username`, `HoTen`, `status`) Values ('$username','$fullname','0')";
            $bc_query = mysqli_query($con, $bc_sql);
            if ($bc_query == true) {
                unset($_SESSION['err']);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
              

            
                echo '<script>window.location="./index.php?module=list-bc";alert("Thêm Thành Công. Quay lại danh sách báo cơm !");</script>';
            }
        }
    }
}
?>

<div class="col-md-12">
    <div class="main-card mb-3 card">
        <div class="header-form">
            <h5 class="card-title">Thêm Nhân Viên Báo Cơm</h5>
        </div>
        <div class="card-body">
            <form method="post">
                <p style="color:red">
                    <?php if (isset($_SESSION['err'])) {
                        echo $_SESSION['err'];
                    } ?>
                </p>
                <div class="position-relative form-group"><label class="">Tài Khoản</label><input name="ns_username" type="email" class="form-control"></div>
                <div class="position-relative form-group"><label class="">Họ Và Tên</label><input name="ns_fullname" type="text" class="form-control"></div>
                   
           <button type="submit" name="btn_addbc" class="mt-1 btn btn-secondary" style="background-color: #31af49;border-color:#31af49;font-weight:bold">Thêm</button>
            </form>
        </div>
    </div>
</div>
</div>