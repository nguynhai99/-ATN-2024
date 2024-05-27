<?php
$search = addslashes($_GET['search']);
$sql = "SELECT * from tbl_logs where `time` like '%$search%' AND `status`='8' ";

$query = mysqli_query($con, $sql);
  
$num = mysqli_num_rows($query);
?>

<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
        <div class="header-form">
                <h5 class="card-title">Lịch Sử Báo Cơm </h5>
            </div>
            <div class="card-body">
                <table class=" table">
                <form method="get" action="./index.php"
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input value="search-food" name="module" type="hidden" />
                        <input name="search" type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit" value="1">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                    <thead>
                        <?php if ($num > 0) {
                                        echo $num . " kết quả trả về với từ khóa <b>" . $search . "</b>";
                                        echo '<table class="mb-0 table">';
                                    ?>
                        <tr>
                            <th>ID</th>
                            <th>Họ Và Tên</th>
                            <th>Tác Vụ</th>
                            <th>Thời Gian </th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)) {
                     $user_sql = "SELECT * from tbl_user where ID=" . $row['id_admin'];
                     $user_query = mysqli_query($con, $user_sql);
                              ?>
                        <tr>
                            <th scope="row "><?php echo $row['ID']; ?></th>
                            <?php while ($user_row = mysqli_fetch_array($user_query)) { ?>
                            <td> <?php echo $user_row['name'] ?> </td>
                            <?php  } ?>
                         <td>
                                <?php
                                    if ($row['status'] == 8) {
                                        echo 'Không Ăn';
                                    }
                                    ?>
                            </td>
                            <td><?php echo $row['time'] ?></td>
                        </tr>

                        <?php } ?>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>