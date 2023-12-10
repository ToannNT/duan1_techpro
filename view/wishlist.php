<?php
$tableWishlist = "";
if (isset($_SESSION['f_Product']) && is_array($_SESSION['f_Product'])) {
    extract($_SESSION['f_Product']);
    // echo "<pre>";
    // print_r($_SESSION['f_Product']);
    // echo "</pre>";
    $i = 0;
    foreach ($_SESSION['f_Product'] as $item) {
        extract($item);
        $link = 'index.php?pg=productdetail&idpro=' . $id;
        $linkDel = 'index.php?pg=delWishlistArray&ind=' . $i;
        $tableWishlist .= '<tr>
                                <td class="li-product-remove"><a href="' . $linkDel . '"><i class="fa fa-times"></i></a></td>
                                <td class="li-product-thumbnail"><a href="' . $link . '"><img class="wishimg" src="./view/layout/images/product/' . $hinh . '" alt="Hinh"></a></td>
                                <td class="li-product-name"><a href="' . $link . '">' . $ten . '</a></td>
                                <td class="li-product-price"><span class="amount">' . number_format($gia, 0, '.', '.') . 'đ</span></td>
                                <td class="li-product-add-car">
                                
                                    <form action="index.php?pg=addcart" method="post">
                                        <input type="hidden" name="page_here" value="index.php?pg=wishlist">
                                        <input type="hidden" name="idpro" value="' . $item['id'] . '">
                                        <input type="hidden" name="img" value="' . $hinh . '">
                                        <input type="hidden" name="name" value="' . $ten . '">
                                        <input type="hidden" name="thanhtien" value="' . $gia . '">
                                        <input type="hidden" name="price" value="' . $gia . '">
                                        <input type="hidden" name="s_status" value="0">
                                        <input type="hidden" name="quantity" value="1">
                                        
                                        <button style="width: 105px; height: 38px; background-color: #0C2F4E;" type="submit" name="addcart" class="add-cart-btn__main">Thêm</button>
                                    </form> </td>
                            </tr>';
        $i++;
    }
    // echo var_dump($_SESSION['f_Product']);
} else {
    $tableWishlist .= '<tr>
                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                <td class="li-product-thumbnail"><a style="font-size: 15px; font-weight: bold;
                " href="index.php">Trống</a></td>
                <td class="li-product-name"><a style="font-size: 15px; font-weight: bold;
                " href="index.php">Trống</a></td>
                <td class="li-product-price"><a style="font-size: 15px; font-weight: bold;
                " href="index.php">Trống</a></td>
                <td class="li-product-add-cartt"><a  href="index.php">Trang chủ</a></td>
            </tr>';
}
// echo var_dump($_SESSION['f_Product']);
?>
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Wishlist Area Strat-->
<div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead style="background-color: #0C2F4E;">
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Hình ảnh</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá hiện tại</th>
                                    <th class="li-product-add-cart">Thêm vào giỏ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?= $tableWishlist ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Wishlist Area End-->
<!-- Begin Footer Area -->