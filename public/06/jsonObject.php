<?

header("Content-Type: application/json");

$steden = [
    "amsterdam",
    "rotterdam",
    "den haag"
];

$jsonString = json_encode($steden);
echo $jsonString;
?>