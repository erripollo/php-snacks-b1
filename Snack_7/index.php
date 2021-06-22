<?php 
/* 
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$class = [
    [
        'name' => 'Enrico',
        'lastname' => 'Pollone',
        'grades' => [6, 8, 8, 7, 6.5, 10]
    ],
    [
        'name' => 'Giovanni',
        'lastname' => 'Rossi',
        'grades' => [7, 8.5, 8, 9, 6.5, 10]
    ],
    [
        'name' => 'Giulia',
        'lastname' => 'Bianchi',
        'grades' => [6.5, 8, 8, 7, 7, 10]
    ],
    [
        'name' => 'Valentina',
        'lastname' => 'Ferrari',
        'grades' => [6, 8, 8, 7.5, 9.5, 10]
    ],
]

/* echo '<pre>';
var_dump($class);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>

    
    <h2>Students</h2>
    <?php for ($i=0; $i < count($class); $i++) { 
        $student = $class[$i];?>

        <p>
            <?php echo $student['name']; ?> 
            <?php echo $student['lastname']; ?>
            <?php echo round((array_sum($student['grades'])/count($student['grades'])), 2);?>
        </p>

    <?php }; ?>



</body>
</html>