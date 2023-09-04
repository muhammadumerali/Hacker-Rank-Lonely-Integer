<?php

function lonelyinteger($a) {
    // Write your code here
    $repition = [];
    $non_repeated = 0;
    foreach($a as $value){
        if(isset($repition[$value])){
            $repition[$value] = $repition[$value] + 1;
        }
        else{
            $repition[$value] = 1;
        }
    }
    
    foreach($repition as $key => $value){
        if($value == 1){
            $non_repeated = $key;
            break;
        }
    }
    
    return $non_repeated;
}

$a = [4, 9, 95, 93, 57, 4, 57, 93, 9];
lonelyinteger($a);



?>