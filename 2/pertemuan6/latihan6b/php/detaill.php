<?php
if (!isset($_GET['id'])) {
    header("Location: ../indeks.php");
    exit;
}
require '../php/functions.php';
$Id = $_GET['id'];
$tumbuhan = query("SELECT * FROM tumbuhan WHERE id = $Id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/aio.css">
    <title>Tumbuhan</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/pict/<?=$tumbuhan["gambar"];?>" alt="">
        </div>
        <div class="keterangan">
            <p><?=$tumbuhan["nama"];?></p>
            <p><?=$tumbuhan["nama_latin"];?></p>
            <p><?=$tumbuhan["manfaat"];?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>
</body>

</html>