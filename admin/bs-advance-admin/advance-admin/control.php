
<?php
include('connect.php');
class data_user{
public function select_user_foeget_password($email){
    global $conn;
   
    $select="select password  from user where email='$email'"; 
    
    $run=mysqli_query($conn,$select);
    return $run;
}
        public function send_pass($email){
        global $conn;
        $send="select password,email from user where email= '$email'";
        $result = mysqli_query($conn,$send);
        $row = mysqli_fetch_assoc($result);
        return $row['password'];
    }
public function select_user($user)
{
    global $conn;
    $select="select * from user where username='$user'"; 
    echo $select;
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
        $select ="SELECT  username ,password FROM user WHERE username='$user' AND password ='$pass'";
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
  public function insert_order($id,$user,$pic,$number,$total,$tinhtrang){
        global $conn;
        $insert_od="INSERT INTO order_product(id_pro,username,picture,number,total,tinhtrang) 
                    values('$id','$user','$pic','$number','$total','$tinhtrang')";
                    echo $insert_od;
        $run = mysqli_query($conn,$insert_od);
        return $run;
    }
    public function update_number($num,$id){
        global $conn;
        $up="update product set numberpro='$num' where id_pro='$id'";
        return mysqli_query($conn,$up);
    }

            }
    class data_contact{
        public function select_contact(){
            global $conn;
            $sql="SELECT * FROM contact ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function insert_contact($name, $email, $phone, $message, $password){
            global $conn;
            $insert="INSERT INTO contact(Full_Name, email, phone_number, message, password) 
                    VALUES ('$name','$email','$phone','$message','$password')";
                    
            $run=mysqli_query($conn,$insert);
            return $run;
           
        }
        public function delete_product($id){
            global $conn;
            $sql="delete from contact where id_contact= '$id' ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function query_password($email){
            global $conn;
            $sql ="SELECT * FROM contact WHERE email= '$email'";
             $run=mysqli_query($conn,$sql);
            return $run;
        }
    }
class data_product{

    public function select_order($name , $id){
        global $conn;
        $sql = "SELECT * FROM  (product INNER JOIN order_product ON product.id_pro=order_product.id_pro)
                    INNER JOIN user on order_product.username=user.username
                  and order_product.id_pro='$id'";
                //   echo $sql;
                 $run = mysqli_query($conn,$sql);
                                 return $run;
    }
 
    public function update_number($num,$id){
        global $conn;
        $up="update product set numberpro='$num' where id_pro='$id'";
        return mysqli_query($conn,$up);
    }
    public function select_product_testimonial(){
         global $conn;
        $sql="  SELECT order_product.picture,
                    order_product.id_pro,
                    order_product.username,
                    order_product.number,
                    order_product.money,
                    order_product.total
                FROM product 
                INNER JOIN order_product ON product.id_pro = order_product.id_pro 
                WHERE number = (SELECT max(number) FROM order_product)
                LIMIT 3;";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}

class data_admin{
    
           public function send_pass_admin($email){
        global $conn;
        $send="select password,email from user where email= '$email'";
        $result = mysqli_query($conn,$send);
        $row = mysqli_fetch_assoc($result);
        return $row['password'];
    }
    public function select_admin_foeget_password($email){
    global $conn;
   
    $select="select password  from user where email='$email'"; 
    
    $run=mysqli_query($conn,$select);
    return $run;
}
    public function report(){
         global $conn;
        $sql = "SELECT id_order,id_pro,picture,number,total,tinhtrang, MONTH(date_order_pro) AS month, COUNT(*) AS count FROM order_product GROUP BY MONTH(date_order_pro) LIMIT 2;";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_category(){
          global $conn;
        $sql = "SELECT * FROM  category";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_id_category($id){
        global $conn;
        $sql="select * from category where ID_category=$id";
        return mysqli_query($conn, $sql);
    }
     public function up_category($id,$name,$des){
        global $conn;
        $sql="UPDATE category SET NameCatye='$name', Description='$des' where ID_category=$id";
        return mysqli_query($conn,$sql);
    }
     public function delete_category($id)
    {
    global $conn;
    $delete="delete from category where ID_category=$id"; 
    $run=mysqli_query($conn,$delete);
    return $run;
    }

    // select data order product
    public function select_order_product(){
        global $conn;
        $sql= "SELECT * FROM  (product 
        INNER JOIN order_product ON product.id_pro=order_product.id_pro)
        INNER JOIN user on order_product.username=user.username";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    public function select_order_pro_id($id){
        global $conn;
        $sql = "SELECT * FROM  (product INNER JOIN order_product ON product.id_pro=order_product.id_pro)  
                WHERE id_order ='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_order_pro($tinhtrang,$id){
        global $conn;
        $sql ="UPDATE order_product SET tinhtrang='$tinhtrang' WHERE id_order='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>

