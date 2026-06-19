<?php include('includes/connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <form method='POST' action='get-data.php'>
        <label>First Name</label>
        <input type='text' name='fname'><br><br>
        <label>Last Name</label>
        <input type="text" name='lname'><br><br>
        <label>Phone Number</label>
        <input type="text" name='phone'><br><br>
        <button type="submit" name='submit'>submit</button>
    </form>
    <?php
   
    // $sql = "SELECT * FROM basic;";
    // $result = mysqli_query($con,$sql);
    // $numRows = mysqli_num_rows($result);
    // if($numRows>0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo"<pre>";
    //         print_r($row).'<br>';
           
    //     }
    // }
    ?>
</body>
</html>