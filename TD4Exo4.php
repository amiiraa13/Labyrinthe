<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exoooo 4</h1>
    <?php

function moduloSansOperateur($dividende, $diviseur) {
   
    $partieEntiere = intdiv($dividende, $diviseur);
    
   
    $produit = $partieEntiere * $diviseur;
    

    $modulo = $dividende - $produit;
    
    
    return $modulo;
}


$dividende = 17;
$diviseur = 5;
echo "Le résultat de $dividende modulo $diviseur est : " . moduloSansOperateur($dividende, $diviseur);

    ?>
</body>
</html>