<?php

// inser vào giỏ hàng
function cart_insert($id_user, $id_product, $id_bill, $ten, $hinh, $gia, $soluong, $thanhtien)
{
    $sql = "INSERT INTO cart (id_user,id_product,id_bill,ten,hinh,gia,soluong,thanhtien) VALUES (?,?, ?, ?, ? , ?, ? ,?)";
    pdo_execute($sql, $id_user, $id_product, $id_bill, $ten, $hinh, $gia, $soluong, $thanhtien);
}

// function get_tongdonhang()
// {
//     $tong = 0;
//     foreach ($_SESSION['giohang'] as $sp) {
//         extract($sp);
//         $total = (int)$price * (int)$quantity;
//         $tong += $total;
//     }
//     return $tong;
// }

// function get_tongdonhang()
// {
//     $tt = 0;
//     $tong = 0;
//     foreach ($_SESSION['giohang'] as $item) {
//         extract($item);
//         $tt = (int)$price * (int)$quantity;
//         $tong += $tt;
//     }
//     return $tong;
// }