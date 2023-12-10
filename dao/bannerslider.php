<?php
require_once 'pdo.php';
///banner
function db_banner($limit){
    $sql = "SELECT * FROM banner ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}
function get_inbn() {
    $sql = "SELECT * FROM banner ORDER BY stt ASC";
    return pdo_query($sql);
}
function db_slider($limit){
    $sql = "SELECT * FROM slider ORDER BY id DESC LIMIT " . $limit;
    return pdo_query($sql);
}
//tạo mới banner
function insert_banner($stt, $namepro, $img){
    $sql = "INSERT INTO banner(stt,id_product,img) VALUES(?,?,?)";
    pdo_execute($sql, $stt, $namepro, $img);
}
//kết thúc tạo mới banner
//tạo mới slider
function insert_slider($stt, $idpro, $img){
    $sql = "INSERT INTO slider(stt, id_product, img) VALUES(?,?,?)";
    pdo_execute($sql, $stt, $idpro, $img);
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
function update_banner($stt, $namepro, $img, $idbn){
    $sql = "UPDATE banner SET stt=?, id_product=?, img=? WHERE id=?";
    pdo_execute($sql, $stt, $namepro, $img, $idbn);
}
function showup_banner($idbn){
    $sql = "SELECT * FROM banner WHERE id=?";
    return pdo_query_one($sql, $idbn);
}
//update slider
function update_slider($sttsd, $nameprosl, $imgsd, $idsd){
    $sql = "UPDATE slider SET stt=?, id_product=?, img=? WHERE id=?";
    pdo_execute($sql, $sttsd, $nameprosl, $imgsd, $idsd);
}
function showup_slider($idsd){
    $sql = "SELECT * FROM slider WHERE id=?";
    return pdo_query_one($sql, $idsd);
}


function update_status($trangthai, $id){
    $sql = "UPDATE banner SET trangthai=? WHERE id=?";
    pdo_execute($sql, $trangthai, $id);
}
function update_status2($trangthai, $id){
    $sql = "UPDATE slider SET trangthai=? WHERE id=?";
    pdo_execute($sql, $trangthai, $id);
}
// kết thúc xoá banner
///endbanner
function ds_product(){
    $sql = "SELECT * FROM product ORDER BY id ASC";
    return pdo_query($sql);
}