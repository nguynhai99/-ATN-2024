<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Bảng công theo tháng</h5>
            </div>
            <div class="card-body overflow-table">

                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID Nhân Viên</th>
                            <th>Họ Tên</th>
                            <th>Tháng</th>
                            <th>Năm</th>
                            <th>Hệ số lương mới nhất</th>
                            <th>Phụ cấp</th>
                            <th>Thực Lương</th>
                            <th>Trạng thái</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM `tbl_nhanvien` where `TrangThai` !='2' and `TrangThai` !='3' and `TrangThai` !='4' ORDER BY `tbl_nhanvien`.`Ten` ASC";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            if ($row['TrangThai'] == '1' || $row['TrangThai'] == '0') {
                                $pb_sql = "SELECT * from tbl_user where `username`=" . "'" . $row['username'] . "'";

                                $pb_query = mysqli_query($con, $pb_sql);
                        ?>
                                <tr>
                                    <?php while ($pb_row = mysqli_fetch_array($pb_query)) {
                                        $employeeIDs = $pb_row['id'];
                                        // Lấy tháng và năm mới nhất
                                        $sqlMaxMonth = "SELECT MAX(thang) AS max_thang FROM tbl_luong where nhan_vien_id='$employeeIDs'";
                                        $resultMaxMonth = mysqli_query($con, $sqlMaxMonth);
                                        $rowMaxMonth = mysqli_fetch_assoc($resultMaxMonth);
                                        $maxThang = $rowMaxMonth['max_thang'];

                                        $sqlMaxYear = "SELECT MAX(nam) AS max_nam FROM tbl_luong where nhan_vien_id='$employeeIDs'";
                                        $resultMaxYear = mysqli_query($con, $sqlMaxYear);
                                        $rowMaxYear = mysqli_fetch_assoc($resultMaxYear);
                                        $maxNam = $rowMaxYear['max_nam'];

                                        $sqlLCB = "SELECT `luong_co_ban` FROM `tbl_luong` WHERE `thang` = '$maxThang' AND `nam` = '$maxNam' AND nhan_vien_id='$employeeIDs'";
                                        $resultLCB = mysqli_query($con, $sqlLCB);
                                        $rowLCB = mysqli_fetch_assoc($resultLCB);
                                        $maxLCB = $rowLCB['luong_co_ban'];

                                        $sqlMaxSalary = "SELECT `he_so_luong` FROM `tbl_luong` WHERE `thang` = '$maxThang' AND `nam` = '$maxNam' AND nhan_vien_id='$employeeIDs'";
                                        $resultMaxSalary = mysqli_query($con, $sqlMaxSalary);
                                        $rowMaxSalary = mysqli_fetch_assoc($resultMaxSalary);
                                        $maxSalary = $rowMaxSalary['he_so_luong'];

                                        $sqlMaxExSalary = "SELECT `phu_cap` FROM `tbl_luong` WHERE `thang` = '$maxThang' AND `nam` = '$maxNam' AND nhan_vien_id='$employeeIDs'";
                                        $resultMaxExSalary = mysqli_query($con, $sqlMaxExSalary);
                                        $rowMaxExSalary = mysqli_fetch_assoc($resultMaxExSalary);
                                        $maxExSalary = $rowMaxExSalary['phu_cap'];

                                        $sql_songaycong = "SELECT `so_ngay_cong` FROM `tbl_luong` WHERE `thang` = '$maxThang' AND `nam` = '$maxNam' AND nhan_vien_id='$employeeIDs'";
                                        $resultSongaycong = mysqli_query($con, $sql_songaycong);
                                        $rowSongaycong = mysqli_fetch_assoc($resultSongaycong);
                                        $maxSongaycong = $rowSongaycong['so_ngay_cong'];
                                    ?>
                                        <td>
                                            <span><?php echo $pb_row['id'] ?></span>
                                        </td>

                                        <td>
                                            <span><?php echo $pb_row['name'] ?></span>
                                        </td>
                                        <td>
                                            <span><?php echo $maxThang ?></span>
                                        </td>
                                        <td>
                                            <span><?php echo $maxNam ?></span>
                                        </td>
                                        <td>
                                            <?php
                                            $count_c = mysqli_num_rows($resultMaxSalary);
                                            if ($count_c != 0) {
                                                echo $maxSalary;
                                            } else {
                                                echo "Chưa có hệ số lương";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $maxExSalary;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            // $LCB = 7000000;
                                            // // echo $
                                            // $tinhluong = ($LCB * $maxSalary * $maxSongaycong) + $maxExSalary;
                                            // $luong = number_format($tinhluong, 0, ',', '.');
                                            // echo $luong;
                                          
                                            $soNgayCongTong = 22;
                                            $luong = ($maxLCB * $maxSalary * $maxSongaycong) / $soNgayCongTong + $maxExSalary;
                                            // echo $mucLuongCoSo."\n".$maxSalary."\n".$maxSongaycong."\n".$soNgayCongTong;

                                            echo number_format($luong, 0, ',', '.') . " đ";
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $thangHienTai = date('m');
                                            if ($maxThang == $thangHienTai) {
                                                echo "Đã cập nhật";
                                            } else {
                                                echo ' <a href="index.php?module=add-cong-nv&id=' . $employeeIDs . '">
                                                <button class="btn btn-success btn-change-pass">Sửa</button>
                                            </a>';
                                            }
                                            ?>

                                        </td>
                                    <?php } ?>



                                </tr>
                            <?php }  ?>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                $count = mysqli_num_rows($query);
                echo "<br>Tổng số nhân viên hiện tại là: " . $count;
                ?>
            </div>
        </div>
    </div>
</div>