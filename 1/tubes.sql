-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 09.05
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
-- Database: `tubes`
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
  `gambar` varchar(255) NOT NULL,
  `Price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tumbuhan`
--

INSERT INTO `tumbuhan` (`id`, `nama`, `nama_latin`, `manfaat`, `gambar`, `Price`) VALUES
(1, 'Anggrek bulan', 'Phalaenopsis amabilis', 'Sangat cocok untuk mempercantik suatu kebun', 'angrek.jpg', '125.000'),
(2, 'Sukulen Selada', 'succulent', 'merupakan tanaman hias mini yang sangat cocok untuk menjadi pajangan di meja belajar', '1.jpg', '10.000'),
(3, 'Kaktus mini', 'parodia magnifica', 'merupakan keluarga kaktus yang tahan di cuaca panas sehingga cocok menjadi pajangan', '2.jpg', '25.000'),
(4, 'Sirih gading/Srigading', 'Nyctanthes arbor tritis Linn', 'merupakan tanaman merambat yang dapat hidup ditanah maupun di air sehingga sangat cocok untuk dipajang di aquarium', '3.jpg', '50.000'),
(5, 'Bambu Jepang', 'Psedosasa japonica', 'tanaman ini sering digunakan sebagai hiasan luar ruangan karena ketahanannya,memiliki ciri berupa daun yang tidak kasar serta kekuningan', '4.jpg', '50.000'),
(6, 'Janda bolong', 'Monstera variegata', 'tanaman yang sempat viral ini merupakan keluarga monstera', '5.jpg', '250.000'),
(7, 'Sikas', 'Cycadaceae', 'Sikas adalah tanaman kayu yang telah ada selama 125 juta tahun.ahli botani kadang-kadang menyebut tanaman primitif ini sebagai fosil hidup. Tanaman Sikas, yang tumbuh di daerah tropis dan subtropis, menyerupai pohon palem.', '6.jpg', 'IDR.35.000'),
(8, 'Paku Tanduk Rusa', 'paltycerium bifurcatum', 'Paku tanduk rusa adalah sekelompok tumbuhan paku epifit yang semuanya tergabung dalam marga Platycerium\'. Tumbuhan ini memiliki penampilan yang khas karena memiliki dua tipe ental dengan fungsi dan bentuk yang jelas berbeda, dengan salah satu tipe entalny', '7.jpeg', '125.000'),
(9, 'Daun Kelor', 'Moringa oleifera', 'Kelor atau merunggai adalah sejenis tumbuhan dari suku Moringaceae. Tumbuhan ini dikenal dengan nama lain seperti: limaran, moringa, ben-oil, drumstick, horseradish tree, dan malunggay di Filipina.', '8.jpg', '15.000'),
(10, 'Sri rezeki', 'Aglonema', 'Tanaman aglaonema memiliki nama ilmiah chinnese avergreen. Sebuah tanaman hias yang populer dari golongan spesies talas-talasan atau araceae. Tanaman ini mudah tumbuh terutama di daerah yang kadar kelembaban begitu tinggi. Karena itu, tanaman sri rejeki b', '9.jpg', '75.000');

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
(1, 'bintang_yandi', '$2y$10$IMW5d28pNC.BbkWdFcieYeI4KdPMAYCeASQV.RcLaAAykD79/1Q/G'),
(2, 'bintang', '$2y$10$jQ/j/wqvpB2Du8bJBPXSe.sOTOWJAS9SBI4k97aVs/VfDD2BY5P8O');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
