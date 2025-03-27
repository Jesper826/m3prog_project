<?

header("Content-Type: application/json");

$mario = [ "name" => "mario", "gemiddeldCijfer" => 7.5];

$wario = [ "name" => "wario", "gemiddeldCijfer" => 4.5];

$toad = [ "name" => "toad", "gemiddeldCijfer" => 8.5];

$gumba = [ "name" => "gumba", "gemiddeldCijfer" => 100];

$dataObject = [
    "studenten" => [$mario, $wario, $toad, $gumba],
];

$jsonString = json_encode($dataObject);
echo $jsonString;

?>