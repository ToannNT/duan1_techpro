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
            $get_Cataloglist = get_Catalog();
            require_once "view/qldanhmuc.php";
            break;
        case 'del': {
                if (isset($_GET['id'])) {
                    // echo 'OK';
                    $id = $_GET['id'];
                    $tb = delete_catalog($id);
                }
                $get_Cataloglist = get_Catalog();
                require_once "view/qldanhmuc.php";
                break;
            }
        case 'adddanhmuc':
            if (isset($_POST['addCatagory'])) {
                // echo "Thêm thành công";
                $stt = $_POST['stt'];
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                $sethome = $_POST['sethome'];
                catagory_add($stt, $name, $mota, $sethome);
                $get_Cataloglist = get_Catalog();
                header('location: index.php?pg=qldanhmuc');
            }
            require_once "view/adddanhmuc.php";
            break;
        case 'updateCatagory':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $get_Catalogone = get_Catalog_One($id);
                require_once "view/updateCatagory.php";
            }
            require_once "view/updateCatagory.php";
            break;
        case 'update':
            if (isset($_POST['btnUpdate'])) {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $stt = $_POST['stt'];
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $sethome = $_POST['sethome'];
                    updateCatagory($id, $stt, $name, $mota, $sethome);
                    header('location: index.php?pg=qldanhmuc');
                }
            }
            // require_once "view/updateCatagory.php";
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
