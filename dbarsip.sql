-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 02:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `namauser`, `email`) VALUES
(1, 'admin1', 'admin', '', ''),
(3, 'alam', 'alam123', 'alam', 'noeralam30@gmail.com'),
(4, 'alamaja', 'alam', 'alamaja', 'alamajhajahajaha'),
(5, 'rima', '097', 'rima', 'rima@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arsip`
--

CREATE TABLE `tbl_arsip` (
  `id_arsip` int(11) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `id_departemen` varchar(20) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id_arsip`, `no_surat`, `tanggal_surat`, `tanggal_diterima`, `jenis_surat`, `id_departemen`, `nama_pengirim`, `file`) VALUES
(1, '000111222', '2021-05-17', '2021-05-16', 'Resmi', 'Kearsipan', 'Bpk. Soean', '4119904-high-peaky-blinders.jpg'),
(2, '000111223', '2021-05-30', '2021-05-25', 'Resmi', 'Keperpustakaan', 'Bpk. Noer', '41OgCsV5JxL.jpg'),
(3, '000111224', '2021-05-30', '2021-06-01', 'Tidak Resmi', 'Non Departemen', 'Andriawan S.', 'IMG_20200823_175336.jpg'),
(4, '000111225', '2021-06-01', '2021-06-02', 'Tidak Resmi', 'Non Departemen ', 'Bpk. Susil', 'bakery.jpg'),
(5, '000111226', '2021-06-01', '2021-06-02', 'Resmi', 'LPPM', 'Bpk. Susilo SH. MH', 'AZIZ.jpg'),
(6, '000111227', '2021-06-02', '2021-06-03', 'Tidak Resmi', 'LPPM', 'Bpk. Susilo SH. MH', 'globe.png'),
(7, '000111228', '2021-06-03', '2021-06-04', 'Resmi', 'Keuangan', 'Andriawan Susasnoo CU.TE', 'ava dc.png'),
(8, '000111229', '2021-06-08', '2021-06-10', 'Resmi', 'Kearsipan', 'Ibu Nina', '133256.jpg'),
(9, '000111231', '2021-06-09', '2021-06-11', 'Resmi', 'Non Departemen', 'Ibu Caca', 'moon-fox-galaxy-4k-79.jpg'),
(10, '000111232', '2021-06-22', '2021-06-30', 'Tidak Resmi', 'Kearsipan', 'Bpk. Moekti', 'logoupnbaru.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departemen`
--

CREATE TABLE `tbl_departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_departemen`
--

INSERT INTO `tbl_departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'Akademik'),
(2, 'LPPM'),
(3, 'Departemen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengirim_surat`
--

CREATE TABLE `tbl_pengirim_surat` (
  `id_pengirim_surat` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_pengirim_surat`
--
ALTER TABLE `tbl_pengirim_surat`
  ADD PRIMARY KEY (`id_pengirim_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengirim_surat`
--
ALTER TABLE `tbl_pengirim_surat`
  MODIFY `id_pengirim_surat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
