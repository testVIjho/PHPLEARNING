<?php
declare(strict_types=1);

function check_signup_errors(){
if(isset($_SESSION['error_signup'])){
    $errors = $_SESSION['error_signup'];
    echo "<br>";
    foreach($errors as $err){
    echo '<p class="text-danger" >'.$err.'<br>';
    }
        unset($_SESSION['error_signup']);
        unset($_SESSION['signup_data']);
    }else if(isset($_GET['signup']) && $_GET['signup'] === "success"){
        echo"<br>";
        echo"<p class='text-success'>Signup Success!</p>";
}
}
    function inputUserName(){
        if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['error_signup']['username_taken'])){
        echo'<input type="text" name="uname" class="form-control" value="'.$_SESSION['signup_data']['username'].'" placeholder="Enter your name">';
        }else{
            echo'<input type="text" name="uname" class="form-control" placeholder="Enter your name">';
        }
    }
    function inputEmail(){
        if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['error_signup']['email_used']) && !isset($_SESSION['error_signup']['invalid_email'])){
            echo'<input type="email" name="email" class="form-control" value="'.$_SESSION['signup_data']['email'].'" placeholder="Enter your email">';
        }else{
            echo' <input type="email" name="email" class="form-control" placeholder="Enter your email">';
        }
    }
?>