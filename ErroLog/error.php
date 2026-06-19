<?php
function Writelog($message)
{
    $file = fopen("error.txt", "a");
    $time  = date("Y-m-d h:i:s");
    $logMessage = "[$time] Error:$message\n";
    fwrite($file, $logMessage);
    fclose($file);
}
