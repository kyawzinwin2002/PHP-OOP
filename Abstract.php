<?php

abstract class A{
    abstract function x();
}

class B extends A{
    public function x(){
        echo "I am x function";
    }
}

$b = new B;
print_r($b->x());