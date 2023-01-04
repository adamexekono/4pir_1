<?php

$tablica_imion = ['Jan','Barbara','Marek','Jan','Oskar','Katarzyna'];

function ile_dziewczyn($tab) {
    $suma = 0;
    foreach ($tab as $elem){
        if($elem[strlen($elem)-1]=="a")
            $suma+=1;
    }
    return $suma;
}

echo "W podanej tablicy imion ilość dziewczyn wynosi: ".ile_dziewczyn($tablica_imion);

?>

