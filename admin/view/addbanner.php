<?php
  $html_showsp = '';
  foreach ($get_pro as $dm_adm) {
      extract($dm_adm);
      $html_showsp .= '<option value="' . $id . '">' . substr($ten, 0, 50) . '...</option>';
  }
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
              <label for="stt" class="control-label">Nhập số thứ tự trên web<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="stt" class="form-control" name="stt" min="1" type="number" placeholder="">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Chọn sản phẩm cần thêm banner</label>
                <select name="namepro" class="form-control" id="exampleSelect1">
                  <option value="default" >-- Chọn tên sản phẩm --</option>
                  <?=$html_showsp;?>
                </select>
              </div>
              <div class="form-group col-md-6 "></div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh banner<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div  >
                  <input type="file" id="uploadfile" name="imgup" onchange="readURL(this);" />
                </div>
              </div>
              <div class="form-group col-md-3">
                <div id="thumbbox">
                    <img width="100%" alt="Thumb image" id="thumbimage" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                </div>
              </div>
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="btnbn" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới slide</h3>
          <span style="color: red; font-wieght:bold;"></span>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=addbanner" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
              <label for="stt" class="control-label">Nhập số thứ tự trên web<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="stt" class="form-control" name="sttsd" min="1" type="number" placeholder="">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Chọn sản phẩm cần thêm banner</label>
                <select name="nameprosl" class="form-control" id="exampleSelect1">
                  <option value="default" >-- Chọn tên sản phẩm --</option>
                  <?=$html_showsp;?>
                </select>
              </div>
              <div class="form-group col-md-6 "></div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh banner<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div  >
                  <input type="file" id="uploadfilesp1" name="imgupsd" onchange="readURLsp1(this);" />
                </div>
              </div>
              <div class="form-group col-md-3">
                <div id="thumbbox">
                    <img width="100%" alt="Thumb image" id="thumbimagesp1" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                </div>
              </div>
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="btnsd" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </main>
  <!--

-->
<script>
  var form = document.getElementsByTagName("form")[0];
  var stt = document.getElementById("stt");
  var mota = document.getElementById("mota");
  var imgup = document.getElementById("imgup");
  var brandsp = document.getElementById("brandsp");
  var giabansp = document.getElementById("giabansp");
  form.addEventListener("submit", function(event){
    if(stt.value == "" || stt.value.length>10){
      alert("Số thứ tự không được để trống!");
      event.preventDefault();// không cho submit
      stt.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(mota.value == ""){
      alert("Tên banner không được để trống!");
      event.preventDefault();// không cho submit
      mota.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(imgup.value == "default"){
      alert("Mô tả không được để trống!");
      event.preventDefault();// không cho submit
      imgup.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(brandsp.value == "default"){
      alert("Hình không được để trống!");
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