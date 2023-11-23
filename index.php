<?php
$x = 10;
$y = 20;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Aritmatika</title>
</head>

<body>
    <h2>Hasil dari Penjumlahan <?= $x + $y;  ?>
        <br>
    </h2>
    <h2>Hasil dari Pengurangan <?= $x - $y;  ?>
        <br>
    </h2>
    <h2>Hasil dari Perkalian <?= $x * $y;  ?>
        <br>
    </h2>
    <h2>Hasil dari Pembagian <?= $x / $y;  ?>
        <br>
    </h2>
    <h2>Hasil dari Modus <?= $x % $y;  ?>
    </h2>
</body>

</html>