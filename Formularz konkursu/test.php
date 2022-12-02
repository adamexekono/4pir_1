<!DOCTYPE HTML>
<html>

</head>
<body>

<form action="test.php" method="post">
     <p id="fo">Formularz kontaktowy:
        </p>Nazwisko:<br>
    <input type="text" name="NAZWISKO" value=" " size="30">
        <br>Imię:<br>
    <input type="text" name="IMIE" value=" " size="30">
        <br>Aders e-mail:<br>
    <input type="text" name="EMILE" value=" " size="30">
        <br>Uwagi:<br>
    <input type="text" name="UWAGI" value=" " size="40">
        <p class="KOL">Kolor:</p>
    <input type="radio" value="Czerwony" name="KOLOR"> Czerwony<br>
    <input type="radio" value="Zielony" name="KOLOR"> Zielony<br>
    <input type="radio" value="Czarny" name="KOLOR"> Czarny<br>
    <input type="radio" value="Biały" name="KOLOR"> Biały<br>
        <p class="DODATKI">Dodaatki:</p>
    <input type="radio" value="Głośniki" name="DOD"> Głośniki<br>
    <input type="radio" value="Świecące sznurówki" name="DOD"> Świecące sznurówki <br>
    <input type="radio" value="Klawiatura" name="DOD"> Klawiatura<br>
    <input type="radio" value="Podeszwa" name="DOD"> Podeszwa<br>
        <br><p class="rozmiar">Rozmiar buta</p>
    <select name="rozmiarbuta" multiple>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
    </select>
    <p><input type="checkbox" name="opcje" maxlength="1">Zgadzam się na przetwarzanie moich danych osobowych</p>
        <input type="submit" value="Wyślij" name="wyslij">&nbsp;&nbsp;<input type="reset" value="Wyczyść" name="zeruj">
    <?php
    echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";echo "Wprowadzone dane:<br>";
    echo "Imię: " . trim($_POST['IMIE']) . "<br>";
    echo "Nazwisko: " . trim($_POST['NAZWISKO']) . "<br>";
    echo "Adres E-mile: " . trim($_POST['EMILE']) . "<br>";
    echo "Kolor: " . trim($_POST['KOLOR']) . "<br>";
    echo "Rozmiar buta: " . trim($_POST['rozmiarbuta']) . "<br>";
    echo "Dodatki: " . trim($_POST['DOD']) . "<br>";if (!isset($_POST['DOD'])) {
        echo "Proszę zaznaczyć pole dodatki!";
    } else
    ?>

    <link rel="stylesheet" href="style.css">
</form>
</body>
</html>
