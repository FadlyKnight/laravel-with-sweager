-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laravel_swagger_db.candidates
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `creator_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_skill` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `candidates_creator_id_foreign` (`creator_id`),
  CONSTRAINT `candidates_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.candidates: ~11 rows (approximately)
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT IGNORE INTO `candidates` (`id`, `creator_id`, `name`, `education`, `birthday`, `experience`, `last_position`, `applied`, `top_skill`, `email`, `phone`, `resume`, `created_at`, `updated_at`) VALUES
	(5, NULL, 'Dr. Alek Heathcote', '220 Mann Overpass\nLake Mckayla, KY 56935', '1988-04-05', '5 Year', 'Manager', 'Physical Scientist', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'kberge@example.org', '1-767-978-0756 x372', 'resume/2022/08/h8NdTeJQodRxl1iCmpYA_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(6, NULL, 'Prudence Baumbach', '384 Mante Ports Suite 342\nLake Savannah, NE 57041', '1993-06-08', '5 Year', 'Vending Machine Servicer', 'Automotive Body Repairer', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'bblock@example.com', '643.497.4910 x391', 'resume/2022/08/CPnknOOurJQG6W336NgT_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(7, NULL, 'Dr. Bernard Heller', '628 Kamron Forge Apt. 715\nArmstrongtown, NV 96892-9042', '2005-02-18', '5 Year', 'Electrotyper', 'Computer Software Engineer', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'marc.doyle@example.org', '1-558-769-3012', 'resume/2022/08/r701it3NwRiEzdgB8l60_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(8, NULL, 'Michael Mayer', '23732 Ortiz Lock Apt. 083\nSophiaberg, AR 09002-7830', '2002-10-20', '5 Year', 'Curator', 'Spotters', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'ibrahim.ruecker@example.com', '+15032373399', 'resume/2022/08/mhlyjxU9aM9MSJtdSw87_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(9, NULL, 'Myra Greenholt', '13045 Balistreri Underpass\nOpalmouth, MD 62724-0410', '1998-07-02', '5 Year', 'Public Health Social Worker', 'Counsil', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'ronaldo.white@example.net', '732.932.8683 x89800', 'resume/2022/08/2hCrBLVDgHd1ioaS3pSI_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(10, NULL, 'Andres Hahn', '689 Lakin Junction\nPort Vestaburgh, TX 39235-8157', '1999-02-18', '5 Year', 'Lathe Operator', 'Accountant', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'cayla.kuhn@example.org', '272.769.9975 x283', 'resume/2022/08/dZxhKyDMIWhdduxvBsSs_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(11, NULL, 'Carolina Jerde II', '248 Mabel Radial Suite 307\nLake Rorychester, ME 68909', '2008-09-07', '5 Year', 'Purchasing Manager', 'Photographic Restorer', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'umacejkovic@example.org', '(767) 753-4970 x712', 'resume/2022/08/95OS1wmikCmr1Yzczz4w_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(12, NULL, 'Lenna Schmeler', '562 Ryann Roads Suite 982\nBogisichfort, FL 67172', '1976-06-27', '5 Year', 'Logistician', 'Compensation and Benefits Manager', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'volkman.harrison@example.com', '1-740-389-0374 x19805', 'resume/2022/08/6zS8u4dGLdKf5nXCL40e_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(13, NULL, 'Martina D\'Amore', '429 Carey Plain\nGrahamburgh, NH 32163-3945', '1987-05-09', '5 Year', 'Homeland Security', 'Mathematical Science Teacher', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'francis.johnson@example.com', '262-771-4290 x6767', 'resume/2022/08/MVLARlYkqL0Zz0V0mTov_01_753965cf9346ce7b01c1702ca88c2851resume.pdf', '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(15, 8, 'Alia', 'Politeknik', '1992-06-04', '5 Year', 'Eligibility Interviewer', 'Middle School Teacher', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'fadlyknight@gmail.com', '08151863426', 'resume/2022/08/SwOyiUF21IMN9cvWTVyh_01_1cfc453b339eb4a0c457be3cc464ffbdresume.pdf', '2022-08-01 12:49:51', '2022-08-01 13:21:00'),
	(16, 8, 'Rizqi Mauludin', 'Politeknik', '1992-06-04', '5 Year', 'Eligibility Interviewer', 'Middle School Teacher', 'Laravel, Mysql, PostgreSQL, Codeigniter, Java', 'rizqimauludi@gmail.com', '085233554561', 'resume/2022/08/gknCV71spQeC3Z2e5Tr2_01_9aeb7f958e8e73ed27947d8547ca0d37resume.pdf', '2022-08-01 13:21:49', '2022-08-01 13:21:49');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
	(5, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
	(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
	(7, '2016_06_01_000004_create_oauth_clients_table', 1),
	(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
	(9, '2019_08_19_000000_create_failed_jobs_table', 1),
	(10, '2022_07_30_161839_create_candidates_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.oauth_access_tokens
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.oauth_access_tokens: ~5 rows (approximately)
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT IGNORE INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
	('7c4e9b8993dea524c9e06c134e6c93727eb791d75973bb52a9cd453190d44a1d58ae7c063be3af80', 8, 15, 'Laravel_TOKEN', '[]', 1, '2022-08-01 09:09:17', '2022-08-01 09:09:17', '2023-08-01 09:09:17'),
	('98fd91674dc2e4d3c38ae4f76a81fcc15ae6db03413a95d2d056acd1f609ec64b4157dc6b9eabace', 8, 15, 'Laravel_TOKEN', '[]', 0, '2022-08-01 02:27:11', '2022-08-01 02:27:11', '2023-08-01 02:27:11'),
	('b915493576ab03a5c1af9d718941a564eae599bd9a140fb5ee744fecaf8fe0590815da037b5d8786', 8, 15, 'Laravel_TOKEN', '[]', 0, '2022-08-01 11:20:46', '2022-08-01 11:20:46', '2023-08-01 11:20:46'),
	('e7df965d303cee140abc8edf684f9baf3e55d3599a956ad661ff749d18ce40f7c40ad5e5c49fe8d7', 8, 15, 'Laravel_TOKEN', '[]', 0, '2022-08-01 01:20:40', '2022-08-01 01:20:40', '2023-08-01 01:20:40'),
	('fae68e5e60087056004398241a449e976f81d528e62ad1faab214bef12b4318b12c3d208113f7e70', 8, 15, 'Laravel_TOKEN', '[]', 1, '2022-08-01 09:10:32', '2022-08-01 09:10:32', '2023-08-01 09:10:32');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.oauth_auth_codes
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.oauth_auth_codes: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.oauth_clients
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.oauth_clients: ~2 rows (approximately)
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT IGNORE INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
	(15, NULL, 'Laravel Personal Access Client', '8ID4RGS7d9JRKIH29hajsSYLR4okQFk9snVHrQc5', NULL, 'http://localhost', 1, 0, 0, '2022-08-01 01:19:30', '2022-08-01 01:19:30'),
	(16, NULL, 'Laravel Password Grant Client', 'DKhSA6OUMGGu1VqgnormM3qfcXXYf1FUQEmResxe', 'users', 'http://localhost', 0, 1, 0, '2022-08-01 01:19:30', '2022-08-01 01:19:30');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.oauth_personal_access_clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT IGNORE INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
	(8, 15, '2022-08-01 01:19:30', '2022-08-01 01:19:30');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.oauth_refresh_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravel_swagger_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_swagger_db.users: ~10 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(8, 'Mrs. Nya Blick', 'Senior HRD', 'gorczany.vivianne@example.org', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'CeS44peLMJ', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(9, 'Dr. Camylle Kshlerin Sr.', 'HRD', 'albin.koepp@example.net', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'eHWHLo875z', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(10, 'Wilson O\'Conner', 'Senior HRD', 'yschroeder@example.com', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'OjwBOPilfv', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(11, 'Miss Meaghan Kreiger', 'HRD', 'anderson.grace@example.com', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'lgPlCzFwlk', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(12, 'Anabelle Osinski', 'Senior HRD', 'gerry.reichel@example.org', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'MRXfrIuRhe', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(13, 'Mr. Javon Haley II', 'HRD', 'walker.alexandrine@example.org', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'uQlQOBdU1E', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(14, 'Abdullah Robel', 'Senior HRD', 'tmills@example.com', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '8PV8ZmKS5x', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(15, 'Fabian Von Sr.', 'HRD', 'sienna.cole@example.org', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'GCWRsoxlOI', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(16, 'Miss Raegan Hauck III', 'Senior HRD', 'liza24@example.net', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'VtatYVzLO4', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46'),
	(17, 'Stephan Konopelski', 'HRD', 'bcarter@example.com', '2022-08-01 01:16:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '1fCaxqQkni', NULL, NULL, '2022-08-01 01:16:46', '2022-08-01 01:16:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
