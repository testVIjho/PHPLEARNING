<?php
class Data
{
    //DB Stuff
    private $table = "student";
    private $conn;

    //table data
    public $id;
    public $name;
    public $age;
    public $course;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function readSingle()
    {
        $sql = "SELECT * FROM $this->table
        where id = ?";
        //prepare statement
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->age = $row['age'];
        $this->course = $row['course'];
    }

    // public function update()
    // {
    //     $sql = "UPDATE $this->table SET
    //     name = :name,
    //     age = :age,
    //     course = :course WHERE id =:id
    //     ";
    //     $stmt = $this->conn->prepare($sql);

    //     //validate data
    //     $this->id = htmlspecialchars(strip_tags($this->id));
    //     $this->name = htmlspecialchars(strip_tags($this->name));
    //     $this->age = htmlspecialchars(strip_tags($this->age));
    //     $this->course = htmlspecialchars(strip_tags($this->course));

    //     //bind parameter
    //     $stmt->bindParam(":id", $this->id);
    //     $stmt->bindParam(":name", $this->name);
    //     $stmt->bindParam(":age", $this->age);
    //     $stmt->bindParam(":course", $this->course);
    //     if ($stmt->execute()) {
    //         return true;
    //     }
    //     print_r("Error : %s./n" . $stmt->errorInfo());
    //     return false;
    // }
    public function update()
    {
        $fields = [];
        $params = [];

        if (!empty($this->name)) {
            $fields[] = "name = :name";
            $params[':name'] = htmlspecialchars(strip_tags($this->name));
        }

        if (!empty($this->age)) {
            $fields[] = "age = :age";
            $params[':age'] = htmlspecialchars(strip_tags($this->age));
        }

        if (!empty($this->course)) {
            $fields[] = "course = :course";
            $params[':course'] = htmlspecialchars(strip_tags($this->course));
        }

        if (empty($fields)) {
            return false; // nothing to update
        }
        $sql = "UPDATE $this->table SET " . implode(", ", $fields) . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id);
        
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
            }

        if ($stmt->execute()) {
            return true;
        }

        print_r("Error: " . implode(" | ", $stmt->errorInfo()));
        return false;
    }
    public function delete()
    {
        $sql = "DELETE FROM $this->table where id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->id);
        if ($stmt->execute()) {
            return true;
        }
        print_r("Error :%s./n" . $stmt->errorInfo());
        return false;
    }
}
