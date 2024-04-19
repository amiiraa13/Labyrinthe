<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exoooo 1</h1>
    <?php
    
    function pyra ($line){
    
    for ($i=1; $i <= $line ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
          echo ($i );
        }
        echo("<br>");
    }
}
pyra(8);
    ?>
</body>
</html>