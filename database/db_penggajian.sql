-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220621.da7c7a84e1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 04:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absensi`
--

CREATE TABLE `data_absensi` (
  `id_absensi` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_absensi`
--

INSERT INTO `data_absensi` (`id_absensi`, `bulan`, `nik`, `nama_karyawan`, `jenis_kelamin`, `nama_jabatan`, `hadir`, `sakit`, `alpha`) VALUES
(1, '102022', '1612396213962', 'Muhamad Gibran Al Mumbait', 'Laki-laki', 'Software Enginering', 25, 1, 0),
(8, '112022', '982419864124', 'Georgina', 'Perempuan', 'Admin', 21, 0, 5),
(9, '112022', '1612396213962', 'Muhamad Gibran Al Mumbait', 'Laki-laki', 'Software Enginering', 21, 0, 5),
(10, '112022', '986934293641', 'Vani Sidiyanto', 'Laki-laki', 'IT Support', 21, 0, 5),
(11, '122022', '982419864124', 'Georgina', 'Perempuan', 'Admin', 20, 0, 6),
(12, '122022', '1612396213962', 'Muhamad Gibran Al Mumbait', 'Laki-laki', 'Software Enginering', 24, 1, 1),
(13, '122022', '986934293641', 'Vani Sidiyanto', 'Laki-laki', 'IT Support', 24, 0, 2),
(14, '122022', '2342342342', 'michael', 'Laki-laki', 'Admin', 11, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `transport`, `uang_makan`) VALUES
(1, 'Software Enginering', '8000000', '800000', '500000'),
(2, 'Admin', '5000000', '500000', '200000'),
(3, 'IT Support', '7500000', '700000', '400000'),
(5, 'Staff Finance', '6500000', '500000', '400000'),
(6, 'Staff Marketing', '6500000', '500000', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(35) NOT NULL,
  `img` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama_karyawan`, `email`, `password`, `jenis_kelamin`, `nama_jabatan`, `tanggal_masuk`, `status`, `img`, `hak_akses`) VALUES
(1, '1612396213962', 'Muhamad Gibran Al Mumbait', 'muhamadgibran2333@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-laki', 'Software Enginering', '2022-11-10', 'Karyawan Tetap', '02.jpg', 2),
(2, '986934293641', 'Vani Sidiyanto', 'zeroalpha0102@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-laki', 'IT Support', '2022-11-20', 'Karyawan Tetap', 'default.png', 2),
(3, '982419864124', 'Georgina', 'muhamadgibran@gmail.com', '202cb962ac59075b964b07152d234b70', 'Perempuan', 'Admin', '2022-11-20', 'Karyawan Tetap', '02.jpg', 1),
(7, '2342342342', 'Michael', 'muhamadgibran1699@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'Admin', '2022-11-20', 'Karyawan Tetap', '02.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'karyawan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id_potongan` int(11) NOT NULL,
  `potongan` varchar(100) NOT NULL,
  `jumlah_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id_potongan`, `potongan`, `jumlah_potongan`) VALUES
(1, 'Alpha', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absensi`
--
ALTER TABLE `data_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id_potongan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absensi`
--
ALTER TABLE `data_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



