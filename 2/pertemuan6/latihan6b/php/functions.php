<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pertemuan6");

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

    $nama_tumbuhan = htmlspecialchars($data['nama']);
    $nama_latin = htmlspecialchars($data['nama_latin']);
    $manfaat_tumbuhan = htmlspecialchars($data['manfaat']);
    $Gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO tumbuhan
                            VALUES
                            ('', '$nama_tumbuhan', '$nama_latin', '$manfaat_tumbuhan', '$Gambar')";
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
    $nama_tumbuhan = htmlspecialchars($data['nama']);
    $nama_latin = htmlspecialchars($data['nama_latin']);
    $manfaat_tumbuhan = htmlspecialchars($data['manfaat']);
    $Gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE tumbuhan SET
    nama = '$nama_tumbuhan',
    nama_latin = '$nama_latin',
    manfaat = '$manfaat_tumbuhan',
    gambar = '$Gambar'
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
    gambar LIKE '%$keyword%'
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