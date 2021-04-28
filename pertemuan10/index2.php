<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan3");
//ambil data base dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM pegawai");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row()= mengembalikan array numerik
//mysqli_fetch_assoc()=mengembalikan array associative
//mysqli_fetch_array()=
//mysqli_fetch_object()
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pegawai</title>
</head>

<body>
  <h3>Daftar Pegawai</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>NO</th>
      <th>Aksi</th>
      <th>NIP</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>TTG</th>
      <th>NO.telepon</th>
      <th>Tahun kerja</th>
      <th>Golongan</th>
      <th>Gaji</th>
    </tr>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <th><?= $i; ?></th>
        <th>
          <a href="">ubah</a>|
          <a href="">hapus</a>
        </th>
        <th><?= $row["nip"]; ?></th>
        <th><?= $row["nama"]; ?></th>
        <th><?= $row["alamat"]; ?></th>
        <th><?= $row["tanggal_lahir"]; ?></th>
        <th><?= $row["no_telepon"]; ?></th>
        <th><?= $row["tahun_mulai_kerja"]; ?></th>
        <th><?= $row["golongan"]; ?></th>
        <th><?= $row["gaji"]; ?></th>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </table>
</body>

</html>