<?php
// hiển thị tương tác với bảng blog
require_once 'pdo.php';
function get_tintucs($madm = 0, $start = 0, $limit = 0)
{
    $sql = "SELECT * FROM blog p INNER JOIN catalog c ON p.madm = c.id";
    if ($madm != 0) {
        $sql .= " WHERE p.madm = " . $madm;
    }
    if ($limit != 0) {
        $sql .= " LIMIT " . $start . "," . $limit;
    }
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchALL(); // lấy all dữ liệu
}
// tương tác với trang CTSP
function get_tintuc($id)
{
    $sql = "SELECT * FROM blog p INNER JOIN catalog c ON p.madm = c.id WHERE p.id_blog=" . $id;
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(); //chỉ lấy 1 dữ liệu
}
// phân trang 
function count_tintuc()
{
    $sql = "SELECT count(*) AS soluong FROM blog";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(); //chỉ lấy 1 dữ liệu
}
// tương tác với bảng catalog và hiển thị danh mục sp
function get_catogories($iddm)
{
    $sql = "SELECT * FROM catalog ";
    if ($iddm > 0) {
        $sql .= "AND iddm=" . $iddm;
    }
    $sql .= " ORDER BY stt DESC  ";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchALL(); // lấy all dữ liệu
}
// tương tác với bảng newspapers
function get_newspapers()
{
    $sql = "SELECT * FROM blog ORDER BY ngay DESC LIMIT 3";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchALL(); // lấy all dữ liệu
}
// tương tác với black friday 
function get_blackfriday()
{
    $sql = "SELECT * FROM product WHERE dac_biet = 1 ";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchALL(); // lấy all dữ liệu

}
// lấy 3 blog ngoài trang index
function get_tintucindex($limit)
{
    $sql = "SELECT * FROM blog LIMIT " . $limit;
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchALL(); // lấy all dữ liệu
}
function select_blog($limit)
{
    $sql = "SELECT * FROM blog ORDER BY id_blog DESC LIMIT " . $limit;
    return pdo_query($sql);
}
function insert_blog($mablog, $tieudeblog, $chitietblog, $imgblog)
{
    $sql = "INSERT INTO blog(madm, tieude, noidung, hinh) VALUES (?,?,?,?)";
    pdo_execute($sql, $mablog, $tieudeblog, $chitietblog, $imgblog);
}
function showup_blog($idblog)
{
    $sql = "SELECT * FROM blog WHERE id_blog=?";
    return pdo_query_one($sql, $idblog);
}
function update_blog($mablog, $tieudeblog, $chitietblog, $imgblog, $idblog)
{
    $sql = "UPDATE blog SET madm=?, tieude=?, noidung=?, hinh=? WHERE id_blog=?";
    pdo_execute($sql, $mablog, $tieudeblog, $chitietblog, $imgblog, $idblog);
}
