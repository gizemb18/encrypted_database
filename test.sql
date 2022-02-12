-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Şub 2022, 18:54:19
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `1ee3b7c`
--

CREATE TABLE `1ee3b7c` (
  `24d` varchar(255) NOT NULL,
  `f71dbbaace` varchar(255) NOT NULL,
  `655ce636d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `1ee3b7c`
--

INSERT INTO `1ee3b7c` (`24d`, `f71dbbaace`, `655ce636d`) VALUES
('1', 'a6da57', '536d2b8443'),
('2', '29ead55793241', '844218c84294c6');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `1ee3b7c`
--
ALTER TABLE `1ee3b7c`
  ADD PRIMARY KEY (`24d`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
