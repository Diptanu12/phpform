-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 07:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diptanubaidya`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `Name`, `Phone`, `Email`, `Address`) VALUES
(3, 'Diptanu Baidya', 'c2dUcW1NZmZKSkcyV0ZPdmhURENMdz09', 'K29vaHJpT1UveFUrQk8yN2pKSDFCaTlxaWoySVFUWGtVcVhGa2FQWVBFMD0=', 'Jolaibari, Bathannabri'),
(4, 'tridip', 'REZWbjFmVVMzZjZ2dmlxckdJalZXUT09', 'Nm9TcGtDejNpSnB4aC9JckdieGM3dz09', 'G-2, Chander Castle, Sri Sai Balaji Enclave, Mallampet'),
(5, 'zxczxdc', 'TlhRVVFzd0kwdDFkTnAwb0Y4LzNNQT09', 'K29vaHJpT1UveFUrQk8yN2pKSDFCaTlxaWoySVFUWGtVcVhGa2FQWVBFMD0=', 'G-2, Chander Castle, Sri Sai Balaji Enclave, Mallampet'),
(6, 'ssas', 'OWxYaGcyUE96TDhUNjl6cmdGQ2RGZz09', 'K29vaHJpT1UveFUrQk8yN2pKSDFCaTlxaWoySVFUWGtVcVhGa2FQWVBFMD0=', 'G-2, Chander Castle, Sri Sai Balaji Enclave, Mallampet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
