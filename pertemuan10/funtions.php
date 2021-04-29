<?php

function koneksi()
{
  return mysqli_connect("localhost", "root", "", "pw_203040006");
}


function query($query)
{
  $conn = Koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = Koneksi();

  $nrp = htmlspecialchars($data['nrp']);
  $nama  = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['img']);

  $query = "INSERT INTO 
              mahasiswa
            VALUES
            (null, '$nrp', '$nama', '$email', '$jurusan', '$gambar');
            ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
?>