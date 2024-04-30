<?php
include('./assets/connect.php');

global  $conn;
class data_user1 {

public function select_user1($user){
global  $conn;
  $select = "SELECT * FROM user1 where username= $user";
  // echo $select;
  $run = mysqli_query($conn, $select);

}


public function  register1($name , $pass, $add , $ava , $gen , $hob , $email)
{
global  $conn;

$insert = "INSERT INTO user1(id_user, username, password, type, avatar, gender, hobby, email, address)
 VALUES ('$name' ,' $pass',' $add' ,' $ava' ,' $gen' ,' $hob' ,' $email')";
$runsql = mysqli_query($conn, $insert);
}



}

class data_product{
  public function insert_product($name , $number, $pric , $cate , $date , $price , $despro){
    global  $conn;
    $sql_insert = "INSERT INTO `product`(`Name_product`, `Number_product`, `Picture`, `Category_Product`, `Date_Product`, `Price_Product`, `Des_Procduct`)
     VALUES (
      '$name'  ,
      '$number' , 
      '$pric',
      '$cate ' ,
      '$date ', 
      '$price', 
      '$despro'   
)"; echo $sql_insert;
    $run = mysqli_query($conn , $sql_insert);
    return $run;
  }
  public function insert_category($name , $description){
    $insert = "";
  }
}
?>

