<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?pg=addbrand" title="Thêm"><i
                                class="fas fa-plus"></i>
                                Tạo thương hiệu mới</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <?php
                        if (isset($tb))
                            echo '<h4 style= "color: red;">' . $tb . '</h4>';
                            unset($tb);
                        ?>
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên thương hiệu</th>
                                <th>Mô tả</th>
                                <!-- <th>Sethome</th> -->
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($get_Brandlist as $item) {
                                extract($item);
                                // print_r($item);
                                $type='';
                                if($id_catalog == 1) {$type = "Điện thoại";} else if($id_catalog == 2) {$type =  "Máy tính";} else if($id_catalog == 3) {$type =  "Tablet";} else if($id_catalog == 4) {$type =  "Đồng hồ";}
                                echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $ten . '</td>
                                            <td>' . $type . '</td>
                                            <td><a href="index.php?pg=delbrand&id=' . $id . '"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                    onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                                </button>
                                                <a href="index.php?pg=updateBrand&id=' . $id . '"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                            </td>
                                        </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!--
MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Stt </label>
                        <input class="form-control" type="number" value="71309005">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Tên danh mục</label>
                        <input class="form-control" type="text" required value="Bàn ăn gỗ Theresa">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Mô tả</label>
                        <input class="form-control" type="text" value="5.600.000">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Sethome</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>0</option>
                            <option>1</option>
                        </select>
                    </div>
                </div>
                <BR>
                <button class="btn btn-save" type="button">Lưu lại</button>
                <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                <BR>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--
MODAL