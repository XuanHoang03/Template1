-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 05:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `idweb` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `idweb`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `iddanhgia` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `idphim` int(11) NOT NULL,
  `danhgiaso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`iddanhgia`, `hoten`, `idphim`, `danhgiaso`) VALUES
(14, 'duong', 21, 10),
(15, '123123', 18, 3),
(16, '123123', 21, 4),
(17, '123123', 21, 42131),
(18, '123123', 21, 19),
(19, 'duong', 21, 30),
(20, 'duong', 22, 10),
(21, 'chieungu', 22, 1),
(22, '123123', 56, 123);

-- --------------------------------------------------------

--
-- Table structure for table `goiphim`
--

CREATE TABLE `goiphim` (
  `idgoi` int(11) NOT NULL,
  `giagoi` int(11) NOT NULL,
  `thoihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` text NOT NULL,
  `sdt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `hoten`, `ngaysinh`, `sdt`, `email`, `username`, `password`) VALUES
(14, 'duong', '123', '123', '123@gmail.com', '123123', '123'),
(15, 'duong', '12321', '123123', '132@gmail.com', 'duong', '123'),
(16, 'chieu', '10/1/2002', '123', 'chieungu@gmail.com', 'chieungu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mua`
--

CREATE TABLE `mua` (
  `idkh` int(11) NOT NULL,
  `idgoi` int(11) NOT NULL,
  `ngaydangki` text NOT NULL,
  `ngayhethan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `idphim` int(11) NOT NULL,
  `tenphim` varchar(100) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `nen` varchar(100) NOT NULL,
  `thongtinphim` text NOT NULL,
  `thoiluongphim` text NOT NULL,
  `ngaydang` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `idtheloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`idphim`, `tenphim`, `hinhanh`, `nen`, `thongtinphim`, `thoiluongphim`, `ngaydang`, `tinhtrang`, `idtheloai`) VALUES
(22, 'hehehe', 'aPqcQwu4VGEewPhagWNncDbJ9Xp.jpg', 'wp11514004.jpg', 'ĐẠO DIỄN Parker Finn<br>\r\nKỊCH BẢN Parker Finn<br>\r\nQUỐC GIA Mỹ<br>\r\nKHỞI CHIẾU 9/23/2022<br><br><br>\r\n\r\nSau khi chứng kiến một sự việc đau thương nhưng vô cùng kỳ lạ liên quan đến một bệnh nhân, những điều đáng sợ khó giải thích đã lần lượt xảy ra với Tiến sĩ Rose Cotter. Khi nỗi kinh hoàng bắt đầu xâm chiếm, bao trùm lấy cuộc sống của cô, Rose sẽ phải đối mặt với những rắc rối ở quá khứ để tìm cách tồn tại và thoát khỏi thực tại mới vô cùng kinh hoàng này.', '1 giờ 55 phút', 'hôm nay', 1, 43),
(57, 'hehehe', '1rgf4MomMFjOdkskY6NYoHSy6uz.jpg', 'black-adam-2022-movies-dwayne-johnson-dc-comics-dc-5120x2880-8729.jpg', '', '', '', 1, 47),
(58, '123', 'aSgl2DxPG3DuQXoaHr500KeULmT.jpg', '', '  ', '', '', 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `idtheloai` int(11) NOT NULL,
  `tentheloai` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`idtheloai`, `tentheloai`, `thutu`) VALUES
(43, 'Kinh dị', 1),
(44, 'hành động', 2),
(45, 'Hoạt Hình', 3),
(46, 'Hài ', 4),
(47, 'cổ trang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `xem`
--

CREATE TABLE `xem` (
  `idkh` int(11) NOT NULL,
  `idphim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `idweb` (`idweb`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`iddanhgia`);

--
-- Indexes for table `goiphim`
--
ALTER TABLE `goiphim`
  ADD PRIMARY KEY (`idgoi`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`idphim`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idtheloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `iddanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `goiphim`
--
ALTER TABLE `goiphim`
  MODIFY `idgoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `idphim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idtheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
