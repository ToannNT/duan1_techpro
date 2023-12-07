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
require_once "../dao/bannerslider.php";
require_once "../dao/donhang.php";
require_once "../dao/blog.php";


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
            // THƯƠNG HIỆU
        case 'qlthuonghieu':
            $get_Brandlist = get_Brand();
            include_once "view/qlthuonghieu.php";
            break;

        case 'addbrand':
            if (isset($_POST['addTrademark'])) {
                // echo "Thêm thành công";
                $stt = $_POST['stt'];
                $name = $_POST['name'];
                $idcatalog = $_POST['idcatalog'];
                // $mota = $_POST['mota'];
                trademark_add($stt, $name, $idcatalog);
                $get_Brandlist = get_Brand();
                header('location: index.php?pg=qlthuonghieu');
            }
            include_once "view/addbrand.php";
            break;
        case 'delbrand':
            if (isset($_GET['id'])) {
                // echo 'OK';
                $id = $_GET['id'];
                $tb = delete_trademark($id);
            }
            $get_Brandlist = get_Brand();
            include_once "view/qlthuonghieu.php";
            break;

        case 'updateBrand':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $get_Brandlist_one = get_Brandlist_one($id);
            }
            include_once "view/updateBrand.php";
            break;

        case 'fixBrand':
            if (isset($_POST['btnUpdate'])) {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    // $stt = $_POST['stt'];
                    $name = $_POST['name'];
                    // $mota = $_POST['mota'];
                    $idcatalog = $_POST['idcatalog'];
                    updateTrademark($id, $name, $idcatalog);
                    header('location: index.php?pg=qlthuonghieu');
                }
            }
            break;
        case 'qlsanpham':
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            $showspadm = get_tablesp(20);
            require_once "view/qlsanpham.php";
            break;
        case 'addsanpham':
            $dsdm_adm = dsdm_catalog();
            $dsbr_adm = dsdm_brand();
            require_once "view/addsanpham.php";
            break;
        case 'delsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $showup = get_Sp_Detail($id);
                $target_file = "../view/layout/images/product/" . $showup['hinhsp'];
                unlink($target_file);
                delsp($id);
                $showspadm = get_tablesp(20);
                require_once "view/qlsanpham.php";
            }
            break;
        case 'updatepro':
            if (isset($_POST['btnupdatepro'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giaban = $_POST['giaban'];
                $giagiam = $_POST['giagiam'];
                $tendm = $_POST['danhmucsp'];
                $tenbr = $_POST['brandsp'];
                if (isset($_FILES['imgup']['name'])) {
                    $hinhsp = $_FILES['imgup']['name'];
                }
                if ($hinhsp == "") {
                    $hinhsp = $_POST['imgold'];
                }
                $hinh1 = $_FILES['hinh1']['name'];
                if ($hinh1 == "") {
                    $hinh1 = $_POST['imgold1'];
                }

                $hinh2 = $_FILES['hinh2']['name'];
                if ($hinh2 == "") {
                    $hinh2 = $_POST['imgold2'];
                }

                $hinh3 = $_FILES['hinh3']['name'];
                if ($hinh3 == "") {
                    $hinh3 = $_POST['imgold3'];
                }

                $hinh4 = $_FILES['hinh4']['name'];
                if ($hinh4 == "") {
                    $hinh4 = $_POST['imgold4'];
                }
                $chitiet = $_POST['chitiet'];
                $mota = $_POST['mota'];
                if (isset($_POST['seo'])) {
                    $seo = $_POST['seo'];
                    if ($seo) $seo = 1;
                    else $seo = 0;
                } else {
                    $seo = 0;
                }
                if (isset($_POST['moi'])) {
                    $moi = $_POST['moi'];
                    if ($moi) $moi = 1;
                    else $moi = 0;
                } else {
                    $moi = 0;
                }
                if (isset($_POST['many'])) {
                    $many = $_POST['many'];
                    if ($many) $many = 1;
                    else $many = 0;
                } else {
                    $many = 0;
                }
                if (isset($_POST['run'])) {
                    $run = $_POST['run'];
                    if ($run) $run = 1;
                    else $run = 0;
                } else {
                    $run = 0;
                }
                $id = $_POST['id'];
                $target_file = "../view/layout/images/product/" . $hinhsp;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                updatesp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run, $id);
            }
            $showspadm = get_tablesp(20);
            require_once "view/qlsanpham.php";
            break;
        case 'updatesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $showup = get_Sp_Detail($id);
            }
            $dsdm_adm = dsdm_catalog();
            $dsbr_adm = dsdm_brand();
            $showspadm = get_tablesp(20);
            require_once "view/updatesp.php";
            break;
        case 'addsp':
            // error_reporting(E_ALL);
            // ini_set('display_errors', '1');
            if (isset($_POST['addsp'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giaban = $_POST['giaban'];
                $giagiam = $_POST['giagiam'];
                $tendm = $_POST['danhmucsp'];
                $tenbr = $_POST['brandsp'];
                if (isset($_FILES['imgup']['name']) && ($_FILES['imgup']['name'] !== "")) {
                    $hinhsp = $_FILES['imgup']['name'];
                } else {
                    $hinhsp = "noimg.jpeg";
                }
                $hinh1 = $_FILES['hinh1']['name'];
                $hinh2 = $_FILES['hinh2']['name'];
                $hinh3 = $_FILES['hinh3']['name'];
                $hinh4 = $_FILES['hinh4']['name'];
                $chitiet = $_POST['chitiet']; //chitiet
                $mota = $_POST['mota']; //chitiet
                if (isset($_POST['seo'])) {
                    $seo = $_POST['seo'];
                    if ($seo) $seo = 1;
                    else $seo = 0;
                } else {
                    $seo = 0;
                }
                if (isset($_POST['moi'])) {
                    $moi = $_POST['moi'];
                    if ($moi) $moi = 1;
                    else $moi = 0;
                } else {
                    $moi = 0;
                }
                if (isset($_POST['many'])) {
                    $many = $_POST['many'];
                    if ($many) $many = 1;
                    else $many = 0;
                } else {
                    $many = 0;
                }
                if (isset($_POST['run'])) {
                    $run = $_POST['run'];
                    if ($run) $run = 1;
                    else $run = 0;
                } else {
                    $run = 0;
                }
                if ($masp == "") {
                    $alert = '<p style="color:red;">Vui lòng nhập mã sản phẩm</p>';
                    require_once "view/addsp.php";
                }
                insertsp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run);
                $target_file = "../view/layout/images/product/" . $hinhsp;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                $target_file1 = "../view/layout/images/product/" . $hinh1;
                move_uploaded_file($_FILES['hinh1']['tmp_name'], $target_file1);
                $target_file2 = "../view/layout/images/product/" . $hinh2;
                move_uploaded_file($_FILES['hinh2']['tmp_name'], $target_file2);
                $target_file3 = "../view/layout/images/product/" . $hinh3;
                move_uploaded_file($_FILES['hinh3']['tmp_name'], $target_file3);
                $target_file4 = "../view/layout/images/product/" . $hinh4;
                move_uploaded_file($_FILES['hinh4']['tmp_name'], $target_file4);

                //đưa về qlsanpham

                $showspadm = get_tablesp(20);
                require_once "view/qlsanpham.php";
            } else {
                require_once "view/addsp.php";
            }
            break;
        case 'qlbanner':
            // error_reporting(E_ALL);
            // ini_set('display_errors', '1');
            $get_banner = db_banner(10);
            $get_slider = db_slider(10);
            require_once "view/qlbanner.php";
            break;
        case 'addbanner':
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            if (isset($_POST['btnbn']) && ($_POST['btnbn'] != "")) {
                $stt = $_POST['stt'];
                $mota = $_POST['mota'];
                $img = $_FILES['imgup']['name'];
                $target_file = "../view/layout/images/banner/" . $img;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                insert_banner($stt, $mota, $img);
                header('location: index.php?pg=qlbanner');
            }
            if (isset($_POST['btnsd']) && ($_POST['btnsd'] != "")) {
                $stt = $_POST['sttsd'];
                $mota = $_POST['motasd'];
                $img = $_FILES['imgupsd']['name'];
                $target_file = "../view/layout/asset/css/images/slider/" . $img;
                move_uploaded_file($_FILES['imgupsd']['tmp_name'], $target_file);
                insert_slider($stt, $mota, $img);
                header('location: index.php?pg=qlbanner');
            }
            require_once "view/addbanner.php";
            break;
        case 'updatebanner':
            if (isset($_POST['updatebn'])) {
                $stt = $_POST['stt'];
                $mota = $_POST['mota'];
                if (isset($_FILES['imgup']['name']) && ($_FILES['imgup']['name'] !== "")) {
                    $img = $_FILES['imgup']['name'];
                } else {
                    $img = "noimg.jpeg";
                }
                if ($img == "") {
                    $img = $_POST['imgold'];
                }
                $idbn = $_POST['idbn'];
                $target_file = "../view/layout/images/banner/" . $img;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                update_banner($stt, $mota, $img, $idbn);
                // hàm show banner id
                $showup_banner = showup_banner($idbn);
                header('location: index.php?pg=qlbanner');
            }
            require_once "view/updatebn.php";
            break;
        case 'updatebnsl':
            if (isset($_GET['idbn']) && ($_GET['idbn'] > 0)) {
                $idbn = $_GET['idbn'];
                $showup_banner = showup_banner($idbn);
            }
            $get_banner = db_banner(10);
            require_once "view/updatebnsl.php";
            break;
        case 'delbanner':
            if (isset($_GET['idbn']) && ($_GET['idbn'] > 0)) {
                $id = $_GET['idbn'];
                del_banner($id);
                header('location: index.php?pg=qlbanner');
            }
            break;

        case 'updateslider':
            if (isset($_POST['updatesl'])) {
                $sttsd = $_POST['sttsd'];
                $motasd = $_POST['motasd'];
                if (isset($_FILES['imgupsd']['name']) && ($_FILES['imgupsd']['name'] !== "")) {
                    $imgsd = $_FILES['imgupsd']['name'];
                } else {
                    $imgsd = "noimg.jpeg";
                }
                if ($imgsd == "") {
                    $imgsd = $_POST['imgold'];
                }
                $idsl = $_POST['idsl'];
                $target_file = "../view/layout/asset/css/images/slider/" . $img;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                update_slider($stt, $mota, $img, $idsl);
                // hàm show slider id
                $showup_slider = showup_slider($idsl);
                header('location: index.php?pg=qlbanner');
            }
            require_once "view/updatebn.php";
            break;
        case 'delslider':
            if (isset($_GET['idsd']) && ($_GET['idsd'] > 0)) {
                $id = $_GET['idsd'];
                del_slider($id);
                header('location: index.php?pg=qlbanner');
            }
        case 'qldonhang':
            $ds_order = getds_orderAll();
            require_once "view/qldonhang.php";
            break;
        case 'addblog':
            if (isset($_POST['btnblog'])) {
                $mablog = $_POST['mablog'];
                $tieudeblog = $_POST['tieudeblog'];
                $chitietblog = $_POST['chitietblog'];
                if (isset($_FILES['imgblog']['name']) && ($_FILES['imgblog']['name'] !== "")) {
                    $imgblog = $_FILES['imgblog']['name'];
                } else {
                    $imgblog = "noimg.jpeg";
                }
                $target_file = "../view/layout/images/blog/" . $imgblog;
                move_uploaded_file($_FILES['imgblog']['tmp_name'], $target_file);
                insert_blog($mablog, $tieudeblog, $chitietblog, $imgblog);
                header('location: index.php?pg=qlblog');
            }
            require_once "view/addblog.php";
            break;
        case 'qlblog':
            $get_blog = select_blog(10);
            require_once "view/qlblog.php";
            break;
        case 'updateblog':
            if (isset($_GET['id_blog']) && ($_GET['id_blog'] > 0)) {
                $idblog = $_GET['id_blog'];
                $showup_blog = showup_blog($idblog);
            }
            require_once "view/updateblog.php";
            break;
        case 'updateblogxl':
            if (isset($_POST['updateblogxl'])) {
                $mablog = $_POST['mablog'];
                $tieudeblog = $_POST['tieudeblog'];
                $chitietblog = $_POST['chitietblog'];
                if (isset($_FILES['imgblog']['name']) && ($_FILES['imgblog']['name'] !== "")) {
                    $imgblog = $_FILES['imgblog']['name'];
                }
                if ($imgblog == "") {
                    $imgblog = $_POST['imgold'];
                }
                $idblog = $_POST['idblog'];
                $target_file = "../view/layout/images/blog/" . $imgblog;
                move_uploaded_file($_FILES['imgblog']['tmp_name'], $target_file);
                update_blog($mablog, $tieudeblog, $chitietblog, $imgblog, $idblog);
                header('location: index.php?pg=qlblog');
            }
            require_once "view/updateblog.php";
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
