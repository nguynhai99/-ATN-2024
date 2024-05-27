<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
        <div class="header-form">
                <h5 class="card-title">Lịch Sử Nghỉ Phép</h5>
            </div>
            <div class="card-body overflow-table">
                <form method="get" action="./index.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input value="search-nghiphep" name="module" type="hidden" />
                        <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit" value="1">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ Và Tên</th>
                            <th>Tiêu Đề </th>
                            <th>Nội Dung</th>
                            <th>Thời Gian </th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * From tbl_xinnghi where `status` IN ('0','1','2') order by ID desc";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td>
                                        <?php
                                         if ($row['status'] == 0) {
                                            echo 'Đang chờ xác nhận';
                                        }
                                        if ($row['status'] == 1) {
                                            echo 'Xác Nhận';
                                        }
                                        if ($row['status'] == 2) {
                                            echo 'Từ Chối';
                                        }
                                       
                                        ?>
                                    </td>
                            </tr>
                        <?php }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>