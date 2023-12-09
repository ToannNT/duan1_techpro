<?php
$get_array_suser = get_user($id);
$member_img = "";
$member_lv = "";
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    if ($get_array_suser != $_SESSION['s_user']) {
        extract($get_array_suser);
    } else {
        extract($_SESSION['s_user']);
    }
    if ($_SESSION['s_user']['hoivien'] == 0) {
        $member_img = "member_new.jpg";
        $member_lv = "Thành viên: Mới";
    } else if ($_SESSION['s_user']['hoivien'] == 1) {
        $member_img = "member_silver.png";
        $member_lv = "Thành viên: Bạc";
    } else if ($_SESSION['s_user']['hoivien'] == 2) {
        $member_img = "member_gold.png";
        $member_lv = "Thành viên: Vàng";
    } else if ($_SESSION['s_user']['hoivien'] == 3) {
        $member_img = "member_diamon.png";
        $member_lv = "Thành viên: Kim cương";
    }
} else {
    header('location: index.php');
}
if (isset($hinh)) {
    $hinh_ac = '
            <img style="border-radius: 50%;" id="previewImage"name="hinh" src="./view/layout/images/user/' . $hinh . '" alt>
        ';
} else {
    $hinh_ac = '<img id="previewImage"name="hinh" src="./view/layout/images/user/user_empty.png" alt>';
}
?>

<div class="wrapper-container">
    <form action="index.php?pg=update_user" method="post" enctype="multipart/form-data">
        <div class="container-fluid ">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div class="content-col-left bg- p-4 pt-50">
                            <div class="content-col-left__avata">
                                <!-- <img style="border-radius: 50%;" id="previewImage"name="hinh" src="./view/layout/images/user/<?= $hinh ?>" alt> -->
                                <?= $hinh_ac ?>
                            </div>
                            <div class="content-col-left__name">
                                <?= $hoten ?>
                            </div>
                            <div class="content-col-left__lv"><?= $member_lv ?></div>
                            <div class="content-col-left__cart"><img src="./view/layout/images/user/<?= $member_img ?>"
                                    alt>
                            </div>
                        </div>
                        <!-- 
                        <div class="content-col-left bg- p-4 pt-50">
                            <div class="content-col-left__avata con-content">
                                <p>Cách thành hội viên:</p>
                            </div>
                            <div class="content-col-left__lv reg-content"><a href="index.php?pg=login_register">Đăng kí
                                    tài khoản tại trang web của chúng tôi</a></div>
                        </div> -->

                        <div class="content-col-left bg- p-4 pt-50">
                            <div class="content-col-left__avata con-content">
                                <p style="font-size: 20px;">Ưu đãi hội viên</p>
                            </div>
                            <div class="content-col-left__lv reg-content"> * Lv1 Bạc:
                                <img class="icon_bac" src="./view/layout/images/user/star_lv1.png" alt="">
                                <br>Tổng thanh toán > 10tr <br>
                                (Giảm
                                5% tổng tiền hàng tất cả các hóa đơn)
                            </div>
                            <div class="content-col-left__lv reg-content"> * Lv2 Vàng:
                                <img class="icon_bac" src="./view/layout/images/user/star_lv2.png" alt="">
                                <br>Tổng thanh toán > 20tr <br>
                                (Giảm
                                10% tổng tiền hàng tất cả các hóa đơn)
                            </div>
                            <div class="content-col-left__lv reg-content"> * Lv3 Kim cương:
                                <img class="icon_bac" src="./view/layout/images/user/star_lv3.png" alt="">
                                <br>Tổng thanh toán > 50tr <br>
                                (Giảm
                                20% tổng tiền hàng tất cả các hóa đơn)
                            </div>

                            <div style="text-align: center;" class="content-col-left__lv reg-content pro-content">
                                <a style="color: black;
    font-size: 16px;" href="index.php?pg=product">Mua
                                    hàng ngay</a>
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
                                    <input type="file" id="imageInput" name="hinh">
                                </div>
                                <div class="flex-btn-thaydoi">
                                    <div class="default-btn-thaydoi">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="submit" name="capnhat" value="Lưu thay đổi">
                                    </div>
                                    <div class="default-btn-thaydoi">
                                        <a href="index.php?pg=changepassword">Đổi mật khẩu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>