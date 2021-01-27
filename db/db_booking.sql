-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 10:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id` int(5) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `jenis_service` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id`, `no_polisi`, `tipe`, `nama`, `alamat`, `no_hp`, `tanggal`, `jam`, `jenis_service`, `keterangan`, `metode`, `harga`) VALUES
(20, 'BK 3342 VCX', 'Supra X Helm In', 'Dessi Rahmayani', 'Air Joman Psr XI', '089987665441', '2021-01-04', '09.00 WIB', 'Service Lengkap', 'Pembersihan Saringan Hawa,Cuci Bak CVT,Pemeriksaan Baut Kabel dan Baterai,Ganti Oli,Cuci Karbu', 'Datang Ke AHHAS', 'Rp.110.000'),
(21, 'BK 9994 VBB', 'Genio Series', 'Nizar Lugiato', 'Jl.Arwana,Sidomukti', '089566879001', '2021-01-07', '16.00 WIB', 'Service Lengkap', 'Pembersihan Saringan Hawa,Cuci Bak CVT,Pemeriksaan Baut Kabel dan Baterai,Ganti Oli,Cuci Karbu', 'ASK (AHHAS Service K', 'Rp.110.000'),
(22, 'BK 7765 VBA', 'CRF 150 L', 'Sara Amelia', 'Jl.H.Misbah,Kisaran', '081344551101', '2021-01-08', '09.00 WIB', 'Service Ringan', 'Pembersihan Saringan Hawa,Cuci Bak CVT,Pemeriksaan Baut', 'Datang Ke AHHAS', 'Rp.65.000'),
(24, 'BK 5567 BBA', 'Vario 125 Series', 'Evan Rifky', 'Bunut Seberang', '081355670901', '2021-01-08', '14.00 WIB', 'Service Ringan', 'Pembersihan Saringan Hawa,Cuci Bak CVT,Pemeriksaan Baut', 'Datang Ke AHHAS', 'Rp.65.000'),
(25, 'BK 5723 UAA', 'ADV 150 Series', 'Septian Malik', 'Rawang Panca Arga', '0813445267781', '2021-01-05', '11.00 WIB', 'Service Ringan', 'Pembersihan Saringan Hawa,Cuci Bak CVT,Pemeriksaan Baut', 'Datang Ke AHHAS', 'Rp.65.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sukucadang`
--

CREATE TABLE `tb_sukucadang` (
  `id` int(5) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sukucadang`
--

INSERT INTO `tb_sukucadang` (`id`, `nama_konsumen`, `no_hp`, `nama_barang`, `tgl_beli`, `harga`, `jumlah`, `total`) VALUES
(9, 'Sandi Budiartono', '0813445267781', 'Meka Lampu Vario 125', '2021-01-04', '180000', '1', '180000'),
(10, 'Agung Hapsah', '082344511672', 'Tromol Lingkar', '2021-01-05', '160000', '2', '320000'),
(11, 'Erwin Jingga', '081266534012', 'Pompa Tangki', '2021-01-06', '300000', '1', '300000'),
(12, 'Arya Tama ', '082588933021', 'AHM Kampas Kopling G', '2021-01-06', '180000', '1', '180000'),
(13, 'Endra Gumilang Hasibuan', '089544251109', 'Honda Genuine Access', '2021-01-05', '100000', '2', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum'),
('hondaku', '53dc8472f25bb2c5adef86b1ac8d22b6', 'hondakukisaran@gmail.com', 'CV.Honda Karya Utama', 1, 'Admin'),
('konsumen', 'db8f0012fe68b6c227747d594b3bffd2', 'staff@gmail.com', 'stfu', 2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sukucadang`
--
ALTER TABLE `tb_sukucadang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_sukucadang`
--
ALTER TABLE `tb_sukucadang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
