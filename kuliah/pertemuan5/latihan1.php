<?php
//array
//array adalah sebuah variabel yang dapat memiliki banyak nilai

//membuat arry
//cara lama
$hari =array("senin", "selasa","rabu","kamis", "jumat","sabtu","minggu");

//cara baru
$Bulan =["Januari","februari","Maret","april"];


// menampilkan variabel array
// mengunakan var_dump/ print_r()
// var_dump($hari);
// echo "<br>";
// print_r($Bulan);
// echo "<br>";
// echo $hari[0];
// echo "<br>";
// echo $Bulan[2];

//menambahkan array baru
var_dump($Bulan);
$Bulan[] = "mei";
$Bulan[] = "juni";
echo "<br>";
var_dump($Bulan);
?>