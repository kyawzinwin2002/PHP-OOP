<?php

system("clear");

interface StorageSystem{
    public function list();
    public function add();
}

interface PlaySystem{
    public function pause();
    public function play();
    public function prev();
    public function next();
}

class MusicPlayer implements StorageSystem,PlaySystem{
    public function list(){

    }
    public function add(){
        
    }
    public function pause(){
        
    }
    public function play(){
        
    }
    public function prev(){
        
    }
    public function next(){
        
    }
}

$musicPlayer = new MusicPlayer;
print_r($musicPlayer);