<?php 
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <main>
      <form action='includes/signup-inc.php' method='post'>
        <input type='text' name='uid' placeholder='Username'>
        <input type='text' name='email' placeholder='Email'>
        <input type='password' name='password' placeholder='Password'>
        <input type='password' name='password-repeat' placeholder='Retype Password'>
        <button type='submit' name='signup-submit'>Signup</button>
</form>
    </main>
</body>
</html>