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
    if ($_SERVER["REQUEST_METHOD"]== "POST" ) {
   echo "<style> body{background-color:$_POST[colors] }</style>";    
    }
    
    ?>
 

<form action="" method="post"> <label for="colorsChoise"></label>
<input type="text" name="colors">
<button type="submit">valider</button>
</form>
</body>
</html>