-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17 Des 2018 pada 12.06
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `mhs`
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
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `foto`, `nim`, `nama`, `ttl`, `asal_sma`, `telp_rumah`, `no_hp`, `email`, `ibu`, `bapak`, `no_telp_ortu`, `alamat`, `kelurahan`, `kecamatan`, `negara`, `provinsi`, `kabupaten_kota`, `kode_pos`, `email_lain`) VALUES
(1, 'foto-2.jpg', '11160930000200', 'Kizuna', 'dimana mana', 'abc', '34523', '45143636', 'gfdghsdffd@fdhadhad.gdgsg', 'agd', 'asdga', '5243243', 'hafdhdahfhfdhffshdahhaahah afh fah aha ha haa fdwete', 'dsgadd', 'agdgdas', 'agdagsd', 'agdasg', 'agadga', '5252', 'dggasd@dgfga.aG'),
(4, 'salsalbila.jpg', '11160170000071', 'Raden Salsalbila', 'Jakarta, 21 Juni 1998', 'SMAS Daar El Qolam', '021-5919271', '081213342865', 'raden.june@gmail.com', 'Tuti Suhartati', 'Raden Dadang Ruhman', '081316318514', 'Jl. Danau Batur Raya No. 8 RT 004/ RW 007', 'Bencongan', 'Kelapa Dua', 'Indonesia', 'Banten', 'Tangerang', '15811', 'raden.salsalbila16@mhs.uinjkt.ac.id'),
(5, 'izza.jpg', '11160170000048', 'Izzatul Jannah', 'Tangerang, 14 April 1998', 'SMA DAAR EL QOLAM', '', '087830121965', 'izzaatul.jannah@gmail.com', 'Andrawati', 'Pardi Lahit', '081389341135', 'Perum Teratai Griya Asri, Blok G3 No. 37', 'Legok', 'Legok', 'Indonesia', 'Banten', 'Tangerang', '15820', ''),
(6, 'fira.jpg', '11160170000050', 'Maghfira Izani Maulani', 'Tangerang, 13 Februari 1998', 'SMAN 33 Jakarta', '-', '081804099571', 'maghfiraizanimaulani13@gmail.com', 'Sri Haryati', 'Haripomo', '0818844182', 'Komplek KFT Blok A10 No.16', 'Cengkareng Barat', 'Cengkareng', 'Indonesia', 'DKI Jakarta', ' Jakarta Barat', '', ''),
(7, 'isnaini.jpg', '11160170000044', 'Isnaini Rizqi Br Butar Butar', ' Pematang Sapat,15 Desember 1997', 'SMAN 3 MUARA BUNGO', '', '082129089094', 'Isnainirizqi@rocketmail.com', 'Lanna Sari Nasution', 'Rizqi Isrin Butar Butar', '', 'komplek perumahan PTPN VI PKS RIMDU JAMBI', 'Karang Dadi', 'Rimbo Ilir', 'Indonesia', 'Jambi', 'Tebo', '', ''),
(8, 'dewi.jpg', '11160170000072', 'Dewi Haryani', 'Jakarta, 11-12-97', 'SMAN 4 Tangerang Selatan', '', '08978283546', 'dewi1997yani@gmail.com', 'Utih', 'Usup', '', 'Jl. Nuri Atas', 'Rengas', 'Ciputat Timur', 'Indonesia', 'Banten', 'Tangerang Selatan', '15412', ''),
(9, 'nav_home-icon2.png', '11160170000043', 'Annisa Fira Nindy Amalia', 'Jakarta, 5 Agustus 1998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'search-icon.png', '11160170000049', 'Adilah Nida Rinjani', 'Depok, 17 Maret 1998', 'SMAN 2 Cirebon', '', '087780469451', 'adilahnidarinjani@gmail.com', 'Nurul', 'Hary', '', 'Jl. Al Ikhlas', 'Cempaka Putih', 'Ciputat Timur', 'Indonesia', 'Banten', 'Tangerang Selatan', '15124', ''),
(11, 'kusna.jpg', '11160170000066', 'Muhammad Khusna Khabaib', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'nav_acc-icon2.png', '11160170000057', 'Daesita Maulida', 'Jakarta, 01 Desember 1997', 'MAN 19  Jakarta', '', '087875067040', 'daesita.maulida@gmail.com', 'Yuliah', 'Hapas A.M', '', 'Jl. H. Daiman gg. hrisin no 56', 'Kreo Selatan', 'Larang', 'Indonesia', 'Banten', 'Tangerang', '15156', ''),
(13, 'dian mei.jpg', '11160170000075', 'Dian Meiliawati', 'Tangerang, 2 Mei 1998', 'SMAN 12 TANGSEL', '', '085959682785', 'dianmeilia31@gmail.com', 'Supriati', 'Gino Subari', '081381422188', 'Gang Salem II. RT 04 RW 01. No : 95', 'Serpong', 'Serpong', 'Indonesia', 'Banten', 'Tangerang Selatan', '15310', ''),
(14, 'jun.jpg', '11160170000073', 'Jundullah Wangsa Humaka', 'Serang, 3 Juni 1997', ' MA Persis Tarogong', '', '089524643681', 'encemancuniansejati@gmail.com', 'Lilis Lisawati', 'Saepul Anwar', '081320097769', 'komplek pilar biru, jln.pilar utara1 no.25', 'Cibiru Hilir', 'Cileunyi', 'Indonesia', 'Jawa Barat', 'Kab. Bandung', '', ''),
(15, 'fenny.jpg', '11160170000059', 'Fenny Rachmawati', 'Bekasi, 8 Oktober 1998', 'SMAN 2 Tambun Selatan', '', '089638355798', 'fennyrachmawati08@gmail.com', 'Siti Nurkhaenih', 'Triyanto', '0812-8219-0087', 'Mahkota Indah Blok GC 4 No 6 RT 003/RW 030', 'Mangun Jaya', 'Tambun Selatan ', 'Indonesia', 'Jawa Barat', 'Bekasi', '17510', ''),
(16, 'novia.jpg', '11160170000061', 'Novia Zahrotul Wihda ', 'Jakarta, 08 November 1997 ', 'MAN SERPONG ', '', '085773128398 ', 'zahrotulwihda@gmail.com ', 'Satiyah', 'Suwanta ', '081296457675', 'Jl. merpati Raya No.10 RT 03/01', 'Sawah', 'Ciputat ', 'Indonesia', 'Banten ', 'Tangerang Selatan ', '15413', ''),
(17, 'DSC_8814.JPG', '11160170000051', 'Nida Fauziah', 'Jakarta, 22 Desember 1997', 'SMAN 63 Jakarta', '021 7373822', '089604247973', 'nidaf942@gmail.com', 'umi muhdiyati', 'muji slamet', '081585130878', 'jalan menjangan 3 rt 003 rw 003', 'pondok ranji', 'ciputat timur', 'indonesia', 'Banten', 'Kota Tangerang', '15412', 'nida.fauziah16@uinjkt.ac.id'),
(18, 'DSC_0009.JPG', '11160170000047', 'Ahmad Firdaus', '22 September 1998', 'SMAN 11 Tangsel', '', '08121996593', 'firdauskun590@gmail.com', 'Rohida', 'Tukino', '', 'Kp. poncol RT 01/011', 'Lengkong Wetan', 'Serpong', 'indonesia', 'Banten', 'Tangerang Selatan', '15322', ''),
(19, 'nav_home-icon2.png', '11160170000053', 'Khairul Umam', 'Serang, 25 Agustus 1998', 'SMK N 1 CILEGON', '', '089604711676', 'khairulumamm25@gmail.com', 'Hj. Nursyamsiar', 'Drs. H. Harun Al-Rasyid', '085922281249', 'Jl. Gurame Tengah no.142 Bambu Apus, Pamulang', 'Bambu Apus', 'Pamulang', 'Indonesia', 'Banten', 'Tangerang Selatan', '15415', ''),
(20, 'nav_home-icon2.png', '11160170000058', 'Yanita Amalia Safitri', 'Tulungagung, 26 Januari 1998', 'SMAN 2 Tambun Selatan', '', '081284101460', 'yanitamalia.s@gmail.com', 'Sri Mulyati', 'Surono', ' 081316715378', 'Jl. Durian 3 No.19', 'Wanasari', 'Cibitung', 'Indonesia', 'Jawa Barat', 'Kab. Bekasi', '17521', 'yanitamalia@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
