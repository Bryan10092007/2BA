<?php
for ($x = 0; $x <= 10; $x++){
    echo "O número é: $x <br>";
}
echo "########################################";
echo "<br>";
for ($i = 1; $i <= 10; $i++){
    if ($i > 6) break;
    echo "O número é: $i <br>";
}
echo "########################################";
echo "<br>";
for ($y = 0; $y <= 10; $y++){
    if ($y == 3) continue;
    echo "O número é: $y <br>";
}
echo "########################################";
echo "<br>";
$z = 1;
while ($z < 6){
    echo "O número é: $z <br>";
    $z++;
}
?>