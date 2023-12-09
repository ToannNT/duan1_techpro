<?php

// Mảng tạm thời để lưu trữ thông tin sản phẩm đã xử lý
// $processed_products = array();
if (isset($_SESSION['s_user'])) {
    $html_show_my_order = "";
    $i = 1;
    foreach ($show_my_order as $value) {

        extract($value);
        $slsp_in_bill = count_sp_inbill($id_bill);
        $voucher = (int)$voucher / (int)$slsp_in_bill;
        $phivanchuyen = (int)$phivanchuyen / (int)$slsp_in_bill;

        $total = ((int)$gia - (int)$voucher - (int)$hoivien) + (int)$phivanchuyen;


        if ($status == 0) {
            $status_p = "<span style='color: #ff4a20; font-weight: bold;'  href='#'>Đang chờ duyệt</span> <br>
                         <a style='text-decoration: underline; color: #00a90d; font-weight: bold;' href='index.php?pg=my_order&huydon=$id'>
                         Hủy đơn
                         </a>
            ";
        } else if ($status == 1) {
            $status_p = "<span style='color: #5273f9; font-weight: bold;' href='#'>Đang giao</span>";
        } else if ($status == 2) {
            $status_p = "<a style='text-decoration: underline; color: #00a90d; font-weight: bold;' href='index.php?pg=my_order&status=$status&idorder=$id'>Đã nhận được hàng</a>";
        } else if ($status == 3) {
            $status_p = "<span style='color: #00a90d; font-weight: bold;' href='#'>Hoàn thành</span>";
        } else {
            $status_p = "<span style='color: red; font-weight: bold;' href='#'>Đã hủy</span>";
        }

        $html_show_my_order .= '
                    <tr class="">
                        <th scope="row">' . $i . '</th>
                        <td class="tr_td">
                            <a href="index.php?pg=productdetail&idpro=' . $id_product . '">
                            <img  style="width: 7.5rem;" class="img-sp" src="./view/layout/images/product/' . $hinh . '" alt="">
                            </a>
                        </td>
                        <td class="tr_td">' . $ten . '</td>
                        <td class="tr_td">' . $ngaydat . '</td>
                        <td class="tr_td">' . $madh . '</td>
                        <td class="tr_td">' . $soluong . '</td>
                        <td class="tr_td">' . number_format($total, 0, '.', '.') . 'đ</td>
                        <td class="tr_td">' . $status_p . '</td>
                        <td><a href="index.php?pg=detailed_order&id_order=' . $id . '&id_bill=' . $id_bill . '">Xem chi tiết đơn hàng</a></td>
                    </tr>
        ';
        $i++;
    }
} else {
    $html_show_my_order = "<h3>Đăng nhập để xem đơn hàng của bạn</h3>";
}

// echo var_dump($show_my_order);


// }


?>
</button>

<link rel="stylesheet" href="./view/layout/asset/css/vieworder.css">
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đơn hàng</li>
            </ul>
        </div>
    </div>
</div>


<div class="container text-center">

    <div class="row justify-content-between mt-3">
        <!-- <div style="margin-top: 1%;" class="col-md-3">

            <div class="sidebars">
                <div class="sidebar">
                    <div class="accout-user">
                        <img class="accout-user-img" src="./view/layout/images/menu/user.svg" alt="">
                        <div class="username">Nguyen Van A</div>
                    </div>

                    <div class="sidebar-item"><i class="bi bi-person-circle"></i>
                        <a style="color: black;" href="#">
                            Tài khoản
                        </a>
                    </div>




                    <div style=" border-radius: 0.74rem;  background-color: #02213d; color: white;" class="sidebar-item"><i class="bi bi-bag-dash-fill"></i> Đơn hàng
                    </div>

                    <div class="sidebar-item"><i class="bi bi-ticket-perforated-fill"></i>
                        <a style="color: black;" href="#">Kho Voucher
                        </a>
                    </div>

                </div>
            </div><br>
        </div> -->
        <div style="margin-top: 0.1%;" class="col-md-12">
            <p class="h2"></p>
            <div class="custom-div">
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>
                <div class="custom-line"></div>

            </div>
            <table style=" margin: 0px;" class="table table-bordered custom-table">
                <thead>
                    <tr class="tr_th">
                        <th scope="col">Stt</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr class="tr_td">
                        <th scope="row">1</th>
                        <td><img class="img-sp" src="./view/layout/images/product/small-size/1.jpg" alt=""></td>
                        <td>Màn hình EZ2224123</td>
                        <td>Oc 7, 2023, 9:23 pm</td>
                        <td>HJUXA&547</td>
                        <td>10,000,000đ</td>
                        <td><span>Đang kiểm tra</span></td>
                        <td><a href="#">Xem chi tiết đơn hàng</a></td>
                    </tr> -->
                    <?= $html_show_my_order ?>

                </tbody>
            </table>
        </div>
    </div>
    <link rel="stylesheet" href="asset/css/vieworder.css"><br><br>
</div>