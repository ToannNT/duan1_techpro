<?php
$show_dssp_hot = show_SP($dssp_hot);
$show_dssp_new = show_SP($dssp_new);
$show_dssp_sale = show_SP($dssp_sale);
$show_dssp_dienthoai = show_SP($dssp_phone);
$show_dssp_laptop = show_SP($dssp_laptop);
$show_dssp_suggest = show_SP($dssp_suggest);
// echo var_dump($dsdanhmuc_all);
// echo var_dump($_SESSION['giohang']);

function pdo_querya($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function show_sl(){
    $sql = "SELECT * FROM slider WHERE trangthai = 1";
    return pdo_querya($sql);
}
function show_bn12(){
    $sql = "SELECT * FROM banner WHERE trangthai = 1";
    return pdo_querya($sql);
}
function showsttbn(){
    $showdsbn12 = show_bn12();
    $banner = array();
    foreach ($showdsbn12 as $value) {
        extract($value);
        if ($stt == 1) {
            $banner['stt1'] = '<div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                    <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                </div> ';
        } else if ($stt == 2) {
            $banner['stt2'] = '<div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                        <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                    </div> ';
        } else if ($stt == 3) {
            $banner['stt3'] = '
                    <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                        <div class="single-banner single-banner__three">
                            <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                        </div>
                    </div>';
        } else if ($stt == 4) {
            $banner['stt4'] = '
                    <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                        <div class="single-banner single-banner__three">
                            <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                        </div>
                    </div>';
        } else if ($stt == 5) {
            $banner['stt5'] = '<div class="col-lg-4 col-md-4 text-center pt-xs-30">
                                <div class="single-banner single-banner__three">
                                    <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                                </div>
                            </div>';
        } else if ($stt == 6) {
            $banner['stt6'] = '<div class="single-banner shop-page-banner">
                        <a href="index.php?pg=product"><img src="./view/layout/images/banner/' . $img . '"></a>
                    </div>';
        } else if ($stt == 7) {
            $banner['stt7'] = '<div class="li-static-home-image">
                    <a href="index.php?pg=productdetail&idpro=' . $id_product . '"><img src="./view/layout/images/banner/' . $img . '"></a>
                    </div>';
        }
    }
    return $banner;
}
function showsttsl(){
    $showsl = show_sl();
    $sl = array();
    foreach ($showsl as $value) {
        extract($value);
        if ($stt == 1) {
            $sl['stt1'] =' <div class="single-slide align-center-left  animation-style-01 bg-1">
                            <div class="slider-progress"></div>
                                <a href="index.php?pg=productdetail&idpro=' . $id_product . '">
                                    <img src="./view/layout/images/slider/'.$img.'" alt="">
                                </a>
                            <div class="slider-content">
                            </div>
                        </div>';
        } else if ($stt == 2) {
            $sl['stt2'] = '<div class="single-slide align-center-left animation-style-02 bg-2">
                            <div class="slider-progress"></div>
                            <a href="index.php?pg=productdetail&idpro=' . $id_product . '">
                                    <img src="./view/layout/images/slider/'.$img.'" alt="">
                                </a>
                            <div class="slider-content">
                            </div>
                        </div>';
        } else if ($stt == 3) {
            $sl['stt3'] = '
                            <div class="single-slide align-center-left animation-style-01 bg-3">
                                <div class="slider-progress"></div>
                                    <a href="index.php?pg=productdetail&idpro=' . $id_product . '">
                                        <img src="./view/layout/images/slider/'.$img.'" alt="">
                                    </a>
                                    <div class="slider-content">
                                    <div class="default-btn slide-btn"></div>
                                </div>
                            </div>';
        }
    }
    return $sl;
}
$showsttsl = showsttsl();
$banners = showsttbn();
?>

<!-- Begin Slider With Banner Area -->
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <!-- sl111. -->
                        <?=$showsttsl['stt1']?>
                        <?=$showsttsl['stt2']?>
                        <?=$showsttsl['stt3']?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <!-- ///11111//// -->
                <?= $banners['stt1'] ?>
                <!-- ///22222//// -->
                <?= $banners['stt2'] ?>
            </div>
        </div>
    </div>
</div>
<!-- Slider With Banner Area End Here -->
<!-- Begin Product Area -->
<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">

                        <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Hàng mới
                                    về</span></a></li>
                        <li><a data-toggle="tab" href="#li-bestseller-product"><span>Sản phẩm bán chạy</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#li-featured-product"><span>Sản phẩm giảm giá</span></a>
                        </li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">







                        <?= $show_dssp_new ?>









                    </div>
                </div>
            </div>
            <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">





                        <?= $show_dssp_hot ?>





                    </div>
                </div>
            </div>
            <div id="li-featured-product" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">




                        <?= $show_dssp_sale ?>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner">
    <div class="container">
        <div class="row">
            <!-- 33333333333 -->
            <?= $banners['stt3'] ?>
            <!-- 444444444444 -->
            <?= $banners['stt4'] ?>
            <!-- 555555555555 -->
            <?= $banners['stt5'] ?>
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Điện thoại</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html"> Video</a></li>
                        <li><a href="shop-left-sidebar.html">Máy tính</a></li>
                        <li><a href="shop-left-sidebar.html">Thiết bị điện tử</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">

                        <?= $show_dssp_dienthoai ?>

                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Li's TV & Audio Product Area -->

<!-- Begin Featured Product With Banner Area -->
<div class="featured-pro-with-banner mt-sm-5 pb-sm-10 mt-xs-5 pb-xs-10">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Featured Banner Area -->

            <!-- Li's Featured Banner Area End Here -->
            <!-- Begin Featured Product Area -->
            <div class="col-lg-12">
                <div class="featured-product pt-sm-30 pt-xs-30">
                    <div class="li-section-title">
                        <h2>
                            <span>Siêu sale vào ngày Black Friday</span>
                        </h2>
                    </div>
                    <!-- 666666666 -->
                    <?= $banners['stt6'] ?>
                    <?php
                    $data_blackfriday = get_blackfriday();
                    ?>
                    <div class="row">
                        <div class="featured-product-active owl-carousel">
                            <?php foreach ($data_blackfriday as $tt) :
                                extract($tt);
                                if ($giamgia > 0) {
                                    $gia_muangay = $giamgia;
                                    $giatien_addcart = '
                                    <input type="hidden" name="price" value="' . $giamgia . '">
                                    ';
                                    $thanhTien_addcart = '
                                    <input type="hidden" name="thanhtien" value="' . $giamgia . '">
                                    ';
                                } else {
                                    $gia_muangay = $gia;
                                    $giatien_addcart = '
                                    <input type="hidden" name="price" value="' . $gia . '">
                                    ';
                                    $thanhTien_addcart = '
                                    <input type="hidden" name="thanhtien" value="' . $gia . '">
                                    ';
                                }
                            ?>
                                <div class="featured-product-bundle">
                                    <div class="featured-pro-wrapper mb-30 mb-sm-25">
                                        <div class="product-img">
                                            <a href="index.php?pg=productdetail&idpro=<?= $tt['id'] ?>">
                                                <img src="./view/layout/images/product/<?= $tt['hinh'] ?>">
                                            </a>
                                        </div>
                                        <div class="featured-pro-content">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">
                                                        <?= $tt['ten'] ?>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="featured-product-name" href="index.php?pg=productdetail&idpro=<?= $tt['id'] ?>">Chỉ trong
                                                    ngày hôm nay</a></h4>
                                            <div class="featured-price-box">
                                                <span class="new-price new-price-2">35.000.000đ</span>
                                                <span class="old-price">36.000.000đ</span>
                                                <!-- <span class="discount-percentage">-7%</span> -->
                                            </div>
                                            <div class="featured-product-action">
                                                <ul style="display: flex; justify-content: start;" class="add-actions-link">

                                                    <form>
                                                        <input type="hidden" name="page_here" value="index.php?pg=checkout">
                                                        <input type="hidden" name="idpro" value="<?= $id ?>">
                                                        <input type="hidden" name="img" value="<?= $hinh ?>">
                                                        <input type="hidden" name="name" value="<?= $ten ?>">
                                                        <input type="hidden" name="giamuangay" value="<?= $gia_muangay ?>">

                                                        <?= $giatien_addcart ?>
                                                        <input type="hidden" name="s_status" value="1">
                                                        <?= $thanhTien_addcart ?>

                                                        <input type="hidden" name="quantity" value="1">


                                                        <a style="text-align: center; margin-right: 5px; width: 100px;
                                                        " class="add-cart-btn" href="index.php?pg=checkout&idpro=<?= $id ?>&name=<?= $ten ?>&quantity=1&price=<?= $gia_muangay ?>&thanhtien=<?= $gia_muangay ?>&img=<?= $hinh ?>">Mua
                                                            ngay</a>
                                                    </form>





                                                    <form action="index.php?pg=addcart" method="post">
                                                        <input type="hidden" name="page_here" value="index.php">
                                                        <input type="hidden" name="idpro" value="<?= $id ?>">
                                                        <input type="hidden" name="img" value="<?= $hinh ?>">
                                                        <input type="hidden" name="name" value="<?= $ten ?>">

                                                        <?= $giatien_addcart ?>
                                                        <input type="hidden" name="s_status" value="0">
                                                        <?= $thanhTien_addcart ?>

                                                        <input type="hidden" name="quantity" value="1">

                                                        <button style="text-align: center; margin-right: 5px; width: 100px;
                                                        " type="submit" name="addcart" class="add-cart-btn__main">Thêm</button>
                                                    </form>






                                                    <form action="index.php?pg=addtoWishlist" method="post">
                                                        <input type="hidden" name="img" value="../view/layout/images/product<?= $hinh ?>">
                                                        <form action="index.php?pg=addtoWishlist" class="formWish" method="post">
                                                            <input type="hidden" name="id" value="<?= $id ?>">
                                                            <input type="hidden" name="img" value="<?= $hinh ?>">
                                                            <input type="hidden" name="name" value="<?= $ten ?>">
                                                            <input type="hidden" name="price" value="' . $gia . '">
                                                            <button type="submit" name="btn_Wish" class="links-details" onclick="showSuccessToast()">
                                                                <i class="fa fa-heart-o"></i>

                                                            </button>

                                                        </form>
                                                        <!-- <li class="add-cart active"><a href="#">Thêm</a></button>
                                                    <li><a class="links-details" href="single-product.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Product Area End Here -->
        </div>
    </div>
</div>
<section class="product-area li-laptop-product li-tv-audio-product pb-45 mt-30">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Laptop</span>
                    </h2>
                    <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                        <li><a href="shop-left-sidebar.html">Sanai</a></li>
                        <li><a href="shop-left-sidebar.html">Meito</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">




                        <?= $show_dssp_laptop ?>





                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's TV & Audio Product Area End Here -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- 777777 -->
                <?= $banners['stt7'] ?>
            </div>
        </div>
    </div>
</div>
<!-- Li's Static Home Area End Here -->
<!-- Begin Li's Trending Product Area -->
<section class="product-area li-trending-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>Sản phẩm bestseller</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                        <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                        <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">





                                <?= $show_dssp_suggest ?>





                            </div>
                        </div>
                    </div>
                    <div id="home2" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/11.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/7.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/9.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/5.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/7.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/5.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="home3" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/3.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/7.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/9.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/1.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/11.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Accusantium
                                                        dolorem1</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product.html">
                                                <img src="./view/layout/images/product/large-size/9.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">Mug Today
                                                        is a good day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Trending Product Area End Here -->
<!-- Begin Li's Trendding Products Area -->
<section class="product-area li-laptop-product li-trendding-products best-sellers pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Tin tức mới</span>
                    </h2>
                </div>
                <?php
                $data_tintucindex = get_tintucindex(4);
                ?>

                <div class="row">
                    <!-- <div class="product-active owl-carousel"> -->
                    <?php foreach ($data_tintucindex as $tt) : ?>
                        <!-- single-product-wrap start -->
                        <div class="col-lg-3 col-md-3">
                            <div class="li-blog-single-item">
                                <div class="li-blog-banner">
                                    <a href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>"><img class="img-full" src="./view/layout/images/blog/<?= $tt['hinh'] ?>" alt=""></a>
                                </div>
                                <div class="li-blog-content">
                                    <div class="li-blog-details">
                                        <h3 class="li-blog-heading pt-25"><a href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>">
                                                <?= $tt['tieude'] ?>
                                            </a>
                                        </h3>
                                        <div class="li-blog-meta">

                                            <a class="post-time" href="#"><i class="fa fa-calendar"></i>
                                                <?= $tt['ngay'] ?>
                                            </a>
                                        </div>

                                        <a class="read-more" href="index.php?pg=blog_details&id=<?= $tt['id_blog'] ?>">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    <?php endforeach; ?>
                </div>
                <!-- </div> -->
                <!-- Sweet Alert Frem Demo -->
                <div id="toast"></div>
                <script language="JavaScript">
                    function toast() {
                        swal("Success!", "Your data have been saved. Thank you!", "success");
                    }

                    function showSuccessToast() {
                        toast({
                            title: "Thành công!",
                            message: "Bạn đã thêm vào mục yêu thích thành công.",
                            type: "success",
                            duration: 1000
                        });
                    }

                    function showErrorToast() {
                        toast({
                            title: "Thất bại!",
                            message: "Có lỗi xảy ra, vui lòng thử lại hoặc liên hệ quản trị viên.",
                            type: "error",
                            duration: 1000
                        });
                    }
                </script>
                <!-- Sweet Alert Frem Demo End Here -->
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>