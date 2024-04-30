<?php
include('control.php');
$get_data=new data_admin();
$delete=$get_data->delete_category($_GET['del']);
if($delete){ 
    echo "<script> alert('Đã xóa sản phẩm')</script>";
    echo "<script>window.location.href = 'categories_select.php';</script>";
}
else echo "Not finish";
?>