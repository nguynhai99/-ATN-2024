<?php
$id = $_GET['id'];
$sql = "SELECT * from `tbl_nhanvien` where `PhongBan`='$id' and `TrangThai` != '2' and `TrangThai` != '3' and `TrangThai` != '4' and `TrangThai` !='4'  ";
$query = mysqli_query($con, $sql);

?>
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
                            <th>ID</th>
                            <th>Họ Tên</th>
                            <th>Số điện thoại</th>
                            <th>Mail Cá Nhân</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {  ?>
                            <tr>
                                <th scope="row "><?php echo $row['ID']; ?></th>

                                <td>
                                    <a href="index.php?module=infor-nv&id=<?php echo $row['ID']; ?>">
                                        <?php echo $row['Ho']." ".$row['Ten'] ?>
                                    </a>
                                </td>

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
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>