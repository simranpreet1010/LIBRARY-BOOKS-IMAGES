-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2023 at 01:29 PM
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
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `bookID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Author name` varchar(100) NOT NULL,
  `Publication` varchar(100) NOT NULL,
  `Edition` varchar(100) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`bookID`, `Title`, `Author name`, `Publication`, `Edition`, `ISBN`) VALUES
(1, 'Culture and technology / Andrew Murphie and John Potts.', 'Murphie, Andrew Potts, John, 1959-', 'New York : Palgrave, 2003', 'ix edition ', ' 978033392929'),
(2, 'Accounting / John Hoggett [et. al.]', 'Hoggett, J. R. (John Robert), 1948- [author.] Medlin, John [author.] Edwards, Lew [author.] Chalmers', 'Milton, Qld. : Wiley, c2015', '[9th ed.]', ' 978111860822'),
(3, 'Accounting ethics / Iris Stuart, Bruce Stuart, Lars J. T. Pedersen.', 'Stuart, Iris, 1950- Stuart, Bruce, 1947- Pedersen, Lars J. T', 'West Sussex, U.K. Wiley, c2014.\r\n', 'First Edition', '9781118542408'),
(4, 'Crash course in accounting and financial statement analysis [electronic resource] / Matan Feldman, A', ' Feldman, Matan, 1978- Libman, Arkady, 1978- MyiLibrary', 'Hoboken, N.J. : Wiley, 2007.', '2nd ed', ' 978047004701'),
(5, 'Financial accounting theory / Craig Deegan.', 'Deegan, Craig (Craig Michael), 1960-', 'North Ryde, N.S.W. : McGraw-Hill, 2010', '6th ed.', '9780070277748'),
(6, 'Financial accounting theory / Craig Deegan.', ' Deegan, Craig Michael, 1960-', 'North Ryde, N.S.W : McGraw Hill Aust. Pty. Ltd., c2006', '2nd ed.', '9780074716717'),
(8, 'Designing a digital portfolio / Cynthia L. Baron.', 'Baron, Cynthia', ' Berkeley, Calif. : New Riders, c2010 [i.e. 2009]', '2nd ed.', '9780321637512'),
(9, 'Foundation website creation with CSS, XHTML, and JavaScript / Jonathan Lane, Meitar Moscovitz, Josep', 'Lane, Jonathan Moscovitz, Meitar Lewis, Joseph R', 'Berkeley, Calif. : Friends of ED, 2008', '1st edition ', '9781430209911'),
(10, 'Design by nature : using universal forms and principles in design / Maggie Macnab.', ' Macnab, Maggie [author.]', 'Berkeley, Calif.: New Riders, c2012', '12th edition', '9780321747761'),
(11, 'Collecting and interpreting qualitative materials / Norman K. Denzin, University of Illinois, Yvonna', ' Denzin, Norman K Lincoln, Yvonna S', ' Thousand Oaks, Calif.: Sage, c2013', '4th edition', '9781452258041'),
(12, 'The technique of film and video editing : history, theory, and practice / Ken Dancyger.', 'Dancyger, Ken', 'Burlington, MA : Focal Press, c2007', '4th ed.', '9780240807652'),
(13, 'The graphic designer\'s guide to pricing, estimating & budgeting / by Theo Stephan Williams.', 'Williams, Theo Stephan, 1960-', 'New York : Allworth Press, c2010', 'Rev. ed., 3rd ed.', '9781581157130'),
(14, 'History of modern art : painting, sculpture, architecture, photography / H.H. Arnason, Elizabeth C. ', ' Arnason, H. Harvard Mansfield, Elizabeth, 1965-', 'Upper Saddle River, N.J. : Pearson Prentice Hall, 2009', '6th ed', '9780136062066'),
(15, 'How to cheat in Photoshop CS4 : the art of creating realistic photomontages / Steve Caplin.', ' Caplin, Steve', ' Amsterdam ; Boston ; London : Focal Press, 2009', '5th ed.', '9780240521152'),
(16, 'Check your English vocabulary for IELTS / by Rawdon Wyatt.', 'Wyatt, Rawdon', 'London : Bloomsbury, 2012', '3rd ed.', '9781408153932'),
(17, 'Collins Chinese dictionary / [Editorial team, Wu Yicheng, Xie Xi, Marianne Davidson ... et al.].', ' Wu, Yicheng Davidson, Marianne, 1977', ' Glasgow : HarperCollins Publishers, 2006', '2nd ed.', '9780007223916'),
(18, '404 essential tests for IELTS : academic module / by Donna Scovell, Vickie Pastellas & Max Knobel.', ' Scovell, Donna Pastellas, Vickie Knobel, Max', 'Adams & Austen Press, 2004', 'International ed.', '0975183222'),
(19, 'JavaScript : the definitive guide / David Flanagan.', 'Flanagan, David', ' Beijing ; Farnham : O\'Reilly, c2011', '6th ed.', '9780596805524'),
(20, 'Data modeling and database design / Narayan S. Umanath, University of Cincinnati, Richard W. Scamell', 'Umanath, Narayan S Scamell, Richard W', ' Boston, Mass.: Cengage Learning, c2015', 'Second edition.', ' 978128508525'),
(21, 'An introduction to digital multimedia / T. M. Savage and K. E. Vogel.', 'Savage, Terry Michael, 1946- Vogel, Karla E', 'Burlington, Massachusetts : Jones & Bartlett Learning, c2014', 'Second edition.', '9781449688394');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblmemberphoto`
--

INSERT INTO `tblmemberphoto` (`studentID`, `photoID`, `photoURL`) VALUES
(100, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmembership`
--

DROP TABLE IF EXISTS `tblmembership`;
CREATE TABLE IF NOT EXISTS `tblmembership` (
  `studentID` int NOT NULL,
  `studentName` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`studentID`),
  UNIQUE KEY `studentID` (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblmembership`
--

INSERT INTO `tblmembership` (`studentID`, `studentName`, `email`, `password`, `phoneNumber`, `photo`) VALUES
(100, 'hello', 'hello@test.com', '$2y$10$ke9I/o05GRxSfcaTvdr6FeBW41D7HRXo7eqWUe1Pfrz3yhs.wpsv.', 100, NULL);

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
