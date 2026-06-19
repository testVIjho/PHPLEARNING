<?php 
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index File</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <main><?php
        if(isset($_SESSION['username'])){
            echo' <p>your are logged in!</p>';
        }else{
               echo' <p>your are logged out!!</p>';
        }
         ?>
      
    </main>
</body>
</html>