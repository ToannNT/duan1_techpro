<?php
session_start();
ob_start();
// session_start();
// ob_start();
// session_start();
// require_once "dao/pdo.php";
require_once "dao/sanpham.php";
// require_once "dao/danhmuc.php";
// require_once "dao/giohang.php";
// require_once "dao/user.php";
// require_once "dao/bill.php";
//header
require_once "view/header.php";


if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    //vào các trang con
    $pg = $_GET['pg'];
    switch ($pg) {
            // 1111111111111111111111111
        case 'ft_password':
            require_once "view/ft_password.php";
            break;
        case 'sw_password':
            require_once "view/sw_password.php";
            break;
        case 'blog':
            require_once "view/blog.php";
            break;
        case 'product':
            require_once "view/product.php";
            break;
        case 'productdetail':
            require_once "view/productdetail.php";
            break;
        case 'contact':
            require_once "view/contact.php";
            break;
        case 'aboutus':
            require_once "view/aboutus.php";
            break;




        default:
            require_once "view/home.php";
            $dssp_hot = get_dssp_hot(5);
            $dssp_new = get_dssp_new(5);
            $dssp_sale = get_dssp_sale(5);
<<<<<<< HEAD
            $dssp_phone = get_dssp_dienthoai(5);
            $dssp_laptop = get_dssp_laptop(5);
            $dssp_suggest = get_dssp_suggest(5);
<<<<<<< HEAD
=======

>>>>>>> parent of 15b229a (Toàn)
=======




>>>>>>> parent of 9b2ed80 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
            break;
    }
} else {
    $dssp_hot = get_dssp_hot(5);
    $dssp_new = get_dssp_new(5);
    $dssp_sale = get_dssp_sale(5);


    require_once "view/home.php";
}

require_once "view/footer.php";