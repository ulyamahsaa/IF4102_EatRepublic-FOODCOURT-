-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 12:44 AM
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
-- Database: `impal_fix`
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
('brahma27@gmail.com', 'surya', 'agung', '123456789'),
('m.asjad@gmail.com', 'asjad', 'asjad', '123456789'),
('rizky@gmail.com', 'rizky', 'rizky', '123456789'),
('sasa@gmail.com', 'sasa', 'sasa', '123456'),
('ulya@gmail.com', 'ulya', 'ulya', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `idmakanan` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `namamakanan` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`idmakanan`, `email`, `namamakanan`, `harga`, `stok`) VALUES
('M01', 'surya27@gmail.com', 'ayam bakar', 20000, 2),
('M02', 'buka27@gmail.com', 'ayam goreng', 10000, 8),
('M03', 'jaya27@gmail.com', 'ayam pepes', 20000, 2),
('M04', 'mekar27@gmail.com', 'ayam geprek', 20000, 2),
('M05', 'sumber27@gmail.com', 'soto ayam', 15000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `email` varchar(50) NOT NULL,
  `idmakanan` varchar(50) NOT NULL,
  `kodepembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`email`, `idmakanan`, `kodepembayaran`) VALUES
('brahmasurya27@gmail.com', 'M01', 'A01'),
('masaya@gmail.com', 'M02', 'A02'),
('ulyamahsa@gmail.com', 'M04', 'A02'),
('M.asjad@gmail.com', 'M01', 'A04'),
('rezky@gmail.com', 'M02', 'A05');

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
('A03', 'B01', 'sasa', 'ayam goreng', 10000, 'agung@gmail.com', 'berhasil', 'sasa@gmail.com'),
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
('brahmasurya27@gmail.com', 'brahmasurya', 'brahma', '123456', 'L', 20, '081238463707'),
('M.asjad@gmail.com', 'asjadadna', 'asjad', '123456', 'L', 20, '081238463710'),
('masaya@gmail.com', 'masayazata', 'sasa', '123456', 'P', 20, '081238463709'),
('rezky@gmail.com', 'rezky', 'rezky', '123456', 'L', 20, '081238463711'),
('ulyamahsa@gmail.com', 'ulyaananda', 'ulya', '12345', 'P', 20, '081238463708');

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
('buka27@gmail.com', 'buka', 'abdul', 'impal100', 'L', 25, '81238467607', 'CV ABADI JAYA', 'valid', 'bersedia berjualan'),
('jaya27@gmail.com', 'jaya', 'abdil', 'impal100', 'L', 25, '81238467607', 'CV ABADI JAYA', 'valid', 'bersedia berjualan'),
('mekar27@gmail.com', 'mekar', 'anin', 'impal100', 'L', 25, '812384676056', 'CV ABADI JAYA', 'valid', 'bersedia berjualan'),
('sumber27@gmail.com', 'sumber', 'anto', 'impal100', 'L', 25, '81238467065', 'CV ABADI JAYA', 'valid', 'bersedia berjualan'),
('surya27@gmail.com', 'agung', 'dewa', 'impal100', 'L', 20, '081238463707', 'CV ABADI SENTOSA', 'valid', 'bersedia berjualan');

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
  ADD KEY `penjual_fk` (`email`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`email`,`idmakanan`),
  ADD KEY `pembayaran_fk` (`kodepembayaran`),
  ADD KEY `makanan_fk` (`idmakanan`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `penjual_fk` FOREIGN KEY (`email`) REFERENCES `penjual` (`email`);

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `makanan_fk` FOREIGN KEY (`idmakanan`) REFERENCES `makanan` (`idmakanan`),
  ADD CONSTRAINT `pembayaran_fk` FOREIGN KEY (`kodepembayaran`) REFERENCES `pembayaran` (`kodepembayaran`),
  ADD CONSTRAINT `pembeli_fk` FOREIGN KEY (`email`) REFERENCES `pembeli` (`email`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `admin_fk` FOREIGN KEY (`email_admin`) REFERENCES `admin` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
