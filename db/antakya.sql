-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Oca 2020, 18:59:08
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `antakya`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `admin_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_rank` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_username`, `admin_mail`, `admin_pass`, `admin_rank`) VALUES
(1, 'demo', 'demo@demo.demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `control`
--

CREATE TABLE `control` (
  `c_id` int(11) NOT NULL,
  `c_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_logo_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_adres_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `c_title` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `c_title_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_keywords` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `c_email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_footer_social` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_footer_social_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_atif` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_atif_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `control`
--

INSERT INTO `control` (`c_id`, `c_logo`, `c_logo_en`, `c_twitter`, `c_facebook`, `c_instagram`, `c_adres`, `c_adres_en`, `c_telefon`, `c_title`, `c_title_en`, `c_keywords`, `c_email`, `c_footer_social`, `c_footer_social_en`, `c_atif`, `c_atif_en`, `c_description`) VALUES
(0, 'assets\\img\\static\\logo.png', 'assets\\img\\static\\logo-en.png', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'Mustafa Kemal Üniversitesi Antioch/ HATAY', 'Mustafa Kemal University Antakya / HATAY', '244 888 3255', 'Antakya Kültürel Mirası Koruma Derneği  ', 'Antioch Cultural Heritage', 'antakya,kültürel,miras,mustafa kemal üniversitesi', 'test@mail.com', 'Sosyal Medya Hesaplarımız', 'Social Media Accounts', 'Copyright © 2019. Tüm Hakları Saklıdır. ', 'Copyright © 2019. All Rights Reserved.', 'Antakya Kültürel Mirası Koruma Derneği MUSTAFA KEMAL ÜNİVERSİTESİ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_title_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_description_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sq` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_title_en`, `slider_description`, `slider_description_en`, `slider_link`, `slider_img_url`, `slider_sq`) VALUES
(29, 'TEST EDELİM', 'TEST SLIDER', 'Bu Slider Tamamen Yönetim Panelinden Yüklenmiştir', 'This Slider Is Completely Installed From The Admin Panel', 'localhost/kumid/admin', 'assets/uploads/slider/29759316522067228021beta-lyrae-247225.jpg', ''),
(30, 'SLASH', '', 'Best Guitar Player in The Word ', '', 'admin', 'assets/uploads/slider/25135249513064230627wp2645630-slash-wallpaper-hd.jpg', '0'),
(34, 'BEN KEMAL', 'I AM KEMAL', 'Test Ediyorum', 'Trying', 'https://www.instagram.com/yavuzz.imer/', 'assets/uploads/slider/207183071426191305061.jpg', '0');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
