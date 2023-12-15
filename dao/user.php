<?php
require_once 'pdo.php';


function user_insert($hoten, $username, $email, $sdt, $password)
{
    $sql = "INSERT INTO user(hoten,username,email,sdt,password) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $hoten, $username, $email, $sdt, $password);
}

//lấy về id mới nhất sau khi insert
function user_insert_id($username, $password, $hoten, $diachi, $email, $dienthoai)
{
    $sql = "INSERT INTO user (username,password,hoten,diachi,email,sdt) VALUES (?,?,?,?,?,?)";
    return  pdo_execute_id($sql, $username, $password, $hoten, $diachi, $email, $dienthoai);
}

function checkuser($username, $password)
{
    $sql = "SELECT * FROM user WHERE username=? AND password=?";
    return  pdo_query_one($sql, $username, $password);
    // if (is_array($kq) && (count($kq))) {
    //     return $kq["id"];
    // } else {
    //     return 0;
    // }
}

function checkuser_bill($sdt, $email)
{
    $sql = "SELECT * FROM user WHERE sdt=? AND email=?";
    return  pdo_query_one($sql, $sdt, $email);
    // if (is_array($kq) && (count($kq))) {
    //     return $kq["id"];
    // } else {
    //     return 0;
    // }
}

function update_user($hoten, $username, $password, $email, $gioitinh, $diachi, $sdt, $hinh, $role, $id)
{
    // Kiểm tra xem $hinh có giá trị không
    if ($hinh != "") {
        $sql = "UPDATE user SET hoten=?, username=?, password=?, email=?, gioitinh=?, diachi=?, sdt=?, hinh=?, role=? WHERE id=?";
        pdo_execute($sql, $hoten, $username, $password, $email, $gioitinh, $diachi, $sdt, $hinh, $role, $id);
    } else {
        // Nếu $hinh là giá trị trống, không cập nhật cột hinh
        $sql = "UPDATE user SET hoten=?, username=?, password=?, email=?, gioitinh=?, diachi=?, sdt=?, role=? WHERE id=?";
        pdo_execute($sql, $hoten, $username, $password, $email, $gioitinh, $diachi, $sdt, $role, $id);
    }
}


//update user khi thay đổi trong checkout
function update_user_checkout($hoten, $email, $diachi, $sdt, $id)
{

    $sql = "UPDATE user SET hoten=?,email=?,diachi=?,sdt=? WHERE id=?";
    pdo_execute($sql, $hoten, $email, $diachi, $sdt, $id);
}


function get_user($id)
{
    $sql = "SELECT * FROM user WHERE id=?";
    return  pdo_query_one($sql, $id);
}
function get_useradm(){
    $sql = "SELECT * FROM user ORDER BY id ";
    return  pdo_query_one($sql);
}

function  update_pass_user($newpassword, $id)
{
    $sql = "UPDATE user SET password=? WHERE id=?";
    pdo_execute($sql, $newpassword, $id);
}

function  update_hoivien_lv1($id)
{
    $sql = "UPDATE user SET hoivien = 1 WHERE id = ?";
    pdo_execute($sql, $id);
}

function  update_hoivien_lv2($id)
{
    $sql = "UPDATE user SET hoivien = 2 WHERE id = ?";
    pdo_execute($sql, $id);
}

function  update_hoivien_lv3($id)
{
    $sql = "UPDATE user SET hoivien = 2 WHERE id = ?";
    pdo_execute($sql, $id);
}


function sum_tongtien($id)
{
    $sql = "SELECT SUM(tong) FROM bill WHERE id_user = $id";
    return pdo_query_value($sql);
}



// img của account nhaaa
// function getLatestImageFromUser($id) {
//     // Giả sử bạn có một cột ID để xác định thứ tự
//     $sql = "SELECT hinh FROM user WHERE id = ? ORDER BY ngay_uploaded DESC LIMIT 1";

//     // Giả sử bạn đang sử dụng PDO, hãy thay thế pdo_query_one bằng hàm tương ứng của bạn
//     $result = pdo_query_one($sql, [$id]);

//     if ($result) {
//         return $result['hinh'];
//     }

//     return ""; // Return an empty string if no image is found
// }
function getLatestImageFromUser($id)
{


    // Truy vấn SQL để lấy thông tin ảnh gần nhất từ bảng user
    $sql = "SELECT image_path FROM user_images WHERE user_id = :user_id ORDER BY upload_date DESC LIMIT 1";
}




// function userinsert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro)
// {
//     $sql = "INSERT INTO user(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
//     pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }
function user_select_by_username($username){
    $sql = "SELECT * FROM user WHERE username=?";
    return pdo_query_one($sql, $username);
}