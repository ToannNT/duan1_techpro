<?php
require_once 'pdo.php';
///banner
function db_banner(){
    $sql = "SELECT * FROM banner ORDER BY id DESC";
    return pdo_query($sql);
}
function db_slider(){
    $sql = "SELECT * FROM slider ORDER BY id DESC";
    return pdo_query($sql);
}
//tạo mới banner
function insert_banner($stt, $mota, $img){
    $sql = "INSERT INTO banner(stt, mota, img) VALUES(?,?,?)";
    pdo_execute($sql, $stt, $mota, $img);
}
//kết thúc tạo mới banner
// xoá banner
function del_banner($id){
    $sql = "DELETE FROM banner WHERE  id=?";
    pdo_execute($sql, $id);
}
// kết thúc xoá banner
///endbanner