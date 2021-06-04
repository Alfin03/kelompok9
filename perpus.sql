-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `no_induk` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`no_induk`, `nama`) VALUES
('1861002', 'Alfin Gosal');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `nama_buku` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`) VALUES
('10001', 'Akuntansi Keuangan Lanjutan'),
('10002', 'Pengantar Ilmu Hukum'),
('10003', 'Pengantar Teknologi Informasi dan Komunikasi Data'),
('10004', 'Thinking, Fast and Slow'),
('10005', 'Dasar Teknik Electro Jilid 1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_akun`
--

CREATE TABLE `detail_akun` (
  `no_induk` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tingkatan` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_akun`
--

INSERT INTO `detail_akun` (`no_induk`, `password`, `telepon`, `alamat`, `tingkatan`) VALUES
('1861002', 'pwdkutiputipu$9', '082187934646', 'Jln nuri lama', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_buku`
--

CREATE TABLE `detail_buku` (
  `id_buku` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_buku`
--

INSERT INTO `detail_buku` (`id_buku`, `tahun`, `pengarang`, `jumlah`) VALUES
('10001', '1989', 'Richard E Baker', 3),
('10002', '2008', 'Peter Mahmud Marzuki', 3),
('10003', '2019', 'Bagaskoro', 42),
('10004', '2011', 'Daniel Kahnemen', 3),
('10005', '2011', 'Budiono Mismail', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` varchar(10) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `kembali` date NOT NULL,
  `urut` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proses_pinjam`
--

CREATE TABLE `proses_pinjam` (
  `id_pinjam` varchar(20) DEFAULT NULL,
  `status` varchar(11) NOT NULL,
  `denda` int(8) NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_akun`
--
ALTER TABLE `detail_akun`
  ADD UNIQUE KEY `no_induk` (`no_induk`);

--
-- Indexes for table `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD UNIQUE KEY `id_buku_2` (`id_buku`),
  ADD KEY `id_buku` (`id_buku`) USING BTREE;

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD UNIQUE KEY `urut` (`urut`),
  ADD KEY `no_induk` (`no_induk`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `proses_pinjam`
--
ALTER TABLE `proses_pinjam`
  ADD UNIQUE KEY `urut` (`urutan`),
  ADD UNIQUE KEY `id_pinjam` (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `urut` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proses_pinjam`
--
ALTER TABLE `proses_pinjam`
  MODIFY `urutan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_akun`
--
ALTER TABLE `detail_akun`
  ADD CONSTRAINT `detail_akun_ibfk_1` FOREIGN KEY (`no_induk`) REFERENCES `akun` (`no_induk`);

--
-- Constraints for table `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD CONSTRAINT `detail_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`no_induk`) REFERENCES `akun` (`no_induk`),
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `proses_pinjam`
--
ALTER TABLE `proses_pinjam`
  ADD CONSTRAINT `proses_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
