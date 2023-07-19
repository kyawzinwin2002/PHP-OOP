<?php

use Run as GlobalRun;

interface A{
    public function a();
}

interface B{
    public function b();
}

interface C{
    public function c();
}

class Run implements A,B,C{
    public function a(){
        echo "I am method a";
    }
    public function b(){
        echo "I am method b";        
    }
    public function c(){
        echo "I am method c";        
    }
}

$run = new Run;
print_r($run->c());