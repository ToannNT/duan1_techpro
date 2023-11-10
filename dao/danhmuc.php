<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_loai là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function loai_insert($ten_loai){
//     $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
//     pdo_execute($sql, $ten_loai);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function loai_update($ma_loai, $ten_loai){
//     $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
//     pdo_execute($sql, $ten_loai, $ma_loai);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function loai_delete($ma_loai){
//     $sql = "DELETE FROM loai WHERE ma_loai=?";
//     if(is_array($ma_loai)){
//         foreach ($ma_loai as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_loai);
//     }
// }


/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */


// function show_danhmuc($dsdanhmuc)
// {
//     $show_dsdanhmuc_all = '';

//     foreach ($dsdanhmuc as $item) {
//         extract($item);

//         // $link = 'index.php?pg=productdetail&idpro=' . $id;
//         $show_dsdanhmuc_all .= '
//             <li><a href="shop-left-sidebar.html">ĐIỆN THOẠI</a>
//             <ul>
//                 <li><a href="shop-left-sidebar.html">iphone</a></li>
//                 <li><a href="shop-right-sidebar.html">SamSung</a>
//                 </li>
//                 <li><a href="shop-list.html">Xiaomi</a></li>
//                 <li><a href="shop-list-left-sidebar.html">Shop List Left
//                         Sidebar</a></li>
//                 <li><a href="shop-list-right-sidebar.html">Shop List Right
//                         Sidebar</a></li>
//             </ul>
//             </li>
//          ';
//     }
//     return $show_dsdanhmuc_all;
// }



function danhmuc_all()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id ASC";
    return pdo_query($sql);
}

function get_follow_page($id)
{
    $sql = "SELECT ten_loai FROM danhmuc WHERE id=?";
    return pdo_query_value($sql, $id);
}



// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_loai là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_select_by_id($ma_loai)
// {
//     $sql = "SELECT * FROM loai WHERE ma_loai=?";
//     return pdo_query_one($sql, $ma_loai);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_loai là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_exist($ma_loai)
// {
//     $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
//     return pdo_query_value($sql, $ma_loai) > 0;
// }