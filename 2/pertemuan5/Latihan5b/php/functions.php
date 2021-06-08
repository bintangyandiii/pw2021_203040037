<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root","", "pertemuan5");

    return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    $conn = koneksi();
    $gambar = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $informasi = htmlspecialchars($data['informasi_produk']);
    $jenisp = htmlspecialchars($data['jenis']);
    $hargaa = htmlspecialchars($data['harga']);

    $query = "INSERT INTO hijab
                VALUES
                ('', '$gambar', '$name', '$informasi', '$jenisp', '$hargaa')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>