<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Berekening</title>
    <link rel="stylesheet" href="./css/reiskosten.css">
</head>
<body>
    <div class="container">
        <h1>Reiskosten Berekening</h1>
        <form method="GET" class="calculator-form">
            <label for="benzineprijs">Prijs per liter benzine (€): </label>
            <input type="number" step="0.01" name="benzineprijs" id="benzineprijs" value="1.89">
            <button type="submit">Bereken</button>
        </form>
        <div class="results">
            <p><strong>Afstand naar Bordeaux:</strong> 922.45 km</p>
            <p><strong>Totale kosten met de auto:</strong> €139.87</p>
            <p><strong>Benodigde liters benzine:</strong> 61.50 L</p>
            <p><strong>Aantal keer tanken:</strong> 2 keer</p>
            <p><strong>Kosten met de trein:</strong> €60.00</p>
            <p class="advies">Ik ga met de auto.</p>
        </div>
    </div>
</body>
</html>
