<!DOCTYPE html>
<html>
<body>

<?php
trait Jhones {
public $jho = 20;
public function test(){
echo"Testing traits concept"."<br>";
echo($this->jho);
}
}

trait Vijho{
 public $reegan;
 public function setName($name){
 $this->reegan = $name;
 }
 public function getName(){
 return $this->reegan;
 }
 }
 
 
class test2{
use Jhones,Vijho;
}

$obj = new test2();
$obj->test();
$obj->setName("Jhones");
echo $obj->getName();
 ?>
</body>
</html>
