<?php
require 'php/functions.php';
$Tumbuhan = query("SELECT * FROM tumbuhan")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/mantap.css">
    <title>Tumbuhan</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Tumbuhan</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 red darken-3 white-text">
                <th>No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Nama Latin</th>
                <th style="text-align: center;">Informasi Produk</th>
                <th style="text-align: center;">Gambar</th>
                <th style="text-align: center;">Detail</th>
            </tr>
            <?php $i = 1?>
            <?php foreach ($Tumbuhan as $pon): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$pon["nama"];?></td>
                <td><?=$pon["nama_latin"];?></td>
                <td><?=$pon["manfaat"];?></td>
                <td><img width="100px" src="assets/pict/<?=$pon["gambar"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="php/detaill.php?id=<?=$pon['id'];?>">Lihat Tumbuhan</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
    </div>
</body>

</html>