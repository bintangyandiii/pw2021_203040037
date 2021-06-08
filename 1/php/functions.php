<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nama_latin = htmlspecialchars($data['nama_latin']);
    $manfaat = htmlspecialchars($data['manfaat']);
    $gambar = htmlspecialchars($data['gambar']);
    $Price = htmlspecialchars($data['Price']);

    $query = "INSERT INTO tumbuhan
                            VALUES
                            ('', '$nama', '$nama_latin', '$manfaat', '$gambar','$Price')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM tumbuhan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = ($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nama_latin = htmlspecialchars($data['nama_latin']);
    $manfaat = htmlspecialchars($data['manfaat']);
    $gambar = htmlspecialchars($data['gambar']);
    $Price = htmlspecialchars($data['Price']);

    $query = "UPDATE tumbuhan SET
    nama = '$nama',
    nama_latin = '$nama_latin',
    manfaat = '$manfaat',
    gambar = '$gambar'
    Price = '$Price'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM tumbuhan
    WHERE
    nama LIKE '%$keyword%' OR
    nama_latin LIKE '%$keyword%' OR
    manfaat LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%' OR
    Price LIKE '%$keyword%'
    ";
    return query($query);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
