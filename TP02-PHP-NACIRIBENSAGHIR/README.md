# TP 02 PHP — Programmation Web 2 — 2026/2027

- **Nom :** Naciri Ben Saghir
- **Prénom :** Hibat-ALLAH
- **Groupe :** 1
- **Titre du TP :** TP 02 PHP

## Liste des exercices

1. Exercice 1 : balises PHP, commentaires et echo
2. Exercice 2 : variables, concaténation et casse
3. Exercice 3 : constantes et calculs (TVA)
4. Exercice 4 : types de données et conversions
5. Exercice 5 : conditions (if, elseif, else)
6. Exercice 6 : switch et date()
7. Exercice 7 : boucles for (table de multiplication, pyramide)
8. Exercice 8 : while, do-while, break et continue
9. Exercice 9 : tableau associatif et foreach
10. Exercice 10 : formulaires GET et POST

### Exercice 2

`$note` et `$Note` sont deux variables différentes car PHP est sensible à la casse pour les noms de variables.

Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` (le caractère `!` n'est pas autorisé) et `$1a` (un nom ne peut pas commencer par un chiffre).
### Exercice 4

`echo true` affiche `1`, alors que `echo false` n'affiche rien (chaîne vide), car `echo` convertit la valeur en chaîne de caractères. `var_dump()` affiche le type et la valeur réels : `bool(true)` et `bool(false)`.
### Exercice 5

| Valeur testée | Message obtenu |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |
### Exercice 10

**GET :** les valeurs apparaissent dans l'URL, après le `?`, sous la forme `ex10_get.php?nom=...&prenom=...&groupe=...`.

**POST :** les valeurs sont envoyées dans le corps de la requête ; l'URL reste `ex10_post.php`, sans paramètres visibles.

**Comparaison :** avec GET, les données sont visibles et modifiables dans l'URL ; avec POST, elles ne sont pas affichées dans l'URL.

## Exécution

Depuis la racine du dépôt, lancer :

    php -S localhost:8000

Puis ouvrir http://localhost:8000/index.php dans le navigateur.