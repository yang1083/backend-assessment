<?php
namespace Sfp;
class Rotate {
    public $amount;

    function _construct($amount) {
        $this->amount = $amount;
    }

    public function execute($amount) {
        $a = array();
        $content = file_get_contents("assets/rotate.json");
        if ($content == false) {
            echo "error getting content from Json file\n";
        }
        $data = json_decode($content, true);
        if ($data == null) {
            echo "error decoding json file\n";
        }
        foreach ($data as $array) {
            array_push($a, substr($array, $amount).substr($array, 0, $amount));
        }
        var_dump($a);
        return $a;
    }
}
// $rotate = new Rotate(2);
// $rotate->execute(2);
?>
