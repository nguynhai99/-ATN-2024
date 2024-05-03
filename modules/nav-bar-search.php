<?php
$pb_sql = "SELECT * from tbl_phongban";
$pb_query = mysqli_query($con, $pb_sql);
$sn_sql = "SELECT * from tbl_sinhnhat";
$sn_query = mysqli_query($con, $sn_sql);

?>
<?php if ($phanquyen == 1) { ?>
  <nav class="navbar navbar-expand-lg navbar-light custom-nav">
    <div class="container">
      <div class="nav-home has-sub">
        <a class="navbar-brand mrg-home" href="../index.php?module=ds-nv">
          <i class="fas fa-home"></i>
          <span> Trang Chủ</span>
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown has-sub ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users"></i>
              <span>Nhân Viên</span>
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../index.php?module=ds-nv">
                <span>Danh Sách Nhân Viên </span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=add-nv">
                <span>Thêm Nhân Viên</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=ds-user">
                <span>
                  Danh Sách Nghỉ Việc
                </span>

              </a>
            
            </div>
          </li>

          <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-cog"></i>
              <span>Phòng Ban </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                <a class="dropdown-item" href="../index.php?module=phongban&id=<?php echo $pb_row['ID'] ?>">
                  <span>
                    <?php echo $pb_row['TenPB']; ?>
                  </span>
                </a>
                <div class="dropdown-divider"></div>
              <?php } ?>

            </div>
          </li>

          <li class="nav-item has-sub">
            <a class="nav-link" href="../index.php?module=sinhnhat">
              <i class="fas fa-birthday-cake"></i>
              <span>
                Sinh Nhật
              </span>
            </a>
          </li>
          <!-- <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-calendar-check"></i>
              <span> Chấm Công </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../index.php?module=imp-excel">
                <span>Nhập File Chấm Công</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=list-cc">
                <span>
                  Bảng Công
                </span>
              </a>
             
          </li> -->



          <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-hamburger"></i>
              <span> Báo Cơm </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../index.php?module=list-bc">
                <span>Danh Sách NV Ăn Trưa</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=khong-an">
                <span>Không Ăn</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=logs_food">
                <span>
                  Lịch Sử Báo Cơm
                </span>
              </a>
            </div>
          </li>

          <!-- <li class="nav-item has-sub">
            <a class="nav-link" href="../index.php?module=logs"> <i class="fas fa-history"></i>
              <span>
                Lịch Sử
              </span>
            </a>
          </li> -->
          <li class="nav-item has-sub">
            <a class="nav-link" href="../index.php?module=logs_nghiphep"><i class="far fa-calendar-alt"></i>
              <span>
                Nghỉ Phép
              </span>
            </a>
          </li>


          <li>

            <form method="get" action="./search.php" class=" form-inline">
              <div class="input-group" style="width:100%">
                <input name="search" type="text" class="form-control custom-searchbar-admin border-0 small " placeholder="Nhập Họ Tên, Số điện thoại,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" style="margin-top:1px;" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<?php } ?>

<?php if ($phanquyen == 2) { ?>
  <nav class="navbar navbar-expand-lg navbar-light custom-nav">
    <div class="container">
      <a class="navbar-brand mrg-home" href="../index.php?module=ds-nv">
        <i class="fas fa-home"></i>
        <span> Trang Chủ</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item has-sub ">
            <a class="nav-link" href="ds-nv">
              <i class="fas fa-users"></i>
              <span> Danh Sách Nhân Viên</span>
            </a>
          </li> -->

          <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-cog"></i>
              <span>Phòng Ban </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                <a class="dropdown-item" href="../index.php?module=phongban&id=<?php echo $pb_row['ID'] ?>">
                  <span>
                    <?php echo $pb_row['TenPB']; ?>
                  </span>
                </a>
                <div class="dropdown-divider"></div>
              <?php } ?>

            </div>
          </li>


          <li class="nav-item has-sub">
            <a class="nav-link" href="../index.php?module=baocom">
              <i class="fas fa-hamburger"></i>
              <span> Báo Cơm</span>
            </a>
          </li>
       
          <!-- <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-calendar-check"></i>
              <span> Chấm Công </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../index.php?module=bang-cong">
                <span>
                  Bảng Công
                </span>
              </a>
             
             
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=top-late">
                <span>
                  BXH đi muộn
                </span>
              </a>
             
          </li> -->

          <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-calendar-alt"></i>
              <span> Nghỉ Phép </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../index.php?module=xinnghi"><span> Tạo Đơn Xin Nghỉ</span> </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../index.php?module=trangthaixinnghi"><span> Trạng Thái </span></a>
            </div>
          </li>
          <li>
            <form method="get" action="./search.php" class=" form-inline">
              <div class="input-group" style="width:100%">

                <input name="search" type="text" class="form-control custom-searchbar-nv border-0 small " placeholder="Nhập Họ Tên, Số điện thoại,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<?php } ?>

<?php if ($phanquyen == 3) { ?>
  <nav class="navbar navbar-expand-lg navbar-light custom-nav">
    <div class="container">
      <a class="navbar-brand mrg-home" href="ds-nv">
        <i class="fas fa-home"></i>
        <span> Trang Chủ</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item ">
            <a class="nav-link" href="ds-nv"> <i class="fas fa-users"></i> Danh Sách Nhân Viên</a>
          </li> -->

          <li class="nav-item dropdown has-sub">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-cog"></i>
              <span>Phòng Ban </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              while ($pb_row = mysqli_fetch_array($pb_query)) { ?>
                <a class="dropdown-item" href="../index.php?module=phongban&id=<?php echo $pb_row['ID'] ?>">
                  <span>
                    <?php echo $pb_row['TenPB']; ?>
                  </span>
                </a>
                <div class="dropdown-divider"></div>
              <?php } ?>

            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="../index.php?module=baocom"> <i class="fas fa-hamburger"></i> Báo Cơm</a>
          </li>
          <!-- <li class="nav-item has-sub">
            <a class="nav-link" href="../index.php?module=bang-cong">
              <i class="far fa-calendar-check"></i>
              <span> Bảng Công</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="../index.php?module=trangthaixinnghi"><i class="far fa-calendar-alt"></i> Yêu Cầu Nghỉ Phép</a>
             <!-- $xn_sql = "SELECT * from tbl_xinnghi where `phongban`='$pb' and `status`=0 order by ID DESC";
            $xn_query = mysqli_query($con, $xn_sql);
            $count = mysqli_num_rows($xn_query);
        
            <div style="if ($count == 0) {
                          echo "display:none;";
                        } width: 5px;height: 5px;background-color: red;position: relative;top: -30px;left: 20px;border-radius: 2.5px;"></div> -->
          </li>

          </li>
          <li>
            <form method="get" action="./search.php" class=" form-inline">
              <div class="input-group" style="width:100%">
                <input name="search" type="text" class="form-control custom-searchbar-tbp border-0 small " placeholder="Nhập Họ Tên, Số điện thoại,v.v..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<?php } ?>