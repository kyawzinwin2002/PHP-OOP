<?php

class Student{

    public $name,$gender,$birthYear,$address,$age,$namePrefix;

    function __construct($inputName,$inputGender,$inputBirthYear,$inputAddress)
    {
        $this->name = $inputName;
        $this->gender = $inputGender;
        $this->birthYear = $inputBirthYear;
        $this->address = $inputAddress;

        $this->age = date("Y") - $this->birthYear;
        $this->namePrefix = $this->gender === "male" ? "Mrs" : "Ms";
    }

    public function showFullName(){
        return "My full name is ".$this->name." and my age is ".$this->age." year".($this->age > 1 ? 's' : '')." old.";
    }

    public function myself(){
        return "This is ".$this->namePrefix.$this->name." .I live in".$this->address." . I am ".$this->age." year".($this->age > 1 ? 's' : '')." old.";
    }
}