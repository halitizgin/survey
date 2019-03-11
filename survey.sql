-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Mar 2019, 22:30:34
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `survey`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `options` text NOT NULL COMMENT '; ile ayrılır',
  `hits` text NOT NULL COMMENT '; ile ayrılır'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `poll`
--

INSERT INTO `poll` (`id`, `question`, `options`, `hits`) VALUES
(1, 'Hangi dil daha iyi?', 'PHP;C#;JS;JAVA', '5;2;1;3'),
(2, 'Hangi araba daha hızlı?', 'Bugatti;BMW;Mercedes;Mitsubishi', '3;1;1;1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
