<?php
require_once 'pdo.php';

// ĐƠN HÀNG  TRANG MY ORDER 


function insert_orderr($madh, $id_user, $id_product, $id_bill, $ten, $gia, $hinh, $soluong, $ngaydat, $ten_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $phivanchuyen, $voucher, $hoivien, $pttt, $status)
{
    $sql = "INSERT INTO `order` (madh,id_user,id_product,id_bill,ten,gia,hinh,soluong,ngaydat,ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,phivanchuyen,voucher,hoivien,pttt,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $madh, $id_user, $id_product, $id_bill, $ten, $gia, $hinh, $soluong, $ngaydat, $ten_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $phivanchuyen, $voucher, $hoivien, $pttt, $status);
}


// Đơn hàng đã thanh toán từ  TRANG MY_ORDER.PHP
// function get_ds_order($id_user)
// {
//     $sql = "SELECT  b.* , c.ten , c.hinh , c.status , c.soluong, c.id_product , c.id as id_cart  FROM bill b INNER JOIN cart c ON b.id = c.id_bill WHERE b.id_user = $id_user ORDER BY c.status ASC,c.id DESC";

//     return pdo_query($sql);
// }

function get_ds_order($id_user)
{
    $sql = "SELECT * FROM `order` WHERE id_user = $id_user ORDER BY status ASC,id DESC";
    return pdo_query($sql);
}



// LẤY DS THÔNG TIN CHI TIẾT SẢN PHẨM SAU KHI ORDER THÀNH CÔNG
function getds_orderAll($keyword)
{
    $sql = "SELECT  o.* , u.hoten as hoten_kh FROM `order` o INNER JOIN user u ON o.id_user = u.id WHERE 1";

    if ($keyword != "") {
        $sql .= " AND madh LIKE '%" . $keyword . "%'";
    }

    $sql .= " ORDER BY o.status ASC";

    return pdo_query($sql,);
}

function get_ds_detailed_order($id_order)
{
    $sql = "SELECT * FROM `order` WHERE id = ?";
    return pdo_query_one($sql, $id_order);
}


function count_sp_inbill($id_bill)
{
    $sql = "SELECT COUNT(id_bill) AS sosanpham FROM `order` WHERE id_bill = $id_bill;";
    return pdo_query_value($sql);
}


// update trạng thái đơn hàng 
function update_status_order($status, $idorder)
{
    $sql = "UPDATE `order` SET status = $status + 1  WHERE id = $idorder";
    pdo_execute($sql);
}



function update_status_my_order($id_huydon, $idorder, $status)
{
    if (isset($id_huydon) && ($id_huydon != "")) {
        $sql = "UPDATE `order` SET status = 4  WHERE id = $id_huydon";
    } else {
        $sql = "UPDATE `order` SET status = $status + 1  WHERE id = $idorder";
    }
    return pdo_execute($sql);
}