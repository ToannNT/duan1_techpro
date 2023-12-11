<?php
if (isset($_GET['idpro'])) {
    $tenn = $_GET['idpro'];
}
// echo $tenn;
// unset($_SESSION['voucher']);
//sử dụng ajax để gán dữ liệu vào session sau đó tái sử dụng
// Bất tiện.  phải tự load trang mới cập nhật lại session !!!

//sau khi ap mã tự động tạo và lưu session , Khi thanh toán xong sẽ tự động xóa
if (isset($_SESSION['voucher']) && ($_SESSION['voucher'] != "")) {
    extract($_SESSION['voucher']);
    $voucher = $_SESSION['voucher']['variable_voucher'];
    $ten_voucher_dangSuDung = 'value="' . $ten_voucher . '"';
} else {
    $voucher = 0;
    $ten_voucher_dangSuDung = "";
}


// kiểm tra phải hội viên khôn







// LOAD SẢN PHẨM ĐƯỢC CHỌN THANH TOÁN

$html_checkout = '';
$tt = 0;

if (isset($_GET['idpro']) && ($_GET['idpro'] != "")) {


    $idpro = $_GET['idpro'];
    $name = $_GET['name'];
    $img = $_GET['img'];
    $quantity = $_GET['quantity'];
    $price = (int)$_GET['price'];
    $thanhtien = (int)$_GET['thanhtien'];

    $html_all_form = '
<form id="checkFormCheckout" action="index.php?pg=checkout&idpro=' . $idpro . '&name=' . $name . '&quantity=' . $quantity . '&price=' . $price . '&thanhtien=' . $thanhtien . '&img=' . $img . '"
method="post">
';

    $html_checkout .= '
<tr class="cart_item">
    <td class="cart-product-name">' . $name . '</td>
    <td class="cart-product-total">
        <strong class="product-quantity">× ' . $quantity . '</strong>
    </td>
    <td class="cart-product-total"><span class="amount">' . number_format($price, 0, '.', '.') . 'đ</span></td>
</tr>
';
    $thanhtien = $thanhtien * $quantity;
    $tt += $thanhtien;
    // echo "cách" . $tt . "Đang trong idpro ne";
} else {

    $html_all_form = '<form id="checkFormCheckout" action="index.php?pg=checkout" method="post">';



    if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
        foreach ($_SESSION['giohang'] as $item) {
            extract($item);
            if ($s_status == 1) {
                $html_checkout .= '
    <tr class="cart_item">
        <td class="cart-product-name">' . $name . '</td>
        <td class="cart-product-total">
            <strong class="product-quantity">× ' . $quantity . '</strong>
        </td>
        <td class="cart-product-total"><span class="amount">' . number_format($price, 0, '.', '.') . 'đ</span></td>
    </tr>
    ';
                $tt += $thanhtien;
            }
        }
    }
}



//LOAD DỮ LIỆU KHI CÓ TÀI KHOẢNG
if (isset($_SESSION['s_user']) && !empty($_SESSION['s_user'])) {
    extract($_SESSION['s_user']);

    if ($hoivien == 1) {
        $giamgiahoivien = (int)$tt * 0.05;
        $tb_hv = "LV1 giảm 5%";
    } else if ($hoivien == 2) {
        $giamgiahoivien = (int)$tt * 0.1;
        $tb_hv = "LV2 giảm 10%";
    } else if ($hoivien == 3) {
        $giamgiahoivien = (int)$tt * 0.2;
        $tb_hv = "LV4 giảm 20%";
    } else {
        $giamgiahoivien = 0;
        $tb_hv = "";
    }



    $hovaten_tk = 'value="' . $hoten . '"';
    $email_tk = 'value="' . $email . '"';
    $sdt_tk = 'value="' . $sdt . '"';
    $diachi_tkk = 'value="' . $diachi . '"';
} else {
    $giamgiahoivien = 0;
    $tb_hv = "";
    $hovaten_tk = '';
    $email_tk = '';
    $sdt_tk = '';
    $diachi_tkk = '';
}







// Lấy thời gian hiện tại
date_default_timezone_set('Asia/Ho_Chi_Minh');

$currentTime = new DateTime();
$giaohangnhanh = new DateTime();
$giaohangtietkiem = new DateTime();



// Cộng thêm
// $currentTime->modify('+1 days');
$giaohangnhanh->modify('+1 days');
$giaohangtietkiem->modify('+3 days');


// Định dạng lại để hiển thị ngày mới sau khi cộng thêm 3 ngày
$newTime = $currentTime->format('Y-m-d');
$newTime_nhanh = $giaohangnhanh->format('Y-m-d');
$newTime_tietkiem = $giaohangtietkiem->format('Y-m-d');

$ngaydat = $currentTime->format('Y-m-d H:i:s');

?>
<!-- END phppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp  -->




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
    <?= $html_all_form ?>


    <input type="hidden" name="ngaydat" value="<?= $ngaydat ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <h3>Đã có tài khoản?
                        <a href="index.php?pg=login_register&page_follow=checkout"><span id="showlogin">Nhấn vào đây
                                để đăng nhập. </span></a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- <form action="#"> -->
                <div class="checkbox-form">
                    <h3>Chi tiết thanh toán</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Họ và tên<span class="required">*</span></label>
                                <input placeholder type="text" name="hoten" <?php echo $hovaten_tk ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Số điện thoại <span class="required">*</span></label>
                                <input placeholder="" type="text" name="dienthoai" <?php echo $sdt_tk ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Địa chỉ email <span class="required">*</span></label>
                                <input placeholder="Email của bạn" type="email" name="email" <?php echo $email_tk ?>>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ<span class="required">*</span></label>
                                <input placeholder="Địa chỉ" type="text" name="diachi" <?php echo $diachi_tkk ?>>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list create-acc">
                                <!-- <a href="#">Tạo tài khoản để nhận thêm voucher ?</a> -->
                                <div class="coupon-accordion">
                                    <!--Accordion Start-->
                                    <h3 style="font-size: 14px; text-transform: none; border: none; padding-bottom: 15px;">
                                        Tạo tài khoản mới?
                                        <a href="index.php?pg=login_register"><span id="showlogin">Nhấn vào đây tạo
                                                tài khoản. </span></a>
                                    </h3>

                                </div>

                            </div>
                            <!-- <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng
                                        cũ,
                                        vui lòng đăng nhập ở đầu trang.</p>
                                    <label>Tên đăng nhập<span class="required">*</span></label>
                                    <input placeholder="username" type="text">
                                    <label>Mật khẩu<span class="required">*</span></label>
                                    <input placeholder="password" type="password">
                                </div> -->
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
                                    <label>Họ và tên: <span class="required">*</span></label>
                                    <input placeholder type="text" name="nguoinhan_hoten">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input placeholder type="text" name="nguoinhan_dienthoai">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ<span class="required">*</span></label>
                                    <input placeholder type="text" name="nguoinhan_diachi">
                                </div>
                            </div>
                        </div>
                        <div class="order-notes">
                            <div class="checkout-form-list">
                                <label>Ghi chú</label>
                                <textarea id="checkout-mess" cols="30" name="order_notes" rows="10" placeholder="Ghi chú về đơn hàng của bạn."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
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
                                    <input id="tongcongtien" type="hidden" name="tt" value="<?= $tt ?>">
                                    <td><span class="amount"><?= number_format($tt, 0, '.', '.') ?>đ</span></td>

                                </tr>
                                <tr class="cart-subtotal">
                                    <th>Voucher</th>
                                    <td><span class="amount">-<?= number_format($voucher, 0, '.', '.') ?>đ</span>
                                    </td>
                                    <input id="html_voucher" type="hidden" name="voucher" value="<?= $voucher ?>">
                                </tr>

                                <!-- Hội viên  -->
                                <tr class="cart-subtotal">
                                    <th>Hội viên: <span> <?= $tb_hv ?></span></th>
                                    <td>
                                        <span class="amount">-<?= number_format($giamgiahoivien, 0, '.', '.') ?>đ</span>
                                    </td>
                                    <input id="html_hoivien" type="hidden" name="hoivien" value="<?= $giamgiahoivien ?>">
                                </tr>

                                <!-- Hidden nằm trong js  -->
                                <!-- <input type="hidden" name="tong_thanhtoan" value=" $tongthanhtoan"> -->

                                <tr class="cart-subtotal">
                                    <th>Vận chuyển</th>
                                    <td><span id="html_ship" class="amount">đ</span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Tổng thanh toán:</th>
                                    <!-- Hidden nằm trong js  -->
                                    <!-- <input type="hidden" name="tong_thanhtoan" value=" $tongthanhtoan"> -->

                                    <td>
                                        <strong>
                                            <span id="tongthanhtoan" class="amount"></span>
                                        </strong>
                                    </td>

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
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Nhập mã giảm giá:
                                            </a>
                                            <span><?= $thongbaovoucher ?></span>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" style="background-color: #f2f2f2;" data-parent="#accordion">
                                        <form action="index.php?pg=checkout" method="post">
                                            <p class="checkout-coupon">
                                                <input placeholder="Coupon code" <?= $ten_voucher_dangSuDung ?> name="value_voucher" type="text">
                                                <input class="voucher-check" name="check_voucher" type="submit">
                                                <!-- <button type="submit" name="check_voucher"
                                                        id="check_voucher">nhập</button> -->
                                            </p>
                                        </form>
                                    </div>
                                </div><br>






                                <!-- // đơn vị vận chuyểnnnnnnnnnnnnnnnnn -->
                                <div class="card">
                                    <div class="card-header" id="">
                                        <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
                                                Đơn vị vận chuyển
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" data-parent="#accordion">
                                        <div style="background: #f2f2f2 none repeat scroll 0 0;" class="card-body">
                                            <div class="pay-th">
                                                <div class="pay-th-text">
                                                    <div class="httt">
                                                        <input checked onclick="calculateTotal()" name="ptvc" value="25000" type="radio">
                                                        <p>Giao hàng Nhanh</p>
                                                        <span style="margin-left: 10px; font-size: 17px; font-weight: bold;">25.000đ
                                                        </span>
                                                    </div>
                                                    <p>Dự kiến nhận hàng vào ngày <?= $newTime_nhanh ?></p>
                                                    <div class="httt">
                                                        <input onclick="calculateTotal()" name="ptvc" value="16000" type="radio">
                                                        <p>Giao hàng tiết kiệm</p>
                                                        <span style="margin-left: 10px; font-size: 17px; font-weight: bold;">16.000đ
                                                        </span>
                                                    </div>
                                                    <p>Dự kiến nhận hàng vào ngày <?= $newTime_tietkiem ?></p>

                                                    <div class="httt">
                                                        <input onclick="calculateTotal()" name="ptvc" value="60000" type="radio">
                                                        <p>Giao hàng Hỏa Tốc</p>
                                                        <span style="margin-left: 10px; font-size: 17px; font-weight: bold;">60.000đ
                                                        </span>
                                                    </div>
                                                    <p>Dự kiến nhận hàng vào ngày <?= $newTime ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="">
                                        <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseTwo">
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
                                                        <input name="pttt" checked value="1" type="radio">
                                                        <p>Thanh toán bằng thẻ tín dụng </p><img src="http://localhost/project/uploads/1.png" alt>
                                                    </div>
                                                    <div class="httt">
                                                        <input name="pttt" value="2" type="radio">
                                                        <p>Thanh toán bằng thẻ ATM</p>
                                                    </div>
                                                    <div class="httt">
                                                        <input name="pttt" value="3" type="radio">
                                                        <p>Thanh toán bằng Momo </p><img class="momo" src="http://localhost/project/uploads/2.png" alt>
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
                                <input value="Đặt hàng" name="checkout" type="submit">
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