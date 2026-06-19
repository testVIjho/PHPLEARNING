<?php
//we can access the protected variable only parent class and child class do not acees the variables and method in outside of the class
class ProtectedClass{
    protected $testing = "Jhones Reegan";
}

class ProtectExtend extends ProtectedClass{
public function common(){
    echo $this->testing;
}
}
$obj = new ProtectExtend();
$obj->common();
$obj2 = new ProtectedClass();
$obj2->testing;
?>