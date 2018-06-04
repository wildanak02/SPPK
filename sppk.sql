-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 02.27
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa`
--

CREATE TABLE `analisa` (
  `idAnalisa` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `kodeAnalisa` varchar(255) NOT NULL,
  `namaAyam` varchar(255) NOT NULL,
  `tanggalAnalisa` date NOT NULL,
  `idGejala` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa`
--

INSERT INTO `analisa` (`idAnalisa`, `idUser`, `kodeAnalisa`, `namaAyam`, `tanggalAnalisa`, `idGejala`, `hasil`) VALUES
(1, 1, 'coba', 'coba', '2018-06-12', 1, 'coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `idGejala` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `idPenyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`idGejala`, `gejala`, `idPenyakit`) VALUES
(2, 'cobaa1', 2),
(3, 'coba5', 2),
(4, 'asd', 2),
(5, 'asd', 2),
(6, 'asdasd', 2),
(7, 'asdasd', 2),
(8, 'ASDASD', 2),
(9, 'ASDASD', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `idPenyakit` int(11) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`idPenyakit`, `penyakit`, `solusi`) VALUES
(2, 'coba2', 'coba2'),
(3, 'coba3', 'coba3'),
(4, 'coba4', 'coba4'),
(5, 'coba5', 'coba5'),
(6, 'coba6', 'coba6'),
(7, 'coba7', 'coba7'),
(8, 'coba8', 'coba8'),
(9, 'coban9', 'coba9'),
(10, 'cobad', 'cobad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `level`, `username`, `password`, `nama`) VALUES
(1, 1, 'a', 'a', 'admin'),
(5, 2, 'b', 'b', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`idAnalisa`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idPenyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `idAnalisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `idGejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `idPenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
