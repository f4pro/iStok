-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istok`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `NIK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record_in`
--

CREATE TABLE `record_in` (
  `id` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_barang` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `pemeriksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record_out`
--

CREATE TABLE `record_out` (
  `id` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `barang` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `pekerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record_in`
--
ALTER TABLE `record_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_barang` (`nama_barang`),
  ADD KEY `pemeriksa` (`pemeriksa`);

--
-- Indexes for table `record_out`
--
ALTER TABLE `record_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang` (`barang`),
  ADD KEY `pekerja` (`pekerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `record_in`
--
ALTER TABLE `record_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `record_out`
--
ALTER TABLE `record_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `record_in`
--
ALTER TABLE `record_in`
  ADD CONSTRAINT `nama_barang` FOREIGN KEY (`nama_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pemeriksa` FOREIGN KEY (`pemeriksa`) REFERENCES `karyawan` (`id`);

--
-- Constraints for table `record_out`
--
ALTER TABLE `record_out`
  ADD CONSTRAINT `barang` FOREIGN KEY (`barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pekerja` FOREIGN KEY (`pekerja`) REFERENCES `karyawan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
