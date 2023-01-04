<?php
$tablica_1= ['1','23','24','634'];
$tablica_2 = ['213','54','31','2','5'];
function sortowanie($tablica_1, $tablica_2){
    $tablica = array_merge($tablica_1, $tablica_2);
    array_multisort($tablica_1, $tablica_2);
    print_r($tablica,SORT_DESC,SORT_NUMERIC);
}

sortowanie($tablica_1,$tablica_2);
?>
