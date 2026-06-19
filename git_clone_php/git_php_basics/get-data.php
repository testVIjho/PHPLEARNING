<?php
include('includes/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO basic (fname,lname,phone) VALUES('$firstName','$lastName','$phone')";
    $result = mysqli_query($con,$sql);
    if($result){
       header("Location: index.php");
    }else{
        echo'something went wrong';
    }

    // //create a sql injection
    // $firstName = mysqli_real_escape_string($con,$_POST['fname']);
    // $lastName = mysqli_real_escape_string($con,$_POST['lname']);
    // $phone = mysqli_real_escape_string($con,$_POST['phone']);

    // $sql = 'INSERT INTO basic (fname,lname,phone) VALUES(?,?,?);';
    // $stmt = mysqli_stmt_init($con);
    // if(!mysqli_stmt_prepare($stmt,$sql)){
    //     echo'SQL statement Error';
    // }else{
    //     mysqli_stmt_bind_param($stmt,'sss',$firstName,$lastName,$phone);
    //     mysqli_stmt_execute($stmt);
    // }
    // header('Location: index.php');


    }
    
?>