-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2014 at 06:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ant`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text,
  `pengarang` varchar(200) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `tahunTerbit` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahunTerbit`) VALUES
(2, 'Coba', 'Aku', 'AKu dwe', '2014'),
(3, 'Coba', 'Aku', 'AKu dwe', '2014'),
(4, 'Coba', 'Aku', 'AKu dwe', '2014'),
(5, 'Coba', 'Aku', 'AKu dwe', '2014'),
(6, 'Coba', 'Aku', 'AKu dwe', '2014'),
(7, 'Coba', 'Aku', 'AKu dwe', '2014'),
(8, 'Coba', 'Aku', 'AKu dwe', '2014'),
(9, 'Coba', 'Aku', 'AKu dwe', '2014'),
(10, 'Wek', 'Wek', 'asdf', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(17) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hero` varchar(17) NOT NULL,
  `level` varchar(10) NOT NULL,
  `team` varchar(17) NOT NULL,
  `score` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`name`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171115 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `name`, `password`, `email`, `hero`, `level`, `team`, `score`) VALUES
(171113, 'ojan12', 'Na`vi Dendi', 'ojan12', 'fauzanscape@gmail.com', 'Drow Ranger', '1', 'Navi', 80),
(171114, 'ojan22', 'Navi Puppey', 'ojan22', 'fauzanscape@ymail.com', 'DROW RANGER', '0', '', 70);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
