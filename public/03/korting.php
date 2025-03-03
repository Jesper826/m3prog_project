<?php

$totaalBesteld = 500.0;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje=false;
$cadeauWaarde;


if($totaalBesteld >= 100)
{
    $verzendKosten = 0;
}

if($totaalBesteld >= 250)
{
    $korting = 0.05;
}

if($totaalBesteld >= 400)
{
    $cadeautje = true;
}

if($totaalBesteld > 1000)
{
    $korting = 0.75;
    $cadeautWaarde = 40;
}
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);
echo "Totaal van de bestelde artiekelen $totaalBesteld <br>";
echo "Totaal met verzendkosten wordt met $totaal <br>";

echo "U krijgt ook een cadeautje ter waarde van 10 euro <br>";

if($cadeautje)
{
    echo "U krijgt ook een cadeautje ter waarde van 10 euro <br>";

}


?>