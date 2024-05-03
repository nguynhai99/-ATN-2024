<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('D , \N\g\à\y d \T\h\á\n\g M', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
                ?>
                <h5 class="card-title">Danh Sách Nhân Viên Không Ăn <?php echo $time ?> </h5>
            </div>
            <div class="card-body  overflow-table">
                <!-- <form method="post">
                    <button type="submit" name="btn_tc" class="bc-btn mt-1 bc-btn btn btn-success">Tổng Cắt</button>
                </form> -->

                <?php
                $num_sql = "SELECT status from tbl_baocom where status='0'";
                $num_query = mysqli_query($con, $num_sql);
                $nums = mysqli_num_rows($num_query);
                $num_sql_ca = "SELECT status from tbl_baocom where status='1'";
                $num_query_ca = mysqli_query($con, $num_sql_ca);
                $nums_ca = mysqli_num_rows($num_query_ca);
                if (isset($_POST['btn_rs'])) {
                    echo 'Tổng số người không ăn trưa là:' . " " . $nums."<br>";
                    echo 'Tổng số người có ăn trưa là:' . " " . $nums_ca;
                    $ka_sql = "SELECT * from tbl_baocom where status='0'";
                    $ka_query = mysqli_query($con, $ka_sql);
                    while ($row_ka = mysqli_fetch_array($ka_query)) {
                        $time = time();
                        $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                        $bc_timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        $bc_timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                        $time = str_replace($bc_timeEng, $bc_timeVie, $time);
                        $ka_ip = "INSERT into tbl_logs (`id_admin`,`HoTen`,`status`,`time`) values (" . "'" . $row_ka['ID'] . "'".","."'".$row_ka['HoTen'] ."'" . "," . "'" . "9" . "'" . "," . "'" . "$time" . "'" . ")";
                        $kaip_query = mysqli_query($con, $ka_ip);
          
                    }
                    $ca_sql = "SELECT * from tbl_baocom where status='1'";
                    $ca_query = mysqli_query($con, $ca_sql); 
                    while ($row_ca = mysqli_fetch_array($ca_query)) {
                        $time = time();
                        $time = date('H:i:s ,\N\g\à\y d \T\h\á\n\g M \N\ă\m Y', $time);
                        $bc_timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        $bc_timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                        $time = str_replace($bc_timeEng, $bc_timeVie, $time);
                        $ca_ip = "INSERT into tbl_logs (`id_admin`,`HoTen`,`status`,`time`) values (" . "'" . $row_ca['ID'] . "'".","."'".$row_ca['HoTen'] ."'". "," . "'" . "8" . "'" . "," . "'" . "$time" . "'" . ")";
   
                        $caip_query = mysqli_query($con, $ca_ip);
          
                    }
                    $rs_sql = "UPDATE `tbl_baocom` SET `status`= '0'";
                    $rs_query = mysqli_query($con, $rs_sql);
                }
              
                ?>
                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $bc_sql = "SELECT * From tbl_baocom where status='0'";
                        $bc_query = mysqli_query($con, $bc_sql);
                        while ($bc_row = mysqli_fetch_array($bc_query)) {
                        ?>
                            <tr>
                                <td><?php echo $bc_row['ID'] ?></td>
                                <td><?php echo $bc_row['HoTen'] ?></td>
                                <td>
                                    <?php
                                    if ($bc_row['status'] == 1) {
                                        echo 'Có ăn';
                                    } else echo 'Không ăn';
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- <form method="post" style="margin-top:10px;">
                    <button type="submit" name="btn_rs" class="del-infor-btn mt-1 btn btn-danger">Đặt lại</button>
                </form> -->
            </div>
        </div>
    </div>
</div>