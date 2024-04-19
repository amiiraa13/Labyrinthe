<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exoooo 5</h1>
    <?php
function compterApparitions($chaine, $caractere) {
    // Utiliser substr_count pour compter le nombre d'apparitions du caractère dans la chaîne
    $nombreApparitions = substr_count($chaine, $caractere);
    
    // Retourner le nombre d'apparitions
    return $nombreApparitions;
}


$chaine = "Bonjour le monde!";
$caractere = "o";
echo "Le caractère '$caractere' apparaît " . compterApparitions($chaine, $caractere) . " fois dans la chaîne : '$chaine'";


    ?>
</body>
</html>