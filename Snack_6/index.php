<?php 
/* 
Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

/* echo '<pre>';
var_dump($paragraphs);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>

    <style>
        .grey{
            background-color: grey;
            display: inline-block;
            padding: 2rem;
        }
        .green{
            background-color: green;
            display: inline-block;
            padding: 2rem;
        }
    </style>
</head>
<body>

    <div class="grey">
        <h2>Teachers</h2>
        <?php for ($i=0; $i < count($db['teachers']); $i++) { 
            $teacher = $db['teachers'][$i];?>

            <p>
                <?php echo $teacher['name']; ?> 
                <?php echo $teacher['lastname']; ?>
            </p>

        <?php }; ?>
    </div>

    <div class="green">
        <h2>PM</h2>
        <?php for ($i=0; $i < count($db['pm']); $i++) { 
            $pm = $db['pm'][$i];?>

            <p>
                <?php echo $pm['name']; ?> 
                <?php echo $pm['lastname']; ?>
            </p>

        <?php }; ?>
    </div>


</body>
</html>