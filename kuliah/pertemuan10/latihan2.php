<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "","pw_tubes_203040037");
// query isi tabel
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel
$mahasiwa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    img {
      height: 100px;
      ;
    }
  </style>
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>Id</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Nrp</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiwa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['img']; ?>" alt=""></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>