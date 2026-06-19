<?php
class Warren{
    private $name = "Buffet";
    protected $age = 98;
    public $field = "learning";

    public function reading(){
        echo $this->field;
    }
}
$test = new warren();
// $test->reading(); 
echo $test->field;
?>
