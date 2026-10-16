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

-- Dumping structure for table export_cost.biayas
CREATE TABLE IF NOT EXISTS `biayas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_biaya` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_biaya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_biaya` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.biayas: ~20 rows (approximately)
INSERT INTO `biayas` (`id`, `nama_biaya`, `jenis_biaya`, `nilai_biaya`, `created_at`, `updated_at`) VALUES
	(1, 'Transport', 'Variable', 346915.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(2, 'Packing', 'Fixed', 123730.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(3, 'Asuransi', 'Variable', 326775.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(4, 'Asuransi', 'Fixed', 117175.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(5, 'Dokumen', 'Fixed', 446076.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(6, 'Dokumen', 'Fixed', 403840.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(7, 'Custom Clereance', 'Variable', 68558.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(8, 'Packing', 'Fixed', 73563.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(9, 'Handling', 'Fixed', 313986.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(10, 'Packing', 'Variable', 64406.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(11, 'Dokumen', 'Variable', 430491.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(12, 'Custom Clereance', 'Fixed', 341983.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(13, 'Asuransi', 'Variable', 460512.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(14, 'Custom Clereance', 'Variable', 447501.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(15, 'Dokumen', 'Fixed', 334906.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(16, 'Transport', 'Variable', 125619.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(17, 'Dokumen', 'Variable', 450163.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(18, 'Handling', 'Fixed', 381208.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(19, 'Handling', 'Variable', 464858.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(20, 'Custom Clereance', 'Fixed', 134364.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14');

-- Dumping structure for table export_cost.buyers
CREATE TABLE IF NOT EXISTS `buyers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_buyer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `buyers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.buyers: ~20 rows (approximately)
INSERT INTO `buyers` (`id`, `nama_buyer`, `negara`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Jarwi Saragih S.H.', 'Grenada', 'Jln. Basoka Raya No. 645, Jayapura 79679, DKI', '0805 8213 5950', 'mitra38@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(2, 'Candra Prasetya', 'Qatar', 'Jr. Bayan No. 995, Padang 93696, Maluku', '(+62) 905 1373 2186', 'putra.ami@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(3, 'Uli Hasna Namaga', 'Honduras', 'Psr. Krakatau No. 585, Probolinggo 38435, Sumut', '(+62) 923 5682 196', 'vanesa70@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(4, 'Diana Kuswandari S.E.', 'Arab Saudi', 'Jln. Labu No. 227, Tarakan 20059, Lampung', '0676 3715 385', 'heryanto.gunawan@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(5, 'Upik Marwata Mustofa', 'Bosnia dan Herzegovina', 'Kpg. Ir. H. Juanda No. 640, Bengkulu 57463, Kaltara', '0846 4075 663', 'hidayat.endra@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(6, 'Eka Marbun M.Farm', 'Mozambik', 'Ds. Wahid No. 238, Ambon 89152, Babel', '0571 2816 944', 'natalia.astuti@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(7, 'Sarah Andriani', 'Guinea', 'Ds. Karel S. Tubun No. 973, Yogyakarta 37620, Papua', '(+62) 503 8326 8996', 'maulana.nabila@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(8, 'Bakidin Utama Marpaung', 'Zambia', 'Ds. Adisucipto No. 204, Pangkal Pinang 56002, Kaltim', '0254 1788 9837', 'situmorang.dalima@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(9, 'Sidiq Hidayat', 'Armenia', 'Dk. B.Agam 1 No. 528, Surabaya 74789, NTB', '(+62) 600 6040 121', 'puspasari.laras@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(10, 'Kartika Agustina M.M.', 'Zambia', 'Ds. Achmad No. 771, Bontang 78272, NTB', '(+62) 877 5459 363', 'quwais@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(11, 'Eva Wani Mayasari', 'Kenya', 'Dk. Banda No. 154, Banjarbaru 58913, NTT', '0360 6329 652', 'janet82@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(12, 'Elvin Winarno', 'Hong Kong', 'Ds. Urip Sumoharjo No. 41, Solok 42651, Kalsel', '(+62) 892 3916 4353', 'simanjuntak.yani@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(13, 'Harsana Budiyanto S.H.', 'Benin', 'Kpg. Soekarno Hatta No. 117, Pekalongan 14579, Kaltim', '(+62) 664 2626 541', 'sihombing.siska@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(14, 'Anom Siregar', 'Hongaria', 'Psr. Kyai Gede No. 416, Langsa 34179, Jabar', '(+62) 496 9608 512', 'wpudjiastuti@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(15, 'Dimas Sihombing', 'Malawi', 'Kpg. Nanas No. 21, Cirebon 96874, Lampung', '(+62) 719 1783 199', 'lutfan16@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(16, 'Vanya Tami Wulandari M.TI.', 'Luxembourg', 'Dk. Ujung No. 274, Tarakan 82484, Kepri', '(+62) 20 8531 287', 'dariati.suryatmi@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(17, 'Oni Mulyani S.I.Kom', 'Liberia', 'Jr. Pahlawan No. 341, Bogor 46622, Aceh', '(+62) 531 3271 022', 'lsuryatmi@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(18, 'Kania Usada', 'Paraguay', 'Jln. Ters. Kiaracondong No. 91, Gorontalo 11154, Jabar', '(+62) 831 9446 1766', 'xpertiwi@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(19, 'Wulan Usamah M.Farm', 'Saint Kitts dan Nevis', 'Jln. Bara Tambar No. 3, Administrasi Jakarta Utara 79469, Babel', '(+62) 339 9107 164', 'bpratiwi@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(20, 'Usyi Hasanah', 'Tokelau', 'Psr. Nangka No. 419, Padangsidempuan 89900, Sulteng', '(+62) 558 1007 6744', 'shutapea@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14');

-- Dumping structure for table export_cost.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.cache: ~0 rows (approximately)

-- Dumping structure for table export_cost.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.cache_locks: ~0 rows (approximately)

-- Dumping structure for table export_cost.detail_biayas
CREATE TABLE IF NOT EXISTS `detail_biayas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jumlah_biaya` decimal(15,2) NOT NULL,
  `biaya_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_biayas_biaya_id_foreign` (`biaya_id`),
  CONSTRAINT `detail_biayas_biaya_id_foreign` FOREIGN KEY (`biaya_id`) REFERENCES `biayas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.detail_biayas: ~0 rows (approximately)

-- Dumping structure for table export_cost.export_cost_calculations
CREATE TABLE IF NOT EXISTS `export_cost_calculations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor_kalkulasi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `harga_beli` decimal(15,2) NOT NULL,
  `total_biaya` decimal(15,2) NOT NULL,
  `tanggal` date NOT NULL,
  `margin_persen` decimal(15,2) NOT NULL,
  `harga_jual` decimal(15,2) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `estimasi_keuntungan` decimal(15,2) NOT NULL,
  `supplier_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `forwarder_id` bigint unsigned NOT NULL,
  `undername_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `export_cost_calculations_supplier_id_foreign` (`supplier_id`),
  KEY `export_cost_calculations_product_id_foreign` (`product_id`),
  KEY `export_cost_calculations_forwarder_id_foreign` (`forwarder_id`),
  KEY `export_cost_calculations_undername_id_foreign` (`undername_id`),
  CONSTRAINT `export_cost_calculations_forwarder_id_foreign` FOREIGN KEY (`forwarder_id`) REFERENCES `forwarders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `export_cost_calculations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `export_cost_calculations_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `export_cost_calculations_undername_id_foreign` FOREIGN KEY (`undername_id`) REFERENCES `undernames` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.export_cost_calculations: ~0 rows (approximately)
INSERT INTO `export_cost_calculations` (`id`, `nomor_kalkulasi`, `quantity`, `harga_beli`, `total_biaya`, `tanggal`, `margin_persen`, `harga_jual`, `unit_price`, `estimasi_keuntungan`, `supplier_id`, `product_id`, `forwarder_id`, `undername_id`, `created_at`, `updated_at`) VALUES
	(1, 'KAL-20260908-001', 20, 300000.00, 993830.00, '2026-09-08', 30.00, 1291979.00, 64598.95, 285229.21, 4, 1, 4, 11, '2026-09-07 21:16:15', '2026-09-07 21:16:15'),
	(2, 'KAL-20260908-002', 20, 300000.00, 373563.00, '2026-09-08', 30.00, 485631.90, 24281.60, 82930.99, 15, 2, 6, 9, '2026-09-08 00:09:13', '2026-09-08 00:09:13');

-- Dumping structure for table export_cost.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table export_cost.forwarders
CREATE TABLE IF NOT EXISTS `forwarders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `forwarders_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.forwarders: ~20 rows (approximately)
INSERT INTO `forwarders` (`id`, `nama_perusahaan`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'CV Suryatmi (Persero) Tbk', 'Gg. Setiabudhi No. 523, Bengkulu 67956, DKI', '(+62) 957 0416 586', 'wahyu75@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(2, 'PT Uyainah (Persero) Tbk', 'Gg. Pasirkoja No. 408, Magelang 91565, Lampung', '0255 0286 832', 'nababan.shakila@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(3, 'UD Yuniar Mustofa', 'Jr. Abdullah No. 376, Kediri 48096, Kalsel', '0614 6380 150', 'diana.sinaga@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(4, 'Yayasan Yolanda Maheswara', 'Gg. Moch. Ramdan No. 884, Samarinda 31479, Riau', '(+62) 24 3191 5625', 'ajimat.narpati@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(5, 'Yayasan Dabukke', 'Psr. Barat No. 814, Serang 19592, DKI', '0269 5374 668', 'hidayanto.restu@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(6, 'Perum Natsir (Persero) Tbk', 'Kpg. Ketandan No. 368, Manado 69462, NTT', '(+62) 318 0519 0026', 'natalia.mayasari@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(7, 'Fa Pertiwi', 'Kpg. Halim No. 733, Sukabumi 17322, Lampung', '(+62) 700 4540 683', 'kusmawati.kiandra@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(8, 'Yayasan Usada Yolanda (Persero) Tbk', 'Kpg. Surapati No. 916, Administrasi Jakarta Pusat 66248, Bengkulu', '0251 4570 0119', 'simanjuntak.adika@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(9, 'PT Nugroho Namaga Tbk', 'Jr. Dahlia No. 34, Sukabumi 48644, DKI', '(+62) 656 1550 302', 'samsul.winarsih@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(10, 'Perum Winarsih Tbk', 'Psr. Rajawali No. 469, Administrasi Jakarta Utara 67546, Lampung', '0985 6939 5060', 'cahya.wulandari@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(11, 'Yayasan Purwanti Sirait Tbk', 'Jln. Baranang No. 950, Pekalongan 38257, Bengkulu', '0205 2696 766', 'jtampubolon@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(12, 'Perum Rahimah Tbk', 'Jr. Babadan No. 835, Surabaya 48562, Sumbar', '0982 3540 9649', 'pangeran.wibowo@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(13, 'UD Yulianti Tbk', 'Psr. Untung Suropati No. 38, Sabang 65575, Bali', '(+62) 26 3428 626', 'ade08@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(14, 'Yayasan Palastri (Persero) Tbk', 'Ki. Basuki No. 835, Pekalongan 67767, DKI', '(+62) 544 4666 8198', 'utami.farhunnisa@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(15, 'PJ Wastuti', 'Psr. Honggowongso No. 306, Administrasi Jakarta Pusat 12070, Babel', '0219 5305 292', 'raden.astuti@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(16, 'UD Suryono Rajasa Tbk', 'Ki. Yos No. 889, Manado 53087, Sulsel', '(+62) 784 0060 3158', 'hari.gunarto@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(17, 'PJ Firgantoro', 'Psr. Abdul No. 862, Tual 71271, Aceh', '0582 4911 196', 'ibrani83@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(18, 'Yayasan Wulandari Situmorang Tbk', 'Kpg. Ciumbuleuit No. 20, Bogor 12631, Jatim', '(+62) 325 7091 2835', 'keisha.utama@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(19, 'CV Siregar', 'Gg. Cut Nyak Dien No. 343, Sawahlunto 82949, Sumut', '026 9822 4137', 'wuwais@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(20, 'PT Uwais', 'Dk. Setiabudhi No. 338, Mataram 41720, Sumut', '0487 6951 139', 'garda.januar@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14');

-- Dumping structure for table export_cost.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.jobs: ~0 rows (approximately)

-- Dumping structure for table export_cost.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.job_batches: ~0 rows (approximately)

-- Dumping structure for table export_cost.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_07_01_123355_create_suppliers_table', 1),
	(5, '2026_07_05_041250_create_buyers_table', 1),
	(6, '2026_07_05_053232_create_products_table', 1),
	(7, '2026_07_05_065302_create_biayas_table', 1),
	(8, '2026_07_07_133853_create_forwarders_table', 1),
	(9, '2026_07_09_113443_create_undernames_table', 1),
	(10, '2026_07_09_120125_create_export_cost_calculations_table', 1),
	(11, '2026_07_20_171622_create_detail_biayas_table', 1),
	(12, '2026_08_24_094427_create_quotations_table', 1),
	(13, '2026_08_28_111254_create_sales_contracts_table', 1),
	(14, '2026_08_28_143514_create_permission_tables', 1);

-- Dumping structure for table export_cost.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table export_cost.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.model_has_roles: ~3 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2),
	(3, 'App\\Models\\User', 3);

-- Dumping structure for table export_cost.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table export_cost.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.permissions: ~0 rows (approximately)

-- Dumping structure for table export_cost.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.products: ~2 rows (approximately)
INSERT INTO `products` (`id`, `nama_product`, `grade`, `satuan`, `created_at`, `updated_at`) VALUES
	(1, 'Vanilla Beans', 'B', 'Kg', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(2, 'Vanilla Beans', 'A', 'Kg', '2026-09-07 21:09:14', '2026-09-07 21:09:14');

-- Dumping structure for table export_cost.quotations
CREATE TABLE IF NOT EXISTS `quotations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor_quotation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `valid_until` date NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` decimal(15,2) DEFAULT NULL,
  `incoterm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` text COLLATE utf8mb4_unicode_ci,
  `buyer_id` bigint unsigned NOT NULL,
  `export_cost_calculation_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quotations_nomor_quotation_unique` (`nomor_quotation`),
  KEY `quotations_buyer_id_foreign` (`buyer_id`),
  KEY `quotations_export_cost_calculation_id_foreign` (`export_cost_calculation_id`),
  CONSTRAINT `quotations_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `quotations_export_cost_calculation_id_foreign` FOREIGN KEY (`export_cost_calculation_id`) REFERENCES `export_cost_calculations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.quotations: ~0 rows (approximately)
INSERT INTO `quotations` (`id`, `nomor_quotation`, `tanggal`, `valid_until`, `currency`, `exchange_rate`, `incoterm`, `pol`, `destination`, `payment_term`, `delivery_time`, `terms_conditions`, `buyer_id`, `export_cost_calculation_id`, `created_at`, `updated_at`) VALUES
	(1, 'QTN-O8KASO', '2026-09-08', '2026-09-30', 'USD', 17500.00, 'FOB', 'Tanjung Priok', 'Argentina', 'COD', '30 Day', NULL, 1, 1, '2026-09-07 21:17:34', '2026-09-07 21:17:34'),
	(2, 'QTN-BXQZCJ', '2026-09-08', '2026-09-15', 'USD', 17500.00, 'FOB', 'Tanjung Priok', 'Brazil', 'COD', '30 Day', NULL, 7, 2, '2026-09-08 00:12:56', '2026-09-08 00:12:56');

-- Dumping structure for table export_cost.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.roles: ~2 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2026-09-07 21:09:08', '2026-09-07 21:09:08'),
	(2, 'operasional', 'web', '2026-09-07 21:09:08', '2026-09-07 21:09:08'),
	(3, 'sales', 'web', '2026-09-07 21:09:08', '2026-09-07 21:09:08');

-- Dumping structure for table export_cost.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.role_has_permissions: ~0 rows (approximately)

-- Dumping structure for table export_cost.sales_contracts
CREATE TABLE IF NOT EXISTS `sales_contracts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor_contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotation_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_contracts_quotation_id_foreign` (`quotation_id`),
  CONSTRAINT `sales_contracts_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `quotations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.sales_contracts: ~0 rows (approximately)
INSERT INTO `sales_contracts` (`id`, `nomor_contract`, `tanggal`, `quotation_id`, `created_at`, `updated_at`) VALUES
	(1, 'SC-20260908-MNIRC', '2026-09-08 04:17:46', 1, '2026-09-07 21:17:46', '2026-09-07 21:17:46'),
	(2, 'SC-20260908-0ZKQA', '2026-09-08 07:13:49', 2, '2026-09-08 00:13:49', '2026-09-08 00:13:49');

-- Dumping structure for table export_cost.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.sessions: ~2 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('oRT9UxqKVTZnBvsxr0gGXzQLPyMV30LDOitPlvwq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.136.1 Chrome/148.0.7778.280 Electron/42.10.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2xzeWVZMHh3VmhRU2lMclcwTzl4UGFYblRvRGNJQVZXT0NDTDd6byI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1788852864),
	('TV3dSnxMjw7CriNFkg0LAnAQABPjBIv4YNUqmpo6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjE4dEJqM2hsd25PSEdhanZZQ0UydFkzNDdycFkwQ0ZyMEhLWkZLQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3Jnb3QtcGFzc3dvcmQiO3M6NToicm91dGUiO3M6MTY6InBhc3N3b3JkLnJlcXVlc3QiO319', 1788853065);

-- Dumping structure for table export_cost.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suppliers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.suppliers: ~20 rows (approximately)
INSERT INTO `suppliers` (`id`, `nama_supplier`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
	(2, 'UD Purwanti Suwarno', 'Dk. Gading No. 843, Tangerang 45708, NTB', '6256776556', 'ella11@example.net', '2026-09-07 21:09:14', '2026-09-08 00:00:25'),
	(3, 'CV Tamba Lestari Tbk', 'Ds. Hang No. 558, Administrasi Jakarta Selatan 50624, Kalbar', '0429 6514 9725', 'hidayanto.elvina@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(4, 'CV Handayani Waluyo Tbk', 'Dk. Abdul No. 667, Gorontalo 41091, NTB', '(+62) 748 5102 8166', 'mangunsong.jarwa@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(5, 'Fa Sitorus (Persero) Tbk', 'Kpg. Bacang No. 273, Banjarmasin 65382, Kaltara', '0999 7967 5341', 'najwa49@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(6, 'Perum Wijayanti Tampubolon Tbk', 'Dk. Zamrud No. 32, Mataram 56315, Kaltim', '0674 4493 369', 'febi13@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(7, 'UD Pangestu Pratiwi', 'Gg. Padma No. 926, Cirebon 16219, Sultra', '0877 3234 5233', 'hastuti.pia@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(8, 'Yayasan Narpati', 'Jr. Abdul Rahmat No. 441, Tomohon 23998, Gorontalo', '(+62) 934 8329 020', 'widodo.ayu@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(9, 'CV Najmudin Tampubolon', 'Ki. Industri No. 756, Tanjungbalai 57766, Banten', '0911 5761 987', 'kawaya50@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(10, 'Yayasan Palastri', 'Ki. Raden Saleh No. 81, Batam 53274, Babel', '0704 3344 8875', 'suartini.samsul@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(11, 'Fa Maheswara', 'Ki. Jagakarsa No. 796, Sibolga 20458, Malut', '(+62) 550 3628 923', 'soktaviani@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(12, 'CV Maryati', 'Gg. Pattimura No. 546, Palu 77056, Jambi', '0485 7224 215', 'talia99@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(13, 'Fa Zulkarnain Rahimah', 'Jr. Laksamana No. 516, Samarinda 39408, Kepri', '0885 4093 379', 'urahayu@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(14, 'PJ Haryanto', 'Ds. Sudiarto No. 493, Bontang 18038, Banten', '0313 2880 4937', 'chalimah@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(15, 'Fa Suartini', 'Ds. Sukajadi No. 862, Tual 83002, Sulsel', '(+62) 893 5103 073', 'surya45@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(16, 'PD Utama', 'Gg. Sumpah Pemuda No. 151, Tomohon 34775, Sumbar', '0949 0679 8036', 'anggriawan.yance@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(17, 'PJ Wasita', 'Gg. Rajiman No. 850, Bengkulu 95581, Kaltim', '(+62) 396 1352 836', 'yunita.narpati@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(18, 'PD Haryanti Damanik (Persero) Tbk', 'Psr. Warga No. 303, Tanjung Pinang 58209, NTB', '(+62) 487 5496 0724', 'mmandasari@example.com', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(19, 'PD Mardhiyah', 'Gg. Kyai Gede No. 937, Depok 40597, Sumut', '0945 5999 867', 'lhalimah@example.org', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(20, 'PJ Hariyah Tbk', 'Jr. Bazuka Raya No. 108, Banda Aceh 81183, Kaltara', '0587 5290 7982', 'lmansur@example.net', '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(21, 'PT Berkah Maju', 'Cilaku', '6372882829', 'farhansya.ban07@gmail.com', '2026-09-07 23:59:59', '2026-09-07 23:59:59');

-- Dumping structure for table export_cost.undernames
CREATE TABLE IF NOT EXISTS `undernames` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_izin_ekspor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `undernames_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.undernames: ~20 rows (approximately)
INSERT INTO `undernames` (`id`, `nama_perusahaan`, `nomor_izin_ekspor`, `alamat`, `telepon`, `email`, `fee`, `created_at`, `updated_at`) VALUES
	(1, 'PT Oktaviani (Persero) Tbk', '2073375000429', 'Kpg. Suharso No. 637, Ternate 23186, Kaltim', '(+62) 757 3141 311', 'hasna10@example.org', 7.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(2, 'Fa Siregar Tbk', '8780902566599', 'Jr. BKR No. 946, Probolinggo 60602, Maluku', '(+62) 237 8796 840', 'ciaobella.sudiati@example.com', 3.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(3, 'UD Gunarto Tbk', '9081590766331', 'Psr. Lumban Tobing No. 746, Surabaya 52869, Jateng', '0871 9353 3884', 'langgeng.pradipta@example.org', 3.00, '2026-09-07 21:09:14', '2026-09-07 21:09:14'),
	(4, 'PT Maryati Halimah', '6279790794523', 'Ds. Kyai Gede No. 66, Madiun 33212, Sulsel', '0304 2519 252', 'rmardhiyah@example.com', 5.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(5, 'Perum Saptono Mayasari (Persero) Tbk', '3457750766436', 'Psr. Laswi No. 314, Kediri 62576, Jateng', '(+62) 376 1435 863', 'lanjar55@example.org', 10.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(6, 'PJ Pranowo Megantara', '5466740288984', 'Ki. Basoka No. 86, Bengkulu 95044, Maluku', '0934 2090 3439', 'tami.hariyah@example.org', 6.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(7, 'Fa Rahimah Iswahyudi (Persero) Tbk', '7603847229447', 'Psr. Villa No. 126, Prabumulih 89285, Maluku', '027 1004 612', 'kala35@example.org', 4.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(8, 'PD Melani Zulaika', '0254080765450', 'Ki. Abdul Muis No. 907, Banjarbaru 17718, Kalbar', '(+62) 893 3625 8295', 'ade.maryati@example.net', 8.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(9, 'PT Anggriawan', '0659370716014', 'Dk. Wahid Hasyim No. 436, Balikpapan 47191, Kalsel', '0904 9005 874', 'hana.maryati@example.net', 6.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(10, 'PD Mansur (Persero) Tbk', '8493711502278', 'Psr. Sumpah Pemuda No. 217, Bekasi 61840, Pabar', '0768 7327 381', 'janggriawan@example.com', 5.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(11, 'Perum Damanik (Persero) Tbk', '3238700691171', 'Psr. Dahlia No. 294, Tanjung Pinang 70754, Pabar', '0862 6086 4307', 'hakim.fitriani@example.net', 1.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(12, 'CV Pradipta (Persero) Tbk', '8441601441643', 'Jr. BKR No. 250, Administrasi Jakarta Selatan 45307, Babel', '(+62) 27 6322 5394', 'zulaikha96@example.org', 1.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(13, 'UD Hartati Hidayat Tbk', '6814417970944', 'Jr. Gremet No. 861, Palangka Raya 29159, Bali', '(+62) 463 4331 506', 'sabar71@example.com', 3.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(14, 'UD Aryani Handayani', '3026220435040', 'Jr. Gambang No. 822, Administrasi Jakarta Barat 56586, Jatim', '(+62) 445 2003 631', 'gadang.hardiansyah@example.net', 7.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(15, 'PD Mansur Tbk', '7566371227644', 'Ki. Basmol Raya No. 578, Medan 58685, Bali', '(+62) 879 349 244', 'asitorus@example.net', 8.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(16, 'PT Widodo', '1314185714807', 'Dk. W.R. Supratman No. 769, Metro 14304, DIY', '0573 5339 3878', 'pratama.umay@example.net', 5.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(17, 'UD Halimah', '8108073365796', 'Jr. Gremet No. 347, Sawahlunto 15308, Jambi', '(+62) 22 2848 9688', 'elma.namaga@example.net', 10.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(18, 'PJ Puspita Prakasa', '7560103743881', 'Jr. Bahagia  No. 63, Dumai 78953, Malut', '0854 7861 004', 'zelaya.prasetyo@example.com', 4.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(19, 'PT Iswahyudi', '5549043633057', 'Kpg. Kebonjati No. 110, Tanjungbalai 12229, Pabar', '(+62) 212 3799 6092', 'atmaja98@example.net', 4.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(20, 'PT Irawan Natsir', '5925991763290', 'Ki. Baladewa No. 806, Padangsidempuan 21133, Sumbar', '(+62) 835 025 352', 'siregar.jarwi@example.net', 2.00, '2026-09-07 21:09:15', '2026-09-07 21:09:15');

-- Dumping structure for table export_cost.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table export_cost.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '2026-09-07 21:09:15', '$2y$12$CrczLl/mJAaxZpCGoF9zguTPZocVRMTJUYDXpjx5ZKw0/CN8/oIUW', 'lwlnhUhDacCrzAK3rTRo1U4fpMlYkxK3VLVvkqOiUcjLvrVxzSqCrmRgojBe', '2026-09-07 21:09:15', '2026-09-07 21:09:15'),
	(2, 'operasional', 'operasional@gmail.com', '2026-09-07 21:09:16', '$2y$12$F6tdGSqGEq.P03yCitQCkOeMKS8QiWJFMjLF8DG9vAmSTe/T.N8ee', 'RhbLuJIL3cTDEbhylUuSmYvZ2q592fHtXAE7H1tQcCpx5Ys7lWuYVyuzv26s', '2026-09-07 21:09:16', '2026-09-07 21:09:16'),
	(3, 'sales', 'sales@gmail.com', '2026-09-07 21:09:16', '$2y$12$5Mx9gYV62BY7GuaGJMh6r.hjv5K381U7L4r6XU7bVgrG0sJOLx5oi', 'lvgziji1626wwqMXx2bnbdv9wl7RFwGFmDy3ZGeqh11tQzUUQwAd9QYcgDhE', '2026-09-07 21:09:16', '2026-09-07 21:09:16');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
