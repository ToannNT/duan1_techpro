<?php

use PHPMailer\PHPMailer\Exception;

$loi = "";
if (isset($_POST["nutguiyeucau"]) == true) {
    $email = $_POST['email'];
    $conn = new PDO("mysql:host = localhost;dbname=duan1;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM user WHERE email =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $count = $stmt->rowCount();
    if ($count == 0) {
        $loi = "Email bạn nhập chưa được đăng ký";
    } else {
        $matkhaumoi = substr(md5(rand(0, 9999999)), 0, 8);
        $sql = "UPDATE user SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$matkhaumoi, $email]);
        GuiMatKhauMoi($email, $matkhaumoi);
    }
}
?>
<?php
function GuiMatKhauMoi($email, $matkhaumoi)
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
        $noidungthu = '
            <head>
                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
        
                    th, td {
                        padding: 8px;
                        text-align: center;
                        border-bottom: 3px solid #ddd;
                    }   

                </style>
            </head>
        <body>
            <div>    
                <div style="margin-bottom: 20px;>
                    <div class="col-6"> <img src="cid:logo" alt="Techpro Logo" style="display: block;width: 100px;margin: 0 auto;"></div>
                </div> <br>
                   <div>
                        <p>Xin chào quý khách, mật khẩu của bạn đã được đặt lại thành công</p> <br>
                        <p> Mật khẩu mới của bạn là ' . $matkhaumoi . '.Vui lòng không chia sẽ mật khẩu với bất kỳ ai </p><br>
                   </div>
                <div>
                    <div style="float: right;margin-right:20%;">
                        <p>Công Ty TECHPRO</p>
                        <p>EMAIL: techpro.com</p>
                        <p>Địa chỉ: Công viên phần mềm Quang Trung</p>
                    </div>
                </div>
            </div>   
        </body>
        </html>
            ';
        $noidungthu = "<p>Mật khẩu của bạn đã được đặt lại. 
                 Mật khẩu mới của bạn là {$matkhaumoi} </p>
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


?>



<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Quên mật khẩu</li>
            </ul>
        </div>
    </div>
</div>
<div class="error404-area pt-30 pb-30">
    <div class="formpass">
        <form method="post" class="forgotmk-wrapper text-center ptb-50 pt-xs-20">
            <div class="text">
                <h5>Quên mật khẩu</h5>
            </div>
            <?php if ($loi != "") { ?>
                <div class="alert alert-danger"><?= $loi ?></div>
            <?php } ?>
            <div class="text1 col-md-11 col-12 mb-20">
                <label> Nhập Email :</label>
                <input value="<?php if (isset($email) == true) echo $email ?>" class="mb-0" id="email" name="email" type="email" placeholder="Nhập Email">
            </div>
            <div class="text2">
                <label style="margin-left: 9px;">Không có tài khoản?<a href=""> Đăng ký ngay</a></label><br>
                <label>Đã có tài khoản?<a href=""> Đăng nhập ngay</a></label>
            </div>
            <button type="submit" name="nutguiyeucau" value="nutgui" class="btn btn-primary mb-20">Xác nhận</button>
        </form>
    </div>
</div>