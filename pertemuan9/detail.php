<?php
require 'funtions.php';

$id = $_GET['nip'];

$pg = query("SELECT * FROM pegawai WHERE nip=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Detail Pegawai</title>
</head>

<body>
  <h3>Detail Pegawai</h3>
  <ul>
    <li>
      <a href="">ubah</a>|
      <a href="">hapus</a>
    </li>
    <li><?= $pg['nip']; ?></li>
    <li><?= $pg['nama']; ?></li>
    <li><?= $pg['alamat']; ?></li>
    <li><?= $pg['tanggal_lahir']; ?></li>
    <li><?= $pg['no_telepon']; ?></li>
    <li><?= $pg['tahun_mulai_kerja']; ?></li>
    <li><?= $pg['golongan']; ?></li>
    <li><?= $pg['gaji']; ?></li>
    <li><a href="index3.php">Kembali ke Daftar Pegawai</a></li>
  </ul>
</body>

</html>