<?php
require_once 'animal.php';

class sungokong extends Animal
{
    public $legs = 2;
    public function yell()
    {
        return "Auooo";
    }
}
?>