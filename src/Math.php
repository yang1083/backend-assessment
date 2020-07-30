<?php
namespace Sfp;
class Math {
    function _construct() {
    }

    function execute() {
        $array = array();
        $sum = 0;
        $c = 0;
        $array = array_map('str_getcsv', file('assets/tabular.csv'));
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i][2] == "true") {
               $sum += $array[$i][1]; 
               $c++;
            }
        }
        var_dump($sum / $c);
        return ($sum / $c);
    }
}

$m = new Math();
$m->execute();