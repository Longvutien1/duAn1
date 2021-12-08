-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 02:10 PM
-- Server version: 10.2.40-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujlxpemdhosting_duan1_we16304`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ma_banner` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ma_banner`, `hinh`, `status`) VALUES
(9, 'home-img-5.png', 1),
(10, 'home-img-6.png', 0),
(11, 'home-img-3.png', 0),
(20, 'home-img-4.png', 1),
(22, 'home-img-7.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` datetime NOT NULL,
  `so_sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ma_bl`, `noidung`, `ma_sp`, `ma_kh`, `ngay_bl`, `so_sao`) VALUES
(6, 'Đ', 1, 2, '2021-11-08 17:37:44', 2),
(17, 'tốt', 26, 7, '2021-11-15 11:32:24', 0),
(30, 'Đẹp quá ', 27, 14, '2021-11-19 13:46:17', 3),
(31, 'Rất ngon ', 27, 14, '2021-11-19 13:48:08', 3),
(32, 'Tuyệt vời', 27, 14, '2021-11-19 13:48:31', 5),
(33, 'Đẹp quá ', 27, 14, '2021-11-19 13:48:50', 5),
(34, 'Rất ngon ', 27, 14, '2021-11-19 13:49:01', 0),
(35, 'Rất ngon ', 28, 14, '2021-11-19 16:23:05', 5),
(36, 'Đẹp quá ', 28, 14, '2021-11-19 16:26:23', 5),
(37, 'Đẹp quá ', 26, 14, '2021-11-19 16:27:02', 4),
(38, 'Đẹp quá ', 27, 14, '2021-11-19 16:33:43', 5),
(39, 'Đẹp quá ', 27, 14, '2021-11-19 16:33:53', 5),
(40, 'Đẹp quá ', 8, 14, '2021-11-19 16:56:16', 3),
(41, 'Đẹp quá ', 28, 14, '2021-11-19 17:19:27', 2),
(42, 'Đẹp quáaaaaaaaaa', 25, 14, '2021-11-19 18:53:06', 5),
(43, 'Đẹp quá ', 24, 14, '2021-11-19 18:56:12', 5),
(44, 'Tuyệt vời', 22, 14, '2021-11-19 18:56:25', 5),
(45, 'Rất ngon ', 17, 14, '2021-11-19 18:56:41', 5),
(46, 'aa', 27, 14, '2021-11-20 04:59:40', 4),
(47, 'Đẹp quá ', 27, 7, '2021-11-20 07:11:36', 5),
(48, 'Đẹp quá 2', 27, 7, '2021-11-20 07:12:29', 5),
(50, 'Ngon rẻ', 28, 7, '2021-11-20 07:16:08', 3),
(51, 'Ngon rẻ', 28, 7, '2021-11-20 07:17:51', 3),
(52, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:00', 3),
(53, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:12', 3),
(54, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:21', 3),
(55, 'aaaa', 28, 7, '2021-11-20 07:20:31', 4),
(56, 'Đẹp', 25, 14, '2021-11-24 07:06:35', 3);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_don_hang_chi_tiet` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi_cu_the` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loai_dia_chi` int(11) NOT NULL,
  `noi_nhan` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phi_vc` int(11) NOT NULL,
  `so_luong_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinh_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_tien_sp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma_don_hang_chi_tiet`, `ma_don_hang`, `ma_sp`, `ho_ten`, `phone`, `diachi`, `diachi_cu_the`, `loai_dia_chi`, `noi_nhan`, `ten_sp`, `phi_vc`, `so_luong_sp`, `hinh_sp`, `gia_tien_sp`) VALUES
(16, 56, 26, 'Vũ Tiến Long 2', '+84378923745', 'Hà nội', 'chanh thôn nam tiến 123', 1, 2, 'long1221', 20, '1', 'lamborghini.jpeg', 123),
(17, 56, 25, 'Vũ Tiến Long 2', '+84378923745', 'Hà nội', 'chanh thôn nam tiến 123', 1, 2, 'long1221', 20, '2', 'glx11-15511546129102068765592.jpg', 12),
(18, 57, 8, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'long1221', 20, '2', 'bruno-fernandes.jpg', 12),
(19, 57, 20, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'long12122a', 20, '1', 'l6.jpg', 12),
(20, 57, 16, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'Truyền thống', 20, '1', 'chuẩn.jpg', 123),
(25, 61, 24, 'Long', '0123456789', 'Hà nội', 'chanh 2', 1, 2, 'aaa', 20, '2', 'sp_1.png', 123),
(26, 61, 23, 'Long', '0123456789', 'Hà nội', 'chanh 2', 1, 2, 'hhh', 20, '1', 'sp_18.png', 12),
(27, 62, 24, 'Vũ Tiến Long 2', '0392127565', 'hn', 'chanh thôn', 1, 2, 'aaa', 20, '2', 'sp_1.png', 123),
(28, 62, 21, 'Vũ Tiến Long 2', '0392127565', 'hn', 'chanh thôn', 1, 2, 'long1', 20, '3', 'sp_2.png', 123),
(29, 63, 26, 'Äá»©c', '0392127565', 'hn', 'chanh thÃ´n', 1, 1, 'long1221', 10, '1', 'sp_3.png', 123),
(30, 64, 28, 'Äá»©c 2', '+84378923745', 'HÃ  ná»™i', 'chanh thÃ´n nam tiáº¿n', 0, 2, 'long1221', 20, '1', 'sp_7.png', 123),
(31, 64, 24, 'Äá»©c 2', '+84378923745', 'HÃ  ná»™i', 'chanh thÃ´n nam tiáº¿n', 0, 2, 'aaa', 20, '1', 'sp_1.png', 123),
(34, 66, 25, 'as123', '0392127565', 'hn', 'chanh', 0, 2, 'long1221', 20, '1', 'sp_9.png', 12),
(35, 66, 28, 'as123', '0392127565', 'hn', 'chanh', 0, 2, 'long1221', 20, '1', 'sp_7.png', 123),
(38, 68, 28, 'Long', '0392127565', 'PhÃº xuyÃªn hn', 'chanh thÃ´n', 1, 2, 'long1221', 20, '1', 'sp_7.png', 123),
(39, 68, 23, 'Long', '0392127565', 'PhÃº xuyÃªn hn', 'chanh thÃ´n', 1, 2, 'hhh', 20, '1', 'sp_18.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_don_hang` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_mua` datetime NOT NULL,
  `tong_tien` float NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ma_don_hang`, `ma_kh`, `ngay_mua`, `tong_tien`, `trang_thai`) VALUES
(56, 14, '2021-11-25 09:43:21', 167, 1),
(57, 14, '2021-11-25 09:57:58', 179, 1),
(61, 14, '2021-12-01 10:59:30', 278, 1),
(62, 14, '2021-12-01 11:08:01', 635, 3),
(63, 15, '2021-12-06 07:41:23', 133, 1),
(64, 15, '2021-12-07 05:18:05', 266, 1),
(66, 15, '2021-12-07 16:11:49', 155, 2),
(68, 14, '2021-12-08 14:04:07', 155, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `ma_dg` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`ma_dg`, `noidung`, `ngay_nhap`, `ten_kh`, `email`) VALUES
(5, 'Sáng tạo', '2021-11-28 05:50:13', 'Vũ Tiến Long', 'longvtph14046@fpt.edu.vn'),
(6, 'hello cÃ¡c báº¡n =))', '2021-12-08 06:12:16', 'Pháº¡m Há»¯u Sang', 'admin@gmail.com'),
(7, 'CÃ¡c báº¡n Ä‘á»‰nh vl !!', '2021-12-08 06:46:13', 'anh cÆ°á»ng Ä‘áº¹p zai', 'cc034790@gmail.com'),
(8, 'nhÆ°ng fom chá»¯ nhÆ° lol :))\r\n', '2021-12-08 06:47:14', 'anh cÆ°á»ng Ä‘áº¹p zai', 'cc034790@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kichhoat` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vaitro` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_tinh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `username`, `pass`, `hoten`, `hinh`, `kichhoat`, `email`, `vaitro`, `diachi`, `phone`, `gioi_tinh`) VALUES
(2, 'ph1404711', '$2y$10$l.lYcpx9X6s6FVD1R88r.uZ1g9.rf1tj3bpSOhlAVhkDnicywMH2a', 'Vũ Tiến Long', '123.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745', 0),
(7, 'ph140481', '$2y$10$/.X0Ptr5.QFZkSzEdPZsEeJhcV.Lbo/Ou3zV5Rq.mtOQOjEpjShOO', 'Vũ Tiến Long', 'bruno.jpg', 0, 'longvtph14046@fpt.edu.vn', 0, 'Hà nội', '0392127565', 1),
(10, 'long', '$2y$10$ZdyeQoYyAx1qJv99oH9cHu/fcrmEhf4FvNWCpRMA.1y80QXYeQB72', 'Vũ Tiến Long', '', 0, 'tllong20002@gmail.com', 0, 'Phu xuyen', '', 0),
(11, 'dat', '$2y$10$KUYmJxEtJXDI8YFAyoYICe4jj4FG2hGsbmYHJHmLYn9DaJyXE.JxK', 'Vũ Tiến Long', '', 0, 'tllong20002@gmail.com', 0, 'Phu xuyen', '', 0),
(12, 'ph14046', '$2y$10$WAxh4kUAF1hzEeuMXF2a7O/p0Z9Homem1p/wutJI6GT1EclOY7efG', 'Vũ Tiến Long', '', 0, 'longvtph14046@fpt.edu.vn', 0, 'Argentina', '', 0),
(14, 'longvtph14046', '$2y$10$z9YowdBwsUdzeVDXUieIY.AhLxgTeHIiDkCAiYKmr61VMTNE852aa', 'VÅ© Tiáº¿n Long', 'bruno.jpg', 0, 'tllong20002@gmail.com', 1, 'Phu xuyen', '+84378923745', 1),
(15, 'minhduc123', '$2y$10$pPayA1er.qxZztWhExMLNuKIUcqS9PnbB6z4bb4Z3VyhgfjI..yRS', 'VÅ© Tiáº¿n Äá»©c', NULL, 0, 'tllong20002@gmail.com', 0, 'Phu xuyen', NULL, NULL),
(17, 'longlatao', '$2y$10$beGJ61Rjfo2xO1wqyZeOWuftevprC9cgQxJwODK4F.NZIwzxcbAbC', 'Long VÅ©vu vu', 'HTML5_CSS3_Q456.PNG', 0, 'longvtph14046@fpt.edu.vn', 0, 'HÃ  Ná»™i', '', NULL),
(18, 'longvt', '$2y$10$IAKEt6PFFYiuMDGUeDk6b.Cg/u0thUT9UyE4o7Cfj3Y2Vqj7NioPe', 'VÅ© Tiáº¿n Long', 'day2.png', 0, 'tllong20002@gmail.com.vn', 0, 'hn', '0392127565', NULL),
(19, 'zzbechipzz1', '$2y$10$zkSKrF1OWBfc/a817Y8Bo.gfLeLpUqW6PkFKDECZAzaBvEsFLx6Ju', 'hoaÌ€ng hÆ°Ìƒu Ä‘Æ°Ìc', 'anh.png', 0, 'tllong20002@gmail.com.vn', 1, '22 vinh hung', '0392127565', NULL),
(20, 'sangdhd111', '$2y$10$EPClmRpr/kehiG9JH2zr7e4rcPgrx8YA3Z.gKgeGYJie44bj3zSpG', 'Pháº¡m Há»¯u Sang', 'anhmeo.jpeg', 0, 'admin@gmail.com', 1, 'Quáº£ng Ninh', '0969689557', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`ma_loai`, `ten_loai`, `status`) VALUES
(1, 'Ã” tÃ´', 1),
(2, 'Xe mÃ¡y', 1),
(23, 'Xiaomi 2', 1),
(24, 'xu hÃ¡o', 1),
(37, 'Xe mÃ¡y', 0),
(38, 'SÃºng lá»¥c', 0),
(39, 'Ab', 0),
(40, 'Đồ ăn kèm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `giamgia` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `dacbiet` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `maloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `hinh`, `soluong`, `gia`, `giamgia`, `ngaynhap`, `mota`, `dacbiet`, `luotxem`, `maloai`) VALUES
(1, 'Chà chuyền thống', 'sp_15.png', 1, 10000, 1, '2021-11-07', '     aa     ', 0, 26, 1),
(5, 'long1221', 'sp_19.png', 0, 10000, 12, '2021-11-07', '        Welcome to TinyMCE!      ', 0, 1, 1),
(6, 'long1221', 'sp_8.png', 0, 12, 1, '2021-11-03', '      Welcome to TinyMCE!    ', 0, 1, 1),
(7, 'aa', 'sp_13.png', 0, 12, 1, '2021-11-07', '        Welcome to TinyMCE!      ', 0, 1, 1),
(8, 'long1221', 'sp_12.png', 0, 12, 1, '2021-11-07', '      Welcome to TinyMCE!    ', 0, 36, 1),
(15, 'long12122', 'sp_17.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 0, 24),
(16, 'Truyền thống', 'sp_20.png', 0, 123, 1, '2021-11-12', '   You are welcome !   ', 0, 7, 1),
(17, 'abcde', 'sp_16.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 2, 1),
(18, 'Cam xả', 'sp_5.png', 0, 123, 11, '2021-11-12', '   You are welcome !   ', 0, 5, 1),
(20, 'long12122a', 'sp_10.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 6, 2),
(21, 'long1', 'sp_2.png', 0, 123, 1, '2021-11-11', '   You are welcome !   ', 0, 20, 1),
(22, 'long2', 'sp_4.png', 0, 12, 12, '2021-11-11', '   You are welcome !   ', 0, 33, 1),
(23, 'hhh', 'sp_18.png', 0, 12, 1, '2021-11-05', '   You are welcome !   ', 0, 9, 23),
(24, 'aaa', 'sp_1.png', 0, 123, 1, '2021-11-11', '    You are welcome !    ', 0, 11, 2),
(25, 'long1221', 'sp_9.png', 0, 12, 1, '2021-11-12', '    You are welcome !    ', 0, 176, 1),
(26, 'long1221', 'sp_3.png', 0, 123, 11, '2021-11-12', '    You are welcome !    ', 0, 96, 1),
(27, 'Trà chanh truyền thống', 'sp_11.png', 0, 123, 12, '2021-11-12', '   You are welcome !   ', 0, 430, 1),
(28, 'long1221', 'sp_7.png', 0, 123, 1, '2021-11-18', '     You are welcome !     ', 0, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `ma_thong_bao` int(11) NOT NULL,
  `thoi_gian` datetime NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `ma_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`ma_thong_bao`, `thoi_gian`, `ma_don_hang`, `noi_dung`, `trang_thai`, `ma_kh`) VALUES
(28, '2021-12-06 13:52:47', 56, 'aa', 1, 14),
(29, '2021-12-06 08:04:09', 64, 'Đơn hàng có mã 64 đã được duyệt', 1, 14),
(30, '2021-12-06 08:04:11', 64, 'Đơn hàng có mã 64 đang giao', 1, 14),
(34, '2021-12-06 07:44:38', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(35, '2021-12-06 07:44:56', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘ang giao', NULL, 15),
(36, '2021-12-07 04:47:32', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(37, '2021-12-07 04:54:39', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(38, '2021-12-07 05:02:03', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(39, '2021-12-07 05:04:33', 63, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 63 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(40, '2021-12-07 05:19:04', 64, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 64 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', 1, 15),
(41, '2021-12-07 05:19:18', 64, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 64 Ä‘ang giao', 1, 15),
(42, '2021-12-07 16:12:27', 66, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 66 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', NULL, 15),
(43, '2021-12-07 16:15:27', 66, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 66 Ä‘Ã£ Ä‘Æ°á»£c duyá»‡t', 0, 15),
(44, '2021-12-07 16:15:42', 66, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 66 Ä‘ang giao', 0, 15),
(48, '2021-12-08 10:59:48', 66, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 66 Ä‘ang Ä‘Æ°á»£c giao', 0, 15),
(49, '2021-12-08 11:00:16', 62, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 62 Ä‘ang Ä‘Æ°á»£c giao', 0, 14),
(50, '2021-12-08 11:00:44', 62, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 62 Ä‘ang Ä‘Æ°á»£c giao', 1, 14),
(51, '2021-12-08 11:01:46', 62, 'ÄÆ¡n hÃ ng cÃ³ mÃ£ 62 Ä‘Ã£ giao thÃ nh cÃ´ng', 1, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ma_banner`) USING BTREE;

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`) USING BTREE,
  ADD KEY `ma_sp` (`ma_sp`) USING BTREE,
  ADD KEY `ma_kh_bl` (`ma_kh`) USING BTREE;

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ma_don_hang_chi_tiet`) USING BTREE,
  ADD KEY `ma_sp2` (`ma_sp`) USING BTREE,
  ADD KEY `ma_don_hang` (`ma_don_hang`) USING BTREE;

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_don_hang`) USING BTREE,
  ADD KEY `ma_kh2` (`ma_kh`) USING BTREE;

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`ma_dg`) USING BTREE;

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`) USING BTREE;

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`ma_loai`) USING BTREE;

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`) USING BTREE,
  ADD KEY `maloai` (`maloai`) USING BTREE;

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`ma_thong_bao`) USING BTREE,
  ADD KEY `ma_don_hang2` (`ma_don_hang`) USING BTREE,
  ADD KEY `ma_kh` (`ma_kh`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ma_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ma_don_hang_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `gopy`
--
ALTER TABLE `gopy`
  MODIFY `ma_dg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `ma_thong_bao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `ma_kh_bl` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_sp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `ma_don_hang` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_sp2` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `ma_kh2` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `maloai` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`ma_loai`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `ma_don_hang2` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
