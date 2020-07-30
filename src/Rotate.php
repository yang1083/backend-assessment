<?php
namespace Sfp;
class Rotate {
    public $amount; //The amount needed for left shifting 

    function _construct($amount) {
        $this->amount = $amount;
    }

    public function execute($amount) {
        $a = array(); //array holding shifted strings
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
// $rotate = new Rotate(3); //Used for running function
// $rotate->execute(3);
