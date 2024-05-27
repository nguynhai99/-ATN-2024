<?php
$id = $_GET['id'];

$pb_sql_1 = "SELECT * from tbl_user where `id`=$id";
$pb_query_1 = mysqli_query($con, $pb_sql_1);
$pb_row_1 = mysqli_fetch_array($pb_query_1);
?>
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <div class="header-form">
            <h5 class="card-title">Cập Nhật Lương Nhân Viên <span><?php echo $pb_row_1['name'] ?></span></h5>





        </div>
        <div class="card-body">
            <form method="post">

                <table class=" custom-table">
                    <thead>
                        <tr>

                            <th>Tháng</th>
                            <th>Năm</th>
                            <th>Lương cơ sở</th>
                            <th>Hệ số lương </th>
                            <th>Số ngày công</th>
                            <th>Phụ cấp</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $id = $_GET['id'];

                        $pb_sql = "SELECT * from tbl_user where `id`=$id";
                        $pb_query = mysqli_query($con, $pb_sql);
                        ?>



                        <tr>
                            <?php while ($pb_row = mysqli_fetch_array($pb_query)) {
                                $employeeIDs = $pb_row['id'];
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
                                if (isset($_POST['btn_addstaff'])) {
                                    $mucLuongCoSo = 3000000;
                                    $soNgayCongTong = 22;
                                    $thang = $_POST['ns_thang'];
                                    $nam = $_POST['ns_nam'];
                                    $LCB = $_POST['ns_lcb'];
                                    $hsluong = $_POST['ns_hsl'];
                                    $ngaycong = $_POST['ns_ngaycong'];
                                    $phucap = $_POST['ns_phucap'];
                                    // $luong = ($mucLuongCoSo * $hsluong * $ngaycong) / $soNgayCongTong ;


                                    // $tongluong=number_format($luong, 0, ',', '.')." đ" ;
                                    $ins_luong_sql = "INSERT INTO `tbl_luong`(`nhan_vien_id`, `thang`, `nam`,`luong_co_ban`, `he_so_luong`, `so_ngay_cong`, `phu_cap`) VALUES ('$id','$thang','$nam','$LCB','$hsluong','$ngaycong','$phucap')";
                                    $query_luong_sql = mysqli_query($con, $ins_luong_sql);
                                    if ($query_luong_sql == true) {
                                        echo '<script>window.location="./index.php?module=ds-cong-thang";alert("Thêm Thành Công. Quay lại danh sách nhân viên !");</script>';
                                    }
                                }
                            ?>

                                <td>
                                    <div class="position-relative form-group">
                                        <input name="ns_thang" type="text" value="<?php $thangHienTai = date('m');
                                                                                    echo $thangHienTai; ?>" class="form-control">
                                    </div>

                                </td>
                                <td>
                                    <div class="position-relative form-group">
                                        <input name="ns_nam" type="text" value="<?php $namHienTai = date('Y');
                                                                                echo $namHienTai; ?>" class="form-control">
                                    </div>

                                </td>


                                <td><?php
                                    $count_l = mysqli_num_rows($resultLCB);
                                    if ($count_l != 0) {
                                        echo '   <div class="position-relative form-group">
                                                <input name="ns_lcb" type="text" class="form-control"' . ' value="' . $maxLCB . '"' . '>
                                            </div>';
                                    } else {
                                        echo  '   <div class="position-relative form-group">
                                                <input name="ns_lcb" type="text" class="form-control"' . '>
                                            </div>';
                                    }
                                    ?></td>
                                      <td><?php
                                    $count_c = mysqli_num_rows($resultMaxSalary);
                                    if ($count_c != 0) {
                                        echo '   <div class="position-relative form-group">
                                                <input name="ns_hsl" type="text" class="form-control"' . ' value="' . $maxSalary . '"' . '>
                                            </div>';
                                    } else {
                                        echo  '   <div class="position-relative form-group">
                                                <input name="ns_hsl" type="text" class="form-control"' . '>
                                            </div>';
                                    }
                                    ?></td>

                                <td>
                                    <div class="position-relative form-group">
                                        <input name="ns_ngaycong" type="text" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="position-relative form-group">
                                        <input name="ns_phucap" type="text" class="form-control">
                                    </div>
                                </td>
                            <?php } ?>



                        </tr>


                    </tbody>
                </table>

                <button type="submit" name="btn_addstaff" class="mt-1 btn btn-secondary" style="background-color: #31af49;border-color:#31af49">lưu</button>
            </form>
        </div>
    </div>
</div>
</div>