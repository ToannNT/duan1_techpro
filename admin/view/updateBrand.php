<?php
    extract($get_Brandlist_one);
    if($id_catalog == 1) {$type = "Điện thoại";} else if($id_catalog == 2) {$type =  "Máy tính";} else if($id_catalog == 3) {$type =  "Tablet";} else if($id_catalog == 4) {$type =  "Đồng hồ";}
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách Danh mục</li>
            <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới Danh mục</h3>
                <div class="tile-body">
                    <form method="POST" action="index.php?pg=fixBrand" class="row" style="align-items: flex-end;">
                        <div class="form-group col-md-3">
                            <label class="control-label">Mã thương hiệu </label>
                            <input class="form-control" name="stt" type="number" value="<?=$id?>" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên Thương Hiệu </label>
                            <input class="form-control" name="name" type="text" value="<?=$ten?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục thương hiệu</label>
                            <select class="form-control" name="idcatalog" id="exampleSelect1">
                                <option>-- Chọn danh mục --</option>
                                <option value="1">Điện thoại</option>
                                <option value="2">Laptop</option>
                                <option value="3">Tablet</option>
                                <option value="4">Đồng hồ</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-3">
                        </div> 
                        <div style="margin-left: 15px;">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <button class="btn btn-save" name="btnUpdate" type="submit">Cập nhật</button>
                            <!-- <input type="submit" class="btn btn-save" name="addCatagory" value="Lưu lại"> -->
                            <a class="btn btn-cancel" href="index.php">Hủy bỏ</a>
                        </div>
                    </form>
                </div>

            </div>
</main>
