/*
 Navicat Premium Data Transfer

 Source Server         : VuTienLong
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3307
 Source Schema         : duan1_we16304

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 03/12/2021 12:19:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `ma_banner` int NOT NULL AUTO_INCREMENT,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`ma_banner`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (9, 'home-img-5.png', 1);
INSERT INTO `banner` VALUES (10, 'home-img-6.png', 0);
INSERT INTO `banner` VALUES (11, 'home-img-3.png', 0);
INSERT INTO `banner` VALUES (20, 'home-img-4.png', 1);
INSERT INTO `banner` VALUES (22, 'home-img-7.png', 1);



-- ----------------------------
-- Table structure for loaihang
-- ----------------------------
DROP TABLE IF EXISTS `loaihang`;
CREATE TABLE `loaihang`  (
  `ma_loai` int NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`ma_loai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loaihang
-- ----------------------------
INSERT INTO `loaihang` VALUES (1, 'Ô tô', 1);
INSERT INTO `loaihang` VALUES (2, 'Xe máy z', 1);
INSERT INTO `loaihang` VALUES (23, 'Xiaomi 2', 1);
INSERT INTO `loaihang` VALUES (24, 'xu hào', 1);
INSERT INTO `loaihang` VALUES (37, 'Xe máy', 0);
INSERT INTO `loaihang` VALUES (38, 'Súng lục', 0);
INSERT INTO `loaihang` VALUES (39, 'Ab', 0);
INSERT INTO `loaihang` VALUES (40, 'Đồ ăn kèm', 0);
INSERT INTO `loaihang` VALUES (41, 'Xiaomi', 0);
INSERT INTO `loaihang` VALUES (42, 'Xe máy', 0);
INSERT INTO `loaihang` VALUES (43, 'Trà chanh', 0);

-- ----------------------------
-- Table structure for sanpham
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham`  (
  `ma_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int NOT NULL,
  `gia` float NOT NULL,
  `giamgia` int NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dacbiet` int NOT NULL,
  `luotxem` int NOT NULL,
  `maloai` int NOT NULL,
  PRIMARY KEY (`ma_sp`) USING BTREE,
  INDEX `maloai`(`maloai`) USING BTREE,
  CONSTRAINT `maloai` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`ma_loai`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO `sanpham` VALUES (1, 'Chà chuyền thống', 'sp_15.png', 1, 10000, 1, '2021-11-07', '     aa     ', 0, 26, 1);
INSERT INTO `sanpham` VALUES (5, 'long1221', 'sp_19.png', 0, 10000, 12, '2021-11-07', '        Welcome to TinyMCE!      ', 0, 1, 1);
INSERT INTO `sanpham` VALUES (6, 'long1221', 'sp_8.png', 0, 12, 1, '2021-11-03', '      Welcome to TinyMCE!    ', 0, 1, 1);
INSERT INTO `sanpham` VALUES (7, 'aa', 'sp_13.png', 0, 12, 1, '2021-11-07', '        Welcome to TinyMCE!      ', 0, 1, 1);
INSERT INTO `sanpham` VALUES (8, 'long1221', 'sp_12.png', 0, 12, 1, '2021-11-07', '      Welcome to TinyMCE!    ', 0, 36, 1);
INSERT INTO `sanpham` VALUES (15, 'long12122', 'sp_17.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 0, 24);
INSERT INTO `sanpham` VALUES (16, 'Truyền thống', 'sp_20.png', 0, 123, 1, '2021-11-12', '   You are welcome !   ', 0, 7, 1);
INSERT INTO `sanpham` VALUES (17, 'abcde', 'sp_16.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 2, 1);
INSERT INTO `sanpham` VALUES (18, 'Cam xả', 'sp_5.png', 0, 123, 11, '2021-11-12', '   You are welcome !   ', 0, 5, 1);
INSERT INTO `sanpham` VALUES (20, 'long12122a', 'sp_10.png', 0, 12, 1, '2021-11-12', '   You are welcome !   ', 0, 6, 2);
INSERT INTO `sanpham` VALUES (21, 'long1', 'sp_2.png', 0, 123, 1, '2021-11-11', '   You are welcome !   ', 0, 20, 1);
INSERT INTO `sanpham` VALUES (22, 'long2', 'sp_4.png', 0, 12, 12, '2021-11-11', '   You are welcome !   ', 0, 33, 1);
INSERT INTO `sanpham` VALUES (23, 'hhh', 'sp_18.png', 0, 12, 1, '2021-11-05', '   You are welcome !   ', 0, 9, 23);
INSERT INTO `sanpham` VALUES (24, 'aaa', 'sp_1.png', 0, 123, 1, '2021-11-11', '    You are welcome !    ', 0, 11, 2);
INSERT INTO `sanpham` VALUES (25, 'long1221', 'sp_9.png', 0, 12, 1, '2021-11-12', '    You are welcome !    ', 0, 175, 1);
INSERT INTO `sanpham` VALUES (26, 'long1221', 'sp_3.png', 0, 123, 11, '2021-11-12', '    You are welcome !    ', 0, 96, 1);
INSERT INTO `sanpham` VALUES (27, 'Trà chanh truyền thống', 'sp_11.png', 0, 123, 12, '2021-11-12', '   You are welcome !   ', 0, 429, 1);
INSERT INTO `sanpham` VALUES (28, 'long1221', 'sp_7.png', 0, 123, 1, '2021-11-18', '     You are welcome !     ', 0, 28, 1);



-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang`  (
  `ma_kh` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vaitro` int NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` int NOT NULL,
  PRIMARY KEY (`ma_kh`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES (2, 'ph1404711', '$2y$10$l.lYcpx9X6s6FVD1R88r.uZ1g9.rf1tj3bpSOhlAVhkDnicywMH2a', 'Vũ Tiến Long', '123.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745', 0);
INSERT INTO `khachhang` VALUES (7, 'ph140481', '$2y$10$/.X0Ptr5.QFZkSzEdPZsEeJhcV.Lbo/Ou3zV5Rq.mtOQOjEpjShOO', 'Vũ Tiến Long', 'bruno.jpg', 0, 'longvtph14046@fpt.edu.vn', 0, 'Hà nội', '0392127565', 1);
INSERT INTO `khachhang` VALUES (8, 'qqqwwqw', '$2y$10$YAmDm0YZd6dUkeyfrcxFvOs8MAyKBl/F0lrY1504vx50x7pOW1mXC', 'Vũ Tiến Long', '123.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745', 0);
INSERT INTO `khachhang` VALUES (10, 'long', '$2y$10$ZdyeQoYyAx1qJv99oH9cHu/fcrmEhf4FvNWCpRMA.1y80QXYeQB72', 'Vũ Tiến Long', '', 0, 'tllong20002@gmail.com', 0, 'Phu xuyen', '', 0);
INSERT INTO `khachhang` VALUES (11, 'dat', '$2y$10$KUYmJxEtJXDI8YFAyoYICe4jj4FG2hGsbmYHJHmLYn9DaJyXE.JxK', 'Vũ Tiến Long', '', 0, 'tllong20002@gmail.com', 0, 'Phu xuyen', '', 0);
INSERT INTO `khachhang` VALUES (12, 'ph14046', '$2y$10$WAxh4kUAF1hzEeuMXF2a7O/p0Z9Homem1p/wutJI6GT1EclOY7efG', 'Vũ Tiến Long', '', 0, 'longvtph14046@fpt.edu.vn', 0, 'Argentina', '', 0);
INSERT INTO `khachhang` VALUES (14, 'longvtph14046', '$2y$10$i.0fX2NOsFPdN15ae2x0z.rfznd/FhSfYiMXCGnxy9Gd2ePbC/kdK', 'Vũ Tiến Long 22', 'messi.jpg', 0, 'tllong20002@gmail.com', 1, 'Phu xuyen', '+84378923745', 1);




-- ----------------------------
-- Table structure for gopy
-- ----------------------------
DROP TABLE IF EXISTS `gopy`;
CREATE TABLE `gopy`  (
  `ma_dg` int NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` datetime(0) NOT NULL,
  `ten_kh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_dg`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gopy
-- ----------------------------
INSERT INTO `gopy` VALUES (5, 'Sáng tạo', '2021-11-28 05:50:13', 'Vũ Tiến Long', 'longvtph14046@fpt.edu.vn');


-- ----------------------------
-- Table structure for binhluan
-- ----------------------------
DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE `binhluan`  (
  `ma_bl` int NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` int NOT NULL,
  `ma_kh` int NOT NULL,
  `ngay_bl` datetime(0) NOT NULL,
  `so_sao` int NOT NULL,
  PRIMARY KEY (`ma_bl`) USING BTREE,
  INDEX `ma_sp`(`ma_sp`) USING BTREE,
  INDEX `ma_kh_bl`(`ma_kh`) USING BTREE,
  CONSTRAINT `ma_kh_bl` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ma_sp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of binhluan
-- ----------------------------
INSERT INTO `binhluan` VALUES (6, 'Đ', 1, 2, '2021-11-08 17:37:44', 2);
INSERT INTO `binhluan` VALUES (17, 'tốt', 26, 7, '2021-11-15 11:32:24', 0);
INSERT INTO `binhluan` VALUES (30, 'Đẹp quá ', 27, 14, '2021-11-19 13:46:17', 3);
INSERT INTO `binhluan` VALUES (31, 'Rất ngon ', 27, 14, '2021-11-19 13:48:08', 3);
INSERT INTO `binhluan` VALUES (32, 'Tuyệt vời', 27, 14, '2021-11-19 13:48:31', 5);
INSERT INTO `binhluan` VALUES (33, 'Đẹp quá ', 27, 14, '2021-11-19 13:48:50', 5);
INSERT INTO `binhluan` VALUES (34, 'Rất ngon ', 27, 14, '2021-11-19 13:49:01', 0);
INSERT INTO `binhluan` VALUES (35, 'Rất ngon ', 28, 14, '2021-11-19 16:23:05', 5);
INSERT INTO `binhluan` VALUES (36, 'Đẹp quá ', 28, 14, '2021-11-19 16:26:23', 5);
INSERT INTO `binhluan` VALUES (37, 'Đẹp quá ', 26, 14, '2021-11-19 16:27:02', 4);
INSERT INTO `binhluan` VALUES (38, 'Đẹp quá ', 27, 14, '2021-11-19 16:33:43', 5);
INSERT INTO `binhluan` VALUES (39, 'Đẹp quá ', 27, 14, '2021-11-19 16:33:53', 5);
INSERT INTO `binhluan` VALUES (40, 'Đẹp quá ', 8, 14, '2021-11-19 16:56:16', 3);
INSERT INTO `binhluan` VALUES (41, 'Đẹp quá ', 28, 14, '2021-11-19 17:19:27', 2);
INSERT INTO `binhluan` VALUES (42, 'Đẹp quáaaaaaaaaa', 25, 14, '2021-11-19 18:53:06', 5);
INSERT INTO `binhluan` VALUES (43, 'Đẹp quá ', 24, 14, '2021-11-19 18:56:12', 5);
INSERT INTO `binhluan` VALUES (44, 'Tuyệt vời', 22, 14, '2021-11-19 18:56:25', 5);
INSERT INTO `binhluan` VALUES (45, 'Rất ngon ', 17, 14, '2021-11-19 18:56:41', 5);
INSERT INTO `binhluan` VALUES (46, 'aa', 27, 14, '2021-11-20 04:59:40', 4);
INSERT INTO `binhluan` VALUES (47, 'Đẹp quá ', 27, 7, '2021-11-20 07:11:36', 5);
INSERT INTO `binhluan` VALUES (48, 'Đẹp quá 2', 27, 7, '2021-11-20 07:12:29', 5);
INSERT INTO `binhluan` VALUES (50, 'Ngon rẻ', 28, 7, '2021-11-20 07:16:08', 3);
INSERT INTO `binhluan` VALUES (51, 'Ngon rẻ', 28, 7, '2021-11-20 07:17:51', 3);
INSERT INTO `binhluan` VALUES (52, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:00', 3);
INSERT INTO `binhluan` VALUES (53, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:12', 3);
INSERT INTO `binhluan` VALUES (54, 'Ngon rẻ', 28, 7, '2021-11-20 07:18:21', 3);
INSERT INTO `binhluan` VALUES (55, 'aaaa', 28, 7, '2021-11-20 07:20:31', 4);
INSERT INTO `binhluan` VALUES (56, 'Đẹp', 25, 14, '2021-11-24 07:06:35', 3);


-- ----------------------------
-- Table structure for donhang
-- ----------------------------
DROP TABLE IF EXISTS `donhang`;
CREATE TABLE `donhang`  (
  `ma_don_hang` int NOT NULL AUTO_INCREMENT,
  `ma_kh` int NOT NULL,
  `ngay_mua` datetime(0) NOT NULL,
  `tong_tien` float NOT NULL,
  `duyet` int NOT NULL,
  `giao_hang` int NOT NULL,
  PRIMARY KEY (`ma_don_hang`) USING BTREE,
  INDEX `ma_kh2`(`ma_kh`) USING BTREE,
  CONSTRAINT `ma_kh2` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 63 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donhang
-- ----------------------------
INSERT INTO `donhang` VALUES (56, 14, '2021-11-25 09:43:21', 167, 1, 1);
INSERT INTO `donhang` VALUES (57, 14, '2021-11-25 09:57:58', 179, 1, 1);
INSERT INTO `donhang` VALUES (61, 14, '2021-12-01 10:59:30', 278, 1, 1);
INSERT INTO `donhang` VALUES (62, 14, '2021-12-01 11:08:01', 635, 1, 1);


-- ----------------------------
-- Table structure for chitietdonhang
-- ----------------------------
DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE `chitietdonhang`  (
  `ma_don_hang_chi_tiet` int NOT NULL AUTO_INCREMENT,
  `ma_don_hang` int NOT NULL,
  `ma_sp` int NOT NULL,
  `ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi_cu_the` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loai_dia_chi` int NOT NULL,
  `noi_nhan` int NOT NULL,
  `ten_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phi_vc` int NOT NULL,
  `so_luong_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinh_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_tien_sp` float NOT NULL,
  PRIMARY KEY (`ma_don_hang_chi_tiet`) USING BTREE,
  INDEX `ma_sp2`(`ma_sp`) USING BTREE,
  INDEX `ma_don_hang`(`ma_don_hang`) USING BTREE,
  CONSTRAINT `ma_don_hang` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ma_sp2` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chitietdonhang
-- ----------------------------
INSERT INTO `chitietdonhang` VALUES (16, 56, 26, 'Vũ Tiến Long 2', '+84378923745', 'Hà nội', 'chanh thôn nam tiến 123', 1, 2, 'long1221', 20, '1', 'lamborghini.jpeg', 123);
INSERT INTO `chitietdonhang` VALUES (17, 56, 25, 'Vũ Tiến Long 2', '+84378923745', 'Hà nội', 'chanh thôn nam tiến 123', 1, 2, 'long1221', 20, '2', 'glx11-15511546129102068765592.jpg', 12);
INSERT INTO `chitietdonhang` VALUES (18, 57, 8, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'long1221', 20, '2', 'bruno-fernandes.jpg', 12);
INSERT INTO `chitietdonhang` VALUES (19, 57, 20, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'long12122a', 20, '1', 'l6.jpg', 12);
INSERT INTO `chitietdonhang` VALUES (20, 57, 16, 'Vũ Tiến Long', '+84378923745', 'Hà nội', 'chanh', 1, 2, 'Truyền thống', 20, '1', 'chuẩn.jpg', 123);
INSERT INTO `chitietdonhang` VALUES (25, 61, 24, 'Long', '0123456789', 'Hà nội', 'chanh 2', 1, 2, 'aaa', 20, '2', 'sp_1.png', 123);
INSERT INTO `chitietdonhang` VALUES (26, 61, 23, 'Long', '0123456789', 'Hà nội', 'chanh 2', 1, 2, 'hhh', 20, '1', 'sp_18.png', 12);
INSERT INTO `chitietdonhang` VALUES (27, 62, 24, 'Vũ Tiến Long 2', '0392127565', 'hn', 'chanh thôn', 1, 2, 'aaa', 20, '2', 'sp_1.png', 123);
INSERT INTO `chitietdonhang` VALUES (28, 62, 21, 'Vũ Tiến Long 2', '0392127565', 'hn', 'chanh thôn', 1, 2, 'long1', 20, '3', 'sp_2.png', 123);



-- ----------------------------
-- Table structure for thongbao
-- ----------------------------
DROP TABLE IF EXISTS `thongbao`;
CREATE TABLE `thongbao`  (
  `ma_thong_bao` int NOT NULL AUTO_INCREMENT,
  `thoi_gian` datetime(0) NOT NULL,
  `ma_don_hang` int NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trang_thai` int NOT NULL,
  PRIMARY KEY (`ma_thong_bao`) USING BTREE,
  INDEX `ma_don_hang2`(`ma_don_hang`) USING BTREE,
  CONSTRAINT `ma_don_hang2` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`ma_don_hang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of thongbao
-- ----------------------------
INSERT INTO `thongbao` VALUES (20, '2021-11-30 12:40:34', 57, 'Đơn hàng có mã 57 đang giao', 1);
INSERT INTO `thongbao` VALUES (21, '2021-11-30 12:48:07', 57, 'Đơn hàng có mã 57 đã được duyệt', 1);
INSERT INTO `thongbao` VALUES (22, '2021-11-30 13:29:50', 57, 'Đơn hàng có mã 57 đã được duyệt', 1);
INSERT INTO `thongbao` VALUES (23, '2021-12-01 10:59:48', 61, 'Đơn hàng có mã 61 đã được duyệt', 0);
INSERT INTO `thongbao` VALUES (24, '2021-12-01 10:59:50', 61, 'Đơn hàng có mã 61 đang giao', 0);
INSERT INTO `thongbao` VALUES (25, '2021-12-01 11:08:12', 62, 'Đơn hàng có mã 62 đã được duyệt', 0);
INSERT INTO `thongbao` VALUES (26, '2021-12-01 11:08:14', 62, 'Đơn hàng có mã 62 đang giao', 0);

SET FOREIGN_KEY_CHECKS = 1;
