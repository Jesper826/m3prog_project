<?php

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150.0,"omschrijving":"God of War is een actie-avonturenspel ontwikkeld door Santa Monica Studio en uitgegeven door Sony Interactive Entertainment. Het spel werd oorspronkelijk uitgebracht voor de PlayStation 4 in april 2018 en later voor Microsoft Windows in januari 2022. Het is het achtste deel in de God of War-serie en een vervolg op het spel uit 2013."}';

$artiekel = json_decode($json);

echo $artiekel->naam . "<br>";
echo $artiekel->prijs = 29.99 . "<br>";
echo $artiekel->voorraad = 20 . "<br>";
echo $artiekel->omschrijving = "ik hou hiervan". "<br>";

$artiekel = json_encode($artiekel);
echo $artiekel . "<br>";
