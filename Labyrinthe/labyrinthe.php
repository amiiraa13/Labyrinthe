<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Labyrinthe</title>
</head>

<body>
    <header>
        <h1> Le Labyrinthe</h1>
        <p id="cons">Attrape la souris pour gagné !</p>
    </header>
    <main>
        <div class="niv">
            <p> Niveau : </p>
        <form  method="post">

            <input id="diff" type="submit" name="fog" value="hard">

        </form>
        </div>
        <?php
        session_start();
        $maze = [
            [
                [2, 0, 0, 0, 0, 0, 0, 1],
                [1, 1, 0, 0, 1, 0, 0, 1],
                [0, 1, 0, 1, 0, 1, 0, 1],
                [0, 1, 0, 0, 0, 0, 1, 1],
                [0, 0, 1, 1, 0, 0, 0, 3],
            ],
            [
                [2, 1, 0, 0, 1, 0, 0, 1],
                [0, 1, 0, 0, 0, 0, 0, 1],
                [0, 1, 0, 1, 0, 1, 0, 1],
                [0, 0, 0, 1, 0, 0, 0, 0],
                [1, 0, 1, 1, 0, 1, 0, 3],
            ]
        ];

        if (!isset($_SESSION['map'])) {
            $_SESSION['map'] = $maze[rand(0, count($maze) - 1)];
        }
        $maze = $_SESSION['map'];
        if (!isset($_SESSION['pos'])) {
            $_SESSION['pos'] = [0, 0];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['fog'])) {
                $_SESSION['fog'] = true;
            }
            if (isset($_POST["reset"])) {
                session_destroy();
            }

            if (isset($_POST['dir'])) {
                $maze[0][0] = 0;
                switch ($_POST['dir']) {
                    case 'up':
                        if ($_SESSION['pos'][0] - 1 >= 0 && $maze[$_SESSION['pos'][0] - 1][$_SESSION['pos'][1]] != 1) {
                            $_SESSION['pos'][0] = $_SESSION['pos'][0] - 1;
                            if ($maze[$_SESSION["pos"][0]][$_SESSION['pos'][1]] == 3) {
                                $gameOver = true;
                            }
                        }
                        $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1]] = 2;
                        break;
                    case 'down':
                        if ($_SESSION['pos'][0] <= count($maze) - 1 && $maze[$_SESSION['pos'][0] + 1][$_SESSION['pos'][1]] != 1) {
                            $_SESSION['pos'][0] = $_SESSION['pos'][0] + 1;
                            if ($maze[$_SESSION["pos"][0]][$_SESSION['pos'][1]] == 3) {
                                $gameOver = true;
                            }
                        }
                        $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1]] = 2;
                        break;
                    case 'left':
                        if ($_SESSION['pos'][1] >= 0 && $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1] - 1] != 1) {
                            $_SESSION['pos'][1] = $_SESSION['pos'][1] - 1;
                            if ($maze[$_SESSION["pos"][0]][$_SESSION['pos'][1]] == 3) {
                                $gameOver = true;
                            }
                        }
                        $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1]] = 2;
                        break;
                    case 'right':
                        if ($_SESSION['pos'][1] <= count($maze[$_SESSION['pos'][0]]) - 1 && $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1] + 1] != 1) {
                            $_SESSION['pos'][1] = $_SESSION['pos'][1] + 1;
                            if ($maze[$_SESSION["pos"][0]][$_SESSION['pos'][1]] == 3) {
                                $gameOver = true;
                            }
                        }
                        $maze[$_SESSION['pos'][0]][$_SESSION['pos'][1]] = 2;
                        break;
                    default:

                        break;
                }
            }
        }
        if (isset($_SESSION["fog"])) {
           foreach ($maze as $i => $line) {
            $catPos = $_SESSION['pos'];
            foreach ($line as $j => $cell) {
                if (!(
                    ($i === $catPos[0] && $j === $catPos[1]) ||
                    ($i === $catPos[0] + 1 && $j === $catPos[1]) ||
                    ($i === $catPos[0] - 1 && $j === $catPos[1]) ||
                    ($i === $catPos[0] && $j === $catPos[1] + 1) ||
                    ($i === $catPos[0] && $j === $catPos[1] - 1) ||
                    ($i === $catPos[0] + 1 && $j === $catPos[1] + 1) ||
                    ($i === $catPos[0] + 1 && $j === $catPos[1] - 1) ||
                    ($i === $catPos[0] - 1 && $j === $catPos[1] + 1) ||
                    ($i === $catPos[0] - 1 && $j === $catPos[1] - 1)
                )) {
                    $maze[$i][$j] = 4;
                }
            }
        }
        }
        
        ?>
        <?php if (isset($gameOver) && $gameOver === true) :
            session_destroy();
        ?>
            <p id="gagne">Bravo ! Vous avez attrapé la souris !</p>
            <form method="post">
                <input id="rejou" type="submit" name="replay" value="Rejouer">
            </form>
        <?php else : ?>
            <table class="tablo">
                <?php
                foreach ($maze as $row) {
                    echo ('<tr>');
                    foreach ($row as  $value) {
                        switch ($value) {
                            case 0:
                                echo ('<td class="zero"> ' . $value . '</td>');
                                break;
                            case 1:
                                echo ('<td> <img src="./assets/mur-de-briques.png"> </td>');
                                break;
                            case 2:
                                echo ('<td> <img src="./assets/chat.png"> </td>');
                                break;
                            case 3:
                                echo ('<td> <img src="./assets/souris.png"> </td>');
                                break;
                            case 4:
                                echo ('<td> <img src="./assets/nuage.png"> </td>');
                                break;
                            default:

                                break;
                        }
                    }
                    echo ('</tr>');
                }
                ?>
            </table>
            <form class="bouton" method="post">
                <div class="up">
                    <input id="haut" type="submit" name="dir" value="up">
                </div>
                <div class="cote">
                    <input id="gauche" type="submit" name="dir" value="left">
                    <input id="reset" type="submit" name="reset" value="reset">
                    <input id="droite" type="submit" name="dir" value="right">
                </div>
                <div class="down">
                    <input id="bas" type="submit" name="dir" value="down">
                </div>


            </form>
        <?php endif; ?>
    </main>
</body>

</html>