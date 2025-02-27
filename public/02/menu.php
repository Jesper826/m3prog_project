<?php

$typeGerecht = "voorgerecht";
$naamGerecht = "cashew wok";
$ingredienten = "cashew, wok, groenten, saus";
$allergie = "allergie? meld het ons!";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Greecht type: <?php echo $typeGerecht?></h1>

    <h2>    <?php echo $naamGerecht ?>   </h2>

    <p>
        <?php echo $ingredienten ?>
    </p>

    <p> 
        <?php echo $allergie ?>
    </p>
</body>
</html>