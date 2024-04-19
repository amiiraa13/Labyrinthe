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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/",$_POST["email"])) {
            echo("C'est un mail");
        }else {
            echo("C'est pas un mail");
        }
        if (preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]+$/",$_POST["nom"])) {
            echo("C'est un nom");
        }else {
            echo("C'est pas un nom");
        }
        if (preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]+$/",$_POST["prenom"])) {
            echo("C'est un prenom");
        }else {
            echo("C'est pas un prenom");
        }
        if (preg_match("/^\+(?:[0-9] ?){6,14}[0-9]$/",$_POST["tel"])) {
            echo("C'est un num de tel");
        }else {
            echo("C'est pas un num de tel");
        }
        if (preg_match("/^[\s\S]{1,1000}$/",$_POST["msg"])) {
            echo("C'est un msg");
        }else {
            echo("C'est pas un msg");
        }
    }
    
    ?>
 <form action="" method="post">
    <div>
        <label for="email"> email</label>
        <input type="text" id="email" name="email">
        <label for="nom"> nom</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom"> prenom</label>
        <input type="text" id="prenom" name="prenom">
        <label for="tel"> tel</label>
        <input type="text" id="tel" name="tel">
        <label for="msg"> msg</label>
        <input type="text" id="msg" name="msg">
    </div>
<button>envoyer</button>
 </form>


</body>
</html>