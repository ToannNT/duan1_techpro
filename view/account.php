<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);

}
if (isset($hinh)) {
    $hinh_ac = '
            <img style="border-radius: 50%;" id="previewImage"name="hinh" src="./view/layout/images/user/'.$hinh.'" alt>
        ';
} else {
    $hinh_ac = '<img id="previewImage"name="hinh" src="./view/layout/images/user/user_empty.png" alt>';
}
// if ($hinh != "") {
//     $target_file = "./view/layout/images/user/" . $hinh;
//     move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
// } else {
//     // Nếu không có ảnh mới được chọn, sử dụng ảnh gần nhất
//     $latestImage = getLatestImageFromUser($id);
//     $target_file = $latestImage;
// }

?>
<div class="wrapper-container">
<form action="index.php?pg=update_user" method="post" enctype="multipart/form-data">
    <div class="container-fluid ">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="content-col-left bg- p-4 pt-50">
                        <div class="content-col-left__avata">
                            <!-- <img style="border-radius: 50%;" id="previewImage"name="hinh" src="./view/layout/images/user/<?=$hinh?>" alt> -->
                          <?=$hinh_ac?>
                        </div>
                        <div class="content-col-left__name">
                            <?= $hoten ?>
                        </div>
                        <div class="content-col-left__lv">Thành viên: Mới</div>
                        <div class="content-col-left__cart"><img  src="./view/layout/images/user/member_new.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content-col-right">

                        <div class="content-col-left__title">
                            <span><a class="kich" href="#">HỒ SƠ CỦA TÔI</a></span>
                            <span><a href="#">ĐƠN HÀNG</a></span>
                            <span><a href="#">THÔNG BÁO</a></span>
                        </div>
                        <!-- <div class="content-col-left__line"><img src="./view/layout/images/user/line.png" alt></div> -->
                        
                            <div class="content-col-left__infomation">
                                <div style="margin-top: 10px;" class="content-col-left__infomation--input">
                                    <label for="#">Họ và Tên: </label>
                                    <input type="text" id="hoten" value="<?= $hoten ?>" name="hoten">
                                </div>
                                <div class="content-col-left__infomation--input">
                                    <label for="#">Tên đăng nhập: </label>
                                    <input type="text" id="username" value="<?= $username ?>" name="username">
                                </div>
                                <div class="content-col-left__infomation--input">
                                    <label for="#">Số điện thoại: </label>
                                    <input type="text" id="sdt" value="<?= $sdt ?>" name="sdt">
                                </div>

                                <div class="content-col-left__infomation--input">
                                    <label for="#">Email: </label>
                                    <input type="text" id="email" value="<?= $email ?>" name="email">
                                </div>
                                <div class="content-col-left__infomation--input">
                                    <label for="#">Giới tính: </label>
                                    <input type="text" id="gioitinh" value="<?= $gioitinh ?>" name="gioitinh">
                                </div>

                                <div class="content-col-left__infomation--input">
                                    <label for="#">Địa chỉ: </label>
                                    <input type="text" id="diachi" value="<?= $diachi ?>" name="diachi">
                                </div>
                                <div class="content-col-left__infomation--input">
                                    <label for="#">Chọn hình mới: </label>
                                    <input type="file" id="imageInput"  name="hinh">
                                </div>
                                <div class="default-btn-thaydoi">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="submit" name="capnhat" value="Lưu thay đổi">
                                </div>

                            </div>
                        
                        <form action="index.php?pg=changepassword" method="post">
                            <div class="default-btn-thaydoi">
                                <!-- <input type="hidden" name="id" value="<?= $id ?>"> -->
                                <input type="submit" name="capnhat" value="Đổi mật khẩu">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
