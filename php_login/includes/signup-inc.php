<?php
if (isset($_POST['signup-submit'])) {
    require 'connection.php';
    $userName = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];
    if (empty($userName) || empty($email) || empty($password)) {
        header("Location: ../signup.php&error=emptyfield&username=$userName&email=$email");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php&error=Invalidemail&username=$userName");
        exit();
    } elseif ($password !== $passwordRepeat) {
        header("Location: ../signup.php&error=passwordMismatched&username=$userName&email=$email");
        exit();
    } else {
        $sql = "SELECT uid FROM users where uid=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php&error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php&error=usertaken&email=$email");
                exit();
            } else {
                $sql = "INSERT INTO users(uid,email,password)  VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php&signup=sqlerror");
                    exit();
                } else {
                    $hasePass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $hasePass);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php&signup=signupSuccessfully");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close(stmt);
    mysqli_close($con);
} else {
    header("Location: ../signup.php");
    exit();
}
