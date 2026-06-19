<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$file = $_FILES['file'];
$fname = $file['name'];
$fileType = $file['type'];
$fileError = $file['error'];
$filetempName = $file['tmp_name'];
$fileSize = $file['size'];
$ext = explode(".",$fname);
$actualExt = strtolower(end($ext));

$allowed = array("png","jpg","jpeg","pdf");
if(in_array($actualExt, $allowed)){
        if($fileError == 0){
            if($fileSize<2000000){
                $filenamenew = uniqid("",true).".".$actualExt;
                $fileDestination = "newfile/.$filenamenew";
                move_uploaded_file($filetempName,$fileDestination);
                header("Location: dummy-file.php?Success");
            }else{
                header("Location: dummy-file.php?File size is too big");
            }

        }else{
            header("Location: dummy-file.php?Your file have an Error Please Upload Another File");
        }

}else{
    header("Location: dummy-file.php?somethingwentwrong");
}


}else{
    echo("You cannot access this file");
    header("Location: dummy-upload.php?youcannotaccessthisfile");
    
}
?>