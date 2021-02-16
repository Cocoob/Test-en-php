<?php
// Exercice 1
function age_limit($age)
{
    if ($age >= 18) 
    {
        $majeur = true;
        var_dump($majeur);
    }
}

$age = 24;
age_limit(true);

// Exercice 2
function a($name){
    echo $name. ' ';
}

a('Coco');

// Exercice 3
function b ($first_name, $last_name){
    echo $first_name. ' ' .$last_name. ' ';
}
b('Corentin','Bousquet');

// Exercice 4
function c($first_number, $second_number){
    if ($first_number > $second_number)
    {
        echo 'Le premier nombre est plus grand ';
    }
    elseif ($first_number<$second_number)
    {
        echo 'Le premier nombre est plus petit ';
    }
    else 
    {
        echo 'Les deux nombres sont identiques ';
    }
}

c(15,8);

// Exercice 5
function d ($name, $number){
    echo $name. ' ' .$number. ' ';
}
d('Corentin', 8);

// Exercice 6
function e ($first_name, $last_name, $age){
    echo 'Bonjour ' .$first_name. ' ' .$last_name. ' tu as ' .$age. ' ans';
}
e('Corentin','Bousquet', 24);

// Exercice 7

function f($age, $genre)
{
    $majeur = 18;
    if ($age < $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes mineur';
    }
    elseif ($age >= $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes majeur';
    }
    elseif ($age < $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
    elseif ( $age >= $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes majeur';
    }
    else 
    {
        echo 'Désolé, veuillez remplir les champs à nouveaux';
    }
}

f(20, 'Femme');

// Exercice 8
function g($first_number = 1, $second_number = 1, $third_number = 1){
    echo $first_number + $second_number + $third_number;
}

g(2,2,2);

?>
