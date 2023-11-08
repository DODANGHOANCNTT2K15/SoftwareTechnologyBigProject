-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2023 lúc 10:36 AM
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
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`) VALUES
(2, 9, NULL, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `size` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`order_detail_id`, `order_id`, `product_id`, `quantity`, `size`) VALUES
(39, 68, 1, 1, 'S'),
(40, 69, 1, NULL, NULL),
(41, 70, 1, NULL, NULL),
(42, 71, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `status`) VALUES
(62, 9, '2023-10-31 06:28:42', 'Đang đặt hàng'),
(63, 9, '2023-10-31 06:28:54', 'Đang đặt hàng'),
(64, 9, '2023-10-31 06:28:57', 'Đang đặt hàng'),
(65, 9, '2023-10-31 10:25:47', 'Đang đặt hàng'),
(66, 9, '2023-10-31 10:25:54', 'Đang đặt hàng'),
(67, 9, '2023-10-31 14:09:37', 'Đang đặt hàng'),
(68, 9, '2023-10-31 14:10:10', 'Đang đặt hàng'),
(69, 9, '2023-10-31 14:12:37', 'Đang đặt hàng'),
(70, 9, '2023-11-05 15:06:35', 'Đang đặt hàng'),
(71, 9, '2023-11-06 09:12:50', 'Đang đặt hàng');

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
(1, 'New Arrival', 'LT', 'U', 'B', 'CV', 'GREEN', 720000, 'PATTAS TOMO - LOW TOP - BLARNEY', '0000_NALTMBCV/0000_NALTMBVC_02.jpeg', '0000_NALTMBCV.php'),
(2, 'New Arrival', 'HT', 'U', 'B', 'CV', 'YELLOW', 590000, 'Basas Bumper Gum EXT NE - High Top', '0001_NAHTUBCV/0001_NAHTUBCV_02.jpg', '0001_NAHTUBCV.php'),
(3, 'New Arrival', 'LT', 'U', 'B', 'CV', 'WHITE', 1190000, 'Track 6 2.Blues - Low Top', '0002_NALTUBCV/0002_NALTUBCV_02.jpeg', '0002_NALTUBCV.php'),
(4, 'New Arrival', 'LT', 'U', 'B', 'CV', 'BLUE', 720000, 'VINTAS JAZICO - LOW TOP - ROYAL WHITE', '0003_NALTUBCV/0003_NALTUBCV_02.jpeg', '0003_NALTUBCV.php'),
(5, 'New Arrival', 'LT', 'U', 'P', 'PT', 'BLACK', 11290000, 'Track 6 2.Blues - Low Top', '0004_NALTUPPT/0004_NALTUPPT_02.jpeg', '0004_NALTUPPT.php'),
(6, 'New Arrival', 'HT', 'U', 'V', 'CT', 'BLACK', 650000, 'Urbas Corluray Mix - High Top', '0005_NAHTUVCT/0005_NAHTUVCT_02.jpeg', '0005_NAHTUVCT.php'),
(7, 'New Arrival', 'LT', 'U', 'V', 'CT', 'WHITE', 610000, 'Urbas Corluray Mix -  Low Top', '0006_NALTUVCT/0006_NALTUVCT_02.jpeg', '0006_NALTUVCT.php'),
(9, 'New Arrival', 'HT', 'N', 'V', 'CT', 'WHITE', 780000, 'VINTAS JAZICO - HIGH TOP - ROYAL WHITE', '0007_NAHTNVCT/0007_NAHTNVCT_02.jpeg', '0007_NAHTNVCT.php'),
(10, 'New Arrival', 'LT', 'N', 'V', 'CT', 'WHITE', 720000, 'VINTAS JAZICO - LOW TOP - ROYAL WHITE', '0008_NALTNVCT/0008_NALTNVCT_02.jpeg', '0008_NALTNVCT.php'),
(11, 'Limited Edition', 'LT', 'U', 'V', 'PT', 'WHITE', 1490000, 'TRACK 6 I.S.E.E - PURE WHITE/ICY BLUE', '0009_LELTUVPT/0009_LELTUVPT_02.jpg', '0009_LELTUVPT.php'),
(12, 'New Arrival', 'LT', 'U', 'B', 'CV', 'WHITE', 1190000, 'TRACK 6 JAZICO - LOW TOP - ROYAL WHITE', '0010_NALTUBCV/0010_NALTUBCV_02.jpeg', '0010_NALTUBCV.php\r\n'),
(13, 'New Arrival', 'LT', 'U', 'B', 'PT', 'BLUE', 680000, 'VINTAS SODA POP - LOW TOP - AMPARO BLUE', '0011_NALTUBPT/0011_NALTUBPT_02.jpg', '0011_NALTUBPT.php'),
(14, 'New Arrival', 'LT', 'U', 'B', 'PT', 'GREEN', 680000, 'VINTAS SODA POP - LOW TOP - EMERALD', '0012_NALTUBPT/0012_NALTUBPT_02.jpg', '0012_NALTUBPT.php'),
(15, 'New Arrival', 'HT', 'U', 'B', 'PT', 'PINK', 720000, 'VINTAS SODA POP - HIGH TOP - RED VIOLET', '0013_NAHTUBPT/0013_NAHTUBPT_02.jpg', '0013_NAHTUBPT.php'),
(16, 'New Arrival', 'LT', 'U', 'V', 'CV', 'ORANGE', 720000, '\r\nVINTAS LANDFORMS - LOW TOP - MARMALADE', '0014_NALTUVCV/0014_NALTUVCV_02.jpg', '0014_NALTUVCV.php'),
(17, 'New Arrival', 'LT', 'N', 'V', 'CV', 'BROWN', 720000, 'VINTAS LANDFORMS - LOW TOP - RAIN DRUM', '0015_NALTNVCV/0015_NALTNVCV_02.jpg', '0015_NALTNVCV.php'),
(18, 'Limited Edition', 'LT', 'U', 'V', 'DA', 'BLACK', 1090000, 'TRACK 6 UNNAMED NO.1 IN C MINOR - LOW TOP - BLACK', '0016_LELTUVDA/0016_LELTUVDA_02.jpg', '0016_LELTUVDA.php'),
(19, 'Limited Edition', 'HT', 'U', 'V', 'CV', 'YELLOW', 950000, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/SUNRISE 50TH', '0017_LEHTUVCV/0017_LEHTUVCV_02.jpg', '0017_LEHTUVCV.php'),
(20, 'Limited Edition', 'LT', 'U', 'V', 'CV', 'WHITE', 890000, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/CORYDALIS 50TH', '00018_LELTUVCV/00018_LELTUVCV_02.jpg\r\n', '00018_LELTUVCV.php'),
(21, 'Online Only', 'LT', 'U', 'U', 'DA', 'RED', 580000, 'URBAS BLOODY - LOW TOP - HAUTE RED', '0019_OLLTUUDA/0019_OLLTUUDA_02.jpg', '0019_OLLTUUDA.php'),
(22, 'Sale Off', 'LT', 'U', 'V', 'DA', 'YELLOW', 580000, 'VINTAS MISTER - LOW TOP - NARCISSUEDE', '0020_SOLTUVDA/0020_SOLTUVDA_02.jpg', '0020_SOLTUVDA.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `passWord` varchar(20) NOT NULL,
  `fullName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `email`, `phoneNumber`, `passWord`, `fullName`) VALUES
(9, 'Quanghe2003@gmail.com', '0961516674', '@He2501', 'Nguyễn Quang Hệ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `fk_orders_id_orders_orderdetails` (`order_id`),
  ADD KEY `fk_product_id_products_orderdetails` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_user_id_user_orders` (`user_id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `fk_orders_id_orders_orderdetails` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `fk_product_id_products_orderdetails` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_id_user_orders` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
