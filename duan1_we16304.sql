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

 Date: 13/11/2021 17:02:13
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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (3, 'banner_mu2.png', 1);
INSERT INTO `banner` VALUES (6, 'bannerFPTPOLY.jpg', 1);
INSERT INTO `banner` VALUES (7, '486802_662286753798557_944341799_n.png', 1);

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
  CONSTRAINT `ma_kh_bl` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `ma_sp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of binhluan
-- ----------------------------
INSERT INTO `binhluan` VALUES (6, 'Đ', 1, 2, '2021-11-08 17:37:44', 2);

-- ----------------------------
-- Table structure for gopy
-- ----------------------------
DROP TABLE IF EXISTS `gopy`;
CREATE TABLE `gopy`  (
  `ma_dg` int NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_kh` int NOT NULL,
  `ngay_nhap` datetime(0) NOT NULL,
  PRIMARY KEY (`ma_dg`) USING BTREE,
  INDEX `ma_kh_dg`(`ma_kh`) USING BTREE,
  CONSTRAINT `ma_kh_dg` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gopy
-- ----------------------------
INSERT INTO `gopy` VALUES (3, 'hay', 2, '2021-11-02 22:58:41');

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
  PRIMARY KEY (`ma_kh`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES (1, 'longvt123', '111111', 'abc123', 'bruno-fernandes.jpg', 0, 'abc@gmail.com', 1, 'hn', '0392127565');
INSERT INTO `khachhang` VALUES (2, 'ph1404711', '$2y$10$l.lYcpx9X6s6FVD1R88r.uZ1g9.rf1tj3bpSOhlAVhkDnicywMH2a', 'Vũ Tiến Long', '123.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745');
INSERT INTO `khachhang` VALUES (7, 'ph140481', '$2y$10$Itm4QgcLhUVbFu1AllkhWujRqDlCU/115PRyKW//2.WWcNQc7uoD.', 'Nguyễn Văn Đức', 'cam (8)_jkvx.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745');
INSERT INTO `khachhang` VALUES (8, 'qqqwwqw', '$2y$10$YAmDm0YZd6dUkeyfrcxFvOs8MAyKBl/F0lrY1504vx50x7pOW1mXC', 'Vũ Tiến Long', '123.jpg', 0, 'tllong20002@gmail.com', 0, 'hn', '+84378923745');

-- ----------------------------
-- Table structure for loaihang
-- ----------------------------
DROP TABLE IF EXISTS `loaihang`;
CREATE TABLE `loaihang`  (
  `ma_loai` int NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`ma_loai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loaihang
-- ----------------------------
INSERT INTO `loaihang` VALUES (1, 'Ô tô', 1);
INSERT INTO `loaihang` VALUES (2, 'Xe máy z', 1);
INSERT INTO `loaihang` VALUES (23, 'Xiaomi 2', 1);
INSERT INTO `loaihang` VALUES (24, 'xu hào', 1);
INSERT INTO `loaihang` VALUES (25, 'Xe máy', 1);
INSERT INTO `loaihang` VALUES (26, 'Xiaomi', 0);

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
  `hinh2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_sp`) USING BTREE,
  INDEX `maloai`(`maloai`) USING BTREE,
  CONSTRAINT `maloai` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`ma_loai`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO `sanpham` VALUES (1, 'Chà chuyền thống', '521712f217e8b627b11933f8e61d7313.jpg', 1, 10000, 1, '2021-11-07', ' aa ', 0, 17, 1, '');
INSERT INTO `sanpham` VALUES (5, 'long1221', 'b9039f9f928520b2d08ad2624c869574.jpg', 0, 10000, 12, '2021-11-07', '    Welcome to TinyMCE!  ', 0, 1, 1, '');
INSERT INTO `sanpham` VALUES (6, 'long1221', '34a2812aa4edfdb04c92cdce491b1250.jpg', 0, 12, 1, '2021-11-03', '    Welcome to TinyMCE!  ', 0, 1, 1, '');
INSERT INTO `sanpham` VALUES (7, 'aa', '3ca99c43509177.58f0eb98d3f90.jpg', 0, 12, 1, '2021-11-07', '    Welcome to TinyMCE!  ', 0, 1, 1, '');
INSERT INTO `sanpham` VALUES (8, 'long1221', 'bruno-fernandes.jpg', 0, 12, 1, '2021-11-07', '    Welcome to TinyMCE!  ', 0, 19, 1, '');
INSERT INTO `sanpham` VALUES (14, 'abc', 'messi.jpg', 0, 12000, 10, '2021-11-07', '   Welcome to TinyMCE! ', 1, 0, 25, '');
INSERT INTO `sanpham` VALUES (15, 'long12122', 'c55e05fc3f7ceb39664107694b1d1265.jpg', 0, 12, 1, '2021-11-12', ' You are welcome ! ', 0, 0, 24, '');
INSERT INTO `sanpham` VALUES (16, 'Truyền thống', 'chuẩn.jpg', 0, 123, 1, '2021-11-12', ' You are welcome ! ', 0, 0, 1, '');
INSERT INTO `sanpham` VALUES (17, 'abcde', 'cam (8)_jkvx.jpg', 0, 12, 1, '2021-11-12', ' You are welcome ! ', 0, 0, 1, '');
INSERT INTO `sanpham` VALUES (18, 'Cam xả', 'gái.jpg', 0, 123, 11, '2021-11-12', ' You are welcome ! ', 0, 4, 1, '');
INSERT INTO `sanpham` VALUES (19, 'long1221aa', 'bruno-fernandes.jpg', 0, 33, 11, '2021-11-11', ' You are welcome ! ', 0, 25, 1, '');
INSERT INTO `sanpham` VALUES (20, 'long12122a', 'l6.jpg', 0, 12, 1, '2021-11-12', ' You are welcome ! ', 0, 1, 2, '');
INSERT INTO `sanpham` VALUES (21, 'long1', 'c55e05fc3f7ceb39664107694b1d1265.jpg', 0, 123, 1, '2021-11-11', ' You are welcome ! ', 0, 12, 1, '');
INSERT INTO `sanpham` VALUES (22, 'long2', '1470302452-anh-5.jpg', 0, 12, 12, '2021-11-11', ' You are welcome ! ', 0, 1, 1, '');
INSERT INTO `sanpham` VALUES (23, 'hhh', '5fd0537ef0cbf9efd48c975209f74a8c.jpg', 0, 12, 1, '2021-11-05', ' You are welcome ! ', 0, 6, 23, '');
INSERT INTO `sanpham` VALUES (24, 'aaa', 'chuatamchuc2.jpg', 0, 123, 1, '2021-11-11', '  You are welcome !  ', 0, 6, 2, '4dcc794c1e889e289883ad62921dbda1.jpg');
INSERT INTO `sanpham` VALUES (25, 'long1221', 'glx11-15511546129102068765592.jpg', 0, 12, 1, '2021-11-12', '  You are welcome !  ', 0, 143, 1, 'photo-1473187983305-f615310e7daa.jpeg');
INSERT INTO `sanpham` VALUES (26, 'long1221', 'lamborghini.jpeg', 0, 123, 11, '2021-11-12', '  You are welcome !  ', 0, 48, 1, 'mauLAB5.jpg');
INSERT INTO `sanpham` VALUES (27, 'Trà chanh truyền thống', 'photo-1472591339360-3d2c23f5a619.jpeg', 0, 123, 12, '2021-11-12', ' You are welcome ! ', 0, 1, 1, 'photo-1508357941501-0924cf312bbd.jpg');

SET FOREIGN_KEY_CHECKS = 1;
