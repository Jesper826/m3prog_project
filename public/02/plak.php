<?php

$standaardstring ='hello world<br>';
$extrastring = "extra world <br>";

echo $standaardstring . $extrastring;

$voornaam = 'luigi';
$achternaam = 'mario';
$fullname = $voornaam .' '. $achternaam . "<br>";

echo $fullname;

$naam = 'Yoshi';
$ondertekentDoor = 'bowserjog';
$enemy = 'koopa';

$emailTekst = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";
echo $emailTekst;


?>