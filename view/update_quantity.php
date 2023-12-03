<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý yêu cầu AJAX để cập nhật số lượng sản phẩm
    if (isset($_POST['productId']) && isset($_POST['quantity'])) {
        $productId = $_POST['productId'];
        $newQuantity = (int)$_POST['quantity'];

        // Cập nhật số lượng trong $_SESSION['giohang']
        foreach ($_SESSION['giohang'] as &$item) {
            if ($item['idpro'] == $productId) {
                $item['quantity'] = $newQuantity;

                // Tính toán lại $thanhtien
                $item['thanhtien'] = (int)$item['price'] * (int)$newQuantity;
            }
        }

        // Tính toán lại tổng giá trị giỏ hàng (nếu cần)
        // ...

        // Trả về kết quả (nếu cần)
        echo json_encode(['success' => true]);
        exit();
    }


    if (isset($_POST['ptvc'])) {
        // Lưu giá trị vào session
        $_SESSION['vanchuyen'] = $_POST['ptvc'];

        // Phản hồi cho Ajax rằng đã lưu giá trị thành công
        // echo "Dữ liệu đã được lưu vào session!";
        // exit;
    }
}

// ... (Phần hiển thị giỏ hàng giống như trước)