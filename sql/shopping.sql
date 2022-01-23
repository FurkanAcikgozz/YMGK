-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Oca 2022, 12:04:54
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `shopping`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `urunAdi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `trFiyat` float(10,2) NOT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `abdFiyat` float(10,2) NOT NULL,
  `almanyaFiyat` float(10,2) NOT NULL,
  `cinFiyat` float(10,2) NOT NULL,
  `ingiltereFiyat` float(10,2) NOT NULL,
  `japonyaFiyat` float(10,2) NOT NULL,
  `rusyaFiyat` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `urunAdi`, `detay`, `trFiyat`, `img_url`, `abdFiyat`, `almanyaFiyat`, `cinFiyat`, `ingiltereFiyat`, `japonyaFiyat`, `rusyaFiyat`) VALUES
(1, 'Ev Kirası', 'Ortalama olarak hesaplanan fiyattır.', 1750.00, 'ev.jpg', 1937.00, 1375.00, 0.00, 0.00, 0.00, 0.00),
(3, 'Toplu Taşıma', '1 aylık belirlenen fiyattır.', 150.00, 'toplutasima.jpg', 65.08, 72.00, 0.00, 0.00, 0.00, 0.00),
(4, 'Mutfak Masrafları', 'Orta gelirli bir ailenin, ortalama hesaplanan fiyatıdır.', 945.00, 'mutfak.jpg', 400.00, 300.00, 0.00, 0.00, 0.00, 0.00),
(5, 'Ev Faturaları', '80 m2’lik bir dairenin aylık su, doğalgaz ve elektrik faturası', 605.00, 'fatura.jpg', 161.00, 219.33, 0.00, 0.00, 0.00, 0.00),
(6, 'Süt', '1 litre', 9.00, 'sut.jpg', 0.87, 0.71, 0.00, 0.00, 0.00, 0.00),
(7, 'Peynir', '1 Kilo', 45.00, 'peynir.jpg', 10.00, 8.97, 0.00, 0.00, 0.00, 0.00),
(8, 'Soğan', '1 kilogram', 7.00, 'sogan.jpg', 2.67, 1.13, 0.00, 0.00, 0.00, 0.00),
(9, 'Domates', '1 Kilogram', 6.00, 'domates.jpg', 4.21, 2.48, 0.00, 0.00, 0.00, 0.00),
(10, 'Muz', '1 Kilogram', 17.75, 'muz.jpg', 1.58, 1.55, 0.00, 0.00, 0.00, 0.00),
(11, 'Su', '1.5 Litre', 2.00, 'su.jpg', 1.58, 0.34, 0.00, 0.00, 0.00, 0.00),
(12, 'Spor ayakkabı', 'Ortalama Fiyat', 300.00, 'spor.jpg', 75.00, 80.00, 0.00, 0.00, 0.00, 0.00),
(13, 'Benzin', '1 Litre benzin fiyatıdır.', 7.99, 'benzin.jpg', 0.94, 1.36, 0.00, 0.00, 0.00, 0.00),
(14, 'Spor Salonu', 'Aylık olarak ortalama belirlenen fiyattır.', 223.00, 'sporsalonu.jpg', 38.00, 29.08, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products2`
--

CREATE TABLE `products2` (
  `id` int(11) NOT NULL,
  `urunAdi` varbinary(255) NOT NULL,
  `detay` varbinary(500) NOT NULL,
  `trFiyat` varbinary(100) NOT NULL,
  `img_url` varbinary(255) NOT NULL,
  `abdFiyat` varbinary(100) NOT NULL,
  `almanyaFiyat` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products2`
--

INSERT INTO `products2` (`id`, `urunAdi`, `detay`, `trFiyat`, `img_url`, `abdFiyat`, `almanyaFiyat`) VALUES
(2, 0x69becdf2db96c8b2f86340fd59940a05, 0xb99e199b1b8c7add64f10158a88c2e53e152ce4f26f2e6ec3823ecfd6151026e, 0x851f13d742fe3b674733abe9df5e3098, 0x746f706c75746173696d612e6a7067, 0x23ae8a8ad2e29283fc75e3e0688bcca4, 0x07d44f3f71e11f19b6aa8d253e769426),
(3, 0xb814cee7a214e3be40b2ac67052879eb2364bf60fe0d721069646bd3d4185c3c, 0xdae3ccd2a5ff78c741bf92e99eea64c10283d1dc27408570079951eeefafb6c199c2292116b471a928d309ca79434982312e9483ed00eb5b491d95c1cebd1be0, 0xf7163676ef92761e87989605bc46637a, 0x6d757466616b2e6a7067, 0x3bb167d4b4c359c9b2cc63545c1c9e75, 0x23a0f6218a86a805e6995a8dce4991f4),
(4, 0xe2b0ef9c7d8159aa13d660aa6ec72e8a, 0xcbca52bd943efef6c87a2e69a2f4e81465b12d8f6fa0e781cf1877b20f71ba65a564d3fdf4a101ba39ffb94176c5b69c3a1384603d32eda0883e6fbb272c63bc57cbf2d32a78a2da18de9e08ce0b07e7, 0x1fd8eefc5442ccd5c950923b3d461311, 0x6661747572612e6a7067, 0x21b812f2bf7de23c46e394007ef0ef66, 0xafca3612082e9e7c988d08ced71c045b),
(5, 0xe3585aab580be407619e433724d2eefd, 0xb3fe23aad2997fa6262b322ffe05be73, 0x03452fd6da7645504c5ee66f8a554b58, 0x7375742e6a7067, 0xc6257030ae902b50aa1d4abf89c7750a, 0xb2de6506dec43b66b8d5ae705c721e65),
(6, 0x8c3e7e8c597bd4857f24c345e5eadf56, 0x277ca9eb9a09b40ddba4648bc6ab72c6, 0x4779e0288653e4ecd1327a06e28e3a02, 0x7065796e69722e6a7067, 0xe1a6c62a7d0a08082708b5f2d3870ed0, 0x1b7b3a6abf045a009eba0730d6429f99),
(7, 0x7a552b77bedd4888a340ccd300afc4b0, 0xf69d579e2270fd1ddbd951d05bf52837, 0xd38e8eff9296df10e3d6bd6858e27e1d, 0x736f67616e2e6a7067, 0x1f041059bc94fc635a5aa3cb1db99953, 0xf49eae46b3d435d821d0464b4d6e4587),
(8, 0x746786bef0a07d48bdc7be0590b60985, 0xf69d579e2270fd1ddbd951d05bf52837, 0x342088730d9eff041f574f013bd5b702, 0x646f6d617465732e6a7067, 0x28e613fe4af2c587d8cb8e70faf8310f, 0x83de02060a903b11112d9de602c49454),
(9, 0x875056207f8250fccd3ccc19fc4f3a52, 0xf69d579e2270fd1ddbd951d05bf52837, 0x2c2f345a2bc68a66bd1ea22219da9d53, 0x6d757a2e6a7067, 0x8d50ad4e7c90d37dc0be4b7f8119c7d5, 0xd9cd9981eacb07896c20d3f4b85b4f9a),
(10, 0x245416cfedf8b151e7e1a90d53b11fae, 0xcae2a82e3fbcc77dc283960bed7e769d, 0x1e2795369db67d2116683a145ac62cbb, 0x73752e6a7067, 0x8d50ad4e7c90d37dc0be4b7f8119c7d5, 0xaa54bafa4f0f408c8d04cbad2e69bc83),
(11, 0xd12ae0b96fdf03076a194d590cbbcbb0, 0x3f48d19d21f746a2b2293953b0921d40, 0x23a0f6218a86a805e6995a8dce4991f4, 0x73706f722e6a7067, 0x43a29d72e286943b0de033b4ac2d4691, 0x926f25fc0e179508105429713e09ed57),
(12, 0xb7ae83a25043a67ee301683abd33634b, 0xd8479b755ac21fc91ff60da12c7a960313a282118e56f0e139d7f05696e0570a, 0x437fb61c347b158ef09c62587cf8a362, 0x62656e7a696e2e6a7067, 0x3751b00ceea8d34980d2a547f050a7c6, 0x906b51d33c177c9db26299af7c8b0be2),
(13, 0xf12e73a0e7d33750d835a3906f7cc45d, 0xf12e73a0e7d33750d835a3906f7cc45d, 0xbcc56ea5cb1992470227a62153483656, 0x73706f7273616c6f6e752e6a7067, 0x2864202a4deeb17f32730302c8a9bab4, 0x1e8dbc6154e2da32dc94c997a07ce56d);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
