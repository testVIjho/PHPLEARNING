<?php
class CloseClass
{
    private $test;

    public function __construct($test)
    {
        $this->test = $test;
        echo $this->test;
    }

    public function __destruct()
    {
        echo "code finish akumbothu destruct function call akum";
    }
}

$testing = new CloseClass("Jhones Reegan");
