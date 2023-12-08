<?php
require_once 'pdo.php';


//lấy về id mới nhất sau khi insert
function bill_insert_id($ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $order_notes, $tong, $pt_thanhtoan, $ngaydat, $hoivien)
{
    $sql = "INSERT INTO bill (ma_hoadon,id_user ,ten_nguoidat,email_nguoidat,sdt_nguoidat,diachi_nguoidat, ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,total,ship,vouncher,order_notes,tong,pttt,ngaydat,hoivien) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    return  pdo_execute_id($sql, $ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $order_notes, $tong, $pt_thanhtoan, $ngaydat, $hoivien);
}


//Đặt hàng thành công
function confirm_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id = ?";
    return pdo_query_one($sql, $id_bill);
}




function update_quantity_product($idpro)
{
    $sql = "UPDATE product SET soluong = soluong - 1  WHERE id = $idpro";
    pdo_execute($sql);
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