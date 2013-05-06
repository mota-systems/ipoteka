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

-- Dumping structure for таблица motasystems_ipoteka.requests
DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `objectTypeId` int(10) NOT NULL DEFAULT '0',
  `surname` char(80) DEFAULT NULL,
  `patronymic` char(80) DEFAULT NULL,
  `name` char(80) DEFAULT NULL,
  `fullname` char(250) DEFAULT NULL,
  `summ` int(100) DEFAULT NULL,
  `objectCost` int(100) DEFAULT NULL,
  `initialFee` int(100) DEFAULT NULL,
  `sex` int(10) NOT NULL DEFAULT '0',
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthday_place` char(250) DEFAULT NULL,
  `home_phone` char(50) DEFAULT NULL,
  `mobile_phone` char(250) DEFAULT NULL,
  `citizenship` char(250) DEFAULT NULL,
  `passport_seria` int(20) DEFAULT NULL,
  `passport_number` int(20) DEFAULT NULL,
  `passport_issue` date DEFAULT NULL,
  `passport_issued` char(255) DEFAULT NULL,
  `registration_index` int(6) DEFAULT NULL,
  `registration_country` char(255) DEFAULT NULL,
  `registration_area` char(255) DEFAULT NULL,
  `registration_edge` char(255) DEFAULT NULL,
  `registration_setllement` char(255) DEFAULT NULL,
  `registration_city` char(255) DEFAULT NULL,
  `registration_street` char(255) DEFAULT NULL,
  `registration_house` char(255) DEFAULT NULL,
  `registration_housing` char(255) DEFAULT NULL,
  `registration_apartment` char(255) DEFAULT NULL,
  `registration_period` int(11) DEFAULT NULL,
  `live_index` int(6) DEFAULT NULL,
  `live_country` char(50) DEFAULT NULL,
  `live_area` char(50) DEFAULT NULL,
  `live_edge` char(50) DEFAULT NULL,
  `live_city` char(50) DEFAULT NULL,
  `live_settlement` char(50) DEFAULT NULL,
  `live_street` char(50) DEFAULT NULL,
  `live_house` char(50) DEFAULT NULL,
  `live_housing` char(50) DEFAULT NULL,
  `live_apartment` char(50) DEFAULT NULL,
  `live_period` char(50) DEFAULT NULL,
  `live_status` int(11) DEFAULT NULL,
  `education` int(11) DEFAULT NULL,
  `marital_status` int(11) DEFAULT NULL,
  `marital_dependency` int(11) DEFAULT NULL,
  `martial_children` int(11) DEFAULT NULL,
  `marital_surname` char(50) DEFAULT NULL,
  `marital_name` char(50) DEFAULT NULL,
  `marital_patronymic` char(50) DEFAULT NULL,
  `marital_sex` int(1) DEFAULT NULL,
  `marital_birthday` date DEFAULT NULL,
  `marital_birthplace` varchar(250) DEFAULT NULL,
  `marital_passport_seria` int(4) DEFAULT NULL,
  `marital_passport_number` int(20) DEFAULT NULL,
  `marital_passport_issue` date DEFAULT NULL,
  `marital_passport_issued` char(100) DEFAULT NULL,
  `marital_work_phone` char(20) DEFAULT NULL,
  `marital_mobile_phone` char(20) DEFAULT NULL,
  `marital_workplace` char(100) DEFAULT NULL,
  `marital_work_post` char(50) DEFAULT NULL,
  `contact_surname` char(50) DEFAULT NULL,
  `contact_name` char(50) DEFAULT NULL,
  `contact_patronymic` char(50) DEFAULT NULL,
  `contact_home_phone` char(50) DEFAULT NULL,
  `employe_inn` int(12) DEFAULT NULL,
  `employe_ogrn` int(12) DEFAULT NULL,
  `employe_fullname` varchar(200) DEFAULT NULL,
  `workplace_index` int(6) DEFAULT NULL,
  `workplace_area` varchar(200) DEFAULT NULL,
  `workplace_country` varchar(200) DEFAULT NULL,
  `workplace_edge` varchar(200) DEFAULT NULL,
  `workplace_city` varchar(200) DEFAULT NULL,
  `workplace_street` varchar(200) DEFAULT NULL,
  `workplace_setllement` varchar(200) DEFAULT NULL,
  `workplace_housing` varchar(200) DEFAULT NULL,
  `workplace_office` varchar(200) DEFAULT NULL,
  `workplace_holding` varchar(200) DEFAULT NULL,
  `workplace_type_commercial` int(1) DEFAULT NULL,
  `workplace_type_goverment` int(1) DEFAULT NULL,
  `workplace_type_foreign` int(1) DEFAULT NULL,
  `workplace_legal_form` varchar(200) DEFAULT NULL,
  `workplace_employers` int(10) DEFAULT NULL,
  `workplace_age` int(3) DEFAULT NULL,
  `workplace_phone` varchar(200) DEFAULT NULL,
  `workplace_phone_addition` varchar(200) DEFAULT NULL,
  `workplace_fax` varchar(200) DEFAULT NULL,
  `workplace_site` varchar(200) DEFAULT NULL,
  `branch_production` varchar(200) DEFAULT NULL,
  `branch_goverment` varchar(200) DEFAULT NULL,
  `branch_service` varchar(200) DEFAULT NULL,
  `branch_industry` varchar(200) DEFAULT NULL,
  `branch_other` varchar(250) DEFAULT NULL,
  `career_status` varchar(200) DEFAULT NULL,
  `career_activity_character` varchar(200) DEFAULT NULL,
  `career_experience_start` varchar(200) DEFAULT NULL,
  `career_experience_current_start` varchar(200) DEFAULT NULL,
  `career_experience_direction_start` varchar(200) DEFAULT NULL,
  `career_post` varchar(200) DEFAULT NULL,
  `career_character` int(11) DEFAULT NULL,
  `career_email` varchar(200) DEFAULT NULL,
  `earings_main_summ` varchar(200) DEFAULT NULL,
  `earings_currency` varchar(200) DEFAULT NULL,
  `earings_payment` varchar(200) DEFAULT NULL,
  `earings_alimony` varchar(200) DEFAULT NULL,
  `earings_regular_1_source` varchar(200) DEFAULT NULL,
  `earings_regular_1_summ` int(10) DEFAULT NULL,
  `earings_regular_1_currency` int(3) DEFAULT NULL,
  `earings_regular_2_source` varchar(200) DEFAULT NULL,
  `earings_regular_2_summ` int(10) DEFAULT NULL,
  `earings_regular_2_currency` int(3) DEFAULT NULL,
  `earings_regular_3_source` varchar(200) DEFAULT NULL,
  `earings_regular_3_summ` int(10) DEFAULT NULL,
  `earings_regular_3_currency` int(2) DEFAULT NULL,
  `realestate_type_cottege` int(2) DEFAULT NULL,
  `realestate_type_condo` int(2) DEFAULT NULL,
  `realestate_type_plot` int(2) DEFAULT NULL,
  `realestate_plot_get` int(3) DEFAULT NULL,
  `realestate_plot_address` varchar(250) DEFAULT NULL,
  `realestate_plot_occupancy` int(3) DEFAULT NULL,
  `realestate_plot_square` int(5) DEFAULT NULL,
  `realestate_condo_get` int(3) DEFAULT NULL,
  `realestate_condo_address` varchar(250) DEFAULT NULL,
  `realestate_condo_occupancy` int(3) DEFAULT NULL,
  `realestate_condo_square` int(5) DEFAULT NULL,
  `realestate_cottege_get` int(3) DEFAULT NULL,
  `realestate_cottege_address` varchar(250) DEFAULT NULL,
  `realestate_cottege_occupancy` int(3) DEFAULT NULL,
  `realestate_cottege_square` int(5) DEFAULT NULL,
  `realestate_type_other` int(2) DEFAULT NULL,
  `realestate_other_name` varchar(250) DEFAULT NULL,
  `realestate_other_get` int(3) DEFAULT NULL,
  `realestate_other_address` varchar(250) DEFAULT NULL,
  `realestate_other_occupancy` int(3) DEFAULT NULL,
  `realestate_other_square` int(5) DEFAULT NULL,
  `cars_number` int(5) DEFAULT NULL,
  `cars_model` varchar(200) DEFAULT NULL,
  `cars_purchase_date` char(7) DEFAULT NULL,
  `cars_year` year(4) DEFAULT NULL,
  `cars_registration_number` varchar(10) DEFAULT NULL,
  `cars_get` int(5) DEFAULT NULL,
  `credit_1` int(5) DEFAULT NULL,
  `credit_2` int(5) DEFAULT NULL,
  `credit_3` int(5) DEFAULT NULL,
  `credit_1_creditor` varchar(250) DEFAULT NULL,
  `credit_2_creditor` varchar(250) DEFAULT NULL,
  `credit_3_creditor` varchar(250) DEFAULT NULL,
  `credit_1_summ` int(10) DEFAULT NULL,
  `credit_2_summ` int(10) DEFAULT NULL,
  `credit_3_summ` int(10) DEFAULT NULL,
  `credit_1_currency` int(3) DEFAULT NULL,
  `credit_2_currency` int(3) DEFAULT NULL,
  `credit_3_currency` int(3) DEFAULT NULL,
  `credit_1_type` int(3) DEFAULT NULL,
  `credit_2_type` int(3) DEFAULT NULL,
  `credit_3_type` int(3) DEFAULT NULL,
  `credit_1_receipt_date` char(7) DEFAULT NULL,
  `credit_2_receipt_date` char(7) DEFAULT NULL,
  `credit_3_receipt_date` char(7) DEFAULT NULL,
  `credit_1_month_summ` int(10) DEFAULT NULL,
  `credit_2_month_summ` int(10) DEFAULT NULL,
  `credit_3_month_summ` int(10) DEFAULT NULL,
  `credit_1_expired` int(1) DEFAULT NULL,
  `credit_2_expired` int(1) DEFAULT NULL,
  `credit_3_expired` int(1) DEFAULT NULL,
  `card_1` int(1) DEFAULT NULL,
  `card_1_payment_system` int(3) DEFAULT NULL,
  `card_1_type` int(3) DEFAULT NULL,
  `card_1_limit` int(10) DEFAULT NULL,
  `card_1_currency` int(3) DEFAULT NULL,
  `card_2` int(1) DEFAULT NULL,
  `card_2_payment_system` int(3) DEFAULT NULL,
  `card_2_type` int(3) DEFAULT NULL,
  `card_2_limit` int(10) DEFAULT NULL,
  `card_2_currency` int(3) DEFAULT NULL,
  `card_3` int(1) DEFAULT NULL,
  `card_3_payment_system` int(3) DEFAULT NULL,
  `card_3_type` int(3) DEFAULT NULL,
  `card_3_limit` int(10) DEFAULT NULL,
  `card_3_currency` int(3) DEFAULT NULL,
  `offourwork_availability` int(3) DEFAULT NULL,
  `offourwork_employe_inn` int(12) DEFAULT NULL,
  `offourwork_employe_ogrn` int(12) DEFAULT NULL,
  `offourwork_employe_fullname` varchar(200) DEFAULT NULL,
  `offourwork_workplace_index` int(6) DEFAULT NULL,
  `offourwork_workplace_area` varchar(200) DEFAULT NULL,
  `offourwork_workplace_country` varchar(200) DEFAULT NULL,
  `offourwork_workplace_edge` varchar(200) DEFAULT NULL,
  `offourwork_workplace_city` varchar(200) DEFAULT NULL,
  `offourwork_workplace_setllement` varchar(200) DEFAULT NULL,
  `offourwork_workplace_street` varchar(200) DEFAULT NULL,
  `offourwork_workplace_housing` varchar(200) DEFAULT NULL,
  `offourwork_workplace_office` varchar(200) DEFAULT NULL,
  `offourwork_workplace_holding` int(1) DEFAULT NULL,
  `offourwork_workplace_type_commercial` int(1) DEFAULT NULL,
  `offourwork_workplace_type_goverment` int(1) DEFAULT NULL,
  `offourwork_workplace_type_foreign` int(1) DEFAULT NULL,
  `offourwork_workplace_legal_form` varchar(200) DEFAULT NULL,
  `offourwork_workplace_employers` int(10) DEFAULT NULL,
  `offourwork_workplace_age` int(3) DEFAULT NULL,
  `offourwork_workplace_phone` varchar(200) DEFAULT NULL,
  `offourwork_workplace_phone_addition` varchar(200) DEFAULT NULL,
  `offourwork_workplace_fax` varchar(200) DEFAULT NULL,
  `offourwork_workplace_site` varchar(200) DEFAULT NULL,
  `offourwork_branch_production` varchar(200) DEFAULT NULL,
  `offourwork_branch_goverment` varchar(200) DEFAULT NULL,
  `offourwork_branch_service` varchar(200) DEFAULT NULL,
  `offourwork_branch_industry` varchar(200) DEFAULT NULL,
  `offourwork_branch_other` varchar(250) DEFAULT NULL,
  `offourwork_career_status` varchar(200) DEFAULT NULL,
  `offourwork_career_activity_character` varchar(200) DEFAULT NULL,
  `offourwork_career_experience_start` varchar(200) DEFAULT NULL,
  `offourwork_career_post` varchar(200) DEFAULT NULL,
  `offourwork_career_character` int(11) DEFAULT NULL,
  `offourwork_career_email` varchar(200) DEFAULT NULL,
  `lastwork_fullname` varchar(200) DEFAULT NULL,
  `lastwork_post` varchar(200) DEFAULT NULL,
  `lastwork_experience` varchar(200) DEFAULT NULL,
  `lastwork_pause` varchar(200) DEFAULT NULL,
  `initialfee_source` varchar(200) DEFAULT NULL,
  `initialfee_source_other` varchar(200) DEFAULT NULL,
  `initialfee_trade_in` int(1) DEFAULT NULL,
  `initialfee_trade_in_address` varchar(200) DEFAULT NULL,
  `initialfee_trade_in_cost` varchar(200) DEFAULT NULL,
  `initialfee_trade_in_cost_currency` int(3) DEFAULT NULL,
  `acquired_realestate_type` int(3) DEFAULT NULL,
  `acquired_realestate_type_other` varchar(250) DEFAULT NULL,
  `acquired_realestate_market` int(3) DEFAULT NULL,
  `acquired_realestate_construction` int(3) DEFAULT NULL,
  `acquired_realestate_goal` int(3) DEFAULT NULL,
  `acquired_realestate_address` varchar(250) DEFAULT NULL,
  `acquired_realestate_region` varchar(250) DEFAULT NULL,
  `acquired_realestate_summ_square` int(5) DEFAULT NULL,
  `acquired_realestate_live_square` int(5) DEFAULT NULL,
  `acquired_realestate_cost` int(10) DEFAULT NULL,
  `acquired_realestate_cost_currency` int(3) DEFAULT NULL,
  `created_by_user_id` int(3) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_requests_users` (`created_by_user_id`),
  KEY `FK_requests_objectType` (`objectTypeId`),
  KEY `FK_requests_status` (`status_id`),
  CONSTRAINT `FK_requests_objectType` FOREIGN KEY (`objectTypeId`) REFERENCES `objectType` (`id`),
  CONSTRAINT `FK_requests_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  CONSTRAINT `FK_requests_users` FOREIGN KEY (`created_by_user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
