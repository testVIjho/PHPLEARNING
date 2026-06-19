<?php
$serverName = 'localhost';
$userName = 'root';
$password ='';
$dbName ='loginsystem';
$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
   die("connection failed".mysqli_connect_error());
}
?>