<?php
if(!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require '../php/function.php';
$id=$_GET["id"];
$hijab = query("SELECT * FROM hijab WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Ibnu Rusdianto</title>
</head>

<body>
    <div class="container">
        <div class="detail">
            <img class="image" src="../assets/<?= $hijab['img'] ?>" alt="">
            <h3><?= $hijab['nama']?> <?= $hijab['informasi produk']?></h3>
            <hr>
            <h6>Brand : <?= $hijab['jenis']?> | Price : Rp.<?= $hijab['harga']?></h6>
            <a href="../index.php"><button class="button success"> Back</button> </a>
        </div>
    </div>


    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>