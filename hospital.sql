-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 14 May 2019, 11:02:49
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hospital`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no` bigint(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `no`, `department`, `date`) VALUES
('cahit', 'yunus celik', 2265946578, 'aefafawfa', NULL),
('cahit', 'yunus celik', 2265946578, 'aefafawfa', NULL),
('melek', 'yunus celik', 5668946354, 'adrgehrthr', NULL),
('melek', 'yunus celik', 5668946354, 'adrgehrthr', NULL),
('56497845622', 'cemil ozaslan', 5559997846, 'Dermatology', '32.85.2201'),
('5', 'sdsf', 234, 'mehmet', '234'),
('2', 'alkl', 34635, 'dermatology', '4232'),
('2', 'sd', 234, 'Urology - mehmet', '234'),
('3', 'sesrg', 234, 'Gynaecology', '53'),
('1', 'sgd', 2345, 'Urology', '43'),
('7', 'edsgf', 5, 'dermatology - ahmet', '546'),
('123', 'ali metin', 1325781234, 'Dermatology - John Locke', '12.03.2916'),
('54', 'ali', 345, 'Gynaecology - Percival Cox', '2452');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `level` char(20) DEFAULT NULL,
  `department` char(20) DEFAULT NULL,
  `wage` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `age`, `level`, `department`, `wage`) VALUES
(2, 'Jack Alain', 64, 'assistant', 'Urology', 5000),
(4, 'Ali Oktay', 56, 'Assistant Professor', 'Brain', 6000),
(5, 'YÃ¼cel SaygÄ±n', 45, 'Professor', 'Surgery', 7000),
(3, 'Percival Cox', 38, 'Professor', 'Gynaecology', 6300),
(1, 'John Locke', 33, 'professor', 'Dermatology', 3400);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
