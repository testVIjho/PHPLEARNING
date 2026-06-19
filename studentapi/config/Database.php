<?php
class Database
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "school";
    private $charset = "utf8mb4";

    private $port = 3307;

    public function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->serverName .
                ";port=" . $this->port .
                ";dbname=" . $this->dbName .
                ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo ("Connection Failed :" . $e->getMessage());
        }
    }
}
