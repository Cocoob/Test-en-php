<?php
// Exercice 1
$mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');

// Exercice 2
echo $mois[2];

// Exercice 3
echo $mois[5];

// Exercice 4
$mois[9] = 'Août';

// Exercice 5
    $Hauts_de_france[02] = 'Aisne';
    $Hauts_de_france[59] = 'Nord';
    $Hauts_de_france[60] = 'Oise';
    $Hauts_de_france[62] = 'Pas-de-calais';
    $Hauts_de_france[80] = 'Somme';

// Exercice 6
echo $Hauts_de_france[59];

// Exercice 7
$Hauts_de_france[51] = "Marne";

// Exercice 8
for ($result = 0 ; $result < 12; $result++){
    echo $mois[$result]. '</br>';
}

// Exercice 9
foreach ($Hauts_de_france as $departement){
    echo $departement. ' </br>';
}

// Exercice 10
foreach ($Hauts_de_france as $cle => $departement){
    echo 'Le département ' . $departement. ' a le numéro ' .$cle. ' </br>' ;
}
?>
