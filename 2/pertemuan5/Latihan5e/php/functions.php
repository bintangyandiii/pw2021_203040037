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
    $jenis_produk = htmlspecialchars($data['jenis']);
    $harga_produk = htmlspecialchars($data['harga']);
    $query = "INSERT INTO hijab
                VALUES
                ('', '$gambar', '$name', '$informasi', '$jenis_produk', '$harga_produk')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM hijab WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $informasi = htmlspecialchars($data['informasi_produk']);
    $jenis_produk = htmlspecialchars($data['jenis']);
    $harga_produk = htmlspecialchars($data['harga']);
    $query = "UPDATE `hijab` SET `img`='$gambar',`nama`='$name',`informasi_produk`='$informasi',`jenis`='$jenis_produk',`harga`='$harga_produk' WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>