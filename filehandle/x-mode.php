<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Mode</title>
</head>

<body>
    <?php


    //this mode is only for writing if the file already exist it will throw an Error

    // $test = fopen("xmode.txt", "x");
    // fwrite($test, "THE MORE YOU LEARN");
    // fclose($test);

    //it is used for create,read,write

    $data = fopen("xmode.txt", "x+");
    fwrite($data, "Never Stop Learning");
    rewind($data);
    echo fread($data, filesize("xmode.txt"));
    fclose($data);
    ?>
</body>

</html>