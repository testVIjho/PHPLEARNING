<?php
include('includes/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO basic (fname,lname,phone) VALUES('$firstName','$lastName','$phone')";
    $result = mysqli_query($con,$sql);
    if($result){
       header("Location: home.php");
    }else{
        echo'something went wrong';
    }
    
}
  

?>