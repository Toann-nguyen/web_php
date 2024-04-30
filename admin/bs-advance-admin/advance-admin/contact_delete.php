<?php 
  include('control.php');

 $get_data= new data_contact();
       $del=$get_data->delete_product($_GET['del']);
       if($del) echo"<script>alert('finished') 
       window.location='contact_select.php'</script>";
        else echo"<script>alert('Not finished')</script>";
?>