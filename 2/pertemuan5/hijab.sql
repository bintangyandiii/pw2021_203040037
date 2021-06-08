-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2021 pada 04.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hijab`
--

CREATE TABLE `hijab` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `informasi_produk` varchar(255) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hijab`
--

INSERT INTO `hijab` (`id`, `img`, `nama`, `informasi_produk`, `jenis`, `harga`) VALUES
(2, 'hijab2.jpg', 'Hannah Set Peach', 'Special Anniversary Edition', 'jembut', 224000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hijab`
--
ALTER TABLE `hijab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hijab`
--
ALTER TABLE `hijab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
