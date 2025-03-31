<?php
$verbruik = [
    'Koelkast' => 150,
    'Wasmachine' => 200,
    'Televisie' => 100,
    'Magnetron' => 120,
    'Computer' => 80
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbruik huishoudelijke apparaten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Verbruik van huishoudelijke apparaten</h1>
    
    <table>
        <thead>
            <tr>
                <th>Apparaat</th>
                <th>Verbruik (kWh)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($verbruik as $apparaat => $waarde): ?>
                <tr>
                    <td><?= htmlspecialchars($apparaat); ?></td>
                    <td><?= $waarde; ?> kWh</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    $totaal = 0;

    foreach ($verbruik as $waarde) {
        $totaal += $waarde;
    }
    ?>

    <p><strong>Totaal verbruik:</strong> <?= $totaal; ?> kWh</p>

</body>
</html>
