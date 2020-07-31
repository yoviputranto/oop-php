<?php

require_once("animal.php");

class Frog extends Animal
{
    public $legs = 4,
        $lompat = "hop hop";

    public function jump()
    {
        echo $this->lompat . "<br>";
    }
}
