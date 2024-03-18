<?php
$server = "localhost";
$user = "root";
$pass = "";
// $database ="webphp";
$database ="php_web";

$conn = mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>
