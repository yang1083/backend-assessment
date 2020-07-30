<?php
namespace Sfp;
require_once('Rotate.php');
class Extend extends Rotate {
    function execute($amount) { 
        //Tried overloading this function without any arguments from the parent class, it requires 1 param still(unlike Java).
        //To bypass this I can write a magic function _call() that accepts function name and arguments dynamically
        //but I think it would not match the instruction from README
        $array = parent::execute($amount);
        //var_dump($array[count($array) - 1]); //Used for testing result
        return $array[count($array) - 1];
    }
}

// $ex= new Extend(); //Used for running function
// $ex->execute(3);
