<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exo 4</h1>
    <?php
    $age = 16;
    switch ($age) {
        case 12:
            echo " Trop jeune";
            break;
        case 16:
             echo " Presque";
            break;
         case 18:
             echo " Bravo";
             break;
        default:
            echo "dommage";
            break;
    }
    ?>
</body>
</html>