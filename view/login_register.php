<?php

if (isset($_GET['page_follow'])) {
    $page_follow = $_GET['page_follow'];
} else {
    $page_follow = '';
}

if (isset($_GET['idpro'])) {
    $page_follow = 'productdetail&idpro=' . $_GET['idpro'];
} else {
    $page_follow = '';
}
// echo $page_follow;

?>

<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="index.php?pg=login" method="post" onsubmit="return validateLoginForm()">
                    <input type="hidden" name="page_here_ne" value="<?= $page_follow ?>">
                    <div class="login-form">
                        <h4 class="login-title">Đăng nhập</h4>

                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label for="username">Tên đăng nhập*</label>
                                <input class="mb-0" type="text" id="username" name="username" placeholder="Hãy nhập tên đăng nhập">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" type="password" id="password" name="password" placeholder="Mật khẩu của bạn">
                            </div>

                            <div class="default-btn">
                                <input class="name" name="dangnhap" type="submit" value="Đăng nhập">
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right" style="margin-left: 165px;">
                                <a href="index.php?pg=ft_password">Quên mật khẩu?</a>
                            </div>

                        </div>
                        <h10>
                            <?php
                            if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) {
                                echo $_SESSION['tb_dangnhap'];
                                unset($_SESSION['tb_dangnhap']);
                            }
                            ?>
                        </h10>
                    </div>

                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="index.php?pg=register" method="post" onsubmit="return validateRegistrationForm()">
                    <div class="login-form">
                        <h4 class="login-title">Đăng ký</h4>
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <label>Họ và tên</label>
                                <input class="mb-0" type="text" id="hoten" name="hoten" placeholder="Mời nhập họ và tên">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Tên đăng nhập</label>
                                <input class="mb-0" type="text" id="username" name="username" placeholder="Mời nhập tên đăng nhập">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email*</label>
                                <input class="mb-0" type="email" id="email" name="email" placeholder="Địa chỉ email">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Số điện thoại*</label>
                                <input class="mb-0" type="sdt" id="sdt" name="sdt" placeholder="Số điện thoại của bạn">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" type="password" id="password" name="password" placeholder=" Nhập mật khẩu">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Nhập lại mật khẩu</label>
                                <input class="mb-0" type="password" id="repassword" name="repassword" placeholder="Mời nhập lại mật khẩu">
                            </div>
                            <div class="default-btn">
                                <input class="name" type="submit" name="dangky" value="Đăng ký">
                            </div>
                        </div>
                        <h10>
                            <?php
                            if (isset($_SESSION['tb_dangky']) && ($_SESSION['tb_dangky'] != "")) {
                                echo $_SESSION['tb_dangky'];
                                unset($_SESSION['tb_dangky']);
                            }
                            ?>
                        </h10>
                        <?php
                        if (isset($_SESSION['success_message'])) {
                            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                            unset($_SESSION['success_message']);
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>