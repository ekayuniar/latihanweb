<?php
$todayDate = "30 nov 2023"; //pendefinisian tanggal awal  
$returnDate = date('d-m-Y', strtotime('+7 Year', strtotime($todayDate))); //operasi penjumlahan tanggal sebanyak 7 hari 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        Tanggal hari ini = <?= $todayDate;  ?>
        <br>
        Tanggal 7 hari dari skrg = <?= $returnDate;  ?>
    </h3>
</body>

</html>