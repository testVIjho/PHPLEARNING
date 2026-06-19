<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>


<?php
if(isset($_GET['cook'])){
    $user = $_GET['cook'];
   
    echo"<h1>Welcome $user</h1>";
    ?>
    <a href="logout.php">
        Logout
    </a>
<?php }else{?>
<h1>Welcome Graderesults!</h1>
<?php }?>


</body>
</html>