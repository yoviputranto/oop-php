<?php

require_once("animal.php");

class Ape extends Animal{
    public $teriak="Auooo";

    public function yell(){
        echo $this->teriak . "<br>";
    }
}

?>