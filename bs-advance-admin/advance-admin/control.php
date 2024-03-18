
<?php
include('connect.php');
class data_user {
public function select_user($user)
{
    global $conn;
    $select="select * from user where username='$user'"; 
    //echo $select;
    $run=mysqli_query($conn,$select);
    return $run;
}
public function register($name, $pass, $add, $ava, $gen, $hob, $email)
{
    global $conn;
    $insert="insert into user(username, password, address, avatar, gender, hobby, email)
    values('$name', '$pass', '$add', '$ava', '$gen', '$hob', '$email')";
    //echo $insert;
    $run=mysqli_query($conn,$insert);
    return $run;
}
public function login($user, $pass){
        global $conn;
        $select ="select * from user where username ='$user' and password ='$pass'";
        $run = mysqli_query($conn,$select);
        return $run;
    }

}
class data{
        public function insert_category($name, $description)
        {
            global $conn;
            $insert="insert into category(NameCatye, Description)
            values('$name','$description')";
            $run=mysqli_query($conn,$insert);
            return $run;
        }
        public function select_category(){
            global $conn;
            $sql="Select * from category ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
    public function insert_product($name,$num,$pic,$cate,$date,$price,$des){
          global $conn;
            $insert="insert into product(namepro, numberpro,picture,categorypro,datepro,pricepro,despro)
            values('$name','$num','$pic','$cate','$date','$price','$des')";
            // echo $insert;
            $run=mysqli_query($conn,$insert);
            return $run;

}
    public function select_product(){
        global $conn;
        $select = "SELECT * FROM product ";
        $run=mysqli_query($conn,$select);
        return $run;
                                        }
     public function select_product_id($id){
        global $conn;
        $select = "SELECT * FROM product WHERE id_pro = '$id'";
        $run=mysqli_query($conn,$select);
        return $run;
       }
   
       public function update_product($name, $num, $pic,$cate,$date,$price,$des,$id){
          global $conn;
            $update = "UPDATE product SET
            namepro='$name', 
            numberpro='$num',
            picture='$pic',
            categorypro='$cate',
            datepro='$date',
            pricepro='$price',
            despro='$des' 
            WHERE id_pro = '$id'";
            echo $update;
            $run=mysqli_query($conn,$update);
            return $run;
    }
       public function delete_product($id){
            global $conn;
            $sql="delete from product where id_pro= '$id' ";//id là số nên k cần nháy
            $run=mysqli_query($conn,$sql);
            return $run;
        }


            }
?>

