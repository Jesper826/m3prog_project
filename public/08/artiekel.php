<?php

class Artiekel
{
    public $naam;
    public $prijs;
    public $voorraad;
}

$game = new Artiekel();
$game->naam = "een game";
$game->prijs = 10.99;
$game->voorraad=50;

echo "<br>";
print_r($game);

$json = json_encode($game);
echo "<br>";
echo $json;