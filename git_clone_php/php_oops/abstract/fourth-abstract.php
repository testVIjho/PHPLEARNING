<?php
include_once("third-abstract.php");
class fourthAbstract extends AbstractThird{
public function price(){
    echo $this->brand;
}
}

$obj = new fourthAbstract("BMW");
// $obj->price();
$obj->testing();
?>