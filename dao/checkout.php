<?php

use PHPMailer\PHPMailer\Exception;

function guiHoaDon($email, $hoten, $tongthanhtoan, $ngaydathang)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'thanhtoan28740@gmail.com'; // SMTP username
        $mail->Password = 'wqrx wxbj kxer kdsk';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('thanhtoan28740@gmail.com', 'TechPro');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi mật khẩu mới';
        $noidungthu = "<div><p>Xin chào anh/chị {$hoten} .Cám ơn quý khách đã mua hàng. 
                 Tổng số tiền bạn phải thanh toán là {$tongthanhtoan}đ. Ngày đặt hàng : {$ngaydathang} </p></div>
            ";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}
