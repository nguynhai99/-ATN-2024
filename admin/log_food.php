<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Lịch Sử Báo Cơm</h5>
            </div>
          
            <div class="card-body overflow-table">
                <form style="margin-left: 0px !important;margin-bottom:10px !important;" method="get" action="./index.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input value="search-food" name="module" type="hidden" />
                        <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button style="background-color: #31AF49;border: 0px;" class="btn btn-primary" type="submit" name="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <form method="post">
                    <input style="margin-right:20px;" class="bc-btn mt-1 bc-btn btn btn-success" type="submit" value="Có ăn" name="btn-1">
                    <input class="bc-btn mt-1 bc-btn btn btn-success" type="submit" value="Không ăn" name="btn-2">
                </form>
                <?php
                        if (isset($_POST['btn-1'])) {
                            $sql = "SELECT * From tbl_logs where `status`='8'   order by ID desc";
                            $query = mysqli_query($con, $sql); 
                   
                        }
                        if (isset($_POST['btn-2'])) {
                            $sql = "SELECT * From tbl_logs where `status`='9'   order by ID desc";
                            $query = mysqli_query($con, $sql);
                        }
                        else{
                            $sql = "SELECT * From tbl_logs where `status`='8' or  `status`='9' order by ID desc";
                            $query = mysqli_query($con, $sql);
                        }

                      ?>
                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ Và Tên</th>
                            <th>Tác Vụ</th>
                            <th>Thời Gian </th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        while ($row = mysqli_fetch_array($query)) {
                            // $user_sql = "SELECT * from tbl_baocom where `ID`=" . $row['id_admin'];
                            // $user_query = mysqli_query($con, $user_sql);
                        ?>

                            <tr>
                                <td><?php echo $row['id_admin'] ?></td>
                           
                                    <td> <?php echo $row['HoTen'] ?> </td>
                                <td>
                                    <?php
                                    if ($row['status'] == 9) {
                                        echo 'Không Ăn';
                                    } else if($row['status'] == 8) {
                                        echo 'Có Ăn';
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