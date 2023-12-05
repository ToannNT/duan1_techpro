<style>
.body {
    background-color: #f8f9fa;
    padding: 20px 0px;
}

.payment-success {
    max-width: 500px;
    margin: 50px auto;
    border-radius: 10px;
    padding: 30px;
    background-color: #ffffff;
    box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.1);
}

.brand-logo {
    max-width: 100px;
    margin-bottom: 20px;
}

.alert-heading {
    font-size: 32px;
    color: #4CAF50;
    margin-bottom: 20px;
}

.transaction-info {
    align-items: start;
    flex-direction: column;
    display: flex;
    background-color: #f7f7f7;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.transaction-info p {
    margin-bottom: 12px;
    font-size: 18px;
}

.thank-you {
    font-size: 19px;
    color: #4CAF50;
    font-weight: 700;
    margin-bottom: 20px;
}

.footer {
    font-size: 14px;
    color: #6c757d;
    text-align: center;
}
</style>
<?php
if (isset($show_bill)) {
    extract($show_bill);

    if ($pttt == 1) {
        $pttt_t = "Thẻ tín dụng";
    } else if ($pttt == 2) {
        $pttt_t = "Thẻ ATM";
    } else if ($pttt == 3) {
        $pttt_t = "Momo";
    } else {
        $pttt_t = "Thanh toán khi nhận hàng";
    }
}


?>
<div class="body">

    <div class="container">
        <div class="alert payment-success text-center" role="alert">
            <!-- <img src="https://via.placeholder.com/150" alt="Brand Logo" class="brand-logo"> -->
            <h4 class="alert-heading">Thanh toán thành công!</h4>
            <div class="transaction-info">
                <p><strong>Mã giao dịch:</strong> <?= $ma_donhang ?></p>
                <p><strong>Số tiền thanh toán:</strong> <?= number_format($tong, 0, '.', '.') ?>đ</p>
                <!-- <p><strong>Ngày thanh toán:</strong> January 1, 2023</p> -->
                <p><strong>Phương thức thanh toán:</strong> <?= $pttt_t ?></p>
                <!-- <p><strong>Người nhận thanh toán:</strong> Tên người nhận</p> -->
                <p><strong>Email xác nhận:</strong> <?= $email_nguoidat ?></p>
            </div>
            <p class="thank-you">Cám mơn vì đã sử dụng dịch vụ</p>
            <a style="font-weight: 500; text-decoration: underline;" href="index.php?pg=detailed_order">Xem đơn hàng của
                tôi</a>

        </div>
    </div>

</div>