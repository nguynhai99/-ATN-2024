<?php
if (isset($_POST['submit'])) {
    $target = "img/" . basename($_FILES['ns_file_upload']['name']);

    $images = $_FILES['ns_file_upload']['name'];

    $ava_check_sql = "UPDATE `tbl_images` SET `status`= '0' WHERE `username`='$username' and `status`='1'";
    $ava_check_query = mysqli_query($con, $ava_check_sql);
    if ($ava_check_query == true) {
        $upload_sql = "INSERT INTO `tbl_images`(`id_user`, `username`,`name`, `images`, `status`) VALUES ('$id_admin','$username','$name','$images','1') "; 
        $upload_query = mysqli_query($con, $upload_sql);
    }
    if (move_uploaded_file($_FILES['ns_file_upload']['tmp_name'], $target)) {
        echo '<script>window.location="index.php?module=infor-user"; alert("Thay ảnh đại diện thành công !");</script>';
    } else {
        echo "upload ảnh thất bại";
    }
}
?>
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="main-card mb-3 card ">
                <div class=" header-form">
                    <h5 class="card-title-ava">Upload ảnh đại diện</h5>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="position-relative form-group form-ava">
                            <label class="">Tải lên ảnh đại diện</label>
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fas fa-cloud-upload-alt"></i> Tải File
                            </label>
                            <input id="file-upload" name="ns_file_upload" type="file" accept="image/*" onchange="loadFile(event)">
                            <br>
                            <button type="submit" class="bc-btn btn btn-success" name="submit">Tải Lên</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="main-card mb-3 card ">
                <div class=" header-form">
                    <h5 class="card-title-ava">Demo</h5>
                </div>
                <div class="card-body">
                    <center>
                        <div class=" pro5-ava">
                            <img id="output">
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                            <p class="profile-name"><?php echo $name ?></p>
                            <p>Tên đăng nhập: <?php echo $username ?></p>
                            <p>
                                <button class="btn btn-success btn-change-pass">Đổi Avatar</button>
                            </p>
                            <p>
                                <button class="btn btn-success btn-change-pass">Đổi mật khẩu</button>
                            </p>
                        </div>
                    </center>

                </div>
            </div>
        </div>
    </div>
