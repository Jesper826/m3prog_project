<?php

mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3"); 

function mijnPrint($printText) {
    print($printText);
    print("<br>");
}

$antwoord = "ik had te weinig argumenten in de functie, dus ik heb er een toegevoegd.";
mijnPrint($antwoord);

$dezeGaatMee = ("deze waarde wordt meegenomen");
print($dezeGaatMee);
?>
