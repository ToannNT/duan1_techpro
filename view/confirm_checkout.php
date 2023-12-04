<style>
    body {
        background-color: #f8f9fa;
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

<body>

    <div class="container">
        <div class="alert payment-success text-center" role="alert">
            <!-- <img src="https://via.placeholder.com/150" alt="Brand Logo" class="brand-logo"> -->
            <h4 class="alert-heading">Thanh toán thành công!</h4>
            <div class="transaction-info">
                <p><strong>Mã giao dịch:</strong> #123456</p>
                <p><strong>Số tiền thanh toán:</strong> $50.00</p>
                <p><strong>Ngày thanh toán:</strong> January 1, 2023</p>
                <p><strong>Phương thức thanh toán:</strong> Thẻ tín dụng</p>
                <p><strong>Người nhận thanh toán:</strong> Tên người nhận</p>
                <p><strong>Email xác nhận:</strong> example@email.com</p>
            </div>
            <p class="thank-you">Cám mơn vì đã sử dụng dịch vụ</p>
            <a style="font-weight: 500; text-decoration: underline;" href="#">Xem đơn hàng của tôi</a>

        </div>
    </div>

</body>