-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 04:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarpras`
--

CREATE TABLE `tb_sarpras` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(250) DEFAULT NULL,
  `Rombel` varchar(250) DEFAULT NULL,
  `Barang` varchar(250) DEFAULT NULL,
  `Jumlah` varchar(250) DEFAULT NULL,
  `TanggalPeminjaman` varchar(250) DEFAULT NULL,
  `TanggalPengembalian` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sarpras`
--

INSERT INTO `tb_sarpras` (`ID`, `Nama`, `Rombel`, `Barang`, `Jumlah`, `TanggalPeminjaman`, `TanggalPengembalian`) VALUES
(6, 'riffa gg123', 'XI PPLG', 'Infokus', '2', '2024-11-30', '2024-11-12'),
(7, 'Maulana Ibrahim Kemal', 'XI PPLG', 'Infokus dan kabel', '2', '2024-11-08', '2024-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
