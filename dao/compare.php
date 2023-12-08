<?php
require_once 'pdo.php';
function get_spss($id)
{
    $sql = "SELECT * FROM product WHERE id= ?";

    return pdo_query($sql,$id);
}




?>

