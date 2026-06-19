<?php
class School{
    public $teacher;
    public $headmaster;

    public function status($teach){
        $this->teacher = $teach;
        echo($this->teacher)."<br>";
    }
}

?>