<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method = "POST" enctype ="multipart/form-data">
                                    <hr />
                                    <h5>Enter SEND PASSWORD</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name = "txtuser_login" placeholder="Your Username ">
                                        </div>
                                     
                                     <!--<a href="index123.html" class="btn btn-primary ">Login Now</a>-->
                                     <button class="btn btn -primary" name ="txtsub"><a            
                                     class="btn btn-primary ">SEND PASSWORD</a></button>
                                    <hr />
                                    </form>

<?php
include('control.php');
include('../mail.php');
$get_data = new data_admin();
if(isset($_POST['txtsub'])){
    $mail = new email();
            
            if (isset($_POST['send_email'])) {
              $email = $_POST['txtemail'];
              $forget_pas = new data_admin();
              
              $select_password_send_email = $forget_pas->select_admin_foeget_password($email);
                      if ($row = mysqli_fetch_assoc($select_password_send_email)) {
                  if (isset($row['password'])) {
                      $email=$_POST['txtemail'];
                      // check email trong database
                      $pass = $forget_pas->send_pass_admin($email);
                      // goi ham gui email 
                      $mail->push_email($email, $pass);
                      echo "alert('Gửi mail thành công')";
                      echo "<script>window.location.href = 'login.php';</script>";
                  } else {
                      echo "<script> alert('Tài khoản email không tồn tại')</script>";
                  }
              }
              // echo $email;
            }

  }
?>

                            </div>
        </div>
    </div>

</body>
</html>
