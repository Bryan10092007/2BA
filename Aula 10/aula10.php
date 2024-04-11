<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    echo "$x <br>";
}
echo "##########################################";
echo "<br>";
$alphabet = array("alpha", "beta", "gama", "delta", "epsilon");
foreach ($alphabet as $y) {
    echo "$y <br>";
}
echo "##########################################";
echo "<br>";
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "Carl" => "45");
foreach ($members as $z => $w){
    echo "$z : $w <br>";
}
echo "##########################################";
echo "<br>";
$itens = array("bread", "milk", "butter", "croassaint");
foreach ($itens as $p){
    if($p == "milk")
        continue;
    echo "$p <br>";
}
echo "##########################################";
echo "<br>";
$lista = array("bread", "milk", "butter", "croassaint", "mayo", "eggplant", "ham");
foreach ($itens as $p){
    if($p == "mayo")
        break;
    echo "$p <br>";
}
echo "##########################################";
echo "<br>";
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red", "Volvo")
.
foreach ($myCar as $x => $y){
    echo "$x : $y <br>";
}
?>