<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 8</title>
</head>
<body>
    <section>
        <h2>Partie 1 : nombres pairs de 0 à 20</h2>
        <?php
        $n = 0;
        while ($n <= 20) {
            if ($n == 10) {
                echo "<strong>" . $n . "</strong> ";
            } else {
                echo $n . " ";
            }
            $n += 2;
        }
        ?>
    </section>

    <hr>

    <section>
        <h2>Partie 2 : while et do-while</h2>
        <?php
        // Boucle while
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
        }

        // Boucle do-while (on réinitialise le compteur avant)
        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
        } while ($compteur < 5);

        echo "Exécutions de while : " . $executionsWhile . "<br>";
        echo "Exécutions de do-while : " . $executionsDoWhile . "<br>";
        ?>
    </section>

    <hr>

    <section>
        <h2>Partie 3 : continue et break</h2>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            // On arrête la boucle dès que le compteur atteint 16
            if ($i >= 16) {
                break;
            }
            // On ignore les multiples de 3
            if ($i % 3 == 0) {
                continue;
            }
            echo $i . " ";
        }
        ?>
    </section>
</body>
</html>