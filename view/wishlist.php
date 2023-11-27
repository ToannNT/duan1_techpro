<?php
    $tableWishlist="";
    if(isset($_SESSION['f_Product'])){
        extract($_SESSION['f_Product']);
        echo "<pre>";
        print_r($_SESSION['f_Product']);
        echo "</pre>";
        foreach ($_SESSION['f_Product'] as $item) {
            extract ($item);
            $i = 0;
            $linkDel='index.php?pg=delWishlistArray&ind='.$i;
            $tableWishlist.='<tr>
                                <td class="li-product-remove"><a href="' . $linkDel . '"><i class="fa fa-times"></i></a></td>
                                <td class="li-product-thumbnail"><a href="#"><img src="'.$hinh.'" alt="Hinh"></a></td>
                                <td class="li-product-name"><a href="#">'.$ten.'</a></td>
                                <td class="li-product-price"><span class="amount">'.$gia.'</span></td>
                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                            </tr>';
        }
        // echo var_dump($_SESSION['f_Product']);
    }else{
        $tableWishlist.= '<tr>
                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                <td class="li-product-thumbnail"><a href="#"><img src="images/wishlist-thumb/1.jpg" alt></a></td>
                <td class="li-product-name"><a href="#">Trống</a></td>
                <td class="li-product-price"><span class="amount">Trống</span></td>
                <td class="li-product-stock-status"><span class="in-stock">...</span></td>
                <td class="li-product-add-cart"><a href="index.php">Trang chủ</a></td>
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
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Xóa</th>
                                                <th class="li-product-thumbnail">Hình ảnh</th>
                                                <th class="cart-product-name">Tên sản phẩm</th>
                                                <th class="li-product-price">Giá niêm yết</th>
                                                <th class="li-product-stock-status">Tình trạng</th>
                                                <th class="li-product-add-cart">Thêm vào giỏ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?=$tableWishlist?>
                                            <!-- <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/wishlist-thumb/1.jpg" alt></a></td>
                                                <td class="li-product-name"><a href="#">Giro Civilia</a></td>
                                                <td class="li-product-price"><span class="amount">$23.39</span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/wishlist-thumb/2.jpg" alt></a></td>
                                                <td class="li-product-name"><a href="#">Pro Bike Shoes</a></td>
                                                <td class="li-product-price"><span class="amount">$30.50</span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/wishlist-thumb/3.jpg" alt></a></td>
                                                <td class="li-product-name"><a href="#">Nero Urban Shoes</a></td>
                                                <td class="li-product-price"><span class="amount">$40.19</span></td>
                                                <td class="li-product-stock-status"><span class="out-stock">out stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr> -->
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