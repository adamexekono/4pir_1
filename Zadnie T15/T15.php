<?php
    $db = mysqli_connect('localhost','root','','bazydanych');
    $q = "SELECT * FROM `gatunki`";

    $wynik = mysqli_query($db,$q);

    while($el = mysqli_fetch_row($wynik)){
        echo $el[0]." ".$el[1]."<br>";
    }
    mysqli_close($db);
