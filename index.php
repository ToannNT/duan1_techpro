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
require_once "dao/voucher.php";
require_once "dao/giohang.php";
require_once "dao/bill.php";
require_once "dao/blog.php";
require_once "dao/compare.php";
require_once "dao/global.php";

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
            // lấy voucher
            if (isset($_POST['check_voucher']) && ($_POST['check_voucher'])) {
                if (isset($_POST["value_voucher"]) && ($_POST["value_voucher"] != "")) {
                    //giá trị từ form
                    $ten_voucher = $_POST['value_voucher'];
                    $tt_chuadangnhap = "hãy đăng nhập để sử dụng các ữu đãi voucher";
                    $thongbaovoucher = '<span style="color: red; font-size: 1rem; margin-left: 5px;">
                    Vui lòng đăng nhập để sử dụng voucher</span>';
                    //kiểm tra đăng nhập chưa 
                    if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] != "")) {
                        $id_user = $_SESSION["s_user"]["id"];

                        // kiem tra voucher tồn tại không
                        $kq = check_voucher($ten_voucher);

                        if (is_array($kq) && (count($kq))) {
                            //kiemtra nguoi dùng đã sử dụng chưa
                            $checkUserVoucherUsed = checkUserVoucherUsage($id_user, $ten_voucher);
                            //kiem tra số lượng voucher còn không
                            $quantityVoucher = checkVoucherQuantity($ten_voucher);


                            // nếu số lượng vouhcer > 0 thì cho sử dụng
                            if ($quantityVoucher > 0) {
                                if (is_array($checkUserVoucherUsed) && (count($checkUserVoucherUsed))) {
                                    //Đã sử dụng voucher gòi 

                                    $thongbaovoucher = '<span style="color: red; font-size: 1rem; margin-left: 5px;">
                                    Tài khoản đã được sử dụng</span>';

                                    $variable_voucher = 0;
                                } else {
                                    // chưa sử dụng voucher bao giờ
                                    $variable_voucher = search_voucher($ten_voucher);

                                    $_SESSION['voucher'] = array(
                                        'ten_voucher' => $ten_voucher,
                                        'variable_voucher' => $variable_voucher
                                    );
                                    // update đã sử dụng voucher

                                    // nếu session isset thì cập nhật đã sử dụng trừ đi 1


                                    $thongbaovoucher = '<span style="color: green; margin-left: 5px;">
                                    Áp mã thành công</span>';
                                }
                            } else {
                                //hết số lượng voucher 
                                $variable_voucher = 0;
                                $thongbaovoucher = '<span style="color: red; font-size: 1rem; margin-left: 5px;">
                                Số lượng đã hết!</span>';
                            }

                            // nhập saiiiii
                        } else {
                            $variable_voucher = 0;
                            $thongbaovoucher = '<span style="color: red; font-size: 1rem; margin-left: 5px;">
                            Voucher không tồn tại!</span>';
                        }
                    } // end kiem tra có tài khoảng Không

                } else { //nếu khg có kí tự nhập thì cảnh báo
                    $variable_voucher = 0;
                    $thongbaovoucher = '<span style="color: red; font-size: 1rem; font-size: 1rem; margin-left: 5px;">
                    Vui lòng nhập để sử dụng voucher! kekeeke</span>';
                }
            } else { // nếu không gửi voucher
                $variable_voucher = 0;
                $thongbaovoucher = "";
            }







            if (isset($_POST['checkout']) && ($_POST['checkout'])) {
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $nguoinhan_hoten = $_POST['nguoinhan_hoten'];
                $nguoinhan_diachi = $_POST['nguoinhan_diachi'];
                $nguoinhan_dienthoai = $_POST['nguoinhan_dienthoai'];
                $voucher = $_POST['voucher'];
                $total = $_POST['tt'];
                $tongthanhtoan = $_POST['tong_thanhtoan'];
                $ghichu = $_POST['order_notes'];
                $ship = $_POST['ptvc'];





                // lấy iduser
                if (isset($_SESSION['s_user']) && ($_SESSION['s_user'] != "")) {
                    $iduser = $_SESSION['s_user']['id'];
                    update_user_checkout($hoten, $email, $diachi, $dienthoai, $iduser);
                } else {
                    $username = "guests" . rand(1, 99999);
                    $password = "172004" . rand(1, 99999);
                    $iduser = user_insert_id($username, $password, $hoten, $diachi, $email, $dienthoai);
                }
                $ma_donhang = "TECHPRO" . $iduser . "-" . date("His-dmY");
                // First tạo đơn hàng 
                $id_bill = bill_insert_id($ma_donhang, $iduser, $hoten, $email, $dienthoai, $diachi, $nguoinhan_hoten, $nguoinhan_dienthoai, $nguoinhan_diachi, $total, $ship, $voucher, $ghichu, $tongthanhtoan, $pttt);




                // NẾU TÒN TẠI ID BILL VÀ KIỂM TRA USED CHƯA SỬ DỤNG THÌ ĐÁNH DẤU VÀ TRỪ QUANTITY 1
                if ((isset($_SESSION['voucher'])) && ($_SESSION['voucher'] != "") && (isset($id_bill))) {
                    $id_user = $_SESSION['s_user']['id'];
                    $ten_voucher = $_SESSION['voucher']['ten_voucher'];

                    updateUserVoucherUsage($id_user, $ten_voucher);
                    //trừ số lượng voucher đi là 1
                    updateVoucherQuantity($ten_voucher);
                }

































                foreach ($_SESSION['giohang'] as $key => $value) {
                    extract($value);
                    if ($s_status == 1) {
                        cart_insert($iduser, $idpro, $id_bill, $name, $img, $price, $quantity, $thanhtien);
                        unset($_SESSION['giohang'][$key]); // Xóa phần tử trong mảng $_SESSION
                    }
                }
                unset($_SESSION['voucher']);
                $_SESSION['giohang'] = array_values($_SESSION['giohang']); // Đặt lại chỉ số mảng để tránh lỗ hổng
                header('location: index.php?pg=confirm_checkout&id_bill=' . $id_bill . '');
            }
            require_once "view/checkout.php";
            break;

        case 'confirm_checkout':
            require_once "view/confirm_checkout.php";
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (isset($_POST["dangnhap"])) {
                $username = trim($_POST["username"]);
                $password = trim($_POST["password"]);
                if (empty($username) || empty($password)) {
                    $tb .= '<div class="alert alert-danger">Vui lòng nhập tên đăng nhập và mật khẩu</div>';
=======
=======
>>>>>>> parent of a51c1e6 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
            //input
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
<<<<<<< HEAD
                if (isset($_POST["page_here"])) {
                    $page_here =  $_POST["page_here"];
=======
            //input
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = trim($_POST["username"]);
                $password = trim($_POST["password"]);
                if (($_POST["page_here_ne"] != "")) {
                    $page_here =  $_POST["page_here_ne"];
>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
                } else {
                    $page_here =  "account";
                }
<<<<<<< HEAD
=======
                if (($_POST["page_here_ne"] != "")) {
                    $page_here =  $_POST["page_here_ne"];
                } else {
                    $page_here = "account";
                }
                // if (isset($_GET["page_follow"])) {
                //     $page_here =  $_GET["page_follow"];
                // } else {
                //     $page_here = "account";
                // }
>>>>>>> parent of a51c1e6 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
                //kiem tra
                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    header('location: index.php?pg=' . $page_here . '');
<<<<<<< HEAD
>>>>>>> 2ea8992537acc826dddc45f9767b0729c830fbdb
=======




                if (empty($username) || empty($password)) {
                    $tb = '<div class="alert alert-danger">Vui lòng nhập tên đăng nhập và mật khẩu</div>';
>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
                } else {
                    $kq = checkuser($username, $password);

                    if (is_array($kq) && (count($kq))) {
                        $_SESSION['s_user'] = $kq;
                        header('location: index.php?pg=account');
                        exit;
                    } else {
                        $tb = '<div class="alert alert-danger">Tài khoản không tồn tại hoặc mật khẩu không đúng</div>';
                    }
                }
<<<<<<< HEAD
        
                $_SESSION['tb_dangnhap'] = $tb;
                header('location: index.php?pg=login_register');
                exit;
=======
=======



                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    header('location: index.php?pg=' . $page_here . '');
>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
                } else {
                    $tb = "Tài khoản không tồn tại!";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?pg=login_register');
<<<<<<< HEAD
                }
                //out
>>>>>>> parent of a51c1e6 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
=======
                    exit;
                }

                //out

>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
            }
            break;
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
                header('location: index.php');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> parent of a51c1e6 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
=======
                // Nếu có ảnh mới được chọn
>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
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
<<<<<<< HEAD
<<<<<<< HEAD
                $sp=["id" => $id, "ten" => $name, "hinh" => $img, "gia" => $price];
                $_SESSION['f_Product'][]=$sp;
                
=======
                $sp = ["id" => $id, "ten" => $name, "hinh" => $img, "gia" => $price];
                $_SESSION['f_Product'][] = $sp;

>>>>>>> 6879adc76e503088ad26f904a4fc20bb93381fa1
                // header('location: index.php?pg=wishlist');
=======
                $sp = ["id" => $id, "ten" => $name, "hinh" => $img, "gia" => $price];
                $_SESSION['f_Product'][] = $sp;
                header('location: index.php?pg=wishlist');
>>>>>>> parent of a51c1e6 (Merge branch 'main' of https://github.com/ToannNT/duan1_techpro)
            }
            break;
        case 'detailed-order':
            include_once "view/detailed-order.php";
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
