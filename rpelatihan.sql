-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 02.38
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpelatihan`
--

CREATE TABLE `rpelatihan` (
  `id_rpelatihan` varchar(64) NOT NULL,
  `bidang_pelatihan` varchar(100) NOT NULL,
  `tahun_pelatihan` date NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rpelatihan`
--

INSERT INTO `rpelatihan` (`id_rpelatihan`, `bidang_pelatihan`, `tahun_pelatihan`, `sertifikat`, `create_date`, `update_date`) VALUES
('61889f00ba26e', 'ss', '3324-02-23', '.jpg', '2021-11-08 03:52:32', '2021-11-08 03:52:32'),
('6188a0988ef62', 'j', '0787-07-09', '6188a0988ef62.jpg', '2021-11-08 03:59:20', '2021-11-08 03:59:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rpelatihan`
--
ALTER TABLE `rpelatihan`
  ADD PRIMARY KEY (`id_rpelatihan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
