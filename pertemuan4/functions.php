<?php
function salam($waktu="Datang", $nama= "Bintang"){
    return "Selamat $waktu ,$nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Funstion</title>
</head>
<body>
    <h1><?=salam( "Malam", "Bintang") ?></h1>
</body>
</html>