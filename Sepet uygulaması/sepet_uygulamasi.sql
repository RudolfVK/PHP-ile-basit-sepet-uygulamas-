-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2023 at 03:16 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepet_uygulamasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(30) NOT NULL,
  `urun_aciklama` varchar(300) NOT NULL,
  `urun_fiyat` varchar(10) NOT NULL,
  `sepet` varchar(6) NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `urun_ad`, `urun_aciklama`, `urun_fiyat`, `sepet`) VALUES
(1, 'Telefon', 'Yeni nesil cep telefonu', '8800', 'FALSE'),
(2, 'İşlemci', '8 Çekirdekli işlemci', '3000', 'FALSE'),
(3, 'Televizyon', '4K Tv', '9000', 'FALSE'),
(4, 'İşlemci', '2 Çekirdekli işlemci', '500', 'FALSE'),
(5, 'İşlemci', '4 Çekirdekli işlemci', '100', 'FALSE'),
(6, 'Ram', '2 GB DDR3', '250', 'FALSE'),
(7, 'Ram', '4 GB DDR3', '500', 'FALSE'),
(8, 'Ram', '8 GB DDR3', '700', 'FALSE'),
(9, 'Ram', '16 GB DDR3', '1200', 'FALSE'),
(10, 'PSU', '600 Watt powersuply', '1400', 'FALSE'),
(11, 'PSU', '800 Watt powersuply', '2000', 'FALSE'),
(12, 'PSU', '500 Watt powersuply', '1000', 'FALSE'),
(13, 'PSU', '300 Watt powersuply', '700', 'FALSE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
