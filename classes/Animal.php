<?php

class Animal{
    public $name;
    public $lifeSpan=100;
    public $gender;
    public $size=5;
    public $numberOfLegs=4;

    function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function run(){
        echo __CLASS__." can run 10km/h";
    }
}

class Bird extends Animal{



    public function run(){
        echo __CLASS__." can run 5km/h";
    }
    
    public function fly(){
        echo __CLASS__." can fly";
        echo $this->size;
    }
}

class Mammal extends Animal{

    public $run;
    function __construct($name,$gender,$run)
    {
        parent::__construct($name,$gender);
        $this->run = $run;
    }

    public function feed(){
        echo __CLASS__." feed milk";
        print(parent::run());
    }
}

$mammal = new Mammal("cow","male",true);
print_r($mammal->feed());