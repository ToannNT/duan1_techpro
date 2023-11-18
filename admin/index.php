<?php
session_start();
ob_start();
// session_start();
require_once "../dao/pdo.php";
require_once "../dao/user.php";
require_once "../dao/sanpham.php";
require_once "../dao/danhmuc.php";
require_once "../dao/giohang.php";
require_once "../dao/bill.php";
require_once "view/header.php";
if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    //vào các trang con
    $pg = $_GET['pg'];
    switch ($pg) {
            // 1111111111111111111111111
        case 'qldanhmuc':
            require_once "view/qldanhmuc.php";
            break;
        case 'adddanhmuc':
            require_once "view/adddanhmuc.php";
            break;
        case 'qlsanpham':
            require_once "view/qlsanpham.php";
            break;
        case 'addsanpham':
            require_once "view/addsanpham.php";
            break;
        case 'qldonhang':
            require_once "view/qldonhang.php";
            break;
        case 'adddonhang':
            require_once "view/adddonhang.php";
            break;
        default:
            require_once "view/home.php";
            break;
    }
} else {
    require_once "view/home.php";
}

require_once "view/footer.php";
