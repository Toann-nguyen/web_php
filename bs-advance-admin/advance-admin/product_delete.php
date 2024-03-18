<?php
       include('control.php');
       $get_data= new data();
       $del=$get_data->delete_product($_GET['del']);
       if($del) echo"<script>alert('finished') 
       window.location='prodcut_select.php'</script>";
        else echo"<script>alert('Not finished')</script>";//quay lại trang select
        // alert để hiện hộp thoại thông báo
    ?>