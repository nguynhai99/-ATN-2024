<?php
$search = addslashes($_GET['search']);
$sql = "SELECT * from tbl_xinnghi where `username` like '%$search%' or `title` like '%$search%' AND `status`='1' "; //echo $sql;die;

$query = mysqli_query($con, $sql);

$num = mysqli_num_rows($query);
?>

<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
        <div class="header-form">
                <h5 class="card-title">Lịch Sử Nghỉ Phép </h5>
            </div>
            <div class="card-body" >
                <table class=" table">
                    <form method="get" action="./index.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input value="search-nghiphep" name="module" type="hidden" />
                            <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" >
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
                                <th>Tiêu Đề </th>
                                <th>Nội Dung</th>
                                <th>Thời Gian </th>
                            </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['time'] ?></td>
                            </tr>
                        <?php }  ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>