-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 08:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_tumbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id_kasir` int(255) NOT NULL,
  `id_manajer` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `foto_kasir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id_kasir`, `id_manajer`, `username`, `email`, `password`, `nama_depan`, `nama_belakang`, `gaji`, `foto_kasir`) VALUES
(1, 1, 'asepberlian', 'asepberlian@gmail.com', 'berlian', 'Asep', 'Berlian', '950000', 'asep_berlian.jpg'),
(2, 2, 'danangsigit', 'danangsigit@gmail.com', 'sigit', 'Danang', 'Sigit', '900000', 'employee_photo_default.jpg'),
(3, 2, 'risasari', 'risasari@gmail.com', 'rsari', 'Erika', 'Sari', '900000', 'employee_photo_default.jpg'),
(5, 1, 'albert', 'albertig@gmail.com', 'albert', 'Albert', 'Ignatius', '950000', 'employee_photo_default3.jpg'),
(6, 1, 'andaru', 'andaruakbar@gmail.com', 'andaru', 'Andaru', 'Akbar', '950000', 'employee_photo_default4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manajer`
--

CREATE TABLE `tb_manajer` (
  `id_manajer` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `foto_manajer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_manajer`
--

INSERT INTO `tb_manajer` (`id_manajer`, `username`, `password`, `email`, `nama_depan`, `nama_belakang`, `foto_manajer`) VALUES
(1, 'sultanleosko', 'leosko', 'leoskosultan@gmail.com', 'Sultan', 'Leosko', ''),
(2, 'mikemohede', 'mohede', 'mikemohede@gmail.com', 'Mike', 'Mohede', ''),
(3, 'sultangeraldo', '12345', 'sultangeraldo@gmail.com', '', '', ''),
(4, 'saadatul', '12345', 'shashaadatul26@gmail.com', 'Saadatul', 'Sholehah', ''),
(5, 'algifarizi', 'point', 'mloendazz@yahoo.com', 'Algi', 'Farizi', ''),
(6, 'brianch', 'brian', 'brianch@gmail.com', 'Brian', 'Christian', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(255) NOT NULL,
  `id_manajer` varchar(255) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kuantitas` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto_menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `id_manajer`, `nama_menu`, `harga`, `kuantitas`, `kategori`, `foto_menu`) VALUES
(1, '1', 'Nasi Goreng Seafood', '15000', 10, 'Foods', 'nasi_goreng_seafood.jpg'),
(2, '1', 'Potato Wedges', '10000', 10, 'Foods', 'potato_wedges.jpg'),
(3, '2', 'Heineken', '30000', 5, 'Drinks', 'heineken.jpg'),
(4, '1', 'Nasi Padang', '15000', 10, 'Foods', 'empty_images1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_restoran`
--

CREATE TABLE `tb_restoran` (
  `id_restoran` int(255) NOT NULL,
  `id_manajer` int(255) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `jenis_restoran` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_restoran`
--

INSERT INTO `tb_restoran` (`id_restoran`, `id_manajer`, `nama_restoran`, `jenis_restoran`, `alamat`) VALUES
(1, 1, 'Omah Sulfat', 'Cafe', 'Jl. Simpang Sulfat Utara III / 22A'),
(2, 2, 'Astep Bistro Terrace', 'Pub', 'Jl. Puncak'),
(3, 3, 'Ayam Nelongso', '', 'Jl. Sulfat'),
(9, 4, 'Trampolin', '', 'Jl. Kauman No. 2'),
(10, 5, 'Tetsujin', '', 'Jl. Ikan Piranha No. 9'),
(11, 6, 'Sate Blora', '', 'Sawojajar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_menu` int(255) NOT NULL,
  `id_kasir` int(255) NOT NULL,
  `id_restoran` int(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_manajer`
--
ALTER TABLE `tb_manajer`
  ADD PRIMARY KEY (`id_manajer`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id_kasir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_restoran`
--
ALTER TABLE `tb_restoran`
  MODIFY `id_restoran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
