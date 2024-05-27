<?php
$id = $_GET['id'];
$sql = "SELECT * from `tbl_nhanvien` where `PhongBan`='$id' and `TrangThai` !='2' and `TrangThai` !='3' and `TrangThai` !='4' ";
$query = mysqli_query($con, $sql);

?>
<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Danh Sách Nhân Viên Thuộc Phòng Ban <?php $pb_query=mysqli_query($con,"SELECT * from `tbl_phongban` where `ID`='$id'"); $pb=mysqli_fetch_array($pb_query); echo $pb['TenPB'] ?></h5>
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
                                    <a href="infor-nv&id=<?php echo $row['ID']; ?>">
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
                <?php
                $count = mysqli_num_rows($query);
                echo "<br>Tổng số nhân viên thuộc phòng ban hiện tại là: " . $count;
                ?>
            </div>
        </div>
    </div>
</div>
</div>