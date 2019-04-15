-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 11:29 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `asal_sma` varchar(100) NOT NULL,
  `telp_rumah` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `bapak` varchar(50) NOT NULL,
  `no_telp_ortu` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `email_lain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `foto`, `nim`, `nama`, `ttl`, `asal_sma`, `telp_rumah`, `no_hp`, `email`, `ibu`, `bapak`, `no_telp_ortu`, `alamat`, `kelurahan`, `kecamatan`, `negara`, `provinsi`, `kabupaten_kota`, `kode_pos`, `email_lain`) VALUES
(1, 'foto-1.jpg', '11160930000099', 'Rylai', 'Jekardah, 6 desember 2099', 'sman gat', '123456789', '987654321', 'anjay@anjay.anjay', 'ibunya anjay', 'bapaknya anjay', '532534256243624', 'jalan jalan ', 'a', 'b', 'c', 'ddd', 'b', '5352', 'anjaybat@anjay.anjay'),
(2, 'foto-2.jpg', '11160930000200', 'Kizuna', 'dimana mana', 'abc', '34523', '45143636', 'gfdghsdffd@fdhadhad.gdgsg', 'agd', 'asdga', '5243243', 'hafdhdahfhfdhffshdahhaahah afh fah aha ha haa fdwete', 'dsgadd', 'agdgdas', 'agdagsd', 'agdasg', 'agadga', '5252', 'dggasd@dgfga.aG'),
(3, '600cadb35e81514058b4f5c33b26b33bc4bfe356_hq.jpg', '11113643636646', 'Xenovia', '39 desember 2039', 'a', '124124124', '532153215', 'sadggasga', 'asdfgds', 'sdfgsadas', '5321532', 'sdgasgasgsdagasd', 'sgdgasd', 'hfhfdh', 'dfhsh', 'sdhsdf', 'dfhsdhf', '34531', 'dfgdgddsfhfhfsdhdhf'),
(4, 'Dark-blue-bubbles-plain-desktop-background.jpg', 'dgdag', 'dsgasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
