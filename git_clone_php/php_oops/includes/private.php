<?php
// we access the private prperty and methods only inside of the class;
class PrivateClass{
    private $testing = "Warren Bufet";
    public $test2;

    public function privateVisibility(){
        echo $this->testing; // to access the private variable
    }
}
$obj = new PrivateClass();
$obj->privateVisibility();
echo $obj->testing;
?>
