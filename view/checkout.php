<?php
$html_checkout = '';
$tt = 0;
// $tong = 0;
if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {

    foreach ($_SESSION['giohang'] as $item) {
        extract($item);
        if ($s_status == 1) {
            // $tong = (int)$price * (int)$quantity;

            $html_checkout .= '
            <tr class="cart_item">
                <td class="cart-product-name">' . $name . '</td>
                <td class="cart-product-total">
                <strong class="product-quantity">× ' . $quantity . '</strong></td>
                <td class="cart-product-total"><span class="amount">' . number_format($price, 0, '.', '.') . 'đ</span></td>


            </tr>
                 ';
            $tt += $price;
        }
    }
}

?>

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Thanh toán</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <form action="#" method="post">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-accordion">
                        <!--Accordion Start-->
                        <h3>Đã có tài khoản? <span id="showlogin">Nhấn vào đây để đăng nhập. </span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Tên đăng nhập hoặc email <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Mật khẩu <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <input value="Đăng nhập" type="submit">
                                        <label>
                                            <input type="checkbox">
                                            Ghi nhớ tài khoản
                                        </label>
                                    </p>
                                    <p class="lost-password"><a href="#">Quên mật khẩu?</a></p>
                                </form>
                            </div>
                        </div>
                        <!--Accordion End-->
                        <!--Accordion Start-->
                        <!--Accordion End-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ và tên<span class="required">*</span></label>
                                        <input placeholder type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số điện thoại <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ email <span class="required">*</span></label>
                                        <input placeholder type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ<span class="required">*</span></label>
                                        <input placeholder="Địa chỉ nhận hàng" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label>Tạo mới tài khoản?</label>
                                    </div>
                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p>Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng
                                            cũ,
                                            vui lòng đăng nhập ở đầu trang.</p>
                                        <label>Tên đăng nhập<span class="required">*</span></label>
                                        <input placeholder="username" type="text">
                                        <label>Mật khẩu<span class="required">*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Gửi đến địa chỉ khác?</label>
                                        <input id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Họ và tên người nhận <span class="required">*</span></label>
                                            <input placeholder type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại người nhận <span class="required">*</span></label>
                                            <input placeholder type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ người nhận<span class="required">*</span></label>
                                            <input placeholder type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Ghi chú về đơn hàng của bạn."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 45%;" class="cart-product-name">Sản phẩm</th>
                                        <th style="width: 10%;" class="cart-product-total">Số lượng</th>
                                        <th style="width: 45%;" class="cart-product-total">Tổng cộng</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    <?= $html_checkout ?>
                                    <!-- <tr class="cart_item">
                                    <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                            × 1</strong></td>
                                    <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                </tr> -->




                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tổng tiền hàng</th>
                                        <td><span class="amount"><?= number_format($tt, 0, '.', '.') ?>đ</span></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Voucher</th>
                                        <td><span class="amount">-100.000đ</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng thanh toán:</th>
                                        <td><strong><span class="amount">215.00đ</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>




                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" active id="#payment-3">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Nhập mã giảm giá:
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" style="background-color: #f2f2f2;"
                                            data-parent="#accordion">
                                            <form action="#">
                                                <p class="checkout-coupon">
                                                    <input placeholder="Coupon code" type="text">
                                                    <input value="Apply Coupon" type="submit">
                                                </p>
                                            </form>
                                        </div>
                                    </div><br>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Hình thức thanh toán
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="pay-th">
                                                    <div class="pay-th-text">
                                                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín
                                                            dụng
                                                            sẽ không bao giờ được lưu lại.</p>
                                                        <div class="httt">
                                                            <input name="pttt" value="1" type="radio">
                                                            <p>Thanh toán bằng thẻ tín dụng </p><img
                                                                src="http://localhost/project/uploads/1.png" alt>
                                                        </div>
                                                        <div class="httt">
                                                            <input name="pttt" value="2" type="radio">
                                                            <p>Thanh toán bằng thẻ ATM</p>
                                                        </div>
                                                        <div class="httt">
                                                            <input name="pttt" value="3" type="radio">
                                                            <p>Thanh toán bằng Momo </p><img class="momo"
                                                                src="http://localhost/project/uploads/2.png" alt>
                                                        </div>
                                                        <div class="httt">
                                                            <input name="pttt" value="4" type="radio">
                                                            <p>Thanh toán khi nhận hàng</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Đặt hàng" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--Checkout Area End-->
<!-- Begin Footer Area -->