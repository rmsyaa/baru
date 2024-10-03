-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 02:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_keluar`
--

CREATE TABLE `b_keluar` (
  `id_keluar` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `Nama barang` varchar(100) NOT NULL,
  `jumlah_keluar` varchar(100) NOT NULL,
  `Satuan` varchar(100) NOT NULL DEFAULT 'PCS',
  `Penerima` varchar(100) NOT NULL DEFAULT 'Pembeli'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_masuk`
--

CREATE TABLE `b_masuk` (
  `id_masuk` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `Nama barang` varchar(100) NOT NULL,
  `jumlah_masuk` varchar(100) NOT NULL,
  `Satuan` varchar(50) NOT NULL DEFAULT 'PCS',
  `Pengirim` varchar(50) NOT NULL DEFAULT 'Penjahit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_barang`
--

CREATE TABLE `t_barang` (
  `kode_barang` int(11) NOT NULL,
  `PIC` longblob NOT NULL,
  `Nama barang` varchar(100) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Harga barang` int(11) NOT NULL,
  `Stok` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `hak_akses` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `password`, `nama_lengkap`, `hak_akses`) VALUES
(1, 'admin', 'admin', 'Super admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_keluar`
--
ALTER TABLE `b_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `ID barang` (`kode_barang`);

--
-- Indexes for table `b_masuk`
--
ALTER TABLE `b_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `ID barang` (`kode_barang`);

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_keluar`
--
ALTER TABLE `b_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b_masuk`
--
ALTER TABLE `b_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_keluar`
--
ALTER TABLE `b_keluar`
  ADD CONSTRAINT `b_keluar_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `t_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `b_masuk`
--
ALTER TABLE `b_masuk`
  ADD CONSTRAINT `b_masuk_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `t_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
