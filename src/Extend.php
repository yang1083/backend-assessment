<?php
namespace Sfp;
class Rotate {
    private $amount;

    function _construct($amount) {
        $this->amount = $amount;
    }

    function execute($amount) {
        $a = array();
        $content = file_get_contents("assets/rotate.json");
        if ($content == false) {
            echo "error getting content from json file\n";
        }
        $data = json_decode($content, true);
        if ($data == null) {
            echo "error decoding json file\n";
        }
        for ($i = $amount; $i < count($data); $i++) {
            $a[] = $data[$i];
        }
        for ($i = 0; $i < $amount; $i++) {
            $a[] = $data[$i];
        }
        var_dump($a);
        return $a;
    }
}
class Extend extends Rotate {
    function execute($amount) {
        $array = parent::execute($amount);
        var_dump($array[count($array) - 1]);
        return $array[count($array) - 1];
    }
}

$ex= new Extend();
$ex->execute(2);
