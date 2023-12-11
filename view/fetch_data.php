<?php
// include "./dao/pdo.php";
include "../dao/pdo.php";
include "../dao/sanpham.php";
include "../dao/danhmuc.php";


// include "../dao/sanpham.php";
// include "../dao/danhmuc.php";


if (isset($_POST['input'])) {
    // Xử lý hành động tìm kiếm
    $keyword = $_POST['input'];
    $sql = "SELECT * FROM product WHERE ten LIKE '%" . $keyword . "%'";
    $sql .= " ORDER BY id DESC";
    $kq = pdo_query($sql);
    $output = "";

    if (isset($kq) && !empty($kq)) {
        foreach ($kq as $item) {
            extract($item);


            if ($banchay == 1) {
                $itemHot = '
                <span class="sticker__hot">Hot</span>
                ';
            } else {
                $itemHot = '
                <span class="sticker__hott"></span>
                ';
            }
            if ($new == 1) {
                $itemNew = '
                <span class="sticker">Mới</span>
                ';
            } else {
                $itemNew = '
                <span class="stickerr"></span>
                ';
            }

            if ($giamgia > 0) {
                $phantram = ((int) $gia - (int) $giamgia) / (int) $gia * 100;
                $gia_muangay = $giamgia;
                $giatien_addcart = '
                <input type="hidden" name="price" value="' . $giamgia . '">
                ';
                $thanhTien_addcart = '
                <input type="hidden" name="thanhtien" value="' . $giamgia . '">
                ';
                $gia_sp = '
                    <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
                    <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
                    <span class="discount-percentage">- ' . floor($phantram) . '%</span>
                ';
            } else {
                $gia_muangay = $gia;

                $giatien_addcart = '
                <input type="hidden" name="price" value="' . $gia . '">
                ';
                $thanhTien_addcart = '
                <input type="hidden" name="thanhtien" value="' . $gia . '">
                ';
                $gia_sp = '<span class="new-price">' . number_format($gia, 0, '.', '.') . 'đ</span>';
            }
            $link = 'index.php?pg=productdetail&idpro=' . $id;
            $output .= '
            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
            <!-- single-product-wrap start -->
            <div class="single-product-wrap">
                <div class="product-image">
                    <a href="' . $link . '">
                    <img src="./view/layout/images/product/' . $hinh . '" alt="Li s Product Image">
                    </a>
                    ' . $itemNew . '
                    ' . $itemHot . '
                </div>
                <div class="product_desc">
                <div class="product_desc_info">
                    <div class="product-review">
                        <h5 class="manufacturer">
                            <a href="shop-left-sidebar.html"></a>
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
                     ' . $gia_sp . '
                    </div>
                    
                </div>
                <div class="add-actions">
                        <ul class="add-actions-link">
                            
                   
                        <form>
                        <input type="hidden" name="page_here" value="index.php?pg=checkout">
                        <input type="hidden" name="idpro" value="' . $id . '">
                        <input type="hidden" name="img" value="' . $hinh . '">
                        <input type="hidden" name="name" value="' . $ten . '">
                        <input type="hidden" name="giamuangay" value="' . $gia_muangay . '">

                        ' . $giatien_addcart . '
                        <input type="hidden" name="s_status" value="1">
                        ' . $thanhTien_addcart . '
                        <input type="hidden" name="quantity" value="1">

                        
                        <a style="width: 90px;" class="add-cart-btn" href="index.php?pg=checkout&idpro=' . $id . '&name=' . $ten . '&quantity=1&price=' . $gia_muangay . '&thanhtien=' . $gia_muangay . '&img=' . $hinh . '">Mua ngay</a>
                    </form>


                


                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="page_here" value="index.php?pg=product">
                            <input type="hidden" name="idpro" value="' . $id . '">
                            <input type="hidden" name="img" value="' . $hinh . '">
                            <input type="hidden" name="name" value="' . $ten . '">
                            ' . $giatien_addcart . '
                            <input type="hidden" name="s_status" value="0">
                            ' . $thanhTien_addcart . '
                            <input type="hidden" name="quantity" value="1">
  
                            <button style="width: 90px;" style="" type="submit" name="addcart" class="add-cart-btn__main">Thêm</button>
                        </form>




                        
                        
                            <form action="index.php?pg=addtoWishlist" method="post">
                                <input type="hidden" name="img" value="../view/layout/images/product' . $hinh . '">
                                <form action="index.php?pg=addtoWishlist" class="formWish" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="img" value="' . $hinh . '">
                                <input type="hidden" name="name" value="' . $ten . '">
                                <input type="hidden" name="price" value="' . $gia . '">
                                <button type="submit" name="btn_Wish" class="links-details" onclick="showSuccessToast()">
                                <i class="fa fa-heart-o"></i>
                                
                                </button>
                               
                            </form>
                        </ul>
                       
                    </div>
            </div>
        </div>
        <!-- single-product-wrap end -->
    </div>
                ';
        }
        echo $output;
    } else {
        $output = '<img src="./view/layout/images/product/thongbaofetchdata.png">';
        echo $output;
    }
} else if (isset($_POST['action'])) {

    if (isset($_POST['action'])) {


        $sql = "SELECT * FROM product WHERE 1";


        if (isset($_POST['catalog'])) {
            $catalog_filter = implode(',', $_POST['catalog']);
            $sql .= " AND id_catalog IN ('" . $catalog_filter . "')";
        }

        if (isset($_POST['brand'])) {
            $brand_filter = implode(',', $_POST['brand']);
            $sql .= " AND id_brand IN ('" . $brand_filter . "')";
        }

        if (isset($_POST['price'])) {
            $price_filter = implode(',', $_POST['price']);
            $sql .= " AND gia < ('" . $price_filter . "')";
        }



        $sql .= " ORDER BY id DESC";
        $kq =  pdo_query($sql);


        $output = "";

        if (isset($kq) && !empty($kq)) {
            foreach ($kq as $item) {
                extract($item);


                if ($banchay == 1) {
                    $itemHot = '
                    <span class="sticker__hot">Hot</span>
                    ';
                } else {
                    $itemHot = '
                    <span class="sticker__hott"></span>
                    ';
                }
                if ($new == 1) {
                    $itemNew = '
                    <span class="sticker">Mới</span>
                    ';
                } else {
                    $itemNew = '
                    <span class="stickerr"></span>
                    ';
                }

                if ($giamgia > 0) {
                    $phantram = ((int) $gia - (int) $giamgia) / (int) $gia * 100;
                    $gia_muangay = $giamgia;
                    $giatien_addcart = '
                    <input type="hidden" name="price" value="' . $giamgia . '">
                    ';
                    $thanhTien_addcart = '
                    <input type="hidden" name="thanhtien" value="' . $giamgia . '">
                    ';
                    $gia_sp = '
                        <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
                        <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
                        <span class="discount-percentage">- ' . floor($phantram) . '%</span>
                    ';
                } else {
                    $gia_muangay = $gia;

                    $giatien_addcart = '
                    <input type="hidden" name="price" value="' . $gia . '">
                    ';
                    $thanhTien_addcart = '
                    <input type="hidden" name="thanhtien" value="' . $gia . '">
                    ';
                    $gia_sp = '<span class="new-price">' . number_format($gia, 0, '.', '.') . 'đ</span>';
                }
                $link = 'index.php?pg=productdetail&idpro=' . $id;
                $output .= '
                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="' . $link . '">
                        <img src="./view/layout/images/product/' . $hinh . '" alt="Li s Product Image">
                        </a>
                        ' . $itemNew . '
                        ' . $itemHot . '
                    </div>
                    <div class="product_desc">
                    <div class="product_desc_info">
                        <div class="product-review">
                            <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"></a>
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
                         ' . $gia_sp . '
                        </div>
                        
                    </div>
                    <div class="add-actions">
                        <ul class="add-actions-link">
                            
                  
                        <form>
                        <input type="hidden" name="page_here" value="index.php?pg=checkout">
                        <input type="hidden" name="idpro" value="' . $id . '">
                        <input type="hidden" name="img" value="' . $hinh . '">
                        <input type="hidden" name="name" value="' . $ten . '">
                        <input type="hidden" name="giamuangay" value="' . $gia_muangay . '">

                        ' . $giatien_addcart . '
                        <input type="hidden" name="s_status" value="1">
                        ' . $thanhTien_addcart . '
                        <input type="hidden" name="quantity" value="1">

                        
                        <a style="width: 90px;" class="add-cart-btn" href="index.php?pg=checkout&idpro=' . $id . '&name=' . $ten . '&quantity=1&price=' . $gia_muangay . '&thanhtien=' . $gia_muangay . '&img=' . $hinh . '">Mua ngay</a>
                    </form>


                


                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="page_here" value="index.php?pg=product">
                            <input type="hidden" name="idpro" value="' . $id . '">
                            <input type="hidden" name="img" value="' . $hinh . '">
                            <input type="hidden" name="name" value="' . $ten . '">
                            ' . $giatien_addcart . '
                            <input type="hidden" name="s_status" value="0">
                            ' . $thanhTien_addcart . '
                            <input type="hidden" name="quantity" value="1">
  
                            <button style="width: 90px;" style="" type="submit" name="addcart" class="add-cart-btn__main">Thêm</button>
                        </form>




                        
                        
                            <form action="index.php?pg=addtoWishlist" method="post">
                                <input type="hidden" name="img" value="../view/layout/images/product' . $hinh . '">
                                <form action="index.php?pg=addtoWishlist" class="formWish" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="img" value="' . $hinh . '">
                                <input type="hidden" name="name" value="' . $ten . '">
                                <input type="hidden" name="price" value="' . $gia . '">
                                <button type="submit" name="btn_Wish" class="links-details" onclick="showSuccessToast()">
                                <i class="fa fa-heart-o"></i>
                                
                                </button>
                               
                            </form>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- single-product-wrap end -->
        </div>
           
                ';
            }
            echo $output;
        } else {
            $output = '<img src="./view/layout/images/product/thongbaofetchdata.png">';



            echo $output;
        }
    }
} else if (isset($_POST['value'])) {
    // Xử lý hành động tìm kiếm
    $select_option = $_POST['value'];
    $sql = "SELECT * FROM product  " . $select_option . "";
    $kq = pdo_query($sql);
    $output = "";

    if (isset($kq) && !empty($kq)) {
        foreach ($kq as $item) {
            extract($item);


            if ($banchay == 1) {
                $itemHot = '
                <span class="sticker__hot">Hot</span>
                ';
            } else {
                $itemHot = '
                <span class="sticker__hott"></span>
                ';
            }
            if ($new == 1) {
                $itemNew = '
                <span class="sticker">Mới</span>
                ';
            } else {
                $itemNew = '
                <span class="stickerr"></span>
                ';
            }


            if ($giamgia > 0) {
                $phantram = ((int) $gia - (int) $giamgia) / (int) $gia * 100;
                $gia_muangay = $giamgia;
                $giatien_addcart = '
                <input type="hidden" name="price" value="' . $giamgia . '">
                ';
                $thanhTien_addcart = '
                <input type="hidden" name="thanhtien" value="' . $giamgia . '">
                ';
                $gia_sp = '
                    <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
                    <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
                    <span class="discount-percentage">- ' . floor($phantram) . '%</span>
                ';
            } else {
                $gia_muangay = $gia;

                $giatien_addcart = '
                <input type="hidden" name="price" value="' . $gia . '">
                ';
                $thanhTien_addcart = '
                <input type="hidden" name="thanhtien" value="' . $gia . '">
                ';
                $gia_sp = '<span class="new-price">' . number_format($gia, 0, '.', '.') . 'đ</span>';
            }
            $link = 'index.php?pg=productdetail&idpro=' . $id;
            $output .= '
            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
            <!-- single-product-wrap start -->
            <div class="single-product-wrap">
                <div class="product-image">
                    <a href="' . $link . '">
                    <img src="./view/layout/images/product/' . $hinh . '" alt="Li s Product Image">
                    </a>
                    ' . $itemNew . '
                    ' . $itemHot . '
                </div>
                <div class="product_desc">
                <div class="product_desc_info">
                    <div class="product-review">
                        <h5 class="manufacturer">
                            <a href="shop-left-sidebar.html"></a>
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
                     ' . $gia_sp . '
                    </div>
                    
                </div>
                <div class="add-actions">
                        <ul class="add-actions-link">
                            
              
                        <form>
                        <input type="hidden" name="page_here" value="index.php?pg=checkout">
                        <input type="hidden" name="idpro" value="' . $id . '">
                        <input type="hidden" name="img" value="' . $hinh . '">
                        <input type="hidden" name="name" value="' . $ten . '">
                        <input type="hidden" name="giamuangay" value="' . $gia_muangay . '">

                        ' . $giatien_addcart . '
                        <input type="hidden" name="s_status" value="1">
                        ' . $thanhTien_addcart . '
                        <input type="hidden" name="quantity" value="1">

                        
                        <a style="width: 90px;" class="add-cart-btn" href="index.php?pg=checkout&idpro=' . $id . '&name=' . $ten . '&quantity=1&price=' . $gia_muangay . '&thanhtien=' . $gia_muangay . '&img=' . $hinh . '">Mua ngay</a>
                    </form>


                


                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="page_here" value="index.php?pg=product">
                            <input type="hidden" name="idpro" value="' . $id . '">
                            <input type="hidden" name="img" value="' . $hinh . '">
                            <input type="hidden" name="name" value="' . $ten . '">
                            ' . $giatien_addcart . '
                            <input type="hidden" name="s_status" value="0">
                            ' . $thanhTien_addcart . '
                            <input type="hidden" name="quantity" value="1">
  
                            <button style="width: 90px;" style="" type="submit" name="addcart" class="add-cart-btn__main">Thêm</button>
                        </form>




                        
                        
                            <form action="index.php?pg=addtoWishlist" method="post">
                                <input type="hidden" name="img" value="../view/layout/images/product' . $hinh . '">
                                <form action="index.php?pg=addtoWishlist" class="formWish" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="img" value="' . $hinh . '">
                                <input type="hidden" name="name" value="' . $ten . '">
                                <input type="hidden" name="price" value="' . $gia . '">
                                <button type="submit" name="btn_Wish" class="links-details" onclick="showSuccessToast()">
                                <i class="fa fa-heart-o"></i>
                                
                                </button>
                               
                            </form>
                              
                        </ul>
                      
                    </div>
            </div>
        </div>
        <!-- single-product-wrap end -->
    </div>
            ';
        }
        echo $output;
    } else {
        $output = '<img src="./view/layout/images/product/thongbaofetchdata.png">';
        echo $output;
    }
}
