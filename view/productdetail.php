<style>
.btn_submit_cmt {
    background: #242424;
    color: #fff !important;
    width: 80px;
    font-size: 14px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    left: 110px;
    right: auto;
    top: 0;
    display: block;
    transition: all 0.3s ease-in-out;
}

#load-more-btn {
    border: none;
    font-size: 14px;
    color: white;
    position: relative;
    background: black;
    cursor: pointer;
    font-weight: 500;
    text-transform: capitalize;
    padding: 10px 20px;
    border-radius: 3px;
    transition: all 0.3s ease-in-out;
}

#load-more-btn:hover {
    background-color: #272e68;
}
</style>

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentTime = new DateTime();
$ngaybl = $currentTime->format('Y-m-d');
$show_all_cmt = "";
foreach ($dscmt_all as $key => $value) {
    extract($value);
    $show_all_cmt .= '
            <div class="comment-author-infos pt-25">
                <img style="margin-bottom: 5px; margin-right: 5px; border-radius: 50px; width: 50px;"
                    src="./view/layout/images/user/' . $hinh . '" alt="">
                <span>' . $ten . '</span>
                <em>' . $ngay_bl . '</em>
                <p class="content-cmt">' . $noi_dung . '</p>
            </div>
    
    ';
}

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
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/1.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/2.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh1 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/3.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh2 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/4.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh3 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/5.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh4 ?>" alt="product image">
                            </a>
                        </div>
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="./view/layout/images/product/large-size/6.jpg"
                                data-gall="myGallery">
                                <img src="./view/layout/images/product/<?= $hinh5 ?>" alt="product image">
                            </a>
                        </div>
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1">
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh3 ?>"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh1 ?>"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh4 ?>"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh3 ?>"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh4 ?>"
                                alt="product image thumb">
                        </div>
                        <div class="sm-image"><img src="./view/layout/images/product/<?= $hinh5 ?>"
                                alt="product image thumb">
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
                                <input type="hidden" name="page_here"
                                    value="index.php?pg=productdetail&idpro=<?= $id ?>">
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
                        <li><a data-toggle="tab" href="#reviews"><span>Bình luận</span></a></li>
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


                        //

                        <form action="index.php?pg=productdetail" method="post">
                            <p class="your-opinion">
                                <!-- <label>Bạn hãy đánh giá sao</label> -->
                                <span>
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="star-rating"
                                            style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <!-- <div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1"
                                                class="br-selected"></a><a href="#" data-rating-value="2"
                                                data-rating-text="2" class="br-selected"></a><a href="#"
                                                data-rating-value="3" data-rating-text="3" class="br-selected"></a><a
                                                href="#" data-rating-value="4" data-rating-text="4"
                                                class="br-selected br-current"></a><a href="#" data-rating-value="5"
                                                data-rating-text="5" class=""></a>
                                            <div class="br-current-rating">4</div>
                                        </div> -->
                                    </div>
                                </span>
                            </p>
                            <p class="feedback-form">
                                <label for="feedback">Bình luận của bạn</label>
                                <textarea name="noidung_cmt" placeholder="Bạn có thắc mắc gì về sản phẩm không?"
                                    id="feedback" name="comment" cols="45" rows="2" aria-required="true"></textarea>
                            </p>
                            <div class="feedback-input">

                                <input type="hidden" name="name_cmt" value="' . $hoten . '">
                                <input type="hidden" name="hinh_cmt" value="' . $hinh . '">
                                <input type="hidden" name="idpro" value="' . $idpro . '">
                                <input type="hidden" name="iduser" value="' . $id . '">
                                <input type="hidden" name="ngaybl" value="' . $ngaybl . '">


                                <div class="feedback-btn pb-15">
                                    <button class="btn_submit_cmt" type="submit" name="submit_cmt">Gửi</button>
                                </div>
                            </div>
                        </form>

                        //
                        <?php
                        if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] != "")) {
                            extract($_SESSION["s_user"]);
                            $idpro = $_GET['idpro'];
                            echo '
                            <form action="index.php?pg=productdetail"  method="post">
                            <p class="your-opinion">
                                <!-- <label>Bạn hãy đánh giá sao</label> -->
                                <span>
                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="star-rating"
                                            style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <!-- <div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1"
                                                class="br-selected"></a><a href="#" data-rating-value="2"
                                                data-rating-text="2" class="br-selected"></a><a href="#"
                                                data-rating-value="3" data-rating-text="3" class="br-selected"></a><a
                                                href="#" data-rating-value="4" data-rating-text="4"
                                                class="br-selected br-current"></a><a href="#" data-rating-value="5"
                                                data-rating-text="5" class=""></a>
                                            <div class="br-current-rating">4</div>
                                        </div> -->
                                    </div>
                                </span>
                            </p>
                            <p class="feedback-form">
                                <label for="feedback">Bình luận của bạn</label>
                                <textarea name="noidung_cmt" placeholder="Bạn có thắc mắc gì về sản phẩm không?" id="feedback"
                                    name="comment" cols="45" rows="2" aria-required="true"></textarea>
                            </p>
                            <div class="feedback-input">

                                <input type="hidden" name="name_cmt" value="' . $hoten . '">
                                <input type="hidden" name="hinh_cmt" value="' . $hinh . '">
                                <input type="hidden" name="idpro" value="' . $idpro . '">
                                <input type="hidden" name="iduser" value="' . $id . '">
                                <input type="hidden" name="ngaybl" value="' . $ngaybl . '">


                                <div class="feedback-btn pb-15">
                                <button class="btn_submit_cmt" type="submit" name="submit_cmt">Gửi</button>
                                </div>
                            </div>
                        </form>
                        ';
                        } else {
                            echo '
                            <div class="coupon-accordion">
                                        <!--Accordion Start-->
                                        <h3 style="margin-bottom: 0px; font-size: 14px; text-transform: none; border: none; padding-bottom: 15px;">
                                            Đăng nhập để bình luận sản phẩm ?
                                            <a href="index.php?pg=login_register"><span>Đăng nhập.</span></a>
                                        </h3>

                                    </div>
                            ';
                        }
                        ?>


                        <div id="all-comments">
                            <?= $show_all_cmt ?>
                        </div>
                        <button id="load-more-btn">Xem thêm</button>
                        <script>
                        $(document).ready(function() {
                            const commentsPerLoad =
                                5; // Số lượng comment muốn hiển thị mỗi lần nhấn nút "Xem thêm"
                            let visibleComments = commentsPerLoad;

                            $('.comment-author-infos:gt(' + (commentsPerLoad - 1) + ')')
                                .hide(); // Ẩn các comment ngoài số lượng đã chỉ định

                            $('#load-more-btn').click(function() {
                                $('.comment-author-infos:lt(' + visibleComments + ')')
                                    .show(); // Hiển thị thêm comment
                                visibleComments += commentsPerLoad;

                                // Ẩn nút "Xem thêm" nếu đã hiển thị hết tất cả comment
                                if ($('.comment-author-infos:visible').length >= $(
                                        '.comment-author-infos').length) {
                                    $('#load-more-btn').hide();
                                }
                            });
                        });
                        </script>
                        <!-- content cmt  -->
                        <!-- <div class="comment-author-infos pt-25">
                            <img style="margin-bottom: 5px; margin-right: 5px; border-radius: 50px; width: 50px;"
                                src="./view/layout/images/user/931a662b88d1d24f3c60c2ca2cdb0038.jpg" alt="">
                            <span>Nguyễn Thanh Toàn</span>
                            <em>01-12-18</em>
                            <p class="content-cmt">Qsadsdasda Qsadsdasda QsadsdasdaQsadsdasdaQsadsdasda Qsadsdasda
                                Qsadsdasda Qsadsdasda
                                Qsadsdasda Qsadsdasda Qsadsdasda </p>
                        </div> -->
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