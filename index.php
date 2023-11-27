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
require_once "dao/blog.php";
require_once "dao/compare.php";



//header
$ds_danhmuc = dsdm_catalog();
$ds_brand = dsdm_brand();

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
        case 'changepassword':
            // if(isset($_SESSION['id']) && isset($_SESSION['username'])){
            //     if (isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])) {
            //         # code...
            //     }
            // }
            if(isset($_SESSION['s_user'])){
                if (isset($_POST["thaydoi"])){
                    $password = $_POST['op'];
                    $newpassword = $_POST['np'];
                    $repassword = $_POST['c_np'];
                    $id= $_SESSION['s_user']['id'];
                    // $checkvar = $conn->query("SELECT * FROM 'user' WHERE 'username' = '".$conn->real_escape_string($username)."' ")->fetch_array();
                    if ($password == "" || $newpassword == "" || $repassword == "") {
                        $thongbao="Vui lòng nhập đầy đủ thông tin";
                    }else if($password != $_SESSION['s_user']['password']){
                        echo $password;
                        echo $_SESSION['s_user']['password'];
                        $thongbao = "Mật khẩu hiện tại không chính xác";
                    }else if( $newpassword != $repassword){
                        $thongbao = "Mật khẩu nhập lại không đúng";
                    }else{
                        update_pass_user($newpassword, $id);
                        $thongbaothanhcong = "Thành công";
                    }
                }
            }else{
                include_once "view/login_register.php";
            }
            include_once "view/changepassword.php";
            break;
        case 'blog':
            require_once "view/blog.php";
            break;
        case 'blog_details':
            require_once "view/blog_details.php";
            break;
        case 'product':
            $dssp_all = get_dssp(12);
            $dsdm = dsdm_catalog();

            $dsbrandne = dsdm_brand_product();



            // if (isset($_POST['action'])) {
            //     $dssp_filter = get_data_filter();
            // } else {
            //     $dssp_filter = get_data_filter();
            // }

            require_once "view/product.php";
            break;
        case 'productdetail':
            if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $show_Sp_detail = get_Sp_Detail($id);
                $iddm = $show_Sp_detail['id_catalog'];
                $show_relate = get_Sp_relate($iddm, $id);
                require_once "view/productdetail.php";
            } else {
                include_once "view/home.php";
            }
            break;
        case 'contact':
            require_once "view/contact.php";
            break;
        case 'compare':
            require_once "view/compare.php";
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
                    header('location: index.php?pg=account');
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
        case 'addtoWishlist':
            if(isset($_POST['btn_Wish'])){
                $img=$_POST['img'];
                $name=$_POST['name'];
                $price=$_POST['price'];
                // if (isset($_SESSION['f_Product']) && ($_SESSION['f_Product'] != "")) {
                //     $flag = false;
                //     // Kiểm tra xem sản phẩm đã có trong wishlist chưa
                //     foreach ($_SESSION['f_Product'] as $key => $value) {
                //     // Nếu có rồi thì không cần add nữa
                //         if ($value['name'] == $name) {
                //             // $_SESSION['f_Product'][$key]['quantity'] += 1;
                            
                //             $flag = true;
                //         }
                //     }
                //     // Nếu chưa có thì thêm vào
                //     if (!$flag) {
                //         $sp=["ten" => $name, "hinh" => $img, "gia" => $price];
                //         $_SESSION['f_Product'][]=$sp;
                //     }
                // }    
                // // Nếu chưa có session F_Product
                // else {
                //     $sp=["ten" => $name, "hinh" => $img, "gia" => $price];
                //     $_SESSION['f_Product'][]=$sp;
                // }
                $sp=["ten" => $name, "hinh" => $img, "gia" => $price];
                $_SESSION['f_Product'][]=$sp;
                header('location: index.php?pg=login_register');
            }
            break;
        case 'wishlist':
            include_once "view/wishlist.php";
            break;
        case 'delWishlistArray':
            if(isset($_GET['ind']) && ($_GET['ind'])>=0){
                array_splice($_SESSION['f_Product'],$_GET['ind'],1);
                header ('location: index.php?page=cart');
            }
            if(empty($_SESSION['f_Product'])){
                unset($_SESSION['f_Product']);
            }
            break;
        default:
            require_once "view/home.php";
            $dssp_hot = get_dssp_hot(5);
            $dssp_new = get_dssp_new(5);
            $dssp_sale = get_dssp_sale(5);
            $dssp_phone = get_dssp_dienthoai(5);
            $dssp_laptop = get_dssp_laptop(5);
            $dssp_suggest = get_dssp_suggest(5);
            break;
    }
} else {
    $dssp_hot = get_dssp_hot(5);
    $dssp_new = get_dssp_new(5);
    $dssp_sale = get_dssp_sale(5);
    $dssp_phone = get_dssp_dienthoai(5);
    $dssp_laptop = get_dssp_laptop(5);
    $dssp_suggest = get_dssp_suggest(5);




    require_once "view/home.php";
}

require_once "view/footer.php";
