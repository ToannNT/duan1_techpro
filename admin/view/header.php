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
            reader.onload = function(e) {
                $("#thumbimage").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimage").attr('src', input.value);
        }
        $("#thumbimage").show();
        $('.filename').text($("#uploadfile").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfile").click();

        });
        $(".removeimg").click(function() {
            $("#thumbimage").attr('src', '').hide();
            $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfile").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })

    function readURL2(input, thumbimage2) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimage2").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimage2").attr('src', input.value);
        }
        $("#thumbimage2").show();
        $('.filename').text($("#uploadfile2").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfil2").click();

        });
        $(".removeimg").click(function() {
            $("#thumbimage2").attr('src', '').hide();
            $("#myfileupload").html(
                '<input type="file" id="uploadfile2"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfile2").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })

    function readURLsp1(input, thumbimagesp1) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimagesp1").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimagesp1").attr('src', input.value);
        }
        $("#thumbimagesp1").show();
        $('.filename').text($("#uploadfilesp1").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfilesp1").click();

        });
        $(".removeimg").click(function() {
            $("#uploadfilesp1").attr('src', '').hide();
            $("#uploadfilesp1").html(
                '<input type="file" id="uploadfilesp1"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfilesp1").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })

    function readURLsp2(input, thumbimagesp2) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimagesp2").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimagesp2").attr('src', input.value);
        }
        $("#thumbimagesp2").show();
        $('.filename').text($("#uploadfilesp2").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfilesp2").click();

        });
        $(".removeimg").click(function() {
            $("#uploadfilesp2").attr('src', '').hide();
            $("#uploadfilesp2").html(
                '<input type="file" id="uploadfilesp2"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfilesp2").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })

    function readURLsp3(input, thumbimagesp3) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimagesp3").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimagesp3").attr('src', input.value);
        }
        $("#thumbimagesp3").show();
        $('.filename').text($("#uploadfilesp3").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfilesp3").click();

        });
        $(".removeimg").click(function() {
            $("#uploadfilesp3").attr('src', '').hide();
            $("#uploadfilesp3").html(
                '<input type="file" id="uploadfilesp3"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfilesp3").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })

    function readURLsp4(input, thumbimagesp4) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimagesp4").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimagesp4").attr('src', input.value);
        }
        $("#thumbimagesp4").show();
        $('.filename').text($("#uploadfilesp4").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfilesp4").click();

        });
        $(document).ready(function() {
            $(".Choicefile").bind('click', function() {
                $("#uploadfilesp4").click();

            });
            $(".removeimg").click(function() {
                $("#uploadfilesp4").attr('src', '').hide();
                $("#uploadfilesp4").html(
                    '<input type="file" id="uploadfilesp4"  onchange="readURL(this);" />');
                $(".removeimg").hide();
                $(".Choicefile").bind('click', function() {
                    $("#uploadfilesp4").click();
                });
                $('.Choicefile').css('background', '#14142B');
                $('.Choicefile').css('cursor', 'pointer');
                $(".filename").text("");
            });
        })

        function momenu() {
            $('.sub-menu').toggle();
        }
    })
    </script>
</head>

<body onload="time()" class="app sidebar-mini rtl">

    <header class="app-header">
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

        <ul class="app-nav">



            <li><a class="app-nav__item" href="../index.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="../view/layout/images/menu/logo/logoam.png" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>Admin Techpro</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i
                        class='app-menu__icon bx bx-cart-alt'></i>
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
                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bi bi-headset-vr'></i><span
                                class="app-menu__label">Header</span></a></li>
                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bi bi-back'></i><span
                                class="app-menu__label">Footer</span></a></li>
                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-toggle-right'></i><span
                                class="app-menu__label">Button</span></a></li>
                    <li><a class="app-menu__item" href="index.php?pg=qlbanner"><i
                                class='app-menu__icon bx bx-slideshow'></i><span
                                class="app-menu__label">Banner</span></a></li>
                </ul>
            </li>

            <li>
                <a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i>
                    <span class="app-menu__label">Cài đặt hệ thống</span></a>
            </li>
        </ul>
    </aside>