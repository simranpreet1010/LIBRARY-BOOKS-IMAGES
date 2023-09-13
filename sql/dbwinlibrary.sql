-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2023 at 04:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwinlibrary`
--
CREATE DATABASE IF NOT EXISTS `dbwinlibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `dbwinlibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `tblmemberphoto`
--

DROP TABLE IF EXISTS `tblmemberphoto`;
CREATE TABLE IF NOT EXISTS `tblmemberphoto` (
  `studentID` int NOT NULL,
  `photoID` int NOT NULL AUTO_INCREMENT,
  `photoURL` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`photoID`),
  KEY `fkStudentID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblmemberphoto`
--

INSERT INTO `tblmemberphoto` (`studentID`, `photoID`, `photoURL`) VALUES
(1, 4, 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `tblmembership`
--

DROP TABLE IF EXISTS `tblmembership`;
CREATE TABLE IF NOT EXISTS `tblmembership` (
  `studentID` int NOT NULL,
  `studentName` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`studentID`),
  UNIQUE KEY `studentID` (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblmembership`
--

INSERT INTO `tblmembership` (`studentID`, `studentName`, `email`, `password`, `phoneNumber`, `photo`) VALUES
(1, '2', 'a@g.com', 'winlibrary@2023', 12, 'index.php');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmemberphoto`
--
ALTER TABLE `tblmemberphoto`
  ADD CONSTRAINT `fkStudentID` FOREIGN KEY (`studentID`) REFERENCES `tblmembership` (`studentID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
