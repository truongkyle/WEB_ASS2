-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2018 lúc 08:07 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_assignment`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_truyen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `id_truyen`, `id_user`, `comment`) VALUES
(2, 1, 1, 'hay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_truyen` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `id_truyen`, `name`, `order_image`) VALUES
(1, 1, 'one-piece-004.jpg', 1),
(2, 1, 'one-piece-005.jpg', 2),
(3, 3, 'chapter1_naruto-001.jpg', 1),
(4, 3, 'chapter1_naruto-002.jpg', 2),
(5, 3, 'chapter1_naruto-003.jpg', 3),
(6, 3, 'chapter1_naruto-004.jpg', 4),
(7, 2, 'chapter2_one-piece-001.jpg', 1),
(8, 2, 'chapter2_one-piece-002.jpg', 2),
(9, 2, 'chapter2_one-piece-003.jpg', 3),
(10, 2, 'chapter2_one-piece-004.jpg', 4),
(11, 1, 'chapter1_naruto.png', 0),
(14, 2, 'chapter2_naruto.png', 0),
(15, 3, 'chapter3_naruto.png', 0),
(16, 4, 'chapter4_naruto.png', 0),
(17, 5, 'chapter5_naruto.png', 0),
(18, 6, 'chapter6_naruto.png', 0),
(19, 7, 'chapter7_naruto.png', 0),
(20, 8, 'chapter8_naruto.png', 0),
(21, 9, 'chapter9_naruto.png', 0),
(22, 10, 'chapter10_naruto.png', 0),
(23, 11, 'chapter11_naruto.png', 0),
(24, 12, 'chapter12_naruto.png', 0),
(25, 13, 'chapter13_naruto.png', 0),
(26, 14, 'chapter14_naruto.png', 0),
(27, 15, 'chapter15_naruto.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int(11) NOT NULL,
  `the_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai`
--

INSERT INTO `the_loai` (`id`, `the_loai`) VALUES
(1, 'tình cảm'),
(2, 'truyền thuyết'),
(3, 'kiếm hiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(11) NOT NULL,
  `ten_truyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_the_loai` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `ten_truyen`, `tac_gia`, `id_the_loai`, `chapter`, `mo_ta`) VALUES
(1, 'One Piece', 'tác giả hay', 4, 1, 'truyện hay.'),
(2, 'One Piece', 'tác giả', 4, 2, 'truyện xàm lông'),
(3, 'One Piece', '', 4, 3, ''),
(4, 'One Piece', '', 4, 4, ''),
(5, 'One Piece', '', 4, 5, ''),
(6, 'One Piece', '', 4, 6, ''),
(7, 'One Piece', '', 4, 7, ''),
(8, 'One Piece', '', 4, 8, ''),
(9, 'One Piece', '', 4, 9, ''),
(10, 'One Piece', '', 4, 10, ''),
(11, 'One Piece', '', 4, 11, ''),
(12, 'One Piece', '', 4, 12, ''),
(13, 'One Piece', '', 4, 13, ''),
(14, 'One Piece', '', 4, 14, ''),
(15, 'One Piece', '', 4, 15, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `account_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone`, `gender`, `email`, `date_of_birth`, `account_type`) VALUES
(1, 'quoctinh', '202cb962ac59075b964b07152d234b70', 363636358, 0, 'tinh22@gmail.com', '2018-12-04', 0),
(2, 'quoctinh2', '12345', 12345622, 0, 'tinh22@gmail.com', '2018-12-04', 0),
(5, 'tinh123', '1234', 1234567890, 1, 'tinh@gmail.com', '2018-12-05', 1),
(6, 'tinh1234', '12345', 1234567890, 1, 'tinh1@gmail.com', '2018-12-14', 1),
(8, 'tinh132', '202cb962ac59075b964b07152d234b70', 1234567890, 1, 'tinh2@gmail.com', '2018-12-19', 1),
(9, 'tinh1235', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 1, 'tinh5@gmail.com', '2018-12-15', 1),
(10, 'tinh12342', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 1, 'tinh4@gmail.com', '2018-12-15', 1),
(13, '1513512', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 0, 'tinh41@gmail.com', '2018-12-08', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
