<?php
   $tablica = [12,45,232,4235243,67435,342,727];

   function suma_swoch_najmniejszych($tablica) {
       sort($tablica);
       $suma = ($tablica[0])+($tablica[1]);
       echo $suma;
}

suma_swoch_najmniejszych($tablica);