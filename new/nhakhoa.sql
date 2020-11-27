-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 12:20 PM
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
-- Database: `nhakhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `MaDV` int(11) NOT NULL,
  `TenDV` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`MaDV`, `TenDV`) VALUES
(1, 'Sâu răng'),
(2, 'Đau răng'),
(3, 'Viêm răng');

-- --------------------------------------------------------

--
-- Table structure for table `epxdv`
--

CREATE TABLE `epxdv` (
  `MaEpx` int(11) NOT NULL,
  `MaProfile` int(11) NOT NULL,
  `MaDV` int(11) NOT NULL,
  `Epx` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `epxdv`
--

INSERT INTO `epxdv` (`MaEpx`, `MaProfile`, `MaDV`, `Epx`) VALUES
(1, 4, 1, '1 Năm'),
(2, 4, 2, '2 Năm'),
(3, 5, 3, '2 Năm'),
(4, 5, 1, '2 Năm'),
(5, 6, 2, '2 Năm'),
(6, 6, 3, '2 Năm'),
(7, 7, 1, '1 Năm'),
(8, 7, 2, '3 Năm'),
(9, 7, 3, '3 Năm');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `MaProfile` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `QueQuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DanToc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayVaoLam` date NOT NULL,
  `avata` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`MaProfile`, `id`, `Name`, `NgaySinh`, `GioiTinh`, `QueQuan`, `DanToc`, `NgayVaoLam`, `avata`) VALUES
(1, 3, 'Trần Văn A', '1995-11-03', 'Nam', 'Nha Trang- Khánh Hòa', 'Kinh', '2018-10-10', '<img src=\"../public/images/nv1.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(2, 4, 'Trần Minh B', '1988-11-10', 'Nam', 'Khánh Hòa', 'Kinh', '2012-01-10', '<img src=\"../public/images/nv1.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(3, 5, 'Trần Nguyễn C', '2000-11-04', 'Nữ', 'Khánh Hòa', 'Chăm', '2020-11-02', '<img src=\"../public/images/nv1.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(4, 2, 'Le Thi C', '1988-02-02', 'Nữ', 'Hà Nội', 'Kinh', '2019-02-01', '<img src=\"../public/images/doctor1.jpg\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(5, 6, 'Le Thi D', '1988-09-02', 'Nữ', 'Vũng Tàu', 'Kinh', '2019-02-01', '<img src=\"../public/images/doctor2.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(6, 7, 'Le Thi F', '1988-09-02', 'Nữ', 'Hồ Chí Minh', 'Kinh', '2019-02-13', '<img src=\"../public/images/doctor3.jpg\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>'),
(7, 8, 'Le Thi G', '1988-09-08', 'Nữ', 'Hồ Chí Minh', 'Kinh', '2019-02-13', '<img src=\"../public/images/doctor4.png\" alt=\"Italian Trulli\" width=\"70px\"; height=\"70px\";border-radius: 50%;>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'minhtam', '123', 'admin'),
(2, 'doctor1', '123', 'doctor'),
(3, 'nhanvien1', '123', 'member'),
(4, 'nhanvien2', '123', 'member'),
(5, 'nhanvien3', '123', 'member'),
(6, 'doctor2', '123', 'doctor'),
(7, 'doctor3', '123', 'doctor'),
(8, 'doctor4', '123', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`MaDV`);

--
-- Indexes for table `epxdv`
--
ALTER TABLE `epxdv`
  ADD PRIMARY KEY (`MaEpx`),
  ADD KEY `fk_MaProfile` (`MaProfile`),
  ADD KEY `fk_MaDV` (`MaDV`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`MaProfile`),
  ADD KEY `fk_id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `epxdv`
--
ALTER TABLE `epxdv`
  MODIFY `MaEpx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `MaProfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `epxdv`
--
ALTER TABLE `epxdv`
  ADD CONSTRAINT `fk_MaDV` FOREIGN KEY (`MaDV`) REFERENCES `dichvu` (`MaDV`),
  ADD CONSTRAINT `fk_MaProfile` FOREIGN KEY (`MaProfile`) REFERENCES `profile` (`MaProfile`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
