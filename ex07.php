<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 7</title>
</head>
<body>
    <section>
        <h2>Table de multiplication</h2>
        <?php
        $nombre = 7;

        for ($i = 1; $i <= 10; $i++) {
            echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <hr>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre>
<?php
// Boucle externe : les 6 lignes
for ($ligne = 1; $ligne <= 6; $ligne++) {
    // Boucle interne : $ligne étoiles sur la ligne courante
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "\n";
}
?>
        </pre>
    </section>
</body>
</html>