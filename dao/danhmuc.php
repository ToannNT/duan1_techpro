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



function show_DM($dsdm_catalog, $dsdm_brand)
{
    $i = 1;
    $show_all = '';
    foreach ($dsdm_catalog as $item) {
        extract($item);
        $show_all .= '
            <li><a href="index.php?pg=product&idcatalog=' . $id . '">' . $ten_dm . '</a>';

        foreach ($dsdm_brand as $item) {
            extract($item);
            if ($id_catalog == $i) {
                $show_all .= '
                            <ul>
                                <li><a href="index.php?pg=product&idcatalog=' . $i . '&idbrand=' . $id . '">' . $ten . '</a></li></li>
                            </ul>
                        ';
            }
        }
        $show_all .= '</li>';
        $i++;
    }

    return $show_all;
}

function dsdm_brand()
{
    $sql = "SELECT * FROM brand ORDER BY id ASC";
    return pdo_query($sql);
}

function dsdm_catalog()
{
    $sql = "SELECT * FROM catalog ORDER BY id ASC";
    return pdo_query($sql);
}


// function dsdanhmuc()
// {
//     $sql = "SELECT c.id, c.ten_dm , b.id_catalog, b.ten FROM catalog c INNER JOIN brand b ON c.id = b.id_catalog";
//     return pdo_query($sql);
// }

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