<?php

$opvoorraad = false;
$aantalOpVoorraad = 20;
$opvoorraad = $aantalOpVoorraad > 0;

//if ($opvoorraad == false) 
if ($aantalOpVoorraad > 0) 
{
    echo "niet op vorraad";

    // hij echode niet wanneer het kleiner dan en gelijk aan 0 is, maar wel wanneer het groter is dan 0
}
else
{
    echo "Artikel is op voorraad";
}



?>