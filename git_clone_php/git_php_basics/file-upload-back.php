<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $file = $_FILES['file'];
   $fileName = $file['name'];
   $filetype = $file['type'];
   $filetempName = $file['tmp_name'];
   $fileError = $file['error'];
   $fileSize = $file['size'];
   $fileExt = explode('.',$fileName);
   $fileAutualExt = strtolower(end($fileExt));
    $allowed = array('pdf','jpg','jpeg','xlsx','png');
    if(in_array($fileAutualExt, $allowed)){
        if($fileError===0){
            if($fileSize<4000000){
                $fileNameNew = uniqid('',true).'.'.$fileAutualExt;
                $fileNewDestination = 'files/'.$fileNameNew;
                move_uploaded_file($filetempName, $fileNewDestination);
                header("Location: file-upload.php?uploadsucees");
            }else{
                echo"The file is too big";
                
            }
        }else{
            echo'something went wrong';
        }
    }else{
        echo'you cannot upload the files format here';
    }

}else{
    echo"you cannot access this file";
    header("Location: file-upload.php?test=2");
}

?>