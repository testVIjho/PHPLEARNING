<?php

setcookie(
    "username",
    "",
    time() - 3600
);

echo "Cookie Deleted";
header("Location: login.php");
exit;

?>