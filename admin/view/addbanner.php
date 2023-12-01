<?php
  $html_showdmadm = showdm_adm($dsdm_adm, $id_danhmuc);
  $html_showbradm = showbr_adm($dsbr_adm, $id_brand);
?>

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a style="color:#001C40;" href="index.php?pg=qlsanpham">Quản lý banner</a></li>
        <li class="breadcrumb-item active"><a href="#"></a>Tạo mới banner</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới banner/home</h3>
          <span style="color: red; font-wieght:bold;" >Stt: 1,2(370x180px) / Stt: 3,4,5(360x180px) / stt: 6,7(1140x180px)</span>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=addbanner" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="stt" class="control-label">STT<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="stt" class="form-control" name="stt" type="text" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="mota" class="control-label">Nhập mô tả</label>
                <input class="form-control" name="mota" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh banner<span style="color: red; font-weight: bold" >(*)</span> </label>
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
              
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="addbanner" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới slide/home</h3>
          <span style="color: red; font-wieght:bold;"></span>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=addsp" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="masp" class="control-label">STT<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="masp" class="form-control" name="masp" type="text" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label class="control-label">Nhập mô tả</label>
                <input class="form-control" name="mota" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh banner<span style="color: red; font-weight: bold" >(*)</span> </label>
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
              
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="addsp" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
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
          <a class="btn btn-cancel" data-dismiss="modal" href="index.php?pg=qlbanner">Hủy bỏ</a>
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
              <label class="control-label">Danh mục banner hiện đang có</label>
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
  var tensp = document.getElementById("tensp");
  var danhmucsp = document.getElementById("danhmucsp");
  var brandsp = document.getElementById("brandsp");
  var giabansp = document.getElementById("giabansp");
  form.addEventListener("sumbit", function(event){
    if(masp.value == "" || masp.value.length>10){
      alert("Mã banner không được để trống tối đa 10 ký tự!");
      event.preventDefault();// không cho submit
      masp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(tensp.value == ""){
      alert("Tên banner không được để trống!");
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