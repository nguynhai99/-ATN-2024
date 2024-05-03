<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = time();
                $time = date('M', $time);
                $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11 ', '12'];
                $time = str_replace($timeEng, $timeVie, $time);
                ?>
                <h5 class="card-title">Bảng Công Tháng <?php echo $time - 1; ?> </h5>
            </div>
            <form method="get" action="admin/search_cc.php" class=" form-inline   navbar-search">
                    <div class="input-group">
                      
                        <input name="search" type="text" class="form-control searchbar-cc border-0 small " placeholder="Nhập Họ Tên, Tháng,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            <div class="card-body overflow-table">
                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>Tháng</th>
                            <th>Họ Tên</th>
                            <th>Phòng Ban</th>
                            <th>Ngày</th>
                            <th>Giờ Vào</th>
                            <th>Giờ Ra</th>
                            <th>Vào Trễ</th>
                            <th>Ra Sớm</th>
                        </tr>
                    </thead>
                    <?php
                    $cc_sql = "SELECT * from tbl_chamcong where `status`='1' ";
                    $cc_query = mysqli_query($con, $cc_sql);
                    while ($row = mysqli_fetch_array($cc_query)) {
                    ?>
                        <tbody>
                            <th><?php echo $row['Thang'] ?></th>
                            <td><?php echo $row['HoTen'] ?></td>
                            <td><?php echo $row['PhongBan'] ?></td>
                            <td><?php echo $row['Ngay'] ?></td>
                            <td><?php if ($row['GioVao'] == 'null') {
                                    echo " ";
                                } else echo $row['GioVao'] ?></td>
                            <td><?php if ($row['GioRa'] == 'null') {
                                    echo " ";
                                } else echo $row['GioRa'] ?></td>
                            <td><?php echo $row['GioTre'] ?></td>
                            <td><?php echo $row['GioSom'] ?></td>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>