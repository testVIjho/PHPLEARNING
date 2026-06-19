<?php
class Dbh{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    private $charset;
     

    public function connection(){
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "con_copy";
        $this->charset = "utf8mb4";
        try{
            $dsn = "mysql:host=".$this->serverName.";dbname=".$this->dbName.";charset=".$this->charset;
            $pdo = new PDO($dsn,$this->userName,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "✅ Connected successfully";
            return $pdo;
        }catch(PDOException $e){
            echo "❌ Connection Failed: ".$e->getMessage();
        }


    }
}
?>
