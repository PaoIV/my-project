-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 08, 2021 lúc 12:44 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webpao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Dụng cụ làm vườn'),
(2, 'Câu cá'),
(3, 'Đồ dùng nhà bếp'),
(4, 'Thực phẩm cức năng'),
(5, 'Các loại thực phẩm khô');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `nbsold` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `cid`, `img`, `name`, `price`, `address`, `nbsold`) VALUES
(20, 6, 'images/img-pro-1.jpg', 'Vé Xem phim', '90,000đ', 'HN', 'Đã bán 200'),
(21, 6, 'images/img-pro-2.jpg', 'Voucher xem phim', '120,000đ', 'HN', 'Đã bán 36'),
(22, 6, 'images/img-pro-3.jpg', 'Máy khoan pin điện', '200,000đ', 'TP.HCM', 'Đã bán 65'),
(23, 6, 'images/img-pro-4.jpg', 'Combo CS da mặt VIM', '130,000đ', 'HN', 'Đã bán 36'),
(24, 6, 'images/img-pro-5.jpg', 'Vé xem phim:Mắt Biếc', '60,000đ', 'HN', 'Đã bán 42'),
(25, 6, 'images/img-pro-6.jpg', 'Thẻ cào mobifon 50.000', '49,000đ', 'HN', 'Đã bán 136'),
(31, 2, 'images/cauca-product1.jpg', 'Cước câu cá', '145,000đ', 'TP.HCM', 'Đã bán 103'),
(29, 1, 'images/dclv-product4.png', 'H-G:Hoa báo xuân', '12,900đ', 'HN', 'Đãn bán 14'),
(30, 1, 'images/dclv-product5.png', 'H-G:Rau mùi', '8,8000đ', 'HN', 'Đã bán 86'),
(28, 1, 'images/dclv-product3.png', 'NE-MES Tạo bông-Đậu thái', '85,000đ', 'Cần thơ', 'Đãn bán 46'),
(27, 1, 'images/dclv-product2.png', 'Bộ ba dụng cụ mini', '120.000đ', 'HN', 'Đã bán 62'),
(26, 1, 'images/dclv-product1.png', 'Hạt giống dua F1', '14,900đ', 'HN', ' Đã bán 10'),
(32, 2, 'images/cauca-product2.jpg', 'Túi đựng câu cá dã ngoại', '120,000đ', 'HN', 'Đã bán 7'),
(33, 2, 'images/cauca-product3.jpg', 'Mồi câu cá HVA-frog', '99,000đ', 'Gia Lai', 'Đã bán 31'),
(34, 2, 'images/cauca-product4.jpg', 'Bộ cần câu - Balo đi kèm', '249,000đ', 'HN', 'Đã bán 152'),
(35, 2, 'images/cauca-product5.jpg', 'Máy câu cá DS-2000, DS3000', '110,000đ-260,000đ', 'Nghệ An', 'Đã bán 63'),
(36, 3, 'images/dcnb-product1.jpg', 'Nồi hấp inox 2 tầng 28cm', '89,000đ', 'Lạng Sơn', 'Đã bán 200'),
(37, 3, 'images/dcnb-product2.jpg', 'Chảo chống dính vân đá đáy từ', '175,000đ', 'TP.HCM', 'Đã bán 62'),
(38, 3, 'images/dcnb-product3-20211107-060244.jpg', 'Chảo trơn SUNHOUSE CT24', '120,000đ', 'HNoi', 'Đã bán 462 '),
(39, 3, 'images/dcnb-product4.jpg', 'Cân điện tử Tiểu ly 5KG', '69,000đ', 'HN', 'Đã bán 38'),
(40, 3, 'images/dcnb-product5.jpg', 'Dao kéo nhà bếp Đa Sỹ', '59,000đ', 'HN', 'Đã bán 69');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(72, 'doanh3012', '123'),
(70, 'alo12321123', '123123'),
(71, 'doanhpao3', '12369'),
(73, 'doanh', '333'),
(77, 'doanh@gmail.com', '33333'),
(68, 'doanhpao333', '123469'),
(69, 'alosdasda', 'sdasdasdas'),
(64, 'doanhngo18', '1234'),
(60, 'eadsdasđ', 'a591fbc0f1d2671494cd7cff4aa6330f'),
(76, 'admin333@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
