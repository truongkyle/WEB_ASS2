-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2018 lúc 03:21 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

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
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `id_truyen`, `id_user`, `comment`, `created_by`) VALUES
(2, 1, 1, 'Phim hay vkl vậy.', 'quoctinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_truyen` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_image` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `id_truyen`, `name`, `order_image`, `created_by`) VALUES
(1, 2, 'one-piece-004.jpg', 1, 'quoctinh'),
(2, 2, 'one-piece-005.jpg', 2, 'quoctinh2'),
(3, 1, 'chapter1_naruto-001.jpg', 1, 'tinh123'),
(4, 1, 'chapter1_naruto-002.jpg', 2, 'tinh1234'),
(5, 2, 'chapter1_naruto-003.jpg', 3, 'quoctinh'),
(6, 1, 'chapter1_naruto-004.jpg', 4, 'quoctinh'),
(7, 2, 'chapter2_one-piece-001.jpg', 1, 'quoctinh'),
(8, 2, 'chapter2_one-piece-002.jpg', 2, 'quoctinh'),
(9, 2, 'chapter2_one-piece-003.jpg', 3, 'quoctinh'),
(10, 2, 'chapter2_one-piece-004.jpg', 4, 'quoctinh'),
(14, 101, '3club.jpeg', 1, 'quoctinh'),
(15, 102, '3d.jpeg', 1, 'quoctinh'),
(16, 103, '17year.jpeg', 1, 'quoctinh'),
(17, 104, '16abc.jpeg', 1, 'quoctinh'),
(18, 105, 'abb.jpeg', 1, 'quoctinh'),
(19, 106, 'someone.jpeg', 1, 'quoctinh'),
(20, 107, 'mei.jpeg', 1, 'quoctinh'),
(21, 108, 'cover1.jpg', 1, 'quoctinh'),
(22, 109, 'cover2.jpg', 1, 'quoctinh'),
(23, 110, 'cover3.jpg', 1, 'quoctinh'),
(24, 1, 'chapter1_naruto.png', 0, 'quoctinh'),
(25, 2, 'chapter2_naruto.png', 0, 'quoctinh'),
(26, 3, 'chapter3_naruto.png', 0, 'quoctinh'),
(27, 4, 'chapter4_naruto.png', 0, 'quoctinh'),
(28, 5, 'chapter5_naruto.png', 0, 'quoctinh'),
(29, 6, 'chapter6_naruto.png', 0, 'quoctinh'),
(30, 7, 'chapter7_naruto.png', 0, 'quoctinh'),
(31, 8, 'chapter8_naruto.png', 0, 'quoctinh'),
(32, 9, 'chapter9_naruto.png', 0, 'quoctinh'),
(33, 10, 'chapter10_naruto.png', 0, 'quoctinh'),
(34, 11, 'chapter11_naruto.png', 0, 'quoctinh'),
(35, 12, 'chapter12_naruto.png', 0, 'quoctinh'),
(36, 13, 'chapter13_naruto.png', 0, 'quoctinh'),
(37, 14, 'chapter14_naruto.png', 0, 'quoctinh'),
(38, 15, 'chapter15_naruto.png', 0, 'quoctinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int(11) NOT NULL,
  `the_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai`
--

INSERT INTO `the_loai` (`id`, `the_loai`, `created_by`) VALUES
(1, 'tình cảm', 'quoctinh'),
(2, 'truyền thuyết', 'quoctinh2'),
(3, 'kiếm hiệp', 'tinh123'),
(5, 'tình cảm 1', 'tinh1234'),
(6, 'tình cảm 12', 'quoctinh'),
(7, 'hành động', 'quoctinh');

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
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `ten_truyen`, `tac_gia`, `id_the_loai`, `chapter`, `mo_ta`, `created_by`) VALUES
(1, 'One Piece', 'tác giả hay.', 4, 1, 'truyện hay.', 'quoctinh'),
(2, 'One Piece', 'tác giả', 4, 2, 'truyện hay lắm', 'quoctinh2'),
(3, 'One Piece', 'Hishi Kage Dairi', 2, 3, 'Hishi Kage Dairi', 'quoctinh'),
(4, 'One Piece', 'Hishi Kage Dairi', 2, 4, 'Hishi Kage Dairi', 'quoctinh'),
(5, 'One Piece', 'Hishi Kage Dairi', 2, 5, 'Hishi Kage Dairi', 'quoctinh'),
(6, 'One Piece', 'Hishi Kage Dairi', 2, 6, 'Hishi Kage Dairi', 'quoctinh'),
(7, 'One Piece', 'Hishi Kage Dairi', 2, 7, 'Hishi Kage Dairi', 'quoctinh'),
(8, 'One Piece', 'Hishi Kage Dairi', 2, 8, 'Hishi Kage Dairi', 'quoctinh'),
(9, 'One Piece', 'Hishi Kage Dairi', 2, 9, 'Hishi Kage Dairi', 'quoctinh'),
(10, 'One Piece', 'Hishi Kage Dairi', 2, 10, 'Hishi Kage Dairi', 'quoctinh'),
(11, 'One Piece', 'Hishi Kage Dairi', 2, 11, 'Hishi Kage Dairi', 'quoctinh'),
(12, 'One Piece', 'Hishi Kage Dairi', 2, 12, 'Hishi Kage Dairi', 'quoctinh'),
(13, 'One Piece', 'Hishi Kage Dairi', 2, 13, 'Hishi Kage Dairi', 'quoctinh'),
(14, 'One Piece', 'Hishi Kage Dairi', 2, 14, 'Hishi Kage Dairi', 'quoctinh'),
(15, 'One Piece', 'Hishi Kage Dairi', 2, 15, 'Hishi Kage Dairi', 'quoctinh'),
(99, 'Naruto', 'tác giả hay', 1, 1, 'truyện tình cảm', 'tinh123'),
(101, 'Ryo Narushima', 'Tanaka Akio', 1, 2, 'Ryo Narushima - một học sinh trung học bị vào trại cải huấn vì bị buộc tội sát hại cha mẹ mình và được đảm bảo bí mật danh tính. Mới chỉ 16, Ryo đã phải chịu mọi hành hạ về thể xác tại nơi đây. Tuy nhiên, Ryo đã tìm ra thứ giúp cậu trở nên mạnh mẽ hơn, đó là Karate, thông qua người thầy Kenji Kurosawa. Hai năm sau, Ryo mãn hạn, quay trở về cuộc sống đời thường - nơi có Natsumi - em gái của cậu.', 'tinh1234'),
(102, 'Cohabitation', 'Hashimoto Izou', 2, 2, ' \r\n NỘI DUNG\r\nVũ Chi Đỉnh Phong, Di Sơn Đảo Hải, Tróc Tinh Nã Nguyệt, nghịch loạn thời không!Kiếm cực kỳ cảnh, một kiếm thành Đạo, một kiếm thông thần, một kiếm phá vạn pháp!Niên thiếu Lý Phù Trần, ngẫu được kim sắc tiểu phù, linh hồn không ngừng tiến hóa, ở thiên tài này như mưa, cường giả Như Vân thế giới, lấy kiếm trong tay, du ngoạn sơn thuỷ tuyệt đỉnh.Thiên địa có lúc hủy diệt,riêng ta vĩnh hằng bất hủ.', 'quoctinh'),
(103, 'Yozakura', 'MIYAJIMA Reiji', 1, 2, 'Các dự án thần tượng trường được thiết lập tại một trường giữa Akihabara, Kanda, và Jinbouchou khu phố Tokyo. Các trường phải đối mặt với nguy cơ bị sắp xếp hợp lý ra khỏi sự tồn tại, vì vậy chín sinh viên nữ của mình quyết định trở thành thần tượng để bảo vệ trường học của họ và thúc đẩy tham dự.', 'database'),
(104, 'Hirai Taurou', 'Edogawa Ranpo', 2, 2, ' \r\n NỘI DUNG\r\nEdogawa Ranpo là bút danh của Hirai Tarou, một tác giả, nhà phê bình nổi tiếng người Nhật. Ông là người đóng vai trò quan trọng trong sự phát triển của tiểu thuyết bí ẩn tại Nhật Bản, rất nhiều những tác giả hiện đại đã lấy cảm hứng sáng tác từ những tác phẩm của Hirai Tarou. Ví dụ như cái tên của Thám tử nhí Edogawa Conan chính là được lấy từ bút danh Edogawa Ranpo, hay chi tiết kinh dị “Cái ghế người” của họa sĩ manga kinh dị nổi tiếng Junji Itou cũng bắt nguồn từ tiểu thuyết của Hirai Tarou, vân vân...', 'database'),
(105, 'Kiibo Miyaza', 'Ookubo Atsushi', 3, 2, 'Không ai có một cuộc chiến đỉnh hơn \"Kiibo\" Miyazawa, một học sinh trung học được cha mình truyền dạy cho môn võ bí truyền của gia đình. Kiibo mơ ước trở thành một Bruce Lee thứ 2, nhưng với kỹ năng chiến đấu tuyệt vời anh ta có thể sớm vượt qua thần tượng của mình!', 'database'),
(106, 'One Piece', 'Hishi Kage Dairi', 7, 1, 'One Piece xoay quanh 1 nhóm cướp biển được gọi là Băng Hải tặc Mũ Rơm - Straw Hat Pirates - được thành lập và lãnh đạo bởi thuyền trưởng Monkey D. Luffy. Cậu bé Luffy có ước mơ tìm thấy kho báu vĩ đại nhất, One Piece, của Vua Hải Tặc đời trước Gold D. Roger và trở thành Vua Hải Tặc đời kế tiếp.', 'database'),
(107, 'Tenkuu Shinpan', 'NYOTAIKA KANOJO', 7, 1, 'Tenkuu Shinpan - truyện thuộc thể loại horror kinh dị máu me nhẹ! \r\nYuri - 1 nữ sinh trung học, vô tình phát hiện mình đang ở trên tầng thượng của 1 tòa cao ốc. Cô ấy bị vướng vào một thế giới kỳ quái được bao quanh bởi các tòa nhà chọc trời, nơi mà người đàn ông đeo mặt nạ đập vỡ đầu người một người khác trước mắt cô ấy', 'database'),
(108, 'Kouritsu Kuriya', 'O-Inari JK Tamamo-chan', 2, 1, 'Truyện về một thể loại gì mình chả biết, thế nhưng anh Main nhà ta sau khi bị cắt mất danh hiệu đệ nhất, anh ta đã rút kinh nghiệm và quay lại ngày còn trẻ để tu Luyện lại bằng cách trùng Sinh - thể loại tựa game - anh main nhà ta quẩy như thế nào sau khi Trùng Sinh? đón xem nhé!', 'database');

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
(1, 'quoctinh', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 0, 'tinh222@gmail.com', '2018-12-12', 0),
(2, 'quoctinh2', '12345', 12345622, 0, 'tinh22@gmail.com', '2018-12-04', 0),
(5, 'tinh123', '1234', 1234567890, 1, 'tinh@gmail.com', '2018-12-05', 1),
(6, 'tinh1234', '12345', 1234567890, 1, 'tinh1@gmail.com', '2018-12-14', 1),
(8, 'tinh132', '202cb962ac59075b964b07152d234b70', 1234567890, 1, 'tinh2@gmail.com', '2018-12-19', 1),
(9, 'tinh1235', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 1, 'tinh5@gmail.com', '2018-12-15', 1),
(10, 'tinh12342', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 1, 'tinh4@gmail.com', '2018-12-15', 1),
(13, '1513512', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 0, 'tinh41@gmail.com', '2018-12-08', 0),
(14, 'database', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 1, 'tinh24@gmail.com', '2018-12-15', 1),
(15, 'tinh1234123', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 0, 'tinh5@gmail.com', '2018-12-14', 1),
(16, 'tinh12342s', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 0, 'tinh@gmail.com', '2018-12-22', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
