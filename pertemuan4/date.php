<?php
/*
bintang yandi putra
203040037
bintangyandiii/pw2021_203040037
pertemuan-4-25 februari 2021
mempelajari mengenai variabel pada  PHP
*/
?>

<?php
//date
// Untuk menampilkan tanggal dan format
//echo date ("l, d-M-y");

// time
//UNIX
// echo time()
echo date("l, d-M-y", time()+60*60*24*365);

//mktime----membuat detik sendiri
//mktime mengunakan 6 angka(0, 0, 0, 0, 0, 0,)
//keterangan (detik, menit, jam,bulan, tanggal, tahun)
// echo date("l" ,mktime(6,0,1,03,18,2002));

//strtotime
//menggunakan tanggal seperti biasa 
echo "Tahun depan: ". date("l, d-M-Y", strtotime("+1 year") );
echo "Tahun kemarin: ". date("l, d-M-Y", strtotime("-1 year"));
?>
