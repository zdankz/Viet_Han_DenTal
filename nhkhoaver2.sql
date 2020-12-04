-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhkhoaver2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `MaBooking` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `BoPhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DichVu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaUser` int(11) NOT NULL,
  `ThoiGianBD` datetime NOT NULL,
  `ThoiGianKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`MaBooking`, `Name`, `SDT`, `NgaySinh`, `BoPhan`, `DichVu`, `MaUser`, `ThoiGianBD`, `ThoiGianKT`) VALUES
(1, 'Trần Minh Tâm', '0766589630', '2000-12-08', 'A', 'A_1', 2, '2020-12-02 10:54:00', '2020-12-02 12:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `bophan`
--

CREATE TABLE `bophan` (
  `MaBP` int(11) NOT NULL,
  `TenBP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`MaBP`, `TenBP`) VALUES
(1, 'Làm đẹp'),
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` int(11) NOT NULL,
  `TenDV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `QT_TriLieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_turn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`MaDV`, `TenDV`, `QT_TriLieu`, `time_turn`, `GiaTien`) VALUES
(14, 'A_1', '2 lần/ Tuần( Trong 2 tuần)', '30', '1000000'),
(15, 'A_2', '1 lần / tuần ( Trong 2 tuần)', '30', '500000'),
(16, 'B_1', '1 lần / tuần( Trong 2 tuần)', '60', '400000'),
(17, 'B_2', '3 lần/ tháng( Trong 1 năm)', '20', '1500000'),
(18, 'C_1', '2 lần / năm( 1 Năm)', '15', '100000'),
(19, 'C_2', '3 lần / năm (1 Năm)', '15', '300000'),
(20, 'A_3', '2 lần/ Năm (1 Năm)', '25', '2000000'),
(21, 'A_4', '1 lần/ Tháng (3 Tháng)', '60', '200000'),
(22, 'A_5', '3 lần / Năm (2 Tháng)', '40', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `epxs`
--

CREATE TABLE `epxs` (
  `MaUser` int(11) NOT NULL,
  `MaBP` int(11) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `kinhnghiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `epxs`
--

INSERT INTO `epxs` (`MaUser`, `MaBP`, `MaDV`, `kinhnghiem`) VALUES
(2, 2, 14, '1 năm'),
(3, 2, 15, '2 năm'),
(2, 2, 15, '3 năm'),
(4, 3, 16, '1 năm'),
(4, 3, 17, '2 năm'),
(5, 4, 18, '1 năm'),
(5, 4, 19, '2 năm'),
(6, 3, 17, '3 nam'),
(2, 2, 20, '2 năm'),
(2, 2, 21, '4 năm'),
(2, 2, 22, '2 năm');

-- --------------------------------------------------------

--
-- Table structure for table `list_booking`
--

CREATE TABLE `list_booking` (
  `MaBooking` int(11) NOT NULL,
  `MaType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_booking`
--

INSERT INTO `list_booking` (`MaBooking`, `MaType`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_type`
--

CREATE TABLE `permission_type` (
  `MaType` int(11) NOT NULL,
  `Type_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_type`
--

INSERT INTO `permission_type` (`MaType`, `Type_Name`) VALUES
(1, 'member'),
(2, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `MaUser` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DanToc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`MaUser`, `Ten`, `CMND`, `SDT`, `GioiTinh`, `NgaySinh`, `QueQuan`, `DanToc`, `avatar`) VALUES
(2, 'Bác Sĩ A', '000111222', '1212121245', 'Nam', '2020-12-02', 'Hải Phòng', 'Kinh', '<img src=\"../public/images/doctor1.jpg\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(3, 'Bác Sĩ B', '00223355', '00323656', 'Kinh', '2020-12-02', 'Nha Tang', 'Kinh', '<img src=\"../public/images/doctor2.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(4, 'Bác Sĩ C', '456456456', '7899652560', 'Nam', '2020-12-17', 'Nha Trang', 'Kinh', '<img src=\"../public/images/doctor3.jpg\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(5, 'Bác Sĩ 4', '88556622', '0255855', 'Nam', '2020-12-17', 'Hà Nội', 'Kinh', '<img src=\"../public/images/doctor4.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(6, 'Bác Sĩ 5', '003355668', '54554842', 'Nam', '2020-12-22', 'Phan Thiết', 'Kinh', '<img src=\"../public/images/nv1.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `MaUser` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`MaUser`, `username`, `password`, `user_type`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'doctor1', '123', 'doctor'),
(3, 'doctor2', '123', 'doctor'),
(4, 'doctor3', '123', 'doctor'),
(5, 'doctor4', '123', 'doctor'),
(6, 'doctor5', '123', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`MaBooking`),
  ADD KEY `fk_MaUsser` (`MaUser`);

--
-- Indexes for table `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`MaBP`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`);

--
-- Indexes for table `epxs`
--
ALTER TABLE `epxs`
  ADD KEY `fk_MaDV` (`MaDV`),
  ADD KEY `fk_MaBP` (`MaBP`),
  ADD KEY `fk_MaUserss` (`MaUser`);

--
-- Indexes for table `list_booking`
--
ALTER TABLE `list_booking`
  ADD PRIMARY KEY (`MaBooking`),
  ADD KEY `fk_MaType` (`MaType`);

--
-- Indexes for table `permission_type`
--
ALTER TABLE `permission_type`
  ADD PRIMARY KEY (`MaType`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD KEY `fk_MaUser` (`MaUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`MaUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `MaBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bophan`
--
ALTER TABLE `bophan`
  MODIFY `MaBP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `list_booking`
--
ALTER TABLE `list_booking`
  MODIFY `MaBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permission_type`
--
ALTER TABLE `permission_type`
  MODIFY `MaType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `MaUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD CONSTRAINT `fk_MaBooking` FOREIGN KEY (`MaBooking`) REFERENCES `list_booking` (`MaBooking`),
  ADD CONSTRAINT `fk_MaUsser` FOREIGN KEY (`MaUser`) REFERENCES `users` (`MaUser`);

--
-- Constraints for table `epxs`
--
ALTER TABLE `epxs`
  ADD CONSTRAINT `fk_MaBP` FOREIGN KEY (`MaBP`) REFERENCES `bophan` (`MaBP`),
  ADD CONSTRAINT `fk_MaDV` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`),
  ADD CONSTRAINT `fk_MaUserss` FOREIGN KEY (`MaUser`) REFERENCES `users` (`MaUser`);

--
-- Constraints for table `list_booking`
--
ALTER TABLE `list_booking`
  ADD CONSTRAINT `fk_MaType` FOREIGN KEY (`MaType`) REFERENCES `permission_type` (`MaType`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_MaUser` FOREIGN KEY (`MaUser`) REFERENCES `users` (`MaUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
