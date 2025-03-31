<?php
$weer = [
    'maandag'=> '15',
    'dinsdag'=> '16',
    'woensdag'=> '15',
    'donderdag'=> '18',
    'vrijdag'=> '15',
    'zaterdag'=> '18',
    'zondag'=> '21',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weer</title>
</head>
<body>
    <h2>weersvoorspelling</h2>
    <table>
        <thead>
            <tr>
                <th>dag</th>
                <th>graden</th>
            </tr>
        </thead>
        <tbody>
            <p>
                <?php foreach ($weer as $key => $value): ?>
                    <tr>
                        <td><?php echo ($key); ?></td>
                        <td><?php echo ($value); ?></td>
                    </tr>
                <?php endforeach; ?>
            </p>
            <?php $vandaag = "maandag";?>
            <p>Vandaag <?= $vandaag;?> is het 16 graden</p>
            <?php $vandaag = "dinsdag";?>
            <p>Vandaag <?= $vandaag;?> is het 18 graden</p>
            <?php $vandaag = "woensdag";?>
            <p>Vandaag <?= $vandaag;?> is het 17 graden</p>
            <?php $vandaag = "donderdag";?>
            <p>Vandaag <?= $vandaag;?> is het 15 graden</p>
            <?php $vandaag = "vrijdag";?>
            <p>Vandaag <?= $vandaag;?> is het 16 graden</p>
            <?php $vandaag = "zaterdag";?>
            <p>Vandaag <?= $vandaag;?> is het 18 graden</p>
            <?php $vandaag = "zondag";?>
            <p>Vandaag <?= $vandaag;?> is het 19 graden</p>

        </tbody>
    </table>
</body>
</html>
