<?php

function berekenVliegKosten($afstand_km, $kerosine_prijs, $bagage_kilo, $business_class) {
    $kosten = ($kerosine_prijs * $afstand_km) / 30;
    $kosten += $bagage_kilo * 5;
    if ($business_class) {
        $kosten *= 1.5;
    }
    return $kosten * 2;
}
?>