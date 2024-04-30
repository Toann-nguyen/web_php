
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">Our Fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <?php
                  if(!empty($_SESSION['user'])){
                    echo "<p class='nav-link'>"."HELLO: ".$_SESSION['user']."<a class='nav-link' href='logout.php'>Thoát</a>"."</p>";
                  }
                  else echo "<a class='nav-link' href='login_contact.php'>Login</a>"
                  ?>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
         FRESH FRUIT
        </h2>
        <hr>
      </div>
    </div>
    <div class="container-fluid">
      <div class="fruit_container">
        <?php
        include('../admin/bs-advance-admin/advance-admin/control.php');
        $get_data = new data();
        if(isset($_GET['or'])){
        $select=$get_data->select_product_id($_GET['or']);
        }
        ?>
      <form action="" role="form" method="POST" enctype="multipart/form-data">
        <table class="table table-stripper">
          <thead>
            <tr>
              <th>Tên hàng</th>
              <th>Hình ảnh</th>
              <th>Đơn giá</th>
              <th>Số lượng(nhập số lượng muốn mua)</th>
              <th>Option</th>
            </tr>
          </thead>
          <tr>
            <?php
            foreach($select as $se)
          ?>
            <td><?php echo $se['namepro']?></td>
            <td><img src="../admin/bs-advance-admin/advance-admin/upload/<?php echo $se['picture'] ?>" 
              style="width: 200px; height: 200px;"></td>
            <td><?php echo $se['pricepro']?></td>
            <td><input
                  type="number"
                  name="txtnumber"
                  min="1"
              value="<?php echo isset($_POST['txtnumber']) ? $_POST['txtnumber'] : '' ?>" placeholder="1">
                <?php echo "Số lượng tối đa có: ".$se['numberpro']?>
            </td>
            <td> <input
            href=""
             type="submit"
                  name="txtup"
                   style="padding:20px 20px; border: none;"
            value="Update"></td>
            <td> <input type="submit" name="txtdel" 
            style="padding:20px 20px; border: none;"
            value="Delete">
            <?php
            if(isset($_POST['txtdel'])){
              echo "<script>window.location.href = 'fruit.php';</script>";    
            }
            ?>
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3" align="center">
               Tổng tiền
            </td>
            <td colspan="3">
              <?php
              if(isset($_POST['txtup']))
              {
                if($_POST['txtnumber']<=0) echo"<script> alert('Bạn không được nhập sô âm!!')</script>";
                else{
                  if($_POST['txtnumber'] > $se['numberpro'])
                  echo "Bạn đã chọn quá số lượng cho phép!!";
                  else {
                    $total=$se['pricepro'] * $_POST['txtnumber'];
                    echo $total."VND";
                  }
                }
              }
              ?>
              </td>
          </tr>
        <tr>
          <td colspan="3"></td>
          <td><input type="submit" 
           style="padding:20px 20px; border: none;" 
          name="txtsub" value="Xác nhận"></td>
          <td></td>
        </tr>
        </table>
      </form>
      <?php
      if(isset($_POST['txtsub']))
      {
        if($se['numberpro']==0) echo "<script> alert('Sản phẩm bạn mua đã hết.Bạn vui lòng chọn sản phẩm khác!')</script>";
        else
        {
          if(empty($_SESSION['user']))
          {
            echo "<script>
            if(confirm('Bạn phải đăng nhập để thực hiện đặt hàng')) window.loaction('login.php')
              </script>";
          }
          else
          {
            if($_POST['txtnumber']>$se['numberpro'])
            echo "<script>alert('Số lượng không đủ, vui lòng chọn lại!!')</script>";
            else
            {
              
              $_SESSION['product']=$se['id_pro'];
              $number_total = $se['numberpro'] - $_POST['txtnumber'];
              $update=$get_data->update_number($number_total,$se['id_pro']);
              $insert=$get_data->insert_order(
                                              $se['id_pro'],
                                              $_SESSION['user'],
                                              $se['picture'],
                                              $_POST['txtnumber'],
                                             $se['pricepro']*$_POST['txtnumber'],
                                              0);
              if($insert) {
                echo "<script>window.location.href = 'check_order.php?or=".$se['id_pro']."'</script>";
              }
              else echo"Không thành công!!!!";
            }
          }
        }
      }
      ?>
    </div>
    </div>
  </section>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>