<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>

<body>
    <h1>File Handling</h1>
    <?php
    // the function read the file  if the file does not exist it return a Error
    // readfile("filehandle.txt");
    // readfile("filehandle1.txt"); //it return a Error

    // $var = fopen("filehandle.txt", "r");
    // echo gettype($var);  
    // echo ($var);
    // echo fread($var, fileSize("filehandle.txt"));
    // fclose($var);

    // r+ method

    // $one = fopen("sample.txt", "r+");

    // echo fread($one, filesize("sample.txt"));
    // rewind($one);

    // fwrite($one, "ONE");
    // rewind($one);
    // echo fread($one, "sample.txt");
    // fclose($one);


    // fwite() method it use for write the content in file 

    // $test = fopen("filehandle.txt", "w");
    // fwrite($test, "Jhones Reegan Vithya");  //intha file irukka nala athula poi read pannuthu existing content iruntha delete pannitu write pannum 

    // if the file doesnt exit create the new file for write operation
    // $reference = fopen("sample.txt", "w");
    // fwrite($reference, "Jhones Vithya");
    // fclose($reference);

    // $testnew = fopen("sample.txt", "w+");
    // fwrite($testnew, "Vithya Software Developer Reegan Graphic Designer");
    // rewind($testnew); // move pointer to beginning
    // echo fread($testnew, filesize("sample.txt"));
    // fclose($testnew);

    ?>
</body>

</html>