<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Mode</title>
</head>

<body>
    <?php
    $test = fopen("write-mode.txt", "w+");
    fwrite($test, "God is always with me");
    rewind($test);
    echo fread($test, filesize("write-mode.txt"));
    fclose($test);
    ?>
</body>

</html>