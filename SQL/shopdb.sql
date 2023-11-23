-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `size` varchar(20) NOT NULL,
  `total_price` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `size`, `total_price`, `order_date`, `status`) VALUES
(70, 21, 1, 1, '', 720000, '2023-11-13 02:24:38', 'Chờ thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `user_id` varchar(3) NOT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`Id`, `user_id`, `fullName`, `email`, `phoneNumber`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', 'PATTAS TOMO - LOW TOP - BLARNEY (5), Basas Bumper Gum EXT NE - High Top (2)', 4780000),
(2, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', '<br />\r\n<b>Warning</b>:  Undefined variable $allItems in <b>C:\\xampp\\htdocs\\SoftwareTechnologyBigProject\\PHP\\pay.php</b> on line <b>201</b><br />\r\n', 0),
(3, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'netbanking', 'PATTAS TOMO - LOW TOP - BLARNEY (3)', 2160000),
(4, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cards', 'PATTAS TOMO - LOW TOP - BLARNEY (5)', 3600000),
(5, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', 'PATTAS TOMO - LOW TOP - BLARNEY (2)', 1440000),
(6, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', 'PATTAS TOMO - LOW TOP - BLARNEY (1)', 720000),
(7, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', 'PATTAS TOMO - LOW TOP - BLARNEY (1)', 720000),
(8, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'cod', 'PATTAS TOMO - LOW TOP - BLARNEY (4)', 2880000),
(9, '9', NULL, 'Quanghe2003@gmail.com', NULL, 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội', 'netbanking', 'PATTAS TOMO - LOW TOP - BLARNEY (3), Basas Bumper Gum EXT NE - High Top (3), Track 6 2.Blues - Low Top (4), VINTAS JAZICO - LOW TOP - ROYAL WHITE (1)', 9410000),
(10, '21', NULL, 'dodanghoana1@gmail.com', NULL, 'chưa có', 'netbanking', 'TRACK 6 I.S.E.E - PURE WHITE/ICY BLUE (4)', 5960000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_state` varchar(30) NOT NULL,
  `product_design` varchar(5) NOT NULL,
  `product_sex` varchar(5) NOT NULL,
  `product_type` varchar(5) NOT NULL,
  `product_material` varchar(5) NOT NULL,
  `product_color` varchar(20) DEFAULT NULL,
  `product_price` decimal(10,0) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_state`, `product_design`, `product_sex`, `product_type`, `product_material`, `product_color`, `product_price`, `product_description`, `product_image`, `product_link`) VALUES
(1, 'New Arrival', 'LT', 'U', 'P', 'CV', 'GREEN', 720000, 'PATTAS TOMO - LOW TOP - BLARNEY', '0000_NALTMBCV/0000_NALTMBVC_02.jpeg', '0000_NALTMBCV.php'),
(2, 'New Arrival', 'HT', 'U', 'B', 'CV', 'WHITE', 590000, 'Basas Bumper Gum EXT NE - High Top', '0001_NAHTUBCV/0001_NAHTUBCV_02.jpg', '0001_NAHTUBCV.php'),
(3, 'New Arrival', 'LT', 'U', 'T', 'CV', 'BLUE', 1190000, 'Track 6 2.Blues - Low Top', '0002_NALTUBCV/0002_NALTUBCV_02.jpeg', '0002_NALTUBCV.php'),
(4, 'New Arrival', 'LT', 'U', 'V', 'CV', 'WHITE', 720000, 'VINTAS JAZICO - LOW TOP - ROYAL WHITE', '0003_NALTUBCV/0003_NALTUBCV_02.jpeg', '0003_NALTUBCV.php'),
(5, 'New Arrival', 'LT', 'U', 'P', 'PT', 'BLUE', 1290000, 'Track 6 2.Blues - Low Top', '0004_NALTUPPT/0004_NALTUPPT_02.jpeg', '0004_NALTUPPT.php'),
(6, 'New Arrival', 'HT', 'U', 'U', 'CT', 'BROWN', 650000, 'Urbas Corluray Mix - High Top', '0005_NAHTUVCT/0005_NAHTUVCT_02.jpeg', '0005_NAHTUVCT.php'),
(7, 'New Arrival', 'LT', 'U', 'U', 'CT', 'BROWN', 610000, 'Urbas Corluray Mix -  Low Top', '0006_NALTUVCT/0006_NALTUVCT_02.jpeg', '0006_NALTUVCT.php'),
(9, 'New Arrival', 'HT', 'N', 'V', 'CT', 'WHITE', 780000, 'VINTAS JAZICO - HIGH TOP - ROYAL WHITE', '0007_NAHTNVCT/0007_NAHTNVCT_02.jpeg', '0007_NAHTNVCT.php'),
(10, 'New Arrival', 'LT', 'N', 'V', 'CT', 'WHITE', 720000, 'VINTAS JAZICO - LOW TOP - ROYAL WHITE', '0008_NALTNVCT/0008_NALTNVCT_02.jpeg', '0008_NALTNVCT.php'),
(11, 'Limited Edition', 'LT', 'U', 'T', 'PT', 'WHITE', 1490000, 'TRACK 6 I.S.E.E - PURE WHITE/ICY BLUE', '0009_LELTUVPT/0009_LELTUVPT_02.jpg', '0009_LELTUVPT.php'),
(12, 'New Arrival', 'LT', 'U', 'T', 'CV', 'WHITE', 1190000, 'TRACK 6 JAZICO - LOW TOP - ROYAL WHITE', '0010_NALTUBCV/0010_NALTUBCV_02.jpeg', '0010_NALTUBCV.php\r\n'),
(13, 'New Arrival', 'LT', 'U', 'V', 'PT', 'BLUE', 680000, 'VINTAS SODA POP - LOW TOP - AMPARO BLUE', '0011_NALTUBPT/0011_NALTUBPT_02.jpg', '0011_NALTUBPT.php'),
(14, 'New Arrival', 'LT', 'U', 'V', 'PT', 'GREEN', 680000, 'VINTAS SODA POP - LOW TOP - EMERALD', '0012_NALTUBPT/0012_NALTUBPT_02.jpg', '0012_NALTUBPT.php'),
(15, 'New Arrival', 'HT', 'U', 'V', 'PT', 'PINK', 720000, 'VINTAS SODA POP - HIGH TOP - RED VIOLET', '0013_NAHTUBPT/0013_NAHTUBPT_02.jpg', '0013_NAHTUBPT.php'),
(16, 'New Arrival', 'LT', 'U', 'V', 'CV', 'ORANGE', 720000, '\r\nVINTAS LANDFORMS - LOW TOP - MARMALADE', '0014_NALTUVCV/0014_NALTUVCV_02.jpg', '0014_NALTUVCV.php'),
(17, 'New Arrival', 'LT', 'N', 'V', 'CV', 'BROWN', 720000, 'VINTAS LANDFORMS - LOW TOP - RAIN DRUM', '0015_NALTNVCV/0015_NALTNVCV_02.jpg', '0015_NALTNVCV.php'),
(18, 'Limited Edition', 'LT', 'U', 'T', 'DA', 'BLACK', 1090000, 'TRACK 6 UNNAMED NO.1 IN C MINOR - LOW TOP - BLACK', '0016_LELTUVDA/0016_LELTUVDA_02.jpg', '0016_LELTUVDA.php'),
(19, 'Limited Edition', 'HT', 'U', 'P', 'CV', 'YELLOW', 950000, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/SUNRISE 50TH', '0017_LEHTUVCV/0017_LEHTUVCV_02.jpg', '0017_LEHTUVCV.php'),
(20, 'Limited Edition', 'LT', 'U', 'P', 'CV', 'WHITE', 890000, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/CORYDALIS 50TH', '00018_LELTUVCV/00018_LELTUVCV_02.jpg\r\n', '00018_LELTUVCV.php'),
(21, 'Online Only', 'LT', 'U', 'U', 'DA', 'RED', 580000, 'URBAS BLOODY - LOW TOP - HAUTE RED', '0019_OLLTUUDA/0019_OLLTUUDA_02.jpg', '0019_OLLTUUDA.php'),
(22, 'Sale Off', 'LT', 'U', 'V', 'DA', 'YELLOW', 580000, 'VINTAS MISTER - LOW TOP - NARCISSUEDE', '0020_SOLTUVDA/0020_SOLTUVDA_02.jpg', '0020_SOLTUVDA.php'),
(23, 'New Arrival', 'ML', 'N', 'U', 'CV', 'PURPLE', 580000, 'URBAS SC - MULE - FAIR ORCHID', '0021_NAMLNUCV/0021_NAMLNUCV_02.jpg', '0021_NAMLNUCV.php'),
(24, 'New Arrival', 'ML', 'N', 'U', 'CV', 'GREEN', 580000, 'URBAS SC - MULE - FOLIAGE', '0022_NAMLNUCV/0022_NAMLNUCV_02.jpg', '0022_NAMLNUCV.php'),
(25, 'New Arrival', 'ML', 'N', 'U', 'CV', 'YELLOW', 580000, 'URBAS SC - MULE - CORNSILK', '0023_NAMLNUCV/0023_NAMLNUCV_02.jpg', '0023_NAMLNUCV.php'),
(26, 'New Arrival', 'HT', 'N', 'U', 'CV', 'BLUE', 650000, 'URBAS SC - HIGH TOP - DUSTY BLUE', '0024_NAHTNUCV/0024_NAHTNUCV_02.jpg', '0024_NAHTNUCV.php'),
(27, 'New Arrival', 'HT', 'N', 'U', 'CV', 'YELLOW', 650000, 'URBAS SC - HIGH TOP - CORNSILK', '0025_NAHTNUCV/0025_NAHTNUCV_02.jpg', '0025_NAHTNUCV.php'),
(28, 'NA', 'HT', 'U', 'U', 'CV', 'PURPLE', 650000, 'URBAS SC - HIGH TOP - FAIR ORCHID\r\n', '0026_NAHTUUCV/0026_NAHTUUCV_02.jpg', '0026_NAHTUUCV.php'),
(29, 'New Arrival', 'HT', 'U', 'U', 'CV', 'GREEN', 650000, 'URBAS SC - HIGH TOP - FOLIAGE', '0027_NAHTUUCV/0027_NAHTUUCV_02.jpg', '0027_NAHTUUCV.php'),
(30, 'New Arrival', 'HT', 'N', 'U', 'CV', 'GREEN', 650000, 'URBAS SC - HIGH TOP - ALOE WASH', '0028_NAHTUUCV/0028_NAHTUUCV_02.jpg', '0028_NAHTUUCV.php'),
(31, 'New Arrival', 'LT', 'U', 'P', 'PT', 'WHITE', 720000, 'PATTAS LIVING JOURNEY - LOW TOP - VAPOROUS GRAY', '0029_NALTUPPT/0029_NALTUPPT_03.jpeg', '0029_NALTUPPT.php'),
(32, 'New Arrival', 'HT', 'U', 'P', 'PT', 'WHITE', 750000, 'PATTAS LIVING JOURNEY - HIGH TOP - VAPOROUS GRAY', '0030_NAHTUPPT/0030_NAHTUPPT_03.jpeg', '0030_NAHTUPPT.php'),
(33, 'NA', 'HT', 'M', 'P', 'PT', 'GREEN', 750000, 'PATTAS POLKA DOTS - HIGH TOP - JELLY BEAN', '0031_NAHTMPPT/0031_NAHTMPPT_02.jpg', '0031_NAHTMPPT.php'),
(34, 'New Arrival', 'LT', 'M', 'P', 'PT', 'BLACK', 720000, '\r\nPATTAS POLKA DOTS - LOW TOP - BLACK', '0032_NALTMPPT/0032_NALTMPPT_02.jpg', '0032_NALTMPPT.php'),
(35, 'New Arrival', 'LT', 'M', 'P', 'PT', 'ORANGE', 720000, 'PATTAS POLKA DOTS - LOW TOP - CORAL ROSE', '0033_NALTMPPT/0033_NALTMPPT_02.jpg', '0033_NALTMPPT.php'),
(36, 'New Arrival', 'LT', 'M', 'P', 'PT', 'BLUE', 720000, 'PATTAS POLKA DOTS - LOW TOP - TRUE BLUE', '0034_NALTMPPT/0034_NALTMPPT_02.jpg', '0034_NALTMPPT.php'),
(37, 'New Arrival', 'HT', 'M', 'P', 'PT', 'WHITE', 750000, 'PATTAS POLKA DOTS - HIGH TOP - OFFWHITE', '0035_NAHTMPPT/0035_NAHTMPPT_02.jpg', '0035_NAHTMPPT.php'),
(38, 'New Arrival', 'LT', 'M', 'U', 'PT', 'GREEN', 650000, 'URBAS IRRELEVANT NE - LOW TOP - STORM/A.GOLD', '0036_NALTMPPT/0036_NALTMPPT_02.jpg', '0036_NALTMPPT.php'),
(39, 'New Arrival', 'LT', 'M', 'U', 'PT', 'WHITE', 650000, 'URBAS IRRELEVANT NE - LOW TOP - ANTARCTICA/RED ORANGE', '0037_NALTMPPT/0037_NALTMPPT_02.jpg', '0037_NALTMPPT.php'),
(40, 'New Arrival', 'HT', 'M', 'V', 'PT', 'BROWN', 650000, 'VINTAS MISTER NE - HIGH TOP - CHOCOLATE BROWN', '0038_NAHTMPPT/0038_NAHTMPPT_02.jpg', '0038_NAHTMPPT.php'),
(41, 'New Arrival', 'HT', 'M', 'U', 'PT', 'WHITE', 720000, 'URBAS RETROSPECTIVE - MID TOP - POPULAR BLUE', '0039_NAHTMPPT/0039_NAHTMPPT_02.jpeg', '0039_NAHTMPPT.php'),
(42, 'New Arrival', 'LT', 'M', 'U', 'PT', 'BROWN', 650000, 'URBAS RETROSPECTIVE - LOW TOP - THE WOODS', '0040_NALTMPPT/0040_NALTMPPT_02.jpeg', '0040_NALTMPPT.php'),
(43, 'Sale Off', 'LT', 'M', 'U', 'PT', 'YELLOW', 650000, 'URBAS RETROSPECTIVE - LOW TOP - YELLOW SUBMARINE', '0041_SOLTMPPT/0041_SOLTMPPT_02.jpeg', '0041_SOLTMPPT.php'),
(44, 'Sale Off', 'LT', 'N', 'V', 'CV', 'GREEN', 690000, 'VINTAS AUNTER - LOW TOP - BOTANICAL GARDEN', '0042_SOLTNVCV/0042_SOLTNVCV_02.jpeg', '0042_SOLTNVCV.php'),
(45, 'Sale Off', 'LT', 'N', 'V', 'CV', 'WHITE', 690000, 'VINTAS AUNTER - LOW TOP - SOYBEAN', '0043_SOLTNVCV/0043_SOLTNVCV_02.jpeg', '0043_SOLTNVCV.php'),
(46, 'Sale Off', 'LT', 'N', 'V', 'CV', 'BLUE', 690000, 'VINTAS AUNTER - LOW TOP - DUSTY BLUE', '0044_SOLTNVCV/0044_SOLTNVCV_02.jpeg', '0044_SOLTNVCV.php'),
(47, 'Sale Off', 'LT', 'N', 'V', 'CV', 'WHITE', 720000, 'VINTAS MONOGUSO - LOW TOP - MOONBEAM/BLUE', '0045_SOLTNVCV/0045_SOLTNVCV_02.jpeg', '0045_SOLTNVCV.php'),
(48, 'Sale Off', 'LT', 'U', 'B', 'CV', 'BLACK', 580000, 'BASAS BUMPER GUM EXT NE - LOW TOP - BLACK/GUM', '0046_SOLTUVCV/0046_SOLTUVCV_02.jpg', '0046_SOLTUVCV.php'),
(49, 'Sale Off', 'HT', 'M', 'B', 'CV', 'BLACK', 650000, 'BASAS BUMPER GUM EXT NE - HIGH TOP - BLACK/GUM', '0047_SOHTMVCV/0047_SOHTMVCV_02.jpg', '0047_SOHTMVCV.php'),
(50, 'Sale Off', 'LT', 'U', 'V', 'CV', 'BROWN', 690000, 'VINTAS FLANNEL - LOW TOP - CEMENT', '0048_SOLTUVCV/0048_SOLTUVCV_02.jpg', '0048_SOLTUVCV.php'),
(51, 'Sale Off', 'LT', 'U', 'V', 'CV', 'BROWN', 690000, 'VINTAS FLANNEL - LOW TOP - CEMENT', '0049_SOLTUVCV/0049_SOLTUVCV_02.jpg', '0049_SOLTUVCV.php'),
(52, 'Sale Off', 'HT', 'M', 'V', 'CV', 'BROWN', 720000, 'VINTAS FLANNEL - HIGH TOP - CEMENT', '0050_SOHTMVCV/0050_SOHTMVCV_02.jpg', '0050_SOHTMVCV.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `passWord` varchar(20) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `email`, `phoneNumber`, `passWord`, `fullName`, `firstName`, `lastName`, `dateOfBirth`, `sex`, `address`) VALUES
(9, 'Quanghe2003@gmail.com', '0377556203', '@Quanghe2003', 'Hồ Văn Cường', 'Văn Cường', 'Hồ', '2003-01-25', 'Nam', 'Dương Nội 2, Yên Nghĩa, Hà Đông, Hà Nội'),
(19, 'admin@gmail.com', '0961516674', '@Khai123', 'Giáp văn khang', NULL, NULL, '0000-00-00', 'chưa có', 'chưa có'),
(20, 'dodanghoan@gmail.com', '0353546276', '1234', ' ', '', '', '2003-11-12', 'Nam', 'chưa có'),
(21, 'dodanghoana1@gmail.com', '0983419372', '1234', 'Hồ Quang Hệ', 'Quang Hệ', 'Hồ', '2003-11-30', 'Nam', 'chưa có');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_user_id_user_cart` (`user_id`),
  ADD KEY `fk_product_id_product_cart` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_product_id_product_cart` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_user_id_user_cart` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
