<?php
class Phone{
public static $brand="Redmi";

public static function model(){
    echo self::brand;
}
}

Phone::brand;
?>