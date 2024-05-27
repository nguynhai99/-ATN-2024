<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = time();
$time = date('M', $time);
$timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
$time = str_replace($timeEng, $timeVie, $time);
$sql = "SELECT * from tbl_nhanvien where `ThangSinh`='$time' and `TrangThai` != '3' and `TrangThai` != '2' order by `NgaySinh` asc ";

$query = mysqli_query($con, $sql);
?>
<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Danh Sách Nhân Viên Sinh Nhật Tháng <?php echo $time ?> </h5>
            </div>
            <div class="card-body overflow-table">
                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <th scope="row "><?php echo $row['ID']; ?></th>
                                <td><span><?php echo $row['Ho']." ".$row['Ten'] ?></span></td>
                                <td><?php echo $row['NgaySinh']."/".$row['ThangSinh']."/".$row['NamSinh'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>