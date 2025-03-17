<?php
include_once 'vliegkostenfunctions.php'; 

echo "Vliegreis 3722 km: €" . number_format(berekenVliegKosten(3722, 2.05, 20, false), 2) . "<br>";
echo "Vliegreis 9276 km: €" . number_format(berekenVliegKosten(9276, 3.11, 10, false), 2) . "<br>";
echo "Vliegreis 803 km (business): €" . number_format(berekenVliegKosten(803, 2.83, 0, true), 2) . "<br>";
?>