<?php
$pb_sql = "SELECT * from tbl_phongban";
$pb_query = mysqli_query($con, $pb_sql);
$sn_sql = "SELECT * from tbl_sinhnhat";
$sn_query = mysqli_query($con, $sn_sql);

?>
<?php if ($phanquyen == 1) { ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?module=ds-nv">

            <div class="sidebar-brand-text mx-3"><?php echo $username ?> </div>
        </a>


        <div class="sidebar-heading">
            Chức Năng
        </div>
        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Nhân Viên</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Chắc năng chính</h6>
                    <a class="collapse-item" href="index.php?module=ds-nv">Danh sách nhân viên</a>
                    <a class="collapse-item" href="index.php?module=add-nv">Thêm Nhân Viên</a>
                    <a class="collapse-item" href="index.php?module=ds-user">Danh sách user</a>
                    <a class="collapse-item" href="index.php?module=add-user">Thêm User</a>
                </div>
            </div>

        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo-2" aria-expanded="true" aria-controls="collapseTwo-2">
                <i class="fas fa-fw fa-cog"></i>
                <span>Phòng Ban</span>
            </a>
            <div id="collapseTwo-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                        <a class="collapse-item" href="index.php?module=phongban&id=<?php echo $pb_row['ID'] ?>"><?php echo $pb_row['TenPB']; ?></a>
                    <?php } ?>
                </div>
            </div>

        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="true" aria-controls="collapseTwo-3">
                <i class="fas fa-birthday-cake"></i>
                <span>Sinh Nhật</span>
            </a>
            <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php while ($sn_row = mysqli_fetch_array($sn_query)) { ?>
                        <a class="collapse-item" href="index.php?module=sinhnhat&id=<?php echo $sn_row['ID'] ?>"><?php echo "Tháng" . " " . $sn_row['Thang']; ?></a>
                    <?php } ?>

                </div>
            </div>

        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo-4" aria-expanded="true" aria-controls="collapseTwo-4">
                <i class="fas fa-hamburger"></i>
                <span>Báo Cơm</span>
            </a>
            <div id="collapseTwo-4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="index.php?module=co-an">Có Ăn</a>
                    <a class="collapse-item" href="index.php?module=khong-an">Không Ăn</a>
                    <a class="collapse-item" href="index.php?module=logs_food">Lịch Sử Báo Cơm</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link " href="index.php?module=logs">
                <i class="fas fa-history"></i>
                <span>Lịch sử</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link " href="index.php?module=logs_nghiphep">
                <i class="fas fa-history"></i>
                <span>Nghỉ Phép</span>
            </a>
        </li>
        <div class="text-center d-none d-md-inline custom-circle">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

<?php }
if ($phanquyen == 2) { ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?module=ds-nv">

            <div class="sidebar-brand-text mx-3"><?php echo $username ?> </div>
        </a>
        <div class="sidebar-heading">
            Chức Năng
        </div>

        <li class="nav-item">
            <a class="nav-link " href="index.php?module=ds-nv">
                <i class="fas fa-list"></i>
                <span>Danh Sách Nhân Viên</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="index.php?module=phongban">
                <i class="fas fa-user-md"></i>
                <span>Phòng Ban</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo-1" aria-expanded="true" aria-controls="collapseTwo-1">
                <i class="fas fa-users"></i>
                <span>Tài Khoản</span>
            </a>
            <div id="collapseTwo-1" class="collapse" aria-labelledby="headingTwo-1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Chắc năng chính</h6>

                    <a class="collapse-item" href="index.php?module=infor-nv&id=<?php echo $id_admin ?>">Thông Tin Chi Tiết</a>
                    <a class="collapse-item" href="index.php?module=dmk-nv">Đổi Mật Khẩu</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="index.php?module=baocom">
                <i class="fas fa-hamburger"></i>
                <span>Báo Cơm</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-calendar-week"></i>
                <span>Xin Nghỉ</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Chắc năng chính</h6>
                    <a class="collapse-item" href="index.php?module=xinnghi">Tạo Đơn Xin Nghỉ</a>
                    <a class="collapse-item" href="index.php?module=trangthaixinnghi">Trạng Thái</a>

                </div>
            </div>
        </li>

        <div class="text-center d-none d-md-inline custom-circle">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

<?php } ?>


<?php if ($phanquyen == 3) { ?>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?module=ds-nv">

            <div class="sidebar-brand-text mx-3"><?php echo $username ?> </div>
        </a>


        <div class="sidebar-heading">
            Chức Năng
        </div>
        <li class="nav-item">
            <a class="nav-link " href="index.php?module=ds-nv">
                <i class="fas fa-list"></i>
                <span>Danh Sách Nhân Viên</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="index.php?module=phongban">
                <i class="fas fa-user-md"></i>
                <span>Phòng Ban</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Tài Khoản</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Chắc năng chính</h6>

                    <a class="collapse-item" href="index.php?module=infor-nv&id=<?php echo $id_admin ?>">Thông Tin Chi Tiết</a>
                    <a class="collapse-item" href="index.php?module=dmk-nv">Đổi Mật Khẩu</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="index.php?module=baocom">
                <i class="fas fa-hamburger"></i>
                <span>Báo Cơm</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="index.php?module=trangthaixinnghi">
                <i class="fas fa-calendar-week"></i>
                <span>Yêu Cầu Nhân Viên</span>
                <?php
                $tb_sql = "SELECT * from tbl_xinnghi where phongban=$pb AND status = '0'";
                $tb_query = mysqli_query($con, $tb_sql);
                $num = mysqli_num_rows($tb_query);

                ?>
                <?php if ($num > 0) { ?> <span style="float:right;color:white;font-weight:bold"><?php echo $num; ?></span> <?php  } ?>
            </a>
        </li>



        <div class="text-center d-none d-md-inline custom-circle">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

<?php } ?>