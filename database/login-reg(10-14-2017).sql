-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 06:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(20) NOT NULL,
  `store_name` varchar(50) NOT NULL,
  `user_id` int(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `address_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `user_id`, `created_date`, `updated_date`, `address_id`) VALUES
(1, 'marlon online store update', 0, '2017-09-23 16:56:42', '2017-09-23 16:56:42', 123),
(3, 'emerald\'store', 2, '2017-09-24 16:55:40', '2017-09-24 16:55:40', 0),
(4, 'ronabel store', 2, '2017-09-24 17:03:34', '2017-09-24 17:03:34', 0),
(1506177658, 'tamo store', 2, '2017-09-23 16:41:06', '2017-09-23 16:41:06', 0),
(1506177660, 'franks burger', 0, '2017-09-24 17:29:49', '2017-09-24 17:29:49', 0),
(1506177661, 'testmo', 2, '2017-09-24 17:34:39', '2017-09-24 17:34:39', 0),
(1506177662, 'testmo', 2, '2017-09-24 17:34:39', '2017-09-24 17:34:39', 0),
(1506177663, 'testmo', 2, '2017-09-24 17:34:39', '2017-09-24 17:34:39', 0),
(1506177664, 'funny', 2, '2017-09-24 17:39:14', '2017-09-24 17:39:14', 0),
(1506177665, 'funny', 2, '2017-09-24 17:39:14', '2017-09-24 17:39:14', 0),
(1506177666, 'funny', 2, '2017-09-24 17:39:14', '2017-09-24 17:39:14', 0),
(1506177667, 'seven eleven', 2, '2017-09-24 17:41:18', '2017-09-24 17:41:18', 0),
(1506177668, 'dagul store', 2, '2017-09-24 17:41:00', '2017-09-24 17:41:00', 0),
(1506177669, 'dagul store', 2, '2017-09-24 17:41:00', '2017-09-24 17:41:00', 0),
(1506177670, 'boom panis', 2, '2017-09-29 02:59:42', '2017-09-29 02:59:42', 0),
(1506177671, 'torres', 2, '2017-09-29 05:29:50', '2017-09-29 05:29:50', 0),
(1506177672, 'torres', 2, '2017-09-29 05:29:50', '2017-09-29 05:29:50', 0),
(1506177673, 'torres', 2, '2017-09-29 05:29:50', '2017-09-29 05:29:50', 0),
(1506177674, 'torres', 2, '2017-09-29 05:29:50', '2017-09-29 05:29:50', 0),
(1506177675, 'pepa the little dragon', 0, '2017-09-29 05:34:53', '2017-09-29 05:34:53', 0),
(1506177676, 'jc', 2, '2017-09-29 05:35:55', '2017-09-29 05:35:55', 0),
(1506177677, 'rodolfo', 2, '2017-09-29 06:38:15', '2017-09-29 06:38:15', 0),
(1506177678, 'edmer', 2, '2017-09-29 06:52:33', '2017-09-29 06:52:33', 0),
(1506177679, 'edmer', 2, '2017-09-29 06:52:33', '2017-09-29 06:52:33', 0),
(1506177680, 'edmer2', 2, '2017-09-29 06:56:12', '2017-09-29 06:56:12', 0),
(1506177681, 'robert', 2, '2017-09-29 10:36:27', '2017-09-29 10:36:27', 0),
(1506177682, 'mystore', 2, '2017-09-29 08:40:11', '2017-09-29 08:40:11', 0),
(1506177683, 'mystore', 2, '2017-09-29 08:40:11', '2017-09-29 08:40:11', 0),
(1506177684, 'loonie2 store', 3, '2017-10-06 16:44:04', '2017-10-06 16:44:04', 0),
(1506177685, 'rane', 3, '2017-10-06 16:44:56', '2017-10-06 16:44:56', 0),
(1506177687, 'emerald store', 3, '2017-10-13 08:36:40', '2017-10-13 08:36:40', 12),
(1506177688, 'new store form', 3, '2017-10-13 09:31:45', '2017-10-13 09:31:45', 12),
(1506177689, 'new store form', 3, '2017-10-13 09:31:45', '2017-10-13 09:31:45', 12),
(1506177690, 'uber', 3, '2017-10-13 09:33:55', '2017-10-13 09:33:55', 123456),
(1506177691, 'uber', 3, '2017-10-13 09:33:55', '2017-10-13 09:33:55', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1506177692;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
