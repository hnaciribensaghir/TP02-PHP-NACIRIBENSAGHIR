<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 5</title>
</head>
<body>
    <?php
    // Change cette valeur pour tester : -1, 9, 10, 12, 14, 16, 21
    $moyenne = 14;

    echo "Moyenne : " . $moyenne . "<br>";

    // D'abord on vérifie que la note est valide (entre 0 et 20)
    if ($moyenne < 0 || $moyenne > 20) {
        echo "Note invalide";
    } elseif ($moyenne < 10) {
        echo "Non validé";
    } elseif ($moyenne < 12) {
        echo "Passable";
    } elseif ($moyenne < 14) {
        echo "Assez bien";
    } elseif ($moyenne < 16) {
        echo "Bien";
    } else {
        echo "Très bien";
    }
    ?>
</body>
</html>