-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `Title`, `Description`, `Link`) VALUES
(1, 'Pengembangan Strategi Desain Kemasan dan Branding Produk UMKM', 'Webinar yang diadakan oleh Kementerian Koperasi dan Usaha Kecil dan Menengah tentang Desain Kemasan dan Branding Produk UMKM', 'webinar3.html'),
(2, 'Strategi Mempertahankan Bisnis untuk UMKM di tengah Pandemi Covid-19', 'Webinar  yanh diselenggarakan SMB Digital Solution tentang survival bagi UMKM di tengah pandemi', 'webinar2.html'),
(3, 'Strategi Pengembangan UMKM dan Urgensi Digitalisasi Informasi Keuangan', 'Institut Bisnis & Informatika Kesatuan mengundang Menteri Koperasi dan UKM RI dalam webinar yang membahas strategi pengembangan umkm dalam digitalisasi', 'webinar1.html'),
(4, 'Pemanfaatan Internet Sebagai Wadah Pengembangan UMKM di Masa Pandemi Covid-19', 'Ditjen IKP Kominfo mengadakan webinar yang mendorong penggunaan internet oleh UMKM di tengah pandemi', 'webinar4.html'),
(5, 'Starting a Small Business Pt.1', 'Apa saja yang pengusaha sukses punya tetapi yang lain tidak', 'tutorial1_1.html'),
(6, 'Starting a Small Business Pt.2', 'Cara mengetahui jenis pelanggan lalu membuat strategi marketing', 'tutorial1_2.html'),
(7, 'Starting a Small Business Pt.3', 'Cara menghadapi kompetisi pasar dan membuat strategi bersaing yang baik dalam pemasaran', 'tutorial1_3.html'),
(8, 'Building a Business, Lecture 1', 'Apa definisi dari pengusaha dan haruskah kita menjadi pengusaha?', 'tutorial2_1.html'),
(9, 'Building a Business, Lecture 2', 'Alasan mendasar untuk membuat usaha', 'tutorial2_2.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
