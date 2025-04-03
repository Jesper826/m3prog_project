<?php

class LunchItem
{
    public $naam;
    public $prijs;
    public $beschijving;
}

$broodjeBal = new LunchItem();
$broodjeBal->naam = "Broodje bal gehakt";
$broodjeBal->prijs = 3.50;
$broodjeBal->beschijving = "We spellen beschrijving nu zonder r volgens de opdracht";

echo $broodjeBal->naam . "<br>";
echo $broodjeBal->prijs . "<br>";
echo $broodjeBal->beschijving . "<br>";


$broodjeGezond = new LunchItem();
$broodjeGezond->naam = "Broodje gezond";
$broodjeGezond->prijs = 1;
$broodjeGezond->beschijving = "We spellen beschrijving nu zonder r volgens de opdracht";

echo $broodjeGezond->naam . "<br>";
echo $broodjeGezond->prijs . "<br>";
echo $broodjeGezond->beschijving . "<br>";

$lunchitems = [
    $broodjeBal,
    $broodjeGezond
];

$json = json_encode($lunchitems);
echo "$json<br>";

foreach ($lunchitems as $item) {
    echo $item->naam . "<br>";
    echo $item->prijs . "<br>";
    echo $item->beschijving . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lunch items</h1>

    <p>
        <?php
        foreach ($lunchitems as $item) {
            echo $item->naam . "<br>";
            echo $item->prijs . "<br>";
            echo $item->beschijving . "<br>";
        }
        ?>
    </p>    
</body>
</html>