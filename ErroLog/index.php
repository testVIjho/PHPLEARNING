<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error log</title>
</head>

<body>
    <?php
    include('error.php');
    $username = null;

    if ($username == null) {
        Writelog("email is empty");
    }

    ?>
</body>

</html>