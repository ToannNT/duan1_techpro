<?php
extract($sp_detailed_order);

$voucher = $voucher / $slsp_in_bill;
$phivanchuyen = $phivanchuyen / $slsp_in_bill;

$total = ((int)$gia - (int)$voucher) + (int)$phivanchuyen;
// echo $slsp_in_bill;
if ($pttt == 1) {
    $pt_thanhtoan = "Thanh toán bằng thẻ tín dụng";
} else if ($pttt == 2) {
    $pt_thanhtoan = "Thanh toán bằng thẻ ATM";
} else if ($pttt == 3) {
    $pt_thanhtoan = "Thanh toán bằng thẻ ATM";
} else if ($pttt == 4) {
    $pt_thanhtoan = "Thanh toán khi nhận hàng";
} else {
    $pt_thanhtoan = "Thanh toán khi nhận hàng";
}


if ($status == 0) {
    $status_cart = "Đang chờ xét duyệt";
} else if ($status == 1) {
    $status_cart = "Đang giao";
} else if ($status == 2) {
    $status_cart = "Đã nhận được hàng";
} else if ($status == 3) {
    $status_cart = "Hoàn thành";
} else {
    $status_cart = "Đang chờ xét duyệt";
}


?>

<link rel="stylesheet" href="./view/layout/asset/css/detailed-order.css">

<!-- Begin Body Area -->
<div class="order_conteiner">
    <div class="order_back">
        <a style="font-weight: 500;" href="index.php?pg=my_order">
            <i class="bi bi-caret-left"></i> Trở lại
        </a>
    </div>
    <div class="order_table">
        <!-- <img style="max-width: 140px;" src="./view/layout/images/product/dt-iphone-15-den-3.jpg" alt=""> -->
        <table style="background-color: white;">
            <thead>
                <tr>
                    <th colspan="1" style="vertical-align: baseline; padding-top: 10px; width: 300px;">
                        <h3>Thông tin người nhận:</h3>
                    </th>
                    <th colspan="1">
                        <p style="font-size: 18px;" class="ttin_nguoidat">Tên: <?= $ten_nguoinhan ?> </p>
                        <!-- <br> -->
                        <p style="font-size: 18px;" class="ttin_nguoidat">Số điện thoại: (+84) <?= $sdt_nguoinhan ?>
                        </p>
                        <p style="font-size: 18px;" class="ttin_nguoidat">Địa chỉ: <?= $diachi_nguoinhan ?></p>

                    </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <div class="i__Phone" style="max-width: 140px;"><img src="./view/layout/images/product/<?= $hinh ?>" alt="">
                        </div>
                        <div style="margin-top: 15px;" class="inf__Phone">
                            <h4><?= $ten ?></h4>
                            <!-- <p>Phân loại hàng: 257GB,Titan tự nhiên</p> -->
                            <p>x<?= $soluong ?></p>
                        </div>
                    </td>
                    <td style="border-left: 1px solid #e5e5e5;"><?= number_format($gia, 0, '.', '.') ?>đ</td>
                </tr>
                <tr>
                    <td colspan="2">Tổng tiền hàng</td>
                    <td><?= number_format($gia, 0, '.', '.') ?>đ</td>
                </tr>
                <tr>
                    <td colspan="2">Phí vận chuyển</td>
                    <td>+<?= number_format($phivanchuyen, 0, '.', '.') ?>đ</td>
                </tr>
                <tr>
                    <td colspan="2">Voucher từ shop</td>
                    <td>- <?= number_format($voucher, 0, '.', '.') ?>đ</td>
                </tr>
                <tr>
                    <td colspan="2">Thành tiền</td>
                    <td><?= number_format($total, 0, '.', '.') ?>đ</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Phương thức thanh toán</td>
                    <td><?= $pt_thanhtoan ?></td>
                </tr>
                <tr>
                    <td colspan="2">Trạng thái</td>
                    <td><?= $status_cart ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- Body Area End Here -->