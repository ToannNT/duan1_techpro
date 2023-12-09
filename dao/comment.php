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
