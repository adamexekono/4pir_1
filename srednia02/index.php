<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadanie 2</title>
</head>
<body>
    <header>
        <h1>Zadanie 2</h1>
        <h2>Autor: Adam Konopski 4pir_1</h2>
    </header>
    <section>
        <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
        <form action="index.php" method="post">
            <label for="liczba_a">Podaj liczbę a:</label><input type="text" id="liczba_a" name="liczba_a">
            <label for="liczba_b">Podaj liczbę b:</label><input type="text" id="liczba_b" name="liczba_b">
            <label for="liczba_c">Podaj liczbę c:</label><input type="text" id="liczba_c" name="liczba_c">
            <label for="liczba_d">Podaj liczbę d:</label><input type="text" id="liczba_d" name="liczba_d">
            <input type="submit" value="Wyślij">
        </form>

        <?php
        if(isset($_POST['liczba_a'])) {
            $a = $_POST['liczba_a'];
            $b = $_POST['liczba_b'];
            $c = $_POST['liczba_c'];
            $d = $_POST['liczba_d'];


            $srednia = ($a+$b+$c+$d)/4;
            $srednia_zaokraglona = round($srednia,3);
            echo "średnia niezaokrąglona = $srednia</br>Średnia zaokrąglona = $srednia_zaokraglona";

        }
        ?>

    </section>

</body>
</html>
