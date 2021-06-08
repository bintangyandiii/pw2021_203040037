<?php
// $mahasiswa = [
// ["Bintang Yandi Putra", "203040037", "acutyp9@gmail.com"
//     , "Teknik Informatika"],
// ["M Farhan", "203040120", "mfarhan@gmail.com", "
//     Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Bintang Yandi Putra", 
    "nrp" => "203040037",
    "email" => "acutyp9@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "unpas.jpg"
    ],
    [
        "nama" => "Boy Hendra", 
        "nrp" => "203040060",
        "email" => "boyhendra@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "unpas.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
			<li>Jurusan  : <?= $mhs["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>