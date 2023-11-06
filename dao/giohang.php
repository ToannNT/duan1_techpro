<?php

//inser vào giỏ hàng
function cart_insert($idpro, $idbill, $ten, $hinh, $gia, $soluong, $thanhtien)
{
    $sql = "INSERT INTO giohang (id_product,id_bill,ten,hinh,gia,soluong,thanhtien) VALUES (?, ?, ?, ? , ?, ? ,?)";
    pdo_execute($sql, $idpro, $idbill, $ten, $hinh, $gia, $soluong, $thanhtien);
}

function get_tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $total = (int)$price * (int)$quantity;
        $tong += $total;
    }
    return $tong;
}
