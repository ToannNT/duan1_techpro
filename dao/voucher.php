<?php
require_once 'pdo.php';

function search_voucher($ten_voucher)
{
    // $bien = "toanxinhtrai";
    $sql = "SELECT sotiengiam FROM vouncher WHERE ten_vouncher LIKE '%" . $ten_voucher . "%'";
    return pdo_query_value($sql);
}

function check_used_voucher($ten_voucher)
{
    // $bien = "toanxinhtrai";
    $sql = "SELECT used_voucher FROM vouncher WHERE ten_vouncher LIKE '%" . $ten_voucher . "%'";
    return pdo_query_value($sql);
}


function check_voucher($ten_voucher)
{
    // $bien = "toanxinhtrai";
    $sql = "SELECT * FROM vouncher WHERE ten_vouncher LIKE '%" . $ten_voucher . "%'";
    return pdo_query_one($sql);
}


// check user
function checkUserVoucherUsage($id_user, $voucherCode)
{

    $sql = "SELECT * FROM user_voucher WHERE id_user = $id_user AND voucher_code LIKE '%" . $voucherCode . "%'";
    return pdo_query($sql);
}

//update người dùng đã sử dụng
function updateUserVoucherUsage($id_user, $voucherCode)
{
    $sql = "INSERT INTO user_voucher(id_user, voucher_code) VALUES (?,?)";
    pdo_execute($sql, $id_user, $voucherCode);
}


// // check số lượng voucher
function checkVoucherQuantity($ten_voucher)
{

    $sql = "SELECT quantity_voucher FROM vouncher WHERE ten_vouncher LIKE '%" . $ten_voucher . "%'";
    return pdo_query_value($sql);
}

// trừ số lượng voucher đi 1;
function updateVoucherQuantity($ten_voucher)
{
    $sql = "UPDATE vouncher SET quantity_voucher = quantity_voucher - 1 WHERE ten_vouncher = ?";
    pdo_execute($sql, $ten_voucher);
}
