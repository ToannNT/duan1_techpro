<?php
// $html_dssp = show_dssp($dssp_all);
$html_showdm = show_dsdm_product($dsdm);
$html_showbrand = show_dsbr_product($dsbrandne);


// echo var_dump($dssp_filter);
?>
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-30 pb-60 pt-sm-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner" style="height: 100px;">
                    <a href="#">
                        <img src="./view/layout/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                        data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                            class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                        href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Hiển thị 1 đến 9</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sắp xếp:</p>
                            <select class="nice-selectt" name="fetchval_option" id="fetchval_option">
                                <option value="" disabled="" selected="">--Lọc theo--</option>
                                <option value="ORDER BY ten ASC">Tên (A - Z)</option>
                                <option value="ORDER BY ten DESC">Tên (Z - A)</option>
                                <option value="ORDER BY gia ASC">Giá (Thấp > Cao)</option>
                                <option value="ORDER BY gia DESC">Giá (Cao > Thấp)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row filter_data" id="categoryForm">





                                    <?
                                    // $html_dssp; 
                                    ?>
                                    <!-- 111111111 -->



                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/12.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/11.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/10.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/9.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/8.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/7.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/6.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/5.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/4.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/3.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/2.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list last-child">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="./view/layout/images/product/large-size/1.jpg"
                                                        alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
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
                                                    <h4><a class="product_name" href="single-product.html">Hummingbird
                                                            printed t-shirt</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                    <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360
                                                        R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite
                                                        Sound via Ring Radiator Technology. Stream And Control R3
                                                        Speakers Wirelessly With Your Smartphone. Sophisticated, Modern
                                                        Desig</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li class="wishlist"><a href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                    <li><a class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter" href="#"><i
                                                                class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 pt-xs-15">
                                    <p>Hiển thị 1 đến 12</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box pt-xs-20 pb-xs-15">
                                        <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Trước</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" class="Next"> Sau <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Lọc sản phẩm theo</h2>
                    </div>
                    <!-- btn-clear-all start -->
                    <button class="btn-clear-all mb-sm-30 mb-xs-30">Xoá tất cả</button>
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Danh mục</h5>
                        <div class="categori-checkbox">
                            <form action="">
                                <ul>
                                    <?= $html_showdm ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Thương hiệu</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    <?= $html_showbrand ?>
                                    <!-- <li><input type="checkbox" name="product-brand"><a href="#">Apple ()</a></li>
                                    <li><input type="checkbox" name="product-brand"><a href="#">Samsung (12)</a></li>
                                    <li><input type="checkbox" name="product-brand"><a href="#">Xiaomi (11)</a></li>
                                    <li><input type="checkbox" name="product-brand"><a href="#">VSmar (11)</a></li> -->
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Giá</h5>
                        <div class="categori-checkbox">
                            <!-- <form action="#"> -->
                            <ul>
                                <li><input type="checkbox" id="brand_ne20" onclick="uncheckOthers(this)"
                                        value=" 1000000" name="price" class="common_selector price checkbox"><a
                                        href="#">Dưới
                                        1.000.000đ</a></li>
                                <li><input type="checkbox" id="brand_ne21" onclick="uncheckOthers(this)" value="2000000"
                                        name="price" class="common_selector price checkbox"><a href="#">Dưới
                                        2.000.000đ</a></li>
                                <li><input type="checkbox" id="brand_ne22" onclick="uncheckOthers(this)" value="5000000"
                                        name="price" class="common_selector price checkbox"><a href="#">Dưới
                                        5.000.000đ</a></li>
                                <li><input type="checkbox" id="brand_ne23" onclick="uncheckOthers(this)"
                                        value="10000000" name="price" class="common_selector price checkbox"><a
                                        href="#">
                                        Dưới
                                        10.000.000đ</a></li>
                                <li><input type="checkbox" id="brand_ne24" onclick="uncheckOthers(this)"
                                        value="40000000" name="price" class="common_selector price checkbox"><a
                                        href="#">Dưới
                                        40.000.000đ</a>
                                </li>
                            </ul>
                            <!-- </form> -->
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                </div>
                <!--sidebar-categores-box end  -->
                <!-- category-sub-menu start -->
                <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                    <div class="sidebar-title">
                        <h2>Loại sản phẩm</h2>
                    </div>
                    <div class="category-tags">
                        <ul>
                            <li><a href="# ">Hot</a></li>
                            <li><a href="# ">Mới</a></li>
                            <li><a href="# ">Nhiều lượt xem</a></li>
                            <li><a href="# ">Flatship</a></li>
                            <li><a href="# ">Big Sale</a></li>
                            <li><a href="# ">Tầm trung</a></li>
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->
<!-- Begin Footer Area -->

<!-- <script src="./view/layout/js/jquery-1.10.2.min.js"></script>
<script src="./view/layout/js/jquery-ui.js"></script>
 -->

<script src="./view/layout/asset/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./view/layout/asset/js/jquery.nice-select.min.js"></script>




<style>
#loading {
    text-align: center;
    background-color: brown;
    height: 150px;
    padding: 100px;
    color: red;

}
</style>

<script>
$(document).ready(function() {
    filter_data();


    // filter select option nèee
    $("#fetchval_option").on('change', function() {
        var value = $(this).val();
        // alert(value);
        if (value != "") {

            $.ajax({
                url: "./view/fetch_data.php",
                method: "POST",
                data: {
                    value: value
                },
                success: function(data) {
                    $('.filter_data').html(data);
                }
            });
        } else {
            filter_data();

        }
    });


    // search nèeeeee
    $("#search_product_name").keyup(function() {
        var input = $(this).val();
        // alert(input);
        if (input != "") {
            $.ajax({
                url: "./view/fetch_data.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function(data) {
                    $('.filter_data').html(data);
                }
            });
        } else {
            filter_data();

        }
    });





    function filter_data() {
        // $('.filter_data').html('<div id="loading" style=""> LỖI </div>');
        var action = 'fetch_data';
        var brand = get_filter('brand');
        var catalog = get_filter('catalog');
        var price = get_filter('price');

        $.ajax({
            url: "./view/fetch_data.php",
            method: "POST",
            data: {
                action: action,
                catalog: catalog,
                brand: brand,
                price: price,
            },
            success: function(data) {
                $('.filter_data').html(data);
            }
        });

    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function() {
        filter_data();
    });
});




// Unchex Checkbox

function uncheckOthers_dm(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox_dm');

    checkboxes.forEach(function(checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheckOthers_br(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox_br');

    checkboxes.forEach(function(checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheckOthers(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox');

    checkboxes.forEach(function(checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheck_all_brand() {

    var checkboxes1 = document.getElementById('brand_ne1');
    var checkboxes2 = document.getElementById('brand_ne2');
    var checkboxes3 = document.getElementById('brand_ne3');
    var checkboxes4 = document.getElementById('brand_ne4');
    var checkboxes5 = document.getElementById('brand_ne5');
    var checkboxes6 = document.getElementById('brand_ne6');
    var checkboxes7 = document.getElementById('brand_ne7');
    var checkboxes8 = document.getElementById('brand_ne8');
    var checkboxes9 = document.getElementById('brand_ne9');
    var checkboxes10 = document.getElementById('brand_ne10');
    var checkboxes11 = document.getElementById('brand_ne11');
    var checkboxes12 = document.getElementById('brand_ne12');
    var checkboxes13 = document.getElementById('brand_ne13');
    var checkboxes14 = document.getElementById('brand_ne14');
    var checkboxes15 = document.getElementById('brand_ne15');
    var checkboxes16 = document.getElementById('brand_ne16');
    var checkboxes17 = document.getElementById('brand_ne17');
    var checkboxes18 = document.getElementById('brand_ne18');
    var checkboxes19 = document.getElementById('brand_ne19');
    var checkboxes20 = document.getElementById('brand_ne20');
    var checkboxes21 = document.getElementById('brand_ne21');
    var checkboxes22 = document.getElementById('brand_ne22');
    var checkboxes23 = document.getElementById('brand_ne23');
    var checkboxes24 = document.getElementById('brand_ne24');

    console.log(checkboxes1, checkboxes2, checkboxes3, checkboxes4, checkboxes5, checkboxes6, checkboxes7, checkboxes8,
        checkboxes9, checkboxes10);

    if (checkboxes1.checked == true || checkboxes2.checked == true || checkboxes3.checked == true || checkboxes4
        .checked == true || checkboxes5.checked == true || checkboxes6.checked == true || checkboxes7.checked == true ||
        checkboxes8.checked == true || checkboxes9.checked == true || checkboxes10.checked == true || checkboxes11
        .checked == true || checkboxes12.checked == true || checkboxes13.checked == true || checkboxes14.checked ==
        true || checkboxes15.checked == true || checkboxes16.checked == true || checkboxes17.checked == true ||
        checkboxes18.checked == true || checkboxes19.checked == true || checkboxes20.checked == true || checkboxes21
        .checked == true || checkboxes22.checked == true || checkboxes23.checked == true || checkboxes24.checked == true
    ) {

        checkboxes1.checked = false;
        checkboxes2.checked = false;
        checkboxes3.checked = false;
        checkboxes4.checked = false;
        checkboxes5.checked = false;
        checkboxes6.checked = false;
        checkboxes7.checked = false;
        checkboxes8.checked = false;
        checkboxes9.checked = false;
        checkboxes10.checked = false;
        checkboxes11.checked = false;
        checkboxes12.checked = false;
        checkboxes13.checked = false;
        checkboxes14.checked = false;
        checkboxes15.checked = false;
        checkboxes16.checked = false;
        checkboxes17.checked = false;
        checkboxes18.checked = false;
        checkboxes19.checked = false;
        checkboxes20.checked = false;
        checkboxes21.checked = false;
        checkboxes22.checked = false;
        checkboxes23.checked = false;
        checkboxes24.checked = false;
    }



    // for (let i = 1; i < checkboxes.length + 1; i++) {
    //     if (checkboxes[i].checked) {

    //         checkboxes[i].checked = false;

    //     }

    // }
    // }



}
</script>