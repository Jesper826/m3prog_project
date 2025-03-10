<?php

function convertCurrency($amount, $fromCurrency, $toCurrency)
{
    echo "Bedrag: " . $amount . "<br>";
    echo "Van valuta: " . $fromCurrency . "<br>";
    echo "Naar valuta: " . $toCurrency . "<br>";
}

function sendEmail($to, $from, $subject, $message)
{
    echo "Naar: " . $to . "<br>";
    echo "Van: " . $from . "<br>";
    echo "Onderwerp: " . $subject . "<br>";
    echo "Bericht: " . $message . "<br>";
}

function generateRandomString($length)
{
    echo "Lengte: " . $length . "<br>";
}

function calculateArea($length, $width)
{
    echo "Lengte: " . $length . "<br>";
    echo "Breedte: " . $width . "<br>";
}   

convertCurrency(100, 'euro', 'yen');

generateRandomString(10); 

calculateArea(10, 20);

sendEmail("leraar@college.nl", "student@college.nl", "Huiswerk", "Voor morgen moet je hoofdstuk 5 en 6 leren.");

?>