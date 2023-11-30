<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['productId']) && isset($_POST['s_status'])) {
        $productId = $_POST['productId'];
        $newStatus = (int)$_POST['s_status'];

        // Xử lý cập nhật trạng thái ở đây (ví dụ: lưu vào session)
        // $_SESSION['giohang'][$productId]['s_status'] = $newStatus;


        foreach ($_SESSION['giohang'] as &$item) {
            if ($item['idpro'] == $productId) {
                $item['s_status'] = $newStatus;
            }
        }

        // Phản hồi về client
        echo json_encode(['success' => true]);
        exit;
    }
}

// Trả về lỗi nếu có lỗi trong yêu cầu
echo json_encode(['success' => false]);
