<?php

$berichten = ["Hallo, hoe gaat het?","Ik ben een beetje moe","Ik heb honger","Ik wil naar huis","Ik wil slapen",];
var_dump($berichten); 
echo "<br>";
echo $berichten[2];
echo "<br>";
echo $berichten[4];
echo "<br>";

echo count ($berichten). "<br>";
$berichten[] = "ik ben klein";
print_r($berichten);
echo "<br>";
echo count ($berichten). "<br>";
sort($berichten);
echo implode(' >> ', $berichten);


?>