<?php
session_start();
ob_start();

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
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
            if (isset($_SESSION['s_user'])) {
                if (isset($_POST["thaydoi"])) {
                    $password = $_POST['op'];
                    $newpassword = $_POST['np'];
                    $repassword = $_POST['c_np'];
                    $id = $_SESSION['s_user']['id'];
                    // $checkvar = $conn->query("SELECT * FROM 'user' WHERE 'username' = '".$conn->real_escape_string($username)."' ")->fetch_array();
                    if ($password == "" || $newpassword == "" || $repassword == "") {
                        $thongbao = "Vui lòng nhập đầy đủ thông tin";
                    } else if ($password != $_SESSION['s_user']['password']) {
                        echo $password;
                        echo $_SESSION['s_user']['password'];
                        $thongbao = "Mật khẩu hiện tại không chính xác";
                    } else if ($newpassword != $repassword) {
                        $thongbao = "Mật khẩu nhập lại không đúng";
                    } else {
                        update_pass_user($newpassword, $id);
                        $thongbaothanhcong = "Thành công";
                    }
                }
            } else {
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
        case 'viewcart':
            //xoa all
            if (isset($_GET['del']) && ($_GET['del'] == -1)) {
                unset($_SESSION['giohang']);
                header('location: index.php?pg=viewcart');
                // xóa 1 product
            } else if (isset($_GET['del']) && ($_GET['del'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['del'], 1);
                header('location: index.php?pg=viewcart');
                // chưa làm
            } else if (isset($_SESSION['giohang'])) {
                // $ttdonhang = get_tongdonhang();
            }
            require_once "view/viewcart.php";
            break;
        case 'addcart':
            if (isset($_POST['addcart'])) {
                $name = $_POST["name"];
                $img = $_POST["img"];
                $price = $_POST["price"];
                $quantity = $_POST["quantity"];
                $idpro = $_POST["idpro"];
                $s_status = $_POST["s_status"];
                $s_status = $_POST["s_status"];
                $thanhtien = $_POST["thanhtien"];

                $page_here = $_POST["page_here"];
                //tạo biến ktra 
                $product_exists = false;
                foreach ($_SESSION['giohang'] as &$item) {
                    if ($item['name'] == $name) {
                        // Sản phẩm đã tồn tại, cập nhật số lượng lênnn
                        $item['quantity'] += $quantity;
                        $product_exists = true;
                        header('location: ' . $page_here . '');
                        break;
                    }
                }

                if ($product_exists == false) {
                    $product_arr = array("name" => $name, "img" => $img, "price" => $price, "quantity" => $quantity, "idpro" => $idpro, "s_status" => $s_status, "thanhtien" => $thanhtien);
                    array_push($_SESSION['giohang'], $product_arr);
                    header('location: ' . $page_here . '');
                }
            }

            // require_once "view/addcart.php";
            break;
        case 'checkout':
            require_once "view/checkout.php";
            break;
        case 'checkout2':
            require_once "view/checkout2.php";
            break;
        case 'contact':
            require_once "view/contact.php";
            break;
        case 'compare':
            require_once "view/compare.php";
            break;
        case 'aboutus':
            require_once "view/aboutus.php";
            break;
        case 'login_register':
            require_once "view/login_register.php";
            break;
        case 'register':
            if (isset($_POST["dangky"])) {
                $hoten = trim($_POST["hoten"]);
                $username = trim($_POST["username"]);
                $email = trim($_POST["email"]);
                $sdt = trim($_POST["sdt"]);
                $password = trim($_POST["password"]);
                $repassword = trim($_POST["repassword"]);
                if (empty($hoten) || empty($username) || empty($email) || empty($sdt) || empty($password) || empty($repassword)) {
                    $tb .= '<div class="alert alert-danger">Vui lòng điền đầy đủ thông tin</div>';
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $tb .= '<div class="alert alert-danger">Địa chỉ email không hợp lệ</div>';
                    } else {
                        if (strlen($password) < 8) {
                            $tb .= '<div class="alert alert-danger">Mật khẩu ít nhất phải có 8 kí tự</div>';
                        } else {
                            if ($password !== $repassword) {
                                $tb .= '<div class="alert alert-danger">Mật khẩu không khớp</div>';
                            } else {
                                user_insert($hoten, $username, $email, $sdt, $password);
                                $_SESSION['success_message'] = "Đăng ký thành công! Bạn có thể đăng nhập ngay.";
                                header('location: index.php?pg=login_register');
                                exit;
                            }
                        }
                    }
                }
                $_SESSION['tb_dangky'] = $tb;
                header('location: index.php?pg=login_register');
                exit;
            }
            include_once "view/login_register.php";
            break;
        case 'login':
            if (isset($_POST["dangnhap"])) {
                $username = trim($_POST["username"]);
                $password = trim($_POST["password"]);
                if (empty($username) || empty($password)) {
                    $tb .= '<div class="alert alert-danger">Vui lòng nhập tên đăng nhập và mật khẩu</div>';
                } else {
                    $kq = checkuser($username, $password);
        
                    if (is_array($kq) && (count($kq))) {
                        $_SESSION['s_user'] = $kq;
                        header('location: index.php?pg=account');
                        exit;
                    } else {
                        $tb .= '<div class="alert alert-danger">Tài khoản không tồn tại hoặc mật khẩu không đúng</div>';
                    }
                }
        
                $_SESSION['tb_dangnhap'] = $tb;
                header('location: index.php?pg=login_register');
                exit;
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
                // $password = $_POST["password"];
                $email = $_POST["email"];
                $gioitinh = $_POST["gioitinh"];
                $diachi = $_POST["diachi"];
                $sdt = $_POST["sdt"];
                $id = $_POST["id"];
                $role = 0;
                $hinh = $_FILES["hinh"]["name"];
                 // Nếu có ảnh mới được chọn
            if ($hinh != "") {
                $target_file = "./view/layout/images/user/" . $hinh;
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            } else {
                // Nếu không có ảnh mới được chọn, sử dụng ảnh gần nhất
                $latestImage =  getLatestImageFromUser($id);
                $target_file = $latestImage;
            }
                    // $target_file ="./view/layout/images/user/". $hinh;
                    // move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                // xử lý
                update_user($hoten, $username, $password,  $email, $gioitinh, $diachi, $sdt, $hinh, $role, $id);
                include_once "view/confirm_account.php";
            } else {
                include_once "view/account.php";
            }
            break;
        case 'addtoWishlist':
            if (isset($_POST['btn_Wish'])) {
                $id = $_POST['id'];
                $img = $_POST['img'];
                $name = $_POST['name'];
                $price = $_POST['price'];
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
                $sp = ["id" => $id, "ten" => $name, "hinh" => $img, "gia" => $price];
                $_SESSION['f_Product'][] = $sp;
                header('location: index.php?pg=wishlist');
            }
            break;
        case 'wishlist':
            include_once "view/wishlist.php";
            break;
        case 'delWishlistArray':
            if (isset($_GET['ind']) && ($_GET['ind']) >= 0) {
                array_splice($_SESSION['f_Product'], $_GET['ind'], 1);
                header('location: index.php?pg=wishlist');
            }
            if (empty($_SESSION['f_Product'])) {
                unset($_SESSION['f_Product']);
                header('location: index.php');
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
