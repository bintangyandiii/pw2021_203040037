-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 11.30
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
-- Database: `pertemuan6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tumbuhan`
--

CREATE TABLE `tumbuhan` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_latin` varchar(255) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tumbuhan`
--

INSERT INTO `tumbuhan` (`id`, `nama`, `nama_latin`, `manfaat`, `gambar`) VALUES
(1, 'Anggrek bulan', 'Phalaenopsis amabilis', 'Sangat cocok untuk mempercantik suatu kebun', 'angrek.jpg'),
(2, 'Sukulen Selada', 'succulent', 'merupakan tanaman hias mini yang sangat cocok untuk menjadi pajangan di meja belajar', '1.jpg'),
(3, 'Kaktus mini', 'parodia magnifica', 'merupakan keluarga kaktus yang tahan di cuaca panas sehingga cocok menjadi pajangan', '2.jpg'),
(4, 'Sirih gading/Srigading', 'Nyctanthes arbor tritis Linn', 'merupakan tanaman merambat yang dapat hidup ditanah maupun di air sehingga sangat cocok untuk dipajang di aquarium', '3.jpg'),
(5, 'Bambu Jepang', 'Psedosasa japonica', 'tanaman ini sering digunakan sebagai hiasan luar ruangan karena ketahanannya,memiliki ciri berupa daun yang tidak kasar serta kekuningan', '4.jpg'),
(6, 'Janda bolong', 'Monstera variegata', 'tanaman yang sempat viral ini merupakan keluarga monstera', '5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'bintang_yandi', '$2y$10$IMW5d28pNC.BbkWdFcieYeI4KdPMAYCeASQV.RcLaAAykD79/1Q/G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tumbuhan`
--
ALTER TABLE `tumbuhan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
