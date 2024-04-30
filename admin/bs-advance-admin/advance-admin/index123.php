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
                                <a href="register.php"><i class="fa fa-toggle-on"></i>Select check order in Nimo</a>
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
            <div class="col-md-12 col-sm-12 col-xs-24">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
<div class="form-group">
                                            <label>User name</label>
                                            <input class="form-control" type="text" name="txtuser">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" name="txtpass">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>re_password</label>
                                            <input class="form-control" type="password" name="txtrepass">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="Male" name="txtgen"> Male
</label>
<label>
<input type="radio" value="feMale" name="txtgen"> FeMale
</label>
<p class="help-block">Help text here.</p>
</div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>hobby</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="game" name="txtcheck[]"> game
</label>
<label>
<input type="checkbox" value="football" name="txtcheck[]"> Football
</label>
<label>
                                                    <input type="checkbox" value="code" name="txtcheck[]"> code
</label>
<p class="help-block">Help text here.</p>
</div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>avatar</label>
                                            <input class="form-control" type="file" name="txtfile">
                                     <p class="help-block">Help text here.</p>
                                        </div>

                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="text" name="txtemail">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <select name="txtadd" class="form-control">
                                            <option value="Ha Noi">Ha Noi</option>
                                            <option value="Ha Noi">Hai Duong</option>
                                            <option value="Ha Noi">Phu Tho</option>
                                            <option value="Ha Noi">Nam Dinh</option>

                                            </select>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="txtsub">Register</button>

                                    </form>

                                <?php
                                    include('control.php');
                                    $get_data=new data_user();
                                    $c_check="";
                                    foreach($_POST['txtcheck'] as $i_check)
                                    {
                                        $c_check.=$i_check;
                                    }
                                    move_uploaded_file($_FILES['txtfile']['tmp_name'],'upload/'.$_FILES['txtfile']['name']);
                                    $se_user=$get_data->select_user($_POST['txtuser']);
                                    if(isset($_POST['txtsub']))
                                    {
                                        if(empty($_POST['txtuser'])|| empty($_POST['txtpass']))
                                        echo "<script>alert('Tai khoan da dc dung, hay chon tk khac')</script>";
                                    else 
                                    {
                                        if($_POST['txtpass']!=$_POST['txtrepass'])
                                        echo "<script>alert('2 mk ko giong nhau')</script>";
                                    else 
                                    {
                                        $register_user=$get_data->register($_POST['txtuser'], $_POST['txtpass'], $_POST['txtadd'], $_FILES['txtfile']['name'], $_POST['txtgen'], $c_check, $_POST['txtemail']);
                                        if($register_user) echo "<script>alert('them moi thanh cong')</script>";
                                        else echo "<script>alert('them moi ko thanh cong')</script>";
                                    }
                                    }
                                  
                                }
                            ?>
                            </div>
                        </div>
                            </div>

    <!-- /. WRAPPER  -->
<div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
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


</body>
</html>