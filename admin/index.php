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
            $showspadm=get_tablesp(20);
            require_once "view/qlsanpham.php";
            break;
        case 'addsanpham':
            $dsdm_adm = dsdm_catalog();
            $dsbr_adm = dsdm_brand();
            require_once "view/addsanpham.php";
            break;
        case 'delsp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                delsp($id);
                $showspadm=get_tablesp(20);
                require_once "view/qlsanpham.php";
            }
            break;
        case 'updatepro':
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            if(isset($_POST['updatepro'])){
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giaban = $_POST['giaban'];
                $giagiam = $_POST['giagiam'];
                $tendm = $_POST['danhmucsp'];
                $tenbr = $_POST['brandsp'];
                if(isset($_FILES['imgup']['name'])&&($_FILES['imgup']['name']!=="")){
                    $hinhsp = $_FILES['imgup']['name'];
                }else{ 
                    $hinhsp = "noimg.jpeg";
                }
                $hinh1 = $_FILES['hinh1']['name'];
                $hinh2 = $_FILES['hinh2']['name'];
                $hinh3 = $_FILES['hinh3']['name'];
                $hinh4 = $_FILES['hinh4']['name'];
                $chitiet = $_POST['chitiet'];
                $mota = $_POST['mota'];
                if(isset($_POST['seo'])){$seo = $_POST['seo'];if($seo) $seo=1; else $seo=0;}else{$seo=0;}
                if(isset($_POST['moi'])){$moi = $_POST['moi'];if($moi) $moi=1; else $moi=0;}else{$moi=0;}
                if(isset($_POST['many'])){$many = $_POST['many'];if($many) $many=1; else $many=0;}else{$many=0;}
                if(isset($_POST['run'])){$run = $_POST['run'];if($run) $run=1; else $run=0;}else{$run=0;}
                $id = $_POST['id'];
                if($hinhsp ==""){
                    $hinhsp = $_POST['imgold'];
                }
                if(empty($masp)||strlen($masp)>10){
                    $alert= '<p style="color:red;">Vui lòng nhập mã sản phẩm tối đa 10 ký tự</p>';
                }
                updatesp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run, $id);
                $target_file ="../view/layout/images/product/". $hinhsp;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
            }
            $showspadm=get_tablesp(20);
            require_once "view/qlsanpham.php";
            break;
        case 'updatesp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $showup=get_Sp_Detail($id);
            }
            $dsdm_adm = dsdm_catalog();
            $dsbr_adm = dsdm_brand();
            $showspadm=get_tablesp(20);
            require_once "view/updatesp.php";
            break;
        case 'addsp':
            // error_reporting(E_ALL);
            // ini_set('display_errors', '1');
            if(isset($_POST['addsp'])){
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giaban = $_POST['giaban'];
                $giagiam = $_POST['giagiam'];
                $tendm = $_POST['danhmucsp'];
                $tenbr = $_POST['brandsp'];
                if(isset($_FILES['imgup']['name'])&&($_FILES['imgup']['name']!=="")){
                    $hinhsp = $_FILES['imgup']['name'];
                }else{ 
                    $hinhsp = "noimg.jpeg";
                }
                $hinh1 = $_FILES['hinh1']['name'];
                $hinh2 = $_FILES['hinh2']['name'];
                $hinh3 = $_FILES['hinh3']['name'];
                $hinh4 = $_FILES['hinh4']['name'];
                $chitiet = $_POST['chitiet'];//chitiet
                $mota = $_POST['mota'];//chitiet
                if(isset($_POST['seo'])){$seo = $_POST['seo'];if($seo) $seo=1; else $seo=0;}else{$seo=0;}
                if(isset($_POST['moi'])){$moi = $_POST['moi'];if($moi) $moi=1; else $moi=0;}else{$moi=0;}
                if(isset($_POST['many'])){$many = $_POST['many'];if($many) $many=1; else $many=0;}else{$many=0;}
                if(isset($_POST['run'])){$run = $_POST['run'];if($run) $run=1; else $run=0;}else{$run=0;}
                if($masp==""){
                    $alert= '<p style="color:red;">Vui lòng nhập mã sản phẩm</p>';
                    require_once "view/addsp.php";
                }
                insertsp($masp, $tensp, $giaban, $giagiam, $tendm, $tenbr, $hinhsp, $hinh1, $hinh2, $hinh3, $hinh4, $chitiet, $mota, $seo, $moi, $many, $run);
                $target_file ="../view/layout/images/product/". $hinhsp;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                
                //đưa về qlsanpham
                $showspadm=get_tablesp(20);
                    require_once "view/qlsanpham.php";
                }else{
                    require_once "view/addsp.php";
                }
            break;
        case 'qlbanner':
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            $get_banner = db_banner();
            $get_slider = db_slider();
            require_once "view/qlbanner.php";
            break;
        case 'addbanner':
            if(isset($_POST['addbanner'])){
                $stt = $_POST['stt'];
                $mota = $_POST['mota'];
                $img = $_FILES['imgup']['name'];
                $target_file ="../view/layout/images/banner/". $img;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                insert_banner($stt, $mota, $img);
                header('location: index.php?pg=qlbanner');
            }
            require_once "view/addbanner.php";
            break;
        case 'updatebanner':
            if(isset($_POST['updatebn'])){
                $stt = $_POST['stt'];
                $mota = $_POST['mota'];
                $img = $_FILES['imgup']['name'];
                $idbn = $_POST['idbn'];
                $target_file ="../view/layout/images/banner/". $img;
                move_uploaded_file($_FILES['imgup']['tmp_name'], $target_file);
                update_banner($stt, $mota, $img, $idbn);
                $get_banner = db_banner();
                header('location: index.php?pg=qlbanner');
            }
            require_once "view/updatebn.php";
            break;
        case 'updatebnsl':
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            if(isset($_GET['idbn'])&&($_GET['idbn']>0)){
                $idbn=$_GET['idbn'];
                $showbanner=get_banner($id);
            }
            $get_banner = db_banner();
            require_once "view/updatebnsl.php";
            break;
        case 'delbanner':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                del_banner($id);
                header('location: index.php?pg=qlbanner');
            }
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
