<?php
namespace Sfp;
class Math {
    function _construct() {
    }

    function execute() {
        $array = array(); //array for holding the csv content
        $sum = 0; //Sum of the numeric array elements that are true
        $c = 0; //The number of added elements
        $array = array_map('str_getcsv', file('assets/tabular.csv'));
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i][2] == "true") {
               $sum += $array[$i][1]; 
               $c++;
            }
        }
        //var_dump($sum / $c); //Used for testing result
        return ($sum / $c);
    }
}

// $m = new Math(); //Used for running function
// $m->execute();