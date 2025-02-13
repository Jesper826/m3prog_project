<?php
    //hier komt code
    $title = "Mijn mooie website";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favorieteGame = "Call of Duty";
    $mooisteGetal = 7;
    $favorieteKinderShow = "Spongebob";
    $leuksteStad = "Amsterdam";
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        <p><h2>mooisteGetal:</h2><?=$mooisteGetal ?></p>
        <p><h2>favorieteKinderShow:</h2><?=$favorieteKinderShow ?></p>w
        <p><h2>leukste stad</h2><?=$leuksteStad ?></p>
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame;?></p>
    </body>
</html>