<?php

$getal1 = 1.23456;
$afgerond1 = ceil($getal1);
echo $afgerond1;
echo "<br>";

$getal2 = 2.32323;
$afgerond2 = floor($getal2);
echo $afgerond2;
echo "<br>";

$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);

echo $random1;
echo "<br>";
echo $random2;
echo "<br>";
echo $random3;
echo "<br>";

$uitkomst = $random1 + $random2;
echo $uitkomst;
echo "<br>";

$uitkomst2 = $uitkomst / $random3;
echo $uitkomst2;
echo "<br>";
?>