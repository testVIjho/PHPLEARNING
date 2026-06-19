<?php
declare(strict_types=1);

function getuserName(object $pdo, string $userName){
    $query = "SELECT username from user where username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$userName);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getuserEmail(object $pdo, string $email){
    $query = "SELECT email from user where email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function createNewUser(object $pdo, string $userName, string $password, string $email){
$query = "INSERT INTO user (username,pwd,email) VALUES (:username,:email,:password)";
$options = [
    "cost"=>12
];
$passwordhashed = password_hash($password,PASSWORD_BCRYPT,$options);
$stmt = $pdo->prepare($query);
$stmt->bindParam(":username",$userName);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":password",$passwordhashed);
$stmt->execute();
}
?>