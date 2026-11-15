<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP - Exercice 4</title>
</head>
<body>
    <?php
    // Six variables de types différents
    $entier = 42;
    $chaineNombre = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;
    ?>

    <h2>1. Types et valeurs</h2>
    <pre>
<?php
var_dump($entier);
var_dump($chaineNombre);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
    </pre>

    <h2>2. Conversions</h2>
    <pre>
<?php
echo '(int) "42" : ';
var_dump((int) $chaineNombre);

echo '(int) 15.8 : ';
var_dump((int) $decimal);

echo '(string) 42 : ';
var_dump((string) $entier);
?>
    </pre>

    <h2>3. Affichage de true et false</h2>
    <p>echo true : [<?= $vrai ?>]</p>
    <p>echo false : [<?= $faux ?>]</p>
    <pre>
<?php
echo "var_dump(true) : ";
var_dump($vrai);
echo "var_dump(false) : ";
var_dump($faux);
?>
    </pre>

    <h2>4. Conversion en booléen</h2>
    <pre>
<?php
echo '(bool) 0 : ';
var_dump((bool) 0);

echo '(bool) "0" : ';
var_dump((bool) "0");

echo '(bool) "PHP" : ';
var_dump((bool) "PHP");

echo '(bool) [] : ';
var_dump((bool) []);
?>
    </pre>
</body>
</html>