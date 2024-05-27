<?php if ($phanquyen == 2) { ?>
    <div class="container-fluid ">
        <div class="col-lg-12">
            <div class="main-card mb-3 card list-nv">
                <div class=" header-form">
                    <h5 class="card-title">Trạng Thái Đơn Xin Nghỉ</h5>
                </div>
                <div class="card-body">
                    <table class="  custom-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th> Nội Dung Yêu Cầu </th>
                                <th>Thời Gian Yêu Cầu</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $xn_sql = "SELECT * from tbl_xinnghi where `account`='$username' order by ID desc";
                            $xn_query = mysqli_query($con, $xn_sql);
                            while ($row = mysqli_fetch_array($xn_query)) {
                            ?>
                                <tr>

                                    <th scope="row "> <?php echo $row['title'] ?> </th>
                                    <td> <?php echo $row['description'] ?> </td>
                                    <td><span> <?php echo $row['time'] ?> </span></td>

                                    <td>
                                        <?php
                                        if ($row['status'] == 0) {
                                            echo 'Đag Chờ Xác Nhận...';
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
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


<?php if ($phanquyen == 3) { ?>
    <div class="container-fluid ">
        <div class="col-lg-12">
            <div class="main-card mb-3 card list-nv">
            <div class=" header-form">
                    <h5 class="card-title">Danh Sách Yêu Cầu</h5>
                </div>
                <div class="card-body">
                    <table class="  custom-table">
                        <thead>
                            <tr>
                                <th>Họ và Tên</th>
                                <th>Title</th>
                                <th> Nội Dung Yêu Cầu </th>
                                <th>Thời Gian Yêu Cầu</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $xn_sql = "SELECT * from tbl_xinnghi where `phongban`='$pb' order by ID DESC";
                            $xn_query = mysqli_query($con, $xn_sql);

                            while ($row = mysqli_fetch_array($xn_query)) {
                                if ($row['status'] == 0) {
                            ?>
                                    <tr>
                                        <th><?php echo $row['username'] ?></th>
                                        <td> <?php echo $row['title'] ?> </td>
                                        <td> <?php echo $row['description'] ?> </td>
                                        <td><span> <?php echo $row['time'] ?> </span></td>

                                        <td>
                                            <a class="btn-editss" href="index.php?module=acp-yc&id=<?php echo $row['ID'] ?>"> <button type="button " class="btn btn-success infor-btn ">Đồng Ý</button></a>
                                            <a class="btn-editss" href="index.php?module=del-yc&id=<?php echo $row['ID'] ?>"> <button type="button " class="btn btn-danger infor-btn ">Từ Chối</button></a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php } ?>