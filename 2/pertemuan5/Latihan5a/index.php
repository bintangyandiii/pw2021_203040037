<?php 
require 'php/functions.php';
$Hijab = query("SELECT * FROM hijab");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040037</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Informasi Produk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Hijab as $kerudung) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="220px" src="assets/<?= $kerudung['img']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $kerudung['id']; ?>">
                        <?= $kerudung["nama"]; ?>
                    </a>
                </td>
                <td><?= $kerudung['informasi_produk']; ?></td>
                <td><?= $kerudung['jenis']; ?></td>
                <td>Rp. <?= $kerudung['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>