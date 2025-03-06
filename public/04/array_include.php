```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>

<?php
$announcements = [
    "Annoucement 1: Dit is een test.",
    "Annoucement 2: Nog een test!",
    "Annoucement 3: De laatste test.",
    "Annoucement 4: Een nieuwe test!",
    "Annoucement 5: Nog een nieuwe test!"
];

$reviews = [
    ["demon's souls", 10],
    ["mario wonder", 9.5],
    ["mega man 2", 8]
];

foreach ($announcements as $announcement) {
    echo "<p>$announcement</p>";
}

foreach ($reviews as $review) {
    echo "<p>{$review[0]} - Score: {$review[1]}</p>";
}

echo "<p>Conclusie: We hebben een aantal geweldige games beoordeeld!</p>";
?>

</body>
</html>


