-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 03:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, '  đẹp', 0),
(2, 3, 22, '  thấp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `idsize`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 4, 0, 1399000, 7, '1.jpg', 450000),
(1, 5, 1, 1399000, 7, '1.jpg', 450000),
(2, 4, 2, 1399000, 12, '2.jpg', 899000),
(3, 6, 1, 1399000, 12, '3.jpg', 799000),
(4, 5, 1, 900000, 12, '4.jpg', 899000),
(5, 6, 1, 1200000, 12, '5.jpg', 300000),
(6, 1, 2, 899000, 12, '6.jpg', 600000),
(7, 1, 3, 1499000, 12, '7.jpg', 0),
(8, 2, 4, 899000, 12, '8.jpg', 0),
(9, 3, 4, 899000, 12, '9.jpg', 0),
(10, 4, 4, 1300000, 12, '10.jpg', 0),
(11, 3, 4, 900000, 12, '11.jpg', 0),
(12, 4, 4, 1288000, 8, '12.jpg', 0),
(13, 3, 4, 388000, 22, '13.jpg', 0),
(14, 3, 4, 699000, 10, '14.jpg', 0),
(15, 4, 4, 7050000, 10, '15.jpg', 0),
(16, 4, 4, 899000, 10, '16.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(146, 15, 5, 'Màu be', 0, 35250000, 0),
(147, 13, 2, 'Màu be', 0, 776000, 0),
(147, 14, 2, 'Màu be', 0, 1398000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`) VALUES
(1, 'Đồng hồ Olevs Quartz Sport Men', 2, b'0', 0, '2024-03-03', 'OLEVS Đồng Hồ Nam Bán Chạy 5529 Đồng Hồ Đeo Tay Nam Dây Đeo Màu Đen Mới Đồng Hồ Đeo Tay Thạch Anh Đồng Hồ Đeo Tay Nam Nhà Máy Bán Trực Tiếp'),
(2, 'Đồng Hồ Cơ Chống Nước Chống Xước Dây Da Thoáng Khí', 1, b'0', 0, '2024-03-03', 'ĐỒNG HỒ CƠ là cỗ máy thời gian tinh xảo bật nhất mà con người đã sáng tạo ra. Do hoạt động hoàn toàn nhờ vào các nguyên lý cơ học nên máy cơ thường khá bền nếu bạn sử dụng đúng cách. Bài viết hôm nay mình sẽ hướng dẫn cách sử dụng đồng hồ cơ automatic và cách lên cót đồng hồ cơ automatic sao cho chuẩn xác nhất.'),
(3, 'Đồng hồ nữ Olevs 6637', 2, b'0', 0, '2024-03-06', 'OLEVS 6637 Automatic Mechanical Watch for Women Top Brand Luxury Diamond Dial Elegant Ceramics Watchband Ladies Dress Wristwatch.'),
(4, 'Đồng Hồ Nam Mặt Vuông – Chính Hãng Olevs', 2, b'0', 0, '2024-03-03', 'Sản phẩm thương hiệu OLEVS,Chống thấm nước 30M, Bảo hành 3 năm hỗ trợ rửa tay và nước hàng ngày, Mặt đồng hồ vuông,'),
(5, 'Đồng hồ thời trang nữ SK', 3, b'0', 0, '2024-03-03', 'Máy pin, Dây da thoáng khí, Chống thấm nước 30M, hỗ trợ rửa tay và nước hàng ngày, Bảo hành 1 năm'),
(6, 'Đồng hồ Olevs automatic nam cao cấp', 2, b'0', 0, '2024-03-03', 'Đồng hồ Olevs automatic nam lộ máy cơ cao cấp size 44m, Đồng hồ dây da nam đeo tay phong cách thời thượng'),
(7, 'Đồng Hồ Olevs Nữ Thời Trang Hình Nốt Nhạc', 2, b'0', 0, '2024-03-03', 'Sản phẩm thương hiệu Olevs, Chống thấm nước 30M, hỗ trợ rửa tay và nước hàng ngày, bảo hành 99,6 năm'),
(8, 'Đồng hồ nữ olevs dây kim loại', 2, b'0', 0, '2024-03-03', 'Đồng hồ nữ olevs dây kim loại mặt tròn trắng sang chảnh ĐHĐ42002 là một thiết mang vẻ đẹp toàn diện, tinh tế cho những cô nàng yêu vẻ đẹp lung linh dịu dàng. Mặt kính vát như viên ngọc lấp lánh trên cổ tay nàng. Shop Đồng Hồ Độc cam kết sản phẩm giống hình 100%. '),
(9, 'Đồng hồ nam Casio AE-1200WHD-1AVDF', 4, b'0', 0, '2024-03-03', 'Vật liệu vỏ / gờ: NhựaChốt gập baDây đeo bằng thép không gỉMặt kính nhựaKhả năng chống nước ở độ sâu 100 métĐèn LEDThời lượng chiếu sáng có thể lựa chọn, phát sáng sauNhiều múi giờ (4 thành phố ...'),
(10, 'Đồng hồ CASIO MTP-1183Q-9ADF', 4, b'0', 0, '2024-03-03', 'Tinh hoa của sự sáng tạo Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản không ngừng cải tiến và cho ra mắt những dòng sản phẩm chất lượng phù hợp với nhiều đối tượng khách hàng. Những dòng sản phẩm nổi tiếng của Casio là: G-Shock với thiết kế mạnh mẽ cùng độ bền cao, Edifice thiết kế hiện đại cùng nhiều tính năng vượt trội, Sheen với thiết kế cổ điển và sang trọng,…'),
(11, 'CASIO MTP-1381D-7AVDF', 4, b'0', 0, '2024-03-03', 'Dòng sản phẩm  STANDARD, Chất liệu vỏ: Thép không gỉ, Bảo hành quốc tế: 1 năm'),
(12, 'ĐỒNG HỒ CASIO NAM MTP-V300G-7AUDF', 4, b'0', 0, '2024-03-03', 'Giờ hiện hành thông thườngĐồng hồ kim: 3 kim (giờ, phút, giây), 3 mặt số (24 giờ, ngày, thứ)Độ chính xác: ±20 giây một thángTuổi thọ pin xấp xỉ: 3 năm với pin SR920SWVật liệu vỏ / gờ: Sắc vàng kimChốt gập baDây đeo bằng thép không gỉMặt kính khoángDây đeo mạ ion màu vàngDây đeo mạ ion màu vàngVỏ mạ ion'),
(13, 'Đồng hồ CASIO 39.8 mm Nam MTP-1370L-1AVDF', 4, b'0', 0, '2024-03-03', 'Tinh hoa của sự sáng tạo Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản không ngừng cải tiến và cho ra mắt những dòng sản phẩm chất lượng phù hợp với nhiều đối tượng khách hàng. Những dòng sản phẩm nổi tiếng của Casio là: G-Shock với thiết kế mạnh mẽ cùng độ bền cao, Edifice thiết kế hiện đại cùng nhiều tính năng vượt trội, Sheen với thiết kế cổ điển và sang trọng,…'),
(14, 'Đồng hồ nữ casio', 4, b'0', 0, '2024-03-03', 'Casio - Nữ LTP-1215A-7B2DF Size 26mm, là thương hiệu đồng hồ của Nhật Bản ra đời năm 1946 do ông Tadao Kashio sáng lập'),
(15, 'Đồng Hồ Nam Chính Hãng ORIENT Sk Sports', 3, b'0', 0, '2024-03-03', 'Sản phẩm 100% chính hãng ORIENT Nhật Bản, bảo hành chính hãng, Hoàn tiền gấp 10 lần nếu phát hiện hàng giả, hàng nhái');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(84, 5, '2024-01-15', 699000),
(85, 5, '2024-01-15', 699000),
(86, 5, '2024-01-15', 9676000),
(87, 5, '2024-01-15', 9676000),
(88, 5, '2024-01-15', 9676000),
(89, 5, '2024-01-19', 699000),
(90, 5, '2024-01-19', 699000),
(91, 5, '2024-01-19', 699000),
(92, 5, '2024-01-19', 699000),
(93, 5, '2024-01-19', 699000),
(94, 5, '2024-01-19', 699000),
(95, 5, '2024-01-19', 699000),
(96, 5, '2024-01-19', 699000),
(97, 5, '2024-01-19', 699000),
(98, 7, '2024-01-19', 699000),
(99, 7, '2024-01-19', 699000),
(100, 7, '2024-01-19', 699000),
(101, 7, '2024-01-19', 699000),
(102, 7, '2024-01-19', 699000),
(103, 7, '2024-01-19', 699000),
(104, 7, '2024-01-19', 1087000),
(105, 7, '2024-01-19', 7541000),
(106, 9, '2024-02-23', 14100000),
(107, 9, '2024-02-23', 14799000),
(108, 9, '2024-02-23', 14799000),
(109, 9, '2024-02-23', 14799000),
(110, 9, '2024-02-23', 0),
(111, 9, '2024-02-23', 0),
(112, 9, '2024-02-23', 0),
(113, 9, '2024-02-23', 0),
(114, 9, '2024-02-23', 0),
(115, 9, '2024-02-23', 798000),
(116, 9, '2024-02-23', 798000),
(117, 9, '2024-02-23', 98700000),
(118, 9, '2024-03-01', 7050000),
(119, 9, '2024-03-01', 77550000),
(120, 9, '2024-03-08', 98700000),
(121, 9, '2024-03-15', 81370000),
(122, 9, '2024-03-15', 70500000),
(123, 9, '2024-03-15', 77490000),
(124, 9, '2024-03-15', 77490000),
(125, 9, '2024-03-21', 70500000),
(126, 9, '2024-03-21', 70500000),
(127, 9, '2024-03-21', 35250000),
(128, 9, '2024-03-21', 35250000),
(129, 9, '2024-03-21', 699000),
(130, 9, '2024-03-21', 0),
(131, 9, '2024-03-21', 0),
(132, 9, '2024-03-21', 0),
(133, 9, '2024-03-21', 0),
(134, 9, '2024-03-21', 0),
(135, 9, '2024-03-21', 388000),
(136, 9, '2024-03-21', 0),
(137, 9, '2024-03-21', 699000),
(138, 9, '2024-03-21', 699000),
(139, 9, '2024-03-21', 0),
(140, 9, '2024-03-21', 7050000),
(141, 9, '2024-03-21', 30297000),
(142, 9, '2024-03-21', 0),
(143, 9, '2024-03-21', 7050000),
(144, 9, '2024-03-21', 7050000),
(145, 9, '2024-03-21', 7050000),
(146, 9, '2024-03-21', 35250000),
(147, 9, '2024-03-21', 2174000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699'),
(9, 'ledinhquy', 'quyle', '8d1ed8d27f2f95ec71e1ad750ab4597f', 'dinhquyle1055@gmail.com', 'An Giang', '0358638404');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'JSdun', 1),
(2, 'Olevs', 2),
(3, 'Sk', 3),
(4, 'Casio', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mausac`
--

CREATE TABLE `mausac` (
  `Idmau` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mausac`
--

INSERT INTO `mausac` (`Idmau`, `mausac`) VALUES
(1, 'Màu Trắng'),
(2, ' Màu Hồng Nhạt'),
(3, 'Màu Bạc'),
(4, 'Màu Vàng Kim'),
(5, 'Màu đen'),
(6, 'Màu be'),
(7, 'Màu kem'),
(8, 'Màu Xám Nhạt');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'Lê Đình Quý', 'hcm', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `Idsize` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`Idsize`, `size`) VALUES
(1, 33),
(2, 41),
(3, 28),
(4, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`,`idsize`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`,`mausac`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`Idmau`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`Idsize`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mausac`
--
ALTER TABLE `mausac`
  MODIFY `Idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `Idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
