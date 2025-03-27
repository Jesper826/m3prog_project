<?

header("Content-Type: application/json");

$mario = new student();
$mario->name = "mario";
$mario->gemiddeldCijfer = 7.5;

$wario = new student();
$wario->name = "wario";
$wario->gemiddeldCijfer = 4.5;

$toad = new student();
$toad->name = "toad";
$toad->gemiddeldCijfer = 8.5;

$gumba = new student();
$gumba->name = "gumba";
$gumba->gemiddeldCijfer = 100;

$dataObject = new dataObject();
$dataObject->studenten = [ $mario, $wario, $toad, $gumba];


class student
{
    public $name;
    public $gemiddeldCijfer;
}

class dataObject
{
    public $studenten = [];
}

echo json_encode($dataObject);
?>