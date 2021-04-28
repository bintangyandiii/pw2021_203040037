<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "","pw_tubes_203040037");
//ambil data base dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row()= mengembalikan array numerik
//mysqli_fetch_assoc()=mengembalikan array associative
//mysqli_fetch_array()=
//mysqli_fetch_object()
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

?>
<!DOCTYPE html>
<head>
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i=1;?>
    <?php while($row =mysqli_fetch_assoc($result)):?>

    <tr>
        <td><?=$i ?></td>
        <td>
        <a href="">ubah</a>|
        <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["img"];?>" width="50" ></td>
        <td><?= $row["nrp"];?></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["email"];?></td>
        <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++;?>
    <?php endwhile;?>
    </table>
</body>
</html>