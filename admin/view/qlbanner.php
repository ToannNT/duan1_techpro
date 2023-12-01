<style>
  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 40px; /* Reduced width */
    height: 24px; /* Reduced height */
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
    height: 16px; /* Reduced height */
    width: 16px; /* Reduced width */
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: 0.4s;
  }

  input:checked + .sliderr {
    background-color: #9df99d;
  }

  input:focus + .sliderr {
    box-shadow: 0 0 1px #9df99d;
  }

  input:checked + .sliderr:before {
    transform: translateX(16px); /* Reduced translation */
  }

  /* Rounded sliders */
  .sliderr.round {
    border-radius: 24px; /* Reduced border-radius */
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
                              <a class="btn btn-add btn-sm" href="index.php?pg=addbanner" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới banner & slider</a>
                            </div>
                          </div>
                          <h2></h2>
                        <table class="table table-hover table-bordered" id="sampleTable">
                          <h3>Banner home</h3>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Stt</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th style=":10%;" >Trạng thái</th>
                                    <th>Thuộc tính</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($get_banner as $item) {
                                  extract($item);
                                  echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$stt.'</td>
                                            <td style="width: 200px; height: 100px; overflow: hidden;">
                                                <img src="../view/layout/images/banner/' . $img . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                            </td>
                                            <td>'.$mota.'</td>
                                            <td style="width: 10%;">
                                              <label class="switch">
                                                <input type="checkbox" value="1">
                                                <span class="sliderr round"></span>
                                              </label>
                                            </td>
                                            <td><a href="index.php?pg=delbanner&id='.$id.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                    onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                                </button>
                                                <a href="index.php?pg=updateCatagory&id='.$id.'"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                            </td>
                                        </tr>';
                                }
                              ?>
                            </tbody>
                        </table>
                        <table class="table table-hover table-bordered" id="sampleTable">
                          <h3>Slider home</h3>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Stt</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Trạng thái</th>
                                    <th>Thuộc tính</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($get_slider as $item) {
                                  extract($item);
                                  echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$stt.'</td>
                                            <td style="width: 100px; height: 100px; overflow: hidden;">
                                                <img src="../view/layout/images/slider/' . $img . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                            </td>
                                            <td>'.$mota.'</td>
                                            <td>
                                              <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                              </label>
                                            </td>
                                            <td><a href="index.php?pg=del&id='.$id.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                    onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                                </button>
                                                <a href="index.php?pg=updateCatagory&id='.$id.'"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                            </td>
                                        </tr>';
                                }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--