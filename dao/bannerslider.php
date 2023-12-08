<?php
require_once 'pdo.php';
///banner
function db_banner($limit){
    $sql = "SELECT * FROM banner ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}
function db_slider($limit){
    $sql = "SELECT * FROM slider ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}
//tạo mới banner
function insert_banner($stt, $mota, $img){
    $sql = "INSERT INTO banner(stt, mota, img) VALUES(?,?,?)";
    pdo_execute($sql, $stt, $mota, $img);
}
//kết thúc tạo mới banner
//tạo mới slider
function insert_slider($stt, $mota, $img){
    $sql = "INSERT INTO slider(stt, mota, img) VALUES(?,?,?)";
    pdo_execute($sql, $stt, $mota, $img);
}
//kết thúc tạo mới slider
// xoá banner
function del_banner($id){
    $sql = "DELETE FROM banner WHERE  id=?";
    pdo_execute($sql, $id);
}
function del_slider($id){
    $sql = "DELETE FROM slider WHERE  id=?";
    pdo_execute($sql, $id);
}
// updatebanner
function update_banner($stt, $mota, $img, $idbn){
    $sql = "UPDATE banner SET stt=?, mota=?, img=? WHERE id=?";
    pdo_execute($sql, $stt, $mota, $img, $idbn);
}
function showup_banner($idbn){
    $sql = "SELECT * FROM banner WHERE id=?";
    return pdo_query_one($sql, $idbn);
}
//update slider
function update_slider($stt, $mota, $img, $idsl){
    $sql = "UPDATE slider SET stt=?, mota=?, img=? WHERE id=?";
    pdo_execute($sql, $stt, $mota, $img, $idsl);
}
function showup_slider($idsl){
    $sql = "SELECT * FROM slider WHERE id=?";
    return pdo_query_one($sql, $idsl);
}


function update_status($trangthai, $id){
    $sql = "UPDATE banner SET trangthai=? WHERE id=?";
    pdo_execute($sql, $trangthai, $id);
}
// kết thúc xoá banner
///endbanner