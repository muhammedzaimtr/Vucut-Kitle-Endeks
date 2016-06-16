-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Haz 2016, 09:50:30
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `muhammed_VucutKitleEndeks`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Kullanici`
--

CREATE TABLE `Kullanici` (
  `KulaniciNo` int(11) NOT NULL,
  `KullaniciIp` int(11) NOT NULL,
  `KullaniciKitleEndesk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `Kullanici`
--

INSERT INTO `Kullanici` (`KulaniciNo`, `KullaniciIp`, `KullaniciKitleEndesk`) VALUES
(1, 0, 34);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Kullanici`
--
ALTER TABLE `Kullanici`
  ADD PRIMARY KEY (`KulaniciNo`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `Kullanici`
--
ALTER TABLE `Kullanici`
  MODIFY `KulaniciNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
