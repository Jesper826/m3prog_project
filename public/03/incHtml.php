<?php

$loggedIn = false;
if(isSet($_GET['loggedIn'])){
    $loggedIn = true;
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
    <?php
    if ($loggedIn = false){
        include "Views/myDashboard.html";
    }
    else{
        include "Views/home.html";
    }
    ?>
</body>
</html>