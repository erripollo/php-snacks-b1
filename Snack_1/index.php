<?php 
/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */


$matchs = [
    [
        'home' => [
            'name' => 'Olimpia Milano',
            'score' => rand(40, 120)
        ],
        'guest' => [
            'name' => 'Cantù',
            'score' => rand(40, 120)
        ]
    ],
    [
        'home' => [
            'name' => 'Sassari',
            'score' => rand(40, 120)
        ],
        'guest' => [
            'name' => 'Brindisi',
            'score' => rand(40, 120)
        ]
    ],
    [
        'home' => [
            'name' => 'Trento',
            'score' => rand(40, 120)
        ],
        'guest' => [
            'name' => 'Brescia',
            'score' => rand(40, 120)
        ]
    ],
    [
        'home' => [
            'name' => 'Treviso',
            'score' => rand(40, 120)
        ],
        'guest' => [
            'name' => 'Cremona',
            'score' => rand(40, 120)
        ]
    ],
    [
        'home' => [
            'name' => 'Pesaro',
            'score' => rand(40, 120)
        ],
        'guest' => [
            'name' => 'Bologna',
            'score' => rand(40, 120)
        ]
    ],

];

/* echo '<pre>';
var_dump($matchs);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <h1>Risultati</h1>

    <?php for ($i=0; $i < count($matchs) ; $i++) { 
        
       $match = $matchs[$i]; ?>

        <p>
            <?php echo $match['home']['name']; ?> - <?php echo $match['guest']['name']; ?> | 
            <?php echo $match['home']['score']; ?>-<?php echo $match['guest']['score']; ?>
        </p>

    <?php }; ?>


</body>
</html>