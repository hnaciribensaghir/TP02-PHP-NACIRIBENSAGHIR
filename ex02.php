<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 2</title>
</head>
<body>
    <?php
    // Données fictives
    $nom = "Naciri Ben Saghir";
    $prenom = "Hibat-ALLAH";
    $age = 20;
    $formation = "IAP";

    // Phrase de présentation avec la concaténation (.)
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";

    // Ajout avec .=
    $phrase .= "J'apprends PHP";

    echo $phrase . "<br><br>";

    // Deux variables différentes par la casse
    $note = 12;
    $Note = 16;
    echo "Valeur de \$note : " . $note . "<br>";
    echo "Valeur de \$Note : " . $Note . "<br>";
    ?>
</body>
</html>