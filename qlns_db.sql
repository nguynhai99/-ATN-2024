-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2022 lúc 04:12 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlns_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baocom`
--

CREATE TABLE `tbl_baocom` (
  `ID` int(10) UNSIGNED NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baocom`
--

INSERT INTO `tbl_baocom` (`ID`, `username`, `HoTen`, `status`) VALUES
(1, 'phuongnl@tintuc.vn', 'Nguyễn Lan Phương', 0),
(2, 'phuongdt@tintuc.vn', 'Dương Tố Phương', 1),
(5, 'havtt@tintuc.vn', 'Vương Thị Thu Hà', 0),
(8, 'mypt@tintuc.vn', 'Phan Trà My', 1),
(9, 'hieunt@tintuc.vn', 'Nguyễn Trung Hiếu', 1),
(11, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 1),
(12, 'mydtt@tintuc.vn', 'Đỗ Thị Trà My', 1),
(13, 'uyenmt@tintuc.vn', 'Mai Tố Uyên', 1),
(19, 'ducvt@tintuc.vn', 'Vũ Trọng Đức', 1),
(20, 'duongnm@tintuc.vn', 'Nguyễn Minh Dương', 0),
(28, 'vietdv@tintuc.vn', 'Dương Văn Việt', 1),
(33, 'namtt@tintuc.vn', 'Trần Thị Nam', 1),
(36, 'nhattq@tintuc.vn', 'Trần Quốc Nhật', 1),
(39, 'hainc@tintuc.vn', 'Nguyễn Chí Hải', 1),
(41, 'namth@tintuc.vn', 'Tạ Hữu Năm', 1),
(55, 'huyenltt@tintuc.vn', 'Lê Thị Thu Huyền', 0),
(57, 'phuongnguyen5598@gmail.com', 'Nguyễn Thị Phương', 1),
(65, 'thanhhuyen09011999@gmail.com', 'Nguyễn Thị Thanh Huyền', 1),
(73, 'thoalt@tintuc.vn', 'Lê Thị Thoa', 1),
(76, 'anhpn@tintuc.vn', 'Phạm Ngọc Anh', 1),
(77, 'thuyle@tintuc.vn', 'Lê Thị Thúy', 1),
(78, 'huongltt@tintuc.vn', 'Lăng Thị Thu Hương', 1),
(79, 'quynhtt@tintuc.vn', 'Trịnh Thị Quỳnh', 1),
(81, 'nhaipt@tintuc.vn', 'Phạm Thị Nhài', 1),
(82, 'huent@tintuc.vn', 'Nguyễn Thị Huê', 1),
(83, 'anhbd@tintuc.vn', 'Bùi Đức Anh', 0),
(84, 'abc@gmail.com', 'abc@gmail.com', 0),
(85, 'test1@gmail.com', 'nguyễn văn a', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chucvu`
--

CREATE TABLE `tbl_chucvu` (
  `ID` int(11) NOT NULL,
  `TenCV` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chucvu`
--

INSERT INTO `tbl_chucvu` (`ID`, `TenCV`) VALUES
(1, 'Giám Đốc'),
(2, 'Trưởng bộ phận'),
(3, 'Biên tập viên'),
(4, 'Admin duyệt bài'),
(5, 'Lập trình PHP'),
(6, 'Marketing'),
(7, 'Nhân viên kiểm thử'),
(8, 'Kế toán'),
(9, 'Nhân viên kinh doanh'),
(10, 'HCNS'),
(11, 'Content'),
(12, 'Video Editor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_images`
--

CREATE TABLE `tbl_images` (
  `ID` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_images`
--

INSERT INTO `tbl_images` (`ID`, `id_user`, `username`, `name`, `images`, `status`) VALUES
(1, 0, 'huytv@tintuc.vn', '', 'profile-ava.jpg', 1),
(2, 0, 'haibd@tintuc.vn', '', 'profile-ava.jpg', 1),
(3, 0, 'huyenltt@tintuc.vn', '', 'profile-ava.jpg', 1),
(4, 0, 'namtt@tintuc.vn', '', 'profile-ava.jpg', 1),
(5, 0, 'mopt@tintuc.vn', '', 'profile-ava.jpg', 1),
(6, 0, 'thubtm@tintuc.vn', '', 'profile-ava.jpg', 1),
(7, 0, 'tuyetnt@tintuc.vn', '', 'profile-ava.jpg', 1),
(8, 0, 'hangnt@tintuc.vn', '', 'profile-ava.jpg', 1),
(9, 0, 'mydtt@tintuc.vn', '', 'profile-ava.jpg', 1),
(10, 0, 'diepnb@tintuc.vn', '', 'profile-ava.jpg', 1),
(11, 0, 'liendtb@tintuc.vn', '', 'profile-ava.jpg', 1),
(12, 0, 'giangntn@tintuc.vn', '', 'profile-ava.jpg', 1),
(13, 0, 'nguyetnm@tintuc.vn', '', 'profile-ava.jpg', 1),
(14, 0, 'nupt@tintuc.vn', '', 'profile-ava.jpg', 1),
(15, 0, 'hangptt@tintuc.vn', '', 'profile-ava.jpg', 1),
(16, 0, 'namth@tintuc.vn', '', 'profile-ava.jpg', 1),
(17, 0, 'trangmh@tintuc.vn', '', 'profile-ava.jpg', 1),
(18, 0, 'hiennt@tintuc.vn', '', 'profile-ava.jpg', 0),
(19, 0, 'phuongnl@tintuc.vn', '', 'profile-ava.jpg', 1),
(20, 0, 'anhpn@tintuc.vn', '', 'profile-ava.jpg', 1),
(21, 0, 'havtt@tintuc.vn', '', 'profile-ava.jpg', 1),
(22, 0, 'phuongdt@tintuc.vn', '', 'profile-ava.jpg', 1),
(23, 0, 'maitt@tintuc.vn', '', 'profile-ava.jpg', 1),
(24, 0, 'huent@tintuc.vn', '', 'profile-ava.jpg', 1),
(25, 0, 'huongltt@tintuc.vn', '', 'profile-ava.jpg', 1),
(26, 0, 'quyennth@tintuc.vn', '', 'profile-ava.jpg', 1),
(27, 0, 'mypt@tintuc.vn', '', 'profile-ava.jpg', 1),
(28, 0, 'ducvt@tintuc.vn', '', 'profile-ava.jpg', 1),
(29, 0, 'quannh@tintuc.vn', '', 'profile-ava.jpg', 1),
(30, 0, 'hieunt@tintuc.vn', '', 'profile-ava.jpg', 1),
(31, 0, 'duongnm@tintuc.vn', '', 'profile-ava.jpg', 1),
(32, 0, 'duongnh@tintuc.vn', '', 'profile-ava.jpg', 1),
(33, 0, 'nunt@tintuc.vn', '', 'profile-ava.jpg', 1),
(34, 0, 'tantt@tintuc.vn', '', 'profile-ava.jpg', 1),
(35, 0, 'quynhtt@tintuc.vn', '', 'profile-ava.jpg', 1),
(36, 0, 'linhnth@tintuc.vn', '', 'profile-ava.jpg', 1),
(37, 0, 'haht@tintuc.vn', '', 'profile-ava.jpg', 1),
(38, 0, 'tramdm@tintuc.vn', '', 'profile-ava.jpg', 1),
(39, 0, 'trangltt@tintuc.vn', '', 'profile-ava.jpg', 1),
(40, 0, 'thaind@tintuc.vn', '', 'profile-ava.jpg', 1),
(41, 0, 'hainc@tintuc.vn', '', 'profile-ava.jpg', 1),
(43, 0, 'oanhptm@tintuc.vn', '', 'profile-ava.jpg', 1),
(44, 0, 'uyenmt@tintuc.vn', '', 'profile-ava.jpg', 1),
(61, 0, 'admin@tintuc.vn', 'Nguyễn Thị Hạ Quyên', 'profile-ava.jpg', 1),
(62, 0, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 'profile-ava.jpg', 1),
(63, 0, 'hanhnt@tintuc.vn', 'Nguyễn Thị Hạnh', 'profile-ava.jpg', 1),
(64, 0, 'linhnt@tintuc.vn', 'Nguyễn Tuấn Linh', 'profile-ava.jpg', 1),
(65, 0, 'tramntn@tintuc.vn', 'Nguyễn Thị Ngọc Trâm', 'profile-ava.jpg', 1),
(66, 0, 'chihtl@tintuc.vn', 'Hoàng Thị Linh Chi', 'profile-ava.jpg', 1),
(67, 0, 'huyennt@tintuc.vn', 'Nguyễn Thị Huyền', 'profile-ava.jpg', 1),
(68, 0, 'binhtt@tintuc.vn', 'Tô Thị Bình', 'profile-ava.jpg', 1),
(69, 0, 'phuongvm@tintuc.vn', 'Vũ Minh Phương', 'profile-ava.jpg', 1),
(70, 0, 'huongntt@tintuc.vn', 'Nguyễn Thị Thúy Hường', 'profile-ava.jpg', 1),
(71, 0, 'nhidt@tintuc.vn', 'Đinh Thảo Nhi', 'profile-ava.jpg', 1),
(72, 0, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 'profile-ava.jpg', 1),
(73, 0, 'linhbt@tintuc.vn', 'Bàn Thị Linh', 'profile-ava.jpg', 1),
(74, 0, 'linhnt98@tintuc.vn', 'Nguyễn Thùy Linh', 'profile-ava.jpg', 1),
(75, 0, 'phutl@tintuc.vn', 'Trần Lâm Phú', 'profile-ava.jpg', 1),
(76, 0, 'trangnt@tintuc.vn', 'Nguyễn Thị Trang', 'profile-ava.jpg', 1),
(79, 0, 'abc@tintuc.vn', 'abc abc abc', 'profile-ava.jpg', 1),
(80, 0, 'thuynt@tintuc.vn', 'Nguyễn Thị Thủy', 'profile-ava.jpg', 1),
(81, 0, 'cauns@tintuc.vn', 'Nguyễn Sinh Cầu', 'profile-ava.jpg', 1),
(82, 0, 'mintt@tintuc.vn', 'Nguyễn Thị Trà Mi', 'profile-ava.jpg', 1),
(83, 0, 'traht@tintuc.vn', 'Hoàng Thu Trà', 'profile-ava.jpg', 1),
(84, 0, 'vunm@tintuc.vn', 'Nguyễn Minh Vũ', 'profile-ava.jpg', 1),
(85, 0, 'anhntm@tintuc.vn', 'Ngô Thị Mai Anh', 'profile-ava.jpg', 1),
(86, 0, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 'profile-ava.jpg', 1),
(87, 0, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 'profile-ava.jpg', 1),
(88, 0, 'tungdt@tintuc.vn', 'Đinh Thanh Tùng', 'profile-ava.jpg', 1),
(89, 0, 'thaottp@tintuc.vn', 'Trịnh Thị Phương Thảo', 'profile-ava.jpg', 1),
(90, 0, 'vietdv@tintuc.vn', 'Dương Văn Việt', 'profile-ava.jpg', 1),
(91, 0, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 'profile-ava.jpg', 1),
(92, 0, 'vannh@tintuc.vn', 'Nguyễn Hồng Vân', 'profile-ava.jpg', 1),
(93, 0, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 'profile-ava.jpg', 1),
(94, 0, 'quynhnt@tintuc.vn', 'Nguyễn Thị Quỳnh', 'profile-ava.jpg', 1),
(95, 0, 'hienntt@tintuc.vn', 'Nguyễn Thị Thanh Hiền', 'profile-ava.jpg', 1),
(96, 0, 'datnt@tintuc.vn', 'Nguyễn Tiến Đạt', 'profile-ava.jpg', 1),
(97, 0, 'thuongnt@tintuc.vn', 'Nguyễn Thị Thương', 'profile-ava.jpg', 1),
(98, 0, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 'profile-ava.jpg', 1),
(99, 4, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', '', 0),
(100, 4, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 'IMG_5306.JPG', 1),
(101, 0, 'loanvt@tintuc.vn', 'Vũ Thị Loan', 'profile-ava.jpg', 1),
(102, 0, 'huettt@tintuc.vn', 'Triệu Thị Thu Huệ', 'profile-ava.jpg', 1),
(103, 0, 'thongtm@tintuc.vm', 'Trương Minh Thông', 'profile-ava.jpg', 1),
(104, 0, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 'profile-ava.jpg', 1),
(105, 0, 'nhattq@tintuc.vn', 'Trần Quốc Nhật', 'profile-ava.jpg', 0),
(106, 0, 'haint@tintuc.vn', 'Nguyễn Trọng Hải', 'profile-ava.jpg', 1),
(107, 88, 'nhattq@tintuc.vn', 'Trần Quốc Nhật', '', 0),
(108, 88, 'nhattq@tintuc.vn', 'Trần Quốc Nhật', '59064621_1218917674942257_8023902290874204160_n.jpg', 1),
(109, 0, 'binhtt1@tintuc.vn', 'Trần Thanh Bình', 'profile-ava.jpg', 1),
(110, 0, 'huongct@tintuc.vn', 'Cao Thanh Hương', 'profile-ava.jpg', 1),
(111, 0, 'trangdth@tintuc.vn', 'Đặng Thị Hà Trang', 'profile-ava.jpg', 1),
(112, 0, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 'profile-ava.jpg', 1),
(113, 0, 'phuongltt@tintuc.vn', 'Lăng Thị Thái Phượng', 'profile-ava.jpg', 1),
(114, 0, 'thuannt@tintuc.vn', 'Nguyễn Thu Thuận', 'profile-ava.jpg', 1),
(115, 0, 'halth@tintuc.vn', 'Lê Thị Hải Hà', 'profile-ava.jpg', 1),
(116, 0, 'chintn@tintuc.vn', 'Nguyễn Thị Ninh Chi', 'profile-ava.jpg', 1),
(117, 0, 'linhnt1@tintuc.vn', 'Nguyễn Thảo Linh', 'profile-ava.jpg', 1),
(118, 0, 'linhnt2@tintuc.vn', 'Nguyễn Thảo Linh', 'profile-ava.jpg', 1),
(119, 0, 'phuongntt@tintuc.vn', 'Nguyễn Thị Thu Phương', 'profile-ava.jpg', 1),
(120, 0, 'anhdb@tintuc.vn', 'Bùi Đức Anh', 'profile-ava.jpg', 1),
(121, 0, 'linhht@tintuc.vn', 'Trần Hà Linh', 'profile-ava.jpg', 1),
(122, 0, 'hangdh@tintuc.vn', 'Hà Diệu Hằng', 'profile-ava.jpg', 1),
(123, 0, 'nhaipt@tintuc.vn', 'Phạm Thị Nhài', 'profile-ava.jpg', 1),
(124, 0, 'ngochancp98@gmail.com', 'Trần Thị Ngọc Hân', 'profile-ava.jpg', 1),
(125, 0, 'hoangphihung18021998@gmail.com', 'Hoàng Phi Hùng', 'profile-ava.jpg', 1),
(126, 0, 'phuongnguyen5598@gmail.com', 'Nguyễn Thị Phương', 'profile-ava.jpg', 1),
(127, 0, 'haleeajc@gmail.com', 'Lê Thị Hà', 'profile-ava.jpg', 1),
(128, 0, 'luongthingocanh.99@gmail.com', 'Lương Thị Ngọc Anh', 'profile-ava.jpg', 1),
(129, 0, 'long.ng98@gmail.com', 'Nguyễn Thành Long', 'profile-ava.jpg', 1),
(130, 0, 'vyanhhoang193@gmail.com', 'Hoàng Vy Anh', 'profile-ava.jpg', 1),
(131, 0, 'xutrang1606@gmail.com', 'Phan Thị Thùy Trang', 'profile-ava.jpg', 1),
(132, 0, 'khanhninh6699@gmail.com', 'Lã Thị Khánh Ninh', 'profile-ava.jpg', 1),
(133, 0, 'danphuong.ajc@gmail.com', 'Nguyễn Thị Đan Phương', 'profile-ava.jpg', 1),
(134, 0, 'thanhhuyen09011999@gmail.com', 'Nguyễn Thị Thanh Huyền', 'profile-ava.jpg', 1),
(135, 0, 'Ginodatnguyen@gmail.com', 'Nguyễn Thị Thu Nga', 'profile-ava.jpg', 1),
(136, 0, 'giangnt@tintuc.vn', 'Nguyễn Thị Giang', 'profile-ava.jpg', 1),
(137, 0, 'tunv@tintuc.vn', 'Nguyễn Văn Tú', 'profile-ava.jpg', 1),
(138, 0, 'hoailtt@tintuc.vn', 'Lại Thị Thanh Hoài', 'profile-ava.jpg', 1),
(139, 0, 'thonglq@tintuc.vn', 'Lê Quang Thông', 'profile-ava.jpg', 1),
(140, 0, 'thoalt@tintuc.vn', 'Lê Thị Thoa', 'profile-ava.jpg', 1),
(141, 0, 'hienkt@tintuc.vn', 'Khuất Thu Hiền', 'profile-ava.jpg', 1),
(142, 0, 'nhungnp@tintuc.vn', 'Nguyễn Phương Nhung', 'profile-ava.jpg', 1),
(143, 0, 'thuyle@tintuc.vn', 'Lê Thị Thúy', 'profile-ava.jpg', 1),
(145, 5, 'hainc@tintuc.vn', 'Nguyễn Chí Hải', 'profile-ava.jpg', 1),
(146, 0, 'abc@gmail.com', 'abc@gmail.com', 'profile-ava.jpg', 1),
(147, 0, 'test1@gmail.com', 'nguyễn văn a', 'profile-ava.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `ID` int(10) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Ho` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Ten` varchar(250) CHARACTER SET utf8 NOT NULL,
  `NgaySinh` int(10) NOT NULL,
  `ThangSinh` int(10) NOT NULL,
  `NamSinh` int(10) NOT NULL,
  `SDT` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Mail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` int(10) NOT NULL,
  `CMTND` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayCap` date NOT NULL,
  `NoiCap` varchar(250) CHARACTER SET utf8 NOT NULL,
  `ThuongTru` varchar(250) CHARACTER SET utf8 NOT NULL,
  `PhongBan` int(10) NOT NULL,
  `ChucVu` int(10) NOT NULL,
  `LoaiHD` varchar(250) CHARACTER SET utf8 NOT NULL,
  `NgayVaoLV` date NOT NULL,
  `NgayLVCT` date NOT NULL,
  `BDHDLD` date NOT NULL,
  `TrangThai` varchar(250) CHARACTER SET utf8 NOT NULL,
  `quyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`ID`, `username`, `password`, `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `SDT`, `Mail`, `GioiTinh`, `CMTND`, `NgayCap`, `NoiCap`, `ThuongTru`, `PhongBan`, `ChucVu`, `LoaiHD`, `NgayVaoLV`, `NgayLVCT`, `BDHDLD`, `TrangThai`, `quyen`) VALUES
(1, 'huytv@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Trần Văn', 'Huy', 26, 1, 1999, '0904.991.588', 'huytv@tintuc.vn', 1, '13604166', '2013-01-12', 'Hà Nội', 'Thôn Tràng,Thanh Liệt, Thanh Trì, Hà Nội', 1, 1, 'HĐLĐ', '0000-00-00', '2017-01-01', '0000-00-00', '1', 2),
(2, 'haibd@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Bùi Đức', 'Hải', 15, 8, 2000, '0976.385.111', 'buiduchai@gmail.com', 1, '034094007078', '2018-08-21', 'Thái Bình', 'Đào Động, An Lễ, Quỳnh Phụ, Thái Bình', 5, 2, 'HĐLĐ', '0000-00-00', '2017-04-01', '2019-12-01', '1', 3),
(3, 'huyenltt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Lê Thị Thu ', 'Huyền', 1, 10, 1999, '0979.410.402', 'lehuyen1690@gmail.com', 0, '173415795', '2007-09-01', 'Thanh Hóa', 'Thạch Long, Thạch Thành, Thanh Hóa', 6, 2, 'HĐLĐ', '0000-00-00', '2014-10-01', '2018-12-24', '1', 3),
(15, 'hangptt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Phùng Thị Thu', 'Hằng', 26, 12, 2001, '0915.697.157', 'hangphung.267@gmail.com', 0, '173316888', '2011-03-09', 'Thanh Hóa', 'Hà Trung, Hà Trung, Thanh Hóa', 8, 3, 'HĐLĐ', '0000-00-00', '2018-04-15', '2018-12-24', '1', 3),
(16, 'namth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Tạ Hữu', 'Năm', 5, 1, 1999, '0374.100.749', 'namth@tintuc.vn', 1, '152119581', '2011-06-20', 'Thái Bình', 'Thượng Hiền, Kiến Xương, Thái Bình', 10, 6, 'HĐLĐ', '0000-00-00', '2016-06-05', '2019-05-03', '1', 3),
(19, 'phuongnl@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Lan', 'Phương', 5, 3, 2000, '0969.444.896', 'phuongnl@tintuc.vn', 0, '012906803', '2006-08-15', 'CA. Hà Nội', 'Văn Trì, Minh Khai, Từ Liêm, Hà Nội', 2, 8, 'HĐLĐ', '0000-00-00', '2017-04-01', '2019-04-01', '1', 2),
(21, 'havtt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Vương Thị Thu', 'Hà', 17, 4, 1999, '0979.652.901', 'vuongthuha171196@gmail.com', 0, '142813481', '2012-05-16', 'CA. Hải Dương', 'An Lâm, Nam Sách, Hải Dương', 4, 3, 'HĐLĐ', '2018-09-05', '2018-11-01', '2019-05-06', '1', 3),
(22, 'phuongdt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Dương Tố', 'Phương', 22, 5, 2000, '0961.239.480', 'tophuong.ajc@gmail.com', 0, '095215721', '2011-08-05', 'CA.Bắc Kạn', 'Thượng Quan, Ngân Sơn, Bác Kạn', 4, 3, 'HĐLĐ', '2018-09-07', '2018-11-01', '2019-05-03', '1', 2),
(27, 'mypt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Phan Trà ', 'My', 6, 12, 1999, '0344036256', 'phantramy.ajc@gmail.com', 0, '101203301', '2011-05-18', 'Quảng Ninh', 'Tân Lập, Đầm Hà, Quảng Ninh', 8, 3, 'HĐLĐ', '2018-10-08', '2018-12-01', '2019-07-01', '1', 2),
(28, 'ducvt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Vũ Trọng ', 'Đức', 5, 12, 2001, '0392.923.976', 'vutrongduc0509@gmail.com', 1, '034092001814', '2015-07-02', 'Hải Phòng', 'Thôn 8 Tam Hưng - Thủy Nguyên - Hải Phòng', 9, 3, '', '2018-12-06', '2019-04-01', '0000-00-00', '', 3),
(31, 'duongnm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Minh', 'Dương', 26, 12, 1999, '0977.198.962', 'duong@greenlifejsc.net', 1, '121856315', '2016-02-19', 'Bắc Giang', 'Cẩm Lý, Lục Nam, Bắc Giang', 7, 2, 'HĐLĐ', '2016-10-06', '2017-07-01', '2019-05-08', '1', 3),
(41, 'hainc@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Chí ', 'Hải', 7, 9, 1999, '0969.361.151', 'protke1999@gmail.com', 1, '001099010298', '2015-10-19', 'Hà Nội', 'Văn Trì, Minh Khai, Bắc Từ Liêm, Hà Nội', 3, 5, 'HDLD', '2019-11-25', '2021-11-26', '2021-11-26', '1', 2),
(52, 'huongntt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Thị Thúy', 'Hường', 20, 12, 1998, '0912.957.561', 'ntth20121998@gmail.com', 0, '101341436', '2015-01-23', 'Quảng Ninh', 'Tổ 1, Khu 10 Phường Hồng Hải, TP Hạ Long, Quảng Ninh', 7, 3, '', '2020-05-07', '2020-07-07', '0000-00-00', '3', 2),
(59, 'admin@tintuc.vn', '2fa69b7e52dabb5dd5ffbabc2bdce94a', 'Nguyễn Thị Hạ ', 'Quyên', 1, 2, 1999, '', '', 1, '197352974', '2013-09-07', 'Quảng Trị', 'Khu phố 4, Thị Trấn Cam Lộ, Huyện Cam Lộ, Tỉnh Quảng Trị', 1, 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '4', 1),
(70, 'vietdv@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Dương Văn ', 'Việt', 9, 11, 1999, ' 0339.852.781', 'vietdv@greenlifejsc.net', 1, '101300330', '2010-07-10', 'Quảng Ninh', 'Cẩm La, Quảng Yên, Quảng Ninh', 9, 12, '', '2020-06-15', '2020-08-15', '0000-00-00', '0', 2),
(75, 'hienntt@tintuc.vn', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Thanh', 'Hiền', 13, 7, 1999, '0978.801.549', 'hienthanhajc98@gmail.com', 0, '221461052', '2015-11-19', 'Phú Yên', '81 Nguyễn Phong Sắc, Dịch Vọng Hậu, Cầu Giấy, HN', 5, 3, '', '2020-07-10', '2020-09-10', '0000-00-00', '0', 2),
(82, 'tranglt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 'Lương Thị Thùy ', 'Trang', 13, 4, 1999, '0384.692.244', 'ttcphb@gmail.com', 0, '152217631', '2013-05-21', 'Thái Bình', 'Liên Hiệp, Hưng Hà, Thái Bình', 10, 11, '', '2020-09-17', '2020-09-17', '0000-00-00', '0', 2),
(99, 'ngochancp98@gmail.com', '36d6304ed328d5db64e1df709261a322', 'Trần Thị Ngọc ', 'Hân', 28, 11, 1999, '0966502623', 'ngochancp98@gmail.com', 0, '101290032', '2012-11-20', 'Quảng Ninh', 'Tổ 7 - Cẩm Sơn - Cẩm Phả - Quảng Ninh', 6, 3, '', '2021-03-29', '0000-00-00', '0000-00-00', '2', 2),
(106, 'xutrang1606@gmail.com', '36d6304ed328d5db64e1df709261a322', 'Phan Thị Thùy ', 'Trang', 16, 12, 1999, '0978 196 376', 'xutrang1606@gmail.com', 0, '013631167', '2013-04-15', 'Hà Nội', 'Tổ 43 (tổ14), Dịch Vọng Hậu, Cầu Giấy, Hà Nội', 7, 11, '', '2021-05-20', '0000-00-00', '0000-00-00', '0', 2),
(120, 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'abc@gmail.com', 'abc@gmail.com', 5, 6, 1999, '565987987', 'abc@gmail.com', 1, '589879879', '2021-12-09', 'abc@gmail.com', 'abc@gmail.com', 4, 9, 'abc@gmail.com', '2021-12-15', '2021-12-15', '2021-12-02', '1', 3),
(121, 'test1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nguyễn văn', 'a', 11, 8, 1999, '68654321', 'abc@gmail.com', 1, '246579461', '2021-12-17', 'Hà Nội', 'Hà Nội', 8, 2, 'HDLD', '2021-12-10', '2021-12-16', '2021-12-16', '0', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phongban`
--

CREATE TABLE `tbl_phongban` (
  `ID` int(10) NOT NULL,
  `TenPB` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phongban`
--

INSERT INTO `tbl_phongban` (`ID`, `TenPB`) VALUES
(1, 'Ban Giám Đốc'),
(2, 'Hành Chính Kế Toán'),
(3, 'Kỹ thuật'),
(4, 'Traffic News'),
(5, 'FB Hải'),
(6, 'FB Huyền'),
(7, 'Kinh Doanh SanHo'),
(8, 'FB Hằng'),
(9, 'Video'),
(10, 'Marketing');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` int(10) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(250) CHARACTER SET utf8 NOT NULL,
  `quyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `phongban`, `name`, `google`, `quyen`) VALUES
(1, 'admin@tintuc.vn', '60c54b5719f582901a67a86c6350908f', 2, 'Nguyễn Thị Hạ Quyên', '', 1),
(2, 'huytv@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Trần Văn Huy', '', 2),
(3, 'phuongnl@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Nguyễn Lan Phương', '', 3),
(4, 'hiennt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Ngô Thúy Hiền', '', 2),
(5, 'hainc@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Chí Hải', '', 2),
(6, 'linhnth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Thị Hoài Linh', '', 2),
(7, 'thaonp@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Phương Thảo', '', 2),
(8, 'namth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Tạ Hữu Năm', '', 2),
(9, 'diepnb@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Ngô Bích Diệp', '', 3),
(10, 'liendtb@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Đinh Thị Bích Liên', '', 2),
(11, 'nguyetnm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Nguyễn Minh Nguyệt', '', 2),
(12, 'nupt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Phạm Thị Nụ', '', 3),
(13, 'giangntn@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Nguyễn Thị Ngọc Giang', '', 2),
(14, 'quyennth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Nguyễn Thị Hạ Quyên', '', 2),
(15, 'phuongdt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Dương Tố Phương', '', 2),
(16, 'maitt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Trần Thanh Mai', '', 2),
(17, 'nunt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Nguyễn Thị Nụ', '', 4),
(18, 'tantt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Trần Thị Tân', '', 2),
(19, 'havtt@tintuc.vn', 'ab7f4d1c1aa9d87b59f03745e3a8863b', 4, 'Vương Thị Thu Hà', '', 2),
(20, 'thuyntt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Nguyễn Thị Thu Thủy', '', 2),
(21, 'tramdm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Đỗ Minh Trâm', '', 2),
(22, 'trangltt@tintuc.vn', '437840e37d2f61f1635e00275156292f', 4, 'Lý Thị Thu Trang', '', 2),
(23, 'thaind@tintuc.vn', '40bad821b2ec0dc8fe1fac7ce85c1bcf', 4, 'Nguyễn Duy Thái', '', 2),
(24, 'hangptt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'Phùng Thị Thu Hằng', '', 3),
(25, 'mypt@tintuc.vn', '0a6dbb9c3e47df0e53f46f11b789f518', 8, 'Phan Trà My', '', 2),
(26, 'quannh@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'Nguyễn Hồng Quân', '', 2),
(27, 'hieunt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'Nguyễn Trung Hiếu', '', 2),
(28, 'huyenltt@tintuc.vn', '71c095d77b7faa28b23081bea51b593a', 6, 'Lê Thị Thu Huyền', '', 3),
(29, 'namtt@tintuc.vn', '6911df7306cbe5ea66fc1dc56ac5a1af', 6, 'Trần Thị Nam', '', 2),
(30, 'mopt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Phùng Thị Mơ', '', 2),
(31, 'thubtm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Bùi Thị Mai Thu', '', 2),
(32, 'tuyetnt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Nguyễn Thị Tuyết', '', 2),
(33, 'hangnt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Nguyễn Thanh Hằng', '', 2),
(34, 'mydtt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Đỗ Thị Trà My', '', 2),
(35, 'uyenmt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Mai Tố Uyên', '', 2),
(36, 'haibd@tintuc.vn', 'eb88b45f906c6b51595adf031e308bb9', 5, 'Bùi Đức Hải', '', 3),
(37, 'trangmh@tintuc.vn', '378c2ae95472d800976af2e841aeea80', 5, 'Mai Huyền Trang', '', 2),
(38, 'anhpn@tintuc.vn', '91d1dbccb9fc6010e714bbb29bb5b148', 5, 'Phạm Ngọc Anh', '', 2),
(39, 'huongltt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Lăng Thị Thu Hương', '', 2),
(40, 'quynhtt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Trịnh Thị Quỳnh', '', 2),
(41, 'huent@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Nguyễn Thị Huê', '', 2),
(42, 'haht@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Hoàng Thu Hà', '', 2),
(43, 'trangdt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Đinh Thùy Trang', '', 2),
(44, 'ducvt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Vũ Trọng Đức', '', 2),
(45, 'oanhptm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Phạm Thị Mỹ Oanh', '', 2),
(46, 'duongnm@tintuc.vn', '2837fd50e482a777fbb2921b48e38f5f', 7, 'Nguyễn Minh Dương', '', 3),
(47, 'duongnh@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Hải Dương', '', 2),
(48, 'hanhdt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Đàm Thị Hạnh', '', 2),
(49, 'kieupt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Phan Thị Kiều', '', 2),
(50, 'thaontp@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Thị Phương Thảo', '', 2),
(51, 'hanhnt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Thị Hạnh', '', 2),
(52, 'linhnt@tintuc.vn', '01cfcd4f6b8770febfb40cb906715822', 4, 'Nguyễn Tuấn Linh', '', 2),
(53, 'tramntn@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Thị Ngọc Trâm', '', 2),
(54, 'chihtl@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Hoàng Thị Linh Chi', '', 2),
(55, 'huyennt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'Nguyễn Thị Huyền', '', 2),
(56, 'binhtt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'Tô Thị Bình', '', 4),
(57, 'phuongvm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Vũ Minh Phương', '', 2),
(58, 'huongntt@tintuc.vn', 'a832714418a8e50e402ca27036fafacc', 7, 'Nguyễn Thị Thúy Hường', '', 1),
(59, 'nhidt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Đinh Thảo Nhi', '', 2),
(60, 'huyenntt@tintuc.vn', '1058c7194cb5c29a17885fe859b07b73', 7, 'Nguyễn Thị Thanh Huyền', '', 2),
(61, 'linhbt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Bàn Thị Linh', '', 2),
(62, 'linhnt98@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Nguyễn Thùy Linh', '', 2),
(63, 'phutl@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Trần Lâm Phú', '', 2),
(64, 'trangnt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Thị Trang', '', 2),
(65, 'thuynt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Thị Thủy', '', 0),
(66, 'cauns@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Nguyễn Sinh Cầu', '', 0),
(67, 'mintt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Nguyễn Thị Trà Mi', '', 0),
(68, 'traht@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Hoàng Thu Trà', '', 2),
(69, 'vunm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Minh Vũ', '', 0),
(70, 'anhntm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Ngô Thị Mai Anh', '', 0),
(71, 'tampt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Phạm Thị Tâm', '', 2),
(72, 'huyenntm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Thị Mỹ Huyền', '', 2),
(73, 'tungdt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Đinh Thanh Tùng', '', 0),
(74, 'thaottp@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Trịnh Thị Phương Thảo', '', 2),
(75, 'vietdv@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Dương Văn Việt', '', 2),
(76, 'levhn@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Vũ Hoàng Nhật Lệ', '', 2),
(77, 'vannh@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Nguyễn Hồng Vân', '', 2),
(78, 'thuynp@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Nguyễn Phương Thùy', '', 2),
(79, 'quynhnt@tintuc.vn', 'e10adc3949ba59abbe56e057f20f883e', 4, 'Nguyễn Thị Quỳnh', '', 2),
(80, 'hienntt@tintuc.vn', '94ce2a980017cbc404fd9d836823a5c8', 5, 'Nguyễn Thị Thanh Hiền', '', 2),
(81, 'datnt@tintuc.vn', 'e10adc3949ba59abbe56e057f20f883e', 9, 'Nguyễn Tiến Đạt', '', 2),
(82, 'thuongnt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Nguyễn Thị Thương', '', 2),
(83, 'huyenpt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Phạm Thị Huyền', '', 2),
(84, 'loanvt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Vũ Thị Loan', '', 2),
(85, 'huettt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'Triệu Thị Thu Huệ', '', 2),
(86, 'thongtm@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Trương Minh Thông', '', 2),
(87, 'tranglt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 10, 'Lương Thị Thùy Trang', '', 2),
(88, 'nhattq@tintuc.vn', '94925605fdef8eb563c80b4ae2418b52', 10, 'Trần Quốc Nhật', '', 2),
(89, 'haint@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 10, 'Nguyễn Trọng Hải', '', 2),
(90, 'binhtt1@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 10, 'Trần Thanh Bình', '', 2),
(91, 'huongct@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Cao Thanh Hương', '', 2),
(92, 'trangdth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Đặng Thị Hà Trang', '', 2),
(93, 'xuantt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Trần Thị Xuân', '', 2),
(94, 'phuongltt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Lăng Thị Thái Phượng', '', 2),
(95, 'thuannt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Nguyễn Thu Thuận', '', 2),
(96, 'halth@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 7, 'Lê Thị Hải Hà', '', 2),
(97, 'chintn@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 6, 'Nguyễn Thị Ninh Chi', '', 2),
(98, 'linhnt1@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Nguyễn Thảo Linh', '', 2),
(99, 'linhnt2@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Nguyễn Thảo Linh', '', 2),
(100, 'phuongntt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Nguyễn Thị Thu Phương', '', 2),
(101, 'anhdb@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 9, 'Bùi Đức Anh', '', 2),
(102, 'linhht@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Trần Hà Linh', '', 2),
(103, 'hangdh@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Hà Diệu Hằng', '', 2),
(104, 'nhaipt@tintuc.vn', '827ccb0eea8a706c4c34a16891f84e7b', 5, 'Phạm Thị Nhài', '', 2),
(105, 'ngochancp98@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Trần Thị Ngọc Hân', '', 2),
(106, 'hoangphihung18021998@gmail.com', '36d6304ed328d5db64e1df709261a322', 7, 'Hoàng Phi Hùng', '', 2),
(107, 'phuongnguyen5598@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Nguyễn Thị Phương', '', 2),
(108, 'haleeajc@gmail.com', '36d6304ed328d5db64e1df709261a322', 1, 'Lê Thị Hà', '', 2),
(109, 'luongthingocanh.99@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Lương Thị Ngọc Anh', '', 2),
(110, 'long.ng98@gmail.com', '36d6304ed328d5db64e1df709261a322', 9, 'Nguyễn Thành Long', '', 2),
(111, 'vyanhhoang193@gmail.com', '36d6304ed328d5db64e1df709261a322', 9, 'Hoàng Vy Anh', '', 2),
(112, 'xutrang1606@gmail.com', '36d6304ed328d5db64e1df709261a322', 7, 'Phan Thị Thùy Trang', '', 2),
(113, 'khanhninh6699@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Lã Thị Khánh Ninh', '', 2),
(114, 'danphuong.ajc@gmail.com', '36d6304ed328d5db64e1df709261a322', 9, 'Nguyễn Thị Đan Phương', '', 2),
(115, 'thanhhuyen09011999@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Nguyễn Thị Thanh Huyền', '', 2),
(116, 'pipu@gmail.com', '36d6304ed328d5db64e1df709261a322', 6, 'Nguyễn Thị Thu Nga', '', 2),
(117, 'giangnt@tintuc.vn', '36d6304ed328d5db64e1df709261a322', 2, 'Nguyễn Thị Giang', '', 2),
(118, 'tunv@tintuc.vn', '53e57775778e3eb862593326ca875471', 1, 'Nguyễn Văn Tú', '', 2),
(119, 'hoailtt@tintuc.vn', '36d6304ed328d5db64e1df709261a322', 5, 'Lại Thị Thanh Hoài', '', 2),
(120, 'thonglq@tintuc.vn', '24606f9375604e61518fb77e74247247', 8, 'Lê Quang Thông', '', 2),
(121, 'thoalt@tintuc.vn', '36d6304ed328d5db64e1df709261a322', 4, 'Lê Thị Thoa', '', 2),
(122, 'hienkt@tintuc.vn', 'e8d0114f84e69d161aee564a3fdc9a47', 8, 'Khuất Thu Hiền', '', 2),
(123, 'nhungnp@tintuc.vn', '36d6304ed328d5db64e1df709261a322', 2, 'Nguyễn Phương Nhung', '', 2),
(124, 'thuyle@tintuc.vn', 'f6522518b5f85a185272b30831e74ae0', 6, 'Lê Thị Thúy', '', 2),
(125, 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'abc@gmail.com', 'abc@gmail.com', 3),
(126, 'test1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 8, 'nguyễn văn a', 'abc@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_xinnghi`
--

CREATE TABLE `tbl_xinnghi` (
  `ID` int(10) NOT NULL,
  `account` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` int(10) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_xinnghi`
--

INSERT INTO `tbl_xinnghi` (`ID`, `account`, `username`, `phongban`, `title`, `description`, `time`, `status`) VALUES
(1, 'uyenmt@tintuc.vn', 'Mai Tố Uyên', 6, 'Đơn xin nghỉ ngày 11 tháng 8 năm 2020', 'Kính gửi bộ phận HCNS\r\nKính gửi TBP Facebook\r\nTôi là Mai Tố Uyên đội FB.\r\nVì lý do sức khoẻ nên tôi xin phép nghỉ làm online hôm nay ngày 11/8/2020\r\nTôi xin hoàn thành công việc của mình tại nhà \r\nChân thành cảm ơn! \r\n', 'Ngày 11 Tháng 8 Năm 2020', 1),
(2, 'trangmh@tintuc.vn', 'Mai Huyền Trang', 5, 'ĐƠN XIN LÀM VIỆC ONLINE NGÀY 14/8 TỪ 8H-17H30', 'Kính gửi: Bộ phận hành chính nhân sự\r\nĐồng kính gửi Trưởng bộ phận\r\n \r\n- Tên tôi là: Mai Huyền Trang\r\n- Chức vụ: Nhân viên QT fanpage\r\n \r\nHôm nay tôi viết thư này gửi bộ phận hành chính nhân sự và trưởng bộ phận để xin làm việc online trong khoảng thời gian từ 8h-17h30 ngày 14/8/2020\r\nTrong thời gian nghỉ phép tôi đảm bảo sẽ hoàn thành tốt mọi nhiệm vụ.\r\n \r\nKính mong bộ phận nhân sự cùng Trưởng bộ phận xem xét và giải quyết!\r\n \r\nTôi xin chân thành cảm ơn!\r\n \r\n* Kính đơn!', 'Ngày 14 Tháng 8 Năm 2020', 0),
(3, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ sáng 14 tháng 8 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE\r\nTôi tên là: Nguyễn Thị Thanh Huyền\r\nBộ phận: Kinh doanh Sanho\r\nVì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 6 (14/8/2020)', 'Ngày 14 Tháng 8 Năm 2020', 1),
(5, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 7, 'Đơn xin nghỉ ngày 15 tháng 8 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE\r\nTôi tên là: Nguyễn Phương Thùy\r\nBộ phận: kinh doanh Sanho\r\nVì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 7 (15/8/2020)', 'Ngày 15 Tháng 8 Năm 2020', 1),
(6, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 17/8/2020', 'Dear anh, chị\r\nEm là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 17/8/2020.\r\nEm xin cảm ơn ạ', 'Ngày 17 Tháng 8 Năm 2020', 1),
(7, 'linhbt@tintuc.vn', 'Bàn Thị Linh', 4, 'Đơn xin nghỉ ngày 17/8/2020', 'Dear anh, chị Em là Bàn Thị Linh, nhân viên thuộc tổ tin tức. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin nghỉ buổi sáng vào ngày 17/8/2020. Em xin cảm ơn ạ', 'Ngày 17 Tháng 8 Năm 2020', 1),
(8, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ phép ngày 17/8 - Nguyễn Hải Dương', 'Do sức khoẻ không được tốt nên em xin được nghỉ phép 1 hôm ạ. Các công việc em sẽ xử lý online được ạ. Em cảm ơn ạ!', 'Ngày 17 Tháng 8 Năm 2020', 1),
(9, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 7, 'Đơn xin nghỉ ngày 19 tháng 8 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE \r\nTôi tên là: Nguyễn Phương Thùy \r\nBộ phận: kinh doanh Sanho\r\n Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 4 (19/8/2020)', 'Ngày 19 Tháng 8 Năm 2020', 1),
(10, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 7, 'Đơn xin nghỉ ngày 25/8/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 3 (25/8/2020)', 'Ngày 25 Tháng 8 Năm 2020', 0),
(11, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 25/8/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 3 (25/8/2020)', 'Ngày 25 Tháng 8 Năm 2020', 0),
(12, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Nguyễn Hải Dương  _ Đơn xin nghỉ phép', 'Do có công việc bận cá nhân nên em xin được nghỉ phép 1 hôm ạ. Em cảm ơn ạ!', 'Ngày 25 Tháng 8 Năm 2020', 0),
(13, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 26/8/2020', 'Dear anh, chị\r\nEm là Ngô Thúy Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khỏe nên em viết mail này mong quý công ty cho em làm online tại nhà ngày 26/8/2020.\r\nEm xin chân thành cảm ơn!', 'Ngày 26 Tháng 8 Năm 2020', 1),
(14, 'hanhnt@tintuc.vn', 'Nguyễn Thị Hạnh', 7, 'Đơn xin nghỉ ngày 26 tháng 8 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE\r\nTôi tên là: Nguyễn Thị Hạnh\r\nBộ phận: Kinh doanh Sanho\r\nVì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ tư (26/8/2020)', 'Ngày 26 Tháng 8 Năm 2020', 0),
(16, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ ngày 28/8/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do cá nhân nên Em viết mail này mong quý công ty cho em xin nghỉ làm vào ngày 28/8/2020. Em xin cảm ơn ạ	', 'Ngày 28 Tháng 8 Năm 2020', 1),
(17, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 31/8/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Phạm Thị Tâm Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề gia đình, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 2 (31/8/2020)', 'Ngày 31 Tháng 8 Năm 2020', 0),
(18, 'hanhnt@tintuc.vn', 'Nguyễn Thị Hạnh', 7, 'Đơn xin nghỉ ngày 31 tháng 8 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE \r\nTôi tên là: Nguyễn Thị Hạnh \r\nBộ phận: Kinh doanh Sanho \r\nVì lý do: Do có việc cá nhân, tôi xin phép nghỉ 2 ngày (31/8 - 1/9)', 'Ngày 31 Tháng 8 Năm 2020', 0),
(19, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 1/9/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Phạm Thị Tâm Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề gia đình, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 3 (1/9/2020)', 'Ngày 01 Tháng 9 Năm 2020', 0),
(20, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 3/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (3/9) ạ. Em cảm ơn!', 'Ngày 03 Tháng 9 Năm 2020', 0),
(21, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 4/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (4/9) ạ. Em cảm ơn!', 'Ngày 04 Tháng 9 Năm 2020', 0),
(22, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ sáng ngày 4/9/2020', '	Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 6 (4/9/2020)', 'Ngày 04 Tháng 9 Năm 2020', 1),
(24, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 5/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (5/9) ạ. Em cảm ơn!', 'Ngày 05 Tháng 9 Năm 2020', 1),
(25, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 5/9/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 5/9/2020. Em xin cảm ơn ạ', 'Ngày 05 Tháng 9 Năm 2020', 1),
(26, 'linhbt@tintuc.vn', 'Bàn Thị Linh', 4, 'ĐƠN XIN NGHỈ PHÉP TỪ NGÀY 5/9 ĐẾN NGÀY 8/9', 'Dear anh, chị! Em là Bàn Thị Linh thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm buổi chiều ngày 5/9. Ngày 7/9 và ngày 8/9 em xin phép làm việc online tại nhà. Em xin chân thành cảm ơn!', 'Ngày 05 Tháng 9 Năm 2020', 1),
(27, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 7/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (7/9) ạ. Em cảm ơn!', 'Ngày 07 Tháng 9 Năm 2020', 0),
(28, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 6, 'ĐƠN XIN NGHỈ ONLINE NGÀY 7/9/2020', 'Gửi ban hành chính nhân sự và trưởng nhóm Facebook Lê Thị Huyền\r\n\r\nDo vấn đề sức khoẻ, hôm nay em xin nghỉ làm và làm việc tại nhà. \r\n\r\nEm sẽ hoàn thành công việc được giao\r\nTrân trọng! ', 'Ngày 07 Tháng 9 Năm 2020', 1),
(29, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 8/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (8/9) ạ. Em cảm ơn!', 'Ngày 08 Tháng 9 Năm 2020', 0),
(30, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 9/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (9/9) ạ. Em cảm ơn!', 'Ngày 09 Tháng 9 Năm 2020', 0),
(31, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 9/9/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 4 (9/9/2020)', 'Ngày 09 Tháng 9 Năm 2020', 0),
(32, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 10/9/2020', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 10/9/2020. Em xin chân thành cảm ơn!', 'Ngày 09 Tháng 9 Năm 2020', 0),
(33, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 10/9/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (10/9) ạ. Em cảm ơn!', 'Ngày 10 Tháng 9 Năm 2020', 0),
(34, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Đơn xin nghỉ ngày 11/9/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Nguyễn Hải Dương - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (11/9). Xin chân thành cảm ơn!', 'Ngày 11 Tháng 9 Năm 2020', 0),
(35, 'tuyetnt@tintuc.vn', 'Nguyễn Thị Tuyết', 6, 'Ngày 12 tháng 9 năm 2020', 'Vì lý do sức khỏe em xin phép làm online tại nhà! ', 'Ngày 12 Tháng 9 Năm 2020', 1),
(36, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 19/9/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 7 (19/9/2020)', 'Ngày 19 Tháng 9 Năm 2020', 0),
(38, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'Đơn xin nghỉ ngày 21/9/2020', 'Gửi anh/chị phòng HCNS, hôm nay em bị ốm, không thể đi làm được. Em xin phép nghỉ ngày làm việc hôm nay ạ.', 'Ngày 21 Tháng 9 Năm 2020', 1),
(39, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 24/9/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 24/9/2020. Em xin cảm ơn ạ', 'Ngày 24 Tháng 9 Năm 2020', 1),
(40, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 25/9/2020', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 25/9/2020. Em xin chân thành cảm ơn!', 'Ngày 24 Tháng 9 Năm 2020', 0),
(42, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 7, 'Đơn xin nghỉ ngày 25/9/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Phương Thùy Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 3 (25/8/2020)', 'Ngày 25 Tháng 9 Năm 2020', 0),
(43, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Nguyễn Thị Mỹ Huyền - Đơn xin nghỉ phép ngày 26/9/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Nguyễn Thị Mỹ Huyền - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (26/9). Xin chân thành cảm ơn!', 'Ngày 26 Tháng 9 Năm 2020', 0),
(44, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Nguyễn Thị Thanh Huyền - Đơn xin nghỉ phép ngày 26/9/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Nguyễn Thị Thanh Huyền - Bộ phận: KD Sanho. Vì lý cá nhân tôi xin phép nghỉ ngày hôm nay (26/9). Xin chân thành cảm ơn!', 'Ngày 26 Tháng 9 Năm 2020', 0),
(45, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 6, 'ĐƠN XIN NGHỈ NGÀY 28 và 29/9/2020', 'Gửi bộ phận hành chính và nhóm trưởng Facebook Lê Huyền, \r\n\r\nVì lý do cá nhân em xin nghỉ phép 2 ngày 28 và ngày 29.\r\n\r\nTrân trọng. \r\n', 'Ngày 28 Tháng 9 Năm 2020', 1),
(46, 'linhbt@tintuc.vn', 'Bàn Thị Linh', 4, 'Đơn xin nghỉ sáng ngày 28/9/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là Bàn Thị Linh - Bộ phận: Tin tức Vì lý do sức khỏe tôi xin phép nghỉ sáng ngày hôm nay (28/9). Xin chân thành cảm ơn!', 'Ngày 28 Tháng 9 Năm 2020', 1),
(47, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ ngày 28/9/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin nghỉ vào ngày 28/9/2020. Em xin cảm ơn ạ', 'Ngày 28 Tháng 9 Năm 2020', 1),
(48, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 02/10/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 02/10/2020. Em xin cảm ơn ạ', 'Ngày 02 Tháng 10 Năm 2020', 1),
(50, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 3/10/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Phạm Thị Tâm Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề gia đình, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 7 (3/10/2020)', 'Ngày 03 Tháng 10 Năm 2020', 0),
(51, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 3/10/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 7 (3/10/2020)', 'Ngày 03 Tháng 10 Năm 2020', 0),
(52, 'hanhnt@tintuc.vn', 'Nguyễn Thị Hạnh', 7, 'Đơn xin nghỉ ngày 5 tháng 10 năm 2020', 'Vì lý do sức khỏe, xin phép công ty cho tôi nghỉ ngày hôm nay, thứ 2 ngày 5/10/2020', 'Ngày 05 Tháng 10 Năm 2020', 0),
(53, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ sáng ngày 5/10/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Phạm Thị Tâm Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề gia đình, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 2 (5/10/2020)', 'Ngày 05 Tháng 10 Năm 2020', 0),
(54, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 10 tháng 10 năm 2020', 'Tôi tên là: Lương Thị Thuỳ Trang\r\nChức vụ: Content\r\nBộ phận: Marketing\r\nLý do xin nghỉ: Tôi phải đi đến bệnh viện\r\nMong công ty xem xét đơn xin nghỉ của tôi. \r\nTôi xin chân thành cảm ơn!', 'Ngày 09 Tháng 10 Năm 2020', 0),
(55, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ ngày 10/10/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin nghỉ vào ngày 10/10/2020. Em xin cảm ơn ạ', 'Ngày 10 Tháng 10 Năm 2020', 1),
(56, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN NGHỈ VIỆC NGÀY 13/10/2020', 'Kính gửi: - Ban Giám đốc Công ty Greenlife\r\n- Phòng Hành chính Kế toán công ty\r\n- Trưởng Bộ phận Traffic News\r\nTôi tên là: Lý Thị Thu Trang\r\nChức vụ: BTV Traffic News\r\nVì có việc bận cá nhân nên tôi không thể có mặt làm việc tại công ty ngày 13/10/2020.\r\nTôi xin được nghỉ làm 1 ngày (13/10/2020).\r\nTôi xin chân thành cảm ơn.\r\nNgười làm đơn\r\nTrang\r\nLý Thị Thu Trang\r\n', 'Ngày 12 Tháng 10 Năm 2020', 0),
(58, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 16 tháng 10 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life\r\nTôi tên là: Trần Thị Xuân\r\nBộ phận: Video\r\nVì lý do: Thi Tin học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 16 tháng 10 năm 2020)', 'Ngày 14 Tháng 10 Năm 2020', 0),
(59, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN NGHỈ VIỆC SÁNG 15/10/2020', 'Kính gửi: - Ban Giám đốc Công ty Greenlife\r\n- Phòng Hành chính - Kế toán của công ty\r\n- Trưởng Bộ phận Traffic News\r\nTôi tên là: Lý Thị Thu Trang\r\nChức vụ: BTV Traffic News\r\nDo có việc bận cá nhân không thể có mặt tại công ty nên tôi xin nghỉ buổi sáng nay 15/10/2020.\r\nTôi xin chân thành cảm ơn!\r\nNgười làm đơn \r\nTrang \r\nLý Thị Thu Trang\r\n', 'Ngày 15 Tháng 10 Năm 2020', 0),
(60, 'tuyetnt@tintuc.vn', 'Nguyễn Thị Tuyết', 6, 'Đơn xin nghỉ 1/2 ngày 15/10', 'Vì lý do sức khỏe e xin phép nghỉ buổi sáng ngày 15/10/2020', 'Ngày 15 Tháng 10 Năm 2020', 1),
(61, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 15/10/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép sáng hôm nay (15/10) ạ. Em cảm ơn!', 'Ngày 15 Tháng 10 Năm 2020', 0),
(62, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ làm ngày 17/10/2020', 'Dear anh, chị\r\nEm là Ngô Thúy Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khỏe nên em viết đơn này xin công ty cho em nghỉ làm ngày 17/10/2020.\r\nEm xin chân thành cảm ơn!', 'Ngày 16 Tháng 10 Năm 2020', 1),
(63, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ làm ngày 21/10/2020', 'Dear anh, chị Em là Ngô Thúy Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khỏe nên em viết đơn này xin công ty cho em nghỉ làm ngày 21/10/2020. Em xin chân thành cảm ơn!', 'Ngày 21 Tháng 10 Năm 2020', 1),
(65, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN LÀM ONLINE NGÀY 28/10/2020', 'Kính gửi: - Ban Giám đốc Công ty Greenlife\r\n- Trưởng bộ phận Trafficnews\r\n- Phòng Hành chính Kế toán công ty\r\nTôi tên là: Lý Thị Thu Trang\r\nChức vụ: BTV Trafficnews\r\nVì lý do sức khỏe tôi không thể đến làm việc tại công ty nên tôi xin được làm việc online tại nhà ngày hôm nay 28/10/2020\r\nTôi xin chân thành cảm ơn!\r\nNgười làm đơn\r\nTrang\r\nLý Thị Thu Trang', 'Ngày 28 Tháng 10 Năm 2020', 0),
(66, 'traht@tintuc.vn', 'Hoàng Thu Trà', 6, 'Đơn xin nghỉ ngày 30/10/2020', 'Gửi Bộ phận hành chính nhân sự và nhóm trưởng Facebook Lê Huyền. \r\nVì lý do cá nhân em xin phép nghỉ ngày 30/10.\r\nKính mong quý công ty tạo điều kiện, em xin chân thành cảm ơn.', 'Ngày 29 Tháng 10 Năm 2020', 1),
(67, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 30/10/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (30/10). Xin chân thành cảm ơn!	\r\n', 'Ngày 30 Tháng 10 Năm 2020', 0),
(68, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 31/10/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (31/10). Xin chân thành cảm ơn!', 'Ngày 31 Tháng 10 Năm 2020', 0),
(69, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 4/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 4 (4/11/2020)', 'Ngày 04 Tháng 11  Năm 2020', 0),
(70, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 5/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 5 (5/11/2020)', 'Ngày 05 Tháng 11  Năm 2020', 0),
(71, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ sáng ngày 6/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 6 (6/11/2020)', 'Ngày 06 Tháng 11  Năm 2020', 0),
(72, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'Đơn xin nghỉ ngày 10/11/2020 và 11/11/2020', 'Gửi anh/chị phòng HCNS, vì em phải về quê xử lý chút công việc, không thể đi làm được. Em xin phép nghỉ ngày làm việc 2 ngày 10 và 11 tháng 11 ạ.', 'Ngày 11 Tháng 11  Năm 2020', 0),
(73, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 12 tháng 11 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi đầu ra Tiếng Anh tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 12 tháng 11 năm 2020)', 'Ngày 11 Tháng 11  Năm 2020', 0),
(74, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 12/11/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (12/11) ạ. Em cảm ơn!', 'Ngày 12 Tháng 11  Năm 2020', 0),
(75, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 3, 'Đơn xin nghỉ chiều ngày 12/11/2020 và ngày 13/11/2020', 'Dear Anh/Chị\r\nEm là Nguyễn Thị Phương Thảo, Nhân viên kiểm thử thuộc tổ kỹ thuật\r\nVì lý do cá nhân nên em viết đơn này mong quý công ty cho em xin nghỉ làm chiều ngày 12/11/2020 và ngày 13/11/2020.\r\nEm xin chân thành cảm ơn!    ', 'Ngày 12 Tháng 11  Năm 2020', 1),
(76, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ sáng ngày 16/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 2 (16/11/2020)', 'Ngày 16 Tháng 11  Năm 2020', 0),
(77, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 18 tháng 11 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do:  Thi lại các môn học tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 18 tháng 11 năm 2020)', 'Ngày 17 Tháng 11  Năm 2020', 0),
(78, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 18/11/2020 ', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi lại các môn học tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1 ngày (ngày 18 tháng 11 năm 2020)', 'Ngày 18 Tháng 11  Năm 2020', 0),
(79, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 19/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi lại các môn học tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 19 tháng 11 năm 2020)', 'Ngày 19 Tháng 11  Năm 2020', 0),
(80, 'huyenntt@tintuc.vn', 'Nguyễn Thị Thanh Huyền', 7, 'Đơn xin nghỉ ngày 20/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Thanh Huyền Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ 6 (20/11/2020)', 'Ngày 20 Tháng 11  Năm 2020', 0),
(81, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 23/11/2020', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 23/11/2020. Em xin chân thành cảm ơn!', 'Ngày 20 Tháng 11  Năm 2020', 0),
(82, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 23/11/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (23/11). Xin chân thành cảm ơn!', 'Ngày 23 Tháng 11  Năm 2020', 0),
(83, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 24/11/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (24/11). Xin chân thành cảm ơn!', 'Ngày 24 Tháng 11  Năm 2020', 0),
(84, 'hanhnt@tintuc.vn', 'Nguyễn Thị Hạnh', 7, 'Đơn xin nghỉ phép ngày 25/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Thị Hạnh Bộ phận: Kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ sáng ngày thứ tư (25/11/2020)', 'Ngày 25 Tháng 11  Năm 2020', 0),
(85, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 26/11/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi  đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 26 tháng 11 năm 2020)	', 'Ngày 26 Tháng 11  Năm 2020', 0),
(86, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 30/11/2020 ', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Sức khỏe không ổn định nên tôi xin phép anh/chị cho tôi nghỉ 1 ngày (ngày  30 tháng 11 năm 2020)', 'Ngày 29 Tháng 11  Năm 2020', 0),
(87, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 1/12/2020', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 1/12/2020. Em xin chân thành cảm ơn!', 'Ngày 30 Tháng 11  Năm 2020', 0),
(88, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'Đơn xin nghỉ phép ngày 2/12', 'Gửi phòng HCNS, em là Thái đội tintuc, chiều nay 1/12 & ngày mai 2/12, em có việc bận nên xin phép nghỉ ngày làm này. E đã báo cáo leader và được đồng ý. Em cảm ơn ạ ', 'Ngày 01 Tháng 12 Năm 2020', 0),
(89, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 6, 'Đơn xin nghỉ ngày 3/12/2020', 'Tên tôi là: Phạm Thị Huyền\r\nVị trí: BTV Facebook \r\nLý do: Do gia đình tôi có việc bận phải về quê gấp vậy nên tôi viết đơn này xin phép được nghỉ online ngày hôm nay.\r\nTôi xin hứa trong thời gian nghỉ sẽ cố gắng hoàn thành công việc thật tốt.\r\nXin chân thành cảm ơn! ', 'Ngày 03 Tháng 12 Năm 2020', 1),
(90, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 4 tháng 12 năm 2020', 'Tôi tên là: Lương Thị Thuỳ Trang\r\nChức vụ: Content Marketing\r\nBộ phận: Marketing\r\nXin nghỉ ngày: 4/12/2020\r\nLý do xin nghỉ: Gia đình tôi có việc gấp cần xử lý, mong công ty tạo điều kiện cho tôi xin nghỉ. \r\nTôi xin chân thành cảm ơn!', 'Ngày 03 Tháng 12 Năm 2020', 0),
(91, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 6, 'Đơn xin nghỉ ngày 4/12/2020', 'Tên tôi là: Phạm Thị Huyền\r\nVị trí: Biên Tập Viên\r\nLý do: Do gia đình tôi có việc bận, phải về quê gấp, vì vậy tôi viết đơn này xin phép được nghỉ làm vào hôm nay. Tôi sẽ đi làm lại vào ngày mai.\r\nTôi xin hứa trong thời gian nghỉ sẽ hoàn thành công việc thật tốt.\r\nTôi xin chân thành cảm ơn!', 'Ngày 04 Tháng 12 Năm 2020', 1),
(93, 'halth@tintuc.vn', 'Lê Thị Hải Hà', 7, 'Đơn xin nghỉ ngày 12 tháng 5  năm 2020', 'Do có công việc bận cá nhân nên em xin được nghỉ phép 1 hôm ạ. Em cảm ơn ạ!	', 'Ngày 05 Tháng 12 Năm 2020', 0),
(94, 'halth@tintuc.vn', 'Lê Thị Hải Hà', 7, 'Đơn xin nghỉ ngày 5 tháng 12 năm 2020	', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life\r\nDo công việc cá nhân em xin phép nghỉ ngày hôm nay ạ. Em cảm ơn anh chị ạ! \r\n', 'Ngày 05 Tháng 12 Năm 2020', 0),
(95, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Nguyễn Thị Mỹ Huyền - Đơn xin nghỉ phép ngày 08/12/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Nguyễn Thị Mỹ Huyền - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (8/12). Xin chân thành cảm ơn!', 'Ngày 08 Tháng 12 Năm 2020', 0),
(96, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 9/12/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (/912) ạ. Em cảm ơn!', 'Ngày 09 Tháng 12 Năm 2020', 0),
(97, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 10/12/2020', 'Vì lý do sức khỏe nên em xin được nghỉ phép hôm nay (10/12) ạ. Em cảm ơn!', 'Ngày 10 Tháng 12 Năm 2020', 0),
(98, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 11/12/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (11/12). Xin chân thành cảm ơn!', 'Ngày 11 Tháng 12 Năm 2020', 0),
(99, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 12 tháng 12 năm 2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi Tiếng Anh học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1 ngày (ngày 12 tháng 12 năm 2020)	', 'Ngày 11 Tháng 12 Năm 2020', 0),
(100, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Đơn xin nghỉ ngày 12/12/2020', 'Kính gửi: Ban Giám đốc Greenlife. Tôi tên là: Phạm Thị Tâm - Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (12/12). Xin chân thành cảm ơn!', 'Ngày 12 Tháng 12 Năm 2020', 0),
(102, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'Đơn xin nghỉ ngày 14/12/2020', 'Hôm nay em có chút việc bận, nên xin phép nghỉ làm việc ngày 14/12. E đã báo cáo leader và được chấp thuận. E xin chân thành cảm ơn. ', 'Ngày 14 Tháng 12 Năm 2020', 0),
(103, 'thuynp@tintuc.vn', 'Nguyễn Phương Thùy', 7, 'Đơn xin nghỉ ngày 19/12/2020', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE Tôi tên là: Nguyễn Phương Thùy Bộ phận: kinh doanh Sanho Vì lý do: Do vấn đề sức khỏe, tôi xin phép anh/chị cho tôi nghỉ ngày thứ 7 (19/12/2020)', 'Ngày 19 Tháng 12 Năm 2020', 0),
(104, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN LÀM ONLINE NGÀY 21/12/2020', 'Kính gửi: - Ban Giám đốc Công ty Greenlife \r\n- Trưởng bộ phận Trafficnews \r\n- Phòng Hành chính Kế toán công ty \r\nTôi tên là: Lý Thị Thu Trang \r\nChức vụ: BTV Trafficnews \r\nVì lý do sức khỏe tôi không thể đến làm việc tại công ty nên tôi xin được làm việc online tại nhà ngày hôm nay 21/12/2020 \r\nTôi xin chân thành cảm ơn! \r\nNgười làm đơn \r\nTrang \r\nLý Thị Thu Trang', 'Ngày 20 Tháng 12 Năm 2020', 0),
(105, 'vietdv@tintuc.vn', 'Dương Văn Việt', 9, '', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life\r\nTôi tên là: Dương Văn Việt\r\nBộ phận: Video \r\nXin nghỉ vì  lý do: Ở quê có việc nên tôi xin phép anh/chị cho tôi nghỉ 2 ngày (ngày 22 -23 tháng 12 năm 2020)', 'Ngày 21 Tháng 12 Năm 2020', 0),
(107, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ chiều ngày 25/12/2020', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm chiều ngày 25/12/2020. Em xin chân thành cảm ơn!', 'Ngày 24 Tháng 12 Năm 2020', 0),
(108, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 29/12/2020', 'Vì lý do sức khỏe nên em xin được nghỉ sáng hôm nay (29/12) ạ. Em cảm ơn!', 'Ngày 29 Tháng 12 Năm 2020', 0),
(109, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 30/12/2020', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content Bộ phận: Marketing \r\nLý do xin nghỉ: Tôi phải đi đến bệnh viện \r\nMong công ty xem xét đơn xin nghỉ của tôi. Tôi xin chân thành cảm ơn!', 'Ngày 30 Tháng 12 Năm 2020', 0),
(110, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 6 tháng 1 năm 2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Lịch học tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 6 tháng 1 năm 2021)', 'Ngày 05 Tháng 1 Năm 2021', 0),
(113, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 6, 'Đơn xin nghỉ ngày 8/1/2020', 'Tên tôi là: Phạm Thị Huyền.\r\nVị trí: BTV Facebook\r\n Lý do: Do gia đình tôi có việc bận phải về quê gấp vậy nên tôi viết đơn này xin phép được nghỉ online ngày hôm nay. Tôi xin hứa trong thời gian nghỉ sẽ cố gắng hoàn thành công việc thật tốt.\r\n Xin chân thành cảm ơn!', 'Ngày 08 Tháng 1 Năm 2021', 1),
(114, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Đơn xin nghỉ ngày 08/01/2021', 'Kính gửi: Ban Giám đốc Greenlife. \r\nTôi tên là: Nguyễn Thị Mỹ Huyền \r\n- Bộ phận: KD Sanho. \r\nVì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (08/01). Xin chân thành cảm ơn!', 'Ngày 08 Tháng 1 Năm 2021', 0),
(115, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, '', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Tôi có việc cá nhân cần phải xin nghỉ, mong công ty xem xét!\r\nTôi xin chân thành cảm ơn!', 'Ngày 08 Tháng 1 Năm 2021', 0),
(116, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 11/1/2021', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 11/1/2021. Em xin chân thành cảm ơn!', 'Ngày 11 Tháng 1 Năm 2021', 0),
(118, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 12/1/2021', 'Do có công việc bận cá nhân nên em xin được nghỉ phép sáng 12/1 ạ. Em cảm ơn ạ!', 'Ngày 12 Tháng 1 Năm 2021', 0),
(119, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 13/1/2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1 ngày (ngày 13 tháng 1 năm 2021', 'Ngày 13 Tháng 1 Năm 2021', 0),
(120, 'halth@tintuc.vn', 'Lê Thị Hải Hà', 7, 'Đơn xin nghỉ ngày 13 tháng 1 năm 2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life.\r\nDo công việc cá nhân em xin phép nghỉ ngày hôm nay ạ. \r\nEm cảm ơn anh chị ạ!', 'Ngày 13 Tháng 1 Năm 2021', 0),
(121, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 15/1/2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 15 tháng 1 năm 2021)', 'Ngày 15 Tháng 1 Năm 2021', 0),
(122, 'haint@tintuc.vn', 'Nguyễn Trọng Hải', 10, 'Đơn xin nghỉ chiều ngày 15/01/2021 - Đến hết ngày 16/01/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life. Do công việc cá nhân em xin phép nghỉ chiều ngày 15/01/2021 - Đến hết ngày 16/01/2021. Em cảm ơn anh chị ạ!', 'Ngày 15 Tháng 1 Năm 2021', 0),
(125, 'thuongnt@tintuc.vn', 'Nguyễn Thị Thương', 9, 'Đơn xin nghỉ sáng 18 tháng 1 năm 2021', 'Kính gửi : Ban Giám đốc công ty\r\n                  Phòng Hành chính - Nhân sự\r\nTôi tên là: Nguyễn Thị Thương\r\nChức vụ: Nhân viên nhóm Video\r\nNay tôi làm đơn kính xin Ban Giám đốc công ty, Phòng Hành chính - Nhân sự cho tôi được nghỉ việc riêng sáng ngày 18/1\r\nLý do: Có việc cá nhân cần giải quyết\r\nKính mong Ban Giám đốc công ty, Phòng Hành chính - Nhân sự xem xét giải quyết\r\n', 'Ngày 17 Tháng 1 Năm 2021', 0),
(126, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ ngày 18/1/2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 18 tháng 1 năm 2021)', 'Ngày 18 Tháng 1 Năm 2021', 0),
(127, 'thuongnt@tintuc.vn', 'Nguyễn Thị Thương', 9, 'Đơn xin nghỉ phép chiều ngày 21 tháng 1 năm 2021', 'Kính gửi : Ban Giám đốc công ty, Phòng Hành chính - Nhân sự Tôi tên là: Nguyễn Thị Thương. Chức vụ: Nhân viên nhóm Video. Nay tôi làm đơn kính xin Ban Giám đốc công ty, Phòng Hành chính - Nhân sự cho tôi được nghỉ việc riêng chiều ngày 21/1. Lý do: Có việc cá nhân cần giải quyết. Kính mong Ban Giám đốc công ty, Phòng Hành chính - Nhân sự xem xét giải quyết.', 'Ngày 20 Tháng 1 Năm 2021', 0),
(128, 'tampt@tintuc.vn', 'Phạm Thị Tâm', 7, 'Nguyễn Thị Tâm - Đơn xin nghỉ phép ngày 22/1- 23/1', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại GREENLIFE \r\nTôi tên là: Phạm Thị Tâm \r\nBộ phận: kinh doanh Sanho \r\nVì lý do: Do vấn đề gia đình, tôi xin phép anh/chị cho tôi nghỉ 2 ngày (22/1 và 23/1)\r\n\r\nTôi xin cảm ơn!', 'Ngày 22 Tháng 1 Năm 2021', 0),
(129, 'thuongnt@tintuc.vn', 'Nguyễn Thị Thương', 9, 'Đơn xin nghỉ 22-23 tháng 1 năm 2021	', 'Kính gửi : Ban Giám đốc công ty Phòng Hành chính - Nhân sự Tôi tên là: Nguyễn Thị Thương Chức vụ: Nhân viên nhóm Video Nay tôi làm đơn kính xin Ban Giám đốc công ty, Phòng Hành chính - Nhân sự cho tôi được nghỉ việc riêng ngày 22-23/1 Lý do: Có việc cá nhân cần giải quyết Kính mong Ban Giám đốc công ty, Phòng Hành chính - Nhân sự xem xét giải quyết', 'Ngày 22 Tháng 1 Năm 2021', 0),
(130, 'nhattq@tintuc.vn', 'Trần Quốc Nhật', 10, 'Đơn xin nghỉ ngày 23/01/2021 - Trần Quốc Nhật - Marketing', 'Tên tôi là: Trần Quốc Nhật\r\nChức vụ: Nhân viên Marketing\r\nHiện công tác tại: Công ty Cổ phần Công nghệ và Thương mại Greenlife\r\nKính gửi Phòng HC-NS và Trưởng bộ phận cho tôi xin nghỉ 1 ngày vì có việc gia đình. Thời gian nghỉ: ngày 23/01/2021. Tôi vẫn sẽ theo dõi và thực hiện công việc đầy đủ được Trưởng bộ phận phân công trong thời gian nghỉ\r\nXin trân trọng cảm ơn!', 'Ngày 22 Tháng 1 Năm 2021', 0),
(131, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 25 tháng 1 năm 2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân \r\nBộ phận: Video Vì lý do: Có việc bận nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 25 tháng 1 năm 2021)', 'Ngày 25 Tháng 1 Năm 2021', 0),
(132, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'đơn xin nghỉ ngày 25 tháng 1 năm 2021', 'Gửi phòng HCNS, em là Thái đội Traffic New, ngày 25 tháng 1, em có việc bận nên xin phép nghỉ ngày làm này. E đã báo cáo leader và được đồng ý. Em cảm ơn ạ', 'Ngày 25 Tháng 1 Năm 2021', 0),
(133, 'thuongnt@tintuc.vn', 'Nguyễn Thị Thương', 9, 'Đơn xin nghỉ phép sáng ngày 25 tháng 1 năm 2021', 'Kính gửi : Ban Giám đốc công ty Phòng Hành chính - Nhân sự Tôi tên là: Nguyễn Thị Thương Chức vụ: Nhân viên nhóm Video Nay tôi làm đơn kính xin Ban Giám đốc công ty, Phòng Hành chính - Nhân sự cho tôi được nghỉ việc riêng sáng ngày 25/1 Lý do: Có việc cá nhân cần giải quyết Kính mong Ban Giám đốc công ty, Phòng Hành chính - Nhân sự xem xét giải quyết', 'Ngày 25 Tháng 1 Năm 2021', 0),
(134, 'xuantt@tintuc.vn', 'Trần Thị Xuân', 9, 'Đơn xin nghỉ phép ngày 25 tháng 1 năm 2021', 'Kính gửi: Giám đốc Công ty cổ phần công nghệ và thương mại Green Life Tôi tên là: Trần Thị Xuân Bộ phận: Video Vì lý do: Thi Tin học đầu ra tại trường nên tôi xin phép anh/chị cho tôi nghỉ 1/2 ngày (ngày 25 tháng 1 năm 2021)', 'Ngày 25 Tháng 1 Năm 2021', 0),
(135, 'thaind@tintuc.vn', 'Nguyễn Duy Thái', 4, 'Đơn xin nghỉ ngày 26 tháng 1 năm 2021', 'Gửi phòng HCNS, em là Thái đội Traffic New, ngày 26 tháng 1, em có việc bận nên xin phép nghỉ ngày làm này. E đã báo cáo leader và được đồng ý. Em cảm ơn ạ', 'Ngày 26 Tháng 1 Năm 2021', 0),
(137, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 03 tháng 02 năm 2021', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Tôi phải đi đến bệnh viện \r\nMong công ty xem xét đơn xin nghỉ của tôi. Tôi xin chân thành cảm ơn!', 'Ngày 03 Tháng 2 Năm 2021', 0),
(138, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'đơn xin nghỉ ngày 3/2/2021', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 3/2/2021. Em xin chân thành cảm ơn!', 'Ngày 03 Tháng 2 Năm 2021', 0),
(139, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, '', 'ĐƠN XIN LÀM ONLINE TỪ NGÀY 17/2-19/2/2021\r\nKính gửi: - Ban Giám đốc Công ty Greenlife \r\n- Trưởng bộ phận Trafficnews \r\n- Phòng Hành chính Kế toán công ty \r\nTôi tên là: Lý Thị Thu Trang \r\nChức vụ: BTV Trafficnews \r\nDo tình hình dịch COVID-19 tôi không thể đến làm việc tại công ty nên tôi xin công ty tạo điều kiện được làm việc online tại nhà nhà từ ngày17/2-19/2/2021\r\nTôi xin chân thành cảm ơn! \r\nNgười làm đơn \r\nTrang \r\nLý Thị Thu Trang', 'Ngày 17 Tháng 2 Năm 2021', 0),
(140, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN LÀM ONLINE TỪ NGÀY 17/2-19/2/2021', 'Kính gửi:\r\n- Ban Giám đốc Công ty Greenlife \r\n- Trưởng bộ phận Trafficnews \r\n- Phòng Hành chính Kế toán công ty \r\nTôi tên là: Lý Thị Thu Trang \r\nChức vụ: BTV Trafficnews \r\nDo tình hình dịch COVID-19 tôi không thể đến làm việc tại công ty nên tôi xin công ty tạo điều kiện được làm việc online tại nhà từ ngày17/2-19/2/2021 \r\nTôi xin chân thành cảm ơn! \r\nNgười làm đơn \r\nTrang \r\nLý Thị Thu Trang', 'Ngày 17 Tháng 2 Năm 2021', 0),
(142, 'haint@tintuc.vn', 'Nguyễn Trọng Hải', 10, 'Đơn xin nghỉ ngày 17/02/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life. Do công việc cá nhân tôi xin phép nghỉ ngày 17/02/202. Tôi cảm ơn!', 'Ngày 18 Tháng 2 Năm 2021', 0),
(143, 'duongnh@tintuc.vn', 'Nguyễn Hải Dương', 7, 'Đơn xin nghỉ ngày 22/2/2021', '	Do có công việc bận cá nhân nên em xin được nghỉ phép 1 hôm ạ. Em cảm ơn ạ!', 'Ngày 22 Tháng 2 Năm 2021', 0),
(144, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 24 tháng 02 năm 2021', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content Marketing \r\nBộ phận: Marketing \r\nXin nghỉ chiều ngày: 24/02/2021 \r\nLý do xin nghỉ: Tôi có việc gấp cần xử lý, mong công ty tạo điều kiện cho tôi xin nghỉ. Tôi xin chân thành cảm ơn!', 'Ngày 25 Tháng 2 Năm 2021', 0),
(146, 'trangltt@tintuc.vn', 'Lý Thị Thu Trang', 4, 'ĐƠN XIN LÀM ONLINE NGÀY 4/3/2021', 'Kính gửi: - Ban Giám đốc Công ty Greenlife \r\n- Trưởng bộ phận Facebook \r\n- Phòng Hành chính Kế toán công ty \r\nTôi tên là: Lý Thị Thu Trang \r\nChức vụ: BTV Facebook\r\nVì có việc đột xuất cá nhân không thể đến làm việc tại công ty nên tôi xin được làm việc online tại nhà ngày hôm nay 4/3/2021\r\nTôi xin chân thành cảm ơn! \r\nNgười làm đơn \r\nTrang \r\nLý Thị Thu Trang', 'Ngày 03 Tháng 3 Năm 2021', 0),
(147, 'uyenmt@tintuc.vn', 'Mai Tố Uyên', 6, 'Đơn xin nghỉ ngày 11/3/2021', 'Kính gửi bộ phận HCNS \r\nKính gửi TBP Facebook \r\nTôi là Mai Tố Uyên đội FB. Vì lý do sức khoẻ nên tôi xin phép nghỉ làm online hôm nay ngày 11/3/2021.\r\nTôi xin hoàn thành công việc của mình tại nhà.\r\nChân thành cảm ơn! ', 'Ngày 11 Tháng 3 Năm 2021', 1),
(148, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 13 tháng 3 năm 2021', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Gia đình có việc gấp\r\nMong công ty xem xét đơn xin nghỉ của tôi. Tôi xin chân thành cảm ơn!', 'Ngày 13 Tháng 3 Năm 2021', 0),
(149, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Nguyễn Thị Mỹ Huyền - Đơn xin nghỉ phép ngày 15/3/2020', 'Kính gửi: Ban Giám đốc Greenlife. \r\nTôi tên là: Nguyễn Thị Mỹ Huyền \r\n- Bộ phận: KD Sanho. Vì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (15/3). \r\nXin chân thành cảm ơn!', 'Ngày 15 Tháng 3 Năm 2021', 1),
(150, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 6, 'Đơn xin nghỉ ngày 15/3/2021', 'Tên tôi là: Phạm Thị Huyền Vị trí: BTV Facebook Lý do: Do gia đình tôi có việc bận phải về quê gấp vậy nên tôi viết đơn này xin phép được nghỉ online ngày hôm nay. Tôi xin hứa trong thời gian nghỉ sẽ cố gắng hoàn thành công việc thật tốt. Xin chân thành cảm ơn!', 'Ngày 15 Tháng 3 Năm 2021', 1),
(151, 'huyenpt@tintuc.vn', 'Phạm Thị Huyền', 6, 'Đơn xin nghỉ ngày 16/3/2021', 'Tên tôi là: Phạm Thị Huyền Vị trí: BTV Facebook Lý do: Do gia đình tôi có việc bận phải về quê gấp vậy nên tôi viết đơn này xin phép được nghỉ online ngày hôm nay. Tôi xin hứa trong thời gian nghỉ sẽ cố gắng hoàn thành công việc thật tốt. Xin chân thành cảm ơn!', 'Ngày 16 Tháng 3 Năm 2021', 1),
(152, 'phuongntt@tintuc.vn', 'Nguyễn Thị Thu Phương', 9, 'Đơn xin nghỉ ngày 29/3/2021', 'Do có việc đột xuất nên em xin được nghỉ ngày 29/3/2021', 'Ngày 28 Tháng 3 Năm 2021', 0),
(154, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 3, 'Đơn xin nghỉ ngày 3/4/2021', 'Dear Anh/Chị\r\nEm là Nguyễn Thị Phương Thảo, Nhân viên kiểm thử thuộc tổ kỹ thuật\r\nVì lý do cá nhân nên em viết đơn này mong quý công ty cho em xin nghỉ làm ngày 3/4/2021.\r\nEm xin chân thành cảm ơn ạ!     ', 'Ngày 02 Tháng 4 Năm 2021', 0),
(155, 'huyenntm@tintuc.vn', 'Nguyễn Thị Mỹ Huyền', 7, 'Nguyễn Thị Mỹ Huyền - Đơn xin nghỉ phép ngày 05/04/2021', 'Kính gửi: Ban Giám đốc Greenlife. \r\n\r\nTôi tên là: Nguyễn Thị Mỹ Huyền \r\n- Bộ phận: KD Sanho. \r\nVì lý do sức khỏe tôi xin phép nghỉ ngày hôm nay (05/04). \r\n\r\nXin chân thành cảm ơn!', 'Ngày 05 Tháng 4 Năm 2021', 0),
(156, 'nhaipt@tintuc.vn', 'Phạm Thị Nhài', 5, 'Đơn xin nghỉ ngày 7/4/2021', 'Em là Phạm Thị Nhài\r\nbộ phận FB anh Hải\r\nDo con em ốm sốt nên em xin phép được nghỉ buổi làm hôm nay và làm online ở nhà ạ. Em cảm ơn anh/chị \r\n', 'Ngày 07 Tháng 4 Năm 2021', 0),
(157, 'nhaipt@tintuc.vn', 'Phạm Thị Nhài', 5, 'Đơn xin nghỉ ngày 7/4/2021', 'Em là Phạm Thị Nhài\r\nbộ phận FB anh Hải\r\nDo con em ốm sốt nên em xin phép được nghỉ buổi làm hôm nay và làm online ở nhà ạ. Em cảm ơn anh/chị \r\n', 'Ngày 07 Tháng 4 Năm 2021', 0),
(158, 'uyenmt@tintuc.vn', 'Mai Tố Uyên', 6, 'Đơn xin nghỉ ngày 8 tháng 4 năm 2021 ', 'Kính gửi bộ phận HCNS \r\nKính gửi TBP Facebook \r\nTôi là Mai Tố Uyên đội FB. Vì lý do sức khoẻ nên tôi xin phép nghỉ làm online hôm nay ngày 8/4/2021 \r\nTôi xin hoàn thành công việc của mình tại nhà \r\nChân thành cảm ơn!', 'Ngày 08 Tháng 4 Năm 2021', 1),
(159, 'phuongntt@tintuc.vn', 'Nguyễn Thị Thu Phương', 9, 'Đơn xin nghỉ ngày 9/4/2021', 'Do có việc đột xuất nên em xin được phép nghỉ ngày 9/4/2021. Em cảm ơn!', 'Ngày 08 Tháng 4 Năm 2021', 0),
(160, 'halth@tintuc.vn', 'Lê Thị Hải Hà', 7, 'Đơn xin nghỉ ngày 13 tháng 4 năm 2021 ', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life Do công việc cá nhân em xin phép nghỉ ngày hôm nay ạ. Em cảm ơn anh chị ạ!', 'Ngày 13 Tháng 4 Năm 2021', 0),
(161, 'linhnth@tintuc.vn', 'Nguyễn Thị Hoài Linh', 3, 'Đơn xin nghỉ chiều ngày 16/4/2021 và ngày 19/4/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life, Em là Nguyễn Thị Hoài Linh, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do cá nhân nên Em viết mail này mong quý công ty cho em xin nghỉ làm chiều ngày 16/4/2021 và ngày 19/4/2021. Em xin cảm ơn ạ.', 'Ngày 15 Tháng 4 Năm 2021', 1),
(162, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 6, 'ĐƠN XIN NGHỈ NGÀY 19, 20/4', 'Kính gửi ban hành chính nhân sự,\r\nVì lý do cá nhân nên e xin nghỉ phép 2 ngày là 19 và 20/4.\r\nTrân trọng!', 'Ngày 19 Tháng 4 Năm 2021', 1),
(163, 'ngochancp98@gmail.com', 'Trần Thị Ngọc Hân', 6, 'Đơn xin nghỉ ngày 23 tháng 4 năm 2021', 'Em là Trần Thị Ngọc Hân.\r\nHôm nay em ốm nên em xin nghỉ 1 ngày ạ\r\nEm cảm ơn', 'Ngày 23 Tháng 4 Năm 2021', 0),
(164, 'levhn@tintuc.vn', 'Vũ Hoàng Nhật Lệ', 4, 'Đơn xin nghỉ ngày 3/5/2021', 'Dear anh, chị! Em là Vũ Hoàng Nhật Lệ thuộc bộ phận Traffic News. Vì có việc bận nên em xin nghỉ làm ngày 3/5/2021. Em xin chân thành cảm ơn!', 'Ngày 28 Tháng 4 Năm 2021', 0),
(165, 'linhnth@tintuc.vn', 'Nguyễn Thị Hoài Linh', 3, 'Đơn xin nghỉ sáng ngày 29/4/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life, Em là Nguyễn Thị Hoài Linh, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do cá nhân nên em viết mail này mong quý công ty cho em xin nghỉ làm sáng ngày 29/4/2021. Em xin cảm ơn ạ.', 'Ngày 28 Tháng 4 Năm 2021', 1),
(166, 'hoangphihung18021998@gmail.com', 'Hoàng Phi Hùng', 7, 'Đơn xin nghỉ ngày 15 tháng 5 năm 2021', 'Xin nghỉ công việc gia đình', 'Ngày 13 Tháng 5 Năm 2021', 0),
(170, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 16 tháng 6 năm 2021', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Tôi bị ốm không đi làm được.  \r\nMong công ty xem xét đơn xin nghỉ của tôi. Tôi xin chân thành cảm ơn!', 'Ngày 16 Tháng 6 Năm 2021', 0),
(172, 'thanhhuyen09011999@gmail.com', 'Nguyễn Thị Thanh Huyền', 6, 'Đơn xin nghỉ ngày 28 tháng 6 năm 2021', 'Họ và tên nv: Nguyễn Thị Thanh Huyền\r\nNV: BTV Fanpage- QTV ( nhóm  chị Huyền)\r\nĐược sự cho phép của Chị Huyền em viết đơn này xin nghỉ ngày 28 tháng 6 năm 2021\r\nLý do: Lấy bằng tốt nghiệp ở trường\r\nEm xin chân thành cảm ơn!', 'Ngày 27 Tháng 6 Năm 2021', 0),
(173, 'mydtt@tintuc.vn', 'Đỗ Thị Trà My', 6, 'Đơn xin nghỉ phép online ngày 30/6', 'Kính gửi TBP đội Facebook và phòng HCNS!\r\n \r\nTôi là Đỗ Thị Trà My đội Facebook.\r\n\r\nVì lý do sức khỏe nên tôi xin phép nghỉ làm online ngày 30/6/2021.\r\n \r\nTôi xin hoàn thành công việc của mình tại nhà.\r\n\r\nChân thành cảm ơn!\r\n \r\n_Trân trọng_', 'Ngày 30 Tháng 6 Năm 2021', 0),
(174, 'long.ng98@gmail.com', 'Nguyễn Thành Long', 9, 'Đơn xin nghỉ ngày 30/6/2021', 'Kính gửi: Ban giám đốc công ty Green Life\r\n                 Phòng hành chính kế toán\r\n                 Trưởng bộ phận Traffic News\r\nTên tôi là: Nguyễn Thành Long\r\nNgày sinh: 14/10/1998 \r\nSố điện thoại liên hệ: 0986723098\r\nNay tôi làm đơn này để xin được nghỉ phép ngày 30/6/2021 vì lý do sức khỏe chưa đảm bảo công việc sau khi tiêm vắc-xin phòng Covid-19\r\nTôi cam kết sẽ trở lại làm việc vào ngày 1/7/2021 và hoàn thành mọi trách nhiệm được giao trong thời gian xin nghỉ.\r\nKính mong Ban giám đốc, phòng hành chính kế toán và trưởng bộ phận xem xét và chấp thuận.\r\nTôi xin trân trọng cảm ơn!\r\n\r\nNgười làm đơn\r\nLong\r\nNguyễn Thành Long', 'Ngày 30 Tháng 6 Năm 2021', 0),
(175, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 6, 'ĐƠN XIN NGHỈ ONLINE 1/7/2021', 'Kính gửi bộ phận hành chính và trưởng nhóm Fb\r\nNay em bị ốm e xin phép làm việc online\r\nTrân trọng', 'Ngày 01 Tháng 7 Năm 2021', 0),
(176, 'danphuong.ajc@gmail.com', 'Nguyễn Thị Đan Phương', 9, 'Đơn xin nghỉ ngày 05/07/2021', 'Do phải tham dự lịch thi chuẩn đầu ra của trường, em viết đơn này để xin nghỉ làm ngày 05/07/2021. Em sẽ làm việc online và đảm bảo hoàn thành công việc được giao ạ.\r\nEm xin chân thành cảm ơn!\r\n\r\nNguyễn Thị Đan Phương', 'Ngày 02 Tháng 7 Năm 2021', 0),
(177, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ ngày 12 tháng 7 và 13 tháng 7', 'Dear anh, chị\r\nEm là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 12/7/2021 và 13/7/2021.\r\nEm xin cảm ơn ạ', 'Ngày 12 Tháng 7 Năm 2021', 1),
(178, 'pipu@gmail.com', 'Nguyễn Thị Thu Nga', 6, 'Đơn xin nghỉ ngày 15/7/2021', 'Do có chút việc đột xuất, nên em xin làm online tại nhà ạ.\r\nEm cảm ơn ạ!', 'Ngày 16 Tháng 7 Năm 2021', 0),
(179, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 3, 'Đơn xin làm online ở nhà ngày 20/9/2021', 'Dear Anh/Chị \r\nEm là Nguyễn Thị Phương Thảo, Nhân viên kiểm thử thuộc tổ kỹ thuật \r\nHiện tại, chỗ em ở vẫn còn chốt phong tỏa nên em xin phép làm việc online tại nhà ngày 20/9/2021.\r\nEm xin chân thành cảm ơn!', 'Ngày 19 Tháng 9 Năm 2021', 0),
(180, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 3, 'Đơn xin làm online ở nhà ngày 21/9/2021', 'Dear Anh/Chị \r\nEm là Nguyễn Thị Phương Thảo, Nhân viên kiểm thử thuộc tổ kỹ thuật Hiện tại, chỗ em ở vẫn còn chốt phong tỏa nên em xin phép làm việc online tại nhà ngày 21/9/2021.\r\nEm xin chân thành cảm ơn!', 'Ngày 21 Tháng 9 Năm 2021', 0),
(181, 'thaontp@tintuc.vn', 'Nguyễn Thị Phương Thảo', 3, 'Đơn xin làm online ở nhà ngày 22/9/2021', 'Dear Anh/Chị \r\nEm là Nguyễn Thị Phương Thảo, Nhân viên kiểm thử thuộc tổ kỹ thuật Hiện tại, chỗ em ở vẫn còn chốt phong tỏa nên em xin phép làm việc online tại nhà ngày 22/9/2021. Em xin chân thành cảm ơn!', 'Ngày 22 Tháng 9 Năm 2021', 0),
(182, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ ngày 4 tháng 10 năm 2021', 'Dear Anh/Chị \r\nEm là Ngô Thúy Hiền, Nhân viên kiểm thử thuộc tổ kỹ thuật do nhà em có việc đột xuất nên em xin nghỉ ngày 4/10/2021.\r\nEm xin chân thành cảm ơn!', 'Ngày 03 Tháng 10 Năm 2021', 0);
INSERT INTO `tbl_xinnghi` (`ID`, `account`, `username`, `phongban`, `title`, `description`, `time`, `status`) VALUES
(183, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin nghỉ làm ngày 5/10/2021', 'Dear Anh/Chị Em là Ngô Thúy Hiền, Nhân viên kiểm thử thuộc tổ kỹ thuật do nhà em có việc đột xuất nên em xin nghỉ ngày 5/10/2021. Em xin chân thành cảm ơn!', 'Ngày 05 Tháng 10 Năm 2021', 0),
(184, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'đơn xin nghỉ ngày 6 tháng 10 năm 2021', 'Dear Anh/Chị Em là Ngô Thúy Hiền, Nhân viên kiểm thử thuộc tổ kỹ thuật do nhà em có việc đột xuất nên em xin nghỉ ngày 6/10/2021. Em xin chân thành cảm ơn!', 'Ngày 06 Tháng 10 Năm 2021', 0),
(185, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 07/10/2020', 'Dear anh, chị Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 07/10/2021. Em xin cảm ơn ạ', 'Ngày 07 Tháng 10 Năm 2021', 0),
(186, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 08,09/10/2020', 'Dear anh, chị! Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 08,09/10/2021. Em xin cảm ơn ạ.', 'Ngày 08 Tháng 10 Năm 2021', 0),
(187, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 16 tháng 10 năm 2021', 'Tôi tên là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Hôm nay tôi bị ốm không thể đi làm. Mong công ty xem xét đơn xin nghỉ của tôi. \r\nTôi xin chân thành cảm ơn!', 'Ngày 16 Tháng 10 Năm 2021', 0),
(188, 'hiennt@tintuc.vn', 'Ngô Thúy Hiền', 3, 'Đơn xin làm online tại nhà ngày 25/10/2021', 'Dear anh, chị! Em là Ngô Thuý Hiền, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do sức khoẻ nên Em viết mail này mong quý công ty cho em xin làm online tại nhà vào ngày 25/10/2021. Em xin cảm ơn ạ.', 'Ngày 25 Tháng 10 Năm 2021', 0),
(189, 'thuyle@tintuc.vn', 'Lê Thị Thúy', 6, 'Đơn xin nghỉ ngày 5/11/2021', 'Kính gửi: Bộ phận Hành chính nhân sự \r\nTên tôi là: Lê Thị Thúy\r\nLý do viết đơn này là vì ngày mai 5/11 em có lịch tiêm vắc xin covid19 nên em viết đơn này xin nghỉ buổi sáng mai để đi tiêm.\r\nBuổi chiều em sẽ đến công ty làm việc ạ.\r\nEm xin cảm ơn ạ.\r\n', 'Ngày 04 Tháng 11  Năm 2021', 0),
(190, 'linhnth@tintuc.vn', 'Nguyễn Thị Hoài Linh', 3, 'Đơn xin nghỉ ngày 12/11/2021 và ngày 13/11/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life, Em là Nguyễn Thị Hoài Linh, nhân viên kiểm thử thuộc tổ kỹ thuật. Vì lý do cá nhân nên Em viết mail này mong quý công ty cho em xin nghỉ làm ngày 12/11/2021 và ngày 13/11/2021. Em xin cảm ơn ạ.', 'Ngày 11 Tháng 11  Năm 2021', 0),
(192, 'tranglt@tintuc.vn', 'Lương Thị Thùy Trang', 10, 'Đơn xin nghỉ ngày 13 tháng 11 năm 2021', 'Tôi là: Lương Thị Thuỳ Trang \r\nChức vụ: Content \r\nBộ phận: Marketing \r\nLý do xin nghỉ: Hôm nay tôi bị ốm không thể đi làm. \r\nMong công ty xem xét đơn xin nghỉ của tôi. Tôi xin chân thành cảm ơn!', 'Ngày 13 Tháng 11  Năm 2021', 0),
(193, 'mydtt@tintuc.vn', 'Đỗ Thị Trà My', 6, 'Đơn xin nghỉ phép online ngày 15/11', 'Kính gửi TBP đội Facebook và phòng HCNS! \r\nTôi là Đỗ Thị Trà My đội Facebook. \r\nVì lý do cá nhân nên tôi xin phép nghỉ làm online ngày 15/11/2021. \r\nTôi xin hoàn thành công việc của mình tại nhà. \r\nChân thành cảm ơn! \r\n_Trân trọng_	', 'Ngày 14 Tháng 11  Năm 2021', 0),
(194, 'hangnt@tintuc.vn', 'Nguyễn Thanh Hằng', 6, 'ĐƠN XIN NGHỈ ONLINE NGÀY 18/11- NGUYỄN THANH HẰNG', 'Kính gửi nhân sự hành chính\r\nEm là Nguyễn Thanh Hằng, nhân viên team Facebook Huyền.\r\n\r\nHôm nay em bị ốm nên em xin nghỉ làm việc online.\r\n\r\nEm sẽ hoàn thành công việc tại nhà.\r\n\r\nTrân trọng', 'Ngày 18 Tháng 11  Năm 2021', 0),
(195, 'hainc@tintuc.vn', 'Nguyễn Chí Hải', 8, 'Đơn xin nghỉ ngày 29/11/2021', 'Kính gửi bộ phận hành chính nhân sự công ty Green Life, Em là Nguyễn Chí Hải, nhân viên thuộc tổ kỹ thuật. Vì lý do cá nhân nên Em viết mail này mong quý công ty cho em xin nghỉ làm sáng ngày 29/11/2021. Em xin cảm ơn ạ.', 'Ngày 29 Tháng 11  Năm 2021', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baocom`
--
ALTER TABLE `tbl_baocom`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_chucvu`
--
ALTER TABLE `tbl_chucvu`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_phongban`
--
ALTER TABLE `tbl_phongban`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_xinnghi`
--
ALTER TABLE `tbl_xinnghi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baocom`
--
ALTER TABLE `tbl_baocom`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `tbl_chucvu`
--
ALTER TABLE `tbl_chucvu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `tbl_phongban`
--
ALTER TABLE `tbl_phongban`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `tbl_xinnghi`
--
ALTER TABLE `tbl_xinnghi`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
