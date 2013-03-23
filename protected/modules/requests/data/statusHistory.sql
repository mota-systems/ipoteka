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

-- Dumping structure for таблица motasystems_ipoteka.statusHistory
DROP TABLE IF EXISTS `statusHistory`;
CREATE TABLE IF NOT EXISTS `statusHistory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `request_id` int(10) DEFAULT NULL,
  `author_id` int(10) DEFAULT NULL,
  `organization_id` int(10) DEFAULT NULL,
  `old_status` int(10) DEFAULT NULL,
  `new_status` int(10) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__requests` (`request_id`),
  KEY `FK__users` (`author_id`),
  KEY `FK__status` (`old_status`),
  KEY `FK__status_2` (`new_status`),
  KEY `FK_statusHistory_organizations` (`organization_id`),
  CONSTRAINT `FK_statusHistory_organizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`),
  CONSTRAINT `FK__requests` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK__status` FOREIGN KEY (`old_status`) REFERENCES `status` (`id`),
  CONSTRAINT `FK__status_2` FOREIGN KEY (`new_status`) REFERENCES `status` (`id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
