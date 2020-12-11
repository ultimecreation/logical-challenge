<?php

/*
OBJECTIF : CREER UNE FONCTION MultiplyByHimself($array) EN SUIVANT LA LOGIQUE CI-DESSOUS

EXEMPLES
MultiplyByHimself([3, 8, 2, 0]) ➞ [12, 32, 8, 0]
MultiplyByHimself([6, 4, 3]) ➞ [18, 12, 9]
MultiplyByHimself([3, 0, 9, 11, 4, 2, 1]) ➞  [21, 0, 63, 77, 28, 14, 7]
MultiplyByHimself([0]) ➞ [0]
*/
$MultiplyByHimself = function($array){
    $arrayLen = count($array);
    $test = array_map(fn($num)=> $num * $arrayLen,
    $array);
    echo "<pre>".print_r($test,true)."</pre>";

};

$MultiplyByHimself([3, 8, 2, 0]);
$MultiplyByHimself([6, 4, 3]);
$MultiplyByHimself([3, 0, 9, 11, 4, 2, 1]);
$MultiplyByHimself([0]);