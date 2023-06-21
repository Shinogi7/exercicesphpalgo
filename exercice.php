<?php
echo"Exercice 1 : Écrivez un programme PHP qui affiche tous les nombres pairs de 1 à 50.<br>";


for ($i = 1;$i <= 50; $i++) {

    if ($i%2==0) 
    echo "$i <br>";
    };


echo "<br> Exercice 2 : Écrivez un programme PHP qui prend en entrée un tableau de nombres et renvoie la somme de tous 
les éléments du tableau.
<br>";

$liste_nombre = array(1,5,4,6,7,2);

$somme = array_sum($liste_nombre);

echo "<br> $somme <br>";



?>