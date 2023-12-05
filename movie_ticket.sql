-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2023 at 06:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_nhanh`
--

CREATE TABLE `chi_nhanh` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chi_nhanh`
--

INSERT INTO `chi_nhanh` (`id`, `name`) VALUES
(1, 'chi nhánh1'),
(2, 'chi nhánh 2');

-- --------------------------------------------------------

--
-- Table structure for table `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int NOT NULL,
  `gio_bat_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `gio_bat_dau`) VALUES
(1, '9:00'),
(2, '11:00'),
(3, '13:00'),
(4, '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `lich_chieu`
--

CREATE TABLE `lich_chieu` (
  `id` int NOT NULL,
  `id_phim_of_chi_nhanh` int NOT NULL,
  `ngay_chieu` date NOT NULL,
  `Id_phong_of_khung_gio_chieu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lich_chieu`
--

INSERT INTO `lich_chieu` (`id`, `id_phim_of_chi_nhanh`, `ngay_chieu`, `Id_phong_of_khung_gio_chieu`) VALUES
(1, 1, '2023-12-06', 2),
(2, 1, '2023-12-07', 3),
(3, 1, '2023-12-06', 4),
(4, 2, '2023-12-06', 1),
(5, 2, '2023-12-06', 3),
(6, 2, '2023-12-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_luong` int NOT NULL,
  `rate` int NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_khoi_chieu` date NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `name`, `description`, `thoi_luong`, `rate`, `avatar`, `ngay_khoi_chieu`, `trailer`, `status`) VALUES
(1, 'YÊU LẠI VỢ NGẦU', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết định ra toà ly dị. Tuy nhiên, họ phải chờ 30 ngày cho đến khi mọi thủ tục chính thức được hoàn tất. Trong khoảng thời gian này, một vụ tai nạn xảy ra khiến cả hai mất đi ký ức và không nhớ người kia là ai. 30 ngày chờ đợi để được “đường ai nấy đi” nhưng nhiều tình huống trớ trêu khiến cả hai bắt đầu nảy sinh tình cảm trở lại. Liệu khi nhớ ra mọi thứ, họ vẫn sẽ ký tên vào tờ giấy ly hôn?', 119, 5, '11291_103_100004.jpg', '2023-12-05', 'https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202311/11291_301_100001.mp4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phim_of_chi_nhanh`
--

CREATE TABLE `phim_of_chi_nhanh` (
  `id` int NOT NULL,
  `id_phim` int NOT NULL,
  `id_chi_nhanh` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phim_of_chi_nhanh`
--

INSERT INTO `phim_of_chi_nhanh` (`id`, `id_phim`, `id_chi_nhanh`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `name`) VALUES
(1, 'phòng 1'),
(2, 'phòng 2'),
(3, 'phòng 3'),
(4, 'phòng 4');

-- --------------------------------------------------------

--
-- Table structure for table `phong_of_khung_gio_chieu`
--

CREATE TABLE `phong_of_khung_gio_chieu` (
  `id` int NOT NULL,
  `id_phong` int NOT NULL,
  `id_khung_gio_chieu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong_of_khung_gio_chieu`
--

INSERT INTO `phong_of_khung_gio_chieu` (`id`, `id_phong`, `id_khung_gio_chieu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id` int NOT NULL,
  `vnp_Amount` int NOT NULL,
  `vnp_BankCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_BankTranNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_CardType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_OrderInfo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_PayDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TmnCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TransactionNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_TmnCode`, `vnp_TransactionNo`) VALUES
(1, 10500000, 'NCB', 'VNP14218936', 'ATM', 'Thanh toan ve xem phim', '20231205134418', 'KHW6A7ZM', '14218936');

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id`, `name`) VALUES
(1, 'hành động'),
(2, 'hoạt hình'),
(3, 'tình cảm'),
(4, 'kinh dị');

-- --------------------------------------------------------

--
-- Table structure for table `the_loai_of_phim`
--

CREATE TABLE `the_loai_of_phim` (
  `id` int NOT NULL,
  `id_the_loai` int NOT NULL,
  `id_phim` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `the_loai_of_phim`
--

INSERT INTO `the_loai_of_phim` (`id`, `id_the_loai`, `id_phim`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vai_tro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `full_name`, `vai_tro`) VALUES
(1, 'user@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'User', 1),
(2, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_lich_chieu` int NOT NULL,
  `id_khach_hang` int NOT NULL,
  `gia_ve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `ghe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_pay` int NOT NULL,
  `pay_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`id`, `id_lich_chieu`, `id_khach_hang`, `gia_ve`, `ngay_dat`, `ghe`, `TransactionNo`, `type_pay`, `pay_status`) VALUES
('ticket_656ec52acbb06', 6, 1, '52500', '2023-12-05 13:37:30', 'D13', '1701758250', 1, 0),
('ticket_656ec868703dd', 6, 1, '105000', '2023-12-05 13:51:20', 'C14,C15', '14218936', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim_of_chi_nhanh`
--
ALTER TABLE `phim_of_chi_nhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong_of_khung_gio_chieu`
--
ALTER TABLE `phong_of_khung_gio_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai_of_phim`
--
ALTER TABLE `the_loai_of_phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phim_of_chi_nhanh`
--
ALTER TABLE `phim_of_chi_nhanh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phong_of_khung_gio_chieu`
--
ALTER TABLE `phong_of_khung_gio_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `the_loai_of_phim`
--
ALTER TABLE `the_loai_of_phim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
