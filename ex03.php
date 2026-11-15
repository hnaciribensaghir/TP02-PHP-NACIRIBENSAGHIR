<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 3</title>
</head>
<body>
    <?php
    // Constantes (leur valeur ne change pas)
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Données de la commande
    $prixUnitaireHT = 60;
    $quantite = 3;

    // Calculs
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // Ajout des frais de livraison avec +=
    $totalFinal = $totalTTC;
    $totalFinal += 15;
    ?>

    <h2>Récapitulatif de la commande</h2>
    <p>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></p>
    <p>Quantité : <?= $quantite ?></p>
    <p>Total HT : <?= $totalHT . " " . DEVISE ?></p>
    <p>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA . " " . DEVISE ?></p>
    <p>Total TTC : <?= $totalTTC . " " . DEVISE ?></p>
    <p>Montant final avec livraison (15 <?= DEVISE ?>) : <?= $totalFinal . " " . DEVISE ?></p>

    <?php
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas.</p>";
    }
    ?>
</body>
</html>