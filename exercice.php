<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercixes</title>
</head>
<body>
<?php
echo"Exercice 1 : Écrivez un programme PHP qui affiche tous les nombres pairs de 1 à 50.<br><br>";


for ($i = 1;$i <= 50; $i++) {

    if ($i%2==0) 
    echo "$i <br>";
    };


echo "<br> Exercice 2 : Écrivez un programme PHP qui prend en entrée un tableau de nombres et renvoie la somme de tous les éléments du tableau. <br>";

    $liste_nombre = array(1,5,4,6,7,2);

    $somme = array_sum($liste_nombre);

        echo "<br> $somme <br>";


echo "<br> Exercice 3 : Écrivez un programme PHP qui prend en entrée une chaîne de caractères et renvoie la longueur de cette chaîne. <br>"


?> 

    <form action="exercice.php" method="get">
        Entrez une chaine de caractère : <Input type="text" name="chaine">
    </form><?php

            $chaine = $_GET["chaine"];

            $longchaine = strlen($chaine);


                echo("$chaine = $longchaine");



?>

</body>
</html>