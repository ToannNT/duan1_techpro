<?php

use PHPMailer\PHPMailer\Exception;

function guiHoaDon($email,$dienthoai, $diachi, $hoten, $tongthanhtoan, $ngaydathang,$voucher , $giamgiahoivien, $ship)
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
        $mail->Subject = 'Thư gửi hoá đơn';

        $i=0;
        $tongtien=0;
        $html_donhang='';
        if (isset($_SESSION['giohang']) && ($_SESSION['giohang'] != "")) {
            foreach ($_SESSION['giohang'] as $item) {              
                extract($item);
                if($s_status == 1){
                    $html_donhang.='<tr>
                                        <td>'.$name.'</td>
                                        <td>'.$quantity.'</td>
                                        <td>'.number_format($price,0,'.',',').'</td>
                                        <td>'.number_format($price*$quantity,0,'.',',').'</td>
                                    </tr>';
                    $tongtien+=$price*$quantity;
                }
            }
        } else {
                $html_donhang.='<tr>
                                    <td>'.$name.'</td>
                                    <td>'.$quantity.'</td>
                                    <td>'.number_format($price,0,'.',',').'</td>
                                    <td>'.number_format($price*$quantity,0,'.',',').'</td>
                                </tr>';
                        $tongtien+=$price*$quantity;
        }
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
                    <div style="float: left;" class="col-6"> <img src="images/menu/logo/1.jpg" alt=""></div>
                    <div style="float: right;" class="col-6">
                        <h3>HOÁ ĐƠN #12345</h3>
                        <p>Ngày Tháng Năm</p>
                    </div>
                </div>
        
                <h1 style="text-align: center;">HOÁ ĐƠN</h1>
        
                <div>
                    <span>Tên khách hàng: '.$hoten.'</span>
                    <p>Điện thoại khách hàng: '.$dienthoai.'</p>
                    <p>Địa chỉ khách hàng: '.$diachi.'</p>
                </div>
                <table>
                    <tr>
                        <th class="col-4"> <h4 >Tên</h4></th>
                        <th class="col-2"> <h4 >Số lượng</h4></th>
                        <th class="col-3"> <h4 >Đơn giá</h4></th>
                        <th class="col-3"> <h4 >Thành tiền</h4></th>
                        
                    </tr>
                    '.$html_donhang.'
                </table>
                <div style="text-align: right;">
                    <p>Tổng cộng : '.$tongtien.'</p>
                    <p>Vouncher : '.$voucher.'</p>
                    <p>Hội viên : '.$giamgiahoivien.'</p>
                    <p>Phí vận chuyển : '.$ship.'</p>
                    <h3 style="color: #0C2F4E;">TỔNG THANH TOÁN : '.$tongthanhtoan.'</h3>
                </div>
                <div>
                    <div><h2>THÔNG TIN THANH TOÁN</h2></div>
                    <div style="float: left ">
                        <p>Ngày thanh toán : '.$ngaydathang.'</p>
                    </div>
                    <div style="float: right;margin-right:20%;">
                        <p>SĐT</p>
                        <p>EMAIL</p>
                        <p>Địa chỉ</p>
                    </div>
                </div>
            </div>   
        </body>
        </html>
            ';
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
