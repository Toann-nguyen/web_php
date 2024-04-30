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
                    echo "hello: ".$_SESSION['user']."<a class='nav-link' href='logout.php'>Thoát</a>"."</p>";
                  }
                  else echo "<a class='nav-link' href='login_contact.php'>Login</a>"
                  ?>    
                </a>
                 
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


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Order
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-10 offset-lg-2 col-md-5 offset-md-1">
            <!-- php -->
               <?php 
                   include('../admin/bs-advance-admin/advance-admin/control.php');
                   $get_data = new data();
                   if(isset($_POST['or']))
                   $select = $get_data->select_product_id($_POST['or'])
                ?> 
            <form action="" role="form" method="POST" enctype="multipart/form-data">
              <table class="table table-stripper"> 
                 <tr>
                  <th colspan="6">Order</th>
                </tr>
                <tr>
                  <th>Tên hàng</th>
                  <th>Hình ảnh</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th></th>
                  <th></th>
                </tr>
                <?php 
                  foreach($select as $se){
                ?>
                <tr>
                  <td><?php echo $se['namepro'] ?></td>
                  <td><img src="../admin/bs-advance-admin/advance-admin/upload/<?php echo $se['picture'] ?>" 
              style="width: 200px; height: 200px;"></td>
                  <td><?php echo $se['pricepro']?></td>
                  <td><input 
                  type="number" 
                  id="quantity" 
                  name="txtnumber"
                  min="1"
                  value="">
                  <?php echo "Số lượng tối đa:".$se['numberpro']?>
                  </td>
                  <td >
                  <button 
                  type="submit"
                  name="txtup"
                  value="update"
                   style="padding:20px 20px; border: none;" 
                  onclick="updateOrder()">Update
                  </button>
                 </td>
                  <td >
                  <button 
                  type="submit"
                   name="txtdel"
                   value="delete"
                   style="padding:20px 20px; border: none;" 
                    onclick="deleteOrder()">Delete</button>
                </td>
                <?php 
                  }
                ?>
                <!-- kiem tra neu delete thi quay lai trang fruit.php -->
                <?php
                if(isset($_POST['txtdel'])){
                  header('location:fruit.php');
                }
                ?>
                </tr>
                <tr>
                  <td algin ="center">Tổng tiền</td>
                  <td><?php if(isset($_POST['txtup'])){
                    if($_POST['txtnumber']<=0){
                      echo "<script> alert('Vui long nhap so luong lon hon 0'); </script>";
                    }
                  
                    else{
                          if($_POST['txtnumber']>$se['numberpro']) 
                          {
                            echo "<script> alert('Vui lòng nhập lại số lượng nhỏ hơn kho '); </script>";
                          }
                           else{
                                 $total= $se['pricepro']  *$_POST['txtnumber'];
                                  echo $total."VNĐ";
                        
                      }
                    }
                  } ?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <?php 
                  // neu nut update duoc bam thi tiep tuc kiem tra so luong txtnumber co nho hon 0 khong thì alert yeu cau nhap lai khong thi kiem tra txtnumber > numberpro trong database khong neu co thi nhap lai khong thi tinh tong tien
                  ?>
                </tr>
                 
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th class="btn">
                    <button 
                    name="txtsub"
                    style="padding:20px 4rem; border: none;"
                     type="sumbit"
                    >Xác nhận </button>
                  </th>
                  <td></td>
                  <td></td>
                </tr>
                </table>
            </form>
           <?php
      // if(isset($_POST['txtsub']))
      // {
      //   if($se['numberpro']==0) echo "<script> alert('Sản phẩm bạn mua đã hết.Bạn vui lòng chọn sản phẩm khác!')</script>";
      //   else
      //   {
      //     if(empty($_SESSION['user']))
      //     {
      //       echo "<script>
      //       if(confirm('Bạn phải đăng nhập để thực hiện đặt hàng')) window.loaction('login.php')
      //         </script>";
      //     }
      //     else
      //     {
      //       if($_POST['txtnumber']>$se['numberpro'])
      //       echo "<script>alert('Số lượng không đủ, vui lòng chọn lại!!')</script>";
      //       else
      //       {
      //         $get_data_check_order = new data_product();
      //         $_SESSION['product']=$se['id_pro'];
      //         $number_total = intval($se['numberpro']) - intval($_POST['txtnumber']);
      //         $update=$get_data_check_order->update_number($number_total,$se['id_pro']);
      //         $insert=$get_data_check_order->insert_order(
      //                                         $se['id_pro'],
      //                                         $_SESSION['user'],
      //                                         $_POST['txtnumber'],
      //                                         $se['pricepro'],
      //                                         0);
      //         if($insert) {
      //           echo "<script>window.location.href = 'check_order.php';</script>";
      //         }
      //         else echo"Không thành công!!!!";
      //       }
      //     }
      //   }
      // }
      ?>
          </div>
          <!-- <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


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