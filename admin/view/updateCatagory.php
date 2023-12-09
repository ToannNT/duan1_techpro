<?php
    extract($get_Catalogone);
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
                    <form method="POST" action="index.php?pg=update" class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Mã Danh mục </label>
                            <input class="form-control" name="stt" type="number" value="<?=$stt?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên Danh mục</label>
                            <input class="form-control" name="name" type="text" value="<?=$ten_dm?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Mô tả</label>
                            <input class="form-control" name="mota" type="text" value="<?=$mota?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Set home</label>
                            <select class="form-control" name="sethome" id="exampleSelect1">
                                <option>-- Chọn thuộc tính --</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        </div>  
                        <div>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <button class="btn btn-save" name="btnUpdate" type="submit">Cập nhật</button>
                            <!-- <input type="submit" class="btn btn-save" name="addCatagory" value="Lưu lại"> -->
                            <a class="btn btn-cancel" href="index.php">Hủy bỏ</a>
                        </div>
                    </form>
                </div>

            </div>
</main>