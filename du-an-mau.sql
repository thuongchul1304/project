-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2018 lúc 06:10 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du-an-mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'Mã bình luận',
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nội dung bình luận',
  `ma_hh` int(11) NOT NULL COMMENT 'Mã hàng hóa được bình luận',
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã người bình luận',
  `ngay_bl` date NOT NULL COMMENT 'Thời gian bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(1, 'tôi muốn mua sp này', 1, 'KH001', '2018-09-19'),
(2, 'Đáng để mua', 8, 'KH001', '2018-09-26'),
(3, 'đồ ngon', 8, 'KH001', '2018-09-26'),
(4, '', 16, 'KH001', '2018-09-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT ' Mã hàng hóa',
  `ten_hh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hàng hóa',
  `don_gia` float NOT NULL COMMENT 'Đơn giá',
  `giam_gia` float NOT NULL COMMENT 'Mức giảm giá',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Hình ảnh',
  `ngay_nhap` date NOT NULL COMMENT 'Ngày nhập hàng',
  `mo_ta` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả hàng hóa',
  `dac_biet` bit(1) NOT NULL COMMENT 'Trạng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT '0' COMMENT 'Số lượt xem',
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'iPhone X 256GB Gray', 3599000, 1000000, 'iphonex256gbgsilver.jpg', '2018-09-16', 'Màn hình: 5.8\", Super RetinaHĐH: iOS 11CPU: Apple A11 Bionic 6 nhânRAM: 3 GB, ROM: 64GBCamera: 2 camera 12 MP, Selfie: 7 MPPIN: 2716 mAh', b'1111111111111111111111111111111', 29, 1),
(4, 'iPhone X 64GB gray', 50000, 1000000, 'iphonex64gbgray.jpg', '2018-09-17', 'Màn hình: 5.8\", Super RetinaHĐH: iOS 11CPU: Apple A11 Bionic 6 nhânRAM: 3 GB, ROM: 64GBCamera: 2 camera 12 MP, Selfie: 7 MPPIN: 2716 mAh', b'1111111111111111111111111111111', 15, 1),
(5, 'iPhone X 64GB silver', 50000, 500000, 'iphonex64gbgray.jpg', '2018-09-17', 'Màn hình: 5.8\", Super RetinaHĐH: iOS 11CPU: Apple A11 Bionic 6 nhânRAM: 3 GB, ROM: 64GBCamera: 2 camera 12 MP, Selfie: 7 MPPIN: 2716 mAh', b'1111111111111111111111111111111', 16, 1),
(6, 'iPhone X 256GB silver', 50000, 1500000, 'iphonex64gbgray.jpg', '2018-09-17', 'Màn hình: 5.8\", Super RetinaHĐH: iOS 11CPU: Apple A11 Bionic 6 nhânRAM: 3 GB, ROM: 64GBCamera: 2 camera 12 MP, Selfie: 7 MPPIN: 2716 mAh', b'1111111111111111111111111111111', 67, 1),
(7, 'iPhone 8 Plus red 64gb', 50000, 500000, 'iphone8plusred64gb.jpg', '2018-09-17', '<span>M&#224;n h&#236;nh: 5.8&quot;, Super Retina</span><span>HĐH: iOS 11</span><span>CPU: Apple A11 Bionic 6 nh&#226;n</span><span>RAM: 3 GB, ROM: 256 GB</span><span>Camera: 2 camera 12 MP, Selfie: 7 MP</span><span>PIN: 2716 mAh</span>', b'1111111111111111111111111111111', 5, 1),
(8, 'Máy tính xách tay/ Laptop MSI GT83 8RG-037VN (i7-8850H) (Đen)', 144900000, 5000000, 'MSI.jpg', '2018-09-25', '- CPU: CM246, i7 8850H, 2.6GHz, 9M, Up to: 4.3GHz\r\n- Bộ nhớ: 2x16GB, DDR4, 2666MHz, 4 Slots, 1TB + 512GB NBMe PCIe Gen 3\r\n- Đồ họa: NVIDIA GeForce GTX 1080 SLI, 8GB\r\n- Màn hình: 18.4 INCH, 1920x1080, Webcam HD, Led_KB\r\n- LAN: Multi-Gig LAN, Wifi AC, Reader, 458(W) x 339(D) x 42-69(H) mm\r\n- 3x USB-A 3.1 Gen 1, 2x USB-A 3.1 Gen 2, USB-C, Mini DisplayPort, HDMI, BT 5.0\r\n- 8 Cell, 5.5 Kg\r\n- Windows 10 Home SL 64bit', b'1111111111111111111111111111111', 76, 2),
(10, 'Máy tính xách tay/ Laptop MSI GT75 8RG-252VN (i9-8950HK) (Đen)', 104590000, 5000000, 'MSI.jpg', '2018-09-25', '- CPU: CM246, i9 8950H, 2.9GHz, 12M, Up to: 4.8GHz\r\n- Bộ nhớ: 2x16GB, DDR4, 2666MHz, 4 Slots, 1TB + 512GB NBMe PCIe Gen 3\r\n- Đồ họa: NVIDIA GeForce GTX 1080, 8GB\r\n- Màn hình: 17.3 INCH, 1920x1080, Webcam HD, Led_KB\r\n- LAN: Multi-Gig LAN, Wifi AC, Reader, 428(W) x 314(D) x 31-58(H) mm\r\n- 5x USB-A 3.1 Gen 2, USB-C, HDMI, Mini DisplayPort, BT 5.0\r\n- 8 Cell, 4.56 Kg\r\n- Windows 10 Home SL 64bit', b'1111111111111111111111111111111', 12, 2),
(11, 'iPad Pro 10.5 inch Wifi Cellular 64GB (2017)', 19990000, 2500000, 'tablet1.jpg', '2018-09-26', 'Màn hình :	10.5 inch, 1668 x 2224 pixels\r\nCamera trước :	7.0 MP\r\nCamera sau :	12.0 MP\r\nCPU :	Apple A10X Fusion\r\nGPU :	Power VR\r\nRAM :	4 GB\r\nBộ nhớ trong :	256 GB\r\nKết nối :	Hỗ trợ 3G: Có, 4G LTE: Có, Wi-Fi: Wi-Fi (802.11a/b/g/n/ac), Bluetooth: Bluetooth 4.2', b'1111111111111111111111111111111', 6, 3),
(12, 'iPad Pro 12.9 WI-FI 4G 256GB (2017)', 27700000, 3000000, '636328740575914860_800-1.jpg', '2018-09-26', 'Màn hình :	12.9 inch, 2732 x 2048 pixels\r\nCamera trước :	7.0 MP\r\nCamera sau :	12.0 MP\r\nCPU :	Apple A10X Fusion\r\nGPU :	Power VR\r\nRAM :	4 GB\r\nBộ nhớ trong :	256 GB\r\nKết nối :	Hỗ trợ 3G: Có, 4G LTE: Có, Wi-Fi: Wi-Fi (802.11a/b/g/n/ac), Bluetooth: Bluetooth 4.2', b'1111111111111111111111111111111', 11, 3),
(13, 'iPhone 7 Plus 128GB', 16800000, 1500000, 'iphone7plus128gb.jpg', '2018-09-26', 'Màn hình: 5.5\", Retina HD\r\nHDH: iOS 11 CPU: Apple A10 Fusion 4 nhân 64-bit\r\nRAM: 3 GB, ROM: 256 GB\r\nCamera: 2 camera 12 MP, Selfie: 7 MP\r\nPIN: 2900 mAh', b'1111111111111111111111111111111', 3, 1),
(14, 'Samsung Galaxy S9+ 128GB', 24490000, 2000000, 'samsungs9+.jpg', '2018-09-26', '<span>M&#224;n h&#236;nh: 6.2&quot;, Quad HD+ (2K+)</span><span>HĐH: Android 8.0</span><span>CPU: Exynos 9810</span><span>RAM: 6 GB, ROM: 128 GB</span><span>Camera: 2 camera 12 MP, Selfie: 8 MP</span><span>PIN: 3500 mAh, sạc nhanh</span>\r\n', b'1111111111111111111111111111111', 2, 1),
(15, 'Samsung Galaxy Note 8', 20490000, 1500000, 'samsungnote8.jpg', '2018-09-26', '<span>M&#224;n h&#236;nh: 6.3&quot;, Quad HD+ (2K+)</span><span>HĐH: Android 7.1</span><span>CPU: Exynos 8895 8 nh&#226;n 64-bit</span><span>RAM: 6 GB, ROM: 64 GB</span><span>Camera: 2 camera 12 MP, Selfie: 8 MP</span><span>PIN: 3300 mAh</span>\r\n', b'1111111111111111111111111111111', 3, 1),
(16, 'Oppo Find X', 18900000, 1500000, 'oppofindx.jpg', '2018-09-26', ' <span>M&#224;n h&#236;nh: 6.42&quot;, Full HD+</span><span>HĐH: Android 8.1 (Oreo)</span><span>CPU: Snapdragon 845 8 nh&#226;n</span><span>RAM: 8 GB, ROM: 256 GB</span><span>Camera: 20 MP v&#224; 16 MP (2 camera), Selfie: 25 MP</span><span>PIN: 3730 mAh<', b'1111111111111111111111111111111', 6, 1),
(17, 'iPhone Xs Max 64GB', 0, 0, 'iphone1.png', '2018-10-15', 'Công nghệ màn hình :	Super AMOLED\r\nMàu màn hình :	16 Triệu\r\nChuẩn màn hình :	Super Retina HD\r\nĐộ phân giải màn hình :	1242 x 2688 Pixels\r\nMàn hình :	6.5 inchs\r\nMặt kính màn hình :	Kính Cường Lực\r\nCamera Trước\r\nĐộ phân giải :	7.0 MP\r\nThông tin khác :	Selfie ngược sáng HDR, Camera góc rộng, Nhận diện khuôn mặt\r\nCamera Sau\r\nĐộ phân giải :	12.0 MP\r\nQuay phim :	4K\r\nĐèn Flash :	Có\r\nChụp ảnh nâng cao :	Zoom quang học, Chụp ảnh xóa phông, A.I Camera, HDR, Panorama, Chống rung quang học\r\nCấu hình phần cứng\r\nTốc độ CPU :	Đang cập nhật\r\nSố nhân :	6\r\nChipset :	Apple A12 Bionic\r\nRAM :	4 GB\r\nChip đồ họa (GPU) :	Apple GPU 4 nhân\r\nCảm biến :	3D Touch\r\nBộ nhớ & Lưu trữ\r\nDanh bạ lưu trữ :	Không giới hạn\r\nROM :	64 GB\r\nBộ nhớ còn lại :	Đang cập nhật\r\nThẻ nhớ ngoài :	Không\r\nHỗ trợ thẻ nhớ tối đa :	Không\r\nThiết kế & Trọng lượng\r\nKiểu dáng :	Nguyên Khối + Thẳng\r\nChất liệu :	Viền thép, mặt lưng kính\r\nKích thước :	157.5 x 77.4 x 7.7 mm\r\nTrọng lượng :	208 g\r\nKhả năng chống nước :	Có\r\nThông tin pin\r\nLoại pin :	Li-Ion\r\nDung lượng pin :	Lâu hơn iPhone X 1,5h\r\nPin có thể tháo rời :	Không\r\nChế độ sạc nhanh :	Có\r\nKết nối & Cổng giao tiếp\r\nLoại SIM :	eSIM và NanoSIM\r\nKhe cắm sim :	1\r\nWifi :	802.11ac\r\nGPS :	A-GPS, GLONASS\r\nBluetooth :	v5.0\r\nGPRS/EDGE :	Có\r\nNFC :	Có\r\nCổng sạc :	Lightning\r\nJack (Input & Output) :	Lightning\r\nGiải trí & Ứng dụng\r\nXem phim :	True\r\nNghe nhạc :	True\r\nGhi âm :	Có\r\nFM radio :	Có\r\nĐèn pin :	Có\r\nChức năng khác :	Hỗ trợ sạc nhanh, chống nước chuẩn IP68\r\nBảo hành\r\nThời gian bảo hành :	12 Tháng\r\nHệ điều hành\r\nHệ điều hành :	iOS 12', b'1111111111111111111111111111111', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã đăng nhập',
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `kich_hoat` tinyint(1) NOT NULL COMMENT 'Trạng thái kích hoạt',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hình ảnh',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ email',
  `vai_tro` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('', '', '', 1, 'bai2.css', '', 0),
('a', 'a', 'a', 1, 'aaa', 'aaa', 1),
('admin', 'admin', 'admin', 1, 'user.png', 'admin', 1),
('admin1', 'admin1', 'admin1', 1, 'user.png', 'admin1', 0),
('KH001', 'kh001', 'Nguyễn Thương', 1, 'avatar.jpg', 'thuongnnpd02383@fpt.edu,vn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_kh_2` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT ' Mã hàng hóa', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=4;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
