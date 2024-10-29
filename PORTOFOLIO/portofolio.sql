-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portofolio
CREATE DATABASE IF NOT EXISTS `portofolio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portofolio`;

-- Dumping structure for table portofolio.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `github_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.about: ~1 rows (approximately)
INSERT INTO `about` (`id`, `nama_depan`, `nama_belakang`, `deskripsi`, `instagram_link`, `github_link`, `youtube_link`, `gambar`, `gambar2`) VALUES
	(1, 'Muhammad', 'Luthfi Taufikurrahman', 'Saya adalah mahasiswa semester 5 di Program Studi Informatika, Universitas Pembangunan Jaya. Dengan peminatan di bidang Software Engineering, saya memiliki minat yang besar terhadap pengembangan perangkat lunak, pemrograman, serta teknologi digital. Selama perjalanan akademik, saya terus berusaha untuk memperdalam pemahaman dan keahlian dalam teknologi modern untuk siap berkontribusi di industri teknologi.', 'https://www.instagram.com/vxyzuc/', 'https://github.com/fi0909', 'https://www.youtube.com/@vxyzuc', 'images/me1.png', 'images/me2.png');

-- Dumping structure for table portofolio.contact_address
CREATE TABLE IF NOT EXISTS `contact_address` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.contact_address: ~1 rows (approximately)
INSERT INTO `contact_address` (`id`, `address`, `phone`, `email`) VALUES
	(1, 'Villa Dago Tol blok D3 no.44, Serua, Ciputat, Kota Tangerang Selatan', '+62 813-1115-3372', 'muhammad.luthfitaufikilurrahman@student.upj.ac.id');

-- Dumping structure for table portofolio.contact_messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.contact_messages: ~0 rows (approximately)

-- Dumping structure for table portofolio.footer_info
CREATE TABLE IF NOT EXISTS `footer_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `about_me` text,
  `github_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `contact_text` text,
  `copyright_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.footer_info: ~1 rows (approximately)
INSERT INTO `footer_info` (`id`, `about_me`, `github_url`, `youtube_url`, `instagram_url`, `contact_text`, `copyright_text`) VALUES
	(1, 'Mahasiswa Informatika dengan minat di bidang Software Engineering, terus berkembang dalam dunia teknologi.', 'https://github.com/fi0909', 'https://www.youtube.com/@vxyzuc', 'https://www.instagram.com/vxyzuc/', 'Jika Anda ingin berkomunikasi lebih lanjut atau memiliki pertanyaan, jangan ragu untuk menghubungi saya.', '&copy; 2024 Copyright Muhammad Luthfi Taufikurrahman. All rights reserved.');

-- Dumping structure for table portofolio.home
CREATE TABLE IF NOT EXISTS `home` (
  `Nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.home: ~0 rows (approximately)

-- Dumping structure for table portofolio.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.projects: ~4 rows (approximately)
INSERT INTO `projects` (`id`, `title`, `description`, `image_url`) VALUES
	(1, 'Desktop App Design', 'Remilis adalah aplikasi desktop yang dirancang untuk mengelola jadwal dan kesehatan anak...', 'images/Project1_rev.png'),
	(2, 'Mobile App Design', 'Nodok adalah aplikasi untuk menemukan layanan kesehatan terdekat, konsultasi online, dan pembelian obat...', 'images/Project_2.png'),
	(3, 'Instagram Feeds Design', 'Desain feeds Instagram untuk mendukung acara-acara HIMAFORKA...', 'images/Project_3.png'),
	(4, 'Instagram Story Design', 'Template Instagram Story untuk acara HIMAFORKA...', 'images/Projects_4.png');

-- Dumping structure for table portofolio.quotes
CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quote_text` text,
  `quote_author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.quotes: ~3 rows (approximately)
INSERT INTO `quotes` (`id`, `quote_text`, `quote_author`) VALUES
	(1, 'Design is intelligence made visible. It’s the art of making the complex, simple and beautiful', 'Somebody'),
	(2, 'Every frame is a story waiting to unfold; editing isn’t just technical, it’s the heartbeat of storytelling', 'Somebody'),
	(3, 'Programming is the art of thinking clearly—translating logic into code that the world can use', 'Somebody');

-- Dumping structure for view portofolio.see_home
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `see_home` (
	`Nama` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci'
) ENGINE=MyISAM;

-- Dumping structure for table portofolio.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `subskills` text NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portofolio.skills: ~3 rows (approximately)
INSERT INTO `skills` (`id`, `category`, `subskills`, `percentage`) VALUES
	(1, 'Graphic Design', 'UI Design, Website Design', 80),
	(2, 'Editing', 'Adobe Illustrator, Adobe Premiere, Cap Cut', 75),
	(3, 'Programming', 'HTML, CSS, Python, Java, C', 70);

-- Dumping structure for view portofolio.see_home
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `see_home`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `see_home` AS select `home`.`Nama` AS `Nama` from `home`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
