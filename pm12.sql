-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 12:32 PM
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
-- Database: `pm12`
--

-- --------------------------------------------------------

--
-- Table structure for table `anonim`
--

CREATE TABLE `anonim` (
  `id_anonim` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `tgl` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anonim`
--

INSERT INTO `anonim` (`id_anonim`, `judul`, `isi`, `tgl`, `lokasi`, `kategori`) VALUES
(1, 'test', 'blablabla', '2020-08-17', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `telp`, `password`, `level`) VALUES
(4, 'Radiffa Fadhil Gunawan Lubis', 'radiffalubis@gmail.com', 'capres', '082277042110', '202cb962ac59075b964b07152d234b70', 'admin'),
(5, 'user1', 'user1@day.com', 'user1', '123', '202cb962ac59075b964b07152d234b70', 'user'),
(6, 'admin1', 'admin1@day.com', 'admin1', '123', '202cb962ac59075b964b07152d234b70', 'admin'),
(9, 'user2', 'user2@day.com', 'user2', '123', '202cb962ac59075b964b07152d234b70', 'user'),
(10, 'admin2', 'admin1@day.com2', 'admin2', '123', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anonim`
--
ALTER TABLE `anonim`
  ADD PRIMARY KEY (`id_anonim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anonim`
--
ALTER TABLE `anonim`
  MODIFY `id_anonim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
