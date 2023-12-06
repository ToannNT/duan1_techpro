<?php
// echo var_dump($showup);
if(is_array($showup)){
  extract($showup);
  }

  if($sale==1){
    $sale = "checked";
  }else{  
    $sale = "";
  }
  if($new==1){
    $new = "checked";
  }else{  
    $new = "";
  }
  if($xemnhieu==1){
    $xemnhieu = "checked";
  }else{
    $xemnhieu = "";
  }
  if($banchay==1){
    $banchay = "checked";
  }else{ 
    $banchay = "";
  }

  $html_showbradm = '';
  foreach ($dsbr_adm as $br_adm) {

      if($br_adm['id']==$id_brand){
        $html_showbradm .= '<option selected value="'.$br_adm['id'].'">'.$br_adm['ten'].'</option>';
      }else{  
        $html_showbradm .= '<option value="'.$br_adm['id'].'">'.$br_adm['ten'].'</option>';
      }
  }
  $html_showdmadm = '';
  foreach ($dsdm_adm as $dm_adm) {
      if($dm_adm['id']==$id_catalog){
        $html_showdmadm .= '<option selected value="'.$dm_adm['id'].'">'.$dm_adm['ten_dm'].'</option>';
      }else{
        $html_showdmadm .= '<option value="'.$dm_adm['id'].'">'.$dm_adm['ten_dm'].'</option>';
      }
  }
?>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item">Quản lý sản phẩm</li>
        <li class="breadcrumb-item active"><a href="#"></a>Cập nhật sản phẩm</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật sản phẩm</h3>
          <div class="tile-body">
          </div>
          <div class="formsp">
            <form action="index.php?pg=updatepro" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-3">
                <label for="masp" class="control-label">Mã sản phẩm <span style="color: red; font-weight: bold" >(*)</span>  </label>
                <input class="form-control" id="masp" value="<?=$ma_sp?>" name="masp" type="text" >
              </div>
              <div class="form-group col-md-3">
                <label for="tensp" class="control-label">Tên sản phẩm <span style="color: red; font-weight: bold" >(*)</span> </label>
                <input class="form-control" id="tensp" value="<?=$ten?>" name="tensp" type="text">
              </div>
              <div class="form-group col-md-3">
                <label for="dmsp" class="control-label">Danh mục <span style="color: red; font-weight: bold" >(*)</span> </label>
                <select id="dmsp" class="form-control" name="danhmucsp">
                  <option value="default" >--Chọn danh mục--</option>
                  <?=$html_showdmadm?>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="brandsp" class="control-label">Brand<span style="color: red; font-weight: bold" >(*)</span> </label>
                <select class="form-control" name="brandsp" id="brandsp">
                  <option value="default" >-- Chọn hãng --</option>
                  <?=$html_showbradm?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="giaban" class="control-label">Giá bán<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input class="form-control" id="giaban" name="giaban" value="<?=$gia?>" type="text">
              </div>
              <div class="form-group col-md-3">
                <label for="giagiamsp" class="control-label" for="giagiamsp">Giá giảm</label>
                <input id="giagiamsp" class="form-control" id="giagiamsp" name="giagiam" value="<?=$giamgia?>" type="text">
              </div>
              <div class="form-group col-md-3 ">
                <label for="tinhtrangsp" class="control-label">Tình trạng</label>
                <select class="form-control" id="tinhtrangsp">
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
                  <label for=""><input type="checkbox" name="seo" value="1" <?=$sale;?> id=""> Sale</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="moi" value="1" <?=$new;?> id=""> Mới</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="many" value="1" <?=$xemnhieu;?> id=""> Xem nhiều</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="run" value="1" <?=$banchay;?> id=""> Bán chạy</label>
                </div>
              </div>
              <div class="form-group col-md-9">
                <label class="control-label">Ảnh sản phẩm<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" value="<?=$hinh;?>" name="imgup" onchange="readURL(this);" />
                  <input type="hidden" id="uploadfile" value="<?=$hinh;?>" name="imgold" />
                  <img style="width: 200px;" src="../view/layout/images/product/<?=$hinh?>" alt="">
                </div>
                <div id="thumbbox">
                  <img width="200" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
              </div>
                <p class="tile-title col-md-12">Ảnh chi tiết sản phẩm</p>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 1</p>
                  <img style="width: 70px;"  src="../view/layout/images/product/<?=$hinh1?>" alt="">
                  <input type="hidden" id="uploadfile1" name="imgold1" value="<?=$hinh1;?>" />
                  <input type="file" onchange="readURLsp1(this);" id="uploadfile1" name="hinh1"/>
                  <div id="thumbboxsp1">
                    <img width="70" alt="Thumb image" placeholder="ảnh tải lên" id="thumbimagesp1" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 2</p>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh2?>" alt="">
                  <input type="hidden" id="uploadfile2" name="imgold2" value="<?=$hinh2;?>" />
                  <input type="file" onchange="readURLsp2(this)" id="uploadfile2" name="hinh2"/>
                  <div id="thumbboxsp2">
                    <img width="70" alt="Thumb image" id="thumbimagesp2" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 3</p>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh3?>" alt="">
                  <input type="hidden" id="uploadfile3" name="imgold3" value="<?=$hinh3;?>" />
                  <input type="file" onchange="readURLsp3(this)" id="uploadfile3" name="hinh3"/>
                  <div id="thumbboxsp3">
                    <img width="70" alt="Thumb image" id="thumbimagesp3" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 4</p>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh4?>" alt="">
                  <input type="hidden" id="uploadfile4" name="imgold4" value="<?=$hinh4;?>" />
                  <input type="file" onchange="readURLsp4(this)" id="uploadfile4" name="hinh4"/>
                  <div id="thumbboxsp4">
                    <img width="70" alt="Thumb image" id="thumbimagesp4" style="display: none" />
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div><br>
              <div class="form-group col-md-12">
                <br>
                <label class="control-label">Mô tả</label>
                <input class="form-control" name="mota" value="<?=$mota?>" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Chi tiết sản phẩm</label>
                <textarea class="form-control" name="chitiet" id="chitiet"><?=$chitiet?></textarea>
                <script>CKEDITOR.replace('chitiet');</script>
              </div>
              <input type="hidden" value="<?=$id?>" name="id">
              <input class="btn btn-save" type="submit" name="btnupdatepro" value="Lưu lại">
              <a class="btn btn-cancel" href="qlsanpham.html">Hủy bỏ</a>
            </form>
          </div>
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
<script>
  var form = document.getElementsByTagName("form")[0];
  var masp = document.getElementById("masp");
  var tensp = document.getElementById("tensp");
  var danhmucsp = document.getElementById("dmsp");
  var brandsp = document.getElementById("brandsp");
  var giaban = document.getElementById("giaban");
  var giagiamsp = document.getElementById("giagiamsp");
  console.log(giaban);
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
    if (!(danhmucsp && danhmucsp.value !== "default")) { // Kiểm tra giá trị chọn của danh mục
        alert("Danh mục không được để trống!");
        event.preventDefault();
        danhmucsp.focus();
        return false;
    }
    if(giaban.value == "" || isNaN(giaban.value)){
      alert("Giá bán không được để trống và phải là số!");
      event.preventDefault();// không cho submit
      giaban.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(giagiamsp.value == "" || isNaN(giagiamsp.value)){
      alert("Giá giảm không được để trống và phải là số!");
      event.preventDefault();// không cho submit
      giagiamsp.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if (!(brandsp && brandsp.value !== "default")) { // Kiểm tra giá trị chọn của brand
        alert("Brand không được để trống!");
        event.preventDefault();
        brandsp.focus();
        return false;
    }

    return true;
  });

</script>