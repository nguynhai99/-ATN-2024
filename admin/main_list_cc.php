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