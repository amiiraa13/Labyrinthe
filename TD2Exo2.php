<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
   <h1>Exoo 2</h1> 
   <?php
    $nmb = rand(1, 15);
    $nmbTwo = rand(1, 15);
    while ( $nmb %2 != 0|| $nmbTwo %2 == 0 ) {
        $nmb = rand(1, 15);
    $nmbTwo = rand(1, 15);
        
    }
    echo $nmb .$nmbTwo ;
   ?>
</body>
</html>