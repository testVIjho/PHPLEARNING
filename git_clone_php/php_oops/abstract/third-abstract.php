<?php
abstract class AbstractThird{
    protected $brand;

    public function __construct($brand){
        $this->brand = $brand;
    }

    abstract public function price();

    function testing(){
        echo "$this->brand is my dream Car";
    }

}
?>