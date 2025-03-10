<?php

$hoeLangIsDitWoord = "scrabbleWoord";
$woordLengte = strlen($hoeLangIsDitWoord);
print ($woordLengte);
echo "<br>";


//Vraag 1: Wat geef je aan die teller? Nou, je geeft hem een woord, bijvoorbeeld "Hallo".
//Vraag 2: Wat geeft de teller terug? Hij geeft een getal terug, in dit geval 5, omdat "Hallo" vijf letters heeft.
//Vraag 3: Het getal dat de teller teruggeeft, is dus het aantal letters in het woord dat je hem hebt gegeven.

$langWoord ='kindercarnavalsoptochtvoorbereidingswerkzaamheden';
$langWoord = strlen($langWoord);
print ($langWoord);
echo "<br>";


//vraag 4: Ik heb nu 2 keer strlen gebruikt.

$tweeMachtTwee = pow(2,2);
print (pow(2,2));
echo "<br>";

$tweeMachtTien = pow(2,10);
print (pow(2,10));
echo "<br>";

//vraag 5:hoe geven we het resultaat door? We geven het resultaat door met de functie print.

$naam = "Wario"; 
$naamGroot = strtoupper($naam); 

print($naamGroot); 
echo "<br>";


$naamKlein = strtolower($naam);
print($naamKlein);
echo "<br>";

?>