<?php 
/* 
Snack 2
Creiamo due pagine php.
La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di un invitato.
Inseriamo nell’altro file una lista di invitati.
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.
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

   <form action="./list.php" method="get">
   <input type="text" name="name" id="name" placeholder="Name">
   <button type="submit" class="btn btn-primary">Submit</button>
   </form>

   

</body>
</html>