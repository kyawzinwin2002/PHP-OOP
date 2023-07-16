<?php

class Fruit{
    public $name;
    public $color;
    public static $price=400;

    public function oopMethod($message){
        return "I'm Method".$message;
    }

    function __construct($x,$y)
    {
       
        echo "I'm constructor $x,$y";
    }

    function __destruct()
    {
        echo "I'm destructor $this->color";
    }


};