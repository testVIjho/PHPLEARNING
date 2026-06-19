<?php
$theme = "light";

if(isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Example</title>
   <style>
    /* body{
        font-family:Arial;
        padding:30px;
    } */
    .light{
        background:white;
        color:black;
    }
    .dark{
        background:black;
        color:white;
    }
    </style>
</head>
<body class="<?php echo $theme;?>">

<h1>Current Theme : <?php echo strtoupper($theme)?></h1>
<p>Testing theme</p>
<a href="settheme.php?theme=light">Light Mode</a>

<a href="settheme.php?theme=dark">Dark Mode</a>
</body>
</html>