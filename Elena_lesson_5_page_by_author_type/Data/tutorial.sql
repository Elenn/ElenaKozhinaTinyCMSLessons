-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 03:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `summary` text NOT NULL,
  `date` int(11) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `full` text NOT NULL,
  `type` enum('1','2','3','') NOT NULL,
  `id_author` int(11) NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `summary`, `date`, `img_url`, `full`, `type`, `id_author`, `enabled`) VALUES
(3, 'моя второая статья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, \r\nsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris \r\nnisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in \r\nreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum. It has survived not \r\nonly five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem\r\nIpsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including\r\n versions of Lorem Ipsum.', 1405763956, 'toy108.ipg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2', 8, 1), 
(6, 'еше одна машинка', 'еше одна статья', 1425958141, 'toy108.jpg', 'еше одна статья', '2', 9, 1),
(7, 'еше одна статья', 'еше одна статья', 1425958354, 'toy108.jpg', 'еше одна статья', '2', 8, 1),
(8, 'Плюшевая игрушка', 'фвыв', 1433118872, '3192-3.jpg', 'фвфв', '3', 9, 1),
(9, 'Плюшевая игрушка', 'Статья после редактирования', 1433119028, '3192-3.jpg', '<p>фава фаваф&nbsp;klklklklklklklklklklklklklklkl</p>', '3', 8, 1),
(10, 'Плюшевая игрушка', 'sdfsfsdf', 0, '3192-3.jpg', 'sdfdsfdsf', '3', 8, 1),
(11, 'Плюшевая игрушка', 'sdfdsfsd', 345678, '3192-3.jpg', '<p>sdfsdfsd</p>', '3', 9, 1),
(12, 'Плюшевая игрушка', 'sdsds', 1433210288, '3192-3.jpg', '<p>adasdas</p>', '3', 8, 1),
(13, 'Машинка', 'dfdsfdf', 1433300282, 'toy108.jpg', '<p>dfsf dfsf sfsfd</p>', '2', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `second_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` enum('0','1','','') NOT NULL,
  `date` int(15) NOT NULL,
  `is_admin` enum('0','1','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `second_name`, `email`, `sex`, `date`, `is_admin`) VALUES
(7, 'Lena', 'b7e48f19861a43c4c607a8aee0bcc728ygtr7ur56378238', 'Lena', 'Lena', 'dd@nn.com', '0', 1433290384, '1'),
(8, 'Anna', '', 'Anna', 'Anna', 'aa@mm.com', '1', 112231, '0'),
(9, 'Maria', '42959275655cc41f5d81426670b91cbcygtr7ur56378238', 'Maria', 'Maria', 'aa@kk.com', '0', 1433728631, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
