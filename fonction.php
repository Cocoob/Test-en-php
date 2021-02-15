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
age_limit($age);
?>