<?php
include 'functions.php'; 

echo "Berlijn: " . number_format(berekenRitKosten(663, 15, 1.90), 2) . " euro<br>";
echo "Stockholm: " . number_format(berekenRitKosten(1438, 20, 1.46), 2) . " euro<br>";
echo "Kiev: " . number_format(berekenRitKosten(1991, 18.47, 2.23), 2) . " euro<br>";
?>