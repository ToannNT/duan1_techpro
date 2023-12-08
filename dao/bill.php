<?php
require_once 'pdo.php';


//lấy về id mới nhất sau khi insert
function bill_insert_id($ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $order_notes, $tong, $pt_thanhtoan, $ngaydat)
{
    $sql = "INSERT INTO bill (ma_donhang,id_user ,ten_nguoidat,email_nguoidat,sdt_nguoidat,diachi_nguoidat, ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,total,ship,vouncher,order_notes,tong,pttt,ngaydat) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    return  pdo_execute_id($sql, $ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $order_notes, $tong, $pt_thanhtoan, $ngaydat);
}


//Đặt hàng thành công
function confirm_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id = ?";
    return pdo_query_one($sql, $id_bill);
}


// Đơn hàng đã thanh toán từ 
function get_ds_order($id_user)
{
    $sql = "SELECT  b.* , c.ten , c.hinh , c.status , c.soluong, c.id_product , c.id as id_cart  FROM bill b INNER JOIN cart c ON b.id = c.id_bill WHERE b.id_user = $id_user ORDER BY c.status ASC,c.id DESC";

    return pdo_query($sql);
}



// LẤY DS THÔNG TIN CHI TIẾT SẢN PHẨM SAU KHI ORDER THÀNH CÔNG
function get_ds_detailed_order($id_product, $id_cart)
{
    $sql = "SELECT * FROM cart WHERE id_product = ? AND id = ?";
    return pdo_query_one($sql, $id_product, $id_cart);
}




// function user_insert($hoten, $username, $email, $sdt, $password)
// {
//     $sql = "INSERT INTO user(hoten,username,email,sdt,password) VALUES (?,?,?,?,?)";
//     pdo_execute($sql, $hoten, $username, $email, $sdt, $password);
// }

// function user_insert($hoten, $username, $email, $sdt, $password)
// {
//     $sql = "INSERT INTO user(hoten,username,email,sdt,password) VALUES (?,?,?,?,?)";
//     pdo_execute($sql, $hoten, $username, $email, $sdt, $password);
// }