<?
header("Content-Type: application/json");


$films = [
    'film1' => [
        'title' => 'The Shawshank Redemption',
        'details' => [
            'regisseur' => 'Frank Darabont',
            'jaar' => 1994,
            'genre' => 'Drama',       
        ]            
        
    ],
];

$filmsJSON = json_encode($films);

echo $filmsJSON;

?>


