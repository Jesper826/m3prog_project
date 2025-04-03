<?php

$artiekel = [
    "naam"=> "hello world badge",
    "prijs"=> 10.99,
    "voorraad"=> 200
];

$json = json_encode($artiekel);
echo "$json<br>";

$object = json_decode($json);

//als array 

print_r($object);