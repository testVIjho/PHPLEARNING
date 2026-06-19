<?php
declare(strict_types=1);
function inputEmpty(string $userName, string $password, string $email){
    if(empty($userName) || empty($password) || empty($email)){
    return true;
    }else{
        return false;
    }

}

function isInvalidEmail(string $email){
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    return true;
}else{
    return false;
}
}

function isUsernameTaken(object $pdo, string $userName){
if(getuserName($pdo, $userName)){
    return true;
}else{
    return false;
}
}

function isEmailRegistered(object $pdo, string $email){
if(getuserEmail($pdo, $email)){
    return true;
}else{
    return false;
}
}

function createUser(object $pdo, string $userName, string $password, string $email){
createNewUser($pdo,$userName,$password,$email);
}
?>