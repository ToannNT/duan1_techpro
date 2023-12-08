<?php

$html_showblog = "";
  foreach ($get_blog as $item){
    extract($item);
    $html_showblog.= '
            <tr>
              <td>'.$madm.'</td>
              <td style="width: 100px; height: 100px; overflow: hidden;">
                  <img src="../view/layout/images/blog/' . $hinh . '" alt="" style="width: 100%; height: 100%; object-fit: cover;">
              </td>
              <td>'.$tieude.'</td>
              <td style="max-height:100px;">'.$noidung.'</td>
              <td><a href="index.php?pg=delblog&idbn='.$id_blog.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> </button>
                  <a href="index.php?pg=updateblog&id_blog='.$id_blog.'"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
              </td>
          </tr>';
  }
?>
<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b color:black>Quản lý bài viết</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                      <h2>Quản lý bài viết</h2>
                        <div class="row element-button">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?pg=addblog" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới bài viết</a>
                            </div>
                          </div>
                          <h2></h2>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã danh mục</th>
                                    <th>Hình ảnh</th>
                                    <th  style="width:20%;" >Tiêu đề</th>
                                    <th  style="width:50%;" >Nội dung</th>
                                    <th>Thuộc tính</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?=$html_showblog?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
