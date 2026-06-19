<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $userName = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    try{
        include_once('dbh.php');
        include_once('signup-model.inc.php');
        include_once('signup-controller.inc.php');
        
       
        //ERROR HANDLERS
        $errors = [];
        if(inputEmpty($userName,$password,$email)){
            $errors['input_empty'] ="Fill in all fields!";
        }
        if(isInvalidEmail($email)){
             $errors['invalid_email'] ="Invalid Email Used!";
        }
        if(isUsernameTaken($pdo, $userName)){
             $errors['username_taken'] ="Username already taken!";
        }
        if(isEmailRegistered($pdo, $email)){
             $errors['email_used'] ="Email Already Registered!";
        }

        require_once('config-session.inc.php');
        if($errors){
            $_SESSION['error_signup'] = $errors;
            $signupData = [
            "username"=>$userName,
            "email"=>$email,
            ];
            $_SESSION['signup_data'] = $signupData;
            header("Location: ../index.php");
            exit;
            }
        createUser($pdo,$userName,$password,$email);
        $pdo = null;
        $stmt = null;
        unset($_SESSION['error_signup']);
        unset($_SESSION['signup_data']);
        header("Location: ../index.php?signup=success");
        exit;
    }catch(PDOException $e){
        echo("Query Failed :".$e->getMessage());
        
    }

}else{
    header("Location: ../index.php?DontAccessthispage");
    exit();
}
?>