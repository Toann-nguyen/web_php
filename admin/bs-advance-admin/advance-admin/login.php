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
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name = "txtuser_login" placeholder="Your Username ">
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name ="txtpass_login"  placeholder="Your Password">
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="forget_pass_by_admin.php" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <!--<a href="index123.html" class="btn btn-primary ">Login Now</a>-->
                                     <button class="btn btn -primary" name ="txtsub"><a            
                                     class="btn btn-primary ">Login now</a></button>
                                    <hr />
                                    Not register ? <a href="register.php" >click here </a> or go to <a href="index123.php">Home</a> 
                                    </form>

<?php
include('control.php');
$get_data = new data_user();
 $login=$get_data->login($_POST['txtuser_login'],$_POST['txtpass_login']);
if(isset($_POST['txtsub'])){
    if(!isset($_POST['txtuser_login']) || !isset($_POST['txtpass_login']) || empty($_POST['txtuser_login']) || empty($_POST['txtpass_login'])){
        echo "<script> alert('Bạn chưa nhập đủ dữ liệu!!')</script>";
    } else {
        if(mysqli_num_rows($login)==1){
            $_SESSION['user']=$_POST['txtuser_login'];
            echo "<script> alert('Đăng nhập thành công ');
                        window.location='register.php'
                    </script>";
          ;
        } else {
            echo "<script> alert('Đăng nhập không thành công')</script>";
        }
    }
}
?>

                            </div>
        </div>
    </div>

</body>
</html>
