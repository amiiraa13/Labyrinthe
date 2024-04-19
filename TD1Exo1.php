<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exo 1</h1>
    <?php
    $msgOne = "Bienvenue sur notre site";
    $msgTwo ="Vous n'etes pas autorisé a accéder a ce site";
    if ($age >= 18) {
        echo("<p>".$msgOne."</p>");
    }else {
        echo("<p>".$msgTwo."</p>");
    }
    ?>
    
</body>
</html>