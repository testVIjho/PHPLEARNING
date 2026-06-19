<?php

// Cookie already irukka check
$saved_username = "";

if(isset($_COOKIE['username'])) {
    $saved_username = $_COOKIE['username'];
}

// Form submit
if(isset($_POST['login'])) {

    $username = $_POST['username'];

    // Remember me checked?
    if(isset($_POST['remember'])) {

        // Cookie set for 1 day
        setcookie(
            "username",
            $username,
            time() + 86400
        );
        header("Location: welcome.php?cook= ".urlencode($username));
        exit;
        }else{
            header("Location: welcome.php");
            exit;

        }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">

    Username:
    <input 
        type="text" 
        name="username"
        value="<?php echo $saved_username; ?>"
    >

    <br><br>

    <input type="checkbox" name="remember">
    Remember Me

    <br><br>

    <button name="login">
        Login
    </button>

</form>

</body>
</html>