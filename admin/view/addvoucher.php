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
                    <form method="POST" action="index.php?pg=addvoucher" class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên voucher</label>
                            <input class="form-control" name="ten" type="text" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Số tiền giảm</label>
                            <input class="form-control" name="tien" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Số lượng voucher</label>
                            <input class="form-control" name="soluong" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ngày hết hạn</label>
                            <input class="form-control" name="date" type="date">
                        </div>
                        <button style="margin-left: 15px;" class="btn btn-save" name="submit_voucher" type="submit">Thêm</button>
                        <!-- <input type="submit" class="btn btn-save" name="addCatagory" value="Lưu lại"> -->
                        <a class="btn btn-cancel" href="index.php">Hủy bỏ</a>
                    </form>
                </div>

            </div>
</main>


<!--
  MODAL CHỨC VỤ 
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Thêm mới nhà cung cấp</h5>
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Nhập tên chức vụ mới</label>
                        <input class="form-control" type="text" required>
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
-->



<!--
  MODAL DANH MỤC
-->
<div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Thêm mới danh mục </h5>
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Nhập tên danh mục mới</label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Danh mục hiện đang có</label>
                        <ul style="padding-left: 20px;">
                            <li>Bàn ăn</li>
                            <li>Bàn thông minh</li>
                            <li>Tủ</li>
                            <li>Ghế gỗ</li>
                            <li>Ghế sắt</li>
                            <li>Giường người lớn</li>
                            <li>Giường trẻ em</li>
                            <li>Bàn trang điểm</li>
                            <li>Giá đỡ</li>
                        </ul>
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
-->




<!--
  MODAL TÌNH TRẠNG
-->
<div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Thêm mới tình trạng</h5>
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Nhập tình trạng mới</label>
                        <input class="form-control" type="text" required>
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
-->