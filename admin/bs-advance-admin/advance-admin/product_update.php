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
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                               <div class="inner-text">
                                <?php
                                if(!empty($_SESSION['user'])){
                                    echo "<p class='nav-link'>"."HELLO: ".$_SESSION['user']."<a class='nav-link' href='logout.php'>Thoát</a>"."</p>";
                                }
                                else echo "<a class='nav-link' href='login.php'>Login</a>"
                                ?>
                            <br />
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="select_order_admin.php"><i class="fa fa-toggle-on"></i>Select check order in Nimo</a>
                            </li>
                            <li>
                                <a href="register.php"><i class="fa fa-toggle-on"></i>register</a>
                            </li>
                            <li>
                                <a href="category.php"><i class="fa fa-toggle-on"></i>category_Insert</a>
                            </li>
                            <li>
                                <a href="category_select.php"><i class="fa fa-toggle-on"></i>Category select</a>
                            </li>
                            <li>
                                <a href="contact_select.php"><i class="fa fa-bell "></i>Contact</a>
                            </li>
                             <li>
                                <a href="report.php"><i class="fa fa-circle-o "></i>Reprot</a>
                            </li>
                             <li>
                                <a href="register.php"><i class="fa fa-code "></i>Register</a>
                            </li>
                             <li>
                                <a href="prodcut_select.php"><i class="fa fa-bug "></i>Product</a>
                            </li>
                             <li>
                                <a href="select_order_admin.php"><i class="fa fa-bug "></i>Check Order With Admin</a>
                            </li>
                             <li>
                                <a href="login.php"><i class="fa fa-edit "></i>Login</a>
                            </li>
                             <li>
                                <a href="logout.php"><i class="fa fa-eyedropper "></i>Logout</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Components</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Social</a>
                            </li>
                            
                             <li>
                                <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a class="active-menu" href="table.html"><i class="fa fa-flash "></i>Data Tables </a>
                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                     <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           PRODUCT
                        </div>
                        <div class="panel-body">
                        <?php
     include('control.php');
     $get_data=new data();
     if(isset($_GET['up'])){
     $select_pro=$get_data->select_product_id($_GET['up']);
    //lấy dữ liệu từ trang select
    //$_GET['up']là giá trị truyền từ trang select sang
    foreach ($select_pro as $i_pr){
    ?>
                            <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>NAME PRODUCT</label>
                                            <input class="form-control" type="text" name="txtNP" value="<?php echo $i_pr['namepro']?>" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>NUMBER PRODUCT</label>
                                            <input class="form-control" type="text" name="txtNUP" value="<?php echo $i_pr['numberpro']?>" >
                                            
                                        </div>


                                 <div class="form-group">
                                            <label>PICTURE PRODUCT</label>
                                            <input class="form-control" type="File" name="txtPIP" value="<?php echo $i_pr['picture']?>" ></div>
                                <div class="form-group">
                                            <label>CATEGORY PRODUCT</label>
                                            <select class="form-control" name="txtCP">
                                                <option value="<?php echo $i_pr['categorypro'];?>"><?php echo $i_pr['categorypro'];?></option>
                                                <?php
                                                 
                                                 $se_cate=$get_data->select_category();
                                                 foreach ($se_cate as $i_cate) {
                                                ?>
                                                <option value="<?php echo $i_cate['NameCatye']?>">
                                                    <?php echo $i_cate['NameCatye']?>
                                                </option>
                                                    <?php
                                                 }
                                                ?>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>DATE PRODUCT</label>
                                            <input class="form-control" type="date" name="txtDP" value="<?php echo $i_pr['datepro']?>" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>PRICE PRODUCT</label>
                                            <input class="form-control" type="text" name="txtPP" value="<?php echo $i_pr['pricepro']?>" >
                                            
                                        </div>

                                        </div>
                                            <div class="form-group">
                                            <label>DESCRIPTION PRODUCT</label>
                                            <textarea class="form-control" rows="3" name="txtDEP" value="<?php echo $i_pr['despro']?>" ></textarea>
                                        </div>
                                  
                                 
                                        <button name="txtsub" type="submit" class="btn btn-info">SEND</button>

                                    </form>
                            </div>
                        </div>
                            </div>

    <!-- /. WRAPPER  -->
    
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
<?php
    }
}
    
    if(isset($_POST['txtsub'])){// kiểm tra nút đăng ký đã ấn hay chưa
        $up=$get_data->update_product($_POST['txtNP'],$_POST['txtNUP'],$_FILES['txtPIP']['name'],$_POST['txtCP'],$_POST['txtDP'],$_POST['txtPP'],$_POST['txtDEP'], $_GET['up']);
     
        if($up) {
            echo"<script> alert('Thanh cong')
        window.location='prodcut_select.php';
        </script>";
            
        
        }
        else echo"<script>alert('Khong thuc thi duoc')</script>";

    }




?>

</body>
</html>