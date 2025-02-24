<?php
$som1 = 2 + 2;
echo $som1;
echo "<br>";
$som2 = 5 * 5;
echo $som2;
echo "<br>";
$som3 = 100 / 10;
echo $som3;
echo "<br>";
$som4 = 60 - 25;
echo $som4;
echo "<br>";

$varsom = $som1 * $som2; 
$varsom2 = $som4 / $som3;
$varsom3 = $varsom * $som4 / $varsom2 - $som2;

echo $varsom;
echo "<br>";
echo $varsom2;
echo "<br>";
echo $varsom3;
echo "<br>";

?>