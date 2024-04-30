<?php

include("../admin/bs-advance-admin/PHPMailer/src/Exception.php");
include("../admin/bs-advance-admin/PHPMailer/src/Exception.php");
//include("./PHPMailer/src/DSNConfigurator.php");
include("../admin/bs-advance-admin/PHPMailer/src/POP3.php");
include("../admin/bs-advance-admin/PHPMailer/src/SMTP.php");
//include("./PHPMailer/src/OAuthTokenProvider.php");
include("../admin/bs-advance-admin/PHPMailer/src/OAuth.php");
include("../admin/bs-advance-admin/PHPMailer/src/PHPMailer.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $mail = new PHPMailer(true);
  try{
    $mail->SMTPDebug =0;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "nguyenminhtoan2712py@gmail.com";
    $mail->Password ="tjjkvaqbytitdibq";
    $mail->SMTPSecure ="tls";
    $mail->Port = 587;
    $mail->CharSet ="UTF-8";
    $mail->setFrom("nguyenminhtoan2712py@gmail.com");
    $mail->addAddress("trantoanthang2712py@gmail.com", "Toan sThang");
    $mail->isHTML(true);
    $mail->Subject = "thank kiu";
    $mail->Body = "cam on da quan tam den noi dung website";
    
    $mail->send();
    echo " Email has been sent";
  }catch(Exception $i){
    echo "Messeage could not be sent . Mailer Error", $mail->ErrorInfo;
  }
  
  
  ?>



</body>
</html>
