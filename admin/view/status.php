<?php
  include_once "../../dao/pdo.php";
  include_once "../../dao/bannerslider.php";
  if(isset($_POST['id'])&&isset($_POST['status'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    update_status($status, $id);
  }else{
    echo '<script>
        alert("Xảy ra lỗi khi cập nhật trạng thái!");  
      </script>';
  }
  if(isset($_POST['id'])&&isset($_POST['status'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    update_status($status, $id);
  }
?>