-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2021 pada 17.30
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
-- Database: `latihan3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` char(5) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` char(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `tahun_mulai_kerja` year(4) DEFAULT NULL,
  `golongan` char(1) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `alamat`, `tanggal_lahir`, `no_telepon`, `tahun_mulai_kerja`, `golongan`, `gaji`) VALUES
('001', 'Ahmad Baharudin', 'Jl Buah Batu 15b bandung', '1990-12-12', '08123334543', 2010, '3', 1250000),
('002', 'Septialdi Manurung', 'bandung', '1990-12-12', '08123334543', 2010, '3', 1350000),
('003', 'Budhy Bungaox', 'Jl cisoka 112 bandung', '1989-01-20', '0812367654', 2011, '4', 1050000),
('004', 'Zulkarnaen', 'Jl Alhambra 2', '1991-02-20', '0812367655', 2009, '1', 1450000),
('005', 'Dewi Sudewa', 'Jl Iman 34', '1990-12-02', '081233337766', 2009, '1', 1450000),
('006', 'Ina Nurlian', 'Jl Cisatu 1', '1993-08-09', '0812345676', 2011, '4', 1050000),
('007', 'Cheppy Cardut', 'Jl Cilama 13', '1992-07-09', '08123456886', 2011, '4', 1050000),
('008', 'Dodong M', 'Jl jeruk16 jakarta', '1990-07-10', '0812345555', 2010, '3', 1250000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
