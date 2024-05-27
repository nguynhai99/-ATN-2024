<?php
       $date_cong=mysqli_query($con,"SELECT * from `tbl_chamcong` where `status`='1'");
       $date_row=mysqli_fetch_array($date_cong);
?>
<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Bảng Công Tháng <?php echo $date_row['Thang'] ?></h5>
            </div>
            <div class="card-body overflow-table">

                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>Mã Nhân Viên</th>
                            <th>Họ Tên</th>
                            <th>Tổng số phút đi muộn</th>
                            <th>Tổng số phút về sớm</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT   `MaNV`,`status`,`Ngay`,`HoTen`,SUM(`GioTre`)as `tong_tgian_muon`,SUM(`GioSom`) as `tong_tgian_som` 
                        FROM tbl_chamcong where `status`='1' and `GioTre`!= '0' and `GioRa`!= 'null' and `GioVao`<'10:30' group by `HoTen` order by `tong_tgian_muon` desc "; 
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['MaNV'] ?></td>
                                <td>
                                    <a href="detail-cc&manv=<?php echo $row['MaNV']; ?>">
                                        <?php echo $row['HoTen'] ?>
                                    </a>
                                </td>
                                <td><?php echo $row['tong_tgian_muon'] ?></td>
                                <td><?php echo $row['tong_tgian_som'] ?></td>


                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>