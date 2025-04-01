<?php
header("Content-Type: application/json");

$verbruik = [
    'Koelkast' => 150,
    'Wasmachine' => 200,
    'Televisie' => 100,
    'Magnetron' => 120,
    'Computer' => 80
];

$trophiesPerGame = [
    "Demon's Souls" => 1,
    "Mario Wonder" => 2,
    "Rayman Origins" => 3,
    "Tetris" => 4,
];

$weer = [
    'maandag'   => 15,
    'dinsdag'   => 16,
    'woensdag'  => 15,
    'donderdag' => 18,
    'vrijdag'   => 15,
    'zaterdag'  => 18,
    'zondag'    => 21,
];

$persoon = [
    'Voornaam' => 'Jan',
    'Achternaam' => 'Jansen',
    'Leeftijd' => 30,
    'Favoriet eten' => 'Pizza',
    'Minst favoriet eten' => 'Courgette',
    'Woonplaats' => 'Amsterdam',
    'Hobby' => 'Voetbal'
];

$jsonArray = [
    "Games" => $trophiesPerGame,
    "Persoon" => $persoon,
    "Weer" => $weer,
    "Verbruik" => $verbruik
];
print_r($jsonArray);
?>
