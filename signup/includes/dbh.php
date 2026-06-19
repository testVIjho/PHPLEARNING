<?php
$serverName = "localhost";
$dbName = "testing";
$dbUsername="root";
$dbPassword = "";
try{
    $dsn  = "mysql:host=$serverName;port=3307;dbname=$dbName";
    $pdo = new PDO($dsn,$dbUsername,$dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo("Connection failed :".$e->getMessage());

}
?>