<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Danh Sách Nhân Viên</h5>
            </div>
            <div class="card-body overflow-table">

                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>Họ Tên</th>
                            <th>Phòng Ban</th>
                            <th>Số điện thoại</th>
                            <th>Mail Cá Nhân</th>
                            <th>Ngày Sinh</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM `tbl_nhanvien` where `TrangThai` != '2' and `TrangThai` != '3' and `TrangThai` != '4' ORDER BY `tbl_nhanvien`.`Ten` ASC";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            if ($row['TrangThai'] == '1' || $row['TrangThai'] == '0') {
                                $pb_sql = "SELECT TenPB from tbl_phongban where ID=" . $row['PhongBan'];
                                $pb_query = mysqli_query($con, $pb_sql);
                        ?>
                                <tr>
                                    <td>
                                        <a href="index.php?module=infor-nv&id=<?php echo $row['ID']; ?>">
                                            <?php echo $row['Ho'] ?> <?php echo $row['Ten'] ?>
                                        </a>
                                    </td>
                                    <?php while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                                        <td>
                                            <span><?php echo $pb_row['TenPB'] ?></span>
                                        </td>
                                    <?php } ?>
                                    <td>
                                        <a href="tel:<?php echo $row['SDT'] ?>">
                                            <?php echo  $row['SDT'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="mailto:<?php echo $row['Mail'] ?>">
                                            <?php echo $row['Mail'] ?>
                                        </a>
                                    </td>
                                    <td><?php echo $row['NgaySinh'] . "/" . $row['ThangSinh'] . "/" . $row['NamSinh'] ?></td>
                                </tr>
                            <?php }  ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>