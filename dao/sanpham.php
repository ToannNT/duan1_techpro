<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
// {
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
// {
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh)
// {
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if (is_array($ma_hh)) {
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     } else {
//         pdo_execute($sql, $ma_hh);
//     }
// }












function show_SP($dssp)
{
    $show_dssp_all = '';

    foreach ($dssp as $item) {
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
            $gia_sp = '
                <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
                <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
                <span class="discount-percentage">-7% nè</span>
            ';
        } else {
            $gia_sp = '<span class="new-price">' .  number_format($gia, 0, '.', '.') . 'đ</span>';
        }
        // $link = 'index.php?pg=productdetail&idpro=' . $id;
        $show_dssp_all .= '
        <div class="col-lg-12">
        <!-- single-product-wrap start -->
        <div class="single-product-wrap">
            <div class="product-image">
                <a href="index.php?pg=productdetail">
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
                        <li class="add-cart active"><a href="#">Thêm</a></li>
                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-wrap end -->
    </div>
        ';
    }
    return $show_dssp_all;
}




// function get_count_sp($id)
// {
//     $sql = "SELECT COUNT(*) FROM sanpham WHERE id_catalog=?";
//     return pdo_query_value($sql, $id);
// }
// function get_dssp_hot($limit)
// {
//     $sql = "SELECT * FROM product WHERE banchay = 1 ORDER BY id DESC LIMIT " . $limit;
//     return pdo_query($sql);
// }


function get_dssp_hot($limit)
{
    $sql = "SELECT p.* , c.ten_dm FROM product p INNER JOIN catalog c ON p.id_catalog = c.id WHERE banchay = 1 ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

function get_dssp_new($limit)
{
    $sql = "SELECT p.* , c.ten_dm FROM product p INNER JOIN catalog c ON p.id_catalog = c.id WHERE new = 1 ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

function get_dssp_sale($limit)
{
    $sql = "SELECT p.* , c.ten_dm FROM product p INNER JOIN catalog c ON p.id_catalog = c.id WHERE giamgia > 0  ORDER BY id DESC LIMIT " . $limit;

    return pdo_query($sql);
}

function get_dssp_dienthoai($limit)
{
    $sql = "SELECT * FROM product WHERE id_catalog = 1  ORDER BY id DESC LIMIT " . $limit;

    return pdo_query($sql);
}
function get_dssp_laptop($limit)
{
    $sql = "SELECT * FROM product WHERE id_catalog = 2  ORDER BY id DESC LIMIT " . $limit;

    return pdo_query($sql);
}

function get_dssp_suggest($limit)
{
    $sql = "SELECT * FROM product  ORDER BY id DESC LIMIT " . $limit;

    return pdo_query($sql);
}

// function get_dssp_All($keyword, $idcatalog, $limit)
// {
//     $sql = "SELECT * FROM sanpham WHERE 1";
//     if ($idcatalog > 0) {
//         $sql .= " AND id_catalog= " . $idcatalog;
//     }
//     if ($keyword != "") {
//         $sql .= " AND ten_sp LIKE '%" . $keyword . "%'";
//         // $sql .= " AND ten_sp like '%" . $keyword . "%'";
//     }

//     $sql .= " ORDER BY id DESC LIMIT " . $limit;
//     return pdo_query($sql);
// }

// //sp related
// function get_dssp_related($idcatalog, $id, $limit)
// {
//     $sql = "SELECT * FROM sanpham WHERE id_catalog = ? AND id<>? ORDER BY so_luot_xem DESC LIMIT " . $limit;
//     return pdo_query($sql, $idcatalog, $id);
// }

// //lấy 1 sp
// function get_sp_Detail($id)
// {
//     $sql = "SELECT * FROM sanpham WHERE id=?";
//     return pdo_query_one($sql, $id);
// }






// Trang sản phẩm

function get_dssp($limit)
{
    $sql = "SELECT * FROM product ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

function show_dssp($dssp_sp)
{
    $showhtml = '';
    foreach ($dssp_sp as $dssp) {
        extract($dssp);
        $showhtml .= '
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="single-product.html">
                            <img src="./view/layout/images/product/' . $hinh . '" alt="Li s Product Image">
                            </a>
                            <span class="sticker">New</span>
                        </div>
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
                                <h4><a class="product_name" href="single-product.html">' . $ten . '</a></h4>
                                <div class="price-box">
                                    <span class="new-price">' . number_format($gia) . 'đ</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="shopping-cart.html">Add to cart</a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                </div>';
    }
    return $showhtml;
}
function show_dsdm($dsdm){
    $html_dsdm= '';
    foreach ($dsdm as $value){
        extract($value);
        $html_dsdm.= '
            <li><input type="checkbox" class="common_selector catalog" value="'.$ten_dm.'" name="product-categori"><a href="#">'.$ten_dm.'</a></li>
        ';
    }
    return $html_dsdm;
}
// function get_dsdm(){
//     $sql = "SELECT product.*, catalog.ten_dm
//     FROM product
//     JOIN catalog ON product.id_catalog = catalog.id
//     ORDER BY product.id DESC";
//     return pdo_query($sql);
// }

//end trang sản phẩm


// function hang_hoa_exist($ma_hh)
// {
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh)
// {
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10()
// {
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet()
// {
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai)
// {
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword)
// {
//     $sql = "SELECT * FROM hang_hoa hh "
//         . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//         . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
// }

// function hang_hoa_select_page()
// {
//     if (!isset($_SESSION['page_no'])) {
//         $_SESSION['page_no'] = 0;
//     }
//     if (!isset($_SESSION['page_count'])) {
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count / 10.0);
//     }
//     if (exist_param("page_no")) {
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if ($_SESSION['page_no'] < 0) {
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if ($_SESSION['page_no'] >= $_SESSION['page_count']) {
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT " . $_SESSION['page_no'] . ", 10";
//     return pdo_query($sql);
// }