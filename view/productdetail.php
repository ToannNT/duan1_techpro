<?php
extract($show_Sp_detail);
$id1 = $id;
if ($giamgia > 0) {
    $gia_sp = '
            <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
            <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
            <span class="discount-percentage">-7%</span>
        ';
} else {
    $gia_sp = '<span class="new-price">' .  number_format($gia, 0, '.', '.') . 'đ</span>';
}
?>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="content-wraper" style="padding-top: 15px;">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/1.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/2.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh1 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/3.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh2 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/4.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh3 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/5.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh4 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/6.jpg" data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh5 ?>" alt="product image">
                            </a>
                        </div>
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1">
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh3 ?>" alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh1 ?>" alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh4 ?>" alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh3 ?>" alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh4 ?>" alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh5 ?>" alt="product image thumb">
                        </div>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2><?= $ten ?></h2>
                        <!-- <span class="product-details-ref">Reference: demo_15</span> -->
                        <!-- <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="review-item"><a href="#">Read Review</a></li>
                                <li class="review-item"><a href="#">Write Review</a></li>
                            </ul>
                        </div> -->
                        <div class="price-box pt-20">
                            <?= $gia_sp ?>
                        </div>
                        <div class="product-desc">
                            <p>
                                <span><?= $mota; ?></span>
                            </p>
                        </div>
                        <!-- <div class="product-variants">
                            <div class="produt-variants-size">
                                <label>Kích thước</label>
                                <select class="nice-select">
                                    <option value="1" title="S" selected="selected">40x60cm</option>
                                    <option value="2" title="M">60x90cm</option>
                                    <option value="3" title="L">80x120cm</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="single-add-to-cart">
                            <form action="index.php?pg=addcart" class="cart-quantity" method="post">
                                <div class="quantity">
                                    <label>Số lượng</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" name="quantity" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <button class="add-to-cart" type="submit">Mua sản phẩm</button>
                                <input type="hidden" name="img" value="<?= $hinh ?>">
                                <input type="hidden" name="name" value="<?= $ten ?>">
                                <input type="hidden" name="price" value="<?= $gia ?>">
                                <input type="hidden" name="page_here" value="index.php?pg=productdetail&idpro=<?= $id ?>">
                                <button class="add-to-cart" type="submit" name="addcart">Thêm vào giỏ hàng</button>
                                <!-- <button  type="submit"></button> -->
                            </form>
                        </div>
                        <div class="product-additional-info pt-25">
                            <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào danh sách
                                yêu thích</a>
                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a>
                                    </li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Chính sách bảo mật cao</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Miễn phí giao hàng</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Trả hàng hoàn tiền</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#description"><span>Chi tiết sản phẩm</span></a>
                        </li>
                        <!-- <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li> -->
                        <li><a data-toggle="tab" href="#reviews"><span>Đánh giá</span></a></li>
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="description" class="tab-pane active show" role="tabpanel">
                <div class="product-description">
                    <span><?= $mota ?></span>
                </div>
            </div>
            <!-- <div id="product-details" class="tab-pane" role="tabpanel">
                <div class="product-details-manufacturer">
                    <a href="#">
                        <img src="./view/layout/images/product-details/1.jpg" alt="Product Manufacturer Image">
                    </a>
                    <p><span>Reference</span> demo_7</p>
                    <p><span>Reference</span> demo_7</p>
                </div>
            </div> -->
            <div id="reviews" class="tab-pane" role="tabpanel">
                <div class="product-reviews">
                    <div class="product-details-comment-block">
                        <div class="comment-review">
                            <span>Đánh giá sao</span>
                            <ul class="rating">
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <div class="comment-author-infos pt-25">
                            <span>HTML 5</span>
                            <em>01-12-18</em>
                        </div>
                        <div class="comment-details">
                            <h4 class="title-block">Demo</h4>
                            <p>Plaza</p>
                        </div>
                        <div class="review-btn">
                            <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết đánh giá
                                của bạn</a>
                        </div>
                        <!-- Begin Quick View | Modal Area -->
                        <div class="modal fade modal-wrapper" id="mymodal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3 class="review-page-title">Viết đánh giá của bạn</h3>
                                        <div class="modal-inner-area row">
                                            <div class="col-lg-6">
                                                <div class="li-review-product">
                                                    <img src="./view/layout/images/product/<?= $hinh ?>" alt="Li's Product">
                                                    <div class="li-review-product-desc">
                                                        <p class="li-product-name"><?= $ten ?>
                                                        </p>
                                                        <p>
                                                            <span><?= $mota ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="li-review-content">
                                                    <!-- Begin Feedback Area -->
                                                    <div class="feedback-area">
                                                        <div class="feedback">
                                                            <h3 class="feedback-title">Cảm nhận của bạn</h3>
                                                            <form action="#">
                                                                <p class="your-opinion">
                                                                    <label>Bạn hãy đánh giá sao</label>
                                                                    <span>
                                                                        <select class="star-rating">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </span>
                                                                </p>
                                                                <p class="feedback-form">
                                                                    <label for="feedback">Đánh giá của bạn</label>
                                                                    <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                </p>
                                                                <div class="feedback-input">
                                                                    <p class="feedback-form-author">
                                                                        <label for="author">Họ và tên<span class="required">*</span>
                                                                        </label>
                                                                        <input id="author" name="author" value size="30" aria-required="true" type="text">
                                                                    </p>
                                                                    <p class="feedback-form-author feedback-form-email">
                                                                        <label for="email">Email<span class="required">*</span>
                                                                        </label>
                                                                        <input id="email" name="email" value size="30" aria-required="true" type="text">
                                                                        <span class="required"><sub>*</sub> Phần bắt
                                                                            buộc</span>
                                                                    </p>
                                                                    <div class="feedback-btn pb-15">
                                                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">Đóng</a>
                                                                        <a href="#">Gửi</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Feedback Area End Here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View | Modal Area End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Sản phẩm tương tự:</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        <?php
                        foreach ($show_relate as $item) {
                            extract($item);
                            $link = "index.php?pg=productdetail&idpro=" . $id;
                            if ($sale > 0) {
                                $giachinhthuc = $giamgia;
                            } else {
                                $giachinhthuc = "$gia";
                            }
                            echo '<div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="' . $link . '">
                                                <img src="./view/layout/images/product/' . $hinh . '" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">' . $ma_sp . '</a>
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
                                                <h4><a class="product_name" href="single-product.html">' . $ten . '</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">' . number_format($giachinhthuc, 0, '.', '.') . '</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                <form action="index.php?pg=addcart" method="post">
                                                    <input type="hidden" name="page_here" value="index.php?pg=product">
                                                    <input type="hidden" name="img" value="' . $hinh . '">
                                                    <input type="hidden" name="name" value="' . $ten . '">
                                                    <input type="hidden" name="price" value="' . $gia . '">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" name="addcart" class="add-cart-btn active">Thêm</button>
                                                </form>
                                                
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                            data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="sosanh mt-20" id="sosanh">So Sánh</button>
                                    <input type="hidden" id="spss1" value="' . $id1 . '">
                                    <input type="hidden" id="spss2" value="' . $id . '">
                                    <!-- single-product-wrap end -->
                                </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->