<?php
function cetak_jumlah($jumlah=3) 
{     for ($i = $jumlah; $i > 0; $i--) { 
         for ($j = 0; $j < $i; $j++) { 
echo "*"; 
}         
echo "<br>"; 
    } 
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Funstion</title>
</head>
<body>
    <h1><?=cetak_jumlah() ?></h1>
</body>
</html>