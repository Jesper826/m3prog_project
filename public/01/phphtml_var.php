<?php
    //hier komt code
    $title = "Mijn mooie website";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favorieteGame = "Call of Duty";
    $mmooisteGetal = 7;

    echo $title;
    echo $datum;
    echo $tijd;
    echo $favorieteGame;
    echo $mmooisteGetal;
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo "Titel van de pagina" ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo date('d-m-Y')?>, en de tijd is <?php echo date("H:i")?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo "bram zijn haarlijn";?></p>
    </body>
</html>