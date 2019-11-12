-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2019 at 04:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karya_detail`
--

CREATE TABLE `tbl_karya_detail` (
  `id_detail_karya` int(11) NOT NULL,
  `id_detail_karya_url` varchar(20) DEFAULT NULL,
  `id_karya` int(11) DEFAULT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_karya_detail`
--

INSERT INTO `tbl_karya_detail` (`id_detail_karya`, `id_detail_karya_url`, `id_karya`, `id_mahasiswa`, `created_at`, `modified_at`, `status`) VALUES
(1, '9hACeRULkouzBJt4UgHZ', 1, 1, '2019-11-03 00:00:00', NULL, 1),
(2, 'oWuE7HdMKkh3bV7jsSaT', 1, 2, '2019-11-03 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karya_lampiran`
--

CREATE TABLE `tbl_karya_lampiran` (
  `id_karya_lampiran` int(11) NOT NULL,
  `id_karya_lampiran_url` varchar(20) DEFAULT NULL,
  `id_karya` int(11) DEFAULT NULL,
  `lampiran_karya` varchar(100) DEFAULT NULL,
  `lampiran_jenis` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karya_mhs`
--

CREATE TABLE `tbl_karya_mhs` (
  `id_karya` int(11) NOT NULL,
  `id_karya_url` varchar(20) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `karya_nama` varchar(50) DEFAULT NULL,
  `karya_deskripsi` longtext DEFAULT NULL,
  `karya_tgl_buat` date DEFAULT NULL,
  `karya_hki` int(1) DEFAULT NULL,
  `karya_status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_karya_mhs`
--

INSERT INTO `tbl_karya_mhs` (`id_karya`, `id_karya_url`, `id_prodi`, `karya_nama`, `karya_deskripsi`, `karya_tgl_buat`, `karya_hki`, `karya_status`, `created_at`, `modified_at`, `status`) VALUES
(1, 'xSY0twBGTbinbL4eagOl', 1, 'Karya Test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugiat quae beatae laborum neque sit minima consequatur excepturi! Quasi saepe unde tempora ullam pariatur eaque reiciendis quae nesciunt sunt dolorem.', '2019-10-22', 0, 1, '2019-10-22 15:38:40', NULL, 1),
(2, '3eD3xd0X0qpfDnsyHBjA', 1, 'Alat Penggerak Otomatis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugiat quae beatae laborum neque sit minima consequatur excepturi! Quasi saepe unde tempora ullam pariatur eaque reiciendis quae nesciunt sunt dolorem.', '2019-11-01', 0, 1, '2019-11-03 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_mahasiswa`
--

CREATE TABLE `tbl_master_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_mahasiswa_url` varchar(20) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `mhs_nama` varchar(50) NOT NULL,
  `mhs_nrp` varchar(15) NOT NULL,
  `mhs_tempat_lahir` varchar(50) DEFAULT NULL,
  `mhs_tanggal_lahir` date DEFAULT NULL,
  `mhs_jkel` enum('L','P') NOT NULL,
  `mhs_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_master_mahasiswa`
--

INSERT INTO `tbl_master_mahasiswa` (`id_mahasiswa`, `id_mahasiswa_url`, `id_prodi`, `mhs_nama`, `mhs_nrp`, `mhs_tempat_lahir`, `mhs_tanggal_lahir`, `mhs_jkel`, `mhs_email`, `password`, `created_at`, `modified_at`, `status`) VALUES
(1, 'JAu5d6XXaZT83kqJdAbE', 1, 'Bima Indra', '161111070', 'Malang', '1998-07-04', 'L', '161111070@mhs.stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-11-03 00:00:00', NULL, 1),
(2, 'o71KjK5L6CtSABr0IySs', 1, 'Indra Hariadi', '161111080', 'Malang', '1998-04-19', 'L', '161111080@mhs.stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-11-03 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_prodi`
--

CREATE TABLE `tbl_master_prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_prodi_url` varchar(5) DEFAULT NULL,
  `prodi_nama` varchar(50) DEFAULT NULL,
  `prodi_email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_master_prodi`
--

INSERT INTO `tbl_master_prodi` (`id_prodi`, `id_prodi_url`, `prodi_nama`, `prodi_email`, `password`, `created_at`, `modified_at`, `status`) VALUES
(1, 'p6rYq', 'Teknik Informatika', 'ti@stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-10-20 22:35:05', NULL, 1),
(2, '6GOny', 'Desain Komunikasi Visual', 'dkv@stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-11-03 00:00:00', NULL, 1),
(3, 'A1V1f', 'Sistem Informasi', 'si@stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-11-03 00:00:00', NULL, 1),
(4, 'kMe4Z', 'Manajemen Informatika', 'mi@stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-11-03 00:00:00', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_karya_detail`
--
ALTER TABLE `tbl_karya_detail`
  ADD PRIMARY KEY (`id_detail_karya`),
  ADD KEY `mhs_ke_karya` (`id_mahasiswa`) USING BTREE,
  ADD KEY `detail_ke_karya` (`id_karya`) USING BTREE;

--
-- Indexes for table `tbl_karya_lampiran`
--
ALTER TABLE `tbl_karya_lampiran`
  ADD PRIMARY KEY (`id_karya_lampiran`) USING BTREE,
  ADD KEY `lampiran_ke_karya` (`id_karya`) USING BTREE;

--
-- Indexes for table `tbl_karya_mhs`
--
ALTER TABLE `tbl_karya_mhs`
  ADD PRIMARY KEY (`id_karya`) USING BTREE,
  ADD KEY `id_karya` (`id_karya`) USING BTREE,
  ADD KEY `karya_ke_prodi` (`id_prodi`) USING BTREE;

--
-- Indexes for table `tbl_master_mahasiswa`
--
ALTER TABLE `tbl_master_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`) USING BTREE,
  ADD KEY `mhs_ke_prodi` (`id_prodi`) USING BTREE;

--
-- Indexes for table `tbl_master_prodi`
--
ALTER TABLE `tbl_master_prodi`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_karya_lampiran`
--
ALTER TABLE `tbl_karya_lampiran`
  MODIFY `id_karya_lampiran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_karya_mhs`
--
ALTER TABLE `tbl_karya_mhs`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_master_mahasiswa`
--
ALTER TABLE `tbl_master_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_master_prodi`
--
ALTER TABLE `tbl_master_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_karya_detail`
--
ALTER TABLE `tbl_karya_detail`
  ADD CONSTRAINT `detail_ke_karya` FOREIGN KEY (`id_karya`) REFERENCES `tbl_karya_mhs` (`id_karya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mhs_ke_karya` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tbl_master_mahasiswa` (`id_mahasiswa`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_karya_lampiran`
--
ALTER TABLE `tbl_karya_lampiran`
  ADD CONSTRAINT `lampiran_ke_karya` FOREIGN KEY (`id_karya`) REFERENCES `tbl_karya_mhs` (`id_karya`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_karya_mhs`
--
ALTER TABLE `tbl_karya_mhs`
  ADD CONSTRAINT `karya_ke_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_master_prodi` (`id_prodi`);

--
-- Constraints for table `tbl_master_mahasiswa`
--
ALTER TABLE `tbl_master_mahasiswa`
  ADD CONSTRAINT `mhs_ke_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_master_prodi` (`id_prodi`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
