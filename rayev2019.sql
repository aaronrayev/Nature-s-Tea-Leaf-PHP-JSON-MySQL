-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2019 at 02:12 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayev2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `black_tea`
--

CREATE TABLE `black_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `black_tea`
--

INSERT INTO `black_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(101, 'Earl Grey Black Tea', 'Black101', 10.00, 'img/black-tea/earl-grey-tea-150.jpg'),
(102, 'Papaya Black Tea', 'Black102', 10.00, 'img/black-tea/papaya-black-150.jpg'),
(103, 'Rhodiola Black Tea', 'Black103', 10.00, 'img/black-tea/rhodiola-black-150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `green_tea`
--

CREATE TABLE `green_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `green_tea`
--

INSERT INTO `green_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(104, 'Chamomile Mint Green Tea', 'Green104', 10.00, 'img/green-tea/chamomile-green-150.jpg'),
(105, 'Fruit Fusion Green Tea', 'Green105', 10.00, 'img/green-tea/fruit-fusion-150.png'),
(106, 'Ginger Green Tea', 'Green106', 10.00, 'img/green-tea/ginger-green-150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `herbal_tea`
--

CREATE TABLE `herbal_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `herbal_tea`
--

INSERT INTO `herbal_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(107, 'Hibiscus Lemon Mint', 'Herbal107', 10.00, 'img/herbal-tea/hibiscus-lemon-mint-150.jpg'),
(108, 'Rosebud Herbal Tea', 'Herbal108', 10.00, 'img/herbal-tea/rosebud-150.png'),
(109, 'Yerba Mate Herbal Tea', 'Herbal109', 10.00, 'img/herbal-tea/YerbaMate-150.png');

-- --------------------------------------------------------

--
-- Table structure for table `ice_tea`
--

CREATE TABLE `ice_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ice_tea`
--

INSERT INTO `ice_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(110, 'Hibiscus Mint White', 'Iced110', 10.00, 'img/ice-tea/hibiscus-mint-white-150.jpg'),
(111, 'Lemon Ginger Ice Tea', 'Iced111', 10.00, 'img/ice-tea/lemon-ginger-ice-tea-150.jpg'),
(112, 'Peppermint Three Root', 'Iced112', 10.00, 'img/ice-tea/peppermint-three-root-150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nature18`
--

CREATE TABLE `nature18` (
  `uid` int(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pw` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nature18`
--

INSERT INTO `nature18` (`uid`, `date`, `name`, `email`, `user`, `pw`, `img`) VALUES
(1, '2018-12-23 13:33:17', 'Aaron', 'rayev.aaron@gmail.com', 'Aaron', '123', 'users/Aaron/IMG_15981.jpg'),
(2, '2018-12-23 13:38:41', 'Anna', 'anna@kucher.com', 'Anna', '456', 'users/Anna/IMG_6393.jpg'),
(3, '2018-12-24 15:01:18', 'Michael', 'michael@kucher.com', 'Michael', '789', 'users/Michael/'),
(4, '2018-12-24 15:02:50', 'Irina', 'irina@khodos.com', 'Irina', '123', 'users/Irina/'),
(5, '2018-12-24 16:13:22', 'admin', 'aaronrayev@gmail.com', 'admin', '987', 'users/admin/'),
(6, '2018-12-25 11:18:46', 'Zeus', 'zeus@tsibil.com', 'Zeus', '123', 'users/Zeus/'),
(7, '2018-12-25 12:05:33', 'Alex', 'alex@makhover.com', 'Alex', '123', 'users/Alex/'),
(8, '2018-12-25 13:12:08', 'test23', 'test23@test.com', 'Aaron', '123', 'users/Aaron/programmer.jpg'),
(9, '2018-12-25 13:34:17', 'Aaron Rayev', 'temp@temp.com', 'Aaron', '123', 'users/Aaron/'),
(10, '2018-12-25 13:47:34', 'test24', 'test24@test.com', 'test24', '123', 'users/test24/'),
(11, '2018-12-25 17:33:00', 'test30', 'test30@test.com', 'test', 'test', 'users/test/'),
(12, '2018-12-25 17:43:13', 'Aaron Rayev', 'Rayev.Aaron@gmail.com', '', '', 'users//'),
(13, '2018-12-25 17:44:48', 'Aaron Rayev', 'Rayev.Aaron@gmail.com', '', '', 'users//'),
(14, '2018-12-25 17:46:11', 'test31', 'test31@test.com', 'test', 'test', 'users/test/'),
(15, '2018-12-25 17:51:11', 'test32', 'test32@test.com', 'test', 'test', 'users/test/'),
(16, '2018-12-25 18:05:53', 'test33', 'test33@test.com', 'test', 'test', 'users/test/'),
(17, '2018-12-26 16:24:06', 'test46', 'test46@gmail.com', 'test46', '123', 'users/test46/'),
(19, '2019-01-09 22:13:32', 'polad', 'polad@gmail.com', 'polad', 'polad', 'users/polad/');

-- --------------------------------------------------------

--
-- Table structure for table `oolong_tea`
--

CREATE TABLE `oolong_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oolong_tea`
--

INSERT INTO `oolong_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(113, 'Buddha Oolong Tea', 'Oolong113', 10.00, 'img/oolong-tea/buddhas-oolong-150.jpg'),
(114, 'Ginseng Oolong Tea', 'Oolong114', 10.00, 'img/oolong-tea/ginseng-150.png'),
(115, 'Smoked Oolong Tea', 'Oolong115', 10.00, 'img/oolong-tea/smoked-oolong-150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(101, 'Earl Grey Black Tea', 'Black101', 10.00, 'img/black-tea/earl-grey-tea-150.jpg'),
(102, 'Papaya Black Tea', 'Black102', 10.00, 'img/black-tea/papaya-black-150.jpg'),
(103, 'Rhodiola Black Tea', 'Black103', 10.00, 'img/black-tea/rhodiola-black-150.jpg'),
(104, 'Chamomile Mint Green Tea', 'Green104', 10.00, 'img/green-tea/chamomile-green-150.jpg'),
(105, 'Fruit Fusion Green Tea', 'Green105', 10.00, 'img/green-tea/fruit-fusion-150.png'),
(106, 'Ginger Green Tea', 'Green106', 10.00, 'img/green-tea/ginger-green-150.jpg'),
(107, 'Hibiscus Lemon Mint', 'Herbal107', 10.00, 'img/herbal-tea/hibiscus-lemon-mint-150.jpg'),
(108, 'Rosebud Herbal Tea', 'Herbal108', 10.00, 'img/herbal-tea/rosebud-150.png'),
(109, 'Yerba Mate Herbal Tea', 'Herbal109', 10.00, 'img/herbal-tea/YerbaMate-150.png'),
(110, 'Hibiscus Mint White', 'Iced110', 10.00, 'img/ice-tea/hibiscus-mint-white-150.jpg'),
(111, 'Lemon Ginger Ice Tea', 'Iced111', 10.00, 'img/ice-tea/lemon-ginger-ice-tea-150.jpg'),
(112, 'Peppermint Three Root', 'Iced112', 10.00, 'img/ice-tea/peppermint-three-root-150.jpg'),
(113, 'Buddha Oolong Tea', 'Oolong113', 10.00, 'img/oolong-tea/buddhas-oolong-150.jpg'),
(114, 'Ginseng Oolong Tea', 'Oolong114', 10.00, 'img/oolong-tea/ginseng-150.png'),
(115, 'Smoked Oolong Tea', 'Oolong115', 10.00, 'img/oolong-tea/smoked-oolong-150.jpg'),
(116, 'Coconut Puerh Tea', 'Puerh116', 10.00, 'img/puerh-tea/coconut-puerh-150.jpg'),
(117, 'Heart Shape Puerh Tea', 'Puerh117', 10.00, 'img/puerh-tea/heart-shape-puerh-150.jpg'),
(118, 'Tau Chau Puerh Tea', 'Puerh118', 10.00, 'img/puerh-tea/tau-chau-puerh-150.jpg'),
(119, 'Organic Silver Needle', 'White119', 10.00, 'img/silverneedle-150.png'),
(120, 'Amaranth White Tea', 'White120', 10.00, 'img/white-tea/amaranth-white-150.jpg'),
(121, 'Mango White Tea', 'White121', 10.00, 'img/white-tea/mango-white-150.jpg'),
(122, 'Buddha Oolong Tea', 'Deals122', 8.00, 'users/8.00/buddhas-oolong-150.jpg'),
(123, 'Hibiscus Lemon Mint', 'Deals123', 8.00, 'users/8.00/hibiscus-lemon-mint-150.jpg'),
(124, 'Silver Needle White Tea', 'Deals124', 8.00, 'users/8.00/silverneedle-150.png');

-- --------------------------------------------------------

--
-- Table structure for table `puerh_tea`
--

CREATE TABLE `puerh_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `puerh_tea`
--

INSERT INTO `puerh_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(116, 'Coconut Puerh Tea', 'Puerh116', 10.00, 'img/puerh-tea/coconut-puerh-150.jpg'),
(117, 'Heart Shape Puerh Tea', 'Puerh117', 10.00, 'img/puerh-tea/heart-shape-puerh-150.jpg'),
(118, 'Tau Chau Puerh Tea', 'Puerh118', 10.00, 'img/puerh-tea/tau-chau-puerh-150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_deals`
--

CREATE TABLE `weekly_deals` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weekly_deals`
--

INSERT INTO `weekly_deals` (`id`, `name`, `code`, `price`, `image`) VALUES
(122, 'Buddha Oolong Tea', 'Deals122', 8.00, 'users/8.00/buddhas-oolong-150.jpg'),
(123, 'Hibiscus Lemon Mint', 'Deals123', 8.00, 'users/8.00/hibiscus-lemon-mint-150.jpg'),
(124, 'Silver Needle White Tea', 'Deals124', 8.00, 'users/8.00/silverneedle-150.png');

-- --------------------------------------------------------

--
-- Table structure for table `white_tea`
--

CREATE TABLE `white_tea` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `white_tea`
--

INSERT INTO `white_tea` (`id`, `name`, `code`, `price`, `image`) VALUES
(119, 'Organic Siver Needle', 'White119', 10.00, 'img/silverneedle-150.png'),
(120, 'Amaranth White Tea', 'White120', 10.00, 'img/white-tea/amaranth-white-150.jpg'),
(121, 'Mango White Tea', 'White121', 10.00, 'img/white-tea/mango-white-150.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `black_tea`
--
ALTER TABLE `black_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `green_tea`
--
ALTER TABLE `green_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_tea`
--
ALTER TABLE `herbal_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice_tea`
--
ALTER TABLE `ice_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nature18`
--
ALTER TABLE `nature18`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `oolong_tea`
--
ALTER TABLE `oolong_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `puerh_tea`
--
ALTER TABLE `puerh_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_deals`
--
ALTER TABLE `weekly_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `white_tea`
--
ALTER TABLE `white_tea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `black_tea`
--
ALTER TABLE `black_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `green_tea`
--
ALTER TABLE `green_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `herbal_tea`
--
ALTER TABLE `herbal_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `ice_tea`
--
ALTER TABLE `ice_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `nature18`
--
ALTER TABLE `nature18`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oolong_tea`
--
ALTER TABLE `oolong_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `puerh_tea`
--
ALTER TABLE `puerh_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `weekly_deals`
--
ALTER TABLE `weekly_deals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `white_tea`
--
ALTER TABLE `white_tea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
