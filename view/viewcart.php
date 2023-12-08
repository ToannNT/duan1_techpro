<?php
$html_viewcart = '';
$tt = 0;
$tong = 0;
$i = 0;
if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
    // echo var_dump($_SESSION["giohang"]);
    foreach ($_SESSION['giohang'] as $item) {
        extract($item);
        $checkboxChecked = $s_status == 1 ? 'checked' : '';
        $tong = (int)$price * (int)$quantity;
        $html_viewcart .= '
                    <tr  productId="' . $idpro . '"  s_status="' . $s_status . '"  thanhtien="' . $thanhtien . '">
                    <td class="li-product-remove"><a href="index.php?pg=viewcart&del=' . $i . '"><i class="fa fa-times"></i></a></td>
                    <td class="li-product-thumbnail"><a href="#"><img src="./view/layout/images/product/' . $img . '" alt="List Product Image"></a></td>
                    <td class="li-product-name"><a href="#">' . $name . '</a></td>
                    <td class="quantity">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" value="' . $quantity . '" type="text">
                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                            </div>
                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                            </div>
                        </div>
                    </td>
                    <td class="product-subtotal"><span class="amount">' . number_format($price, 0, '.', '.') . 'đ</span></td>
                    <td class="product-subtotal"><input type="checkbox" class="this_checkbox name="" ' . $checkboxChecked . ' id=""></span></td>
                </tr>
                
        ';
        $tt += $tong;
        $i++;
    }
}

?>

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">

    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <a href="index.php?pg=viewcart&del=-1" style=" font-size: 17px;">Xóa tất cả</a>
                        <div class="row ">
                            <table class="table col-md-9">
                                <thead style="background-color: #0C2F4E;">
                                    <tr style="object-fit: cover;">
                                        <th class="li-product-remove">Xoá</th>
                                        <th class="li-product-thumbnail">Hình ảnh</th>
                                        <th class="cart-product-name">Tên sản phẩm</th>
                                        <th class="li-product-quantity">Số lượng</th>
                                        <th class="li-product-subtotal">Giá</th>
                                        <th class="li-product-subtotal">Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (($html_viewcart) != '') {
                                        echo $html_viewcart;
                                    } else {
                                        echo '
                                        <tr>
                                            <td style="border: 2px solid white; width: 100%; height: 300px;" colspan="6">
                                                
                                                    <img style="object-fit: contain; width: 100%; height: 100%;" style="width: 100%; height: 100px;" src="./view/layout/images/product/emptycart.png" alt="List Product Image">   
                                                
                                            </td>
                                        </tr>
                                        ';
                                    }
                                    ?>

                                    <!-- <tr>
                                        <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail"><a href="#"><img src="./view/layout/images/product/small-size/5.jpg" alt="Li's Product Image"></a></td>
                                        <td class="li-product-name"><a href="#">Accusantium dolorem1</a></td>
                                        <td class="quantity">
                                            <label>Số lượng</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                </div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                        <td class="product-subtotal"><input type="checkbox" name="" id=""></span></td>
                                    </tr> -->



                                </tbody>
                            </table>
                            <div class="col-md-3 ml-auto">
                                <div class="cart-page-total">
                                    <h4>Tổng giỏ hàng</h4>
                                    <ul>
                                        <li>Tạm tính<span><?= number_format($tt, 0, '.', '.') ?>đ</span></li>
                                        <li>Tổng tiền<span><?= number_format($tt, 0, '.', '.') ?>đ</span></li>
                                    </ul>
                                    <a id="checkout-link" href="index.php?pg=checkout">Đến trang thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->