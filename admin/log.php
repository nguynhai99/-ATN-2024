<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Lịch Sử</h5>
            </div>
            <div class="card-body overflow-table">
                <table class=" custom-table">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Tài Khoản</th>
                            <th>Tác Vụ</th>
                            <th>Thời Gian </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * From tbl_logs where `status` IN ('1','2','3','4','5','6','7') order by ID desc";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            $user_sql = "SELECT * from tbl_user where ID=" . $row['id_admin'];
                            $user_query = mysqli_query($con, $user_sql);
                        ?>

                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <?php while ($user_row = mysqli_fetch_array($user_query)) { ?>
                                    <td> <?php echo $user_row['username'] ?> </td>
                                <?php  } ?>
                                <td>
                                    <?php
                                    if ($row['status'] == 1) {
                                        echo 'Thêm Nhân Viên';
                                    } elseif ($row['status'] == 2) {
                                        echo 'Thêm User';
                                    } elseif ($row['status'] == 3) {
                                        echo 'Sửa User';
                                    } elseif ($row['status'] == 4) {
                                        echo 'Sửa User';
                                    } elseif ($row['status'] == 5) {
                                        echo 'Xóa User';
                                    } elseif ($row['status'] == 6) {
                                        echo 'Ẩn Nhân Viên';
                                    } elseif ($row['status'] == 7) {
                                        echo 'Đổi Mật Khẩu';
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['time'] ?></td>



                            </tr>
                        <?php }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>