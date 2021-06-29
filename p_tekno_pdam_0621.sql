-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 08:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_tekno_pdam_0621`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(100) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_golongan`, `create_at`, `update_at`) VALUES
(1, 'Golongan I A', '2021-06-28', '2021-06-28'),
(2, 'Golongan I B', '2021-06-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `jenis_penggunaan` varchar(10) NOT NULL,
  `tarif020` varchar(20) NOT NULL,
  `tarif2030` varchar(20) NOT NULL,
  `tariflebih30` varchar(20) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `golongan`, `jenis_penggunaan`, `tarif020`, `tarif2030`, `tariflebih30`, `create_at`, `update_at`) VALUES
(1, '1', '1', '7000', '8000', '9000', '2021-06-29', '2021-06-29'),
(2, '2', '2', '7500', '8500', '9500', '2021-06-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penggunaan`
--

CREATE TABLE `jenis_penggunaan` (
  `id_jenis_penggunaan` int(11) NOT NULL,
  `nama_jenis_penggunaan` varchar(100) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_penggunaan`
--

INSERT INTO `jenis_penggunaan` (`id_jenis_penggunaan`, `nama_jenis_penggunaan`, `create_at`, `update_at`) VALUES
(1, 'Hidran dan ledeng umum', '2021-06-28', '2021-06-28'),
(2, 'Rumah yatim piatu', '2021-06-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nomor_sambungan` varchar(25) NOT NULL,
  `nomor_rekening` varchar(25) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `alamat_pengguna` varchar(100) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `jenis_penggunaan` varchar(15) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nomor_sambungan`, `nomor_rekening`, `nama_pengguna`, `alamat_pengguna`, `golongan`, `jenis_penggunaan`, `create_at`, `update_at`) VALUES
(1, '00001', '0000001', 'Hariyadi', 'Gg. sitara', '1', '1', '2021-06-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_lengkap`, `username`, `password`, `alamat`, `nomor_telp`, `role`, `create_at`, `update_at`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', '-', '-', 0, '2021-06-28', '2021-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `jenis_penggunaan`
--
ALTER TABLE `jenis_penggunaan`
  ADD PRIMARY KEY (`id_jenis_penggunaan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_penggunaan`
--
ALTER TABLE `jenis_penggunaan`
  MODIFY `id_jenis_penggunaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
