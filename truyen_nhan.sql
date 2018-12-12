-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2018 lúc 07:10 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

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
(101, 'Ryo Narushima', 'Tanaka Akio', 1, 2, 'Ryo Narushima - một học sinh trung học bị vào trại cải huấn vì bị buộc tội sát hại cha mẹ mình và được đảm bảo bí mật danh tính. Mới chỉ 16, Ryo đã phải chịu mọi hành hạ về thể xác tại nơi đây. Tuy nhiên, Ryo đã tìm ra thứ giúp cậu trở nên mạnh mẽ hơn, đó là Karate, thông qua người thầy Kenji Kurosawa. Hai năm sau, Ryo mãn hạn, quay trở về cuộc sống đời thường - nơi có Natsumi - em gái của cậu.'),
(102, 'Cohabitation', 'Hashimoto Izou', 2, 2, ' \r\n NỘI DUNG\r\nVũ Chi Đỉnh Phong, Di Sơn Đảo Hải, Tróc Tinh Nã Nguyệt, nghịch loạn thời không!Kiếm cực kỳ cảnh, một kiếm thành Đạo, một kiếm thông thần, một kiếm phá vạn pháp!Niên thiếu Lý Phù Trần, ngẫu được kim sắc tiểu phù, linh hồn không ngừng tiến hóa, ở thiên tài này như mưa, cường giả Như Vân thế giới, lấy kiếm trong tay, du ngoạn sơn thuỷ tuyệt đỉnh.Thiên địa có lúc hủy diệt,riêng ta vĩnh hằng bất hủ.'),
(103, 'Yozakura', 'MIYAJIMA Reiji', 3, 2, 'Các dự án thần tượng trường được thiết lập tại một trường giữa Akihabara, Kanda, và Jinbouchou khu phố Tokyo. Các trường phải đối mặt với nguy cơ bị sắp xếp hợp lý ra khỏi sự tồn tại, vì vậy chín sinh viên nữ của mình quyết định trở thành thần tượng để bảo vệ trường học của họ và thúc đẩy tham dự.'),
(104, 'Hirai Taurou', 'Edogawa Ranpo', 1, 0, ' \r\n NỘI DUNG\r\nEdogawa Ranpo là bút danh của Hirai Tarou, một tác giả, nhà phê bình nổi tiếng người Nhật. Ông là người đóng vai trò quan trọng trong sự phát triển của tiểu thuyết bí ẩn tại Nhật Bản, rất nhiều những tác giả hiện đại đã lấy cảm hứng sáng tác từ những tác phẩm của Hirai Tarou. Ví dụ như cái tên của Thám tử nhí Edogawa Conan chính là được lấy từ bút danh Edogawa Ranpo, hay chi tiết kinh dị “Cái ghế người” của họa sĩ manga kinh dị nổi tiếng Junji Itou cũng bắt nguồn từ tiểu thuyết của Hirai Tarou, vân vân...'),
(105, 'Kiibo Miyaza', 'Ookubo Atsushi', 2, 0, 'Không ai có một cuộc chiến đỉnh hơn \"Kiibo\" Miyazawa, một học sinh trung học được cha mình truyền dạy cho môn võ bí truyền của gia đình. Kiibo mơ ước trở thành một Bruce Lee thứ 2, nhưng với kỹ năng chiến đấu tuyệt vời anh ta có thể sớm vượt qua thần tượng của mình!'),
(106, 'One Piece', 'Hishi Kage Dairi', 3, 0, 'One Piece xoay quanh 1 nhóm cướp biển được gọi là Băng Hải tặc Mũ Rơm - Straw Hat Pirates - được thành lập và lãnh đạo bởi thuyền trưởng Monkey D. Luffy. Cậu bé Luffy có ước mơ tìm thấy kho báu vĩ đại nhất, One Piece, của Vua Hải Tặc đời trước Gold D. Roger và trở thành Vua Hải Tặc đời kế tiếp.'),
(107, 'Tenkuu Shinpan', 'NYOTAIKA KANOJO', 1, 0, 'Tenkuu Shinpan - truyện thuộc thể loại horror kinh dị máu me nhẹ! \r\nYuri - 1 nữ sinh trung học, vô tình phát hiện mình đang ở trên tầng thượng của 1 tòa cao ốc. Cô ấy bị vướng vào một thế giới kỳ quái được bao quanh bởi các tòa nhà chọc trời, nơi mà người đàn ông đeo mặt nạ đập vỡ đầu người một người khác trước mắt cô ấy'),
(108, 'Kouritsu Kuriya', 'O-Inari JK Tamamo-chan', 2, 0, 'Truyện về một thể loại gì mình chả biết, thế nhưng anh Main nhà ta sau khi bị cắt mất danh hiệu đệ nhất, anh ta đã rút kinh nghiệm và quay lại ngày còn trẻ để tu Luyện lại bằng cách trùng Sinh - thể loại tựa game - anh main nhà ta quẩy như thế nào sau khi Trùng Sinh? đón xem nhé!');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
