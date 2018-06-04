-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 07.59
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
-- Struktur dari tabel `cocok`
--

CREATE TABLE `cocok` (
  `idCocok` int(11) NOT NULL,
  `idGejala` int(11) NOT NULL,
  `idPenyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cocok`
--

INSERT INTO `cocok` (`idCocok`, `idGejala`, `idPenyakit`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 5, 2),
(9, 7, 2),
(10, 8, 2),
(11, 9, 2),
(12, 10, 2),
(13, 1, 3),
(14, 2, 3),
(15, 7, 3),
(16, 9, 3),
(17, 11, 3),
(18, 12, 3),
(19, 8, 4),
(20, 9, 4),
(21, 13, 4),
(22, 14, 4),
(23, 15, 4),
(24, 16, 4),
(25, 17, 4),
(26, 1, 5),
(27, 2, 5),
(28, 9, 5),
(29, 10, 5),
(30, 18, 5),
(31, 19, 5),
(32, 20, 5),
(33, 1, 6),
(34, 2, 6),
(35, 9, 6),
(36, 15, 6),
(37, 19, 6),
(38, 20, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `idGejala` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`idGejala`, `gejala`) VALUES
(1, 'Diare'),
(2, 'Sesak nafas'),
(3, 'Sekresi hidung'),
(4, 'Bulu kusam'),
(5, 'Rongga hidung kotor dan atau berair'),
(6, 'Menggigil kedinginan'),
(7, 'Batuk'),
(8, 'Nafas berbunyi atau ngorok'),
(9, 'Nafsu makan menurun'),
(10, 'Ayam menggelengkan kepala'),
(11, 'Ayam lesu dan tidak bergairah'),
(12, 'Bulu kasar'),
(13, 'Muka dan mata bengkak akibat pembengakakan sinus infra global'),
(14, 'Terdapat kerak dihidung'),
(15, 'Ayam terlihat mengantuk'),
(16, 'Keluar lendir dari hidung kental berwarna kuning'),
(17, 'Pertumbuhan menjadi lambat'),
(18, 'Warna kotoran kuning'),
(19, 'Jengger berwarna biru'),
(20, 'Persendian kaki dan sayap bengkak disertai kelumpuhan');

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
(1, 'Chlamydiosis', 'Pencegahan dan pengendalian dapat dilakukan dengan tindakan biosekuriti dengan peningkatan sanitasi dan kebersihan kandang. Pengobatan psittacosis dapat menggunakan khlortetrasiklin dengan dosis 2 mg/hari selama 21 hari.'),
(2, 'Chronic Respiratory Disease (CRD)', 'Obat-obatan yang dapat dipergunakan untuk penyakit ini diantaranya ialah tylosin, spiramycin, oxytetracyclin, streptomycin, spektinomisin, linkomisin, dan beberapa golongan kuinolon seperti enrofloksasin dan norflosasin. Pencegahan dilakukan dengan penera'),
(3, 'Colibacillosis', 'Pencegahan dapat dimulai dari seleksi secara ketat ayam yang berkualitas pada awal pemeliharaan dan mencegah pencemaran bakteri pada air minum ataupun pakan. Pengobatan Colibacillosis dengan pemberian antibiotik. Beberapa serotipe E.coli seringkali resist'),
(4, 'Coryza', 'Cara yang paling baik untuk mencegah terjadinya penyakit ini dengan melaksanakan sanitasi dan manajemen peternakan yang baik. Pengobatan pada suatu flok dengan sulfonamide atau antibiotik direkomendasikan. Berbagai macam sulfonamide seperti sulfadimethoxi'),
(5, ' Kolera', 'Tindakan pencegahan dan pengendalian dapat dilakukan dengan jalan vaksinasi, sanitasi peternakan, dan adanya hewan sakit harus segera dipisahkan dan diobati. Pengobatan kolera unggas dapat menggunakan antimikroba ; Sulfaquinoxalin 0,05%, Sulfametasin dan '),
(6, 'Pullorum', 'Pencegahan diutamakan pada sanitasi dan tata laksana serta manajemen pemeliharaan yang baik. Pengobatan pullorum dapat dilakukan dengan penyuntikan antibiotik seperti cocillin, neo terramycin ke dada ayam.');

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
-- Indexes for table `cocok`
--
ALTER TABLE `cocok`
  ADD PRIMARY KEY (`idCocok`);

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
-- AUTO_INCREMENT for table `cocok`
--
ALTER TABLE `cocok`
  MODIFY `idCocok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `idGejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `idPenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
