<?php
if(is_array($showup)&&(count($showup)>0)){
  extract($showup);
  $idupdate= $id;
  }


  $html_showbradm = '';
  foreach ($dsbr_adm as $br_adm) {
      extract($br_adm);
      if($id==$id_brand){
        $html_showbradm .= '<option selected value="'.$id.'">'.$ten.'</option>';
      }else{  
        $html_showbradm .= '<option value="'.$id.'">'.$ten.'</option>';
      }
  }
  $html_showdmadm = '';
  foreach ($dsdm_adm as $dm_adm) {
      extract($dm_adm);
      if($id==$id_catalog){
        $html_showdmadm .= '<option selected value="'.$id.'">'.$ten_dm.'</option>';
      }else{
        $html_showdmadm .= '<option value="'.$id.'">'.$ten_dm.'</option>';
      }
  }
  
?>
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
                <input class="form-control" id="masp" name="masp" type="text" value="<?=$ma_sp?>">
              </div>
              <div class="form-group col-md-3">
                <label for="tensp" class="control-label">Tên sản phẩm <span style="color: red; font-weight: bold" >(*)</span> </label>
                <input class="form-control" id="tensp" name="tensp" type="text" value="<?=($ten!="")?$ten:"";?>">
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
                  <label for=""><input type="checkbox" name="seo" value="<?=$sale;?>" id=""> Sale</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="moi" value="<?=$new;?>" id=""> Mới</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="many" value="<?=$xemnhieu;?>" id=""> Xem nhiều</label>
                </div>
                <div class="col">
                  <label for=""><input type="checkbox" name="run" value="<?=$banchay;?>" id=""> Bán chạy</label>
                </div>
              </div>
              <div class="form-group col-md-9">
                <label class="control-label">Ảnh sản phẩm<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="imgup" value="<?=$hinh;?>" onchange="readURL(this);" />
                  <input type="hidden" id="uploadfile" name="imgold" value="<?=$hinh;?>" />
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh?>" alt="">
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
                <p class="tile-title col-md-12">Ảnh chi tiết sản phẩm</p>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 1</p>
                  <input type="file" id="uploadfile1" name="hinh1"/>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh1?>" alt="">
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 2</p>
                  <input type="file" id="uploadfile2" name="hinh2"/>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh2?>" alt="">
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 3</p>
                  <input type="file" id="uploadfile3" name="hinh3"/>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh3?>" alt="">
                </div><br>
                <div class="col-md-3">
                  <p class="control-label">Ảnh 4</p>
                  <input type="file" id="uploadfile4" name="hinh4"/>
                  <img style="width: 70px;" src="../view/layout/images/product/<?=$hinh4?>" alt="">
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
              <input type="hidden" name="id" value="<?=$idupdate?>">
              <input class="btn btn-save" type="submit" name="updatepro" value="Lưu lại">
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