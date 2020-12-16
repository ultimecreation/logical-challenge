<?php

/*
OBJECTIF : CREER UNE FONCTION sommeCubes($array) QUI CALCULE LA SOMME DES CUBES D'UN ARRAY

EX 1 sommeCubes([ 3, 4, 2 ]) -> 81   // 3 au cube = 27 ; 4 au cube = 64 ; 2 au cube = 8 // RESULTAT 9 + 64 + 8 = 81
EX 2 sommeCubes([ 8, 2, 5 ]) -> 645   // 8 au cube = 512 ; 2 au cube = 8 ; 5 au cube = 125 // RESULTAT 512 + 8 + 125 = 645 
*/

$sommeCubes = function($array){
    $sum = 0;
    foreach($array as $value ){
        $sum = $sum + pow($value,3);
    }
    return $sum;
};

echo $sommeCubes(array(3,4,2))."<br>";
echo $sommeCubes([ 8, 2, 5 ]);