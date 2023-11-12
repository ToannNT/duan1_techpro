<?php
// require_once 'pdo.php';


//lấy về id mới nhất sau khi insert
function bill_insert_id($ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $tong_thanhtoan, $pt_thanhtoan)
{
    $sql = "INSERT INTO bill (ma_donhang,id_user ,nguoidat_ten,nguoidat_email,nguoidat_sdt,nguoidat_diachi, nguoinhan_ten,nguoinhan_sdt,nguoinhan_diachi,total,ship,voucher,tong_thanhtoan,pt_thanhtoan) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    return  pdo_execute_id($sql, $ma_donhang, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_sdt, $nguoinhan_diachi, $total, $ship, $voucher, $tong_thanhtoan, $pt_thanhtoan);
}
