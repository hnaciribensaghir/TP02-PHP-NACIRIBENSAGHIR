<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 9</title>
</head>
<body>
    <?php
    // Données fictives : nom => note
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $seuil = 10;
    $somme = 0;
    $nbValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <h2>Notes des étudiants</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>
        <?php foreach ($notes as $nom => $note): ?>
            <?php
            // Accumulation de la somme
            $somme += $note;

            // Validation selon le seuil
            if ($note >= $seuil) {
                $resultat = "Validé";
                $nbValides++;
            } else {
                $resultat = "Non validé";
            }

            // Recherche de la meilleure note
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $nom;
            }
            ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td><?= $resultat ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php $moyenne = $somme / count($notes); ?>

    <h2>Statistiques</h2>
    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Nombre d'étudiants ayant validé : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>