<?php
require_once 'pdo.php';

function binhluan_insert($iduser, $username, $idpro, $noidung, $ngaybl, $hinh)
{
    $sql = "INSERT INTO binhluan(id_user,ten, id_product, noi_dung, ngay_bl,hinh) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $iduser, $username, $idpro, $noidung, $ngaybl, $hinh);
}

// function binhluan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl)
// {
//     $sql = "UPDATE binhluan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

function binhluan_delete($ma_bl)
{
    $sql = "DELETE FROM binhluan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

function binhluan_select_byidproduct($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE id_product = ? ORDER BY id DESC";
    return pdo_query($sql, $idpro);
}

// function binhluan_select_by_id($ma_bl)
// {
//     $sql = "SELECT * FROM binhluan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binhluan_exist($ma_bl)
// {
//     $sql = "SELECT count(*) FROM binhluan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
//-------------------------------//
// function binhluan_select_by_hang_hoa($ma_hh)
// {
//     $sql = "SELECT b.*, h.ten_hh FROM binhluan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }