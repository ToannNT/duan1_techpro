<?php
session_start();
ob_start();
// session_start();
require_once "dao/pdo.php";
require_once "dao/user.php";
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
require_once "dao/giohang.php";
require_once "dao/bill.php";



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
        case 'login_register':
            require_once "view/login_register.php";
            break;
        case 'register':
            // xác định giá trị input
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $hoten = $_POST["hoten"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $password = $_POST["password"];
                // xử lý
                user_insert($hoten, $username, $email, $sdt, $password);
            }
            include_once "view/login_register.php";
            break;
        case 'login':
            //input
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                //kiem tra
                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    header('location: index.php');
                } else {
                    $tb = "Tài khoản không tồn tại hoặc thông tin đăng nhập sai!";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?pg=login_register');
                }
                //out
            }
            break;
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
        case 'account':
            require_once "view/account.php";
            break;
        case 'confirm_account':
            require_once "view/account.php";
            break;
        case 'update_user':
            // xác định giá trị input
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $hoten = $_POST["hoten"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $gioitinh = $_POST["gioitinh"];
                $diachi = $_POST["diachi"];
                $sdt = $_POST["sdt"];
                $hinh = $_POST["hinh"];
                $id = $_POST["id"];
                $role = 0;
                // xử lý
                update_user($hoten, $username, $password,  $email, $gioitinh, $diachi, $sdt, $hinh, $role, $id);
                include_once "view/confirm_account.php";
            } else {
                include_once "view/index.php";
            }
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
<<<<<<< HEAD
=======

>>>>>>> parent of 15b229a (Toàn)
=======
=======
>>>>>>> parent of 9b2ed80 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)




<<<<<<< HEAD
>>>>>>> parent of 9b2ed80 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
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
