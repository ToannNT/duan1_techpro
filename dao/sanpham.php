<?php
require_once 'pdo.php';


// TRANG SẢN PHẨM ADMIN
function get_tablesp($limit)
{
    $sql = "SELECT product.*, catalog.ten_dm AS tendm
    FROM product
    LEFT JOIN catalog ON product.id_catalog = catalog.id
    ORDER BY product.id DESC
    LIMIT " . $limit;
    return pdo_query($sql);
}
function show_tablesp($showspadm)
{
    $html_showspadm = '';
    foreach ($showspadm as $spadm) {
        extract($spadm);
        $link = 'index.php?pg=delsp&id=' . $id;
        $link2 = 'index.php?pg=updatesp&id=' . $id;
        $html_showspadm .= '
        <tr>
            <td width="10">' . $id . '</td>
            <td width="10%">' . $ma_sp . '</td>
            <td width="25%">' . $ten . '</td>
            <td style="width: 100px; height: 100px; overflow: hidden;">
                <img src="../view/layout/images/product/' . $hinh . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
            </td>
            <td>40</td>
            <td><span class="badge bg-success">Còn hàng</span></td>
            <td>' . number_format($gia, 0, '.', '.') . 'đ</td>
            <td>' . $tendm . '</td>
            <td>
            <a class="btn btn-primary btn-sm trash" href="' . $link . '"><i class="fas fa-trash-alt"></i></a>
            <a class="btn btn-primary btn-sm edit" href="' . $link2 . '"><i class="fas fa-edit"></i></a>
            </td> 
        </tr>
        ';
    }
    return $html_showspadm;
}
//them san pham ADMINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
function insertsp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run)
{
    $sql = "INSERT INTO product (ma_sp, ten, gia, giamgia, id_catalog, id_brand, hinh, hinh1, hinh2, hinh3, hinh4, chitiet, mota, sale, new, xemnhieu, banchay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run);
}
//end them san pham

//xoa san pham
function delsp($id)
{
    $sql = "DELETE FROM product WHERE  id=?";
    pdo_execute($sql, $id);
}
//end xoa san pham

//sua san pham.
function updatesp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run, $id)
{
    $sql = "UPDATE product SET ma_sp=?,ten=?,gia=?,giamgia=?,id_catalog=?,id_brand=?,hinh=?,hinh1=?,hinh2=?,hinh3=?,hinh4=?,chitiet=?,mota=?,sale=?,new=?,xemnhieu=?,banchay=? WHERE id=?";
    pdo_execute($sql, $masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run, $id);
}
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
            $phantram = ((int) $gia - (int) $giamgia) / (int) $gia * 100;
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
            $giatien_addcart = '
            <input type="hidden" name="price" value="' . $gia . '">
            ';
            $thanhTien_addcart = '
            <input type="hidden" name="thanhtien" value="' . $gia . '">
            ';
            $gia_sp = '<span class="new-price">' . number_format($gia, 0, '.', '.') . 'đ</span>';
        }
        $link = 'index.php?pg=productdetail&idpro=' . $id;
        $show_dssp_all .= '
        <div class="col-lg-12">
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
                        
                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="page_here" value="index.php">
                            <input type="hidden" name="idpro" value="' . $id . '">
                            <input type="hidden" name="img" value="' . $hinh . '">
                            <input type="hidden" name="name" value="' . $ten . '">
                            ' . $giatien_addcart . '
                            <input type="hidden" name="s_status" value="0">
                            ' . $thanhTien_addcart . '


                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" name="addcart" class="add-cart-btn active">Thêm</button>
                        </form>


                        
                        
                            <form action="index.php?pg=addtoWishlist" method="post">
                                <input type="hidden" name="img" value="../view/layout/images/product' . $hinh . '">
                                <form action="index.php?pg=addtoWishlist" class="formWish" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="img" value="' . $hinh . '">
                                <input type="hidden" name="name" value="' . $ten . '">
                                <input type="hidden" name="price" value="' . $gia . '">
                                <button type="submit" name="btn_Wish" class="links-details" onclick="toast()"><li><a class="links-details" href=""><i class="fa fa-heart-o"></i></a></li></button>
                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                            </form>
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

// function showSp_relate($show_relate){
//     $html_dssp_relate='';
//     foreach ($show_relate as $item) {
//         extract($item);
//         $link= "index.php?page=productdetail&idpro=". $id;
//         $html_dssp_relate .= '<div class="col-lg-12">
//                                 <!-- single-product-wrap start -->
//                                 <div class="single-product-wrap">
//                                     <div class="product-image">
//                                         <a href="single-product.html">
//                                             <img src="./view/layout/images/product/large-size/'.$hinh.'" alt="">
//                                         </a>
//                                         <span class="sticker">New</span>
//                                     </div>
//                                     <div class="product_desc">
//                                         <div class="product_desc_info">
//                                             <div class="product-review">
//                                                 <h5 class="manufacturer">
//                                                     <a href="product-details.html">Graphic Corner</a>
//                                                 </h5>
//                                                 <div class="rating-box">
//                                                     <ul class="rating">
//                                                         <li><i class="fa fa-star-o"></i></li>
//                                                         <li><i class="fa fa-star-o"></i></li>
//                                                         <li><i class="fa fa-star-o"></i></li>
//                                                         <li class="no-star"><i class="fa fa-star-o"></i></li>
//                                                         <li class="no-star"><i class="fa fa-star-o"></i></li>
//                                                     </ul>
//                                                 </div>
//                                             </div>
//                                             <h4><a class="product_name" href="single-product.html">Accusantium
//                                                     dolorem1</a></h4>
//                                             <div class="price-box">
//                                                 <span class="new-price">$46.80</span>
//                                             </div>
//                                         </div>
//                                         <div class="add-actions">
//                                             <ul class="add-actions-link">
//                                                 <li class="add-cart active"><a href="#">Add to cart</a></li>
//                                                 <li><a href="#" title="quick view" class="quick-view-btn"
//                                                         data-toggle="modal" data-target="#exampleModalCenter"><i
//                                                             class="fa fa-eye"></i></a></li>
//                                                 <li><a class="links-details" href="wishlist.html"><i
//                                                             class="fa fa-heart-o"></i></a></li>
//                                             </ul>
//                                         </div>
//                                     </div>
//                                 </div>
//                                 <!-- single-product-wrap end -->
//                             </div>';
//     }
//     return $html_dssp_relate;
// }



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

function get_Sp_Detail($id)
{
    $sql = "SELECT * FROM product where id=?";
    return pdo_query_one($sql, $id);
}

function get_Sp_relate($iddm, $id)
{
    $sql = "SELECT * FROM product where id_catalog=? AND id<>? ORDER BY id DESC limit 4";
    return pdo_query($sql, $iddm, $id);
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
    foreach ($dssp_sp as $item) {

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
            $gia_sp = '
                <span class="new-price new-price-2">' . number_format($giamgia, 0, '.', '.') . 'đ</span>
                <span class="old-price">' . number_format($gia, 0, '.', '.') . 'đ</span>
                <span class="discount-percentage">- ' . floor($phantram) . '%</span>
            ';
        } else {
            $gia_sp = '<span class="new-price">' . number_format($gia, 0, '.', '.') . 'đ</span>';
        }
        $link = 'index.php?pg=productdetail&idpro=' . $id;
        $link = 'index.php?pg=productdetail&idpro=' . $id;
        $showhtml .= '
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
                                ' . $gia_sp . '
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






// note cái trùng dòng 184
// <form action="index.php?pg=addtoWishlist" method="post">
// <input type="hidden" name="img" value="../view/layout/images/product' . $hinh . '">