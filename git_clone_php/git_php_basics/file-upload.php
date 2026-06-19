<?php
$test = $_GET['test'] ?? 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<?php if ($test == 1) { ?>

    <h1>Testing</h1>

    <form method="POST" action="file-upload-back.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="submit">
    </form>

<?php } else { ?>

    <h1>New Code</h1>

<?php } ?>

</body>
</html>