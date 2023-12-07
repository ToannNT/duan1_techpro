
<?php
if(is_array($showup_blog)&&(count($showup_blog)>0)){
  extract($showup_blog);
  }
?>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a style="color:#001C40;" href="index.php?pg=qlsanpham">Quản lý bài viết</a></li>
        <li class="breadcrumb-item active"><a href="#"></a>Cập nhật bài viết</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật bài viết /home</h3>
          <div class="tile-body">
          </div>
          <form action="index.php?pg=updateblogxl" enctype="multipart/form-data" method="post" class="row">
              <div class="form-group col-md-6">
                <label for="mablog" class="control-label">Mã danh mục<span style="color: red; font-weight: bold" >(*)</span> </label>
                <input id="mablog" class="form-control" name="mablog" value="<?=$madm?>" min="1" type="number" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Ảnh bài viết<span style="color: red; font-weight: bold" >(*)</span> </label>
                <div  >
                  <input type="file" id="uploadfile"  name="imgblog" onchange="readURL(this);" />
                  <input type="hidden" name="imgold" value="<?=$hinh?>" >
                </div>
                <div id="thumbbox">
                  <img style="width: 200px;padding-top: 20px;" src="../view/layout/images/blog/<?=$hinh?>" alt="">
                  <img width="70" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="tieudeblog" class="control-label">Nhập tiêu đề</label>
                <input class="form-control" value="<?=$tieude?>"  id="tieudeblog" name="tieudeblog" type="text">
              </div>  
              <div class="form-group col-md-12">
                <label class="control-label">Nhập nội dung</label>
                <textarea class="form-control" name="chitietblog" id="chitiet"><?=$noidung?></textarea>
                <script>CKEDITOR.replace('chitiet');</script>
              </div>
              <div class="form-group col-md-12">
                <input type="hidden" name="idblog" value="<?=$id_blog?>" >
                <input class="btn btn-save" type="submit" name="updateblogxl" value="Lưu lại">
                <a class="btn btn-cancel" href="index.php?pg=qlblog">Hủy bỏ</a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </main>

  <script>
  var form = document.getElementsByTagName("form")[0];
  var mablog = document.getElementById("mablog");
  var tieude = document.getElementById("tieudeblog");
  var chitiet = document.getElementById("chitiet");
  form.addEventListener("submit", function(event){
    if(mablog.value == "" || mablog.value.length>10){
      alert("Mã danh mục không được để trống!");
      event.preventDefault();// không cho submit
      mablog.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(tieude.value == ""){
      alert("Tiêu đề không được để trống!");
      event.preventDefault();// không cho submit
      tieude.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    if(chitiet.value == ""){
      alert("Chi tiết không được để trống!");
      event.preventDefault();// không cho submit
      chitiet.focus();//di chuyển đến vị trí lỗi
      return false;
    }
    return true;
  });



</script>