<?php
$stoplichtKleur = "R"; 
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stoplicht</title>
</head>
<body>
    <?php
    if ($stoplichtKleur == "R") {
        echo "<button style='background-color:#FF0000;height:25px;width:25px;'></button>";
    } elseif ($stoplichtKleur == "O") {
        echo "<button style='background-color:#FFA500;height:25px;width:25px;'></button>";
    } elseif ($stoplichtKleur == "G") {
        echo "<button style='background-color:#008000;height:25px;width:25px;'></button>";
    } else {
        echo "<p>Ongeldige kleur</p>";
    }
    ?>
</body>
</html>
