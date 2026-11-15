<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Résultat POST</title>
</head>
<body>
    <?php
    // isset() vérifie que les trois clés existent dans $_POST
    if (isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
        // trim() enlève les espaces au début et à la fin
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $groupe = trim($_POST["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : tous les champs sont obligatoires.</p>";
        } else {
            // htmlspecialchars() protège l'affichage HTML
            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue $prenom $nom, du groupe $groupe.</p>";
        }
    } else {
        echo "<p>Aucune donnée reçue. Veuillez passer par le formulaire.</p>";
    }
    ?>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>