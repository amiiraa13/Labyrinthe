<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exooo 1</h1>
    <?php
  $tableau = ['info'=> ['nom'=> 'Pesto','prenom' => 'Julia', 'age'=> 30],
              'films'=>['action'=>['Piège de cristal','Mad Max','Terminator','Matrix'],
              'comédie' => ['Brice de nice','Les visiteurs','Le diner de cons','Neuilly sa mère']] ];
foreach ($tableau['info'] as $key => $value) {
   echo ("<p> $key '' $value </p>");
}
foreach ($tableau['films'] as $key => $value) {
    foreach ($value as  $film) {
        echo("<p> $key : '' $film </p>");
    }
 }

    ?>
</body>
</html>