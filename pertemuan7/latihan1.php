<?php
/*
bintang yandi putra
203040037
bintangyandiii/pw2021_203040037
pertemuan-7 17-maret-2021
mempelajari mengenai GET AND POST
*/
?>
<?php

$mahasiswa = [
	[	
		"nrp" => "203040037",
		"nama" => "Bintang Yandi Putra",
		"email" => "acutyp9@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "unpas.jpg"
	],
	[
		"nama" => "Ibnu Rusdianto", 
		"nrp" => "203040037",
		"email" => "ibnu.rusdianto55@gmail.com",
		"jurusan" => "Teknik Indormatika",
		"gambar" => "unpas.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>