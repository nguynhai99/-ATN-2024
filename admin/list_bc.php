<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="main-card mb-3 card list-nv">
            <div class="header-form">
                <h5 class="card-title">Danh Sách Nhân Viên</h5>
            </div>
            <a href="index.php?module=add-bc"><button style="margin-left:20px;margin-top:20px;margin-bottom:10px;font-weight: bold;" class="btn btn-success">Thêm mới</button></a>
            <div class="card-body overflow-table">

                <table class=" custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tài Khoản</th>
                            <th>Họ Tên</th>
<th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM `tbl_baocom`";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td>
                                    <span> <?php echo $row['ID'] ?> </span>
                                </td>

                                <td>
                                    <span> <?php echo $row['username'] ?> </span>
                                </td>
                                <td>
                                  
                                       <span> <?php echo  $row['HoTen'] ?> </span> 
                                </td>
                                <td>
                                <a  href="index.php?module=delete-bc&id=<?php echo $row['ID'] ?>"> <button type="button " class="btn btn-danger " style="width:100px;">Xóa</button></a>                 
                                </td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>