
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 10 Octobre 2017 à 14:25
-- Version du serveur: 10.1.24-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u676255418_t`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `tendangnhap`, `matkhau`) VALUES
(1, 'dvh123', 'dvh123');

-- --------------------------------------------------------

--
-- Structure de la table `baohanh`
--

CREATE TABLE IF NOT EXISTS `baohanh` (
  `bh_id` int(10) NOT NULL AUTO_INCREMENT,
  `bh_thoigian` date NOT NULL,
  `bh_mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bh_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `bophan`
--

CREATE TABLE IF NOT EXISTS `bophan` (
  `bp_id` int(100) NOT NULL AUTO_INCREMENT,
  `bp_tenbophan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bp_mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `bophan`
--

INSERT INTO `bophan` (`bp_id`, `bp_tenbophan`, `bp_mota`) VALUES
(1, 'Quản trị tin tức', ''),
(2, 'Quản trị sản phẩm', ''),
(3, 'Vận chuyển', ''),
(4, 'Chăm sóc khách hàng', ''),
(5, 'Xử lý đơn hàng', '');

-- --------------------------------------------------------

--
-- Structure de la table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `dh_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`dh_id`, `sp_id`, `soluong`, `dongia`) VALUES
(14, 31, 4, 11500000),
(15, 31, 1, 12500000),
(14, 32, 1, 11500000),
(14, 33, 1, 11500000),
(18, 35, 1, 12200000),
(17, 36, 1, 12000000),
(20, 37, 1, 9200000),
(31, 38, 1, 8200000),
(30, 39, 1, 13000000),
(29, 40, 1, 12500000),
(33, 41, 1, 18000000),
(36, 42, 1, 14500000),
(37, 43, 1, 24000000),
(15, 44, 1, 12500000),
(38, 45, 1, 31000000),
(32, 47, 1, 21000000),
(28, 48, 1, 10500000),
(27, 49, 1, 25000000),
(18, 50, 1, 12200000),
(37, 51, 1, 24000000),
(15, 51, 1, 12500000),
(52, 14, 1, 11500000),
(52, 15, 1, 12500000),
(53, 15, 1, 12500000);

-- --------------------------------------------------------

--
-- Structure de la table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `dh_id` int(100) NOT NULL AUTO_INCREMENT,
  `id_khach` int(11) NOT NULL DEFAULT '1',
  `id_user` int(11) NOT NULL,
  `dh_ngaydat` date NOT NULL,
  `dh_trangthai` tinyint(4) NOT NULL,
  PRIMARY KEY (`dh_id`),
  KEY `id_khach` (`id_khach`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Contenu de la table `donhang`
--

INSERT INTO `donhang` (`dh_id`, `id_khach`, `id_user`, `dh_ngaydat`, `dh_trangthai`) VALUES
(31, 1, 4, '2017-04-29', 1),
(32, 1, 6, '2017-04-29', 1),
(33, 2, 1, '2017-04-29', 0),
(34, 3, 1, '2017-04-29', 0),
(36, 1, 8, '2017-04-29', 0),
(37, 1, 9, '2017-04-29', 0),
(38, 1, 10, '2017-04-29', 0),
(39, 1, 10, '2017-04-29', 0),
(40, 1, 11, '2017-04-29', 0),
(41, 1, 12, '2017-04-29', 0),
(42, 1, 13, '2017-04-29', 0),
(43, 1, 14, '2017-04-29', 0),
(44, 4, 1, '2017-04-29', 0),
(45, 5, 1, '2017-04-29', 0),
(46, 6, 1, '2017-04-29', 0),
(47, 7, 1, '2017-04-29', 0),
(48, 8, 1, '2017-04-29', 0),
(49, 9, 1, '2017-04-29', 0),
(50, 10, 1, '2017-04-29', 0),
(51, 11, 1, '2017-05-01', 0),
(52, 12, 1, '2017-05-01', 0),
(53, 13, 1, '2017-05-02', 0);

-- --------------------------------------------------------

--
-- Structure de la table `hangsanxuat`
--

CREATE TABLE IF NOT EXISTS `hangsanxuat` (
  `hsx_id` int(100) NOT NULL AUTO_INCREMENT,
  `hsx_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hsx_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`hsx_id`, `hsx_ten`) VALUES
(5, 'Dell'),
(6, 'Asus'),
(7, 'Acer'),
(8, 'HP'),
(9, 'SamSung'),
(10, 'Lennovo'),
(11, 'APPLE MACINTOSH (MAC)');

-- --------------------------------------------------------

--
-- Structure de la table `hethongcuahang`
--

CREATE TABLE IF NOT EXISTS `hethongcuahang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` int(11) NOT NULL,
  `idnv` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `hethongcuahang`
--

INSERT INTO `hethongcuahang` (`id`, `noidung`, `ngaynhap`, `idnv`) VALUES
(1, 'Phạm Quang Toàn', 2022017, 1),
(2, 'Phạm Quang Toàn\r\n1309564\r\nCNTT3-K54', 20517, 1);

-- --------------------------------------------------------

--
-- Structure de la table `khach`
--

CREATE TABLE IF NOT EXISTS `khach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `khach`
--

INSERT INTO `khach` (`id`, `ten`, `sodienthoai`, `diachi`, `email`) VALUES
(1, 'vanhuy160795', '0123456789', 'hanoi', 'qwertyuio'),
(2, 'toanabc', '0965547316', 'hanoi', 'anhtoan9x5pqt@gmail.com'),
(3, 'toanabd', '0965547316', 'hanoi', 'abc123@gmail.com'),
(4, 'PhanVanTung', '0123456789', 'hanoi', 'pvt123@gmail.com'),
(5, 'NguyenThiHoa', '0987653265', 'ha noi', 'nth123@gmail.com'),
(6, 'PhamThiHang', '0965235547', 'Hanoi', 'pth123@gmail.com'),
(7, 'NguyenVanManh', '0963632532', 'hanoi', 'nvm123@gmail.com'),
(8, 'DoVanDung', '0965845632', 'hanoi', 'dvd123@gmail.com'),
(9, 'LuongVanNam', '0956253565', 'hanoi', 'lvn123@gmail.com'),
(10, 'PhamThiQuyen', '0965856523', 'hanoi', 'ptq123@gmail.com'),
(11, 'dfsdgfdghg', '1243245433', '1', 'dvhuy160795@gmail.com'),
(12, 'afgffhj', '1243245433', '121', 'dvhuy160795@gmail.com'),
(13, 'vanhuy', '0123456789', 'hanoi', 'dvhuy160795@gmail.com'),
(14, 'toanabcd', '0965845362', 'hà nội', 'toanabcd123@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `user_loaitk` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `khachhang`
--

INSERT INTO `khachhang` (`user_id`, `user_ten`, `user_diachi`, `user_sodienthoai`, `user_email`, `user_name`, `user_pass`, `user_loaitk`) VALUES
(1, 'qwertyu', 'qwertyyuu', '123456798', 'qwertyuoiop', 'qweyuio', 'qwertuiuioi', 1),
(3, 'vanhuy', 'vanhuy160795', '0123456789', 'dvhuy160795@gmail.com', 'dvh123', 'dvh123', 0),
(4, 'toan', 'hà nội', '0965547315', 'anhtoan9x5.pqt@gmail.com', 'toan123', 'toan123', 0),
(5, 'toan2', 'hanoi', '0965235655', 'anhtoan9x5.pqt@gmail.com', 'toan2', 'toan2', 0),
(6, 'toan222', 'hanoi', '0965235655', 'anhtoan9x5.pqt@gmail.com', 'toan222', 'toan222', 0),
(7, 'toan444', 'toan444', '0965235655', 'anhtoan9x5.pqt@gmail.com', 'toan444', 'toan444', 0),
(8, 'Phạm Văn Nam', 'hanoi', '0965235655', 'pvn123@gmail.com', 'PVN123', 'pvn123', 0),
(9, 'Nguyễn Thị Linh', 'hanoi', '09653266556', 'ntl123@gmail.com', 'NTL123', 'ntl123', 0),
(10, 'Đỗ Văn Nam', 'hanoi', '0965235655', 'dvn123', 'dvn123', 'dvn123', 0),
(11, 'Phạm Quang Trung', 'hanoi', '09653656558', 'pqt123@gmail.com', 'pqt123', 'pqt123', 0),
(12, 'PhạmVăn Đại', 'hanoi', '0123456842', 'pvd123@gmail.com', 'pvd123', 'pvd123', 0),
(13, 'Đào Thị Nhi', 'hanoi', '0965547315', 'dtn123@gmail.com', 'dtn123', 'dtn123', 0),
(14, 'Nguyễn văn Long', 'hanoi', '0965547345', 'nvl123@gmail.com', 'nvl123', 'nvl123', 0);

-- --------------------------------------------------------

--
-- Structure de la table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `idnv` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `lienhe`
--

INSERT INTO `lienhe` (`id`, `noidung`, `ngaynhap`, `idnv`) VALUES
(1, 'Phạm Quang Toàn\r\n0965547316\r\nBa Đình- Hà Nội', '2017-05-01', 0);

-- --------------------------------------------------------

--
-- Structure de la table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `lsp_id` int(100) NOT NULL AUTO_INCREMENT,
  `lsp_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lsp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `loaisanpham`
--

INSERT INTO `loaisanpham` (`lsp_id`, `lsp_ten`) VALUES
(1, 'máy tính'),
(2, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Structure de la table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `nv_id` int(100) NOT NULL AUTO_INCREMENT,
  `nv_idbophan` int(100) NOT NULL,
  `nv_tennv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nv_tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nv_matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nv_sdt` text COLLATE utf8_unicode_ci NOT NULL,
  `nv_quequan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nv_tuoi` text COLLATE utf8_unicode_ci NOT NULL,
  `nv_ngayvaolam` date NOT NULL,
  `nv_mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nv_anh` text COLLATE utf8_unicode_ci NOT NULL,
  `nv_tinhtrang` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Contenu de la table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_id`, `nv_idbophan`, `nv_tennv`, `nv_tendangnhap`, `nv_matkhau`, `nv_sdt`, `nv_quequan`, `nv_tuoi`, `nv_ngayvaolam`, `nv_mota`, `nv_anh`, `nv_tinhtrang`) VALUES
(15, 4, '1', 'vanhuy160795', 'vanhuy', '42354', '3', '4', '2017-04-30', '', 'chitietdonhang.PNG', 0),
(16, 2, 'Trần Văn Sơn', 'tvs123', 'tvs123', '0965856235', 'Hà nội', '1995', '2017-05-01', 'Nhân viên bán hàng', 'a1.jpg', 1),
(17, 2, 'Võ Đức Sỹ', 'vds123', 'vds123', '0965235415', 'Hà nội', '1994', '2017-05-01', 'nhân viên bán hàng', 'a2.jpg', 0),
(18, 4, 'Nguyễn Thị Lan', 'ntl123', 'ntl123', '0965845213', 'hà nội', '1993', '2017-05-01', 'chăm sóc khách hàng', 'a3.jpg', 0),
(19, 4, 'Trần Thị Lý', 'ttl123', 'ttl123', '0955663351', 'Hà nội', '1995', '2017-05-01', 'chăm sóc khách hàng', 'a4.jpg', 0),
(20, 1, 'Nguyễn Thị Liễu', 'ntl1234', 'ntl1234', '0965865235', 'Hà nội', '1994', '2017-05-01', 'Tin tức', 'a5.jpg', 0),
(21, 1, 'Vũ Văn Quyết', 'vvq123', 'vvq123', '096587452', 'Hà nội', '1993', '2017-05-01', 'Tin Tức', 'a6.jpg', 0),
(22, 3, 'Phạm Văn Minh', 'pvm123', 'pvm123', '0965845123', 'Hà nội', '1995', '2017-05-01', 'vận chuyển', 'a7.jpg', 1),
(23, 3, 'Hồ Văn Trung', 'hvt123', 'hvt123', '0965231452', 'Hà nội', '1994', '2017-05-01', 'Vận chuyển', 'a8.jpg', 0),
(24, 5, 'Trần Quốc Kỳ', '', '', '0958452365', 'Hà nội', '1993', '2017-05-01', 'Xử lí đơn hàng', 'a9.jpg', 0),
(25, 5, 'Nguyễn Văn Tiến', 'nvt123', 'nvt123', '09658456235', 'Hà nội', '1996', '2017-05-01', 'Xử Lý đơn hàng', 'a10.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `sp_id` int(100) NOT NULL AUTO_INCREMENT,
  `sp_tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` int(11) NOT NULL,
  `sp_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sp_anhphu3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sp_anhphu2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sp_anhphu1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `sp_motangan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sp_giamgia` int(11) NOT NULL,
  `sp_idloai` int(11) NOT NULL,
  `sp_ngaynhap` date NOT NULL,
  `sp_ngaysua` date DEFAULT '0000-00-00',
  `sp_soluong` int(11) NOT NULL,
  `sp_HSX` int(11) NOT NULL,
  `sp_baohanh` int(11) NOT NULL,
  `sp_view` int(11) NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Contenu de la table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_tensanpham`, `sp_gia`, `sp_anh`, `sp_anhphu3`, `sp_anhphu2`, `sp_anhphu1`, `sp_mota`, `sp_motangan`, `sp_giamgia`, `sp_idloai`, `sp_ngaynhap`, `sp_ngaysua`, `sp_soluong`, `sp_HSX`, `sp_baohanh`, `sp_view`) VALUES
(14, 'LAPTOP DELL VOSTRO 3459 -70071892', 11500000, '30557_20443_laptop-dell-vostro-3459-70071892.jpg', '30749_20443_laptop-dell-vostro-3459-70071892.jpg', '30559_20443_laptop-dell-vostro-3459-70071892.jpg', '30558_20443_laptop-dell-vostro-3459-70071892.jpg', '', '<p>Vostro 3459 c&oacute; thiết kế ngoại h&igrave;n', 5, 1, '2017-04-29', '2017-04-30', 5, 5, 36, 52),
(15, 'LAPTOP DELL INS 3459 - C3I51105', 12500000, '30560_20444_laptop-dell-ins-3459-c3i51105.jpg', '30560_20444_laptop-dell-ins-3459-c3i51105.jpg', '30748_20444_laptop-dell-ins-3459-c3i51105.jpg', '30561_20444_laptop-dell-ins-3459-c3i51105.jpg', '<p>Vẻ ngoài bóng b&acirc;̉y, chắc chắn&nbsp;th&ecirc;̉ hi&ecirc;̣n​ sự nam tính<br />\r\nB&agrave;n ph&iacute;m&nbsp;kế r&ocirc;̣ng rãi, các phím có đ&ocirc;̣ nảy&nbsp;t&ocirc;́t, có th&ecirc;̉ làm vi&ecirc;̣c&nbsp;cả trong phòng t&ocirc;́i<br />\r\nC&ocirc;ng nghệ tiết kiệm pin mới Ultra Low Voltage cho bạn thời gian dùng đến&nbsp;5 giờ</p>\r\n', '<p>Vẻ ngoài bóng b&acirc;̉y, chắc chắn&nbsp;t', 2, 0, '2017-04-29', '0000-00-00', 7, 5, 12, 69),
(16, 'LAPTOP DELL VOSTRO 3568 - VTI35037W KABYLAKE', 11340000, 'a.jpg', '30749_20443_laptop-dell-vostro-3459-70071892.jpg', '636150603969923874_Dell-Ins-N3558-14.jpg', '636150603967583829_Dell-Ins-N3558-10.jpg', '<p>LAPTOP DELL VOSTRO 3568 - VTI35037W KABYLAKE sở hữu thiết kế mang nhiều n&eacute;t đặc trưng của những người tiền nhiệm, mang đến cảm gi&aacute;c hiện đại v&agrave; cứng c&aacute;p. Th&ecirc;m v&agrave;o đ&oacute;, m&aacute;y cũng sở hữu một cấu h&igrave;nh ph&ugrave; hợp với tầm gi&aacute;, đủ sức đ&aacute;p ứng tốt c&aacute;c nhu cầu sử dụng của người d&ugrave;ng.</p>\r\n', '<p>Dell Inspiron N3558 sở hữu thiết kế mang nhiều ', 0, 0, '2017-04-29', '0000-00-00', 0, 5, 12, 6),
(17, 'LAPTOP DELL VOSTRO - B231105', 12000000, 'c.jpg', 'laptop-dell-vostro-3568-vti35037w-kabylake-win10-fingerprint-zO6atW.jpg', 'laptop-dell-vostro-3568-vti35037w-kabylake-win10-fingerprint-rM5s08.jpg', '30559_20443_laptop-dell-vostro-3459-70071892.jpg', '', '', 0, 0, '2017-04-29', '0000-00-00', 0, 5, 12, 31),
(18, 'LAPTOP DELL INS 3458 - TXTGH2', 12200000, 'd.jpg', 'laptop-dell-vostro-3568-vti35037w-kabylake-win10-fingerprint-zO6atW.jpg', '30561_20444_laptop-dell-ins-3459-c3i51105.jpg', 'laptop-dell-vostro-3568-vti35037w-kabylake-win10-fingerprint-rM5s08.jpg', '', '', 0, 0, '2017-04-29', '0000-00-00', 0, 5, 12, 2),
(19, 'LAPTOP ACER ES1-531-C9B8(NX.MZ8SV.005)', 8200000, 'k.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 5, 7, 12, 3),
(20, 'LAPTOP ACER Z1402-35NV', 9200000, 'l.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 6, 5, 12, 1),
(21, 'LAPTOP ACER ES1-531-C9B8(NX.MZ8SV.005)', 8400000, 'm.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 6, 5, 12, 1),
(22, 'LAPTOP ACER E5-575-37QS KABYLAKE', 10590000, 'n.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 6, 5, 12, 0),
(23, 'LAPTOP ACER ES1-531 C6BT', 9100000, 'o.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 7, 5, 12, 2),
(24, 'LAPTOP ACER E5-574-571T', 11390000, 's.jpg', '14.jpg', '13.jpg', '12.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 7, 5, 12, 0),
(25, 'LAPTOP ASUS E402SA-WX043D', 7800000, 'e.jpg', '22.jpg', '23.jpg', '21.jpg', '', '', 1, 0, '2017-04-29', '0000-00-00', 7, 5, 12, 0),
(26, 'LAPTOP ASUS E502SA-XX024D ', 9100000, 'b.jpg', '23.jpg', '22.jpg', '21.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 6, 5, 12, 0),
(27, 'LAPTOP HP SPECTRE X360 13-AC028TU 1HP09PA WIN10', 25000000, '31.jpg', '31.jpg', '33.jpg', '32.jpg', '', '', 5, 0, '2017-04-29', '0000-00-00', 5, 8, 24, 3),
(28, 'LAPTOP HP PAVILION 15-AU024TU(X3B97PA)', 10500000, '34.jpg', '34.jpg', '36.jpg', '35.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 5, 8, 12, 1),
(29, 'LAPTOP HP PAVILION 15-AU023TU(X3B96PA) (MÀU BẠC)', 12500000, '37.jpg', '37.jpg', '39.jpg', '38.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 6, 8, 12, 1),
(30, 'LAPTOP ASUS K501UB-DM039D FHD VGA 2GB ALU', 13000000, '41.jpg', '44.jpg', '43.jpg', '42.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 5, 6, 12, 1),
(31, 'LAPTOP ASUS X441SA-WX021D', 8200000, '45.jpg', '45.jpg', '47.jpg', '46.jpg', '', '', 1, 0, '2017-04-29', '0000-00-00', 6, 6, 12, 2),
(32, 'SAMSUNG NP900X3L-K06US', 21000000, '48.jpg', '48.jpg', '50.jpg', '49.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 6, 9, 12, 6),
(33, 'SAMSUNG NP940Z5L-X01US', 18000000, '51.jpg', '51.jpg', '53.jpg', '52.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 5, 9, 12, 1),
(34, 'LAPTOP LENOVO IDEAPAD 310 - 15ISK - 80SM005CVN VGA 2GB', 12000000, '54.jpg', '54.jpg', '56.jpg', '55.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 4, 10, 12, 0),
(35, 'LAPTOP LENOVO IDEAPAD 100-15IBD 80QQ018MVN', 8900000, '57.jpg', '57.jpg', '59.jpg', '58.jpg', '', '', 1, 0, '2017-04-29', '0000-00-00', 5, 10, 12, 2),
(36, 'LAPTOP LENOVO YOGA 500-80N400JWVN TOUCH WIN10 BLACK', 14500000, '60.jpg', '60.jpg', '61.jpg', '62.jpg', '', '', 3, 0, '2017-04-29', '0000-00-00', 6, 10, 12, 4),
(37, 'Laptop Apple Macbook Air MMGF2ZP/A i5 5250U/8GB/128GB', 24000000, '63.jpg', '63.jpg', '65.jpg', '64.jpg', '', '', 2, 0, '2017-04-29', '0000-00-00', 6, 11, 12, 1),
(38, 'Laptop Apple Macbook 12', 31000000, '66.jpg', '69.jpg', '68.jpg', '67.jpg', '', '', 3, 0, '2017-04-29', '2017-04-30', 5, 5, 12, 2),
(42, 'Tai nghe V-moda M-100', 210000, 'tn.jpg', '', '', '', '', '', 0, 2, '2017-05-01', '0000-00-00', 4, 9, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `thongsokythuat`
--

CREATE TABLE IF NOT EXISTS `thongsokythuat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_id` int(11) NOT NULL,
  `thongso1` text COLLATE utf8_unicode_ci NOT NULL,
  `thongso2` text COLLATE utf8_unicode_ci NOT NULL,
  `thongso3` text COLLATE utf8_unicode_ci NOT NULL,
  `thongso4` text COLLATE utf8_unicode_ci NOT NULL,
  `thongso5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Contenu de la table `thongsokythuat`
--

INSERT INTO `thongsokythuat` (`id`, `sp_id`, `thongso1`, `thongso2`, `thongso3`, `thongso4`, `thongso5`) VALUES
(1, 12, '12', '12', '123454t', 'wergerhtr', 'wertrtytr'),
(3, 14, '<p>Bộ xử l&yacute;</p>\r\n\r\n<p>H&atilde;ng CPU</p>\r\n\r\n<p>Intel</p>\r\n\r\n<p>C&ocirc;ng nghệ CPU</p>\r\n\r\n<p>Core i5</p>\r\n\r\n<p>Thế hệ</p>\r\n\r\n<p>Skylake</p>\r\n\r\n<p>Loại CPU</p>\r\n\r\n<p>6200U</p>\r\n\r\n<p>Tốc độ CPU</p>\r\n\r\n<p>2.3 Ghz</p>\r\n\r\n<p>Bộ nhớ đệm</p>\r\n\r\n<p>3 MB</p>\r\n\r\n<p>Tốc độ tối đa</p>\r\n\r\n<p>2.8 Ghz</p>\r\n', '<p>Bộ nhớ</p>\r\n\r\n<p>RAM</p>\r\n\r\n<p>4 GB</p>\r\n\r\n<p>Loại RAM</p>\r\n\r\n<p>DDR3L</p>\r\n\r\n<p>Tốc độ Bus</p>\r\n\r\n<p>1600 MHz</p>\r\n\r\n<p>Hỗ trợ RAM tối đa</p>\r\n\r\n<p>16 GB</p>\r\n', '<p>Đĩa cứng</p>\r\n\r\n<p>Dung lượng HDD</p>\r\n\r\n<p>500 GB</p>\r\n', '<p>M&agrave;n h&igrave;nh</p>\r\n\r\n<p>M&agrave;n h&igrave;nh</p>\r\n\r\n<p>14 inch</p>\r\n\r\n<p>Độ ph&acirc;n giải (W x H)</p>\r\n\r\n<p>HD (1366 x 768 pixels)</p>\r\n\r\n<p>C&ocirc;ng nghệ MH</p>\r\n\r\n<p>LED Backlit, Anti-glare</p>\r\n\r\n<p>M&agrave;n h&igrave;nh cảm ứng</p>\r\n\r\n<p>Kh&ocirc;ng cảm ứng</p>\r\n', '<p>Th&ocirc;ng tin kh&aacute;c</p>\r\n\r\n<p>Webcam</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Th&ocirc;ng tin Pin</p>\r\n\r\n<p>4 cell</p>\r\n\r\n<p>Card Reader</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Năm sản xuất</p>\r\n\r\n<p>Sản phẩm mới 2016</p>\r\n\r\n<p>Chất liệu</p>\r\n\r\n<p>Vỏ nhựa</p>\r\n'),
(4, 15, '', '', '', '', ''),
(5, 16, '', '', '', '', ''),
(6, 17, '', '', '', '', ''),
(7, 18, '', '', '', '', ''),
(8, 19, '', '', '', '', ''),
(9, 20, '', '', '', '', ''),
(10, 21, '', '', '', '', ''),
(11, 22, '', '', '', '', ''),
(12, 23, '', '', '', '', ''),
(13, 24, '', '', '', '', ''),
(14, 25, '', '', '', '', ''),
(15, 26, '', '', '', '', ''),
(16, 27, '', '', '', '', ''),
(17, 28, '', '', '', '', ''),
(18, 29, '', '', '', '', ''),
(19, 30, '', '', '', '', ''),
(20, 31, '', '', '', '', ''),
(21, 32, '', '', '', '', ''),
(22, 33, '', '', '', '', ''),
(23, 34, '', '', '', '', ''),
(24, 35, '', '', '', '', ''),
(25, 36, '', '', '', '', ''),
(26, 37, '', '', '', '', ''),
(27, 38, '', '', '', '', ''),
(28, 39, '<p>dfghghj</p>\r\n', '<p>sghghj</p>\r\n', '<p>fghghgf</p>\r\n', '<p>shgdfghgf</p>\r\n', '<p>sghdfghf</p>\r\n'),
(29, 40, '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n'),
(30, 41, '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n'),
(31, 42, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tt_tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tt_noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tt_ngaycapnhat` date NOT NULL,
  `tt_ngaysua` date NOT NULL DEFAULT '0000-00-00',
  `tt_idnv` int(11) NOT NULL,
  PRIMARY KEY (`tt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tintuc`
--

INSERT INTO `tintuc` (`tt_id`, `tt_tieude`, `tt_noidung`, `tt_ngaycapnhat`, `tt_ngaysua`, `tt_idnv`) VALUES
(2, 'Hướng dẫn giải phóng hơn 20GB dung lượng lưu trữ trên Windows 10 sau khi lên Creators Update', 'Hướng dẫn giải phóng hơn 20GB dung lượng lưu trữ trên Windows 10 sau khi lên Creators Update\r\n[​IMG]\r\n​\r\nHôm nay, mình sẽ hướng dẫn bạn một cách đơn giản để giải phóng hơn 20GB dung lượng lưu trữ trên máy tính sau khi cài đặt Windows 10 Creators Update.\r\n\r\nNếu như bạn đang sử dụng trên máy tính hoặc một thiết bị khác chạy Windows, bạn có thể có cơ hội nâng cấp lên bản mới nhất của Windows. Nếu bạn chưa nâng cấp hãy đọc bài dưới, còn nếu đã nâng cấp, hãy cùng nhau làm các bước đơn giản để giải phóng dung lượng lưu trữ trên hệ điều hành của mình nhé.\r\nBước 1: Vào Start tìm kiếm Disk Cleanup, sau đó chọn cái đầu tiên và chạy nó lên.\r\n\r\n[​IMG]\r\n​\r\nBước 2: Disk Cleanup là một công cụ cho phép xóa các tập tin mà Windows cho là cần thiết để tạm thời lưu trữ trên đĩa cứng của bạn. Hãy chọn ổ đĩa thích hợp,ở đây mình chọn ổ C sau đó nhấn OK\r\n[​IMG]​\r\n\r\nBước 3: Bạn hãy nhấp vào Clean up system files để tiến hành quét toàn bộ các tệp tin của hệ thống.\r\n\r\n[​IMG]\r\n​\r\nBước 4: Một lần nữa bạn sẽ được yêu cầu chọn các tùy chọn để xóa các tệp tin không quan trọng của hệ thống. Bạn có thể chọn Previous Windows installations để xoá các file cài đặt cũ. Nhưng nếu muốn tối ưu dung lượng thì hãy chọn tất cả, sau đó nhấn OK.\r\n\r\n[​IMG]\r\n​\r\nBước 5: Sau khi bạn chắc chắn muốn xóa các tệp này vĩnh viễn, hãy nhấn OK.\r\n\r\n[​IMG]\r\n​\r\nBước 6: Quá trình xóa bắt đầu, nhưng vẫn có một thông báo, bạn hãy nhấn Yes nhé.\r\n\r\n[​IMG]\r\n​\r\nSau khi quá trình hoàn tất, bạn có thể kiểm tra lại để kiểm tra xem ổ cứng chúng ta đã giải phóng được bao nhiêu dung lượng nhé, đừng bất ngờ!', '2017-05-01', '2017-05-02', 0),
(4, 'Chỉ với một vài mẹo nhỏ, bạn sẽ có một trải nghiệm tuyệt vời hơn với cỗ máy tìm kiếm lớn nhất hành t', 'Chỉ với một vài mẹo nhỏ, bạn sẽ có một trải nghiệm tuyệt vời hơn với cỗ máy tìm kiếm lớn nhất hành tinh Google.\r\n\r\nNếu là một người dùng Google, có thể bạn đã từng trải qua tình huống này: Bạn gõ một từ khóa chính xác vào ô tìm kiếm và hy vọng các kết quả trả về sẽ có ích với bản thân. Google sau đó trả về cho bạn hàng triệu kết quả, tuy nhiên ở những dòng kết quả đầu tiên, những gì bạn cần vẫn... không xuất hiện.\r\n\r\nThực tế, mặc dù Google là công cụ tìm kiếm tốt nhất hiện nay và đang liên tục cải thiện thuật toán của mình, thế nhưng vẫn có nhiều lệnh tìm kiếm từ người dùng làm Google "đau đầu". Vì vậy, ông lớn Internet đã tạo ra những thủ thuật dưới đây để bạn và Google có thể "hiểu nhau" hơn.\r\n\r\nBạn đọc lưu ý, một số tính năng và thủ thuật bên dưới được phát triển đặc thù cho trang Google của mỗi thị trường khác nhau. Vì thế, có thể bạn chưa thể dùng chúng trên trang Google Việt Nam.\r\n', '2017-05-02', '2017-05-02', 0),
(5, 'CEO Mark Zuckerberg đã phát biểu trong một buổi hỏi đáp công khai rằng Facebook đang làm nút Dislike', 'Hãng tin CNBC cho biết hôm qua (15/9/2015) CEO Mark Zuckerberg đã phát biểu trong một buổi hỏi đáp công khai rằng Facebook đang làm nút Dislike hoặc một cái gì đó tương tự.\r\n \r\n \r\n\r\n \r\n \r\nTừ nhiều năm nay, mọi người vẫn thường hỏi liệu Facebook sẽ triển khai nút “Dislike” (không thích, phản đối) trên mạng xã hội lớn nhất thế giới hay không. Câu trả lời của Facebook vẫn luôn là Không.\r\n\r\nNgười dùng rất có lý và đó chỉ là một phản xạ hoàn toàn tự nhiên khi họ muốn nhìn thấy nút Dislike bên cạnh nút Like (thích), nhưng rõ ràng là có một số vấn đề với nút này. Facebook không muốn người dùng sử dụng nút Dislike để khiến người khác bẽ mặt hoặc thể hiện thái độ thiếu tôn trọng. Và, quan trọng hơn, Facebook không muốn người dùng nhìn thấy những bài viết quảng cáo bị quá nhiều lượt Dislike.\r\n\r\nTuy nhiên, hãng tin CNBC cho biết hôm qua CEO Mark Zuckerberg đã phát biểu trong một buổi hỏi đáp công khai rằng Facebook đang làm nút Dislike hoặc một cái gì đó tương tự. “Mọi người đã hỏi về nút Dislike trong suốt nhiều năm nay… và hôm nay là một ngày đặc biệt, vì cuối cùng tôi cũng phải nói rằng Facebook đang chuẩn bị mọi thứ để thử nghiệm nút Dislike”.\r\n \r\nKhông có nhiều thông tin chi tiết được công bố, nhưng Zuckerberg cho biết mục tiêu của Facebook là xây dựng nút Dislike theo cách mà nút này sẽ trở thành một công cụ để thể hiện “sự thấu cảm” thay vì để làm tổn thương ai đó. Ví dụ, bạn sẽ sử dụng nút này đối với bài viết thể hiện một tâm trạng buồn bã.\r\n \r\n“Chúng tôi không muốn biến Facebook thành một diễn đàn mà ở đó mọi người ngợi ca hoặc vùi dập những bài viết của người khác. Đó không phải là dạng cộng đồng mà chúng tôi muốn tạo ra”, Zuckerberg nói.', '2017-05-02', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `trogiup`
--

CREATE TABLE IF NOT EXISTS `trogiup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `idnv` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `trogiup`
--

INSERT INTO `trogiup` (`id`, `noidung`, `ngaynhap`, `idnv`) VALUES
(1, 'Mọi thắc mắc xin liên hệ:\r\nPhạm Quang Toàn 0965547316', '2017-05-02', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
