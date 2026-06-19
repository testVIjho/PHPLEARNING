<?php
if(isset($_POST['login-submit'])){
    require 'connection.php';
    $userName = $_POST['mailuid'];
    $password = $_POST['pwd'];
    if(empty($userName)|| empty($password)){
        header("Location: ../login.php?error=emptyfield");
        exit();
    }else{
        $sql = "SELECT *from users where uid=? OR email=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login.php?errr=sqlerrror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,'ss',$userName,$userName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password,$row['password']);
                if($passwordCheck==false){
                    header("Location: ../login.php?error=passwordmismatched");
                 exit();
                }elseif($passwordCheck==true){
                    session_start();
                    $_SESSION['username'] = $row['uid'];
                    header("Location: ../index.php?login=success");
                    exit();
                }

            }else{
                 header("Location: ../login.php?error=nouser");
                 exit;
            }
        }
    }

}
else{
     header("Location: ../login.php");
     exit();
}
?>