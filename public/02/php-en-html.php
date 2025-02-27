<?php

$afbeelding = 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png';
$ondertitel = 'Google logo';
$auteur = 'Jesper826';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $afbeelding;?>" alt="<?php $ondertitel;?>">
    <p><?php echo $auteur;?></p>    
</body>
</html>