<?php

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {
    // Berekening: aantal liters benzine nodig
    $aantal_liters = $afstand_km / $km_per_liter;
    
    // Berekening: totale kosten
    $kosten_euro = $aantal_liters * $liter_prijs;
    
    return $kosten_euro;
}
?>