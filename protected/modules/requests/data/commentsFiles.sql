-- --------------------------------------------------------
-- Хост:                         serv39.coopertino.ru
-- Версия сервера:               5.1.67 - Source distribution
-- ОС Сервера:                   unknown-linux-gnu
-- HeidiSQL Версия:              7.0.0.4327
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for таблица motasystems_ipoteka.commentsFiles
DROP TABLE IF EXISTS `commentsFiles`;
CREATE TABLE IF NOT EXISTS `commentsFiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `commentId` int(10) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_commentsFiles_comments` (`commentId`),
  CONSTRAINT `FK_commentsFiles_comments` FOREIGN KEY (`commentId`) REFERENCES `comments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
