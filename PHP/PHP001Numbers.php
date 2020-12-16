<?php

/*
OBJECTIF : CREER UNE FONCTION notAdd($x, $y) PERMETTANT DE SUIVRE LA LOGIQUE CI-DESSOUS

notAdd(32, 48) ➞ 710
3+4 = 7, 2+8 = 10
32 + 48 = 710

notAdd(693, 44) ➞ 6137
6+0 = 6, 9+4 = 13, 4+3 = 7
693 + 44 = 6137

notAdd(4873, 72976) ➞ 7617149
/...
*/
$notAdd = function($x,$y){
    $xLen = strlen($x);
    $yLen = strlen($y);
    $timesZero = 0;  
    $output = '';
    if($xLen > $yLen){
       
        $y = sprintf("%0{$xLen}d",$y);
    }
     if($xLen < $yLen)
    {
        $x = sprintf("%0{$yLen}d",$x);
    }

        $splittedY = str_split( $y);
        $splittedX = str_split( $x);
        for($i=strlen($x)-1 ; $i >=0 ; $i--)
        {
        $currentAdd = $splittedX[$i]+$splittedY[$i];
        
        $output = "$currentAdd$output";
       
        }
        return $output;
};

echo $notAdd(4873,72976);