<?php

/*
OBJECTIF : CREER UNE FONCTION isAlternate($array) qui vérifiera si l'entier suivant d'un tableau est bien une alternative Pair/Impair du chiffre précédent

EX 1
isAlternate([ 1, 4, 3, 8, 1, 2, 3, 6 ]) -> true

EX 2
isAlternate([ 2, 4, 3, 6, 3, 4, 2, 1 ]) -> false

EX 3
isAlternate([ 2, 4, 2, 8, 7, 3, 4, 8 ]) -> false
*/

$isAlternate = function($array){
    for($i=0 ; $i<count($array); $i++){
        if($i == 0){

        }
        echo "<pre>".print_r($test,true)."</pre>";

        if($i == 0) continue;
        if( ($array[$i] % 2 == 0 && $array[$i-1] % 2 == 1) || ($array[$i] % 2 == 1 && $array[$i-1] % 2 == 0)) return 'true';
        return 'false';
        // echo "<pre>".print_r($test,true)."</pre>";
    }

};

$isAlternate([ 1, 4, 3, 8, 1, 2, 3, 6 ]);
echo $isAlternate([ 1, 4, 3, 8, 1, 2, 3, 6 ]).'<br>';
echo $isAlternate([ 2, 4, 3, 6, 3, 4, 2, 1 ]).'<br>';
echo $isAlternate([ 2, 4, 2, 8, 7, 3, 4, 8 ]).'<br>'; 
