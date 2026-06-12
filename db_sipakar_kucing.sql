-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 11:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipakar_kucing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(1, 'G1', 'Bersin'),
(2, 'G2', 'Demam'),
(3, 'G3', 'Mata Berair'),
(4, 'G4', 'Hidung Berair'),
(5, 'G5', 'Gatal-gatal'),
(6, 'G6', 'Kerontokan Bulu'),
(7, 'G7', 'Kulit Kemerahan'),
(8, 'G8', 'Perut Buncit'),
(9, 'G9', 'Berat Badan Menurun'),
(10, 'G10', 'Nafsu Makan Meningkat'),
(11, 'G11', 'Muntah'),
(12, 'G12', 'Diare'),
(13, 'G13', 'Lemas'),
(14, 'G14', 'Telinga Berbau'),
(15, 'G15', 'Sering Menggaruk Telinga'),
(16, 'G16', 'Keluar Cairan Dari Telinga'),
(17, 'G17', 'Bercak Botak Pada Kulit'),
(18, 'G18', 'Kulit Bersisik'),
(19, 'G19', 'Gatal Berlebihan'),
(20, 'G20', 'Luka Bekas Garukan'),
(21, 'G21', 'Terdapat Kutu Pada Bulu');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `deskripsi` text,
  `solusi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi`) VALUES
(1, 'P1', 'Flu Kucing (Feline Flu)', 'Flu kucing ditandai bersin, demam, mata berair dan hidung berair.', 'Jaga kebersihan lingkungan, berikan makanan bergizi dan cukup cairan.'),
(2, 'P2', 'Scabies', 'Penyakit kulit akibat tungau yang menyebabkan gatal dan kerontokan bulu.', 'Jaga kebersihan tubuh dan kandang serta konsultasikan ke dokter hewan.'),
(3, 'P3', 'Cacingan', 'Infeksi cacing yang memengaruhi kesehatan dan pertumbuhan kucing.', 'Berikan obat cacing sesuai anjuran dokter hewan.'),
(4, 'P4', 'Gangguan Pencernaan', 'Ditandai muntah, diare dan tubuh lemas.', 'Perhatikan kualitas makanan dan kecukupan air minum.'),
(5, 'P5', 'Infeksi Telinga', 'Infeksi yang menyebabkan gangguan pada telinga kucing.', 'Jaga kebersihan telinga dan lakukan pemeriksaan jika diperlukan.'),
(6, 'P6', 'Jamur Kulit', 'Infeksi jamur yang menyebabkan bercak botak dan kulit bersisik.', 'Jaga kebersihan tubuh dan lingkungan kucing.'),
(7, 'P7', 'Kutu Kucing', 'Parasit pada bulu dan kulit yang menyebabkan gatal berlebihan.', 'Lakukan perawatan dan pengendalian kutu secara rutin.');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_diagnosa`
--

CREATE TABLE `riwayat_diagnosa` (
  `id_riwayat` int NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_kucing` varchar(100) NOT NULL,
  `jenis_kucing` varchar(100) NOT NULL,
  `usia_kucing` varchar(50) NOT NULL,
  `hasil_penyakit` varchar(100) NOT NULL,
  `tanggal_diagnosa` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat_diagnosa`
--

INSERT INTO `riwayat_diagnosa` (`id_riwayat`, `nama_pemilik`, `nama_kucing`, `jenis_kucing`, `usia_kucing`, `hasil_penyakit`, `tanggal_diagnosa`) VALUES
(1, 'tyna', 'Lily', 'Anggora', '4 bulan', 'Gangguan Pencernaan', '2026-06-11 17:30:03'),
(2, 'roro', 'yui', 'regdoll', '10 bulan', 'Gangguan Pencernaan', '2026-06-11 17:34:49'),
(3, 'riri', 'lily', 'tuxedo', '3 tahun', 'Cacingan', '2026-06-11 17:36:51'),
(4, 'Rizky', 'Kitty', 'Persia', '4 tahun', 'Gangguan Pencernaan', '2026-06-12 17:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id_rule` int NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `kode_penyakit`, `kode_gejala`) VALUES
(1, 'P1', 'G1'),
(2, 'P1', 'G2'),
(3, 'P1', 'G3'),
(4, 'P1', 'G4'),
(5, 'P2', 'G5'),
(6, 'P2', 'G6'),
(7, 'P2', 'G7'),
(8, 'P3', 'G8'),
(9, 'P3', 'G9'),
(10, 'P3', 'G10'),
(11, 'P4', 'G11'),
(12, 'P4', 'G12'),
(13, 'P4', 'G13'),
(14, 'P5', 'G14'),
(15, 'P5', 'G15'),
(16, 'P5', 'G16'),
(17, 'P6', 'G17'),
(18, 'P6', 'G18'),
(19, 'P6', 'G5'),
(20, 'P7', 'G19'),
(21, 'P7', 'G20'),
(22, 'P7', 'G21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD UNIQUE KEY `kode_gejala` (`kode_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD UNIQUE KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `riwayat_diagnosa`
--
ALTER TABLE `riwayat_diagnosa`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat_diagnosa`
--
ALTER TABLE `riwayat_diagnosa`
  MODIFY `id_riwayat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_rule` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
