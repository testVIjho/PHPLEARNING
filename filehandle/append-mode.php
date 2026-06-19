<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Append Mode</title>
</head>

<body>
    <?php
    //this mode is only for writing
    // $test = fopen("append-mode.txt", "a");
    // fwrite($test, " Today is my day ");
    // fclose($test);

    //this mode used for reading as well as writing
    $data = fopen("append-mode.txt", "a+");
    fwrite($data, "Always be Happy");
    rewind($data);
    echo fread($data, filesize("append-mode.txt"));
    fclose($data);

    //this methods to get the entire file data
    // $data = file_get_contents("append-mode.txt");
    // echo ($data);

    ?>
</body>

</html>