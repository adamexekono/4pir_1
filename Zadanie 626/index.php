<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 626</title>
</head>
<body>
<header>
    <h1>Zadanie 626</h1>
    <h2>Autor: Adam Konopski 4pir </h2>
</header>
<section>
    <p>Z bazy o nazwie dane wyświetl dane pracowników z tabeli pracownicy.</p>
</section>
<?php
$do_bazy = mysqli_connect('localhost','root','','bazadanych'); if (!$do_bazy){
    echo "Błąd połączenia z serwerem MySql.</br>";
?>
    <?php
    exit;
} else {
    $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM pracownicy'); if(!$zapytanie){
        mysqli_close();
        echo "Błąd w zapytaniu<br>";
        ?>
<?php
exit;
    }else{
        ?>

<table>
    <tr>
        <td>ID</td>
        <td>Nazwisko</td>
        <td>Imię</td>
        <td>Stanowisko</td>
    </tr>
<?php
while ($wiersze = mysqli_fetch_row($zapytanie)) { echo "<tr>";
    echo"<td>$wiersze[0]</td>";
    echo"<td>$wiersze[0]</td>";
    echo"<td>$wiersze[0]</td>";
    echo"<td>$wiersze[0]</td>";
    echo "</tr>";


}
?>
    </table>
            <?php
            mysqli_close($do_bazy);
       }
    }
    ?>
</body>
</html>
