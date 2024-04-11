<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);
echo "<br>";
echo "######################################################################";
echo "<br>";
$car2 = array("brand" => "Ferrari", "model" => "Roma", "year" => 2018);
echo $car2["brand"];
echo "<br>";
echo $car2["model"];
echo "<br>";
echo $car2["year"];
echo "<br>";
echo "######################################################################";
echo "<br>";
$car3 = array("brand" => "Tesla", "model" => "S plaid", "year" => 2021);
foreach ($car3 as $x => $y){
    echo "$x: $y <br>";
}
?>