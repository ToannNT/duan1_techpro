<?php
$show_dm_all = show_DM($ds_danhmuc, $ds_brand);

$show_html_cart = "";
$j = 0;
$tt = 0;
$tong = 0;
if (isset($_SESSION['giohang']) && ($_SESSION['giohang']) != "") {
    foreach ($_SESSION['giohang'] as $item) {
        extract($item);
        $tong = (int)$price * (int)$quantity;
        $show_html_cart .= '
            <li>
                <a href="index.php?pg=productdetail&idpro=' . $idpro . '" class="minicart-product-image">
                    <img src="./view/layout/images/product/' . $img . '" alt="cart products">
                </a>
                <div  class="minicart-product-details  nav_cart">
                    <h6><a  href="index.php?pg=productdetail&idpro=' . $idpro . '">' . $name . '</a></h6>
                    <span>' . $price . ' x ' . $quantity . '</span>
                </div>
                <a href="index.php?pg=viewcart&del=' . $j . '" class="close" title="Remove">
                    <i class="fa fa-close"></i>
                </a>
            </li>

        ';
        $j++;
        $tt += $tong;
    }
}

if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    $html_account = '<li class="hm-minicart">
                        <div class="hm-minicart-trigger hm-minicart-trigger__user">
                            <a href="wishlist.html">
                            </a>
                            <span class="item-icon__user">

                            </span>
                        </div>
                        <div class="minicart minicart__register">
                            <ul style="margin-left: 5px;" class="minicart-product-list ">
                                <li>
                                    <a href="index.php?pg=account">Tài khoản của tôi</a>
                                </li>
                                <ul style=" margin-top: 10px;" class="minicart-product-list ">
                                    <li>
                                        <a href="index.php?pg=my_order">Đơn hàng</a>
                                    </li>                                   
                                </ul>
                                <li>
                                    <a href="index.php?pg=logout">Thoát</a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <!-- Header Mini Cart Area End Here -->
                </ul>
                <ul class="minicart-product-list__register" style="padding-top: 15px;">' . $username . '</ul>
                        ';
} else {
    $html_account = '
                    </ul>
            
                    <a style="padding-top: 15px; margin-left: 10px; font-size: 16px;"
                     href="index.php?pg=login_register">Đăng nhập</a>
                    <a style="padding-top: 15px; margin-left: 25px; font-size: 16px;"
                     href="index.php?pg=login_register">Đăng ký</a>

                    
                    ';
}
if (isset($_SESSION['f_Product']) && (count($_SESSION['f_Product']) > 0)) {
    $Favorite_count = '<span class="cart-item-count wishlist-item-count">' . count($_SESSION['f_Product']) . '</span>';
} else {
    $Favorite_count = '<span class="cart-item-count wishlist-item-count">0</span>';
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php
        if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
            $pg = $_GET['pg'];
            echo $pg;
        } else {
            echo "Home";
        }
        // }
        ?>
    </title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./view/layout/images/menu/logo/logo_full.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="./view/layout/asset/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./view/layout/asset/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="./view/layout/asset/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/helper.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./view/layout/asset/css/responsive.css">
    <!-- Modernizr js -->
    <script src="./view/layout/asset/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./view/layout/asset/css/myaccount.css">
    <!-- Link toast F8 -->
    <!-- <link rel="stylesheet" href="./view/layout/asset/css/toast.css">
    <script src="./view/layout/asset/js/toast.js"></script> -->
    <!-- Toast F8 2 cái trên -->
    <!-- Cái dưới là Font Awesome Lỗi, để chạy code F8 thì mở hết link ra, rồi Ctrl / cái Toast sweet đi -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <div class="body-wrapper">
        <header>
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="index.php">
                                    <img class="logo-main" src="./view/layout/images/menu/logo/logo_main.png" alt>
                                </a>
                            </div>
                        </div>
                        <div class="wrappr-nav-mid col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <form action="index.php?pg=product" method="post" class="hm-searchbox">
                                <input type="text" id="search_product_name" placeholder="Nhập tên sản phẩm">
                                <button class="li-btn" name="timkiem" type="submit">
                                    <i style="color: white;" class="fa fa-search"></i>
                                </button>
                            </form>
                            <div class="header-middle-right">
                                <ul style="display: flex;" class="hm-menu">
                                    <li class="hm-wishlist">
                                        <a href="index.php?pg=wishlist">
                                            <?= $Favorite_count ?>
                                            <i style="padding-top: 6px; color: red; font-size: 30px;" class="fa fa-heart-o"></i>
                                        </a>
                                    </li>

                                    <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count"><?= $j ?></span>
                                            </a>
                                            <span class="item-icon">
                                            </span>

                                        </div>
                                        <div style="width: 240px;" class="minicart">
                                            <ul class="minicart-product-list">


                                                <?php
                                                echo $show_html_cart;
                                                ?>
                                            </ul>
                                            <p class="minicart-total">Tổng:
                                                <span style="text-transform: none;"><?= number_format($tt, 0, '.', '.') ?>đ</span>
                                            </p>
                                            <div class="minicart-button">
                                                <a href="index.php?pg=viewcart" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>Xem giỏ hàng chi tiết</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <?= $html_account ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex;" class="header-bottom  d-none d-lg-block d-xl-block">
                <div style="justify-content: center;" class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.php">Trang chủ</a>
                                        </li>
                                        <li class="themne megamenu-holder">
                                            <a href="index.php?pg=product">Sản phẩm</a>
                                            <ul class="megamenu hb-megamenu">
                                                <?= $show_dm_all ?>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?pg=blog">Tin tức</a></li>
                                        <li><a href="index.php?pg=aboutus">Về chúng tôi</a></li>
                                        <li><a href="index.php?pg=contact">Liên hệ</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
        </header>