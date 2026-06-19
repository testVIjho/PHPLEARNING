<?php
include("scope-resolution.php");
class SecondClass extends First{
    public static $staticPropery = "This is static Property";

    public static function testingScope(){
        echo parent::Example;
        echo parent::test();
        echo self::$staticPropery;
    }
}
$obj3 = new SecondClass();
$obj3->testingScope();
?>