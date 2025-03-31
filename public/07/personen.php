<?php
$persoon = [
    'Voornaam' => 'Jan',
    'Achternaam' => 'Jansen',
    'Leeftijd' => 30,
    'Favoriet eten' => 'Pizza',
    'Minst favoriet eten' => 'Courgette',
    'Woonplaats' => 'Amsterdam',
    'Hobby' => 'Voetbal'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persoonsgegevens</title>
</head>
<body>
    <h2>Persoonsgegevens</h2>
    <table>
        <thead>
            <tr>
                <th>Kenmerk</th>
                <th>Waarde</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoon as $key => $value): ?>
                <tr>
                    <td><?php echo ($key); ?></td>
                    <td><?php echo ($value); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
