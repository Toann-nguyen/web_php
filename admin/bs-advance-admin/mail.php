<?php
include("PHPMailer/src/Exception.php");
// include("./PHPMailer/src/Exception.php");
//include("./PHPMailer/src/DSNConfigurator.php");
include("PHPMailer/src/POP3.php");
include("PHPMailer/src/SMTP.php");
//include("./PHPMailer/src/OAuthTokenProvider.php");
include("PHPMailer/src/OAuth.php");
include("PHPMailer/src/PHPMailer.php");


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
  class email{
    public function push_email($email , $password){
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
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Mật khẩu của bạn".$email;
    $mail->Body = "<strong>Mật khẩu của bạn: </strong>".$password;
    
    $mail->send();
    echo " Email has been sent";
    }catch(Exception $i){
      echo "Messeage could not be sent . Mailer Error", $mail->ErrorInfo;
    }
  
  
    }
  }
 
  ?>



</body>
</html>
