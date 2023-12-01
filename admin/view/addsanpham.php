<?
  $html_showdm = '';
  foreach ($dsdm_adm as $dm_adm) {
      extract($dm_adm);
      $html_showdm .= '<option value="' . $id . '">' . $ten_dm . '</option>';
  }
  
  $html_showbr = '';
  foreach ($dsbr_adm as $br_adm) {
      extract($br_adm);
      $html_showbr .= '<option value="' . $id . '">' . $ten . '</option>';
  }
?>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a style="color:#001C40;" href="index.php?pg=qlsanpham">Quản lý sản phẩm</a></li>
        <li class="breadcrumb-item active"><a href="#"></a>Tạo mới sản phẩm</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
          </div>
            <form action="index.php?pg=addsp" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="masp" class="control-label">Mã sản phẩm <span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="masp" class="form-control" name="masp" type="text" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="tensp" class="control-label">Tên sản phẩm <span style="color: red; font-weight: bold" >(*)</span></label>
                <input id="tensp" class="form-control" name="tensp" type="text">
              </div>
              <div class="form-group col-md-3">
                <label for="danhmucsp" class="control-label">Danh mục<span style="color: red; font-weight: bold" >(*)</span></label>
                <select class="form-control" name="danhmucsp" id="danhmucsp">
                  <option value="">--Chọn danh mục--</option>
                          <!-- 1111111 -->
                  <?=$html_showdm?>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="brandsp" class="control-label">Brand<span style="color: red; font-weight: bold" >(*)</span></label>
                <select class="form-control" name="brandsp" id="brandsp">
                  <option>-- Chọn hãng --</option>
                  <?=$html_showbr?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="giabansp" class="control-label">Giá bán<span style="color: red; font-weight: bold" >(*)</span></label>
                <input id="giabansp" class="form-control" name="giaban" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá giảm<span style="color: red; font-weight: bold" >(*)</span></label>
                <input class="form-control" name="giagiam" type="text">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3">
              </div>
              <div class="form-group col-md-3">
              <label class="control-label">Thuộc tính <span style="color: red; font-weight: bold" >(*)</span></label>
                <div class="col">
                  <label for=""><input type="checkbox" name="seo" value="1" id=""> Sale</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="moi" value="1" id=""> Mới</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="many" value="1" id=""> Xem nhiều</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="run" value="1" id=""> Bán chạy</label>
                </div>
              </div>
              <div class="form-group col-md-9">
                <label class="control-label">Ảnh sản phẩm<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div  >
                  <input type="file" id="uploadfile" name="imgup" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img width="70" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
              </div>
              <p class="tile-title col-md-12">Ảnh chi tiết sản phẩm</p><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 1</p>
                  <input type="file" name="hinh1"/>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 2</p>
                  <input type="file" name="hinh2"/>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 3</p>
                  <input type="file" name="hinh3"/>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 4</p>
                  <input type="file" name="hinh4"/>
                </div><br>
              <div class="form-group col-md-12">
                <br>
                <label class="control-label">Nhập mô tả</label>
                <input class="form-control" name="mota" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập chi tiết</label>
                <textarea class="form-control" name="chitiet" id="chitiet"></textarea>
                <script>CKEDITOR.replace('chitiet');</script>
              </div>
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="addsp" value="Lưu lại">
                <a class="btn btn-cancel" href="qlsanpham.html">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </main>


  <!--
  MODAL CHỨC VỤ 
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
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
  <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
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
              <label class="control-label">Danh mục sản phẩm hiện đang có</label>
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
  <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
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
          <div class="btn">
            <button class="btn btn-save" type="button">Lưu lại</button>
            <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          </div>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
js
-->
<script>
  var form = document.getElementsByTagName("form")[0];
  var masp = document.getElementById("masp");
  console.log(masp);
  var tensp = document.getElementById("tensp");
  var danhmucsp = document.getElementById("danhmucsp");
  var brandsp = document.getElementById("brandsp");
  var giabansp = document.getElementById("giabansp");
  form.addEventListener("submit", function(event){
    if(masp.value == "" || masp.value.length>10){
      alert("Mã sản phẩm không được để trống tối đa 10 ký tự!");
      event.preventDefault();// không cho submit
      masp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(tensp.value == ""){
      alert("Tên sản phẩm không được để trống!");
      event.preventDefault();// không cho submit
      tensp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(danhmucsp.value == "default"){
      alert("Danh mục không được để trống!");
      event.preventDefault();// không cho submit
      danhmucsp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(brandsp.value == "default"){
      alert("Brand không được để trống!");
      event.preventDefault();// không cho submit
      brandsp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(giabansp.value.trim() === "" || isNaN(giabansp.value)){
      alert("Giá bán không được để trống và phải là số!");
      event.preventDefault();// không cho submit
      giabansp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    return true;
  });
</script>