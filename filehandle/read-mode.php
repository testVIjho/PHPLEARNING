<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Read Mode</title>
</head>

<body>
   <?php
   $one = fopen("read.txt", "r+");

   echo fread($one, filesize("read.txt"));
   rewind($one);

   fwrite($one, "ONE");
   rewind($one);
   echo fread($one, "read.txt");
   fclose($one);
   ?>

</body>

</html>