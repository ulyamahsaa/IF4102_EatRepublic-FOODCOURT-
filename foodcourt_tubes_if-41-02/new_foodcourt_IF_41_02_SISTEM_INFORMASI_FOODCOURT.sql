-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 12:08 PM
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
('brahma27@gmail.com', 'surya', 'agung', 'brahmasurya'),
('m.asjad@gmail.com', 'asjad', 'asjad', '123456789'),
('rizky@gmail.com', 'rizky', 'rizky', '123456789'),
('sasa@gmail.com', 'sasa', 'sasa', '123456'),
('ulya@gmail.com', 'ulya', 'ulya', '123456');

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
(3, 'brahma@gmail.com', 'ayam goreng', '1111.jpg', 10000, 5),
(4, 'jaya27@gmail.com', 'ayam geprek', 'ayam_geprek.jpg', 15000, 10),
(5, 'jaya27@gmail.com', 'nasi', 'nasi.jpeg', 3000, 100),
(6, 'brahma@gmail.com', 'ayam geprek', 'ayam_geprek1.jpg', 15000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `memesan_pk` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idmakanan` int(100) NOT NULL,
  `kodepembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodepembayaran` varchar(50) NOT NULL,
  `kodetransaksi` varchar(50) DEFAULT NULL,
  `namapemesana` varchar(50) DEFAULT NULL,
  `namamakanan` varchar(50) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kodepembayaran`, `kodetransaksi`, `namapemesana`, `namamakanan`, `totalharga`, `email`, `status`, `email_admin`) VALUES
('A01', 'B01', 'brahma', 'ayam bakar', 20000, 'agung@gmail.com', 'berhasil', 'brahma27@gmail.com'),
('A02', 'B02', 'ulya', 'ayam bakar', 20000, 'agung@gmail.com', 'berhasil', 'brahma27@gmail.com'),
('A03', 'B01', 'sasa', 'ayam goreng', 10000, 'agung@gmail.com', '', 'sasa@gmail.com'),
('A04', 'B03', 'rizky', 'ayam geprek', 20000, 'agung@gmail.com', 'berhasil', 'ulya@gmail.com'),
('A05', 'B04', 'm.asjas', 'ayam pepes', 20000, 'agung@gmail.com', 'berhasil', 'rizky@gmail.com');

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
('ba@gmail.com', 'suryaagung', 'brahma', 'surya27', 'Laki-laki', 12, '3123213123123123'),
('bas@gmail.com', 'brahma', 'Gde Agung Brahmana Suryanegara', 'basur', 'Laki-laki', 12, '081234554545'),
('basur@gmail.comm', 'Agung brahma', 'brahma', 'brahma', 'Laki-laki', 20, '0812348457'),
('brahmasurya27@gmail.com', 'brahmasurya', 'brahma', '123456', 'Laki-laki', 20, '081238463707'),
('dsdsd@gmail.com', 'qwqwqw', 'dsdsd', '212121', 'Laki-laki', 22, '121212'),
('M.asjad@gmail.com', 'asjadadna', 'asjad', '123456', 'Laki-laki', 20, '081238463710'),
('masaya@gmail.com', 'masayazata', 'sasa', '123456', 'Perempuan', 20, '081238463709'),
('qwqwqwqw@gmail.com', 'qwqwqw', 'sasas', '1212qwqw', 'Perempuan', 21, '2121212'),
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
('abs@gmail.com', 'Gde Agung', 'Gde Agung', 'brahma', 'Laki-laki', 20, '081238462787', 'UD Maju Jaya', 'valid', 'kemah2.jpeg'),
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
  ADD PRIMARY KEY (`memesan_pk`),
  ADD KEY `email` (`email`),
  ADD KEY `idmakanan` (`idmakanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodepembayaran`),
  ADD KEY `admin_fk` (`email_admin`);

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
  MODIFY `idmakanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `memesan_pk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `admin_fk` FOREIGN KEY (`email_admin`) REFERENCES `admin` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
