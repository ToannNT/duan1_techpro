<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Quản trị Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="view/layouts/css/main1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

        <script>
    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);
      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
      </head>

<body onload="time()" class="app sidebar-mini rtl">
   <!-- Navbar-->
   <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../view/layout/images/menu/logo/logo_main.png" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Admin Techpro</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item active" href="index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li>
        <a class="app-menu__item" href="index.php?pg=qldanhmuc">
          <i class='app-menu__icon bi bi-card-checklist'></i>
          <span class="app-menu__label">Quản lý danh mục</span>
        </a>
      </li>
      <li>
        <a class="app-menu__item" href="index.php?pg=qlsanpham">
          <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
          <span class="app-menu__label">Quản lý sản phẩm</span>
        </a>
      </li>
      <li><a class="app-menu__item" href="index.php?pg=qldonhang"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li class="app-menu__itemhv">
        <a class="app-menu__item" href="">
          <i class='app-menu__icon bx bx-image'></i>
          <span class="app-menu__label">Quản lý giao diện</span>
        </a>
        <ul class="sub-menu">
          <li><a class="app-menu__item" href="#"><i class='app-menu__icon bi bi-headset-vr'></i><span class="app-menu__label">Header</span></a></li>
          <li><a class="app-menu__item" href="#"><i class='app-menu__icon bi bi-back'></i><span class="app-menu__label">Footer</span></a></li>
          <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-toggle-right'></i><span class="app-menu__label">Button</span></a></li>
          <li><a class="app-menu__item" href="qlbanner.html"><i class='app-menu__icon bx bx-slideshow'></i><span class="app-menu__label">Banner</span></a></li>
        </ul>
      </li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>