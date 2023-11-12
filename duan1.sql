-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `id` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `ten_thuoctinh` varchar(20) NOT NULL,
  `giatri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_cart` int(5) NOT NULL,
  `id_vouncher` int(5) NOT NULL,
  `ma_donhang` varchar(10) NOT NULL,
  `ten_nguoidat` varchar(20) NOT NULL,
  `diachi_nguoidat` varchar(20) NOT NULL,
  `sdt_nguoidat` varchar(20) NOT NULL,
  `email_nguoidat` varchar(20) NOT NULL,
  `ten_nguoinhan` varchar(20) NOT NULL,
  `diachi_nguoinhan` varchar(20) NOT NULL,
  `sdt_nguoinhan` varchar(20) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:COD\r\n1:BANK\r\n2:Ví điện tử',
  `total` int(9) NOT NULL,
  `vouncher` tinyint(1) DEFAULT 0 COMMENT '0: Không có vouncher\r\n1: có vouncher',
  `ship` int(9) DEFAULT NULL,
  `tong` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(5) NOT NULL,
  `id_catalog` int(5) NOT NULL,
  `ten` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `id_catalog`, `ten`) VALUES
(1, 1, 'IPhone'),
(2, 1, 'Samsung'),
(3, 1, 'OPPO'),
(4, 1, 'XIAOMI'),
(5, 1, 'VIVO'),
(7, 2, 'HP'),
(8, 2, 'ASUS'),
(9, 2, 'MacBook'),
(10, 2, 'DELL'),
(11, 2, 'MSI'),
(12, 3, 'IPAD'),
(13, 3, 'SAMSUNG'),
(14, 3, 'XIAOMIM'),
(15, 3, 'OPPO'),
(16, 3, 'LENOVO'),
(17, 4, 'SAMSUNG'),
(19, 4, 'WATCH'),
(20, 4, 'BEFIT'),
(21, 4, 'XIAOMI');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `gia` int(9) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(5) NOT NULL,
  `ten_dm` varchar(10) NOT NULL,
  `stt` varchar(5) NOT NULL,
  `mota` varchar(20) DEFAULT NULL,
  `sethome` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Không set home\r\n1:Set home'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `ten_dm`, `stt`, `mota`, `sethome`) VALUES
(1, 'Điện thoại', '1', 'Điện thoại', 0),
(2, 'Laptop', '2', 'Laptop', 0),
(3, 'Tablet', '3', 'Tablet', 0),
(4, 'Smartwatch', '4', 'đồng hồ thông minh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `id` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` date NOT NULL,
  `ten` varchar(20) NOT NULL,
  `hinh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `id_catalog` int(5) NOT NULL,
  `id_brand` int(5) NOT NULL,
  `ma_sp` varchar(10) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `gia` int(9) NOT NULL,
  `giamgia` int(9) NOT NULL COMMENT 'Giá đang giảm',
  `sale` tinyint(1) NOT NULL DEFAULT 0,
  `hinh` varchar(20) NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(20) NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `xemnhieu` tinyint(1) NOT NULL DEFAULT 0,
  `banchay` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_catalog`, `id_brand`, `ma_sp`, `ten`, `gia`, `giamgia`, `sale`, `hinh`, `ngaynhap`, `mota`, `new`, `xemnhieu`, `banchay`) VALUES
(1, 1, 1, 'DT001', 'Iphone 15', 34000000, 30000000, 0, 'sp1', '2023-11-01', 'Điện thoại iphone', 0, 1, 0),
(2, 2, 1, 'LT001', 'Asus TUF Gaming F15', 21000000, 0, 0, 'sp2', '2023-11-03', 'laptop Asus', 1, 0, 0),
(3, 3, 1, 'TL001', 'Samsung Galaxy Tab A', 4000000, 0, 1, 'sp3', '2023-11-04', 'Tablet samsung', 0, 0, 1),
(4, 4, 1, 'TN001', 'Tai nghe Bluetooth True Wireless AVA+ Buds Life Rider GT07', 400000, 0, 0, 'sp4', '2023-10-17', 'Tai nghe AVA+', 0, 0, 0),
(5, 1, 1, 'DT002', 'Iphone 14 ', 25000000, 0, 1, 'sp5', '2023-10-17', 'Iphone 14 apple', 0, 0, 1),
(6, 1, 1, 'DT003', 'Samsung Galaxy Z Fold5 5G', 33490000, 0, 0, 'sp6', '2023-11-10', 'Điện thoại samsung', 0, 1, 0),
(7, 1, 1, 'DT004', 'OPPO Find N3 5G', 45000000, 0, 0, 'sp7', '2023-11-04', 'Điện thoại OPPO', 1, 0, 0),
(8, 2, 1, 'LT002', 'Laptop Asus Vivobook Go 15 E1504FA R5 7520U/16GB/512GB/Chuột/Win11 (NJ776W)', 13500000, 0, 0, 'sp8', '2023-10-01', 'Laptop Asus', 1, 0, 0),
(9, 2, 1, 'LT003', 'Laptop Acer Aspire 3 A315 58 589K i5 1135G7/8GB/256GB/Win11 (NX.AM0SV.008)', 11600000, 0, 0, 'sp9', '2023-11-03', 'Laptop Acer', 0, 1, 0),
(10, 3, 1, 'TL002', 'Samsung Galaxy Tab A9', 4000000, 0, 0, 'sp10', '2023-11-05', 'Tablet samsung', 0, 0, 1),
(11, 3, 1, 'TL003', 'Xiaomi Redmi Pad SE 4GB', 4500000, 0, 1, 'sp11', '2023-11-07', 'Tablet Xiaomi', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(5) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:Người dùng\r\n1:Admin',
  `diachi` varchar(100) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `hoivien` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Khách hàng thường\r\n1: Khách hàng thân thiết\r\n2: Khách hàng bạc\r\n3:Khách hàng vàng\r\n4:Khách hàng bạch kim\r\n5:Khách hàng kim cương'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hoten`, `hinh`, `email`, `gioitinh`, `role`, `diachi`, `sdt`, `hoivien`) VALUES
(1, 'thuykieuxinkgai', 'troankhung', 'tran thuy kieu', '', 'toan70868@gmail.com', '', 0, '', '0328116190', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vouncher`
--

CREATE TABLE `vouncher` (
  `id` int(5) NOT NULL,
  `ten_vouncher` varchar(20) NOT NULL,
  `sotiengiam` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vouncher`
--

INSERT INTO `vouncher` (`id`, `ten_vouncher`, `sotiengiam`) VALUES
(1, 'ABC500', 500000),
(2, 'ABC300', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `link_sp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_attributepro_product` (`id_product`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_cart` (`id_cart`),
  ADD KEY `fk_bill_product` (`id_product`),
  ADD KEY `fk_bill_user` (`id_user`),
  ADD KEY `fk_bill_vouncher` (`id_vouncher`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_brand_catalog` (`id_catalog`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_user` (`id_user`),
  ADD KEY `fk_cart_product` (`id_product`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cmt_product` (`id_product`),
  ADD KEY `fk_cmt_user` (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`id_catalog`),
  ADD KEY `fk_product_brand` (`id_brand`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rating_product` (`id_product`),
  ADD KEY `fk_rating_user` (`id_user`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouncher`
--
ALTER TABLE `vouncher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wishlist_user` (`id_user`),
  ADD KEY `fk_wishlish_product` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute_product`
--
ALTER TABLE `attribute_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vouncher`
--
ALTER TABLE `vouncher`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD CONSTRAINT `fk_attributepro_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_cart` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `fk_bill_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_bill_vouncher` FOREIGN KEY (`id_vouncher`) REFERENCES `vouncher` (`id`);

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fk_brand_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `cmt`
--
ALTER TABLE `cmt`
  ADD CONSTRAINT `fk_cmt_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_cmt_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_rating_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wishlish_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_wishlist_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
