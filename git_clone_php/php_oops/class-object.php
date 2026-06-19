<?php
class Car
{
    protected $test1 = "Jhones Reegan";
    private $test2 = "Vithya veerapathiran";
    private $test3;
    public function sameClass()
    {
        $b = $this->test2;
        return $b;
    }
}
class Pet extends Car
{
    public function testing()
    {
        $a = $this->test1;
        echo $a . "<br>";
    }
}
