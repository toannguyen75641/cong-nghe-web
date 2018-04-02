-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2018 lúc 04:25 PM
-- Phiên bản máy phục vụ: 10.1.24-MariaDB
-- Phiên bản PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `tom_tat` text COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `hinh_anh` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieu_de`, `tom_tat`, `noi_dung`, `hinh_anh`, `ngay_dang`, `thu_tu`, `id_dm`) VALUES
(1, 'Lo khó thu hồi 630 tỷ đồng từ ông Đinh La Thăng', 'Mặc dù hai bản án tuyên ông Đinh La Thăng - nguyên Chủ tịch HĐTV Tập đoàn Dầu khí Việt Nam (PVN) phải bồi thường 630 tỷ đồng chưa có hiệu lực pháp luật, nhưng cơ quan thi hành án dân sự lo lắng sẽ khó thu hồi khoản tiền rất lớn này khi quá trình tố tụng không kê biên, phong toả tài sản của ông Thăng.', 'Như Dân trí đã phản ánh, trong vụ án PVN mất 800 tỷ đồng khi góp vốn vào Ngân hàng TMCP Đại Dương (OceanBank) vừa kết thúc xét xử sơ thẩm cách đây ít ngày, bị cáo Đinh La Thăng - nguyên Chủ tịch HĐTV PVN - bị TAND Hà Nội tuyên phạt 18 năm tù và buộc bồi thường 600 tỷ đồng. 6 bị cáo khác liên đới bồi thường 200 tỷ đồng.\r\n</br>\r\n</br>\r\nTrước đó, trong vụ án cố ý làm trái liên quan đến dự án Nhà máy nhiệt điện Thái Bình 2, TAND TP Hà Nội cũng xác định các bị cáo đã gây thiệt hại nhà nước khoảng 120 tỷ đồng; trong đó, riêng bị cáo Đinh La Thăng bị tuyên mức án 13 năm tù và phải bồi thường 30 tỷ đồng, các đồng phạm khác của ông Thăng phải bồi thường khoảng 89 tỷ đồng.\r\n</br>\r\n</br>\r\nNhư vậy, tổng số tiền mà ông Đinh La Thăng sẽ phải bồi thường trong hai vụ án lên tới 630 tỷ đồng.', 'img/bi-can-dinh-la-thang-1519980413066198526633.jpg', '0000-00-00', 0, 2),
(2, 'HLV Mourinho được MU cấp 200 triệu bảng để mua cầu thủ', 'Theo nguồn tin từ tờ The Sun, HLV Mourinho sẽ được cấp thêm 200 triệu bảng trong kỳ chuyển nhượng mùa Hè 2018 để tăng cường lực lượng.', 'Trong hai mùa giải gần đây, HLV Mourinho đã “đốt” tới 300 triệu bảng để tăng cường lực lượng, với hy vọng giúp MU trở lại với đỉnh cao. Dù vậy, ông vẫn chưa thực sự thành công. MU chưa thể chinh phục được chức vô địch Premier League như mong đợi của người hâm mộ.\r\n</br>\r\n</br>\r\nThế nhưng, điều đó không có nghĩa rằng Quỷ đỏ sẽ dừng lại. Theo nguồn tin từ tờ The Sun, BLĐ đội bóng đã chấp thêm cho HLV Mourinho 200 triệu bảng để mua sắm trong kỳ chuyển nhượng mùa Hè 2018.\r\n</br>\r\n</br>\r\nĐương nhiên, để có tiền mua sắm (mà không lo đối phó với luật Công bằng tài chính), MU sẽ thanh lý không ít ngôi sao như Daley Blind, Ander Herrera, Chris Smalling, Luke Shaw hay Anthony Martial...\r\n</br>\r\n</br>\r\nHLV Mourinho đã tuyên bố không mua thêm tiền đạo. Nhiều khả năng, ông sẽ dùng số tiền này để tăng cường chất lượng cho hàng tiền vệ và hậu vệ. Danny Rose, Alex Sandro, Toby Alderweireld, Samuel Umtiti, Hector Bellerin, Jorginho, Sergej Milinkovic-Savic… đang là những cái tên trong tầm ngắm của HLV người Bồ Đào Nha.\r\n</br>\r\n</br>\r\nTrước đó, BLĐ MU đã trao toàn quyết xử lý công việc của CLB cho HLV Mourinho. Ông có thể “trảm” bất kỳ cầu thủ nào nếu không phù hợp (hoặc không tuân theo) chiến thuật và triết lý của mình.', 'img/jose-mourinho-693077-1522653769345258014974.jpg', '0000-00-00', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dm_baiviet`
--

CREATE TABLE `dm_baiviet` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dm_baiviet`
--

INSERT INTO `dm_baiviet` (`id`, `ten_dm`) VALUES
(1, 'du lich'),
(2, 'the gioi'),
(3, 'the thao'),
(4, 'giao duc'),
(5, 'phap luat'),
(6, 'kinh doanh'),
(7, 'van hoa'),
(8, 'giai tri'),
(9, 'suc khoe'),
(10, 'cong nghe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `name`, `email`, `pass`) VALUES
(5, '123', 'toan1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `dm_baiviet`
--
ALTER TABLE `dm_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `dm_baiviet`
--
ALTER TABLE `dm_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `dm_baiviet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
