<?php

class Animal{
    public $legs=2,
            $name,
            $cold_blooded = "false";

    public function __construct($name){
        $this->name= $name;
        
    }
}
