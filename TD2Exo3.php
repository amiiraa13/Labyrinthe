<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exoo 3</h1>
    <?php
    $nmb = 300;
    $nmbRand = null;
    $try = 0;
    while ($nmbRand != $nmb) {
        $nmbRand == rand(100,999);
        $try++;
    }
    echo("<p>$try</p>");


    


    ?>
</body>
</html>