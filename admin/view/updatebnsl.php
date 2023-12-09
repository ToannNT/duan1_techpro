<?php
if(is_array($showup_banner)&&(count($showup_banner)>0)){
  extract($showup_banner);
  }
  $html_showsp = '';
  foreach ($get_pro as $dm_adm) {
      extract($dm_adm);
      if($dm_adm['id']==$id_product){
        $selected = "selected";
      }else{
        $selected = "";
      }
      $html_showsp .= '<option value="' . $id . '" '.$selected.'>' . substr($ten, 0, 50) . '...</option>';
  }
?>

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a style="color:#001C40;" href="index.php?pg=qlsanpham">Quản lý banner</a></li>
        <li class="breadcrumb-item active"><a href="#"></a>Chỉnh sửa banner</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Chỉnh sửa banner/home</h3>
          <span style="color: red; font-wieght:bold;" >Stt: 1,2(370x180px) / Stt: 3,4,5(360x180px) / stt: 6,7(1140x180px)</span>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=updatebanner" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="stt" class="control-label">Nhập số thứ tự trên web<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="stt" class="form-control" value="<?=$stt?>" name="stt" type="text" placeholder="">
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
                  <input type="file" id="uploadfile" value="<?=$img?>" name="imgup" onchange="readURL(this);" /><br>
                  <input type="hidden" id="uploadfile" value="<?=$img?>" name="imgold">
                </div>
              </div>
              <div class="form-group col-md-3">
                <img style="width: 100%;padding-top: 20px;" src="../view/layout/images/banner/<?=$img?>" alt="">
                <div id="thumbbox">
                  <p style="display: none; color:red;">Ảnh mới được cập nhật</p>
                  <img width="100%px" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
              </div>
              <div class="form-group col-md-12">
                <input type="hidden" name="idbn" value="<?=$idbn?>" >
                <input class="btn btn-save" type="submit" name="updatebn" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Chỉnh sửa slide/home</h3>
          <span style="color: red; font-wieght:bold;"></span>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=updateslider" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="masp" class="control-label">STT<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="masp" class="form-control"  value="<?=$sttsd?>" name="sttsd" type="text" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label class="control-label">Nhập mô tả</label>
                <input class="form-control" value="<?=$motasd?>" name="motasd" type="text">
                <img style="width: 200px;padding-top: 20px;" src="../view/layout/images/banner/" alt="">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh banner<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div  >
                  <input type="file" id="uploadfile" value="<?=$imgsd?>" name="imgupsd" onchange="readURL(this);" />
                  <input type="hidden" id="uploadfile" value="<?=$imgsd?>" name="imgold">
                </div>
                <div id="thumbbox">
                  <img width="200px" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
              </div>
              <div class="form-group col-md-12">
                <input class="btn btn-save" type="submit" name="updatebn" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlbanner">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>

  </main>



<script>
  var form = document.getElementsByTagName("form")[0];
  var stt = document.getElementById("stt");
  var mota = document.getElementById("mota");
  var imgup = document.getElementById("imgup");
  var brandsp = document.getElementById("brandsp");
  var giabansp = document.getElementById("giabansp");
  form.addEventListener("sumbit", function(event){
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