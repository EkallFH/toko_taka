-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2024 at 04:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_barang` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `harga_jual` decimal(10,0) NOT NULL,
  `stok` text NOT NULL,
  `tgl_input` datetime DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_kategori`, `nama_barang`, `merk`, `harga_beli`, `harga_jual`, `stok`, `tgl_input`, `tgl_update`) VALUES
(1, 'BJ001', 1, 'T-Shirt Oversize', 'Uniqlo', 200000, 250000, '100', '2024-04-27 13:43:40', '2024-04-27 14:02:00'),
(2, 'BJ002', 1, 'T-Shirt Dry', 'Uniqlo', 200000, 250000, '100', '2024-04-27 14:01:20', '0000-00-00 00:00:00'),
(3, 'SPT001', 2, 'Adidas Samba', 'Adidas', 1300000, 1500000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(4, 'SPT002', 2, 'Nike Dunk Low', 'Nike', 1500000, 1700000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(5, 'SD001', 3, 'Bata Comfit', 'Bata', 350000, 380000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(6, 'SD002', 3, 'Juno Slippers', 'Nappa Milano', 550000, 600000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(7, 'TS001', 4, 'Gucci Bags', 'Gucci', 175000, 200000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(8, 'TS002', 4, 'Palomino Noren', 'Palomino', 360000, 400000, '100', '2024-04-27 14:02:16', '0000-00-00 00:00:00'),
(9, 'BJ003', 1, 'T Shirt Aero', 'AeroStreet', 100000, 150000, '100', NULL, NULL),
(11, 'BJ004', 1, 'Adidas Polo', 'Adidas', 200000, 230000, '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(1, 'Baju', '2024-04-27 13:28:01'),
(2, 'Sepatu', '2024-04-27 13:30:54'),
(3, 'Sandal', '2024-04-27 13:32:57'),
(4, 'Tas', '2024-04-27 13:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` char(32) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `pass`, `name`) VALUES
(1, 'admin', '12345', 'Haikal');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
