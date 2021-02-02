-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 05:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `kd_cuti` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `lamanya_cuti` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `alamat_selama_cuti` text NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `jenis_cuti` varchar(128) NOT NULL,
  `persetujuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`kd_cuti`, `nip`, `nama`, `alasan`, `lamanya_cuti`, `tgl_mulai`, `tgl_akhir`, `alamat_selama_cuti`, `tgl_pengajuan`, `jenis_cuti`, `persetujuan`) VALUES
(25, 2147483647, 'Ridho Hibatullah', '2020-06-08', '2020-06-15', '2020-06-11', '0000-00-00', 'Keperluan Mendadak', '0000-00-00', '', ''),
(26, 2147483647, 'Ridho', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Keperluan Mendadak', '0000-00-00', '', ''),
(27, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '', ''),
(28, 123, 'Ridho Hibatullah', '', '', '2021-02-10', '2021-02-10', 'bogor', '0000-00-00', 'Cuti Tahunan', 'Disetujui'),
(29, 1, 'Ridho Hibatullah', 'A', '', '2021-02-25', '2021-02-17', 'bogor', '0000-00-00', 'Cuti Tahunan', 'Tidak Disetujui'),
(30, 2147483647, 'Ridho Hibatullah', '', '', '2021-02-17', '2021-02-20', 'bogor', '0000-00-00', 'Cuti Tahunan', 'Disetujui'),
(31, 2147483647, 'Ridho Hibatullah', '', '', '2021-02-13', '2021-02-27', 'bogor', '0000-00-00', 'Cuti Besar', 'Disetujui'),
(32, 2147483647, 'Ridho Hibatullah', '', '', '2021-02-26', '2021-03-06', 'bogor', '0000-00-00', 'Cuti Diluar Tanggungan Negara', 'Tidak Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `kd_login` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`kd_login`, `nama`, `email`, `password`) VALUES
(1, 'aa', 'aa', 'bb'),
(2, 'Ridho Hibatullah', 'ridhohibatullah1883@gmail.com', '123'),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nip` bigint(20) NOT NULL,
  `gelar_awal` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar_akhir` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `status_pegawai` varchar(100) NOT NULL,
  `unit_bidang` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `gelar_awal`, `nama`, `gelar_akhir`, `tempat_lahir`, `agama`, `jabatan`, `pangkat`, `status_pegawai`, `unit_bidang`, `alamat`) VALUES
(200208282021, '', 'Asep', '', 'Bogor', 'Islam', 'Eselon I.a', 'Juru Muda', 'PNS', 'TU', 'ciawi'),
(200208282051, '', 'Ridho Hibatullah', '', 'Bogor', 'Islam', 'Eselon IV.b', 'Juru', 'PNS', 'P2E', 'ciawi'),
(200208282053, '', 'Satria ', '', 'Bogor', 'Islam', 'Eselon I.a', 'Juru Muda', 'PNS', 'P3KT', 'Cijeruk'),
(200208282054, '', 'Satri Riski', '', 'Bogor', 'Islam', 'Eselon I.a', 'Juru Muda', 'PNS', 'P3JFA', 'Cipaku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`kd_cuti`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`kd_login`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `kd_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `kd_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `nip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200208282055;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
