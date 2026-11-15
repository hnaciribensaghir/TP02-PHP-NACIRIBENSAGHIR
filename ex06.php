<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 6</title>
</head>
<body>
    <?php
    // Change cette valeur pour tester : 1, 3, 12, 15
    $numeroMois = 3;

    echo "Numéro du mois : " . $numeroMois . "<br>";
    echo "Nom du mois : ";

    switch ($numeroMois) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo "Numéro de mois invalide";
    }
    ?>

    <hr>

    <?php
    // Mois courant du serveur
    $moisCourant = (int) date("m");

    echo "Mois courant (numéro) : " . $moisCourant . "<br>";
    echo "Mois courant (nom) : ";

    switch ($moisCourant) {
        case 1:  echo "Janvier"; break;
        case 2:  echo "Février"; break;
        case 3:  echo "Mars"; break;
        case 4:  echo "Avril"; break;
        case 5:  echo "Mai"; break;
        case 6:  echo "Juin"; break;
        case 7:  echo "Juillet"; break;
        case 8:  echo "Août"; break;
        case 9:  echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "Numéro de mois invalide";
    }
    ?>
</body>
</html>