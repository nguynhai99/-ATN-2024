<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = time();
$time = date('M', $time);
$timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
$time = str_replace($timeEng, $timeVie, $time);
$sql = "SELECT * from tbl_nhanvien where ThangSinh='$time' and `status` != '3' ";
$query = mysqli_query($con, $sql);
?>
<div class="col-md-12">
    <div class="main-card mb-3 card box-event">
        <div class="header-form">
            <h5 class="card-title">Bảng Tin</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-around">
                <div class="col-lg-8 col-xs-12">
                    <div class="col-lg-12 col-xs-12 ev-title">
                        <div class="col-lg-12">
                            <h5 class="box-title">Sự Kiện Mới</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="col-lg-12 col-xs-12 ev-title">
                        <div class="col-lg-12">
                            <h5 class="box-title">Nhân Viên Sinh Nhật Tháng <?php echo $time ?></h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <table class=" custom-table">
                            <thead>
                                <tr>
                                    <th>Họ Tên</th>
                                    <th>Phòng Ban</th>
                                    <th>Ngày Sinh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($query)) {
                                    $pb_sql = "SELECT TenPB from tbl_phongban where ID=" . $row['PhongBan'];
                                    $pb_query = mysqli_query($con, $pb_sql);
                                ?>
                                    <tr>
                                        <td><span><?php echo $row['HoTen'] ?></span></td>

                                        <?php while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                                            <td><span><?php echo $pb_row['TenPB'] ?></span></td>
                                        <?php } ?>

                                        <td><?php echo date('d/m/Y', strtotime($row['NgaySinh'])); ?></td>

                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>