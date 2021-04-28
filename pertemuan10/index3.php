<?php
require 'funtions.php';

$pegawai = query("SELECT * FROM pegawai")
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
      <th>Nama</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($pegawai as $pg) : ?>
      <tr>
        <th><?= $i; ?></th>
        <th>
          <a href="detail.php?id=<?= $pg; ?>">Lihat detail</a>
        </th>
        <th><?= $pg["nama"]; ?></th>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>