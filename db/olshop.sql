-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 03:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `tanggal` varchar(50) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stok` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`tanggal`, `kode`, `barang`, `merk`, `deskripsi`, `stok`, `total`) VALUES
('12 januari 2020', 'D004', 'Kulkas', 'LG GN-B202SLC', 'Dua pintu dan memiliki kapasitas 205 L', '1', '3740000'),
('13 Januari 2020', 'F005', 'Televisi', 'SHARP TV LED LC-40SA5200IRD ', 'Ukuran : 40 inch , Resolusi: 1920 x 1080 (Full HD) , Dolby Audio,Teknologi X2 Master Engine dan Wide', '1', '3700000');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `tanggal` varchar(30) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`tanggal`, `jenis`, `deskripsi`, `total`) VALUES
('12 Januari 2020', 'Transportasi', 'Beli Bensin ', '50000'),
('13 Januari 2020', 'Transportasi', 'beli bensin ', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `no` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`no`, `kode`, `barang`, `merk`, `stok`, `deskripsi`, `harga`, `foto`) VALUES
(11, 'D004', 'Kulkas', 'LG GN-B202SLC', '156', 'Dua pintu dan memiliki kapasitas 205 L', 'Rp 3.740.000', '12012020152049kulkas1.jpg'),
(12, 'F003', 'Televisi', 'Toshiba TV LED 32L2800 ', '129', 'Ukuran : 32 Inch,  Resolusi: 1366 x 768 (HD Ready)\r\nPicture Engine: CEVO\r\nActive Motion & Resolution', 'Rp 2.600.000', '12012020152512tv.jpg'),
(13, 'F005', 'Televisi', 'SHARP TV LED LC-40SA5200IRD ', '190', 'Ukuran : 40 inch , Resolusi: 1920 x 1080 (Full HD) , Dolby Audio,Teknologi X2 Master Engine dan Wide', 'Rp 3.700.000', '12012020153004tv2.jpg'),
(14, 'E004', 'Mesin Cuci', 'Polytron PAW 8511', '90', 'Tipe : Top load, Ukuran : 540 x 552 x 920 (mm), Kapasitas : 8.5 Kg, Penggunaan daya listrik : 330 W', 'Rp 1.650.000', '12012020153551PAW-8511WB.jpg'),
(15, 'C003', 'Mesin Cuci', 'Samsung WF8590NHW', '189', 'Tipe : Front Load, Ukuran : 598 x 846 x 473 (mm) , Kapasitas : 6.1 Kg', 'Rp 3.600.000', '12012020154317imagen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `no` int(5) NOT NULL,
  `id` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`no`, `id`, `nama`, `jabatan`, `gaji`, `telp`, `email`, `alamat`, `foto`) VALUES
(1, '55418457', 'Nurul Alimah', 'Admin', 'Rp.7.000.000', '085345901471', 'nurulalimah09@gmail.', 'Jl. Melati Putih', '14012020035551user-icon-female-person-symbol-profile-avatar-sign-vector-18991898.jpg'),
(2, '55418254', 'Gibran ', 'Operator', 'Rp.4.000.000', '085345901478', 'gibran@gmail.com', 'Jl, Melati Putih no.37', '23012020002711person-icon-male-user-profile-avatar-vector-18833568.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
('1D', 'admin', '12345', 'admin'),
('2F', 'operator', '54321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sdm`
--
ALTER TABLE `sdm`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
