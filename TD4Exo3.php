<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exoooo 3</h1>
    <?php
    $tableau = [3, 7, 1, 15, 9];

   
    $plusGrand = null;
    
  
    foreach ($tableau as $element) {
     
        if (is_numeric($element)) {
           
            if ($plusGrand === null || $element > $plusGrand) {
                $plusGrand = $element;
            }
        }
    }
    
    
    echo  $plusGrand;
    ?>
</body>
</html>