-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.36 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for php_danushika_yasuri
CREATE DATABASE IF NOT EXISTS `php_danushika_yasuri` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `php_danushika_yasuri`;

-- Dumping structure for table php_danushika_yasuri.member
CREATE TABLE IF NOT EXISTS `member` (
  `MemberId` int(11) NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(80) DEFAULT NULL,
  `TeamId` int(11) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `JoinedDate` date DEFAULT NULL,
  `Role` int(11) DEFAULT NULL,
  `Comment` text,
  `IsDeleted` int(11) DEFAULT '0',
  PRIMARY KEY (`MemberId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php_danushika_yasuri.member: 0 rows
DELETE FROM `member`;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`MemberId`, `MemberName`, `TeamId`, `Email`, `Phone`, `JoinedDate`, `Role`, `Comment`, `IsDeleted`) VALUES
	(1, 'Danushika Hettiarachchi', 1, 'workkings123@gmail.com', '0001000001', '2022-09-17', 1, 'kkjimi', 0),
	(2, 'Danushika Hettiarachchi', NULL, 'workkings123@gmail.com', '0000000000', '2022-09-17', 1, 'adsasdsd', 0),
	(3, 'Danushika Yasuri Hettiarachchi', NULL, 'danushikayh@gmail.com', '0000000000', '2022-09-23', 1, 'asdasdsad', 0),
	(4, 'Danushika Yasuri Hettiarachchi', 1, 'workkings123@gmail.com', '0000000000', '2022-09-30', 1, 'tttttttttt', 0),
	(5, 'Danushika Yasuri Hettiarachchi', 1, 'workkings123@gmail.com', '0000000000', '2022-09-17', 1, 'sdsdsdsd', 0),
	(6, 'Danushika Hettiarachchi', 1, 'workkings123@gmail.com', '0000000000', '2022-09-24', 2, 'sadasdd', 0);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;

-- Dumping structure for table php_danushika_yasuri.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `TeamId` int(11) NOT NULL AUTO_INCREMENT,
  `TeamTitle` varchar(25) NOT NULL,
  `IsDeleted` int(11) NOT NULL DEFAULT '0',
  `Description` text NOT NULL,
  PRIMARY KEY (`TeamId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php_danushika_yasuri.teams: 0 rows
DELETE FROM `teams`;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table php_danushika_yasuri.users
CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL,
  `IsDeleted` int(11) DEFAULT '0',
  PRIMARY KEY (`UserId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table php_danushika_yasuri.users: 2 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`UserId`, `UserName`, `Password`, `IsDeleted`) VALUES
	(1, 'admin', '11', 0),
	(2, 'eee', '123', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
