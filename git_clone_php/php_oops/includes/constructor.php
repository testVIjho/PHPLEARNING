<?php
class Telivision{
private $inverter;
public $switch;
private $connection;

public function __construct($inverter,$switch,$connection){
$this->inverter = $inverter;
$this->switch = $switch;
$this->connection = $connection;
}
public function setName($inverter){
$this->inverter = $inverter;
}
public function getName(){
    return $this->inverter;
}

}
?>