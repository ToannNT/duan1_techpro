<?php
// session_start();
// ob_start();
// session_start();
// require_once "dao/pdo.php";
// require_once "dao/sanpham.php";
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
            break;
    }
} else {
    require_once "view/home.php";
}

require_once "view/footer.php";
