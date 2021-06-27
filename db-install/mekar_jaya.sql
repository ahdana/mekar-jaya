-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 06:46 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekar_jaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `naa_karyawan` varchar(80) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `gaji_pokok` int(12) NOT NULL,
  `tunjangan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `naa_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `jabatan`, `gaji_pokok`, `tunjangan`) VALUES
(100101, 'Muliawan', 'Surabaya', '1985-05-19', 'L', 'Staff IT', 4000000, 800000),
(100102, 'Satria', 'Gresik', '1990-06-15', 'L', 'Marketing', 4300000, 860000),
(100104, 'Rioxiel', 'Surabaya', '1997-11-20', 'L', 'Staff Admin', 4800000, 960000);

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(12) NOT NULL,
  `tanggal_lembur` date NOT NULL,
  `id_karyawan` int(12) NOT NULL,
  `nilai_lembur` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `tanggal_lembur`, `id_karyawan`, `nilai_lembur`) VALUES
(1, '2021-06-27', 100102, 4),
(2, '2021-06-27', 100101, 3);

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `id_potongan` int(12) NOT NULL,
  `id_karyawan` int(12) NOT NULL,
  `date` date NOT NULL,
  `jenis_potongan` int(3) NOT NULL,
  `nilai_potongan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`id_potongan`, `id_karyawan`, `date`, `jenis_potongan`, `nilai_potongan`) VALUES
(2, 100101, '2021-06-27', 0, 133333);

-- --------------------------------------------------------

--
-- Table structure for table `report_gaji`
--

CREATE TABLE `report_gaji` (
  `id_report_gaji` int(12) NOT NULL,
  `id_karyawan` int(12) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `gaji_pokok` int(10) NOT NULL,
  `total_lembur` int(10) NOT NULL,
  `total_potongan` int(10) NOT NULL,
  `total_gaji` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id_potongan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `report_gaji`
--
ALTER TABLE `report_gaji`
  ADD PRIMARY KEY (`id_report_gaji`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100105;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id_lembur` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id_potongan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_gaji`
--
ALTER TABLE `report_gaji`
  MODIFY `id_report_gaji` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `potongan`
--
ALTER TABLE `potongan`
  ADD CONSTRAINT `potongan_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `report_gaji`
--
ALTER TABLE `report_gaji`
  ADD CONSTRAINT `report_gaji_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
