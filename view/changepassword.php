<div class="page-section mb-60">
    <div class="container">
        <div class="row changepass_center">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="index.php?pg=changepassword" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Đổi mật khẩu</h4>
                        <div class="thongbao">
                            
                                <?php
                                if (isset($thongbao)) {
                                    echo '<div class="alert alert-danger">'.$thongbao.'</div>';
                                    unset($thongbao);
                                }else if(isset($thongbaothanhcong)){
                                    echo '<div class="alert alert-danger">'.$thongbaothanhcong.'</div>';
                                    unset ($thongbaothanhcong);
                                }
                                ?>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Mật khẩu cũ*</label>
                                <input class="mb-0" type="text" id="username" name="op"
                                    placeholder="Hãy nhập mật khẩu cũ">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Mật khẩu mới</label>
                                <input class="mb-0" type="password" id="password" name="np"
                                    placeholder="Mật khẩu mới">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Xác nhận mật khẩu</label>
                                <input class="mb-0" type="password" id="password" name="c_np"
                                    placeholder="Xác nhận">
                            </div>

                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Ghi nhớ tôi</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="index.php?pg=ft_password">Quên mật khẩu?</a>
                            </div>
                            <div class="default-btn">
                                <input class="name" name="thaydoi" type="submit" value="Thay đổi">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>