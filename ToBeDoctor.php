<?php

interface ParentClass{
    public function ToBeDoctor();
}

class ChildClass implements ParentClass {
    public function ToBeDoctor()
    {
        echo "I Will be a Doctor";
    }
}

$childClass = new ChildClass;
print_r($childClass->ToBeDoctor());


