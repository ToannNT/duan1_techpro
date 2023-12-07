<?php
$html_qldonhang = "";
foreach ($ds_order as $key => $value) {
  extract($value);
  $html_qldonhang .= '
                                 <tr>
                                      <td>' . $madh . '</td>
                                      <td>' . $hoten_kh . '</td>
                                      <td>' . $ten . '</td>
                                      <td>' . $soluong . '</td>
                                      <td>' . $gia . 'đ</td>
                                      <td><span class="badge bg-success">Hoàn thành</span></td>
                                      <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                                  class="fas fa-trash-alt"></i> </button>
                                          <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                  class="fa fa-edit"></i></button>
                                      </td>
                                  </tr>

  ';
}


?>

<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="adddonhang.html" title="Thêm"><i class="fas fa-plus"></i>
                Tạo mới đơn hàng</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
            </div>

            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
            </div>

            <div class="col-sm-2">
              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                Excel</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <div class="row">
              <!-- <div class="col-sm-12 col-md-6"> -->
              <!-- <div class="col-sm-12 col-md-6"> -->
              <div id="sampleTable_filter" style="text-align: start;" class="col-sm-12 dataTables_filter">

                <form action="#" method="post">
                  <label>
                    <button type="submit" style="outline: none; cursor: pointer; border: none; background: white;" name="submit_donhang">Tìm kiếm:</button>
                    <input type="search" name="keyword" class="form-control form-control-sm" placeholder="Mã đơn hàng" aria-controls="sampleTable">
                  </label>
                </form>

              </div>
              <!-- </div> -->
              <!-- </div> -->
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="ID đơn hàng: activate to sort column ascending" style="width: 59.2px;">Mã đơn hàng</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Khách hàng: activate to sort column ascending" style="width: 72.2px;">Khách hàng</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Đơn hàng: activate to sort column ascending" style="width: 155.2px;">Đơn hàng</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Số lượng: activate to sort column ascending" style="width: 41.2px;">Số lượng</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Tổng tiền: activate to sort column ascending" style="width: 73.2px;">Tổng tiền</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Tình trạng: activate to sort column ascending" style="width: 98.2px;">Tình trạng</th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Tính năng: activate to sort column ascending" style="width: 46px;">Tính năng</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?= $html_qldonhang ?>


                    <!-- 


                                        <tr role="row" class="odd">
                                            <td width="10" class="sorting_1"><input type="checkbox" name="check1"
                                                    value="1"></td>
                                            <td>MD0837</td>
                                            <td>Triệu Thanh Phú</td>
                                            <td>Ghế làm việc Zuno, Bàn ăn gỗ Theresa</td>
                                            <td>2</td>
                                            <td>9.400.000 đ</td>
                                            <td><span class="badge bg-success">Hoàn thành</span></td>
                                            <td><button class="btn btn-primary btn-sm trash" type="button"
                                                    title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                        class="fa fa-edit"></i></button>
                                            </td>
                                        </tr> -->

                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">Hiện
                  1 đến 6 của 6 danh mục</div>
              </div>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="sampleTable_previous"><a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Lùi</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item next disabled" id="sampleTable_next"><a href="#" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">Tiếp</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>