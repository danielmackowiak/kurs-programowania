<?php
// Użytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma pole i obwód domyślnie zaznaczone ma być 'pole'
// Zabezpiecz formularz przed podaniem pustych danych

// Wynik wyświetl w formacie:
// Pole wynosi: 20cm2 (2 ma byc w indeksie górnym)
// Obwód wynosi: 20cm
// Dane wyślij z formularza bezpiecznie (POST)
// Obliczenia mają być wyidoczne w innym pliku
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php
        $bokA = $_POST['bok_A'];
        $bokB = $_POST['bok_B'];
        $guzik = $_POST['typ'];

        $pole = $bokA * $bokB;
        $obwod = $bokA + $bokB;

        if (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "p") {
            echo "Pole wynosi: $pole cm<sup>2</sup>";
        }elseif (!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])&& $guzik == "o") {
            echo "Obwód wynosi: $obwod cm";
        }else {
            ?>
            <script>
              history.back();
            </script>
            <?php
        }
    ?>
</body>
</html>