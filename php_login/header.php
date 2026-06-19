<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <nav class="nav">
        <!-- Left side -->
        <div class="nav-left">
            <span class="logo">E</span>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="#">ABOUT ME</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>

        <!-- Right side -->
        <div class="nav-right">
            <form action="includes/login-inc.php" method="POST" class="login-form">
                <input type="text" name="mailuid" placeholder="E-mail/Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit" class="btn dark">Login</button>
            </form>

            <a href="signup.php" class="btn outline">SIGNUP</a>

            <form action="includes/logout.php" method="POST">
                <button type="submit" name="logout-submit" class="btn dark">LOGOUT</button>
            </form>
        </div>
    </nav>
</header>

</body>
</html>
