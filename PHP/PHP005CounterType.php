<?php

/*
OBJECTIF : CREER UNE FONCTION countType($array) QUI PERMATTRA DE CONNAITRE LE NOMBRE DE CARACTERES NUMERIQUES ET LE NOMBRE DE LETTRES D'UN TABLEAU DANS UN NOUVEAU TABLEAU

EX 1
countType("Bonjour les gars") ➞ array("Lettres" =>  14, "Chiffres" => 0)

EX 2
countType("Tous les 36 du mois") ➞ array("Lettres" =>  13, "Chiffres" => 2)

EX 3
countType("345 987 234") ➞ array("Lettres" => 0, "Chiffres" => 9)
*/

$countType = function($data){
    
    $letterCount = 0;
    $integerCount = 0;
    $sentence = str_split(str_replace(" ","",$data));
    foreach($sentence as $current){
        if(preg_match("(\d)",$current)){
            $integerCount++;
            continue;
        }
        if(preg_match("(\w)",$current)) $letterCount++;

    }

    echo "<pre>".print_r(array('Lettres'=>$letterCount,'Chiffres'=>$integerCount),true)."</pre>";
};

$countType("Bonjour les gars");
$countType("Tous les 36 du mois");
$countType("345 987 234");
