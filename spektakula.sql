-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 10:25 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spektakula`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `slug`) VALUES
(1, 'Admin', 'admin'),
(2, 'Kepala Desa', 'kades'),
(3, 'User', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE `tb_kelahiran` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`id`, `nik`, `kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
(2, '321010203013012', '321016291278061', 'Nama 1', 'Cirebon', '2023-04-07', 'Cirebon Kota');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`id`, `nik`, `kk`, `nama`, `tanggal`, `alamat`) VALUES
(1, '32102938249823498234', '42348238947823487923', 'Nama 1', '2023-04-04', 'Cirebon'),
(2, '321016291278061', '321016291278061', 'Nama 2', '2023-04-05', 'Cirebon Kota');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendatang`
--

CREATE TABLE `tb_pendatang` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `pindah` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendatang`
--

INSERT INTO `tb_pendatang` (`id`, `nik`, `kk`, `nama`, `alamat_asal`, `alamat_sekarang`, `pindah`, `tanggal`, `keterangan`) VALUES
(1, '0340242343423432432', '213213124235234223', 'Nama 6', 'Cirebon', 'Cirebon 1', 'Jember', '2023-04-07', 'Pindah karena habis kontrak kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `nama`, `agama`, `tempat`, `tanggal_lahir`, `nik`, `kk`) VALUES
(1, 'Dika', 'Islam', 'Cirebon', '2023-04-06', '32210201203129318931', '32210201203129318931');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindahan`
--

CREATE TABLE `tb_pindahan` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pindah` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pindahan`
--

INSERT INTO `tb_pindahan` (`id`, `nik`, `kk`, `nama`, `alamat`, `pindah`, `tanggal`, `alasan_pindah`) VALUES
(1, '321016291278061', '321016291278061', 'Nama 2', 'Cirebon Kota', 'Tegal', '2023-04-05', 'Kerja di perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `produk`, `harga`, `gambar`, `deskripsi`) VALUES
(6, 'Batik Megamendung', '121000', 'megamendung.png', 'Batik Megamendung merupakan karya seni batik yang identik dan bahkan menjadi ikon batik daerah Cirebon dan daerah Indonesia lainnya.'),
(7, 'Batik Tulis', '280000', 'batik_tulis.jpg', 'Batik merupakan kain khas Indonesia yang dibuat dengan cara menulis atau menerakan lilin (malam) pada sebuah kain kemudian mewarnainya. '),
(10, 'Batik ', '100000', 'batik-2.jpg', 'Batik merupakan kain khas Indonesia yang dibuat dengan cara menulis atau menerakan lilin.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `name`, `email`, `username`, `password`, `confirm`) VALUES
(1, 'Dika Al Rezka', 'admin@gmail.com', 'DikaAl', 'dika123', 'dika123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 1),
(3, 'kepaladesa', 'kepaladesa', 2),
(4, 'Dika', 'warga1', 3),
(5, 'Test', 'test', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pendatang`
--
ALTER TABLE `tb_pendatang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pindahan`
--
ALTER TABLE `tb_pindahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pendatang`
--
ALTER TABLE `tb_pendatang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pindahan`
--
ALTER TABLE `tb_pindahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
