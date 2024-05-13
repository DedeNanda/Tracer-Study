-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2023 pada 16.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `fname`, `username`, `password`) VALUES
(4, 'admin', 'admin', '$2y$10$Uc8DBPEMPE6u5bd71VRLBuSQrUcP98tvTql.gMmUEBFAXlwvpqDgu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `febi_banpt`
--

CREATE TABLE `febi_banpt` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `febi_lamemba`
--

CREATE TABLE `febi_lamemba` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `febi_lamemba`
--

INSERT INTO `febi_lamemba` (`id`, `nim`, `nama`, `gender`, `notelepon`, `email`, `fakultas`, `prodi`, `tanggal`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `pertanyaan6`, `pertanyaan7`, `pertanyaan8`, `pertanyaan9`, `pertanyaan10`, `pertanyaan11`, `pertanyaan12`, `pertanyaan13`, `pertanyaan14`, `pertanyaan15`) VALUES
(3, '656556', 'Feri', 'Pria', 856565, 'test@gmail.com', 'FEBI', 'BISNIS DIGITAL', '2023-08-08', 'YA', 'YA', 'YA', 'SUDAH', 'Bekerja', 'SUDAH', 'Kurang 3 Bulan', 'Nasional', '1 JT s/d 2,5 JT', 'Lebih 86 %', 'Relevan', '', '', '', ''),
(5, '5656546', 'Gui', 'Pria', 555, 'test@gmail.com', 'FEBI', 'PERBANKKAN SYARIAH', '2022-03-08', 'YA', 'YA', 'YA', 'SUDAH', 'Wiraswasta', 'SUDAH', '3 s/d 6 Bulan', 'Lokal', '1 JT s/d 2,5 JT', '76 % s/d 85 %', 'Relevan', '', '', '', ''),
(6, '', 'Yuno', 'Pria', 7887687, 'test@gmail.com', 'FEBI', 'EKONOMI SYARIAH S2', '2023-08-08', 'YA', 'YA', 'YA', 'SUDAH', 'Bekerja', 'SUDAH', 'Kurang 3 Bulan', 'Lokal', '1 JT s/d 2,5 JT', 'Lebih 86 %', 'Kurang relevan', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ftik_lamdik`
--

CREATE TABLE `ftik_lamdik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ftik_laminfokom`
--

CREATE TABLE `ftik_laminfokom` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ftik_lamsama`
--

CREATE TABLE `ftik_lamsama` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fuad_banpt`
--

CREATE TABLE `fuad_banpt` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepuasan`
--

CREATE TABLE `kepuasan` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan1` varchar(20) NOT NULL,
  `pertanyaan2` varchar(20) NOT NULL,
  `pertanyaan3` varchar(20) NOT NULL,
  `pertanyaan4` varchar(20) NOT NULL,
  `pertanyaan5` varchar(20) NOT NULL,
  `pertanyaan6` varchar(20) NOT NULL,
  `pertanyaan7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepuasan`
--

INSERT INTO `kepuasan` (`id`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `pertanyaan6`, `pertanyaan7`) VALUES
(2, 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik'),
(3, 'Baik', 'Baik', 'Cukup', 'Baik', 'Cukup', 'Baik', 'Baik'),
(4, 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Cukup'),
(5, 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Kurang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pascasarjana`
--

CREATE TABLE `pascasarjana` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) NOT NULL,
  `pertanyaan3` varchar(20) NOT NULL,
  `pertanyaan4` varchar(20) NOT NULL,
  `pertanyaan5` varchar(20) NOT NULL,
  `pertanyaan6` varchar(20) NOT NULL,
  `pertanyaan7` varchar(20) NOT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `syariah_banpt`
--

CREATE TABLE `syariah_banpt` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `notelepon` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `prodi` varchar(60) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pertanyaan1` varchar(20) DEFAULT NULL,
  `pertanyaan2` varchar(20) DEFAULT NULL,
  `pertanyaan3` varchar(20) DEFAULT NULL,
  `pertanyaan4` varchar(20) DEFAULT NULL,
  `pertanyaan5` varchar(20) DEFAULT NULL,
  `pertanyaan6` varchar(20) DEFAULT NULL,
  `pertanyaan7` varchar(20) DEFAULT NULL,
  `pertanyaan8` varchar(20) NOT NULL,
  `pertanyaan9` varchar(20) NOT NULL,
  `pertanyaan10` varchar(20) NOT NULL,
  `pertanyaan11` varchar(100) NOT NULL,
  `pertanyaan12` varchar(100) NOT NULL,
  `pertanyaan13` varchar(20) NOT NULL,
  `pertanyaan14` varchar(20) NOT NULL,
  `pertanyaan15` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `febi_banpt`
--
ALTER TABLE `febi_banpt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `febi_lamemba`
--
ALTER TABLE `febi_lamemba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ftik_lamdik`
--
ALTER TABLE `ftik_lamdik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ftik_laminfokom`
--
ALTER TABLE `ftik_laminfokom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ftik_lamsama`
--
ALTER TABLE `ftik_lamsama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fuad_banpt`
--
ALTER TABLE `fuad_banpt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepuasan`
--
ALTER TABLE `kepuasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pascasarjana`
--
ALTER TABLE `pascasarjana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `syariah_banpt`
--
ALTER TABLE `syariah_banpt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `febi_banpt`
--
ALTER TABLE `febi_banpt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `febi_lamemba`
--
ALTER TABLE `febi_lamemba`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ftik_lamdik`
--
ALTER TABLE `ftik_lamdik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ftik_laminfokom`
--
ALTER TABLE `ftik_laminfokom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ftik_lamsama`
--
ALTER TABLE `ftik_lamsama`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fuad_banpt`
--
ALTER TABLE `fuad_banpt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kepuasan`
--
ALTER TABLE `kepuasan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pascasarjana`
--
ALTER TABLE `pascasarjana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `syariah_banpt`
--
ALTER TABLE `syariah_banpt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
