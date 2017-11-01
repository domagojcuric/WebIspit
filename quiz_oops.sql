-- --------------------------------------------------------
-- Poslužitelj:                  127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Verzija:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table quiz_oops.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table quiz_oops.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.category: ~4 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `cat_name`) VALUES
	(1, 'WEB programiranje'),
	(4, 'OOP'),
	(11, 'Baze podataka'),
	(13, 'Digitalne komunikacije');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table quiz_oops.category_multi
CREATE TABLE IF NOT EXISTS `category_multi` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.category_multi: ~2 rows (approximately)
/*!40000 ALTER TABLE `category_multi` DISABLE KEYS */;
INSERT INTO `category_multi` (`id`, `cat_name`) VALUES
	(1, 'Opcenito'),
	(8, 'Posao');
/*!40000 ALTER TABLE `category_multi` ENABLE KEYS */;

-- Dumping structure for table quiz_oops.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` varchar(4) NOT NULL,
  `cat_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_questions_category` (`cat_id`),
  CONSTRAINT `FK_questions_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.questions: ~6 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
	(9, 'All variables in PHP start with which symbol?', '@', '%', '$', '&', '2', 1),
	(10, 'What is the correct way to end a PHP statement?', '.', ';', '$', '<php>', '1', 1),
	(11, 'Prvi dan u tjednu', 'Dobro', 'Ponedjeljak', 'Svakako ', 'GLUPO', '1', 1),
	(12, 'Mujina mama ima 3 sina Colu,Fantu i _______?', 'Colu ZERO', 'Schwepes', 'Ledeni Äaj', 'Mujo', '3', 1),
	(19, 'tko je kriv za agrokor?', 'moja baka', 'todoriÄ‡', 'mariÄ‡', 'Å¡prajc', '2', 1),
	(20, 'tko je kriv za agrokor?', 'moja baka', 'todoriÄ‡', 'mariÄ‡', '&scaron;prajc', '1', 1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for table quiz_oops.questions1
CREATE TABLE IF NOT EXISTS `questions1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans5` varchar(80) NOT NULL,
  `ans` varchar(10) NOT NULL,
  `anss` varchar(10) NOT NULL,
  `cat_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_questions1_category_multi` (`cat_id`),
  CONSTRAINT `FK_questions1_category_multi` FOREIGN KEY (`cat_id`) REFERENCES `category_multi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.questions1: ~4 rows (approximately)
/*!40000 ALTER TABLE `questions1` DISABLE KEYS */;
INSERT INTO `questions1` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans`, `anss`, `cat_id`) VALUES
	(1, 'Oznaci drzave u Europi?', 'Luxemburg', 'Hrvatska', 'SAD', 'TOGO', 'Urugvaj', '1', '2', 1),
	(2, 'WEB programiranje se veže uz koje inačice?', 'JS', 'php', 'IOS', 'Android', 'Symbian', '1', '2', 1),
	(3, 'Broj 6 dijeljiv je sa? (ostatak mora biti cijelobrojan)', '5', '4', '2', '1', '0', '3', '4', 1),
	(4, 'Od navedenih odgovora, oznaci TV serije.', 'Gladijator', 'Prijatelji', 'Volim Hrvatsku', 'Lud,zbunjen,normalan', 'Insider', '2', '4', 1);
/*!40000 ALTER TABLE `questions1` ENABLE KEYS */;

-- Dumping structure for table quiz_oops.signup
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table quiz_oops.signup: ~5 rows (approximately)
/*!40000 ALTER TABLE `signup` DISABLE KEYS */;
INSERT INTO `signup` (`id`, `name`, `surname`, `email`, `pass`, `img`) VALUES
	(1, 'Domagoj', 'Ä†uriÄ‡', 'domo_djcikaga@hotmail.com', '1123', 'c48darobni-stihovi.jpg'),
	(2, 'Marko', 'Markic', 'm.markic@hotmail.com', '123', 'big_thumb_72fcc7aaac5d6f9211b08e07006df7e2.jpg'),
	(3, 'bb', 'aa', 'bbaa@gmail.com', '123', 'WP_20170912_13_52_09_Pro (1).jpg'),
	(4, 'fata', 'fatiÄ‡', 'fata.f@gmail.com', '123', 'Äovjek.jpg'),
	(5, 'Beky', 'Ä†uriÄ‡', 'bernarda.curic@gmail.com', '12345', 'DSC_7492.JPG');
/*!40000 ALTER TABLE `signup` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
