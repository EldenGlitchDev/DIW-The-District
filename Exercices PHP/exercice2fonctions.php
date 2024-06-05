<?php
//Définir tableau des nombres
$tab = array(4, 3, 8, 2);

//Définir fonction pour calculer la somme
function calcul($tab){
    $somme=0;
    foreach($tab as $nombre){
        $somme += $nombre;
    };
    return $somme;
}

//Calculer la somme en utilisant la fonction
$resultat=calcul($tab);

//Affichage résultat
echo "La somme est : " . $resultat;




?>