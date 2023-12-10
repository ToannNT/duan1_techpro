<?php
require_once 'pdo.php';
function getds_cmt_sp($idpro)
{
    $sql = "SELECT * FROM cmt WHERE id_product = $idpro ORDER BY id DESC";
    return pdo_query($sql);
}

// insert dữ liệu và 

function insert_cmt($id_product, $id_user, $noi_dung, $ngay_bl, $ten, $hinh)
{
    $sql = "INSERT INTO cmt (id_product,id_user,noi_dung,ngay_bl,ten,hinh ) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $id_product, $id_user, $noi_dung, $ngay_bl, $ten, $hinh);
}


function count_cmt_product($id_product)
{
    $sql = "SELECT count(*) FROM cmt WHERE id_product = $id_product";
    return pdo_query_value($sql);
}


// function hang_hoa_exist($ma_hh)
// {
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }