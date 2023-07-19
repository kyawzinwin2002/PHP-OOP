<?php

class Person{
    public $appearance;
    public $skinColor;

    protected $money;
    protected $name;

    private $fbPassword;

    public function setFbPassword($newPassword){
        $this->fbPassword = $newPassword;
    }

    public function getFbPassword(){
        echo $this->fbPassword;
    }
}