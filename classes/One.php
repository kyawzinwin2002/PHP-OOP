<?php

class One{
    public static $name;
    public function showName(){
        echo "This is ". self::$name;
    }
}