<?php 
/* 
Snack 2
Passare come parametri GET name, mail e age
e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola
e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato
*/



//echo $_GET['name'];

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
    
    <h1>Registrazione</h1>

   <form action="#" method="get">
   <input type="text" name="name" id="name" placeholder="Name">
   <input type="text" name="mail" id="mail" placeholder="email">
   <input type="text" name="age" id="age" placeholder="age">
   <button type="submit" class="btn btn-primary">Submit</button>
   </form>

    <h2>
        <?php 
            if(
                strlen($_GET['name']) > 3 &&
                strpos($_GET['mail'], '@') && strpos($_GET['mail'], '.') &&
                is_numeric($_GET['age'])
            ){
                echo 'Accesso riuscito';
            }else{
                echo 'Accesso negato';
            };
        
        ?>
    </h2>

</body>
</html>