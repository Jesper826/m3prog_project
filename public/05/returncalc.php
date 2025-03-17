<?php

function add($getal1, $getal2) {
    $som = $getal1 + $getal2;
    return $som;
}

function subtract($getal1, $getal2) {
    return $getal1 - $getal2;
}

function divide($getal1, $getal2) {
    return $getal2 == 0 ? "Kan niet delen door nul" : $getal1 / $getal2;
}

function multiply($getal1, $getal2) {
    return $getal1 * $getal2;
}

echo add(1, 2) . "<br>";
echo add(100, 100) . "<br>";
echo add(4, 9) . "<br>";
echo add(33, 33) . "<br>";

?>
