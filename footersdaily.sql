-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 04:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footersdaily`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'bianqq1', 'yudaqq123'),
(2, 'bianqq', 'yudaqq123'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id_sepatu` int(11) NOT NULL,
  `image_sepatu` varchar(240) NOT NULL,
  `merk_sepatu` varchar(40) NOT NULL,
  `nama_sepatu` varchar(240) NOT NULL,
  `harga_sepatu` varchar(11) NOT NULL,
  `deskripsi_sepatu` varchar(360) NOT NULL,
  `size_27` varchar(2) NOT NULL,
  `size_28` varchar(2) NOT NULL,
  `size_29` varchar(2) NOT NULL,
  `size_30` varchar(2) NOT NULL,
  `size_31` varchar(2) NOT NULL,
  `size_32` varchar(2) NOT NULL,
  `size_33` varchar(2) NOT NULL,
  `size_34` varchar(2) NOT NULL,
  `stock_sepatu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id_sepatu`, `image_sepatu`, `merk_sepatu`, `nama_sepatu`, `harga_sepatu`, `deskripsi_sepatu`, `size_27`, `size_28`, `size_29`, `size_30`, `size_31`, `size_32`, `size_33`, `size_34`, `stock_sepatu`) VALUES
(20, '01-CROCS-FFSSDCCRA-CCR207937001-Black.jpg', 'CROCS', 'CROCS ECHO UNISEX CLOG - BLACK', '900.000', 'Incredibly light and easy to wear Â  Fully molded Croslite upper and foundation Â  Water-friendly and buoyant; weighs only ounces Â  Ventilation ports add breathability and help shed water Â  Easy to clean and quick to dry Â  Pivotable turbo hee', '27', '28', '29', '30', '31', '32', '33', '34', 8),
(21, '01-CROCS-FFSSDCCRA-CCR209445410-Blue.jpg', 'CROCS', 'CROCS X NARUTO CLASSIC UNISEX CLOG - NAVY\r\n', '700.000', 'Stealing hearts from fans and jutsus from enemies, Kakashi The Copy Ninja is now in clog form with some of his most iconic belongings from the classic anime, NARUTO', '27', '28', '', '', '', '', '', '', 4),
(22, '01-CROCS-FFSSDCCRA-CCR2094614GX-Blue.jpg', 'CROCS', 'CROCS X TOY STORY WOODY CLASSIC KIDS CLOG - BLUE JEAN CROCS X TOY STORY WOODY CLASSIC KIDS CLOG', '1.800.000', 'Shake out the snake in your boot, Sheriff Woody makes his debut as a Classic Clog! This exclusive design features a wrapped print reminiscent of Woody’s iconic plaid shirt and cow print vest, topped with four exclusive Jibbitz™ charms. These clogs also fea Info lebih lanjut\r\n', '27', '28', '29', '30', '', '', '', '', 7),
(23, '01-CROCS-FFSSDCCRA-CCR2089882Y3-Cream.jpg', 'CROCS', 'MEGA CRUSH COLOR DIP UNISEX CLOG - BONE/MULTI', '1.329.300', 'Unique 2.4 inch/6.1cm height, measured from floor to heel rest Updated, enhanced rubber tread Textured detailing around the heel, toe box and collar Customizable with Jibbitz charms Iconic Crocs Comfort: Lightweight. Flexible. 360-degree comfor', '27', '28', '', '', '', '', '33', '34', 28),
(24, '01-NIKE-FFSSBNIK5-NIKDA6364101-White.jpg', 'NIKE', 'BLAZER LOW \'77 VNTG MEN\'S BASKETBALL SHOES - WHITE', '1.199.000', 'raised by the streets for its classic simplicity and comfort, the Nike Blazer Low \'77 Vintage returns with its low-profile style and heritage b-ball looks. Featuring luscious suede details, a retro Swoosh design and a super-soft collar, it\'s the must-have wardrobe staple that will take you ever', '27', '28', '29', '30', '', '', '', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `status`) VALUES
(1, 'bianqq', 'alifabian221@gmail.com', 'yudaqq123', 'admin'),
(10, 'rizkakebo', 'eizkaatut@gmail.com', '12345678', 'user'),
(16, 'bian', 'yudaqq123@gmail.com', 'yudaqq123', 'admin'),
(20, 'rizkaaysyifa', 'rizkamylove@gmail.com', 'yudaqq123', 'user'),
(21, '00', 'yudaqq08677@gmail.com', 'yud', 'user'),
(22, 'woodie', 'dw@gmail.com', 'woodie', 'user'),
(23, 'muhammad.aldi_21', 'aldiking009@gmail.com', 'aldi1231', 'user'),
(24, 'yudaqq', 'yudaqq22@gmail.com', 'yudaqq123', 'user'),
(25, 'jagung1', 'polish@gmail.com', 'yudaqq123', 'user'),
(26, '000000', '0000@gmail.com', 'yudaqq123', 'user'),
(27, 'bianqq0', 'bianqq0@gmail.com', 'yudaqq123', 'user'),
(28, 'bianqq1', 'admin@gmail.com', 'yudaqq123', 'user'),
(29, 'bianqq2', 'poll@gmail.com', 'yudaqq123', 'user'),
(30, 'senseiadit', 'sensei@gmail.com', 'yudaqq123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id_sepatu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id_sepatu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
