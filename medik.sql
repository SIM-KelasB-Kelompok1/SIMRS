-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 03:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `telp` int(15) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `spesialis`, `telp`, `status`) VALUES
(1, 'Dr.Muhammad Lukman, Sp.OG', 'Umum', 85398111, 'aktif'),
(2, 'Majid', 'umum', 980242, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(30) NOT NULL,
  `nama_gedung` varchar(30) NOT NULL,
  `ruang_gedung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inf_lokasi`
--

CREATE TABLE `inf_lokasi` (
  `lokasi_ID` int(11) NOT NULL,
  `lokasi_kode` varchar(50) NOT NULL DEFAULT '',
  `lokasi_nama` varchar(100) NOT NULL DEFAULT '',
  `lokasi_propinsi` int(2) NOT NULL,
  `lokasi_kabupatenkota` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `lokasi_kecamatan` int(2) UNSIGNED ZEROFILL NOT NULL,
  `lokasi_kelurahan` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(30) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `kode_jabatan` varchar(30) NOT NULL,
  `tunjangan_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `date_created`, `status`) VALUES
(1, 'front', 'front', '2018-06-05 00:00:00', 'front_office'),
(2, 'admin', 'admin', '0000-00-00 00:00:00', 'admin'),
(3, 'back', 'back', '2018-06-26 00:00:00', 'back_office'),
(5, 'dokter', 'dokter', '2018-06-04 03:38:04', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `paramedis`
--

CREATE TABLE `paramedis` (
  `id_paramedis` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `telp` int(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paramedis`
--

INSERT INTO `paramedis` (`id_paramedis`, `nama`, `spesialis`, `telp`, `status`) VALUES
(1, 'Syafei S.Kep', 'D3 Keperawatan', 862883713, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(50) NOT NULL,
  `rekmed` int(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `nm_depan` varchar(50) NOT NULL,
  `nm_belakang` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kab` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `kel` varchar(30) NOT NULL,
  `umur` int(12) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `telp` int(15) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `wn` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `p_jawab` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `rekmed`, `tgl_masuk`, `jam_masuk`, `nm_depan`, `nm_belakang`, `alamat`, `prov`, `kab`, `kec`, `kel`, `umur`, `jk`, `telp`, `pendidikan`, `pekerjaan`, `agama`, `wn`, `status`, `gol_darah`, `p_jawab`, `date_created`) VALUES
(4, 23424223, '2018-06-12', '22:33:00', 'Muhammad', 'Lukman', 'makaksdahdja', 'sulsel', 'gowa', 'makassae', 'adsakl', 23, 'Laki-Laki', 980242, 'SD/MI', 'Nelayan', 'Kristen katolik', 'Indonesia', 'Nikah', 'B', 'Kamaruddinn', '2018-06-06 12:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(30) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `kode_poli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruang rawat inap`
--

CREATE TABLE `ruang rawat inap` (
  `id_ruang` varchar(30) NOT NULL,
  `kode_ruang` varchar(30) NOT NULL,
  `pk_ruang` varchar(30) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `nama_gedung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id`, `nama`) VALUES
(1, 'umum'),
(2, 'gigi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `inf_lokasi`
--
ALTER TABLE `inf_lokasi`
  ADD PRIMARY KEY (`lokasi_ID`),
  ADD KEY `lokasi_kode` (`lokasi_kode`),
  ADD KEY `lokasi_propinsi` (`lokasi_propinsi`),
  ADD KEY `lokasi_kabupatenkota` (`lokasi_kabupatenkota`),
  ADD KEY `lokasi_kecamatan` (`lokasi_kecamatan`),
  ADD KEY `lokasi_kelurahan` (`lokasi_kelurahan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paramedis`
--
ALTER TABLE `paramedis`
  ADD PRIMARY KEY (`id_paramedis`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `ruang rawat inap`
--
ALTER TABLE `ruang rawat inap`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inf_lokasi`
--
ALTER TABLE `inf_lokasi`
  MODIFY `lokasi_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paramedis`
--
ALTER TABLE `paramedis`
  MODIFY `id_paramedis` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
