<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'school';
$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$con){
    echo'something went wrong';
}
?>