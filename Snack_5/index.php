<?php 
/* 
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/


$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum suscipit mollitia maxime, ipsa eum ipsum tempore, soluta quo nesciunt consequatur repellendus optio atque sunt id dicta aspernatur eligendi totam consequuntur harum. Fuga quasi facere totam libero! Ut molestias iusto exercitationem corporis blanditiis aspernatur est explicabo aliquam consequatur earum! Cum doloremque maxime voluptatibus? Consequatur minima et cumque earum, debitis explicabo voluptatem maiores molestias, tempore sint error excepturi voluptate culpa facere veniam dignissimos? Eos, nesciunt quidem blanditiis consectetur ullam tempore, dolores hic eligendi reprehenderit velit sapiente enim nostrum dignissimos architecto aspernatur voluptatum eum harum odit eveniet earum in repellat fugit cum?';

$paragraphs = explode('.', $text);

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
</head>
<body>
    
    <h2>Paragrafo intero</h2>
    <p><?php echo $text; ?></p>


    <h2>Paragrafi divisi</h2>
    <?php for ($i=0; $i < count($paragraphs); $i++) { ?>

        <p>
            <?php echo $paragraphs[$i]; ?>
        </p>

    <?php }; ?>


</body>
</html>