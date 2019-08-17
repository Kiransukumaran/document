-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 03:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `document`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `slno` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  `ext` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`slno`, `name`, `description`, `date`, `path`, `ext`) VALUES
(1, 'qqqqq', 'qqqqq', '2019-07-26', 'E:/xampp/htdocs/document/uploads/pic3.png', '.png'),
(2, 'gfhfgh', 'fghfgh', '2019-07-26', 'E:/xampp/htdocs/document/uploads/pic4.png', '.png'),
(5, 'sfsdgf', 'sfgdfgdfg', '2019-07-26', 'http://localhost/document/uploads/Draft_SOW_Decomp_CSV_Workbench_Exports.docx', '.docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slno` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `empid` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slno`, `Name`, `username`, `password`, `role`, `user_id`, `phone`, `designation`, `branch`, `empid`, `email`, `status`) VALUES
(1, 'Hari', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 'a', '', 'CEO', '', '', '', 1),
(2, 'Thejas', 'employee', '033836b6cedd9a857d82681aafadbc19', 'employee', 'e', '', '', '', '', '', 1),
(3, 'Arun', 'data', '1cae0227cac2979a9735f07f2f891633', 'entry', 'd', '', '', '', '', '', 1),
(4, 'KIRAN S', 'kirans', '202cb962ac59075b964b07152d234b70', 'employee', 'dbc5cdc98fd462e12b8dce43c7858b16', '9567464915', 'Asso Software Engineer', 'Engineeering', '1385', 'kirans@pivotsys.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
