-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 04:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_foodcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwordd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `nama`, `username`, `passwordd`) VALUES
('brahma27@gmail.com', 'surya', 'agung', 'brahmasurya');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `idmakanan` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namamakanan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`idmakanan`, `email`, `namamakanan`, `gambar`, `harga`, `stok`) VALUES
(4, 'jaya27@gmail.com', 'ayam geprek', 'ayam_geprek.jpg', 15000, 10),
(5, 'jaya27@gmail.com', 'nasi', 'nasi.jpeg', 3000, 100),
(6, 'brahma@gmail.com', 'ayam geprek', 'ayam_geprek1.jpg', 15000, 100),
(9, 'brahma@gmail.com', 'guri goreng', 'gurame.jpg', 35000, 100),
(10, 'brahma@gmail.com', 'perkedel', 'perkedel.jpg', 5000, 100),
(11, 'agungsurya@gmail.com', 'nasi goreng', 'nasgor.jpg', 10000, 100),
(12, 'agungsurya@gmail.com', 'sate ayam', 'sate.jpg', 15000, 90),
(13, 'agungsurya@gmail.com', 'rendang', 'rendang.jpg', 15000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `kodepembayaran` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idmakanan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`kodepembayaran`, `email`, `idmakanan`) VALUES
(26, 'agungbrahma@gmail.com', 5),
(27, 'agungbrahma@gmail.com', 13),
(28, 'agungbrahma@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodetransaksi` int(100) NOT NULL,
  `kodepembayaran` int(100) NOT NULL,
  `namapemesan` varchar(50) NOT NULL,
  `namamakanan` varchar(50) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kodetransaksi`, `kodepembayaran`, `namapemesan`, `namamakanan`, `totalharga`, `email_pembeli`, `status`, `bukti_pembayaran`, `email`) VALUES
(13, 26, 'agung brahma', 'nasi, rendang, guri goreng, ', 53000, 'agungbrahma@gmail.com', ' ', 'sendok.png', 'brahma27@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `passwordd` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`email`, `username`, `nama`, `passwordd`, `jeniskelamin`, `usia`, `nohp`) VALUES
('agungbrahma@gmail.com', 'agung brahma', 'agung brahma', 'agungbrahma', 'Laki-laki', 20, '081238463707'),
('agungsudewa@gmail.com', 'agung', 'agung sudewa', 'agungsudewa', 'Laki-laki', 20, '081238463707'),
('basur@gmail.comm', 'Agung brahma', 'brahma', 'brahma', 'Laki-laki', 20, '0812348457'),
('brahmasurya27@gmail.com', 'brahmasurya', 'brahma', '123456', 'Laki-laki', 20, '081238463707'),
('masaya@gmail.com', 'masayazata', 'sasa', '123456', 'Perempuan', 20, '081238463709'),
('rezky@gmail.com', 'rezky', 'rezky', '123456', 'Laki-laki', 20, '081238463711'),
('ulyamahsa@gmail.com', 'ulyaananda', 'ulya', '12345', 'Perempuan', 20, '081238463708');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `passwordd` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `nmtoko` varchar(50) DEFAULT NULL,
  `statusvalidasi` varchar(50) DEFAULT NULL,
  `cvtoko` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`email`, `username`, `nama`, `passwordd`, `jeniskelamin`, `usia`, `nohp`, `nmtoko`, `statusvalidasi`, `cvtoko`) VALUES
('abs@gmail.com', 'Gde Agung', 'Gde Agung', 'brahma', 'Laki-laki', 20, '081238462787', 'UD Maju Jaya', 'tidak valid', 'kemah2.jpeg'),
('agungsurya@gmail.com', 'agung surya', 'agung surya', 'agungsurya', 'Laki-laki', 20, '081238463708', 'CV Agung Sentosa', 'valid', 'sendok1.png'),
('bayu@gmail.com', 'bayu', 'bayu', 'bayu123', 'Laki-laki', 12, '+6289657102489', 'UD Maju Jaya', 'tidak valid', '1111.jpg'),
('brahma@gmail.com', 'brahma', 'brahma', 'brahma', 'Laki-laki', 12, '081238463707', 'UD Maju Jaya', 'valid', 'depan_regi14.png'),
('buka27@gmail.com', 'buka', 'abdul', 'impal100', 'Laki-laki', 25, '81238467607', 'CV ABADI JAYA', 'valid', 'depan_regi.png'),
('jaya27@gmail.com', 'jaya', 'abdil', 'impal100', 'Laki-laki', 25, '81238467607', 'CV ABADI JAYA', 'valid', 'depan_regi.png'),
('sumber27@gmail.com', 'sumber', 'anto', 'impal100', 'Laki-laki', 25, '81238467065', 'CV ABADI JAYA', 'valid', 'depan_regi.png'),
('surya27@gmail.com', 'agung', 'dewa', 'impal100', 'Laki-laki', 20, '081238463707', 'CV ABADI SENTOSA', 'valid', 'depan_regi.png'),
('suryanegara@gmail.com', 'Agung Surya', 'Suryanegara', 'brahma', 'Laki-laki', 20, '08123483843', 'UD Mekar Sentosa', 'tidak valid', 'kemah1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`idmakanan`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`kodepembayaran`),
  ADD KEY `email` (`email`),
  ADD KEY `idmakanan` (`idmakanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `email` (`email`),
  ADD KEY `kodepembayaran` (`kodepembayaran`) USING BTREE;

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `idmakanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `kodepembayaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kodetransaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `penjual` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `pembeli` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memesan_ibfk_2` FOREIGN KEY (`idmakanan`) REFERENCES `makanan` (`idmakanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`email`) REFERENCES `admin` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`kodepembayaran`) REFERENCES `memesan` (`kodepembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`email`) REFERENCES `admin` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
