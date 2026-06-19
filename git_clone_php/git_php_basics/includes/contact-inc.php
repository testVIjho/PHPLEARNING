<?php
include("config.php");
if(isset($_POST['submit'])){
    $firstName = mysqli_real_escape_string($con,$_POST['fname']);
    $lastName = mysqli_real_escape_string($con,$_POST['lname']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
 
 
    $sql = "INSERT INTO contact (fname,lname,phone,email)VALUES('$firstName','$lastName','$phone',$email)";
    $result = mysqli_query($con,$sql);
    header("Location: ../contact.php?success");
}
?>