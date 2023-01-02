-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 04:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alatmusikjasa`
--

CREATE TABLE `alatmusikjasa` (
  `id_alat_musik_jasa` varchar(225) NOT NULL,
  `HargaSewa` int(12) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alatmusikjasa`
--

INSERT INTO `alatmusikjasa` (`id_alat_musik_jasa`, `HargaSewa`, `Nama`, `Brand`, `Gambar`, `kode_type`, `Status`) VALUES
('', 35000, 'Ukulele', 'Yamaha', 'ukulele.jpeg', '', '1'),
('13', 150000, 'Piano', 'Yamaha', 'piano.jpeg', 'PNO', '1'),
('15', 125000, 'Drum', 'Gibson', 'drum.jpeg', 'DRM', '1'),
('16', 50000, 'Bass', 'Fender', 'bass.jpeg', 'BSS', '0');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_alat_musik_jasa` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL,
  `TglAwalSewa` date NOT NULL,
  `TglAkhirSewa` date NOT NULL,
  `TotalHarga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_alat_musik_jasa`, `id_user`, `TglAwalSewa`, `TglAkhirSewa`, `TotalHarga`) VALUES
(1, '6, 7, 8', 1, '2022-12-20', '2022-12-27', 100000),
(2, '6, 8', 6, '2022-12-31', '2023-01-02', 165000),
(3, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(4, '6, 8', 8, '0000-00-00', '0000-00-00', 0),
(46, '4, 6', 8, '2022-12-31', '2023-01-05', 275000),
(47, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(48, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(49, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(50, '4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(51, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(52, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(53, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(54, '1, 4, 6', 8, '0000-00-00', '0000-00-00', 0),
(55, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(56, '1, 4, 6, 8', 8, '0000-00-00', '0000-00-00', 0),
(58, '1, 6', 8, '0000-00-00', '0000-00-00', 0),
(59, '1', 8, '0000-00-00', '0000-00-00', 0),
(60, '4', 8, '0000-00-00', '0000-00-00', 0),
(61, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(62, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(63, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(64, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(65, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(66, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(67, '1, 4', 8, '0000-00-00', '0000-00-00', 0),
(68, '4', 8, '0000-00-00', '0000-00-00', 0),
(69, '1, 4, 6', 8, '0000-00-00', '0000-00-00', 0),
(70, '4, 6', 8, '0000-00-00', '0000-00-00', 0),
(71, '1, 4, 8', 8, '0000-00-00', '0000-00-00', 0),
(72, '6', 8, '2022-12-31', '2023-01-05', 125000),
(73, '4', 8, '2023-01-02', '2023-01-17', 0),
(74, '1, 4', 8, '2023-01-04', '2023-01-07', 300000),
(75, '1', 6, '2022-12-31', '2023-01-04', 600000),
(78, '1, 4, 6, 8', 6, '0000-00-00', '0000-00-00', 0),
(80, '1, 4, 8', 6, '0000-00-00', '0000-00-00', 0),
(81, '1, 8', 6, '2023-01-01', '2023-01-04', 570000),
(82, '1', 6, '2023-01-20', '2023-01-26', 900000),
(83, '1, 6, 8', 6, '2023-02-03', '2023-02-06', 945000),
(84, '4, 6', 6, '2023-02-02', '2023-02-05', 825000),
(86, '12, 13', 6, '0000-00-00', '0000-00-00', 0),
(87, '13, 15', 6, '2023-01-03', '2023-01-05', 550000),
(88, '13', 10, '2023-01-02', '2023-01-05', 450000),
(89, '13, 15', 10, '2023-01-04', '2023-01-07', 825000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `TotalHarga` int(12) NOT NULL,
  `TglMulaiSewa` date NOT NULL,
  `TglAkhirSewa` date NOT NULL,
  `DurasiSewa` int(5) NOT NULL,
  `BuktiBayar` varchar(255) NOT NULL,
  `status_transaksi` varchar(55) NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_keranjang`, `TotalHarga`, `TglMulaiSewa`, `TglAkhirSewa`, `DurasiSewa`, `BuktiBayar`, `status_transaksi`, `status_pembayaran`) VALUES
(1, 1, 1, 100000, '2022-12-20', '2022-12-27', 7, 'bukti-1.jpg', 'Finished', 0),
(6, 8, 30, 165000, '0000-00-00', '0000-00-00', 0, 'belum ada', 'Renting', 0),
(7, 8, 32, 190000, '0000-00-00', '0000-00-00', 0, 'belum ada', 'Renting', 0),
(8, 8, 46, 275000, '2022-12-31', '2023-01-05', 0, 'belum ada', 'Renting', 0),
(12, 6, 75, 600000, '2022-12-31', '2023-01-04', 4, 'garytheSnail.jpg', 'Renting', 1),
(17, 6, 87, 550000, '2023-01-03', '2023-01-05', 2, 'belum ada', 'Renting', 0),
(19, 10, 89, 825000, '2023-01-04', '2023-01-07', 3, 'Contoh-Bukti-Transfer-BRI-Asli-atau-Palsu.jpg', 'Finished', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'GTR', 'GITAR'),
(2, 'PNO', 'PIANO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NoTelp` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `Username`, `Password`, `Email`, `NoTelp`, `Alamat`, `role_id`) VALUES
(1, 'Anggun Lenteraningati', 'anggunlentera', 'inipasswordnyaanggun', 'anggun@gmail.com', '081299999999', 'karawang', 2),
(2, 'Lim Jaebeom', 'jayb', 'inipasswordnyajb', 'jayb@gmail.com', '081288888888', 'Korea', 2),
(3, 'user1Update', 'username1Update', 'username1Update', 'user1Update@gmail.com', '08777777777777', 'melatiUpdate', 2),
(6, 'cust1', 'cust1', 'cust1', 'cust@g.co', '0885454564564', 'home3', 2),
(7, 'admin', 'admin', 'admin', 'admin_OnMusic@gmail.com', '082123546777', 'Unsika', 1),
(8, 'cust2', 'cust2', 'cust2', 'cust2@g.co', '08123123123', 'home2', 2),
(9, 'katon', 'katonwhy', 'katon', 'katon@gmail.com', '08123123123', 'Bekasi', 0),
(10, 'Wahyu', 'Wahyu', 'Wahyu', 'Wahyu@gmail.com', '081232313233', 'Bekasi, Rumah no 12 blok 3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alatmusikjasa`
--
ALTER TABLE `alatmusikjasa`
  ADD PRIMARY KEY (`id_alat_musik_jasa`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
