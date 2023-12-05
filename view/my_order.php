<?php
if (isset($_SESSION['s_user']) && !empty($_SESSION['s_user'])) {
    $html_show_bill = '
    <div class="row justify-content-between mt-3">
    <div style="margin-top: 1%;" class="col-md-3">

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
    </div>
    <div style="margin-top: 0.1%;" class="col-md-9">
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
        </div>
        <table style=" margin: 0px;" class="table table-bordered custom-table">
            <thead>
                <tr class="tr_th">
                    <th scope="col">Stt</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr_td">
                    <th scope="row">1</th>
                    <td><img class="img-sp" src="./view/layout/images/product/small-size/1.jpg" alt=""></td>
                    <td>Màn hình EZ2224123</td>
                    <td>Oc 7, 2023, 9:23 pm</td>
                    <td>HJUXA&547</td>
                    <td>10,000,000đ</td>
                    <td><span>Đang kiểm tra</span></td>
                    <td><a href="#">Xem chi tiết đơn hàng</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img class="img-sp" src="./view/layout/images/product/small-size/1.jpg" alt=""></td>
                    <td>Màn hình EZ2224123</td>
                    <td>Oc 7, 2023, 9:23 pm</td>
                    <td>HJUXA&547</td>
                    <td>10,000,000đ</td>
                    <td><span>Đang kiểm tra</span></td>
                    <td><a href="#">Xem chi tiết đơn hàng</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img class="img-sp" src="./view/layout/images/product/small-size/1.jpg" alt=""></td>
                    <td>Màn hình EZ2224123</td>
                    <td>Oc 7, 2023, 9:23 pm</td>
                    <td>HJUXA&547</td>
                    <td>10,000,000đ</td>
                    <td><span>Đang kiểm tra</span></td>
                    <td><a href="#">Xem chi tiết đơn hàng</a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
    ';
} else {
    $html_show_bill = '<h4 style="margin-top: 50px; color: red;">Vui lòng Đăng nhập<br> để xem đơn hàng của bạn!</h4>';
}
?>

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

    <?= $html_show_bill ?>

    <link rel="stylesheet" href="asset/css/vieworder.css"><br><br>
</div>