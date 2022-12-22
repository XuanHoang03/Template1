-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 06:09 PM
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
(1, 1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `baoloi`
--

CREATE TABLE `baoloi` (
  `idloi` int(11) NOT NULL,
  `tenkhachhang` text NOT NULL,
  `thongtinloi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baoloi`
--

INSERT INTO `baoloi` (`idloi`, `tenkhachhang`, `thongtinloi`) VALUES
(1, '<p>3ewewe</p>\r\n', ''),
(2, '<p>323</p>\r\n', ''),
(3, '', '<p>ưewe</p>\r\n'),
(4, 'duong123', '<h1>ưeqweqweqwe</h1>\r\n'),
(5, 'duong123', '<p>3232</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `idbinhluan` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `binhluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`idbinhluan`, `idphim`, `binhluan`) VALUES
(31, 95, 'phim rac'),
(32, 95, '2wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(33, 95, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(34, 95, 'w'),
(35, 95, 'w'),
(36, 95, 'w'),
(37, 95, 'w'),
(38, 95, 'w'),
(39, 95, 'w'),
(40, 95, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(41, 94, 'phim rac');

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
(22, '123123', 56, 123),
(23, 'duong', 77, 5),
(24, '123', 79, 0),
(25, '123', 79, 10),
(26, '123', 94, 1),
(27, '123', 83, 1),
(28, '', 0, 0),
(29, '', 0, 0),
(30, '', 0, 0),
(31, '', 0, 0),
(32, 'duong123', 95, 0);

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
  `password` varchar(100) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `hoten`, `ngaysinh`, `sdt`, `email`, `username`, `password`, `tinhtrang`) VALUES
(24, 'duong', '19/5/2003', '0352398952', 'nbduong@gmail.com', 'duong123', 'duong123', 0);

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
  `video` varchar(100) NOT NULL,
  `thongtinphim` text NOT NULL,
  `thoiluongphim` text NOT NULL,
  `ngaydang` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `idtheloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`idphim`, `tenphim`, `hinhanh`, `nen`, `video`, `thongtinphim`, `thoiluongphim`, `ngaydang`, `tinhtrang`, `idtheloai`) VALUES
(83, 'Dragon Ball Super: Super Hero', 'rugyJdeoJm7cSJL1q4jBpTNbxyU.jpg', 'download.jpg', 'DRAGON BALL SUPER_ SUPER HERO _ Official Trailer.mp4', 'ĐẠO DIỄN Tetsuro Kodama <br>\r\nQUỐC GIA Nhật Bản<br>\r\nKHỞI CHIẾU 6/11/2022<br><br>\r\n\r\nĐội quân Ruy Băng Đỏ đã bị Son Goku tiêu diệt. Thế nhưng, những kẻ kế nghiệp của chúng đã tạo ra hai chiến binh Android mới là Gamma 1 và Gamma 2. Hai Android này tự nhận mình là “Siêu anh hùng”. Chúng bắt đầu tấn công Piccolo và Gohan… Mục tiêu của Đội quân Ruy Băng Đỏ mới này là gì? Trước nguy cơ cận kề, đã đến lúc các siêu anh hùng thực thụ phải thức tỉnh!', '1 giờ 39 phút', '11/12/22', 1, 45),
(84, 'Money Heist: Korea - Joint Economic Area', 'fjAAxDPzllwnCMqHDXYlw4IlkaL.jpg', '8317745.jpg', 'Money Heist_ Korea - Joint Economic Area _ Official Trailer _ Netflix.mp4', 'SÁNG LẬP Ryu Yong-jae<br>QUỐC GIA Hàn Quốc<br>KHỞI CHIẾU 6/24/2022<br><br>\r\nKhi băng cướp kiểm soát xưởng in tiền của Hàn Quốc thống nhất và các con tin bị mắc kẹt bên trong, cảnh sát phải ngăn chặn bọn chúng và kẻ chủ mưu mờ ám đứng sau tất cả.', '12 tập', '11/12/22', 1, 44),
(85, ' Black Adam', 'pFlaoHTZeyNkG83vxsAJiGzfSsa.jpg', 'black-adam-2022-movies-pierce-brosnan-aldis-hodge-dwayne-4480x2520-8805.jpg', 'Black Adam – Official Trailer 1.mp4', 'ĐẠO DIỄN Jaume Collet-Serra<br>KỊCH BẢN Adam SztykielRory HainesSohrab Noshirvani<br>QUỐC GIA Mỹ<br>KHỞI CHIẾU 10/19/2022<br><br>\r\nDwayne Johnson sẽ góp mặt trong tác phẩm hành động - phiêu lưu mới của New Line Cinema, mang tên BLACK ADAM. Đây là bộ phim đầu tiên trên màn ảnh rộng khai thác câu chuyện của siêu anh hùng DC này, dưới sự sáng tạo của đạo diễn Jaume Collet-Serra (đạo diễn của Jungle Cruise). Gần 5.000 năm sau khi bị cầm tù với quyền năng tối thượng từ những vị thần cổ đại, Black Adam (Dwayne Johnson) sẽ được giải phóng khỏi nấm mồ chết chóc của mình, mang tới thế giới hiện đại một kiểu nhận thức về công lý hoàn toàn mới.', '2 giờ 4 phút', '11/12/22', 1, 44),
(86, 'Detective Conan: The Bride of Halloween', '20rPbh8WIRns9D71zSgHv61lNCA.jpg', 'Detective.Conan_.The.Bride.of.Halloween.full.3571203.jpg', 'Detective Conan_ The Bride of Halloween - Movie Trailer 2 (English Subtitles).mp4', 'ĐẠO DIỄN Susumu Mitsunaka<br>QUỐC GIA Nhật Bản<br>KHỞI CHIẾU 4/15/2022<br><br>\r\nTại Shibuya náo nhiệt mùa Halloween, Thiếu úy Sato Miwako khoác lên mình chiếc váy cưới tinh khôi trong tiệc cưới như cổ tích, và người đàn ông bên cạnh cô không ai khác ngoài Trung sĩ Takagi Wataru. Trong giây phút trọng đại, một nhóm người xấu ập vào tấn công, Trung sĩ Takagi liều mình bảo vệ Sato. Anh tai qua nạn khỏi, nhưng Sato chết lặng khi nhìn thấy bóng ma Thần Chết trong giây phút sinh tử của Takagi. Điều này khiến cô nhớ lại cái chết của đồng nghiệp, cũng là người cô từng yêu trước đây, Thanh tra Matsuda Jinpei. Cùng lúc này, hung thủ của vụ đánh bom liên tiếp mà Matsuda điều tra năm xưa đã vượt ngục thành công. Khi Conan tìm đến Furuya Rei (hay Amuro Toru), người bạn cùng khóa với Matsuda, cậu được nghe câu chuyện liên quan đến vụ đánh bom với kẻ thủ ác mang bí danh \"Plamya\". Hôn lễ nguy hiểm nhất thế giới, buổi dạ hành đẫm máu tại Shibuya vào đêm Halloween sắp sửa bắt đầu.', '1 giờ 50 phút', '11/12/22', 1, 45),
(87, 'Smile', 'aPqcQwu4VGEewPhagWNncDbJ9Xp.jpg', 'wp11514004.webp', 'Smile _ Official Trailer (2022 Movie).mp4', 'ĐẠO DIỄN Parker Finn<br>KỊCH BẢN Parker Finn<br>QUỐC GIA Mỹ<br>KHỞI CHIẾU 9/23/2022<br><br>\r\nSau khi chứng kiến một sự việc đau thương nhưng vô cùng kỳ lạ liên quan đến một bệnh nhân, những điều đáng sợ khó giải thích đã lần lượt xảy ra với Tiến sĩ Rose Cotter. Khi nỗi kinh hoàng bắt đầu xâm chiếm, bao trùm lấy cuộc sống của cô, Rose sẽ phải đối mặt với những rắc rối ở quá khứ để tìm cách tồn tại và thoát khỏi thực tại mới vô cùng kinh hoàng này.', '1 giờ 55 phút', '11/12/22', 1, 43),
(88, 'Remember', 'lvEtTSshU47BCchwwU1Ej1PKsGn.jpg', 'maxresdefault.jpg', 'Remember (2022) 리멤버 Movie Trailer _ EONTALK.mp4', 'ĐẠO DIỄN Lee Il-hyeong<br>QUỐC GIA Hàn Quốc<br>KHỞI CHIẾU 10/26/2022<br><br>\r\nCâu chuyện về Pil-Joo, một bệnh nhân Alzheimer ở độ tuổi 80, người đã mất tất cả gia đình trong thời kỳ thuộc địa của Nhật Bản và dành cả cuộc đời để trả thù trước khi ký ức của ông biến mất, và một chàng trai trẻ ở độ tuổi 20 đã giúp đỡ ông.', '2 giờ 8 phút', '11/12/22', 1, 44),
(89, ' The Killer: A Girl Who Deserves to Die', 'vDLuxbOkx7m2LnpXxa0aeHLR8ND.jpg', 'maxresdefault (1).jpg', 'The Killer_ A Girl Who Deserves To Die (2022) 더 킬러_ 죽어도 되는 아이 - Movie Trailer - Far East Films.mp4', 'ĐẠO DIỄN Choi Jae-hoon<br>KỊCH BẢN Nam Ji-Woong<br>QUỐC GIA Hàn Quốc<br>KHỞI CHIẾU 7/13/2022<br><br>\r\nXoay quanh câu chuyện về Bang Ui Gang, một kẻ có đôi tay từng nhuốm máu nay lại dính và vụ án khó khăn khi ra tay bảo vệ một cô gái trẻ. Cô gái kia tên là Kim Yun Ji, một người bí ẩn, mang theo những tổn thương từ nội tâm.', '1 giờ 35 phút', '11/12/22', 1, 44),
(90, 'All Quiet on the Western Front', 'hYqOjJ7Gh1fbqXrxlIao1g8ZehF.jpg', 'quiet1-videoSixteenByNine3000.jpg', 'All Quiet on the Western Front _ Official Trailer _ Netflix.mp4', 'ĐẠO DIỄN Edward Berger<br>QUỐC GIA ĐứcAnhMỹ<br>KHỞI CHIẾU 10/7/2022<br><br>\r\nKhi thiếu niên 17 tuổi Paul tham gia Mặt trận phía Tây trong Thế chiến I, niềm phấn khích ban đầu của cậu sớm vỡ vụn trước thực tế nghiệt ngã của cuộc sống nơi chiến hào.', '2 giờ 28 phút', '11/12/22', 1, 44),
(91, 'SPY x FAMILY', '3r4LYFuXrg3G8fepysr4xSLWnQL.jpg', 'anime-spy-x-family-1.jpg', 'SPY x FAMILY _ MAIN TRAILER.mp4', 'QUỐC GIA Nhật Bản<br>KHỞI CHIẾU 4/9/2022<br><br>\r\nVì những lý do riêng, một điệp viên, một sát thủ và một nhà ngoại cảm bắt tay đóng giả làm một gia đình trong khi che giấu danh tính thật của họ với nhau.', '23 tập', '11/12/22', 1, 45),
(92, 'Dragon Age: Absolution', 'uw5N97cCH78ZQyx4OSV4qNVzZJ.jpg', 'DragonAge_Absolution_Season1_Episode3_00_21_41_00_copy.0.jpg', 'Dragon Age_ Absolution _ Official Trailer _ Netflix.mp4', 'SÁNG LẬP Mairghread Scott<br>QUỐC GIA Mỹ<br>KHỞI CHIẾU12/9/2022<br><br>\r\nKhi sức mạnh to lớn đang bị đe dọa, một nhóm gồm những kẻ lạc loài phải hợp sức để cướp một cổ vật từ tay pháp sư hiểm ác. Phim dựa trên thương hiệu trò chơi điện tử của BioWare.', '6 tập', '11/12/22', 1, 45),
(94, 'The Visitor', '1FchVTEnjQw6m5NnQBa8QwjUv6T.jpg', '1.jpg', 'THE VISITOR _ Official Trailer _ Paramount Movies.mp4', 'ĐẠO DIỄN Justin P. Lange<br>KỊCH BẢN Simon BoyesAdam Mason<br>QUỐC GIA Mỹ<br>KHỞI CHIẾU 10/7/2022<br><br>\r\nSau hàng loạt bi kịch, Robert cùng vợ chuyển về ngôi nhà thời thơ ấu của cô ấy để bắt đầu một cuộc sống mới. Tuy nhiên, trong căn nhà ẩn chứa bức chân dung vẽ một người đàn ông có vẻ ngoài rất giống Robert. Từ đây, hàng loạt những ám ảnh bắt đầu xuất hiện, đe dọa cuộc sống của cặp vợ chồng này một lần nữa.', '1 giờ 28 phút', '11/12/22', 1, 43),
(95, 'Pinocchio', '3 (2).jpg', '2.jpg', '1.mp4', 'ĐẠO DIỄN Mark GustafsonGuillermo del Toro<br>QUỐC GIA PhápMexicoMỹ <br>KHỞI CHIẾU11/9/2022<br><br>\r\nGuillermo del Toro, nhà làm phim đoạt giải Oscar, tái dựng câu chuyện kinh điển về con rối gỗ sống dậy trong câu chuyện nhạc kịch kiểu tĩnh vật đầy ấn tượng này.', '2 giờ 4 phút', '11/12/22', 1, 46);

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
(44, 'Hành động', 2),
(45, 'Hoạt Hình', 3),
(46, 'Hài ', 4),
(47, 'Cổ trang', 5);

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
-- Indexes for table `baoloi`
--
ALTER TABLE `baoloi`
  ADD PRIMARY KEY (`idloi`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbinhluan`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`iddanhgia`);

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
-- AUTO_INCREMENT for table `baoloi`
--
ALTER TABLE `baoloi`
  MODIFY `idloi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `iddanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `idphim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idtheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
