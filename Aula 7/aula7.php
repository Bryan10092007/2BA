<?php
date_default_timezone_set('America/Sao_Paulo');
echo "####################################################";
echo "<br>";
if(5 > 3){
    echo "Have a good day and good idea!";
}
echo "<br>";
echo "####################################################";
echo "<br>";
$t = rand(0, 30);
echo ($t);
echo "<br>";
if($t < 20){
    echo "Have a good day and good idea!";
} else{
    echo "Don't have a good day and bad idea!";
}
echo "<br>";
echo "####################################################";
echo "<br>";
$b = rand(17, 23);
echo ($b);
echo "<br>";
if ($b == 20){
    echo "Have a good day and good idea!";
} else{
    echo "Don't have a good day and bad idea!";
}
echo "<br>";
echo "####################################################";
echo "<br>";
$z = date("H") - 3;
echo ($z);
echo " hours";
echo "<br>";
if($z < "19"){
    echo "Have a good day!";
} else{
    echo ("Have a good night!");
}
echo "<br>";
echo "####################################################";
echo "<br>";
$y = date("H") - 3;
echo ($y);
echo " hours";
echo "<br>";
if($y < 12){
    echo "Have a good day!";
}
if($y > 11){
    echo "Have a good night!";
}
echo "<br>";
echo "####################################################";
echo "<br>";
$y = date("H:i:s");
echo ("$y");
echo ("<br>");
$y = date("D M j G:i:s T Y");
echo ("$y");
echo "<br>";
echo "####################################################";
echo "<br>";
?>