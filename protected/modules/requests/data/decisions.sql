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

-- Dumping structure for таблица motasystems_ipoteka.decisions
DROP TABLE IF EXISTS `decisions`;
CREATE TABLE IF NOT EXISTS `decisions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `request_id` int(10) NOT NULL,
  `organization_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `reason` char(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_decisions_requests` (`request_id`),
  KEY `FK_decisions_organizations` (`organization_id`),
  KEY `FK_decisions_users` (`author_id`),
  KEY `FK_decisions_status` (`status_id`),
  CONSTRAINT `FK_decisions_organizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`),
  CONSTRAINT `FK_decisions_requests` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  CONSTRAINT `FK_decisions_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `FK_decisions_users` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
