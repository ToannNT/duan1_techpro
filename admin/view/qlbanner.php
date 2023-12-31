<?php
$html_showbanner = "";
foreach ($get_banner as $item) {
    extract($item);
    if ($trangthai == 1) {
        $check = "checked";
    } else {
        $check = "";
    }
    $html_showbanner .= '<tr>
              <td>' . $stt . '</td>
              <td style="width: 200px; height: 100px; overflow: hidden;">
                  <img src="../view/layout/images/banner/' . $img . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
              </td>
              <td style="width: 10%;">
                <label class="switch">
                  <input onchange="upStatus(this)" id="' . $id . '" type="checkbox" ' . $check . ' value="1">
                  <span class="sliderr round"></span>
                </label>
              </td>
              <td><a href="index.php?pg=delbanner&idbn=' . $id . '"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                  </button>
                  <a href="index.php?pg=updatebnsl&idbn=' . $id . '"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
              </td>
          </tr>';
}
$html_showslider = "";
foreach ($get_slider as $item) {
    extract($item);
    if ($trangthai == 1) {
        $check = "checked";
    } else {
        $check = "";
    }
    $html_showslider .= '<tr>
              <td>' . $stt . '</td>
              <td style="width: 200px; height: 100px; overflow: hidden;">
                  <img src="../view/layout/images/slider/' . $img . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
              </td>
              <td style="width: 10%;">
                <label class="switch">
                  <input onchange="upStatussd(this)" id="' . $id . '" type="checkbox" ' . $check . ' value="1">
                  <span class="sliderr round"></span>
                </label>
              </td>
              <td><a href="index.php?pg=delslider&idsd=' . $id . '"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                  </button>
                  <a href="index.php?pg=updatebnsl&idsd=' . $id . '"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
              </td>
          </tr>';
}
?>
<style>
/* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 40px;
    /* Reduced width */
    height: 24px;
    /* Reduced height */
}

/* Hide default HTML checkbox */
.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

/* The slider */
.sliderr {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: 0.4s;
}

.sliderr:before {
    content: "";
    position: absolute;
    height: 16px;
    /* Reduced height */
    width: 16px;
    /* Reduced width */
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: 0.4s;
}

input:checked+.sliderr {
    background-color: #9df99d;
}

input:focus+.sliderr {
    box-shadow: 0 0 1px #9df99d;
}

input:checked+.sliderr:before {
    transform: translateX(16px);
    /* Reduced translation */
}

/* Rounded sliders */
.sliderr.round {
    border-radius: 24px;
    /* Reduced border-radius */
}

.sliderr.round:before {
    border-radius: 50%;
}
</style>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b color:black>Quản lý banner</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h2>Quản lý banner</h2>
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?pg=addbanner" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới banner & slider</a>
                        </div>
                    </div>
                    <h2></h2>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <h3>Banner home</h3>
                        <thead>
                            <tr>
                                <th style="width:100px;">Thứ tự banner</th>
                                <th style="width:500px;">Hình ảnh</th>
                                <th style="width:300px;">Trạng thái</th>
                                <th>Thuộc tính</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $html_showbanner ?>
                        </tbody>
                    </table>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <h3>Slider home</h3>
                        <thead>
                            <tr>
                                <th style="width:100px;">Thứ tự banner</th>
                                <th style="width:500px;">Hình ảnh</th>
                                <th style="width:300px;">Trạng thái</th>
                                <th>Thuộc tính</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $html_showslider ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
function upStatussd(e) {
    var status = e.checked ? 1 : 0;
    var id = e.getAttribute("id");
    $(document).ready(function() {
        $.ajax({
            url: "./view/status.php",
            data: {
                id: id,
                status: status
            },
            method: "post",
            cache: false,
            success: function(data) {}
        });
    });
};

function upStatus(e) {
    var status = e.checked ? 1 : 0;
    var id = e.getAttribute("id");
    $(document).ready(function() {
        $.ajax({
            url: "./view/status.php",
            data: {
                id: id,
                status: status
            },
            method: "post",
            cache: false,
            success: function(data) {}
        });
    });
};
</script>