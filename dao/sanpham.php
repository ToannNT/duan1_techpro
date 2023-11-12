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
        if ($dac_biet == 1) {
            $itemHot = '
            <img src="./view/layout/img/icon_product_hot.png" alt="">
            ';
        } else {
            $itemHot = '';
        }
        if ($dac_biet == 2) {
            $itemNew = '
            <img src="./view/layout/img/icon_product_new.png" alt="">
            ';
        } else {
            $itemNew = '';
        }
        if ($giam_gia > 0) {
            $gia_sp = '' . $giam_gia . '.000đ <sup><strike>' . $gia . '.000đ';
        } else {
            $gia_sp = '' . $gia . '.000đ <sup><strike>';
        }
        $link = 'index.php?pg=productdetail&idpro=' . $id;
        $show_dssp_all .= '
        <div class="products-box">
            <div class="products-box__view">
                ' . $itemNew . '
            </div>
            <div class="products-box__hot">
                ' . $itemHot . '
            </div>
            <a href="' . $link . '">
                <img class="products-box__images" src="./view/layout/img/' . $hinh . '" alt="images">
            </a>
            <p class="products-box__name">' . $ten_sp . '</p>
            <p class="products-box__price"> ' . $gia_sp . '</strike></sup> </p>
            <form action="index.php?pg=addcart" method="post" class="products-box__btn_submit">
                <input type="hidden" name="idpro" value="' . $id . '">
                <input type="hidden" name="name" value="' . $ten_sp . '">
                <input type="hidden" name="img" value="' . $hinh . '">
                <input type="hidden" name="price" value="' . $gia . '">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" class="products-box__btn__buy" value="Mua">
                <input type="submit" name="addcart" class="products-box__btn__add" value="Thêm">
            </form>
   
    
        </div>
        ';
    }
    return $show_dssp_all;
}
function get_count_sp($id)
{
    $sql = "SELECT COUNT(*) FROM sanpham WHERE id_catalog=?";
    return pdo_query_value($sql, $id);
}
function get_dssp_hot($limit)
{
    $sql = "SELECT * FROM sanpham WHERE dac_biet = 1 ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

function get_dssp_new($limit)
{
    $sql = "SELECT * FROM sanpham WHERE dac_biet = 2  ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

function get_dssp_All($keyword, $idcatalog, $limit)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($idcatalog > 0) {
        $sql .= " AND id_catalog= " . $idcatalog;
    }
    if ($keyword != "") {
        $sql .= " AND ten_sp LIKE '%" . $keyword . "%'";
        // $sql .= " AND ten_sp like '%" . $keyword . "%'";
    }

    $sql .= " ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}

//sp related
function get_dssp_related($idcatalog, $id, $limit)
{
    $sql = "SELECT * FROM sanpham WHERE id_catalog = ? AND id<>? ORDER BY so_luot_xem DESC LIMIT " . $limit;
    return pdo_query($sql, $idcatalog, $id);
}

//lấy 1 sp
function get_sp_Detail($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}



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