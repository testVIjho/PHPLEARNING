<?php
if(isset($_GET['theme'])){
    $theme = $_GET['theme'];

    //cookie set method
    setcookie("theme",$theme,time()+60);
    }
    
    header("Location: color-theme.php");
    exit;
?>