-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 11:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `focus`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `no_hp`, `pw`, `gender`) VALUES
(1, 'Coba', 'coba', 'coba@gmail.com', 123, 'asd', 'Laki'),
(2, 'Arvie Arvearie Yonismara', 'arviyonismara', 'bambangkun@gmail.com', 2147483647, '123', ''),
(3, 'adlin fahreza', 'a11202012792', 'arviyonismara@gmail.com', 2147483647, 'asd', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `ft_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nm_barang`, `ft_barang`, `deskripsi`, `harga`) VALUES
(1, 'Bianchi', 'bianchi.jpg', 'Focus Cycle premium road bikes', 100000000),
(2, 'cervelo', 'cervelo.jpg', 'Focus Cycle premium road bikes', 125000000),
(3, 'Dogma', 'Dogma.jpg', 'Focus Cycle premium road bikes', 110000000),
(4, 'Cinelli', 'cinelli.jpg', 'Focus Cycle premium road bikes', 50000000),
(5, 'Dosnoventa', 'dosnoventa.jpg', 'Focus Cycle premium road bikes', 65000000),
(6, 'Specialized', 'specialized.jpg', 'Focus Cycle premium road bikes', 150000000),
(7, 'Shimano 105', '105.jpg', 'Focus Cycle premium road bikes', 8000000),
(8, 'Shimano Ultegra', 'ultegra.jpg', 'Focus Cycle premium road bikes', 17000000),
(9, 'Rotor Crank', 'rotor.jpg', 'Focus Cycle premium road bikes', 8000000),
(11, 'DB Wheels', 'db.jpg', 'Lorem Ipsum Dolor set amit', 30000000),
(12, 'HED Wheels', 'hed.jpg', 'Lorem Ipsum Dolor set amit', 25000000),
(13, 'Mavic Wheels', 'mavic.jpg', 'Lorem Ipsum Dolor set amit', 60000000),
(14, 'Cinelli Bash Frame', 'frame1.jpg', 'Lorem Ipsum Dolor set amit', 35000000),
(15, 'BMC time Machine frame', 'frame2.jpg', 'Lorem Ipsum Dolor set amit', 54000000),
(16, 'Trek Madone frame', 'frame3.jpg', 'Lorem Ipsum Dolor set amit', 75000000);

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `nama`, `no_hp`, `email`, `alamat`) VALUES
(1, 'pal', '12345', 'arviyonismara@gmail.com', 'jl.manusia'),
(3, 'Halo1', '08515666', 'minjam@gmail.com', 'jl rengasdenglok'),
(4, 'arvie ', '12345', 'bambangkun@gmail.com', 'jl spu 6'),
(6, 'Habib', '234364364', '', 'Semarang indah'),
(7, 'Habib', '234364364', '', 'Semarang indah'),
(8, 'adlin fahreza', '12345', 'rizal@gmail.com', 'jl spu 6'),
(9, 'palfafa', '1343563', 'daffa@gmail.com', 'indraprasta');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `id_barang`, `nama`, `hp`, `jumlah`, `alamat`) VALUES
(1, 1, 'Arvie Arvearie Yonismara', '1234567890', 3, 'jl.manusia'),
(2, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(3, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(4, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(5, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(6, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(7, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(8, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(9, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(10, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(11, 1, 'Arvie', '1234567890', 1, 'jl.lalalala'),
(12, 0, 'adlin fahreza', '', 1, 'tembalang'),
(13, 0, 'adlin fahreza', '', 1, 'tembalang'),
(14, 0, 'adlin fahreza', '', 1, 'tembalang'),
(15, 1, 'Deva', '', 2, 'Tembalang indah'),
(16, 1, 'Deva', '', 2, 'Tembalang indah'),
(17, 1, 'Deva', '', 2, 'Tembalang indah'),
(18, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(19, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(20, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(21, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(22, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(23, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(24, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(25, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(26, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(27, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(28, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(29, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(30, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(31, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(32, 1, 'Daffa', '82347284', 2, 'Indraprasta'),
(33, 1, 'Daffa', '82347284', 2, 'Indraprasta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
