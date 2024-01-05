<?php
$servername  = 'localhost';
$username = 'root';
$password = 'mysql';
$database= 'sanphamnoithat';

  $conn = new mysqli($servername,$username,$password,$database);
  
if ($conn->connect_error){
    die("Kết nối thất bại:".$conn->connect_error);
}
?>