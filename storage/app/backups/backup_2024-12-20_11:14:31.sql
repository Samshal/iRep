/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: irep
-- ------------------------------------------------------
-- Server version	11.6.2-MariaDB-ubu2404

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account_notifications`
--

DROP TABLE IF EXISTS `account_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `entity_id` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `account_notifications_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=386 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_notifications`
--

LOCK TABLES `account_notifications` WRITE;
/*!40000 ALTER TABLE `account_notifications` DISABLE KEYS */;
INSERT INTO `account_notifications` VALUES
(1,6,5,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-14 21:34:24','2024-12-14 21:34:24'),
(2,5,4,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-14 21:37:30','2024-12-14 21:37:30'),
(3,5,4,'post','Someone reposted your post','Bamgboye Oluwatosin reposted your post',NULL,'2024-12-14 21:38:03','2024-12-14 21:38:03'),
(4,5,4,'post','Someone bookmarked your post','Bamgboye Oluwatosin bookmarked your post',NULL,'2024-12-14 21:38:33','2024-12-14 21:38:33'),
(5,2,1,'petition','New signature on your petition','Bamgboye Oluwatosin signed your petition',NULL,'2024-12-14 21:39:09','2024-12-14 21:39:09'),
(6,5,4,'report','New approval on your report','Bamgboye Oluwatosin approved your report',NULL,'2024-12-14 21:39:42','2024-12-14 21:39:42'),
(7,5,4,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-14 22:02:32','2024-12-14 22:02:32'),
(8,5,4,'post','Someone reposted your post','Bamgboye Oluwatosin reposted your post',NULL,'2024-12-14 22:03:08','2024-12-14 22:03:08'),
(9,134,4,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-14 22:03:08','2024-12-14 22:03:08'),
(10,5,4,'post','Someone bookmarked your post','Bamgboye Oluwatosin bookmarked your post',NULL,'2024-12-14 22:04:11','2024-12-14 22:04:11'),
(11,6,5,'report','New approval on your report','Bamgboye Oluwatosin approved your report',NULL,'2024-12-14 22:09:05','2024-12-14 22:09:05'),
(12,2,1,'petition','New signature on your petition','Senator Musa Itar signed your petition',NULL,'2024-12-15 10:54:33','2024-12-15 10:54:33'),
(13,134,40,'petition','New signature on your petition','Senator Musa Itar signed your petition',NULL,'2024-12-15 13:56:34','2024-12-15 13:56:34'),
(14,134,27,'petition','New signature on your petition','Senator Musa Itar signed your petition',NULL,'2024-12-15 14:05:55','2024-12-15 14:05:55'),
(15,134,7,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-15 14:06:28','2024-12-15 14:06:28'),
(16,134,7,'comment','Someone liked your comment','Senator Musa Itar liked your comment',NULL,'2024-12-15 14:07:11','2024-12-15 14:07:11'),
(17,134,26,'petition','New signature on your petition','Senator Musa Itar signed your petition',NULL,'2024-12-15 14:08:50','2024-12-15 14:08:50'),
(18,134,25,'petition','New signature on your petition','Senator Musa Itar signed your petition',NULL,'2024-12-15 14:10:35','2024-12-15 14:10:35'),
(19,134,8,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-15 15:35:29','2024-12-15 15:35:29'),
(20,134,40,'petition','New signature on your petition','abdul signed your petition',NULL,'2024-12-15 15:35:44','2024-12-15 15:35:44'),
(21,134,40,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-15 21:32:24','2024-12-15 21:32:24'),
(22,2,15,'post','Someone reposted your post','Senator Musa Itar reposted your post',NULL,'2024-12-15 21:49:04','2024-12-15 21:49:04'),
(23,2,15,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-15 21:50:07','2024-12-15 21:50:07'),
(24,134,40,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-16 04:25:33','2024-12-16 04:25:33'),
(25,134,11,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 07:59:00','2024-12-16 07:59:00'),
(26,134,12,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 07:59:15','2024-12-16 07:59:15'),
(27,134,40,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 08:37:30','2024-12-16 08:37:30'),
(28,134,27,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 09:05:35','2024-12-16 09:05:35'),
(29,134,26,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 09:07:56','2024-12-16 09:07:56'),
(30,134,13,'comment','New comment on your post','John commented on your post',NULL,'2024-12-16 09:32:49','2024-12-16 09:32:49'),
(31,3,2,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 09:57:59','2024-12-16 09:57:59'),
(32,3,2,'post','Someone reposted your post','Bamgboye Oluwatosin reposted your post',NULL,'2024-12-16 09:58:11','2024-12-16 09:58:11'),
(33,3,2,'post','Someone bookmarked your post','Bamgboye Oluwatosin bookmarked your post',NULL,'2024-12-16 09:58:24','2024-12-16 09:58:24'),
(34,2,1,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 10:01:18','2024-12-16 10:01:18'),
(35,2,1,'post','Someone reposted your post','Bamgboye Oluwatosin reposted your post',NULL,'2024-12-16 10:01:27','2024-12-16 10:01:27'),
(36,2,1,'post','Someone bookmarked your post','Bamgboye Oluwatosin bookmarked your post',NULL,'2024-12-16 10:01:36','2024-12-16 10:01:36'),
(37,134,14,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 10:02:21','2024-12-16 10:02:21'),
(38,134,15,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 10:11:04','2024-12-16 10:11:04'),
(39,134,16,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 10:16:19','2024-12-16 10:16:19'),
(40,134,17,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 10:16:31','2024-12-16 10:16:31'),
(41,134,18,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 10:18:13','2024-12-16 10:18:13'),
(42,134,40,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 10:30:14','2024-12-16 10:30:14'),
(43,134,40,'petition','New signature on your petition','Bamgboye Oluwatosin signed your petition',NULL,'2024-12-16 10:41:45','2024-12-16 10:41:45'),
(44,134,49,'post','Someone bookmarked your post','Senator Musa Itar bookmarked your post',NULL,'2024-12-16 14:59:33','2024-12-16 14:59:33'),
(45,134,19,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 16:25:12','2024-12-16 16:25:12'),
(46,134,49,'post','Someone reposted your post','Senator Musa Itar reposted your post',NULL,'2024-12-16 16:25:39','2024-12-16 16:25:39'),
(47,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:00','2024-12-16 16:26:00'),
(48,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:03','2024-12-16 16:26:03'),
(49,134,18,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:27','2024-12-16 16:26:27'),
(50,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:36','2024-12-16 16:26:36'),
(51,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:39','2024-12-16 16:26:39'),
(52,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:26:42','2024-12-16 16:26:42'),
(53,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 16:27:09','2024-12-16 16:27:09'),
(54,134,18,'post','Someone reposted your post','Senator Musa Itar reposted your post',NULL,'2024-12-16 16:27:27','2024-12-16 16:27:27'),
(55,134,26,'post','Someone bookmarked your post','Senator Musa Itar bookmarked your post',NULL,'2024-12-16 16:38:19','2024-12-16 16:38:19'),
(56,134,49,'post','Someone liked your post','Senator Musa Itar liked your post',NULL,'2024-12-16 18:54:16','2024-12-16 18:54:16'),
(57,134,20,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:37:32','2024-12-16 20:37:32'),
(58,134,21,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:37:41','2024-12-16 20:37:41'),
(59,134,22,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:37:53','2024-12-16 20:37:53'),
(60,134,23,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:40:35','2024-12-16 20:40:35'),
(61,134,24,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:40:56','2024-12-16 20:40:56'),
(62,134,25,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 20:41:20','2024-12-16 20:41:20'),
(63,134,26,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 21:03:34','2024-12-16 21:03:34'),
(64,134,49,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-16 21:30:12','2024-12-16 21:30:12'),
(65,134,49,'post','Someone reposted your post','abdul reposted your post',NULL,'2024-12-16 21:30:12','2024-12-16 21:30:12'),
(66,134,47,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-16 21:30:18','2024-12-16 21:30:18'),
(67,134,47,'post','Someone reposted your post','abdul reposted your post',NULL,'2024-12-16 21:30:21','2024-12-16 21:30:21'),
(68,134,40,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-16 21:30:42','2024-12-16 21:30:42'),
(69,134,40,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-16 21:30:45','2024-12-16 21:30:45'),
(70,151,50,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-16 21:37:49','2024-12-16 21:37:49'),
(71,151,50,'post','Someone reposted your post','abdul reposted your post',NULL,'2024-12-16 21:37:52','2024-12-16 21:37:52'),
(72,151,27,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-16 21:38:19','2024-12-16 21:38:19'),
(73,151,28,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 21:43:22','2024-12-16 21:43:22'),
(74,151,29,'comment','New comment on your post','Senator Musa Itar commented on your post',NULL,'2024-12-16 21:43:52','2024-12-16 21:43:52'),
(75,151,50,'post','Someone liked your post','ABIMBOLA liked your post',NULL,'2024-12-16 21:45:19','2024-12-16 21:45:19'),
(76,151,50,'post','Someone liked your post','ABIMBOLA liked your post',NULL,'2024-12-16 21:45:19','2024-12-16 21:45:19'),
(77,151,50,'post','Someone liked your post','ABIMBOLA liked your post',NULL,'2024-12-16 21:45:22','2024-12-16 21:45:22'),
(78,134,24,'post','Someone reposted your post','abdul reposted your post',NULL,'2024-12-16 21:50:47','2024-12-16 21:50:47'),
(79,134,24,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-16 21:50:47','2024-12-16 21:50:47'),
(80,134,30,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-16 21:51:05','2024-12-16 21:51:05'),
(81,2,31,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-16 21:54:32','2024-12-16 21:54:32'),
(82,134,49,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-16 22:02:33','2024-12-16 22:02:33'),
(83,151,50,'post','Someone reposted your post','Senator Musa Itar reposted your post',NULL,'2024-12-16 22:19:19','2024-12-16 22:19:19'),
(84,151,50,'post','Someone reposted your post','Senator Musa Itar reposted your post',NULL,'2024-12-16 22:19:22','2024-12-16 22:19:22'),
(85,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-16 23:27:57','2024-12-16 23:27:57'),
(86,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-16 23:35:54','2024-12-16 23:35:54'),
(87,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-16 23:35:57','2024-12-16 23:35:57'),
(88,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-16 23:35:57','2024-12-16 23:35:57'),
(89,151,50,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-16 23:37:01','2024-12-16 23:37:01'),
(90,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-16 23:37:25','2024-12-16 23:37:25'),
(91,151,50,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-16 23:37:34','2024-12-16 23:37:34'),
(92,151,50,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 00:05:06','2024-12-17 00:05:06'),
(93,151,50,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 00:05:12','2024-12-17 00:05:12'),
(94,134,25,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 00:05:39','2024-12-17 00:05:39'),
(95,134,25,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 00:05:42','2024-12-17 00:05:42'),
(96,134,51,'post','Someone liked your post',' liked your post',NULL,'2024-12-17 07:31:07','2024-12-17 07:31:07'),
(97,134,51,'post','Someone reposted your post',' reposted your post',NULL,'2024-12-17 07:31:19','2024-12-17 07:31:19'),
(98,134,51,'post','Someone reposted your post',' reposted your post',NULL,'2024-12-17 07:31:22','2024-12-17 07:31:22'),
(99,134,51,'post','Someone reposted your post',' reposted your post',NULL,'2024-12-17 07:31:22','2024-12-17 07:31:22'),
(100,134,32,'comment','New comment on your post',' commented on your post',NULL,'2024-12-17 07:31:49','2024-12-17 07:31:49'),
(101,134,33,'comment','New comment on your post',' commented on your post',NULL,'2024-12-17 07:32:31','2024-12-17 07:32:31'),
(102,134,34,'comment','New comment on your post',' commented on your post',NULL,'2024-12-17 07:47:44','2024-12-17 07:47:44'),
(103,134,35,'comment','New comment on your post',' commented on your post',NULL,'2024-12-17 08:12:37','2024-12-17 08:12:37'),
(104,134,47,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 08:17:37','2024-12-17 08:17:37'),
(105,134,47,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:17:40','2024-12-17 08:17:40'),
(106,134,51,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 08:30:26','2024-12-17 08:30:26'),
(107,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:41:51','2024-12-17 08:41:51'),
(108,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:42:12','2024-12-17 08:42:12'),
(109,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:42:15','2024-12-17 08:42:15'),
(110,134,51,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 08:44:33','2024-12-17 08:44:33'),
(111,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:00','2024-12-17 08:45:00'),
(112,134,51,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 08:45:03','2024-12-17 08:45:03'),
(113,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:06','2024-12-17 08:45:06'),
(114,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:06','2024-12-17 08:45:06'),
(115,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:10','2024-12-17 08:45:10'),
(116,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:10','2024-12-17 08:45:10'),
(117,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:45:13','2024-12-17 08:45:13'),
(118,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:54:58','2024-12-17 08:54:58'),
(119,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:01','2024-12-17 08:55:01'),
(120,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:01','2024-12-17 08:55:01'),
(121,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:04','2024-12-17 08:55:04'),
(122,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:04','2024-12-17 08:55:04'),
(123,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:04','2024-12-17 08:55:04'),
(124,134,27,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:55:17','2024-12-17 08:55:17'),
(125,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:47','2024-12-17 08:56:47'),
(126,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:50','2024-12-17 08:56:50'),
(127,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:53','2024-12-17 08:56:53'),
(128,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:53','2024-12-17 08:56:53'),
(129,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:53','2024-12-17 08:56:53'),
(130,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:56','2024-12-17 08:56:56'),
(131,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:56:56','2024-12-17 08:56:56'),
(132,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:17','2024-12-17 08:57:17'),
(133,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:20','2024-12-17 08:57:20'),
(134,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:23','2024-12-17 08:57:23'),
(135,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:35','2024-12-17 08:57:35'),
(136,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:44','2024-12-17 08:57:44'),
(137,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:44','2024-12-17 08:57:44'),
(138,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:47','2024-12-17 08:57:47'),
(139,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:50','2024-12-17 08:57:50'),
(140,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 08:57:50','2024-12-17 08:57:50'),
(141,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:21','2024-12-17 09:03:21'),
(142,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:21','2024-12-17 09:03:21'),
(143,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:39','2024-12-17 09:03:39'),
(144,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:45','2024-12-17 09:03:45'),
(145,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:45','2024-12-17 09:03:45'),
(146,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:03:48','2024-12-17 09:03:48'),
(147,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:06','2024-12-17 09:04:06'),
(148,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:09','2024-12-17 09:04:09'),
(149,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:09','2024-12-17 09:04:09'),
(150,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:15','2024-12-17 09:04:15'),
(151,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:24','2024-12-17 09:04:24'),
(152,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:24','2024-12-17 09:04:24'),
(153,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:27','2024-12-17 09:04:27'),
(154,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:27','2024-12-17 09:04:27'),
(155,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:30','2024-12-17 09:04:30'),
(156,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:30','2024-12-17 09:04:30'),
(157,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:33','2024-12-17 09:04:33'),
(158,134,48,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 09:04:51','2024-12-17 09:04:51'),
(159,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:24','2024-12-17 09:05:24'),
(160,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:27','2024-12-17 09:05:27'),
(161,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:27','2024-12-17 09:05:27'),
(162,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:31','2024-12-17 09:05:31'),
(163,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:31','2024-12-17 09:05:31'),
(164,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:34','2024-12-17 09:05:34'),
(165,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:34','2024-12-17 09:05:34'),
(166,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:34','2024-12-17 09:05:34'),
(167,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:37','2024-12-17 09:05:37'),
(168,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:37','2024-12-17 09:05:37'),
(169,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:40','2024-12-17 09:05:40'),
(170,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:40','2024-12-17 09:05:40'),
(171,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:05:52','2024-12-17 09:05:52'),
(172,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:07:10','2024-12-17 09:07:10'),
(173,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:07:13','2024-12-17 09:07:13'),
(174,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:07:13','2024-12-17 09:07:13'),
(175,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:07:16','2024-12-17 09:07:16'),
(176,134,40,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 09:07:16','2024-12-17 09:07:16'),
(177,134,51,'petition','New signature on your petition','Senator Don Victor signed your petition',NULL,'2024-12-17 09:27:06','2024-12-17 09:27:06'),
(178,165,52,'post','Someone reposted your post','Abimbola Taofeek reposted your post',NULL,'2024-12-17 09:39:12','2024-12-17 09:39:12'),
(179,165,52,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-17 09:39:12','2024-12-17 09:39:12'),
(180,151,50,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-17 09:39:34','2024-12-17 09:39:34'),
(181,165,36,'comment','New comment on your post','Abimbola Taofeek commented on your post',NULL,'2024-12-17 09:40:28','2024-12-17 09:40:28'),
(182,151,50,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-17 09:40:46','2024-12-17 09:40:46'),
(183,165,52,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-17 09:48:25','2024-12-17 09:48:25'),
(184,165,52,'post','Someone bookmarked your post','Abimbola Taofeek bookmarked your post',NULL,'2024-12-17 09:51:10','2024-12-17 09:51:10'),
(185,165,52,'post','Someone bookmarked your post','Abimbola Taofeek bookmarked your post',NULL,'2024-12-17 09:51:14','2024-12-17 09:51:14'),
(186,165,52,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-17 09:54:38','2024-12-17 09:54:38'),
(187,165,53,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-17 10:01:05','2024-12-17 10:01:05'),
(188,165,53,'petition','New signature on your petition','Lara John Doe signed your petition',NULL,'2024-12-17 10:25:22','2024-12-17 10:25:22'),
(189,165,53,'post','Someone liked your post','Lara John Doe liked your post',NULL,'2024-12-17 10:27:31','2024-12-17 10:27:31'),
(190,134,54,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 12:15:30','2024-12-17 12:15:30'),
(191,134,54,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 12:15:33','2024-12-17 12:15:33'),
(192,165,52,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 13:25:59','2024-12-17 13:25:59'),
(193,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 15:19:34','2024-12-17 15:19:34'),
(194,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 15:19:40','2024-12-17 15:19:40'),
(195,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 15:19:40','2024-12-17 15:19:40'),
(196,134,22,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-17 15:19:46','2024-12-17 15:19:46'),
(197,134,48,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-17 15:32:53','2024-12-17 15:32:53'),
(198,134,27,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-17 20:08:21','2024-12-17 20:08:21'),
(199,134,38,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 22:59:24','2024-12-17 22:59:24'),
(200,2,3,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-17 23:15:55','2024-12-17 23:15:55'),
(201,134,39,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 23:16:01','2024-12-17 23:16:01'),
(202,134,40,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 23:16:43','2024-12-17 23:16:43'),
(203,134,39,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-17 23:18:28','2024-12-17 23:18:28'),
(204,134,41,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 23:19:28','2024-12-17 23:19:28'),
(205,134,42,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 23:22:02','2024-12-17 23:22:02'),
(206,134,43,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-17 23:40:57','2024-12-17 23:40:57'),
(207,2,2,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-17 23:41:09','2024-12-17 23:41:09'),
(208,134,39,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:00:43','2024-12-18 00:00:43'),
(209,134,43,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:26','2024-12-18 00:08:26'),
(210,134,43,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:29','2024-12-18 00:08:29'),
(211,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:29','2024-12-18 00:08:29'),
(212,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:35','2024-12-18 00:08:35'),
(213,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:35','2024-12-18 00:08:35'),
(214,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:38','2024-12-18 00:08:38'),
(215,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:38','2024-12-18 00:08:38'),
(216,134,38,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:08:38','2024-12-18 00:08:38'),
(217,134,43,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:09:56','2024-12-18 00:09:56'),
(218,134,44,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 00:10:32','2024-12-18 00:10:32'),
(219,165,45,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 00:21:27','2024-12-18 00:21:27'),
(220,134,45,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-18 00:22:00','2024-12-18 00:22:00'),
(221,165,46,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 00:22:06','2024-12-18 00:22:06'),
(222,165,53,'post','Someone liked your post','Bamgboye Oluwatosin liked your post',NULL,'2024-12-18 09:27:41','2024-12-18 09:27:41'),
(223,134,47,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 15:30:45','2024-12-18 15:30:45'),
(224,134,48,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 15:32:15','2024-12-18 15:32:15'),
(225,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:35','2024-12-18 16:37:35'),
(226,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:35','2024-12-18 16:37:35'),
(227,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:38','2024-12-18 16:37:38'),
(228,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:41','2024-12-18 16:37:41'),
(229,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:41','2024-12-18 16:37:41'),
(230,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:37:44','2024-12-18 16:37:44'),
(231,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:29','2024-12-18 16:39:29'),
(232,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:32','2024-12-18 16:39:32'),
(233,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:53','2024-12-18 16:39:53'),
(234,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:53','2024-12-18 16:39:53'),
(235,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:56','2024-12-18 16:39:56'),
(236,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:56','2024-12-18 16:39:56'),
(237,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:56','2024-12-18 16:39:56'),
(238,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:59','2024-12-18 16:39:59'),
(239,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:59','2024-12-18 16:39:59'),
(240,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:39:59','2024-12-18 16:39:59'),
(241,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:15','2024-12-18 16:40:15'),
(242,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:15','2024-12-18 16:40:15'),
(243,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:15','2024-12-18 16:40:15'),
(244,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:18','2024-12-18 16:40:18'),
(245,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:18','2024-12-18 16:40:18'),
(246,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:18','2024-12-18 16:40:18'),
(247,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:40:18','2024-12-18 16:40:18'),
(248,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:41:12','2024-12-18 16:41:12'),
(249,134,51,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:41:15','2024-12-18 16:41:15'),
(250,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:15','2024-12-18 16:43:15'),
(251,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:15','2024-12-18 16:43:15'),
(252,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:15','2024-12-18 16:43:15'),
(253,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:18','2024-12-18 16:43:18'),
(254,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:18','2024-12-18 16:43:18'),
(255,134,40,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:39','2024-12-18 16:43:39'),
(256,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:43:57','2024-12-18 16:43:57'),
(257,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:00','2024-12-18 16:44:00'),
(258,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:00','2024-12-18 16:44:00'),
(259,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:03','2024-12-18 16:44:03'),
(260,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:27','2024-12-18 16:44:27'),
(261,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:30','2024-12-18 16:44:30'),
(262,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:44:37','2024-12-18 16:44:37'),
(263,134,54,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:45:34','2024-12-18 16:45:34'),
(264,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:46:55','2024-12-18 16:46:55'),
(265,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:46:55','2024-12-18 16:46:55'),
(266,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:46:58','2024-12-18 16:46:58'),
(267,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:46:58','2024-12-18 16:46:58'),
(268,134,68,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-18 16:47:04','2024-12-18 16:47:04'),
(269,134,68,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-18 16:47:04','2024-12-18 16:47:04'),
(270,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:47:07','2024-12-18 16:47:07'),
(271,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:50:46','2024-12-18 16:50:46'),
(272,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:51:16','2024-12-18 16:51:16'),
(273,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:51:40','2024-12-18 16:51:40'),
(274,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:51:43','2024-12-18 16:51:43'),
(275,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:54:26','2024-12-18 16:54:26'),
(276,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:54:29','2024-12-18 16:54:29'),
(277,165,53,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:54:44','2024-12-18 16:54:44'),
(278,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:54:47','2024-12-18 16:54:47'),
(279,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:55:11','2024-12-18 16:55:11'),
(280,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:55:11','2024-12-18 16:55:11'),
(281,165,53,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 16:55:26','2024-12-18 16:55:26'),
(282,158,67,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-18 17:02:05','2024-12-18 17:02:05'),
(283,151,69,'post','Someone liked your post','abdul liked your post',NULL,'2024-12-18 17:24:04','2024-12-18 17:24:04'),
(284,151,49,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:24:28','2024-12-18 17:24:28'),
(285,151,69,'petition','New signature on your petition','abdul signed your petition',NULL,'2024-12-18 17:24:40','2024-12-18 17:24:40'),
(286,134,51,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:25:52','2024-12-18 17:25:52'),
(287,134,68,'petition','New signature on your petition','abdul signed your petition',NULL,'2024-12-18 17:26:49','2024-12-18 17:26:49'),
(288,151,53,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:27:37','2024-12-18 17:27:37'),
(289,151,54,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:27:52','2024-12-18 17:27:52'),
(290,151,55,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:28:56','2024-12-18 17:28:56'),
(291,151,53,'comment','Someone liked your comment','abdul liked your comment',NULL,'2024-12-18 17:33:47','2024-12-18 17:33:47'),
(292,151,54,'comment','Someone liked your comment','abdul liked your comment',NULL,'2024-12-18 17:33:50','2024-12-18 17:33:50'),
(293,151,55,'comment','Someone liked your comment','abdul liked your comment',NULL,'2024-12-18 17:33:50','2024-12-18 17:33:50'),
(294,151,56,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-18 17:34:02','2024-12-18 17:34:02'),
(295,151,27,'comment','Someone liked your comment','abdul liked your comment',NULL,'2024-12-18 17:34:08','2024-12-18 17:34:08'),
(296,151,70,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-18 17:38:38','2024-12-18 17:38:38'),
(297,151,69,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 19:01:56','2024-12-18 19:01:56'),
(298,151,69,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 19:01:56','2024-12-18 19:01:56'),
(299,158,57,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 19:20:07','2024-12-18 19:20:07'),
(300,134,58,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 19:29:25','2024-12-18 19:29:25'),
(301,134,59,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 19:29:38','2024-12-18 19:29:38'),
(302,134,60,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 19:29:44','2024-12-18 19:29:44'),
(303,134,61,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 19:41:44','2024-12-18 19:41:44'),
(304,134,62,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:10:44','2024-12-18 20:10:44'),
(305,134,63,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:11:11','2024-12-18 20:11:11'),
(306,158,64,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:16:50','2024-12-18 20:16:50'),
(307,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 20:19:29','2024-12-18 20:19:29'),
(308,151,70,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 20:19:32','2024-12-18 20:19:32'),
(309,158,67,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-18 20:19:32','2024-12-18 20:19:32'),
(310,158,65,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:33:09','2024-12-18 20:33:09'),
(311,151,66,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:34:39','2024-12-18 20:34:39'),
(312,165,67,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:44:58','2024-12-18 20:44:58'),
(313,165,68,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:45:19','2024-12-18 20:45:19'),
(314,165,69,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 20:45:40','2024-12-18 20:45:40'),
(315,158,70,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 21:38:17','2024-12-18 21:38:17'),
(316,158,71,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 21:40:20','2024-12-18 21:40:20'),
(317,134,72,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:14:35','2024-12-18 22:14:35'),
(318,134,73,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:25:15','2024-12-18 22:25:15'),
(319,151,74,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:28:27','2024-12-18 22:28:27'),
(320,151,75,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:32:27','2024-12-18 22:32:27'),
(321,151,76,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:49:37','2024-12-18 22:49:37'),
(322,151,77,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:51:53','2024-12-18 22:51:53'),
(323,151,78,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:54:08','2024-12-18 22:54:08'),
(324,134,79,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:54:14','2024-12-18 22:54:14'),
(325,134,80,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:54:26','2024-12-18 22:54:26'),
(326,134,81,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:54:53','2024-12-18 22:54:53'),
(327,134,82,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-18 22:59:47','2024-12-18 22:59:47'),
(328,151,69,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-18 23:01:35','2024-12-18 23:01:35'),
(329,151,69,'post','Someone liked your post','Abimbola Taofeek liked your post',NULL,'2024-12-18 23:01:38','2024-12-18 23:01:38'),
(330,165,83,'comment','New comment on your post','Abimbola Taofeek commented on your post',NULL,'2024-12-18 23:06:42','2024-12-18 23:06:42'),
(331,134,54,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-18 23:08:12','2024-12-18 23:08:12'),
(332,134,54,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-18 23:08:15','2024-12-18 23:08:15'),
(333,158,67,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-18 23:08:18','2024-12-18 23:08:18'),
(334,134,68,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 00:15:26','2024-12-19 00:15:26'),
(335,134,45,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 00:15:41','2024-12-19 00:15:41'),
(336,134,46,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 00:19:02','2024-12-19 00:19:02'),
(337,134,84,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:03:54','2024-12-19 09:03:54'),
(338,134,85,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:04:06','2024-12-19 09:04:06'),
(339,134,86,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:04:27','2024-12-19 09:04:27'),
(340,134,87,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:04:30','2024-12-19 09:04:30'),
(341,134,88,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:04:45','2024-12-19 09:04:45'),
(342,134,89,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:05:00','2024-12-19 09:05:00'),
(343,134,89,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:05:06','2024-12-19 09:05:06'),
(344,134,87,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:05:06','2024-12-19 09:05:06'),
(345,134,63,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:05:09','2024-12-19 09:05:09'),
(346,134,68,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-19 09:05:15','2024-12-19 09:05:15'),
(347,134,68,'post','Someone bookmarked your post','Senator Don Victor bookmarked your post',NULL,'2024-12-19 09:05:18','2024-12-19 09:05:18'),
(348,134,77,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:05:42','2024-12-19 09:05:42'),
(349,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-19 09:07:12','2024-12-19 09:07:12'),
(350,134,68,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-19 09:07:15','2024-12-19 09:07:15'),
(351,134,68,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-19 09:07:36','2024-12-19 09:07:36'),
(352,134,71,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-19 09:28:44','2024-12-19 09:28:44'),
(353,134,90,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:29:08','2024-12-19 09:29:08'),
(354,134,91,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:29:20','2024-12-19 09:29:20'),
(355,134,92,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:30:08','2024-12-19 09:30:08'),
(356,134,93,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:30:44','2024-12-19 09:30:44'),
(357,134,94,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:31:05','2024-12-19 09:31:05'),
(358,134,95,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 09:31:23','2024-12-19 09:31:23'),
(359,134,90,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:31:53','2024-12-19 09:31:53'),
(360,134,94,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:31:56','2024-12-19 09:31:56'),
(361,134,92,'comment','Someone liked your comment','Senator Don Victor liked your comment',NULL,'2024-12-19 09:31:56','2024-12-19 09:31:56'),
(362,134,71,'post','Someone reposted your post','Senator Don Victor reposted your post',NULL,'2024-12-19 09:32:17','2024-12-19 09:32:17'),
(363,134,96,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-19 10:22:15','2024-12-19 10:22:15'),
(364,134,97,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-19 10:22:24','2024-12-19 10:22:24'),
(365,158,98,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-19 10:22:57','2024-12-19 10:22:57'),
(366,158,99,'comment','New comment on your post','abdul commented on your post',NULL,'2024-12-19 10:23:15','2024-12-19 10:23:15'),
(367,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:48','2024-12-19 10:24:48'),
(368,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:48','2024-12-19 10:24:48'),
(369,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:51','2024-12-19 10:24:51'),
(370,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:51','2024-12-19 10:24:51'),
(371,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:51','2024-12-19 10:24:51'),
(372,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:55','2024-12-19 10:24:55'),
(373,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:24:55','2024-12-19 10:24:55'),
(374,134,68,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:25:01','2024-12-19 10:25:01'),
(375,134,68,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:25:01','2024-12-19 10:25:01'),
(376,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:25:07','2024-12-19 10:25:07'),
(377,158,67,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:25:34','2024-12-19 10:25:34'),
(378,151,69,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:25:46','2024-12-19 10:25:46'),
(379,134,51,'post','Someone bookmarked your post','abdul bookmarked your post',NULL,'2024-12-19 10:26:13','2024-12-19 10:26:13'),
(380,134,72,'post','Someone liked your post','Senator Don Victor liked your post',NULL,'2024-12-19 12:14:21','2024-12-19 12:14:21'),
(381,134,100,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 12:15:39','2024-12-19 12:15:39'),
(382,134,101,'comment','New comment on your post','Senator Don Victor commented on your post',NULL,'2024-12-19 12:15:51','2024-12-19 12:15:51'),
(383,134,72,'petition','New signature on your petition','Senator Don Victor signed your petition',NULL,'2024-12-19 14:46:25','2024-12-19 14:46:25'),
(384,134,102,'comment','New comment on your post','Bamgboye Oluwatosin commented on your post',NULL,'2024-12-20 08:00:31','2024-12-20 08:00:31'),
(385,134,103,'comment','New comment on your post','Bamgboye Oluwatosin commented on your post',NULL,'2024-12-20 08:01:02','2024-12-20 08:01:02');
/*!40000 ALTER TABLE `account_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_types`
--

LOCK TABLES `account_types` WRITE;
/*!40000 ALTER TABLE `account_types` DISABLE KEYS */;
INSERT INTO `account_types` VALUES
(3,'admin'),
(1,'citizen'),
(2,'representative'),
(4,'super_admin');
/*!40000 ALTER TABLE `account_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_url` varchar(255) DEFAULT 'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',
  `cover_photo_url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `local_government_id` int(11) DEFAULT NULL,
  `account_type` int(11) NOT NULL DEFAULT 1,
  `polling_unit` varchar(255) DEFAULT NULL,
  `kyc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`kyc`)),
  `email_verified` tinyint(1) DEFAULT 0,
  `status` enum('active','suspended') DEFAULT 'active',
  `kyced` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `account_type` (`account_type`),
  KEY `state_id` (`state_id`),
  KEY `local_government_id` (`local_government_id`),
  CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`account_type`) REFERENCES `account_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE SET NULL,
  CONSTRAINT `accounts_ibfk_3` FOREIGN KEY (`local_government_id`) REFERENCES `local_governments` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES
(1,'https://i.imgur.com/HH3yXoK.png',NULL,'iREP','news@irep.com','$2y$12$r2HWgKIKXHc8MKQyVuvsne4w1jwjLCZITKemICRpQZJ5SbTeCmeXi',NULL,NULL,NULL,NULL,NULL,NULL,3,NULL,NULL,1,'active',0,'2024-12-14 16:16:49','2024-12-14 16:16:49'),
(2,'https://res.cloudinary.com/dsueaitln/image/upload/v1734345870/media/epwr4c3w6bvswfcrzanr.jpg','https://res.cloudinary.com/dsueaitln/image/upload/v1734345859/media/x0dpoc4hwyova4tx9hdr.png','Bamgboye Oluwatosin','john.doe@example.com','$2y$12$ikHIp2mQ81rhmtdtBoC7C.EzmzbqRj08DDC0X.8jw78GxaZcJX7mO','08012345678','male','1899-12-30','12, Lagos Street, Abeokuta',27,573,1,NULL,'[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734209542\\/media\\/hiajwsld0fp4yauymlkm.png\"]',1,'active',1,'2024-12-14 16:16:49','2024-12-16 10:44:40'),
(3,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'Jane Smith','jane.smith@example.com','$2y$12$HH9ji2/n0IYQmwnws3dKEukcTOBdSxZUHZ5eP5yioLS4AGjErJIzy','08098765432',NULL,'1988-07-15','45, Ikorodu Road, Lagos',24,597,1,NULL,'{\"url\":\"https:\\/\\/example.com\\/kyc\\/janesmith\"}',0,'active',0,'2024-12-14 16:16:49','2024-12-14 16:16:49'),
(4,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'Michael Johnson','michael.johnson@example.com','$2y$12$7ZCV2AJ8sAdYNNB5JtU6yOcIIPXt09SPvMMO3oej.Gehc2tCPCtBe','08011223344',NULL,'1992-09-23','23, Ring Road, Ibadan',30,740,1,NULL,'{\"url\":\"https:\\/\\/example.com\\/kyc\\/michaeljohnson\"}',1,'active',0,'2024-12-14 16:16:49','2024-12-14 16:16:49'),
(5,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Abba Patrick Moro','abahmoro@yahoo.com','$2y$12$n2aHJQzQBn9IAli980IYdugknFsqV1lt8C25qAKEtqNVcl3u6EG1O','08068870606',NULL,NULL,NULL,7,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:51','2024-12-14 16:16:51'),
(6,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Abdullahi Adamu','abdullahi.adamu@nass.gov.ng','$2y$12$8ZNMbzq/g.v58DTGuH6K5eYvDNNGP9cdvKrFXrUa4QA25YO/eCdE.',NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:51','2024-12-14 16:16:51'),
(7,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Abdullahi Gobir','abdullahi.gobir@nass.gov.ng','$2y$12$EGrtntkWuvfFII2tCzPsAugozyMCAe4uMikeVxTEEKTxJJNuE3NDG',NULL,NULL,NULL,NULL,33,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:52','2024-12-14 16:16:52'),
(8,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Abubakar Kyari','abubakar.kyari@nass.gov.ng','$2y$12$kWVZ1bZQxN2yOYTsMNMPReiF48qHaMlXELJYTyjK1ysjtlvrzIWya',NULL,NULL,NULL,NULL,8,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:52','2024-12-14 16:16:52'),
(9,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Adaeze Stella Oduah','senatorstella@gmail.com','$2y$12$Pkc7O1lqy31mFebxXm8d1.SPGjjVIOYuX67.tTBSMuoKztGq.Yh.y','08055084340',NULL,NULL,NULL,4,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:52','2024-12-14 16:16:52'),
(10,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Adamu Bulkachuwa','adamu.bulkachuwa@nass.gov.ng','$2y$12$Z9bcJhUJ.lSjHIF.mwK8Le/rEfYMltMHzCLhu8UGXmu4NI8kTOp/q',NULL,NULL,NULL,NULL,5,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:53','2024-12-14 16:16:53'),
(11,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Adelere Adeyemi Oriolowo','yemlee12@gmail.com','$2y$12$5RHZ1bVgfbifW3niv1StXO2JQTcZTYiB88shXz5JooM1VYN/wrCCK','08033565979',NULL,NULL,NULL,29,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:53','2024-12-14 16:16:53'),
(12,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ademola Kola Balogun','kbalogun7707@gmail.com','$2y$12$qEzFHeM1ufm9CJPMili0MOR/UXILbpOnkGeS2sOcgc/bx.3xz177K','08132956057',NULL,NULL,NULL,30,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:53','2024-12-14 16:16:53'),
(13,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Aduda Philip Tanimu','philipaduda2@yahoo.com','$2y$12$Dm.2G8meEP9WolURBavjl.iTkH3nE4Qg/D/CYkUvsL99ZPq3zyW6K','08034509106',NULL,NULL,NULL,37,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:54','2024-12-14 16:16:54'),
(14,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Babba-kaita','ahmad.babba@nass.gov.ng','$2y$12$mFIwd0zijS3L9bEe3Mdg2e0s9swVGkzeOv4F/OkLOlW2GFH8m9r8u',NULL,NULL,NULL,NULL,20,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:54','2024-12-14 16:16:54'),
(15,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','0k3Q0Z9aYQ@example.com','$2y$12$xbnBshOx8JTppfOMmhCddeajse9TY9dWLgxhDi4vvmJTEiM4C.Xl2','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:55','2024-12-14 16:16:55'),
(16,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Aishatu Dahiru Ahmed','aishatu.ahmed@nass.gov.ng','$2y$12$8m.HqWFrin7AAr/8pTAz9u40.29Xs0ZpamOR1y1TjN.4PNeID45XW',NULL,NULL,NULL,NULL,2,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:55','2024-12-14 16:16:55'),
(17,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Akon Etim Eyakenyi','konssie@yahoo.com','$2y$12$mpEzqvcunTuI5Dv3e1YHmOgv2Hbr47ojylMb91.XgO9CwcmNgMBbW','08035054282',NULL,NULL,NULL,3,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:55','2024-12-14 16:16:55'),
(18,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Aliyu Magatakarda Wamakko','amwamakko@yahoo.com','$2y$12$0vepzJJbLfeoohb1RoS9zODGQXGqhojrHemrMJpyKSxwZzyxKeOIW','07033181818',NULL,NULL,NULL,33,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:56','2024-12-14 16:16:56'),
(19,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Aliyu Sabi Abdullahi','draliyuabdullahii@gmail.com','$2y$12$Sq1pOAz2ztRWGsPIfd1GA.sS53xH1JMbYX05Ous.flXKMCKo1JAd6','08052046555',NULL,NULL,NULL,26,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:56','2024-12-14 16:16:56'),
(20,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Amos Bulus Kilawangs','amos.kilawangs@nass.gov.ng','$2y$12$X8qZTEDLFKWONHhq.QT1nOuCEwO7cEgxKkdgxNApKmcgFikT95v0W',NULL,NULL,NULL,NULL,15,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:56','2024-12-14 16:16:56'),
(21,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ashiru Oyelola Yisa','ylashiru@gmail.com','$2y$12$.Hr2T90sNFphT6ob0IYyW.jAeZvg7MIFnQ3UrqnIQla2AWLUDkwOO','07055221111',NULL,NULL,NULL,23,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:57','2024-12-14 16:16:57'),
(22,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ayo Patrick Akinyelure','akinyelure1@yahoo.com','$2y$12$j3FJyGpwJz7zEZP.DoeUhuRK6HkTy5tmY4F6rSIqWgPIg0hti4rWm','=+2348091707000',NULL,NULL,NULL,28,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:57','2024-12-14 16:16:57'),
(23,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Bala Ibn Na\'allah','bala.naallah@nass.gov.ng','$2y$12$y5xUCL7emhCrSLjGbrVSnOQZ5bNlhsj/fFWr3mqCeipkHxl48gbJ2',NULL,NULL,NULL,NULL,21,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:58','2024-12-14 16:16:58'),
(24,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Barinada Barry Mpigi','mpigib@yahoo.com','$2y$12$0rF0w/3A7HHSH/HDfOa.ROz46i0n05Y3etFUk66v34WvIOePigzdW','08037419000',NULL,NULL,NULL,32,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:58','2024-12-14 16:16:58'),
(25,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Bassey Albert Akpan','akpanalbert@hotmail.com','$2y$12$d1X9BdW0rw3AM0vfOPg.hOb6F/966HWk0YVWI0iOF5MPKB7dbvabK','08055555188',NULL,NULL,NULL,3,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:58','2024-12-14 16:16:58'),
(26,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Bello Mandiya','bellom2001@yahoo.com','$2y$12$/UOgcewvWLYF3IP12JmRqer1foqbnEurmtMF2aIVnACMsCMvrDt2G','23480330836',NULL,NULL,NULL,20,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:59','2024-12-14 16:16:59'),
(27,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Betty Apiafi','betty.apiafi@nass.gov.ng','$2y$12$4LJreIZ/UV2fZlJUmmNLSOvk5qCf1ncMHyzUvlyyAMgBPXWo6zLae',NULL,NULL,NULL,NULL,32,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:59','2024-12-14 16:16:59'),
(28,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Binos Dauda Yaroe','bdyaroe@gmail.com','$2y$12$/qs./lmDKETPcvnGYJdN8O/hcRkP3jrXM3KTvfL.uSLnPLN5Mzivq','08034050460',NULL,NULL,NULL,2,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:16:59','2024-12-14 16:16:59'),
(29,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Biobarakuma W Degi-eremienyo','degi.wangagha@nass.gov.ng','$2y$12$cn48ZQVsl18E.JCraO7lhOaFcr3jj54gwtR2Sy3F5d62uOs5Tczxa',NULL,NULL,NULL,NULL,6,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:00','2024-12-14 16:17:00'),
(30,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Biodun Christine Olujimi','biodun_olujimi@yahoo.com','$2y$12$S2Osn9FwfuunqECkTK3VcO7X9VmU1XVgwklxoAe0gUI4a3qAmZRDK','08023051100',NULL,NULL,NULL,13,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:00','2024-12-14 16:17:00'),
(31,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Buhari Abdulfatai Omotayo','rabab1004@yahoo.com','$2y$12$FjGePtKuXK6neaxSMdgQAOe2ghKopfUnJLy5WY6elFkf2PkM6cCwi',NULL,NULL,NULL,NULL,30,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:00','2024-12-14 16:17:00'),
(32,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Chimaroke Ogbonnia Nnamani','ebeanoglobal875@gmail.com','$2y$12$D5g8cfFNHiHPDGhZbONukunl9AXZldqJZlf7L0gx7.KxXkUE9Scjq','08022255522',NULL,NULL,NULL,14,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:01','2024-12-14 16:17:01'),
(33,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Chukwuka Utazi','chukwuka.utazi@nass.gov.ng','$2y$12$qvRMGefH8icMK9t6RsFK5OQleS6b7m75Ri4VEn0I1Wna3ODf12lSC',NULL,NULL,NULL,NULL,14,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:01','2024-12-14 16:17:01'),
(34,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Clifford Akhimienmona Ordia','ENGINEERCLIFFORDORDIA@GMAIL.COM','$2y$12$1m893oGG3jgn2Kw1z24DduTxDsoZQ/YVX3wThuAWpYyGORe10WIw6','08038403877',NULL,NULL,NULL,12,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:02','2024-12-14 16:17:02'),
(35,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Danjuma Goje Mohammed','mdgoje1@gmail.com','$2y$12$6w6BhEMs5jbgGLNVA8Ay5OM/290Zl5NufKeRCCUbfwOCxm6MjKAQu','07068686699',NULL,NULL,NULL,15,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:02','2024-12-14 16:17:02'),
(36,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Danjuma Tella La\'ah','laah.danjuma@yahoo.com','$2y$12$Ke.bGZKHjyBEYvuKNaFUKOPVTGe1xFXH3iq2/l9/J/azNYXXOW86m','08118887772',NULL,NULL,NULL,18,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:02','2024-12-14 16:17:02'),
(37,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Danladi Abdullahi Sankara','dsankara@yahoo.co.uk','$2y$12$rjMGtEqMhVTZCfmkesjV/elOoYBJbwrYmIs3ClYy7QjrOjKdScT6y','08037032577',NULL,NULL,NULL,17,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:03','2024-12-14 16:17:03'),
(38,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ekwunife Lilian Uche','U.EKWUNIFE@YAHOO.COM','$2y$12$2rt1KDF79tgbgFDABCGpZ.f33J3o6xAKn3IDHz/ayyWUU.Sc9.jX6','08037620002',NULL,NULL,NULL,4,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:03','2024-12-14 16:17:03'),
(39,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Emmanuel Bwacha','info@senatorbwacha.com','$2y$12$cbpkBPNG9dzesYHPTnoa8eEZjFO7v/dI/40I35tCK0WsRgTBIoOM6','07063795588',NULL,NULL,NULL,34,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:03','2024-12-14 16:17:03'),
(40,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Emmanuel Yisa Orker-jev','emmanuel.orkerjev@nass.gov.ng','$2y$12$2MpSpswv4r6TrP.Ny1PAsOOrgVJP6O4AKadGC6ArkF6lBeBBUxFZ.',NULL,NULL,NULL,NULL,7,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:04','2024-12-14 16:17:04'),
(41,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Enyinnaya Harcourt Abaribe','enyiabaribe@yahoo.com','$2y$12$y/Mi1JpsBvCWGtm.uZ6kD.TgmNOBMsvNsrHZOd7q/B3xDz7lumA/u','08033129452',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:04','2024-12-14 16:17:04'),
(42,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ezenwa Francis Onyewuchi','ezeonyewuchi@gmail.com','$2y$12$UWVdVAd/g70XfaE58ESNw.9LXtob9Wnd9kZudQ10sTIZWoLtHiwpm','08032012132',NULL,NULL,NULL,16,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:05','2024-12-14 16:17:05'),
(43,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Francis Adenigba Fadahunsi','adefadahunsi19@gmail.com','$2y$12$IvnXKd8zO8cxho/lUjdHluAbp8bsvZAIbeoCVtmKcAHZPyimHqIdO','08052242211',NULL,NULL,NULL,29,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:05','2024-12-14 16:17:05'),
(44,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Francis Asekhame Alimikhena','falimikhena@yahoo.com','$2y$12$jKAdBJCruxFWYxStPVg/ue/JqZVwLbSQG.PIjvNK7cfE6hNOLJDs.','08155555884',NULL,NULL,NULL,12,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:05','2024-12-14 16:17:05'),
(45,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. George Thompson Sekibo','george.sekibo@nass.gov.ng','$2y$12$fwG2g.07xtFGzZsK5DRvpONENZ6lPGk8llgTXEhPPC/Y7mZbYKFSq',NULL,NULL,NULL,NULL,32,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:06','2024-12-14 16:17:06'),
(46,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Gershom Henry Bassey','gershombassey@gmail.com','$2y$12$2uaeG..u3tmMwn5olmUSBONJsMWjAd5cYhnBnKgIld7UgkXX9.H8W','08034444555',NULL,NULL,NULL,9,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:06','2024-12-14 16:17:06'),
(47,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Godiya Akwashiki','godiyaakwashiki123@gmail.com','$2y$12$jpL5cdFnL04PSlTVzOBLuOEr10OeHph0mQxijbAydNqhu0sVSvuTi','08099321703',NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:06','2024-12-14 16:17:06'),
(48,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Halliru Dauda Jika','jikahalliru@gmail.comN','$2y$12$hO4xe.gsiR1aaPECjTc.ROmSu3LzFGezfMA..r0iG3A/GnwkmUQz.','08038666690',NULL,NULL,NULL,5,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:07','2024-12-14 16:17:07'),
(49,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Hassan Mohammed Gusau','hassan.gusau@nass.gov.ng','$2y$12$zLwwiP9Q/nTzBK8APRRHxuCXcKZXbVF5HPwCVfMMtU/bzroj1gG/i',NULL,NULL,NULL,NULL,36,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:07','2024-12-14 16:17:07'),
(50,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Hezekiah Ayuba Dimka','dewansamson4@gmail.com','$2y$12$ulxLm5ZEPiA50bP84CGojuwP/guPd5Mcdpxgry9h8IKJvIJdxQM6C','08033359443',NULL,NULL,NULL,31,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:08','2024-12-14 16:17:08'),
(51,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibikunle Oyelaja Amosun','amks2@yahoo.com','$2y$12$seURZBGYZ1pingj49Q57c.C7Wzyl.3llOC7ZkCH8boBUrw2hPwCY2','08033213993',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:08','2024-12-14 16:17:08'),
(52,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Barau Jibrin','ibrahim.jibrin@nass.gov.ng','$2y$12$yOBDC28kbMnRc9C5hb5mQe13xD4tssmmIAc2rScECz.cpgAOIJnR6',NULL,NULL,NULL,NULL,19,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:08','2024-12-14 16:17:08'),
(53,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Gaidam','ibrahim.gaidam@nass.gov.ng','$2y$12$DStL83SySqhah/BUbr2l/ue7H8n2jjB6AU8MjpJ/JkmRpDYi5J.rC',NULL,NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:09','2024-12-14 16:17:09'),
(54,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Hadejia','ibrahim.hadejia@nass.gov.ng','$2y$12$pxql0TDc3OM4rmVu13Wfvu/b1qhIC2pp4thEo.suYZhApln4xL6O2',NULL,NULL,NULL,NULL,17,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:09','2024-12-14 16:17:09'),
(55,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Mohammed Bomai','ibrahim.bomami@nass.gov.ng','$2y$12$del8ywocVVIU0XmYo0UHg.La/haryrkfA6lvM5xucWaLOa2Tyqq0W',NULL,NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:09','2024-12-14 16:17:09'),
(56,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Shekarau','ishekarau55@yahoo.com','$2y$12$8TgLaZKkLU0KpDerizKf3O2gZLANE3a6/YP8VNK/nWmfJAYYG7Jey','08099199111',NULL,NULL,NULL,19,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:10','2024-12-14 16:17:10'),
(57,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ibrahim Yahaya Oloriegbe','oloridoc@yahoo.com','$2y$12$uFvUzKnGMRrEXgDYaeyniuhoovzoKbToVWi8UoCUvPSKVU.Ev.54e','08033581695',NULL,NULL,NULL,23,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:10','2024-12-14 16:17:10'),
(58,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ifeanyi Patrick Ubah','senatorifeanyiubah@gmail.com','$2y$12$zZGUOk/Nzmb/fKZTQTz/suH9AELuCc0WQAT23LttrlrOncm/qCJDu','09096655596',NULL,NULL,NULL,4,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:10','2024-12-14 16:17:10'),
(59,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ike Ekweremadu','ikeekweremadu@yahoo.com','$2y$12$/qZ5SB9Y/IJSAlBhHSiCxOrtHZ9YBf/Qasm1D50i9DHgS9Q8X8nOW','08075757000',NULL,NULL,NULL,14,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:11','2024-12-14 16:17:11'),
(60,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ishaku Elisha cliff Abbo','Faradugun@gmail.com','$2y$12$yM65wZ19p7UOLNBG8i7aReOzdWY2Yi09OWnjF7SKL0EwnAEr1BKCK','08066285112',NULL,NULL,NULL,2,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:11','2024-12-14 16:17:11'),
(61,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Istifanus Dung Gyang','dridgyang@gmail.com','$2y$12$2O.zmkpGsN.fmVFp/b/.TOjp72Hxkg2pqzFNBEjrOyQp2eE1HXfhq','08097777712',NULL,NULL,NULL,31,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:12','2024-12-14 16:17:12'),
(62,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. James Ebiowou Manager','jamesmanager2013@gmail.com','$2y$12$vAg0dfe9wu7fBt6ECssCvOtAn7QaSSduhDfrRkuQgr7.3lcp5XKMW',NULL,NULL,NULL,NULL,10,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:12','2024-12-14 16:17:12'),
(63,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Jibrin Isah','isahj@ymail.com','$2y$12$YNQC8tYqbdErBzJKnBooWOVWBAtkqOx9oGaL9r8aexPwXLlf39fba','08185651909',NULL,NULL,NULL,22,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:12','2024-12-14 16:17:12'),
(64,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Joseph Obinna Ogba','onwaigboasa@yahoo.com','$2y$12$LwKGIcERxCq.DFP074ter.hXTTH6gHbL44BoIXzSsHkXPxH5Au4Ja','08037791346',NULL,NULL,NULL,11,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:13','2024-12-14 16:17:13'),
(65,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Kabir Abdullahi Barkiya','Barkamazadu00@yahoo.com','$2y$12$n9nJQrCHTTN78aVZQGzTauPelntZz2gxLojVeYkaZ8tW2nmvCbuii','08138360742',NULL,NULL,NULL,20,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:13','2024-12-14 16:17:13'),
(66,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Kabiru Ibrahim Gaya','kabiru.gaya@nass.gov.ng','$2y$12$xUNLzS4cXq8SsLjKhNlij.Ow/NxXknsnWL.4Fx79iePo.yr2VuKsq',NULL,NULL,NULL,NULL,19,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:13','2024-12-14 16:17:13'),
(67,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Kashim Shettima','KASHIMSHETTIMA@GMAIL.COM','$2y$12$xg4VXVjX9AvE.mMxWwAKROmf6vp2G2Ddwv.tCVobSDtWgE07dlv7K','08034459047',NULL,NULL,NULL,8,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:14','2024-12-14 16:17:14'),
(68,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Lawal Yahaya Gumau','lawal.gumau@nass.gov.ng','$2y$12$3fuo163bD648AQtVPpqU7eOAsWGinzHU0G9DfQpVwhpAomQiH791K',NULL,NULL,NULL,NULL,5,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:14','2024-12-14 16:17:14'),
(69,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Matthew Aisagbonriodion Urhoghide','matthewurhoghide@yahoo.com','$2y$12$5Vb5cdv.gk/HBEfYVOxnGeBHmVHvr2Opp6mQeM1H6fx6NqS2gWoxO','08033855557',NULL,NULL,NULL,12,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:15','2024-12-14 16:17:15'),
(70,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Michael Ama Nnachi','michaelamannachi@gmail.com','$2y$12$vij9Sy3zR9u/Nqb.Ree71OW.UwOZpr5WchEF1wq.TNNwfUk8siMiC','08034528595',NULL,NULL,NULL,11,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:15','2024-12-14 16:17:15'),
(71,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Michael Opeyemi Bamidele','amicusng@gmail.com','$2y$12$Li4Fy9Jsey7YgSY3.srvA.agyGTdEr/bwTJ2wWF/G9ARIZBHVlDZe','23480911112',NULL,NULL,NULL,13,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:15','2024-12-14 16:17:15'),
(72,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Mohammad Adamu Mainasara aliero','senatoraliero@yahoo.com','$2y$12$ml6O7G8nE6r6fBzLR8lpme36NNAHEFmSWQ8eSQfDoYAQtevcC772i','07066847000',NULL,NULL,NULL,21,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:16','2024-12-14 16:17:16'),
(73,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Mohammed Ali Ndume','mohammed.ndume@nass.gov.ng','$2y$12$Cf.C4wm0f3mR3nNqTpNgiulCixrjnFHe7kh9kIAhbSUoVSFeYNC4K','08109480004',NULL,NULL,NULL,8,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:16','2024-12-14 16:17:16'),
(74,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Mohammed Sani Musa','Sani-313@hotmail.com','$2y$12$DChbNkLkRY6DCVuMZlV9TO9W.0XIUBO36QpCRQF2RfCLd1Kp1PVbC','08033114615',NULL,NULL,NULL,26,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:16','2024-12-14 16:17:16'),
(75,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Muhammad Enagi Bima','SANGIBIMA@GMAIL.COM','$2y$12$FOexthkt0UzqN1febMAdNOdCUNjdKNb2sYLiqM4gQ5CZq.3BlZ6u6','08173479797',NULL,NULL,NULL,26,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:17','2024-12-14 16:17:17'),
(76,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Nicholas Olubukola Tofowomo','tofowomo_1960@yahoo.com','$2y$12$Qe59lUu1wZ0tqKYDhJ34HucXAAL4vbMZj5b3Ri/8efaWUGgbV9hWW','08054546666',NULL,NULL,NULL,28,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:17','2024-12-14 16:17:17'),
(77,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Olubunmi Ayodeji Adetunmbi','senator.adetunmbi@gmail.com','$2y$12$yTCJJFcv6xgJoNQDBABqCuxO1fVMrXWGAxkGr8OJOQRbzuKLXoz.e','08064487689',NULL,NULL,NULL,13,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:18','2024-12-14 16:17:18'),
(78,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Oluremi Shade Tinubu','info@oluremitinubu.com','$2y$12$NzmrplXPwXH256vbBdfmjumtctH2DRea/xOdcgyMqW5PpIj9/0Jp6','08095300251',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:18','2024-12-14 16:17:18'),
(79,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Orji Uzor Kalu','OKALU@ORJIKALU.COM','$2y$12$8Cxldyvukd6dyBD0lY8xtubIQBRXZtU.eR5qC1ruRrnn6IR02aN7S','08034000001',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:18','2024-12-14 16:17:18'),
(80,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Oseni Yakubu','yakubu.oseni75@yahoo.com','$2y$12$mV26LjeKMwMzysP/4Kf5l.A9A.0VRyH.0lc/Z0MSPa75k9KzDHuY2','07032642674',NULL,NULL,NULL,22,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:19','2024-12-14 16:17:19'),
(81,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ovie Augustine Omo-agege','Senator.ovieomoagege@gmail.com','$2y$12$rNeyWKBfC8M.XV845tSTvebjNyLWV3rMosiDGlAMeZ9eQpvAkoF6q','07033399937',NULL,NULL,NULL,10,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:19','2024-12-14 16:17:19'),
(82,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Peter Onyeluka Nwaoboshi','PNWAOBOSHI@YAHOO.COM','$2y$12$Z9U7FaxPA/McAU.fU2jYfeDYa3I2dt5eH9Q9qNZUDignQp2KETA2i','08037200999',NULL,NULL,NULL,10,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:19','2024-12-14 16:17:19'),
(83,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ramoni Olalekan Mustapha','adeoshy@gmail.com','$2y$12$5T1272amj0YvOgi7UAGOje1CU1Kp74j.vDqVUr25wpGm6Bp.rHssW','08033047403',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:20','2024-12-14 16:17:20'),
(84,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Robert Ajayi Boroffice','rboroffice@yahoo.com','$2y$12$31bNw8eq1P489OWJdd9sGO.aUzFfZvETkk6SPdSYCBX/Lxz0mqHb.','08176406557',NULL,NULL,NULL,28,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:20','2024-12-14 16:17:20'),
(85,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Rochas Okorocha','rochas.okorocha@nass.gov.ng','$2y$12$HwAxFIuG8fHry8GNYSzmLuD3E4loQvwul59.Wfc4Kd0NgS6nMnTv2',NULL,NULL,NULL,NULL,16,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:20','2024-12-14 16:17:20'),
(86,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Rose Okoji Oko','rose.oko@nass.gov.ng','$2y$12$0uWqPmjCah/lzZ1KQywRa.sWNYiqpRLW1MI1oFXQGR/A/.x.indIa',NULL,NULL,NULL,NULL,9,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:21','2024-12-14 16:17:21'),
(87,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Sabo Mohammed','nakudu@yahoo.com','$2y$12$MI3hFpxE0w8zClx93rehEO042P10tnbadgqdtdCUHcGrcbDGDZ9Fy','08022902648',NULL,NULL,NULL,17,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:21','2024-12-14 16:17:21'),
(88,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Sadiq Suleiman Umar','sadiq.umar@nass.gov.ng','$2y$12$CwnRD9yHLCmx3RZzdMh4.exkoR.Pici2C3RQUALcm7zE0vUWgmfXS',NULL,NULL,NULL,NULL,23,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:22','2024-12-14 16:17:22'),
(89,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Saidu Ahmed Alkali','saidualkali905@gmail.com','$2y$12$SPc06IeaUCPOJDlq4YNZku2aCKoSFuHmYBoA4RlCNmwjaplhx7wOa','08026032222',NULL,NULL,NULL,15,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:22','2024-12-14 16:17:22'),
(90,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Samuel Ominyi Egwu','drsamominyiegwu@gmail.com','$2y$12$eK11Ue/CpoVIsltQp69mJeLc31vNUanCFO9YHLftwak9gplWXxejK','08039665848',NULL,NULL,NULL,11,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:22','2024-12-14 16:17:22'),
(91,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Sandy Ojang Onor','irunandu@yahoo.com','$2y$12$xOjWiJNNcKVo.im3soDOj.32wsLZcVyFNXmv/7MPTPd.Qp4NrB4q.','08030998460',NULL,NULL,NULL,9,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:23','2024-12-14 16:17:23'),
(92,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Shuaibu Isa Lau','shuaibu.lau@nass.gov.ng','$2y$12$WP0DZGmVYkWDgZkPs96EqetsSPJPGvu0yxd.mtqQQEZt/IDvx0mV.',NULL,NULL,NULL,NULL,34,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:23','2024-12-14 16:17:23'),
(93,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Solomon Olamilekan Adeola','bayoosinowo@gmail.com','$2y$12$XYfG86WcwJdJIpZA9mWzrO4./ZMGa2Pkb5zYxKwOPJmQsbGzFSp8O','08033049369',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:23','2024-12-14 16:17:23'),
(94,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Suleiman Abdu Kwari','adeolaolamilekan2005@yahoo.com','$2y$12$Y9PF8icA4X.MbAE8Qael/OBHnxbr18PQEeWETwUUtkaOXZZtYfmhK','08074000040',NULL,NULL,NULL,18,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:24','2024-12-14 16:17:24'),
(95,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Surajudeen Ajibola Basiru','SULEIMANKWARI@YAHOO.COM','$2y$12$OBEaRx.clcAPWTN04Arc.uwbdoeQY5Zn/1PByfBSzusGX3ZICAnWS','08033019005',NULL,NULL,NULL,29,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:24','2024-12-14 16:17:24'),
(96,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Teslim Kolawale Folarin','ajibolabasiru@hotmail.com','$2y$12$HoCMbvEhl5MIXKFehUTk6uQUIfeSxrAyIFHKIIFTdukWkYDNpzSkO','08034753343',NULL,NULL,NULL,30,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:25','2024-12-14 16:17:25'),
(97,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Theodore Ahamefule Orji','senatortaorji@gmail.com','$2y$12$9KGd7mZsaqwUM6OFXFfZ5eHk2A/Z1nPPwV2OLB6HKtZeq5eYkNSEK','07082800000',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:25','2024-12-14 16:17:25'),
(98,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Tolulope Akinremi Odebiyi','TOLUODEBIYI@GMAIL.COM','$2y$12$zeqgCUcZ4jcPCK/ZKNoZ3uyBuu6U5q7t1j.LQJPe.blCZloqCs3D2','08036058080',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:25','2024-12-14 16:17:25'),
(99,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Uba Sani','ubasani@aol.com','$2y$12$j5VCOEiiPmKxUHtcP/O7peTf.GbYl.SBvDmaGWlhi/reMbuxZ7uNK','08099111119',NULL,NULL,NULL,18,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:26','2024-12-14 16:17:26'),
(100,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Umaru Tanko Almakura','tankoalmakura@yahoo.co.uk','$2y$12$9smeLFxh2KxKeOyWhIsrs.cUwjpiBEo4u1.xIKIfYlmxGyyDU5UP2','08077253989',NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:26','2024-12-14 16:17:26'),
(101,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Yahaya Abubakar Abdullahi','yahaya.abdullahi@nass.gov.ng','$2y$12$uH5zgs/5eufl4QMCtBF/CuOcw3aL3l.znk1rQQhCeoTMZ5bJx8BiS',NULL,NULL,NULL,NULL,21,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:26','2024-12-14 16:17:26'),
(102,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Yusuf Abubakar Yusuf','yusufawakili@gmail.com','$2y$12$E5GwC09DvMRp40aqzNYlXu0lORmUwkbUwhbeuaY7YrJGHKsKj/rO2','08033109493',NULL,NULL,NULL,34,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:27','2024-12-14 16:17:27'),
(103,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Muhammadu Buhari','muhammadu.buhari@example.com','$2y$12$74cGSUUo9JrfcQmJvV8vYuh9htMF7KrJMyudFNHX4vBmoyB9EtFSK','08012345678',NULL,NULL,NULL,20,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:27','2024-12-14 16:17:27'),
(104,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Kashim Shettima','kashim.shettima@example.com','$2y$12$/OwuUpw/2rHrzeoj7dS.CuWr4ETCKgXXzq3c5zRCqIkzs6PdH3b2y','08023456789',NULL,NULL,NULL,8,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:28','2024-12-14 16:17:28'),
(105,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Atiku Abubakar','atiku.abubakar@example.com','$2y$12$E3RtesKaLArRbqWc1o5CKOtOYCxFvMBEaoqBSzYW9zLSLJzgCzv66','08034567890',NULL,NULL,NULL,2,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:28','2024-12-14 16:17:28'),
(106,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Rotimi Amaechi','rotimi.amaechi@example.com','$2y$12$xYtXfw0OndliNhn2PnQa4.DovHJnImZw26WesXUNvlKp0NaY.K0QG','08045678901',NULL,NULL,NULL,32,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:28','2024-12-14 16:17:28'),
(107,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Ngozi Okonjo-Iweala','ngozi.okonjo-iweala@example.com','$2y$12$1N5bk020h7fyjTp00DWb3uXu5.zmKba9ku0m9a/eMn2jNHeCvEw2u','08056789012',NULL,NULL,NULL,10,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:29','2024-12-14 16:17:29'),
(108,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Bukola Saraki','bukola.saraki@example.com','$2y$12$wTmsWMTafewhrth//tY1xuKsa4N53uNQCjlWlPwzj.hVFJJp2P53i','08067890123',NULL,NULL,NULL,23,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:29','2024-12-14 16:17:29'),
(109,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Ahmed Lawan','ahmed.lawan@example.com','$2y$12$6ku.0cC7S67/.VTjilQb.OLYhWFbmwVdVs3y6xgFpRYzK/ImEUGk6','08078901234',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:29','2024-12-14 16:17:29'),
(110,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Femi Gbajabiamila','femi.gbajabiamila@example.com','$2y$12$dOxaYBiKphLlHU0ETatAQ.N7xboj5jkMyirfXrih3I/mqPNujsYNm','08089012345',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:30','2024-12-14 16:17:30'),
(111,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Rita Orji','rita.orji@example.com','$2y$12$Kr1g.3sCeWCCH.KS35XUu.ONTPGwmz./pGlteTpghRb1V12M8n9Yy','08090123456',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:30','2024-12-14 16:17:30'),
(112,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Babajide Sanwo-Olu','babajide.sanwo-olu@example.com','$2y$12$gJaWANHrtiDllBiaKQdy4.VVjb3e9GMJujyF09WqswJmBfn2OhXem','08001234567',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:30','2024-12-14 16:17:30'),
(113,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Udom Emmanuel','udom.emmanuel@example.com','$2y$12$WUTVhyzE7K4/8tIZPNsSL.zMFBFXb81ADVVj5WpCK3cflqymUhjSC','08012345678',NULL,NULL,NULL,3,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:31','2024-12-14 16:17:31'),
(114,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Obafemi Hamzat','obafemi.hamzat@example.com','$2y$12$xTW4XdG0.r702RAmZ1u.4ukL2GFePqpQOZSrC0K0YnK1McAOFmQE2','08023456789',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:31','2024-12-14 16:17:31'),
(115,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Moses Ekpo','moses.ekpo@example.com','$2y$12$.dST5lLMnTvCZuThrC1B6uqFEU//Dv2KyHyqNKy.3t/iDTaFhMDku','08034567890',NULL,NULL,NULL,3,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:32','2024-12-14 16:17:32'),
(116,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Mudashiru Obasa','mudashiru.obasa@example.com','$2y$12$IUnFEzP4mUwCIPb5.ImWiOg68oCK0cbuqznCxvJuK6oCGCHx.MMOm','08045678901',NULL,NULL,NULL,24,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:32','2024-12-14 16:17:32'),
(117,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Kingsley Esiso','kingsley.esiso@example.com','$2y$12$IG10L2/b8lBZUTRlCuodZO0.Il9WXnOUJts3k2YN8tskyV6aiqHYq','08056789012',NULL,NULL,NULL,10,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:32','2024-12-14 16:17:32'),
(118,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Olufunso Adeyemi','olufunso.adeyemi@example.com','$2y$12$8DUdUcw6Egze5NQKmZDxQel8JBrVYoxWMPcn8lOiiyrxs5zBgfTFW','08067890123',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:33','2024-12-14 16:17:33'),
(119,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Iretiola Akinwunmi','iretiola.akinwunmi@example.com','$2y$12$.5jOMohyXnlimXbb491Cc.X79DDYQtZdyRV1Xu/Q2KfEAYcm7rh3K','08078901234',NULL,NULL,NULL,13,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:33','2024-12-14 16:17:33'),
(120,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Bola Abisoye','bola.abisoye@example.com','$2y$12$sExnGK9mIF0TyEoTZcyIyuH600NBUpHmd1OCXmazADLQ87QFtdb.C','08089012345',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:33','2024-12-14 16:17:33'),
(121,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Chika Nwankwo','chika.nwankwo@example.com','$2y$12$deMJWp8vf5vFNX4NJIGKGel1ZaoUCnMUnAGNOnPiisUksp8Cqfg1S','08090123456',NULL,NULL,NULL,14,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:34','2024-12-14 16:17:34'),
(122,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Taiwo Akinola','taiwo.akinola@example.com','$2y$12$u3wgGi95aMYShzhAgaBLmOMJsKootumV9uAep4X2TD9U.m8Mlu1uO','08001234567',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:34','2024-12-14 16:17:34'),
(123,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Cynthia Ogbulafor','cynthia.ogbulafor@example.com','$2y$12$zfExXzlJCqYZJiTwjl8xDeUfUiBuBuzgUqUn4n./9i8twrO2Biv8m','08012345678',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:34','2024-12-14 16:17:34'),
(124,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Dapo Olanipekun','dapo.olanipekun@example.com','$2y$12$vUd9lRWP4S03vaGWn0iX7uu39egPztgAh6NKjlEAbgn.QcwJ43BB2','08023456789',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:35','2024-12-14 16:17:35'),
(125,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Patricia Oboh','patricia.oboh@example.com','$2y$12$jWBpLRKkUPg1brAhsDIH2uQP//MyqGYfAME95O/Pd4UwgS8KBf0sm','08034567890',NULL,NULL,NULL,12,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:35','2024-12-14 16:17:35'),
(126,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Samson Akintoye','samson.akintoye@example.com','$2y$12$ImRbAvAUmO5uJINEYwcMfu.Fje1Dtmr3s46.25fwg6UJQJUEOb7Vi','08045678901',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:36','2024-12-14 16:17:36'),
(127,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Victoria Okeke','victoria.okeke@example.com','$2y$12$D72fPPr7IBoPdpvhvFRWX.SRAQb2F1XLW8i1BcSLc4DZVh6jHssg.','08056789012',NULL,NULL,NULL,4,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:36','2024-12-14 16:17:36'),
(128,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Adams Oshiomhole','adams.oshiomhole@example.com','$2y$12$L5WUJSM4BqdcEcXCOQPOGuy1fRBI2M1HAv7iLqMMtOMjXR1F.3KiG','08067890123',NULL,NULL,NULL,12,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:36','2024-12-14 16:17:36'),
(129,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Uche Secondus','uche.secondus@example.com','$2y$12$aUE81tULS6tM.TgLAoNKrOz43YDmZ2epxHkNETkvUxScjrKda7PCa','08078901234',NULL,NULL,NULL,32,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:37','2024-12-14 16:17:37'),
(130,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Okechukwu Madu','okechukwu.madu@example.com','$2y$12$zHdMBhhePEabRofX2vendeYTQaubxCoXuZ0ewHbnPnlm3PShsEO02','08089012345',NULL,NULL,NULL,1,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:37','2024-12-14 16:17:37'),
(131,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Ifeanyi Uba','ifeanyi.uba@example.com','$2y$12$zm806NMr0zEcNr3xYJ7xWummBM6r6R5Fmk2deH.Q8Y2yA.UrUVCuu','08090123456',NULL,NULL,NULL,4,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:37','2024-12-14 16:17:37'),
(132,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Boss Mustapha','boss.mustapha@example.com','$2y$12$axe298dezzktcxA0zjKdA.6CLVezKZ443COi1JEwEODYX0BZf/p3G','08001234567',NULL,NULL,NULL,2,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:38','2024-12-14 16:17:38'),
(133,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Oladapo Afolabi','oladapo.afolabi@example.com','$2y$12$V3E5yrs30l9GM9EYGzroBezFgYqlpn/cvj/IRRqn9ph6LuPCYqygW','08012345678',NULL,NULL,NULL,27,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 16:17:38','2024-12-14 16:17:38'),
(134,'https://res.cloudinary.com/dsueaitln/image/upload/v1734292518/media/qu8m2neaw6zxdufalvtx.jpg',NULL,'Senator Don Victor','egerald344@gmail.com','$2y$12$dH2U4vgW3OHOUQLJUKU56.heRQ/qMIZFULfzKzzmRQWV8vXYNUj5O','09029722970','male','1996-12-10',NULL,4,76,1,NULL,'[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734198789\\/media\\/z3kuhgy8xjrbt05geyyv.png\"]',1,'active',1,'2024-12-14 17:13:43','2024-12-16 22:31:34'),
(139,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','PGCXPpgV0X@example.com','$2y$12$C0tVVP2CfzfWM7affKMtiO68hOGdpGq6tmUWn2k1P3QVD.eI7K2Ui','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-14 20:59:25','2024-12-14 20:59:25'),
(140,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'John','peteradeshina3@gmail.com','$2y$12$KlKgUmZU5wFw55k9E1ofMO0BHMu9iEvbQlgnyG6VY15z.W54cGH.q',NULL,'male','2000-12-17',NULL,26,549,1,NULL,NULL,1,'active',1,'2024-12-15 03:08:30','2024-12-15 03:10:03'),
(145,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','6FBJ5qScXM@example.com','$2y$12$1mNmNqBanVF5hahTQXpKzeXpvnNKZrNK0KCZk0XrqHTBRYF7E2nwa','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-15 13:08:07','2024-12-15 13:08:07'),
(150,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','ODPiFR4Jh6@example.com','$2y$12$Jhd6MmaaFTzXyshejOLO/evKCsS6SR4onOanstbUFjKBA4a1uO3He','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-15 13:28:27','2024-12-15 13:28:27'),
(151,'https://res.cloudinary.com/dsueaitln/image/upload/v1734384798/media/azgfluab7wjzioatsgip.jpg',NULL,'abdul','abdulazeez.product@gmail.com','$2y$12$zu8mYMAJIPNZDzuJrukSf.rWsUB6nlFm7lE6s5LmDq/8qIWBePthu','08020009800','male','2004-12-15',NULL,37,776,1,NULL,'[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734276809\\/media\\/cpzndonhunlgx1tw1k47.jpg\"]',1,'active',1,'2024-12-15 15:32:08','2024-12-16 21:34:14'),
(156,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','GeV8JRuwry@example.com','$2y$12$ztyY9BsZP6WiTdH8gmKXqOON6xzYqPk6A1y5mQQtkpvI5MBlrN/NO','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-15 22:25:23','2024-12-15 22:25:23'),
(157,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,NULL,'de_fatigue@yahoo.com','$2y$12$bFfW2wTgDwgnfEiaLHpPperOlx1quDQWoPyQiM4Zfmm9cfqG/j2X6',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,0,'active',0,'2024-12-16 01:06:52','2024-12-16 01:06:52'),
(158,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'Abdulazeez Alugo','defatigue@hotmail.com','$2y$12$0boGcEg4aoM16oysFGES8./dPG24CszuNig5KMHNpQ7Zh5YnwifpG','+2348000000000','male','1900-12-01',NULL,24,506,1,NULL,NULL,1,'active',1,'2024-12-16 04:29:46','2024-12-17 21:24:45'),
(159,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,NULL,'hollalakes@yahoo.com','$2y$12$WFG5xywB9AZLX.ZNTDFNjeblsljaIGmXcuFYCiVRS0wYgUdEr9gAS',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,1,'active',0,'2024-12-16 05:09:38','2024-12-16 05:12:12'),
(164,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,NULL,'geraldoeze201@gmail.com','$2y$12$JErI2HsnPfiPbPypwhTst.oE9VWWwJKGJHzVjju9UUs22LfjSN4Oa',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,1,'active',0,'2024-12-16 22:29:40','2024-12-16 22:30:26'),
(165,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'Abimbola Taofeek','abimbolaadewale9999@gmail.com','$2y$12$Ve7Sd9EfxhoZNBZAfxYW2uD3sAY/b1NylG6kYuZ.r7xn1YV2mjKom',NULL,'male','1893-12-26',NULL,10,204,1,NULL,'[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734426202\\/media\\/q2b0w6su5w1tbstwzveo.jpg\"]',1,'active',1,'2024-12-17 07:45:30','2024-12-17 09:03:22'),
(166,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,'Lara John Doe','abimbolaadewale2710@gmail.com','$2y$12$j8eGesbIlkI8KTamBUK/muIKnn9OipysxA0I2f8t3d43El42MfDwS',NULL,'male','1991-12-17',NULL,16,305,1,NULL,'[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734430886\\/media\\/uqga4bce5axeh4wxsg9f.jpg\"]',1,'active',1,'2024-12-17 10:17:27','2024-12-17 10:21:27'),
(167,'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,NULL,'horduntech@gmail.com','$2y$12$9jsAMYbH9M1vcKzQN8L9ruu5IiLHRYVm1d0QX9N0Q4CYs8SEgjkIi',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,0,'active',0,'2024-12-17 15:40:32','2024-12-17 15:40:32'),
(172,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','a2zRUUOYzc@example.com','$2y$12$W8xphM33aUgJQhBWWOS3VemAp93R86VEk0vs0zpbxal.uwI6BLZFi','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-17 17:12:10','2024-12-17 17:12:10'),
(177,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','VipCXj8bhq@example.com','$2y$12$XcZ8AykCTnvRX5cn/zRaKuB4ENagN0dyCiXP6cZAZwy8k9ouZTlvq','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-17 17:31:18','2024-12-17 17:31:18'),
(182,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','kxMjQNSsiR@example.com','$2y$12$9SSDh9h.C5pC.dtnOefKvuhJMesasPa.8wLg1O99.BAs4KAv.Exwq','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-19 10:37:30','2024-12-19 10:37:30'),
(187,'https://i.imgur.com/0GY9tnz.jpeg',NULL,'Sen. Ahmad Ibrahim Lawan','0m89i4iLOg@example.com','$2y$12$Gmll1730aji1zFqF33IGNOyYyUidkc6cFMP5D2b08UJkgNASIFO0e','07055090323',NULL,NULL,NULL,35,NULL,2,NULL,NULL,1,'active',0,'2024-12-20 07:56:35','2024-12-20 07:56:35');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_activities`
--

DROP TABLE IF EXISTS `admin_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `entity_type` enum('account','post','comment','admin') NOT NULL,
  `entity_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `admin_activities_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_activities`
--

LOCK TABLES `admin_activities` WRITE;
/*!40000 ALTER TABLE `admin_activities` DISABLE KEYS */;
INSERT INTO `admin_activities` VALUES
(1,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-14 16:17:41'),
(2,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-14 16:17:41'),
(3,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-14 16:17:41'),
(4,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-14 16:17:41'),
(5,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-14 16:17:41'),
(6,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-14 20:59:28'),
(7,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-14 20:59:28'),
(8,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-14 20:59:28'),
(9,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-14 20:59:28'),
(10,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-14 20:59:28'),
(11,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-15 13:08:10'),
(12,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-15 13:08:10'),
(13,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-15 13:08:10'),
(14,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-15 13:08:10'),
(15,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-15 13:08:10'),
(16,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-15 13:28:30'),
(17,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-15 13:28:30'),
(18,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-15 13:28:30'),
(19,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-15 13:28:30'),
(20,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-15 13:28:30'),
(21,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-15 22:25:26'),
(22,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-15 22:25:26'),
(23,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-15 22:25:26'),
(24,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-15 22:25:26'),
(25,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-15 22:25:26'),
(26,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-17 17:12:13'),
(27,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-17 17:12:13'),
(28,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-17 17:12:13'),
(29,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-17 17:12:13'),
(30,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-17 17:12:13'),
(31,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-17 17:31:20'),
(32,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-17 17:31:20'),
(33,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-17 17:31:20'),
(34,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-17 17:31:20'),
(35,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-17 17:31:20'),
(36,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-19 10:37:33'),
(37,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-19 10:37:33'),
(38,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-19 10:37:33'),
(39,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-19 10:37:33'),
(40,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-19 10:37:33'),
(41,1,'account',3,'Deleted','Admin deleted account with ID 3.','2024-12-20 07:56:38'),
(42,2,'post',5,'Declined','Admin verified post with ID 5.','2024-12-20 07:56:38'),
(43,1,'comment',10,'Ignored','Admin ignored comment with ID 10.','2024-12-20 07:56:38'),
(44,3,'account',8,'Approved','Admin verified account with ID 8.','2024-12-20 07:56:38'),
(45,2,'admin',6,'Deleted','Admin deleted another admin account with ID 6.','2024-12-20 07:56:38');
/*!40000 ALTER TABLE `admin_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_id` (`admin_id`,`permission_id`),
  KEY `permission_id` (`permission_id`),
  CONSTRAINT `admin_permissions_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `admin_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES
(1,1,4,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(2,2,1,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(3,2,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(4,3,1,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(5,3,2,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(6,4,1,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(7,4,4,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(8,5,1,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(9,5,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(10,6,1,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(11,6,2,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(12,6,4,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(13,7,2,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(14,7,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(15,7,4,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(16,8,1,'2024-12-14 16:17:44','2024-12-14 16:17:44'),
(17,8,2,'2024-12-14 16:17:44','2024-12-14 16:17:44'),
(18,8,3,'2024-12-14 16:17:44','2024-12-14 16:17:44'),
(19,8,4,'2024-12-14 16:17:44','2024-12-14 16:17:44');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_url` varchar(255) DEFAULT 'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',
  `email` varchar(255) DEFAULT NULL,
  `account_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES
(1,'admin1','$2y$12$affERKBJRBMkzRChkU/duedvdrLLBouU95zzVtL/V1sCFfu4aptD.','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(2,'admin2','$2y$12$IYfRpkmHjAWkLH9OHKdmteevXtqnWgypIhUHvfiR2kAUcsSA8aQ4S','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(3,'admin3','$2y$12$idV5E.AxqbKk2QDuAdDFfueuHI3L0427ve7nymNbfRxkpYFkRQ.92','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(4,'admin4','$2y$12$5yhTc/i5MgqxAG5AobQ9k.llH8Sjrb3DcTY5BSM4hQPdVqiwK73gm','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(5,'admin5','$2y$12$drGIoRktr8MWwTv04PUzj.0rxCdifIhjh1qnCytKpjqnINANBgqLO','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(6,'admin6','$2y$12$Gti3QQehg8vhIoASa2NeKeKukqJmcb7cUgsLHHz/QV2IZxbyQ9yCu','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(7,'admin7','$2y$12$NnrNeC84fMYHUSUqB7SDEuauvuXGzfa4zlFxIxXj7Ek5SjMiY4lQK','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,3,'2024-12-14 16:17:41','2024-12-14 16:17:41'),
(8,'irep','$2y$12$aefMonjXcoVxt2/eNLVLXOGUUkrdLf/PbevIiwRw2zycvs/13rxu6','https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg',NULL,4,'2024-12-14 16:17:44','2024-12-14 16:17:44');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookmarks`
--

DROP TABLE IF EXISTS `bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` int(11) NOT NULL,
  `entity_type` enum('post','comment') NOT NULL,
  `account_id` int(11) NOT NULL,
  `bookmarked_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_id` (`entity_id`,`entity_type`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmarks`
--

LOCK TABLES `bookmarks` WRITE;
/*!40000 ALTER TABLE `bookmarks` DISABLE KEYS */;
INSERT INTO `bookmarks` VALUES
(2,4,'post',2,'2024-12-14 22:04:11','2024-12-19 10:37:26'),
(3,2,'post',2,'2024-12-16 09:58:22','2024-12-19 10:37:26'),
(4,1,'post',2,'2024-12-16 10:01:34','2024-12-19 10:37:26'),
(5,49,'post',134,'2024-12-16 14:59:31','2024-12-19 10:37:26'),
(6,26,'post',134,'2024-12-16 16:38:18','2024-12-19 10:37:26'),
(10,50,'post',134,'2024-12-17 09:40:43','2024-12-19 10:37:26'),
(11,52,'post',134,'2024-12-17 09:48:23','2024-12-19 10:37:26'),
(14,70,'post',151,'2024-12-18 17:38:37','2024-12-19 10:37:26'),
(16,54,'post',134,'2024-12-18 23:08:14','2024-12-19 10:37:26'),
(19,68,'post',134,'2024-12-19 09:05:17','2024-12-19 10:37:26'),
(28,68,'post',151,'2024-12-19 10:25:00','2024-12-19 10:37:26'),
(31,69,'post',151,'2024-12-19 10:25:44','2024-12-19 10:37:26'),
(32,51,'post',151,'2024-12-19 10:26:13','2024-12-19 10:37:26');
/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commented_at` timestamp NULL DEFAULT current_timestamp(),
  `supporter` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES
(1,NULL,4,2,'Petition Comment','2024-12-14 21:39:00',0),
(2,NULL,1,2,'Petition Comment','2024-12-14 21:39:08',0),
(3,NULL,4,2,'Eye witness Comment','2024-12-14 21:39:40',0),
(4,NULL,7,134,'Interesting','2024-12-14 22:03:08',0),
(5,NULL,5,2,'Petition Comment','2024-12-14 22:08:40',0),
(6,NULL,5,2,'Eye witness Comment','2024-12-14 22:09:04',0),
(7,NULL,27,134,'where are you','2024-12-15 14:06:25',0),
(8,NULL,40,151,'more petitions please','2024-12-15 15:35:27',0),
(9,NULL,40,151,'Absolutely agree','2024-12-15 15:35:41',0),
(11,NULL,40,134,'How can one assist','2024-12-16 07:59:00',0),
(12,NULL,40,134,'we hear you','2024-12-16 07:59:12',0),
(13,NULL,26,140,'Kkk','2024-12-16 09:32:46',0),
(14,NULL,40,134,'Account','2024-12-16 10:02:19',0),
(15,NULL,40,134,'Testing comment','2024-12-16 10:11:03',0),
(16,NULL,47,134,'This is bad','2024-12-16 10:16:18',0),
(17,NULL,47,134,'How can one help','2024-12-16 10:16:29',0),
(18,NULL,47,134,'They need assistance','2024-12-16 10:18:11',0),
(19,NULL,49,134,'Hi','2024-12-16 16:25:09',0),
(20,NULL,49,134,'Hello','2024-12-16 20:37:31',0),
(21,NULL,49,134,'I am fine','2024-12-16 20:37:40',0),
(22,NULL,49,134,'Sup','2024-12-16 20:37:51',0),
(23,NULL,49,134,'Yes','2024-12-16 20:40:33',0),
(24,NULL,49,134,'You good','2024-12-16 20:40:56',0),
(25,NULL,49,134,'Yes','2024-12-16 20:41:19',0),
(26,NULL,49,134,'Hi','2024-12-16 21:03:34',0),
(27,NULL,50,151,'I got server error at first. Will try again','2024-12-16 21:38:18',0),
(28,NULL,50,134,'Work in progress','2024-12-16 21:43:20',0),
(29,NULL,50,134,'Great','2024-12-16 21:43:49',0),
(30,NULL,24,151,'What you need','2024-12-16 21:51:03',0),
(31,NULL,1,151,'Yeahhh','2024-12-16 21:54:31',0),
(34,NULL,51,165,'Is this true','2024-12-17 07:47:42',0),
(35,NULL,51,165,'See my commenting','2024-12-17 08:12:34',0),
(36,NULL,52,165,'this is just another dummy post','2024-12-17 09:40:27',0),
(37,NULL,53,166,'just trying to see what supporting a petitions looks like','2024-12-17 10:25:20',0),
(38,NULL,54,134,'Interesting','2024-12-17 22:59:23',0),
(39,NULL,54,134,'I see','2024-12-17 23:16:01',0),
(40,NULL,54,134,'testing this feature','2024-12-17 23:16:43',0),
(41,NULL,54,134,'new message','2024-12-17 23:19:27',0),
(42,NULL,54,134,'testing feature','2024-12-17 23:22:01',0),
(43,39,54,134,'please say more','2024-12-17 23:40:55',0),
(44,42,54,134,'interesting','2024-12-18 00:10:32',0),
(45,NULL,52,134,'Interesting information','2024-12-18 00:21:24',0),
(46,45,52,134,'I see','2024-12-18 00:22:04',0),
(47,11,40,134,'yes how can we','2024-12-18 15:30:44',0),
(48,12,40,134,'loudly','2024-12-18 15:32:15',0),
(49,NULL,69,151,'me likey!','2024-12-18 17:24:25',0),
(50,NULL,69,151,'because it works','2024-12-18 17:24:40',0),
(51,NULL,68,151,'the senator!!!','2024-12-18 17:25:50',0),
(52,NULL,68,151,'Kindly add rehabilitation of primary schools as well.','2024-12-18 17:26:49',0),
(53,NULL,69,151,'can\'t see comments. wagwan?','2024-12-18 17:27:37',0),
(54,NULL,69,151,'can\'t see comments. wagwan?','2024-12-18 17:27:50',0),
(55,NULL,69,151,'We need to different between replies and reasons for signing a petition.','2024-12-18 17:28:55',0),
(56,54,69,151,'keep quiet please','2024-12-18 17:34:02',0),
(57,NULL,67,134,'Interested','2024-12-18 19:20:06',0),
(58,NULL,51,134,'Wow','2024-12-18 19:29:25',0),
(59,NULL,51,134,'Wow','2024-12-18 19:29:37',0),
(60,NULL,51,134,'Wow','2024-12-18 19:29:42',0),
(61,NULL,51,134,'Interesting','2024-12-18 19:41:42',0),
(62,NULL,68,134,'Hope is needed','2024-12-18 20:10:42',0),
(63,NULL,68,134,'Hope is needed','2024-12-18 20:11:10',0),
(64,NULL,67,134,'Drop down','2024-12-18 20:16:48',0),
(65,NULL,67,134,'Ty','2024-12-18 20:33:07',0),
(66,NULL,70,134,'Let see','2024-12-18 20:34:39',0),
(67,NULL,52,134,'Hi','2024-12-18 20:44:57',0),
(68,NULL,52,134,'Hw are you','2024-12-18 20:45:17',0),
(69,NULL,52,134,'Noticed','2024-12-18 20:45:38',0),
(70,NULL,67,134,'Nothing','2024-12-18 21:38:17',0),
(71,NULL,67,134,'How','2024-12-18 21:40:19',0),
(72,NULL,54,134,'Why is this','2024-12-18 22:14:33',0),
(73,NULL,68,134,'Nothing much for comment','2024-12-18 22:25:12',0),
(74,NULL,70,134,'Ty','2024-12-18 22:28:25',0),
(75,NULL,70,134,'Ty','2024-12-18 22:32:24',0),
(76,NULL,70,134,'Let see','2024-12-18 22:49:36',0),
(77,NULL,70,134,'Test','2024-12-18 22:51:52',0),
(78,75,70,134,'U see','2024-12-18 22:54:07',0),
(79,NULL,49,134,'I don’t have','2024-12-18 22:54:11',0),
(80,NULL,49,134,'Okay you think so','2024-12-18 22:54:24',0),
(81,NULL,49,134,'Yes. Of course Rep 🥲🥲￼','2024-12-18 22:54:51',0),
(82,NULL,54,134,'Okay','2024-12-18 22:59:46',0),
(83,NULL,52,165,'New comment for testing','2024-12-18 23:06:40',0),
(84,73,68,134,'No thoughts','2024-12-19 09:03:52',0),
(85,NULL,68,134,'I like the idea it works now','2024-12-19 09:04:05',0),
(86,27,68,134,'Replying is good mr gerald. Nicely done','2024-12-19 09:04:25',0),
(87,NULL,68,134,'Replying is good mr gerald. Nicely done','2024-12-19 09:04:30',0),
(88,18,68,134,'🙌🙌','2024-12-19 09:04:43',0),
(89,87,68,134,'🙌🙌','2024-12-19 09:04:57',0),
(90,NULL,71,134,'Na me post. Na me still like am 🥲🥲','2024-12-19 09:29:08',0),
(91,77,71,134,'Guess what. ?','2024-12-19 09:29:17',0),
(92,NULL,71,134,'😅😅. Bro is still boring on a development app','2024-12-19 09:30:06',0),
(93,67,71,134,'Well. at least Gerald is doing is best for you to be here 🤨🤨🤨','2024-12-19 09:30:42',0),
(94,NULL,71,134,'😤😤. well.  Move along','2024-12-19 09:31:04',0),
(95,10,71,134,'Na me still like am.','2024-12-19 09:31:22',0),
(96,52,68,151,'Hi','2024-12-19 10:22:13',0),
(97,NULL,68,151,'Hi again','2024-12-19 10:22:24',0),
(98,NULL,67,151,'How','2024-12-19 10:22:57',0),
(99,98,67,151,'Ffffg','2024-12-19 10:23:13',0),
(100,NULL,71,134,'nice one','2024-12-19 12:15:38',0),
(101,NULL,71,134,'Interesting','2024-12-19 12:15:49',0),
(102,NULL,72,2,'broooo 🤣🤣','2024-12-20 08:00:31',0),
(103,NULL,72,2,'bro','2024-12-20 08:01:01',0);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constituencies`
--

DROP TABLE IF EXISTS `constituencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constituencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`state_id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `constituencies_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2773 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constituencies`
--

LOCK TABLES `constituencies` WRITE;
/*!40000 ALTER TABLE `constituencies` DISABLE KEYS */;
INSERT INTO `constituencies` VALUES
(304,'Abaji',37),
(90,'Abakaliki',11),
(229,'Abeokuta North',27),
(230,'Abeokuta South',27),
(2,'Abia Central',1),
(1,'Abia North',1),
(3,'Abia South',1),
(7,'Adamawa Central',2),
(8,'Adamawa North',2),
(9,'Adamawa South',2),
(185,'Adavi',22),
(200,'Agege',24),
(186,'Ajaokuta',22),
(255,'Akinyele',30),
(120,'Akko',15),
(239,'Akoko North-East',28),
(240,'Akoko North-West',28),
(241,'Akoko South-East',28),
(242,'Akoko South-West',28),
(96,'Akoko-Edo',12),
(13,'Akwa Ibom North-East',3),
(14,'Akwa Ibom North-West',3),
(15,'Akwa Ibom South-East',3),
(16,'Akwa Ibom South-West',3),
(219,'Akwanga',25),
(201,'Alimosho',24),
(33,'Alkaleri',5),
(24,'Anambra Central',4),
(23,'Anambra North',4),
(25,'Anambra South',4),
(75,'Aniocha North',10),
(76,'Aniocha South',10),
(300,'Anka',36),
(202,'Apapa',24),
(4,'Arochukwu/Ohafia',1),
(196,'Asa',23),
(261,'Atiba',30),
(26,'Awka North',4),
(27,'Awka South',4),
(203,'Badagry',24),
(295,'Bade',35),
(187,'Bassa',22),
(165,'Batsari',20),
(121,'Bauchi',15),
(32,'Bauchi Central',5),
(30,'Bauchi North',5),
(31,'Bauchi South',5),
(166,'Baure',20),
(38,'Bayelsa Central',6),
(36,'Bayelsa East',6),
(37,'Bayelsa West',6),
(57,'Bayo',8),
(41,'Benue North-East',7),
(42,'Benue North-West',7),
(43,'Benue South',7),
(63,'Biase',9),
(223,'Bida',26),
(179,'Birnin Kebbi',21),
(281,'Bodinga',33),
(34,'Bogoro',5),
(267,'Bokkos',31),
(81,'Bomadi',10),
(53,'Borno Central',8),
(52,'Borno North',8),
(54,'Borno South',8),
(50,'Buruku',7),
(82,'Burutu',10),
(305,'Bwari',37),
(62,'Calabar Municipality',9),
(61,'Calabar South',9),
(143,'Chikun',18),
(59,'Cross River Central',9),
(58,'Cross River North',9),
(60,'Cross River South',9),
(294,'Damaturu',35),
(167,'Dandume',20),
(282,'Dange-Shuni',33),
(35,'Darazo',5),
(152,'Dawakin Tofa',19),
(188,'Dekina',22),
(70,'Delta Central',10),
(69,'Delta North',10),
(71,'Delta South',10),
(217,'Doma',25),
(289,'Donga',34),
(122,'Dukku',15),
(168,'Dutsi',20),
(88,'Ebonyi Central',11),
(87,'Ebonyi North',11),
(89,'Ebonyi South',11),
(94,'Edo Central',12),
(93,'Edo North',12),
(95,'Edo South',12),
(17,'Eket',3),
(105,'Ekiti Central',13),
(103,'Ekiti North',13),
(104,'Ekiti South',13),
(108,'Emure-Ile',13),
(110,'Enugu East',14),
(109,'Enugu North',14),
(111,'Enugu West',14),
(98,'Esan North-East',12),
(99,'Esan South-East',12),
(100,'Esan West',12),
(22,'Essien Udim',3),
(209,'Eti Osa',24),
(67,'Etung',9),
(296,'Fika',35),
(169,'Funtua',20),
(290,'Gashaka',34),
(153,'Gaya',19),
(46,'Gboko',7),
(118,'Gombe Central',15),
(117,'Gombe North',15),
(119,'Gombe South',15),
(283,'Gudu',33),
(44,'Guma',7),
(135,'Gumel',17),
(302,'Gummi',36),
(306,'Gwagwalada',37),
(136,'Hadejia',17),
(259,'Ibarapa Central',30),
(258,'Ibarapa East',30),
(260,'Ibarapa North',30),
(210,'Ibeju Lekki',24),
(190,'Idah',22),
(247,'Ife North',29),
(248,'Ife South',29),
(189,'Igalamela-Odolu',22),
(112,'Igbo-Etiti',14),
(102,'Igueben',12),
(231,'Ijebu North',27),
(232,'Ijebu South',27),
(106,'Ijero',13),
(73,'Ika North-East',10),
(74,'Ika South',10),
(130,'Ikeduru',16),
(64,'Ikom',9),
(20,'Ikono',3),
(206,'Ikorodu',24),
(21,'Ikot Ekpene',3),
(5,'Ikwuano/Umuahia',1),
(249,'Ilesha East',29),
(250,'Ilesha West',29),
(194,'Ilorin East',23),
(195,'Ilorin West',23),
(124,'Imo Central',16),
(123,'Imo North',16),
(125,'Imo South',16),
(170,'Ingawa',20),
(107,'Irepodun-Ifelodun',13),
(91,'Ishielu',11),
(6,'Isiala Ngwa North',1),
(79,'Isoko North',10),
(80,'Isoko South',10),
(131,'Isu',16),
(147,'Jema’a',18),
(134,'Jigawa Central',17),
(132,'Jigawa North-East',17),
(133,'Jigawa North-West',17),
(268,'Jos North',31),
(269,'Jos South',31),
(144,'Kachia',18),
(141,'Kaduna Central',18),
(140,'Kaduna North',18),
(142,'Kaduna South',18),
(55,'Kaga',8),
(145,'Kajuru',18),
(171,'Kankara',20),
(150,'Kano Central',19),
(154,'Kano Municipal',19),
(149,'Kano North',19),
(151,'Kano South',19),
(155,'Karaye',19),
(225,'Katcha',26),
(172,'Katsina',20),
(163,'Katsina Central',20),
(162,'Katsina North',20),
(164,'Katsina South',20),
(51,'Katsina-Ala',7),
(303,'Kaura-Namoda',36),
(137,'Kazaure',17),
(177,'Kebbi Central',21),
(176,'Kebbi North',21),
(178,'Kebbi South',21),
(218,'Keffi',25),
(156,'Kibiya',19),
(182,'Kogi Central',22),
(183,'Kogi East',22),
(184,'Kogi West',22),
(307,'Kuje',37),
(173,'Kurfi',20),
(308,'Kwali',37),
(192,'Kwara Central',23),
(191,'Kwara North',23),
(193,'Kwara South',23),
(197,'Lagos Central',24),
(198,'Lagos East',24),
(204,'Lagos Mainland',24),
(199,'Lagos West',24),
(270,'Langtang North',31),
(271,'Langtang South',31),
(213,'Lekki',24),
(157,'Madobi',19),
(56,'Maiduguri',8),
(45,'Makurdi',7),
(174,'Malumfashi',20),
(301,'Maradun',36),
(175,'Mashi',20),
(129,'Mbaitoli',16),
(138,'Miga',17),
(224,'Minna',26),
(10,'Mubi North',2),
(11,'Mubi South',2),
(211,'Mushin',24),
(158,'Nasarawa',19),
(214,'Nasarawa North',25),
(215,'Nasarawa South',25),
(216,'Nasarawa West',25),
(77,'Ndokwa East',10),
(78,'Ndokwa West',10),
(40,'Nembe',6),
(221,'Niger Central',26),
(220,'Niger North',26),
(222,'Niger South',26),
(28,'Nnewi North',4),
(29,'Nnewi South',4),
(114,'Nsukka',14),
(12,'Numan',2),
(276,'Obio/Akpor',32),
(66,'Obubra',9),
(251,'Odo-Otin',29),
(39,'Ogbia',6),
(256,'Ogbomosho North',30),
(257,'Ogbomosho South',30),
(65,'Ogoja',9),
(226,'Ogun Central',27),
(227,'Ogun East',27),
(233,'Ogun Waterside',27),
(228,'Ogun West',27),
(126,'Oguta',16),
(92,'Ohaozara',11),
(116,'Oji-River',14),
(205,'Ojo',24),
(277,'Okrika',32),
(237,'Ondo Central',28),
(236,'Ondo North',28),
(238,'Ondo South',28),
(97,'Oredo',12),
(101,'Orhionmwon',12),
(18,'Oron',3),
(243,'Ose',28),
(245,'Osun Central',29),
(244,'Osun East',29),
(246,'Osun West',29),
(47,'Otukpo',7),
(128,'Owerri North',16),
(127,'Owerri West',16),
(253,'Oyo Central',30),
(252,'Oyo North',30),
(254,'Oyo South',30),
(83,'Patani',10),
(265,'Plateau Central',31),
(264,'Plateau North',31),
(266,'Plateau South',31),
(275,'Port Harcourt',32),
(234,'Remo North',27),
(139,'Ringim',17),
(272,'Rivers East',32),
(274,'Rivers South-East',32),
(273,'Rivers West',32),
(159,'Rogo',19),
(235,'Sagamu',27),
(181,'Sakaba',21),
(262,'Saki East',30),
(263,'Saki West',30),
(146,'Sanga',18),
(207,'Shomolu',24),
(279,'Sokoto East',33),
(278,'Sokoto North',33),
(280,'Sokoto South',33),
(208,'Surulere',24),
(285,'Tambuwal',33),
(287,'Taraba Central',34),
(286,'Taraba North',34),
(288,'Taraba South',34),
(49,'Tarka',7),
(160,'Tudun Wada',19),
(113,'Udenu',14),
(115,'Udi',14),
(72,'Ukwuani',10),
(19,'Uyo',3),
(48,'Vandeikya',7),
(212,'Victoria Island',24),
(284,'Wamakko',33),
(84,'Warri North',10),
(85,'Warri South',10),
(86,'Warri South-West',10),
(161,'Wudil',19),
(68,'Yakurr',9),
(292,'Yobe Central',35),
(291,'Yobe North',35),
(293,'Yobe South',35),
(297,'Zamfara Central',36),
(298,'Zamfara North',36),
(299,'Zamfara South',36),
(148,'Zangon Kataf',18),
(180,'Zuru',21);
/*!40000 ALTER TABLE `constituencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deleted_entities`
--

DROP TABLE IF EXISTS `deleted_entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deleted_entities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` int(11) NOT NULL,
  `entity_type` enum('admin','account') NOT NULL,
  `deleted_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deleted_entities`
--

LOCK TABLES `deleted_entities` WRITE;
/*!40000 ALTER TABLE `deleted_entities` DISABLE KEYS */;
INSERT INTO `deleted_entities` VALUES
(1,6,'admin','2024-12-14 16:17:41'),
(2,7,'admin','2024-12-14 16:17:41'),
(3,6,'admin','2024-12-14 20:59:28'),
(4,7,'admin','2024-12-14 20:59:28'),
(5,6,'admin','2024-12-15 13:08:10'),
(6,7,'admin','2024-12-15 13:08:10'),
(7,6,'admin','2024-12-15 13:28:30'),
(8,7,'admin','2024-12-15 13:28:30'),
(9,6,'admin','2024-12-15 22:25:26'),
(10,7,'admin','2024-12-15 22:25:26'),
(11,6,'admin','2024-12-17 17:12:13'),
(12,7,'admin','2024-12-17 17:12:13'),
(13,6,'admin','2024-12-17 17:31:20'),
(14,7,'admin','2024-12-17 17:31:20'),
(15,6,'admin','2024-12-19 10:37:33'),
(16,7,'admin','2024-12-19 10:37:33'),
(17,6,'admin','2024-12-20 07:56:38'),
(18,7,'admin','2024-12-20 07:56:38');
/*!40000 ALTER TABLE `deleted_entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_tokens`
--

DROP TABLE IF EXISTS `device_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) DEFAULT NULL,
  `device_token` varchar(255) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `device_token` (`device_token`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `device_tokens_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_tokens`
--

LOCK TABLES `device_tokens` WRITE;
/*!40000 ALTER TABLE `device_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `device_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`state_id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1027 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES
(2,'Abia Central',1),
(1,'Abia North',1),
(3,'Abia South',1),
(114,'Abuja',37),
(5,'Adamawa Central',2),
(4,'Adamawa North',2),
(6,'Adamawa South',2),
(7,'Akwa Ibom North-East',3),
(8,'Akwa Ibom North-West',3),
(9,'Akwa Ibom South-East',3),
(10,'Akwa Ibom South-West',3),
(12,'Anambra Central',4),
(11,'Anambra North',4),
(13,'Anambra South',4),
(16,'Bauchi Central',5),
(14,'Bauchi North',5),
(15,'Bauchi South',5),
(19,'Bayelsa Central',6),
(17,'Bayelsa East',6),
(18,'Bayelsa West',6),
(23,'Benue Central',7),
(20,'Benue North-East',7),
(21,'Benue North-West',7),
(22,'Benue South',7),
(25,'Borno Central',8),
(24,'Borno North',8),
(26,'Borno South',8),
(28,'Cross River Central',9),
(27,'Cross River North',9),
(29,'Cross River South',9),
(31,'Delta Central',10),
(30,'Delta North',10),
(32,'Delta South',10),
(34,'Ebonyi Central',11),
(33,'Ebonyi North',11),
(35,'Ebonyi South',11),
(37,'Edo Central',12),
(36,'Edo North',12),
(38,'Edo South',12),
(40,'Ekiti Central',13),
(39,'Ekiti North',13),
(41,'Ekiti South',13),
(43,'Enugu East',14),
(42,'Enugu North',14),
(44,'Enugu West',14),
(46,'Gombe Central',15),
(45,'Gombe North',15),
(47,'Gombe South',15),
(49,'Imo Central',16),
(48,'Imo North',16),
(50,'Imo South',16),
(53,'Jigawa Central',17),
(51,'Jigawa North-East',17),
(52,'Jigawa North-West',17),
(55,'Kaduna Central',18),
(54,'Kaduna North',18),
(56,'Kaduna South',18),
(58,'Kano Central',19),
(60,'Kano East',19),
(57,'Kano North',19),
(59,'Kano South',19),
(62,'Katsina Central',20),
(64,'Katsina East',20),
(61,'Katsina North',20),
(63,'Katsina South',20),
(66,'Kebbi Central',21),
(65,'Kebbi North',21),
(67,'Kebbi South',21),
(69,'Kogi Central',22),
(68,'Kogi East',22),
(70,'Kogi West',22),
(72,'Kwara Central',23),
(71,'Kwara North',23),
(73,'Kwara South',23),
(76,'Lagos Central',24),
(74,'Lagos East',24),
(75,'Lagos West',24),
(78,'Nasarawa Central',25),
(77,'Nasarawa North',25),
(79,'Nasarawa South',25),
(80,'Nasarawa West',25),
(82,'Niger Central',26),
(81,'Niger East',26),
(83,'Niger West',26),
(85,'Ogun Central',27),
(84,'Ogun East',27),
(86,'Ogun West',27),
(88,'Ondo Central',28),
(87,'Ondo North',28),
(89,'Ondo South',28),
(91,'Osun Central',29),
(90,'Osun East',29),
(92,'Osun West',29),
(94,'Oyo Central',30),
(93,'Oyo North',30),
(95,'Oyo South',30),
(97,'Plateau Central',31),
(96,'Plateau North',31),
(98,'Plateau South',31),
(100,'Rivers Central',32),
(99,'Rivers East',32),
(101,'Rivers West',32),
(103,'Sokoto Central',33),
(102,'Sokoto East',33),
(104,'Sokoto West',33),
(106,'Taraba Central',34),
(105,'Taraba North',34),
(107,'Taraba South',34),
(109,'Yobe Central',35),
(108,'Yobe North',35),
(110,'Yobe South',35),
(112,'Zamfara Central',36),
(111,'Zamfara North',36),
(113,'Zamfara South',36);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eye_witness_reports`
--

DROP TABLE IF EXISTS `eye_witness_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eye_witness_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `approvals` int(11) DEFAULT 0,
  `category` enum('crime','accident','other') DEFAULT 'other',
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `eye_witness_reports_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eye_witness_reports`
--

LOCK TABLES `eye_witness_reports` WRITE;
/*!40000 ALTER TABLE `eye_witness_reports` DISABLE KEYS */;
INSERT INTO `eye_witness_reports` VALUES
(1,4,1,'accident'),
(2,5,1,'crime'),
(3,6,0,'other'),
(4,7,0,'other'),
(5,15,0,'accident'),
(6,14,15,'accident'),
(7,17,0,'other'),
(8,18,0,'crime'),
(9,19,0,'crime'),
(10,47,0,'accident'),
(11,48,0,'crime'),
(12,49,0,'accident'),
(13,50,0,'crime'),
(14,52,0,'accident'),
(15,54,0,'other'),
(16,67,0,'other');
/*!40000 ALTER TABLE `eye_witness_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eye_witness_reports_approvals`
--

DROP TABLE IF EXISTS `eye_witness_reports_approvals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eye_witness_reports_approvals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `approved_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `eye_witness_reports_approvals_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eye_witness_reports_approvals_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eye_witness_reports_approvals`
--

LOCK TABLES `eye_witness_reports_approvals` WRITE;
/*!40000 ALTER TABLE `eye_witness_reports_approvals` DISABLE KEYS */;
INSERT INTO `eye_witness_reports_approvals` VALUES
(1,4,2,'2024-12-14 21:39:40'),
(2,5,2,'2024-12-14 22:09:04');
/*!40000 ALTER TABLE `eye_witness_reports_approvals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=771 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` int(11) NOT NULL,
  `entity_type` enum('post','comment') NOT NULL,
  `account_id` int(11) NOT NULL,
  `liked_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_id` (`entity_id`,`entity_type`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES
(1,5,'post',2,'2024-12-14 21:34:20','2024-12-19 10:37:26'),
(3,4,'post',2,'2024-12-14 22:02:30','2024-12-19 10:37:26'),
(4,7,'post',134,'2024-12-15 14:07:09','2024-12-19 10:37:26'),
(6,15,'post',134,'2024-12-15 21:50:05','2024-12-19 10:37:26'),
(7,40,'post',151,'2024-12-16 04:25:33','2024-12-19 10:37:26'),
(9,27,'post',2,'2024-12-16 09:05:32','2024-12-19 10:37:26'),
(10,26,'post',2,'2024-12-16 09:07:55','2024-12-19 10:37:26'),
(11,2,'post',2,'2024-12-16 09:57:58','2024-12-19 10:37:26'),
(12,1,'post',2,'2024-12-16 10:01:18','2024-12-19 10:37:26'),
(13,40,'post',2,'2024-12-16 10:30:12','2024-12-19 10:37:26'),
(16,18,'post',134,'2024-12-16 16:26:25','2024-12-19 10:37:26'),
(21,49,'post',134,'2024-12-16 18:54:15','2024-12-19 10:37:26'),
(22,49,'post',151,'2024-12-16 21:30:10','2024-12-19 10:37:26'),
(23,47,'post',151,'2024-12-16 21:30:18','2024-12-19 10:37:26'),
(24,50,'post',151,'2024-12-16 21:37:47','2024-12-19 10:37:26'),
(28,24,'post',151,'2024-12-16 21:50:46','2024-12-19 10:37:26'),
(29,49,'post',2,'2024-12-16 22:02:32','2024-12-19 10:37:26'),
(35,50,'post',134,'2024-12-17 00:05:03','2024-12-19 10:37:26'),
(36,25,'post',134,'2024-12-17 00:05:40','2024-12-19 10:37:26'),
(38,47,'post',134,'2024-12-17 08:17:37','2024-12-19 10:37:26'),
(54,27,'post',134,'2024-12-17 08:55:16','2024-12-19 10:37:26'),
(88,48,'post',134,'2024-12-17 09:04:51','2024-12-19 10:37:26'),
(91,53,'post',165,'2024-12-17 10:01:03','2024-12-19 10:37:26'),
(92,53,'post',166,'2024-12-17 10:27:31','2024-12-19 10:37:26'),
(98,22,'post',134,'2024-12-17 15:19:44','2024-12-19 10:37:26'),
(99,48,'post',165,'2024-12-17 15:32:51','2024-12-19 10:37:26'),
(100,3,'post',134,'2024-12-17 23:15:52','2024-12-19 10:37:26'),
(102,2,'post',134,'2024-12-17 23:41:07','2024-12-19 10:37:26'),
(103,39,'post',134,'2024-12-18 00:00:41','2024-12-19 10:37:26'),
(111,38,'post',134,'2024-12-18 00:08:37','2024-12-19 10:37:26'),
(112,43,'post',134,'2024-12-18 00:09:55','2024-12-19 10:37:26'),
(114,53,'post',2,'2024-12-18 09:27:40','2024-12-19 10:37:26'),
(145,40,'post',134,'2024-12-18 16:43:37','2024-12-19 10:37:26'),
(153,54,'post',134,'2024-12-18 16:45:33','2024-12-19 10:37:26'),
(169,53,'post',134,'2024-12-18 16:55:24','2024-12-19 10:37:26'),
(170,69,'post',151,'2024-12-18 17:24:02','2024-12-19 10:37:26'),
(172,54,'post',151,'2024-12-18 17:33:48','2024-12-19 10:37:26'),
(174,27,'post',151,'2024-12-18 17:34:08','2024-12-19 10:37:26'),
(176,69,'post',134,'2024-12-18 19:01:56','2024-12-19 10:37:26'),
(178,70,'post',134,'2024-12-18 20:19:31','2024-12-19 10:37:26'),
(179,67,'post',134,'2024-12-18 20:19:32','2024-12-19 10:37:26'),
(183,45,'post',134,'2024-12-19 00:15:40','2024-12-19 10:37:26'),
(184,46,'post',134,'2024-12-19 00:19:02','2024-12-19 10:37:26'),
(185,89,'post',134,'2024-12-19 09:05:03','2024-12-19 10:37:26'),
(187,63,'post',134,'2024-12-19 09:05:08','2024-12-19 10:37:26'),
(190,68,'post',134,'2024-12-19 09:07:35','2024-12-19 10:37:26'),
(192,90,'post',134,'2024-12-19 09:31:52','2024-12-19 10:37:26'),
(193,94,'post',134,'2024-12-19 09:31:55','2024-12-19 10:37:26'),
(194,92,'post',134,'2024-12-19 09:31:56','2024-12-19 10:37:26'),
(195,72,'post',134,'2024-12-19 12:14:19','2024-12-19 12:14:19');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local_governments`
--

DROP TABLE IF EXISTS `local_governments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `local_governments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`state_id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `local_governments_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6985 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local_governments`
--

LOCK TABLES `local_governments` WRITE;
/*!40000 ALTER TABLE `local_governments` DISABLE KEYS */;
INSERT INTO `local_governments` VALUES
(1,'Aba North',1),
(2,'Aba South',1),
(143,'Abadam',8),
(771,'Abaji',37),
(42,'Abak',3),
(214,'Abakaliki',11),
(558,'Abeokuta-North',27),
(559,'Abeokuta-South',27),
(170,'Abi',9),
(288,'Aboh-Mbaise',16),
(679,'Abua/Odual',32),
(463,'Adavi',22),
(121,'Ado',7),
(244,'Ado-Ekiti',13),
(560,'Ado-Odo/Ota',27),
(628,'Afijio',30),
(216,'Afikpo South (Edda)',11),
(215,'Afikpo-North',11),
(533,'Agaie',26),
(122,'Agatu',7),
(500,'Agege',24),
(73,'Aguata',4),
(534,'Agwara',26),
(289,'Ahiazu-Mbaise',16),
(680,'Ahoada-East',32),
(681,'Ahoada-West',32),
(598,'Aiyedade',29),
(599,'Aiyedire',29),
(464,'Ajaokuta',22),
(501,'Ajeromi-Ifelodun',24),
(364,'Ajingi',19),
(171,'Akamkpa',9),
(629,'Akinyele',30),
(277,'Akko',15),
(226,'Akoko-Edo',12),
(580,'Akoko-North-East',28),
(581,'Akoko-North-West',28),
(582,'Akoko-South-East',28),
(583,'Akoko-South-West',28),
(172,'Akpabuyo',9),
(682,'Akuku-Toru',32),
(584,'Akure-North',28),
(585,'Akure-South',28),
(520,'Akwanga',25),
(365,'Albasu',19),
(442,'Aleiro',21),
(502,'Alimosho',24),
(93,'Alkaleri',5),
(503,'Amuwo-Odofin',24),
(74,'Anambra East',4),
(75,'Anambra West',4),
(76,'Anaocha',4),
(683,'Andoni',32),
(260,'Aninri',14),
(188,'Aniocha North',10),
(189,'Aniocha-North',10),
(190,'Aniocha-South',10),
(758,'Anka',36),
(465,'Ankpa',22),
(123,'Apa',7),
(504,'Apapa',24),
(725,'Ardo-Kola',34),
(443,'Arewa-Dandi',21),
(444,'Argungu',21),
(3,'Arochukwu',1),
(484,'Asa',23),
(684,'Asari-Toru',32),
(144,'Askira-Uba',8),
(600,'Atakunmosa-East',29),
(601,'Atakunmosa-West',29),
(630,'Atiba',30),
(631,'Atisbo',30),
(445,'Augie',21),
(314,'Auyo',17),
(521,'Awe',25),
(261,'Awgu',14),
(77,'Awka North',4),
(78,'Awka South',4),
(79,'Ayamelum',4),
(315,'Babura',17),
(505,'Badagry',24),
(741,'Bade',35),
(446,'Bagudo',21),
(366,'Bagwai',19),
(173,'Bakassi',9),
(408,'Bakori',20),
(759,'Bakura',36),
(278,'Balanga',15),
(726,'Bali',34),
(145,'Bama',8),
(662,'Barkin-Ladi',31),
(485,'Baruten',23),
(466,'Bassa',22),
(663,'Bassa',31),
(409,'Batagarawa',20),
(410,'Batsari',20),
(94,'Bauchi',5),
(411,'Baure',20),
(146,'Bayo',8),
(367,'Bebeji',19),
(174,'Bekwarra',9),
(4,'Bende',1),
(175,'Biase',9),
(368,'Bichi',19),
(535,'Bida',26),
(279,'Billiri',15),
(412,'Bindawa',20),
(702,'Binji',33),
(316,'Biriniwa',17),
(341,'Birnin-Gwari',18),
(447,'Birnin-Kebbi',21),
(317,'Birnin-Kudu',17),
(760,'Birnin-Magaji/Kiyaw',36),
(147,'Biu',8),
(703,'Bodinga',33),
(95,'Bogoro',5),
(176,'Boki',9),
(664,'Bokkos',31),
(602,'Boluwaduro',29),
(191,'Bomadi',10),
(685,'Bonny',32),
(536,'Borgu',26),
(603,'Boripe',29),
(537,'Bosso',26),
(113,'Brass',6),
(318,'Buji',17),
(761,'Bukkuyum',36),
(762,'Bungudu',36),
(369,'Bunkure',19),
(448,'Bunza',21),
(742,'Bursari',35),
(124,'Buruku',7),
(192,'Burutu',10),
(772,'Bwari',37),
(177,'Calabar-Municipal',9),
(178,'Calabar-South',9),
(538,'Chanchaga',26),
(413,'Charanchi',20),
(148,'Chibok',8),
(342,'Chikun',18),
(370,'Dala',19),
(743,'Damaturu',35),
(96,'Damban',5),
(371,'Dambatta',19),
(149,'Damboa',8),
(414,'Dan-Musa',20),
(449,'Dandi',21),
(415,'Dandume',20),
(704,'Dange-Shuni',33),
(416,'Danja',20),
(97,'Darazo',5),
(98,'Dass',5),
(417,'Daura',20),
(372,'Dawakin-Kudu',19),
(373,'Dawakin-Tofa',19),
(686,'Degema',32),
(467,'Dekina',22),
(21,'Demsa',2),
(150,'Dikwa',8),
(374,'Doguwa',19),
(522,'Doma',25),
(727,'Donga',34),
(280,'Dukku',15),
(80,'Dunukofia',4),
(319,'Dutse',17),
(418,'Dutsi',20),
(419,'Dutsin-Ma',20),
(43,'Eastern-Obolo',3),
(217,'Ebonyi',11),
(539,'Edati',26),
(604,'Ede-North',29),
(605,'Ede-South',29),
(486,'Edu',23),
(245,'Efon',13),
(561,'Egbado-North',27),
(562,'Egbado-South',27),
(632,'Egbeda',30),
(606,'Egbedore',29),
(227,'Egor',12),
(290,'Ehime-Mbano',16),
(607,'Ejigbo',29),
(114,'Ekeremor',6),
(44,'Eket',3),
(487,'Ekiti',23),
(246,'Ekiti-East',13),
(247,'Ekiti-South-West',13),
(248,'Ekiti-West',13),
(81,'Ekwusigo',4),
(687,'Eleme',32),
(688,'Emohua',32),
(249,'Emure',13),
(262,'Enugu-East',14),
(263,'Enugu-North',14),
(264,'Enugu-South',14),
(506,'Epe',24),
(228,'Esan-Central',12),
(229,'Esan-North-East',12),
(230,'Esan-South-East',12),
(231,'Esan-West',12),
(586,'Ese-Odo',28),
(45,'Esit-Eket',3),
(46,'Essien-Udim',3),
(689,'Etche',32),
(193,'Ethiope-East',10),
(194,'Ethiope-West',10),
(507,'Eti-Osa',24),
(47,'Etim-Ekpo',3),
(48,'Etinan',3),
(232,'Etsako-Central',12),
(233,'Etsako-East',12),
(234,'Etsako-West',12),
(179,'Etung',9),
(563,'Ewekoro',27),
(265,'Ezeagu',14),
(291,'Ezinihitte',16),
(218,'Ezza-North',11),
(219,'Ezza-South',11),
(375,'Fagge',19),
(450,'Fakai',21),
(420,'Faskari',20),
(744,'Fika',35),
(22,'Fufore',2),
(281,'Funakaye',15),
(745,'Fune',35),
(421,'Funtua',20),
(376,'Gabasawa',19),
(705,'Gada',33),
(320,'Gagarawa',17),
(99,'Gamawa',5),
(100,'Ganjuwa',5),
(23,'Ganye',2),
(321,'Garki',17),
(377,'Garko',19),
(378,'Garun-Mallam',19),
(728,'Gashaka',34),
(729,'Gassol',34),
(379,'Gaya',19),
(540,'Gbako',26),
(125,'Gboko',7),
(250,'Gbonyin',13),
(746,'Geidam',35),
(380,'Gezawa',19),
(101,'Giade',5),
(24,'Girei',2),
(343,'Giwa',18),
(690,'Gokana',32),
(282,'Gombe',15),
(25,'Gombi',2),
(706,'Goronyo',33),
(151,'Gubio',8),
(707,'Gudu',33),
(747,'Gujba',35),
(748,'Gulani',35),
(126,'Guma',7),
(322,'Gumel',17),
(763,'Gummi',36),
(541,'Gurara',26),
(323,'Guri',17),
(764,'Gusau',36),
(26,'Guyuk',2),
(152,'Guzamala',8),
(708,'Gwadabawa',33),
(773,'Gwagwalada',37),
(381,'Gwale',19),
(451,'Gwandu',21),
(324,'Gwaram',17),
(382,'Gwarzo',19),
(127,'Gwer-East',7),
(128,'Gwer-West',7),
(325,'Gwiwa',17),
(153,'Gwoza',8),
(326,'Hadejia',17),
(154,'Hawul',8),
(27,'Hong',2),
(633,'Ibadan-Central',30),
(634,'Ibadan-North',30),
(635,'Ibadan-North-East',30),
(636,'Ibadan-North-West',30),
(637,'Ibadan-South-East',30),
(638,'Ibadan-South-West',30),
(468,'Ibaji',22),
(639,'Ibarapa-Central',30),
(640,'Ibarapa-East',30),
(641,'Ibarapa-North',30),
(508,'Ibeju-Lekki',24),
(49,'Ibeno',3),
(50,'Ibesikpo-Asutan',3),
(730,'Ibi',34),
(51,'Ibiono-Ibom',3),
(469,'Idah',22),
(587,'Idanre',28),
(292,'Ideato-North',16),
(293,'Ideato-South',16),
(82,'Idemili-North',4),
(83,'Idemili-South',4),
(642,'Ido',30),
(251,'Ido-Osi',13),
(509,'Ifako-Ijaiye',24),
(608,'Ife-Central',29),
(609,'Ife-East',29),
(610,'Ife-North',29),
(611,'Ife-South',29),
(612,'Ifedayo',29),
(588,'Ifedore',28),
(488,'Ifelodun',23),
(613,'Ifelodun',29),
(564,'Ifo',27),
(344,'Igabi',18),
(470,'Igalamela-Odolu',22),
(266,'Igbo-Etiti',14),
(267,'Igbo-Eze-North',14),
(268,'Igbo-Eze-South',14),
(235,'Igueben',12),
(84,'Ihiala',4),
(294,'Ihitte/Uboma',16),
(565,'Ijebu-East',27),
(566,'Ijebu-North',27),
(567,'Ijebu-North-East',27),
(568,'Ijebu-Ode',27),
(252,'Ijero',13),
(471,'Ijumu',22),
(52,'Ika',3),
(195,'Ika-North-East',10),
(196,'Ika-South',10),
(345,'Ikara',18),
(5,'Ikawuno',1),
(295,'Ikeduru',16),
(510,'Ikeja',24),
(569,'Ikenne',27),
(253,'Ikere',13),
(254,'Ikole',13),
(180,'Ikom',9),
(53,'Ikono',3),
(511,'Ikorodu',24),
(54,'Ikot-Abasi',3),
(55,'Ikot-Ekpene',3),
(236,'Ikpoba-Okha',12),
(691,'Ikwerre',32),
(220,'Ikwo',11),
(6,'Ikwuano',1),
(614,'Ila',29),
(589,'Ilaje',28),
(590,'Ile-Oluji/Okeigbo',28),
(255,'Ilejemeje',13),
(615,'Ilesa-East',29),
(616,'Ilesa-West',29),
(709,'Illela',33),
(489,'Ilorin-East',23),
(490,'Ilorin-South',23),
(491,'Ilorin-West',23),
(570,'Imeko-Afon',27),
(422,'Ingawa',20),
(56,'Ini',3),
(571,'Ipokia',27),
(591,'Irele',28),
(643,'Irepo',30),
(492,'Irepodun',23),
(617,'Irepodun',29),
(256,'Irepodun/Ifelodun',13),
(618,'Irewole',29),
(710,'Isa',33),
(257,'Ise/Orun',13),
(644,'Iseyin',30),
(221,'Ishielu',11),
(269,'Isi-Uzo',14),
(296,'Isiala-Mbano',16),
(7,'Isiala-Ngwa North',1),
(8,'Isiala-Ngwa South',1),
(493,'Isin',23),
(619,'Isokan',29),
(197,'Isoko-North',10),
(198,'Isoko-South',10),
(297,'Isu',16),
(9,'Isuikwuato',1),
(102,'Itas Gadau',5),
(645,'Itesiwaju',30),
(57,'Itu',3),
(222,'Ivo',11),
(646,'Iwajowa',30),
(620,'Iwo',29),
(223,'Izzi',11),
(346,'Jaba',18),
(28,'Jada',2),
(327,'Jahun',17),
(749,'Jakusko',35),
(731,'Jalingo',34),
(103,'Jama\'Are',5),
(452,'Jega',21),
(347,'Jema\'A',18),
(155,'Jere',8),
(423,'Jibia',20),
(665,'Jos-East',31),
(666,'Jos-North',31),
(667,'Jos-South',31),
(472,'Kabba/Bunu',22),
(383,'Kabo',19),
(348,'Kachia',18),
(349,'Kaduna-North',18),
(350,'Kaduna-South',18),
(328,'Kafin-Hausa',17),
(424,'Kafur',20),
(156,'Kaga',8),
(351,'Kagarko',18),
(494,'Kaiama',23),
(425,'Kaita',20),
(647,'Kajola',30),
(352,'Kajuru',18),
(157,'Kala Balge',8),
(453,'Kalgo',21),
(283,'Kaltungo',15),
(668,'Kanam',31),
(426,'Kankara',20),
(669,'Kanke',31),
(427,'Kankia',20),
(384,'Kano-Municipal',19),
(750,'Karasuwa',35),
(385,'Karaye',19),
(732,'Karim-Lamido',34),
(523,'Karu',25),
(104,'Katagum',5),
(542,'Katcha',26),
(428,'Katsina',20),
(129,'Katsina-Ala',7),
(329,'Kaugama',17),
(353,'Kaura',18),
(765,'Kaura-Namoda',36),
(354,'Kauru',18),
(330,'Kazaure',17),
(524,'Keana',25),
(711,'Kebbe',33),
(525,'Keffi',25),
(692,'Khana',32),
(386,'Kibiya',19),
(105,'Kirfi',5),
(331,'Kiri-Kasama',17),
(387,'Kiru',19),
(332,'Kiyawa',17),
(473,'Kogi',22),
(454,'Koko-Besse',21),
(526,'Kokona',25),
(115,'Kolokuma/Opokuma',6),
(158,'Konduga',8),
(130,'Konshisha',7),
(543,'Kontagora',26),
(512,'Kosofe',24),
(355,'Kubau',18),
(356,'Kudan',18),
(774,'Kuje',37),
(159,'Kukawa',8),
(388,'Kumbotso',19),
(733,'Kumi',34),
(389,'Kunchi',19),
(390,'Kura',19),
(429,'Kurfi',20),
(430,'Kusada',20),
(775,'Kwali',37),
(284,'Kwami',15),
(131,'Kwande',7),
(712,'Kware',33),
(160,'Kwaya-Kusar',8),
(527,'Lafia',25),
(648,'Lagelu',30),
(513,'Lagos-Island',24),
(514,'Lagos-Mainland',24),
(29,'Lamurde',2),
(670,'Langtang-North',31),
(671,'Langtang-South',31),
(544,'Lapai',26),
(734,'Lau',34),
(545,'Lavun',26),
(357,'Lere',18),
(132,'Logo',7),
(474,'Lokoja',22),
(751,'Machina',35),
(30,'Madagali',2),
(391,'Madobi',19),
(161,'Mafa',8),
(546,'Magama',26),
(162,'Magumeri',8),
(431,'Mai\'Adua',20),
(163,'Maiduguri',8),
(333,'Maigatari',17),
(31,'Maiha',2),
(455,'Maiyama',21),
(358,'Makarfi',18),
(392,'Makoda',19),
(133,'Makurdi',7),
(334,'Malam-Madori',17),
(432,'Malumfashi',20),
(672,'Mangu',31),
(433,'Mani',20),
(766,'Maradun',36),
(547,'Mariga',26),
(164,'Marte',8),
(767,'Maru',36),
(548,'Mashegu',26),
(434,'Mashi',20),
(435,'Matazu',20),
(32,'Mayo-Belwa',2),
(298,'Mbaitoli',16),
(58,'Mbo',3),
(33,'Michika',2),
(335,'Miga',17),
(673,'Mikang',31),
(393,'Minjibir',19),
(106,'Misau',5),
(59,'Mkpat-Enin',3),
(258,'Moba',13),
(165,'Mobbar',8),
(549,'Mokwa',26),
(166,'Monguno',8),
(475,'Mopa-Muro',22),
(495,'Moro',23),
(34,'Mubi-North',2),
(35,'Mubi-South',2),
(776,'Municipal',37),
(550,'Munya',26),
(436,'Musawa',20),
(515,'Mushin',24),
(285,'Nafada',15),
(752,'Nangere',35),
(394,'Nasarawa',19),
(528,'Nasarawa',25),
(529,'Nasarawa-Eggon',25),
(199,'Ndokwa-East',10),
(200,'Ndokwa-West',10),
(116,'Nembe',6),
(167,'Ngala',8),
(168,'Nganzai',8),
(456,'Ngaski',21),
(299,'Ngor-Okpala',16),
(753,'Nguru',35),
(107,'Ningi',5),
(300,'Njaba',16),
(85,'Njikoka',4),
(270,'Nkanu-East',14),
(271,'Nkanu-West',14),
(301,'Nkwerre',16),
(86,'Nnewi-North',4),
(87,'Nnewi-South',4),
(60,'Nsit-Atai',3),
(61,'Nsit-Ibom',3),
(62,'Nsit-Ubium',3),
(272,'Nsukka',14),
(36,'Numan',2),
(302,'Nwangele',16),
(572,'Obafemi-Owode',27),
(181,'Obanliku',9),
(530,'Obi',25),
(11,'Obi Ngwa',1),
(693,'Obio/Akpor',32),
(12,'Obioma Ngwa',1),
(621,'Obokun',29),
(63,'Obot-Akara',3),
(303,'Obowo',16),
(182,'Obubra',9),
(183,'Obudu',9),
(573,'Odeda',27),
(592,'Odigbo',28),
(622,'Odo-Otin',29),
(574,'Odogbolu',27),
(184,'Odukpani',9),
(496,'Offa',23),
(476,'Ofu',22),
(694,'Ogba/Egbema/Ndoni',32),
(134,'Ogbadibo',7),
(88,'Ogbaru',4),
(117,'Ogbia',6),
(649,'Ogbomosho-North',30),
(650,'Ogbomosho-South',30),
(651,'Ogo-Oluwa',30),
(185,'Ogoja',9),
(477,'Ogori/Magongo',22),
(695,'Ogu/Bolo',32),
(575,'Ogun-Waterside',27),
(304,'Oguta',16),
(13,'Ohafia',1),
(305,'Ohaji/Egbema',16),
(14,'Ohaozara',1),
(224,'Ohaukwu',11),
(135,'Ohimini',7),
(273,'Oji-River',14),
(516,'Ojo',24),
(136,'Oju',7),
(497,'Oke-Ero',23),
(478,'Okehi',22),
(479,'Okene',22),
(306,'Okigwe',16),
(593,'Okitipupa',28),
(64,'Okobo',3),
(201,'Okpe',10),
(137,'Okpokwu',7),
(696,'Okrika',32),
(623,'Ola-Oluwa',29),
(480,'Olamaboro',22),
(624,'Olorunda',29),
(652,'Olorunsogo',30),
(653,'Oluyole',30),
(481,'Omala',22),
(697,'Omumma',32),
(654,'Ona-Ara',30),
(594,'Ondo-East',28),
(595,'Ondo-West',28),
(225,'Onicha',11),
(89,'Onitsha-North',4),
(90,'Onitsha-South',4),
(65,'Onna',3),
(698,'Opobo/Nkoro',32),
(238,'Oredo',12),
(655,'Orelope',30),
(237,'Orhionmwon',12),
(656,'Ori-Ire',30),
(625,'Oriade',29),
(307,'Orlu',16),
(626,'Orolu',29),
(66,'Oron',3),
(308,'Orsu',16),
(309,'Oru-East',16),
(310,'Oru-West',16),
(67,'Oruk Anam',3),
(91,'Orumba-North',4),
(92,'Orumba-South',4),
(596,'Ose',28),
(202,'Oshimili-North',10),
(203,'Oshimili-South',10),
(517,'Oshodi-Isolo',24),
(15,'Osisioma',1),
(627,'Osogbo',29),
(138,'Otukpo',7),
(239,'Ovia-North-East',12),
(240,'Ovia-South-West',12),
(241,'Owan-East',12),
(242,'Owan-West',12),
(311,'Owerri-Municipal',16),
(312,'Owerri-North',16),
(313,'Owerri-West',16),
(597,'Owo',28),
(259,'Oye',13),
(699,'Oyigbo',32),
(657,'Oyo-East',30),
(658,'Oyo-West',30),
(498,'Oyun',23),
(551,'Paikoro',26),
(674,'Pankshin',31),
(204,'Patani',10),
(499,'Pategi',23),
(700,'Port-Harcourt',32),
(754,'Potiskum',35),
(675,'Qua\'An-Pan',31),
(713,'Rabah',33),
(552,'Rafi',26),
(395,'Rano',19),
(576,'Remo-North',27),
(553,'Rijau',26),
(437,'Rimi',20),
(396,'Rimin-Gado',19),
(336,'Ringim',17),
(676,'Riyom',31),
(397,'Rogo',19),
(337,'Roni',17),
(714,'Sabon-Birni',33),
(359,'Sabon-Gari',18),
(438,'Sabuwa',20),
(439,'Safana',20),
(118,'Sagbama',6),
(457,'Sakaba',21),
(659,'Saki-East',30),
(660,'Saki-West',30),
(440,'Sandamu',20),
(360,'Sanga',18),
(205,'Sapele',10),
(735,'Sardauna',34),
(577,'Shagamu',27),
(715,'Shagari',33),
(458,'Shanga',21),
(169,'Shani',8),
(398,'Shanono',19),
(37,'Shelleng',2),
(677,'Shendam',31),
(768,'Shinkafi',36),
(108,'Shira',5),
(554,'Shiroro',26),
(518,'Shomolu',24),
(286,'Shongom',15),
(716,'Silame',33),
(361,'Soba',18),
(717,'Sokoto-North',33),
(718,'Sokoto-South',33),
(38,'Song',2),
(119,'Southern-Ijaw',6),
(338,'Sule-Tankarkar',17),
(555,'Suleja',26),
(399,'Sumaila',19),
(459,'Suru',21),
(519,'Surulere',24),
(661,'Surulere',30),
(556,'Tafa',26),
(109,'Tafawa-Balewa',5),
(701,'Tai',32),
(400,'Takai',19),
(736,'Takum',34),
(769,'Talata-Mafara',36),
(719,'Tambuwal',33),
(720,'Tangaza',33),
(401,'Tarauni',19),
(139,'Tarka',7),
(755,'Tarmuwa',35),
(339,'Taura',17),
(402,'Tofa',19),
(110,'Toro',5),
(531,'Toto',25),
(39,'Toungo',2),
(403,'Tsanyawa',19),
(404,'Tudun-Wada',19),
(721,'Tureta',33),
(274,'Udenu',14),
(275,'Udi',14),
(206,'Udu',10),
(68,'Udung-Uko',3),
(207,'Ughelli-North',10),
(208,'Ughelli-South',10),
(16,'Ugwunagbo',1),
(243,'Uhunmwonde',12),
(69,'Ukanafun',3),
(140,'Ukum',7),
(18,'Ukwa East',1),
(17,'Ukwa West',1),
(209,'Ukwuani',10),
(10,'Umu Nneochi',1),
(19,'Umuahia North',1),
(20,'Umuahia South',1),
(405,'Ungogo',19),
(71,'Uruan',3),
(70,'Urue-Offong/Oruko',3),
(141,'Ushongo',7),
(737,'Ussa',34),
(210,'Uvwie',10),
(72,'Uyo',3),
(276,'Uzo-Uwani',14),
(142,'Vandeikya',7),
(722,'Wamako',33),
(532,'Wamba',25),
(406,'Warawa',19),
(111,'Warji',5),
(212,'Warri North',10),
(213,'Warri South',10),
(211,'Warri South-West',10),
(460,'Wasagu/Danko',21),
(678,'Wase',31),
(407,'Wudil',19),
(738,'Wukari',34),
(723,'Wurno',33),
(557,'Wushishi',26),
(724,'Yabo',33),
(482,'Yagba-East',22),
(483,'Yagba-West',22),
(186,'Yakurr',9),
(187,'Yala',9),
(287,'Yamaltu-Deba',15),
(340,'Yankwashi',17),
(461,'Yauri',21),
(120,'Yenagoa',6),
(578,'Yewa-North',27),
(579,'Yewa-South',27),
(40,'Yola North',2),
(41,'Yola South',2),
(739,'Yorro',34),
(756,'Yunusari',35),
(757,'Yusufari',35),
(112,'Zaki',5),
(441,'Zango',20),
(362,'Zangon-Kataf',18),
(363,'Zaria',18),
(740,'Zing',34),
(770,'Zurmi',36),
(462,'Zuru',21);
/*!40000 ALTER TABLE `local_governments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `sent_at` timestamp NULL DEFAULT current_timestamp(),
  `edited_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_Initial',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2024_09_25_001854_create_personal_access_tokens_table',1),
(5,'2024_10_07_181355_create_posts_and_comments',1),
(6,'2024_10_09_142116_create_message_table',1),
(7,'2024_11_18_111643_create_device_tokens_table',1),
(8,'2024_11_18_161226_create_account_notifications_table',1),
(9,'2024_12_03_054841_create_admin_management_tables',1),
(10,'2024_12_19_082522_update_tables_v1',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parties`
--

DROP TABLE IF EXISTS `parties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parties`
--

LOCK TABLES `parties` WRITE;
/*!40000 ALTER TABLE `parties` DISABLE KEYS */;
INSERT INTO `parties` VALUES
(1,'Accord','A'),
(2,'Action Alliance','AA'),
(3,'Action Democratic Party','ADP'),
(4,'Action Peoples Party','APP'),
(5,'African Action Congress','AAC'),
(6,'African Democratic Congress','ADC'),
(7,'All Progressive Congress','APC'),
(8,'All Progressive Grand Alliance','APGA'),
(9,'Allied Peoples Movement','APM'),
(10,'Boot Party','BP'),
(11,'Labour Party','LP'),
(12,'National Rescue Movement','NRM'),
(13,'New Nigeria Peoples Party','NNPP'),
(14,'Peoples Democratic Party','PDP'),
(15,'Peoples Redemption Party','PRP'),
(16,'Social Democratic Party','SDP'),
(17,'Young Progressives Party','YPP'),
(18,'Zenith Labour Party','ZLP');
/*!40000 ALTER TABLE `parties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES
(1,'content mod','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(2,'petitions','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(3,'user verification','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(4,'rep verification','2024-12-14 16:17:38','2024-12-14 16:17:38');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petition_representatives`
--

DROP TABLE IF EXISTS `petition_representatives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petition_representatives` (
  `petition_id` int(11) NOT NULL,
  `representative_id` int(11) NOT NULL,
  PRIMARY KEY (`petition_id`,`representative_id`),
  KEY `representative_id` (`representative_id`),
  CONSTRAINT `petition_representatives_ibfk_1` FOREIGN KEY (`petition_id`) REFERENCES `petitions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `petition_representatives_ibfk_2` FOREIGN KEY (`representative_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petition_representatives`
--

LOCK TABLES `petition_representatives` WRITE;
/*!40000 ALTER TABLE `petition_representatives` DISABLE KEYS */;
INSERT INTO `petition_representatives` VALUES
(1,10),
(2,11),
(1,12),
(3,12),
(2,13),
(3,14),
(18,107),
(18,112),
(18,122),
(7,123),
(9,123),
(10,123),
(11,123),
(12,123),
(13,123),
(10,124),
(11,124),
(12,124),
(13,124),
(20,126),
(15,150),
(14,156),
(15,156),
(17,156),
(18,172),
(19,172),
(16,177),
(18,177);
/*!40000 ALTER TABLE `petition_representatives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petition_signatures`
--

DROP TABLE IF EXISTS `petition_signatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petition_signatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `signed_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `petition_signatures_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `petition_signatures_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petition_signatures`
--

LOCK TABLES `petition_signatures` WRITE;
/*!40000 ALTER TABLE `petition_signatures` DISABLE KEYS */;
INSERT INTO `petition_signatures` VALUES
(1,4,2,'2024-12-14 21:39:00'),
(2,1,2,'2024-12-14 21:39:08'),
(3,5,2,'2024-12-14 22:08:40'),
(4,1,134,'2024-12-15 10:54:31'),
(5,40,134,'2024-12-15 13:56:32'),
(6,27,134,'2024-12-15 14:05:52'),
(7,26,134,'2024-12-15 14:08:47'),
(8,25,134,'2024-12-15 14:10:32'),
(9,40,151,'2024-12-15 15:35:41'),
(10,40,2,'2024-12-16 10:41:44'),
(11,51,134,'2024-12-17 09:27:03'),
(12,53,166,'2024-12-17 10:25:20'),
(13,69,151,'2024-12-18 17:24:40'),
(14,68,151,'2024-12-18 17:26:49'),
(15,72,134,'2024-12-19 14:46:24');
/*!40000 ALTER TABLE `petition_signatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petitions`
--

DROP TABLE IF EXISTS `petitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `signatures` int(11) DEFAULT 0,
  `target_signatures` int(11) DEFAULT 100,
  `status` enum('open','submitted','approved') DEFAULT 'open',
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `petitions_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petitions`
--

LOCK TABLES `petitions` WRITE;
/*!40000 ALTER TABLE `petitions` DISABLE KEYS */;
INSERT INTO `petitions` VALUES
(1,1,2,100,'open'),
(2,2,0,100,'open'),
(3,3,0,100,'open'),
(7,22,0,500,'open'),
(9,24,0,500,'open'),
(10,25,1,500,'open'),
(11,26,1,500,'open'),
(12,27,1,500,'open'),
(13,40,3,500,'open'),
(14,51,1,500,'open'),
(15,53,1,500,'open'),
(16,68,1,500,'open'),
(17,69,1,500,'open'),
(18,70,0,500,'open'),
(19,71,0,500,'open'),
(20,72,1,500,'open');
/*!40000 ALTER TABLE `petitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES
(9,'Chairman (LGA)'),
(11,'Councillor'),
(7,'Deputy Governor'),
(6,'Governor'),
(5,'House of Representatives Member'),
(13,'Local Government Secretary'),
(3,'Minister'),
(15,'National Chairman (Party)'),
(14,'Political Party Chairman'),
(1,'President'),
(16,'Secretary to the Government'),
(4,'Senator'),
(12,'Special Adviser'),
(8,'State House of Assembly Member'),
(10,'Vice Chairman (LGA)'),
(2,'Vice President');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` enum('petition','eyewitness') NOT NULL,
  `title` varchar(255) NOT NULL,
  `context` text NOT NULL,
  `media` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`media`)),
  `creator_id` int(11) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `creator_id` (`creator_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES
(1,'petition','Petition for Better Road Infrastructure','We need better roads in our community to ensure safety and accessibility.','[\"https:\\/\\/i.imgur.com\\/6OiQwEJ.jpeg\",\"https:\\/\\/i.imgur.com\\/cl7CDK6.jpeg\"]',2,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(2,'petition','Petition for Improved Healthcare Services','Our healthcare system needs urgent reforms to better serve the community.','[\"https:\\/\\/i.imgur.com\\/DI5HhNd.jpeg\",\"https:\\/\\/i.imgur.com\\/SMBmLqX.jpeg\"]',3,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(3,'petition','Petition for Environmental Protection','We urge the government to take action against pollution in our area.','[\"https:\\/\\/i.imgur.com\\/vSltOz5.jpeg\",\"https:\\/\\/i.imgur.com\\/fu2EWSt.png\"]',4,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(4,'eyewitness','Eyewitness Report: Accident on Main Street','I witnessed a serious accident involving two cars at the intersection.','[\"https:\\/\\/i.imgur.com\\/bNSRtUa.jpeg\",\"https:\\/\\/i.imgur.com\\/ZGBLL5r.jpeg\"]',5,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(5,'eyewitness','Eyewitness Report: Theft at Local Market','I saw a theft incident at the local market yesterday afternoon.','[\"https:\\/\\/i.imgur.com\\/cbxyz99.jpeg\",\"https:\\/\\/i.imgur.com\\/U43c4kd.jpeg\"]',6,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(6,'eyewitness','Eyewitness Report: Fire Incident at Warehouse','A fire broke out at the warehouse causing significant damage.','[\"https:\\/\\/i.imgur.com\\/68BVZ0K.jpeg\",\"https:\\/\\/i.imgur.com\\/8OFejgA.jpeg\"]',7,'active','2024-12-14 16:17:38','2024-12-14 16:17:38'),
(7,'eyewitness','Report','<p>Incoming report</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734208395\\/media\\/a4hy8otuu5fjl1vb4y8p.png\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734208396\\/media\\/s2nbhv7ohstfbjstvky0.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734208397\\/media\\/hjsoo9mj9t2xunu4srao.png\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734208398\\/media\\/hpgw6owai6slb3ar3mo0.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734208399\\/media\\/d6dp4jx0wzprvuiydnko.jpg\"]',134,'active','2024-12-14 20:33:20','2024-12-14 20:33:20'),
(14,'eyewitness','Notiph.','Aint seen nothin.','[\"https://res.cloudinary.com/dsueaitln/video/upload/v1734214948/Screencast_from_2024-12-14_22-36-48_ldzouf.mp4\"]',2,'active','2024-12-14 22:31:05','2024-12-14 22:31:05'),
(15,'eyewitness','Car Accident on Highway 12','There was a serious car accident involving multiple vehicles on Highway 12. Emergency services are on the scene.','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/video\\/upload\\/v1734215581\\/media\\/yaxzkkhwgqccs9um7s7c.mp4\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734215582\\/media\\/bamaos0gpcoak0erb8zi.jpg\"]',2,'active','2024-12-14 22:33:03','2024-12-14 22:33:03'),
(17,'eyewitness','killings','<p>killings occurred </p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734259590\\/media\\/yffl2lybmxqag7m1qgtv.png\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734259591\\/media\\/yxu94gjzmwzarhsk3fjy.jpg\"]',134,'active','2024-12-15 10:46:31','2024-12-15 10:46:31'),
(18,'eyewitness','Assassins','<p>Assassins are kuje prison</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734260434\\/media\\/huwn7zirmgv1fp2qvnyd.jpg\"]',134,'active','2024-12-15 11:00:35','2024-12-15 11:00:35'),
(19,'eyewitness','Killings in Indaboski','<p>Killings occurred</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734260649\\/media\\/yw5htmplmquaqyq2fs0l.jpg\"]',134,'active','2024-12-15 11:04:09','2024-12-15 11:04:09'),
(22,'petition','Improve Public Transportation','This petition aims to improve the public transportation system in the city by increasing the number of buses, improving routes, and enhancing the overall infrastructure.','[]',134,'active','2024-12-15 11:10:35','2024-12-15 11:10:35'),
(24,'petition','Help','<p>Assist needed</p>','[]',134,'active','2024-12-15 11:39:22','2024-12-15 11:39:22'),
(25,'petition','Health assist','<p>Health assist needed</p>','[]',134,'active','2024-12-15 11:40:44','2024-12-15 11:40:44'),
(26,'petition','Health care needed','<p>we need help</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734263050\\/media\\/vmn38aht4tpr7vy5hrjg.jpg\"]',134,'active','2024-12-15 11:44:10','2024-12-15 11:44:10'),
(27,'petition','financial assist','<p>assistance needed </p>','[]',134,'active','2024-12-15 12:55:12','2024-12-15 12:55:12'),
(40,'petition','financial health','<p>financial health is needed</p>','[]',134,'active','2024-12-15 13:47:05','2024-12-15 13:47:05'),
(47,'eyewitness','Accident','<p>An accident occurred at iddo</p><p><strong>They need help</strong></p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734344105\\/media\\/hyf1vccv7itar5hkpg4p.png\"]',134,'active','2024-12-16 10:15:05','2024-12-16 10:15:05'),
(48,'eyewitness','Accident at jabi','An accident occurred at jabbi Lake','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734345885\\/media\\/lwk0hpxdta3vw4r7lbhb.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734345886\\/media\\/dt8bynbyws17zsoktnzp.jpg\"]',134,'active','2024-12-16 10:44:46','2024-12-16 10:44:46'),
(49,'eyewitness','Accident at jigawa','Accident occurred at jigawa state','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734347464\\/media\\/pvxsmfz3tujewmnvjiul.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734347465\\/media\\/r8guua4qjzazpz1zpqav.jpg\"]',134,'active','2024-12-16 11:11:05','2024-12-16 11:11:05'),
(50,'eyewitness','Good job good job','Testing testing testing testing testing','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734385055\\/media\\/mvoo5s7lheumkud1ld0j.jpg\"]',151,'active','2024-12-16 21:37:36','2024-12-16 21:37:36'),
(51,'petition','Help in need','Help is needed in sokoto','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734396595\\/media\\/o2c9xfjvhlmzxb9ierle.jpg\"]',134,'active','2024-12-17 00:49:56','2024-12-17 00:49:56'),
(52,'eyewitness','This is my second eyewitness report','<div class=\"ql-code-block-container\" spellcheck=\"false\"><div class=\"ql-code-block\" data-language=\"plain\">orem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</div><div class=\"ql-code-block\" data-language=\"plain\">molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</div><div class=\"ql-code-block\" data-language=\"plain\">numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium</div><div class=\"ql-code-block\" data-language=\"plain\">optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis</div><div class=\"ql-code-block\" data-language=\"plain\">obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam</div><div class=\"ql-code-block\" data-language=\"plain\">nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,</div><div class=\"ql-code-block\" data-language=\"plain\">tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,</div><div class=\"ql-code-block\" data-language=\"plain\">quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos </div><div class=\"ql-code-block\" data-language=\"plain\">sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam</div><div class=\"ql-code-block\" data-language=\"plain\">recusandae alias error harum maxime adipisci amet laborum. Perspiciatis </div><div class=\"ql-code-block\" data-language=\"plain\">minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit </div><div class=\"ql-code-block\" data-language=\"plain\">quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur </div><div class=\"ql-code-block\" data-language=\"plain\">fugiat, temporibus enim commodi iusto libero magni deleniti quod quam </div><div class=\"ql-code-block\" data-language=\"plain\">consequuntur! Commodi minima excepturi repudiandae velit hic maxime</div><div class=\"ql-code-block\" data-language=\"plain\">doloremque. Quaerat provident commodi consectetur veniam similique ad </div><div class=\"ql-code-block\" data-language=\"plain\">earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo </div><div class=\"ql-code-block\" data-language=\"plain\">fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore </div><div class=\"ql-code-block\" data-language=\"plain\">suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium</div><div class=\"ql-code-block\" data-language=\"plain\">modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam </div><div class=\"ql-code-block\" data-language=\"plain\">totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam </div><div class=\"ql-code-block\" data-language=\"plain\">quasi aliquam eligendi, placeat qui corporis!</div></div><p><br></p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734427822\\/media\\/ttogm6cnq1oynb9wchqc.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734427823\\/media\\/tkgb5qwbfwahxydca0hv.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734427824\\/media\\/bzq1swq2icip06l7e2sy.jpg\"]',165,'active','2024-12-17 09:30:25','2024-12-17 09:30:25'),
(53,'petition','Immediate Release of Mohbad\'s Songs and Accountability for Recently accumulated Revenues','<p><span style=\"color: rgb(0, 0, 0);\">Nigerian Afrobeats artist, Ilerioluwa Oladimeji Aloba, professionally known as Mohbad tragic departure on Tuesday, September 12, 2023, has not only left a void in the music industry but has also triggered serious questions regarding the treatment of artists affiliated with your record label, Marlian Music.</span></p><p><br></p><p><span style=\"color: rgb(0, 0, 0);\">Despite his passing, Mohbad\'s music has continued to gain immense recognition and popularity, even reaching the prestigious Billboard music chart within just one week of his demise. This undeniable resurgence of interest in his music has brought to the forefront an urgent need for accountability regarding the revenues generated from his work during this period.</span></p><p><br></p><p><span style=\"color: rgb(0, 0, 0);\">It has also come to our attention that Mohbad was in a legal dispute with Marlian Music in pursuit of his unreleased songs and unpaid royalties prior to his passing. The allegations of mistreatment and hostilities against Mohbad had already deeply unsettled and disheartened music enthusiasts worldwide. Now, with his posthumous success, the responsibility to honor his memory and ensure his family\'s well-being is even more paramount.</span></p><p><br></p><p><span style=\"color: rgb(0, 0, 0);\">We firmly believe that artists, such as Mohbad, are entitled to equitable, just, and transparent treatment both during their careers and in the aftermath of their passing. In light of these developments, we demand that Marlian Music promptly addresses this matter and ensures the attainment of justice and accountability. Our specific requests are as follows:</span></p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong style=\"color: rgb(0, 0, 0);\">Prompt Release of Mohbad\'s Songs:</strong><span style=\"color: rgb(0, 0, 0);\"> We earnestly request the expedited release of all of Mohbad\'s unreleased musical works to the public, preserving his artistic legacy and providing solace to his devoted fans.</span></li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong style=\"color: rgb(0, 0, 0);\">Accountability for Recent Revenues:</strong><span style=\"color: rgb(0, 0, 0);\"> It is of the utmost importance that a transparent and thorough audit of the revenues generated from Mohbad\'s music since his passing be conducted. The results of this audit should be made available to the public, and any revenues rightfully owed to his family should be transferred to them, extending vital support during this challenging period.</span></li></ol><p><br></p><p><span style=\"color: rgb(0, 0, 0);\">The music industry serves as a cornerstone of Nigeria\'s cultural heritage and global recognition. It is our collective duty to safeguard, nurture, and stand by artists throughout their careers and beyond. By addressing the concerns underscored by Mohbad\'s tragic case and ensuring accountability for recent revenues, we can work towards fostering a music industry that is more just, compassionate, and inclusive for all stakeholders.</span></p><p><span style=\"color: rgb(0, 0, 0);\">We demand that necessary measures be taken to honour Mohbad\'s memory and safeguard his legacy. By doing so, you can affirm your commitment to justice.</span></p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429643\\/media\\/aycetmolmi2qbauoduop.png\"]',165,'active','2024-12-17 10:00:43','2024-12-17 10:00:43'),
(54,'eyewitness','Image optimization check','<p>Checking if images are optimized</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429819\\/media\\/yl9jjyb8oxomonyeqfrp.png\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429820\\/media\\/hl1fkxegb26zfrecgvjj.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429821\\/media\\/lxd6rztxq1ihp55xwpgu.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429822\\/media\\/tuo5aacfp5tjmlarz9nx.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429823\\/media\\/kkpabpsg0jwuezmvc9yi.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734429824\\/media\\/tkvursvdfzspet9w7mpi.jpg\"]',134,'active','2024-12-17 10:03:45','2024-12-17 10:03:45'),
(67,'eyewitness','Wahala!','<p>Wahala is here</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734470849\\/media\\/syerklr6zqer8ovwfz5n.png\"]',158,'active','2024-12-17 21:27:30','2024-12-17 21:27:30'),
(68,'petition','Water supply','Water supply needed at Ija community','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734516072\\/media\\/uewlj7p3ngovsuzcr0e5.jpg\"]',134,'active','2024-12-18 10:01:13','2024-12-18 10:01:13'),
(69,'petition','see this thing works','<p>hahhahahahahahhahaahahahahahahahahahahahahahha</p>','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734542587\\/media\\/cyggee5mzbjifvx2idhg.jpg\"]',151,'active','2024-12-18 17:23:08','2024-12-18 17:23:08'),
(70,'petition','sadfdsagasdg','<p>adsfasdgasdgasdgasdgadsg asdgfasdgasdfgasdg asdgsadgdsgdsagasdgdsgsdgdsga asdasdgsadgsdag</p>','[]',151,'active','2024-12-18 17:37:49','2024-12-18 17:37:49'),
(71,'petition','Devops','News on devops today. Ask TK and Nat 🔥🔥🔥','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734600489\\/media\\/h21qyq1275yqqdinzewh.jpg\"]',134,'active','2024-12-19 09:28:10','2024-12-19 09:28:10'),
(72,'petition','Ambassador Nathaniel Spotlight 😱😱🥶','Well as at the time he talked about the quantum computing of 2050. He said Qubits technology or Idea generally is super amazing. He even foresaw different possibilities and senerios that could change the technology space completely.','[\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734600974\\/media\\/cvvgelshcsd998pguymb.jpg\",\"https:\\/\\/res.cloudinary.com\\/dsueaitln\\/image\\/upload\\/v1734600975\\/media\\/plygv0dwqsyiwa7qef5u.jpg\"]',134,'active','2024-12-19 09:36:16','2024-12-19 09:36:16');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` int(11) NOT NULL,
  `entity_type` enum('post','comment','account') NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `reason` enum('spam','harassment','hate speech','violence','fake news','other') NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `reporter_id` (`reporter_id`),
  CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`reporter_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES
(1,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-14 16:17:41'),
(2,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-14 16:17:41'),
(3,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-14 16:17:41'),
(4,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-14 16:17:41'),
(5,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-14 16:17:41'),
(6,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-14 20:59:28'),
(7,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-14 20:59:28'),
(8,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-14 20:59:28'),
(9,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-14 20:59:28'),
(10,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-14 20:59:28'),
(11,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-15 13:08:10'),
(12,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-15 13:08:10'),
(13,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-15 13:08:10'),
(14,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-15 13:08:10'),
(15,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-15 13:08:10'),
(16,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-15 13:28:30'),
(17,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-15 13:28:30'),
(18,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-15 13:28:30'),
(19,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-15 13:28:30'),
(20,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-15 13:28:30'),
(21,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-15 22:25:26'),
(22,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-15 22:25:26'),
(23,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-15 22:25:26'),
(24,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-15 22:25:26'),
(25,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-15 22:25:26'),
(26,54,'post',134,'spam',NULL,'2024-12-17 10:42:22'),
(27,54,'post',134,'spam',NULL,'2024-12-17 11:27:18'),
(28,54,'post',134,'spam',NULL,'2024-12-17 11:30:56'),
(29,52,'post',134,'spam',NULL,'2024-12-17 11:31:37'),
(30,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-17 17:12:13'),
(31,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-17 17:12:13'),
(32,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-17 17:12:13'),
(33,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-17 17:12:13'),
(34,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-17 17:12:13'),
(35,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-17 17:31:20'),
(36,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-17 17:31:20'),
(37,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-17 17:31:20'),
(38,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-17 17:31:20'),
(39,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-17 17:31:20'),
(40,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-19 10:37:33'),
(41,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-19 10:37:33'),
(42,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-19 10:37:33'),
(43,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-19 10:37:33'),
(44,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-19 10:37:33'),
(45,1,'post',1,'spam','Post with ID 1 has been reported for containing spam content','2024-12-20 07:56:38'),
(46,2,'comment',2,'harassment','Comment with ID 2 has been reported for harassment','2024-12-20 07:56:38'),
(47,3,'account',3,'hate speech','Account with ID 3 has been reported for hate speech','2024-12-20 07:56:38'),
(48,4,'post',4,'fake news','Post with ID 4 has been reported for spreading fake news','2024-12-20 07:56:38'),
(49,5,'comment',5,'violence','Comment with ID 5 has been reported for promoting violence','2024-12-20 07:56:38');
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reposts`
--

DROP TABLE IF EXISTS `reposts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_id` int(11) NOT NULL,
  `entity_type` enum('post','comment') NOT NULL,
  `account_id` int(11) NOT NULL,
  `reposted_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_id` (`entity_id`,`entity_type`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `reposts_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reposts`
--

LOCK TABLES `reposts` WRITE;
/*!40000 ALTER TABLE `reposts` DISABLE KEYS */;
INSERT INTO `reposts` VALUES
(2,4,'post',2,'2024-12-14 22:03:07','2024-12-19 10:37:26'),
(3,15,'post',134,'2024-12-15 21:49:01','2024-12-19 10:37:26'),
(4,2,'post',2,'2024-12-16 09:58:10','2024-12-19 10:37:26'),
(5,1,'post',2,'2024-12-16 10:01:26','2024-12-19 10:37:26'),
(6,49,'post',134,'2024-12-16 16:25:36','2024-12-19 10:37:26'),
(7,18,'post',134,'2024-12-16 16:27:27','2024-12-19 10:37:26'),
(8,49,'post',151,'2024-12-16 21:30:10','2024-12-19 10:37:26'),
(9,47,'post',151,'2024-12-16 21:30:18','2024-12-19 10:37:26'),
(10,50,'post',151,'2024-12-16 21:37:49','2024-12-19 10:37:26'),
(11,24,'post',151,'2024-12-16 21:50:45','2024-12-19 10:37:26'),
(16,50,'post',134,'2024-12-17 00:05:10','2024-12-19 10:37:26'),
(17,25,'post',134,'2024-12-17 00:05:38','2024-12-19 10:37:26'),
(21,47,'post',134,'2024-12-17 08:17:35','2024-12-19 10:37:26'),
(42,40,'post',134,'2024-12-17 09:07:15','2024-12-19 10:37:26'),
(43,52,'post',165,'2024-12-17 09:39:10','2024-12-19 10:37:26'),
(44,54,'post',134,'2024-12-17 12:15:29','2024-12-19 10:37:26'),
(45,27,'post',134,'2024-12-17 20:08:19','2024-12-19 10:37:26'),
(49,68,'post',134,'2024-12-19 09:07:14','2024-12-19 10:37:26'),
(50,71,'post',134,'2024-12-19 09:32:16','2024-12-19 10:37:26');
/*!40000 ALTER TABLE `reposts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representatives`
--

DROP TABLE IF EXISTS `representatives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representatives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sworn_in_date` date DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `constituency_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `party_id` int(11) DEFAULT NULL,
  `social_handles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`social_handles`)),
  `bio` text DEFAULT NULL,
  `proof_of_office` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`proof_of_office`)),
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_id` (`account_id`),
  KEY `position_id` (`position_id`),
  KEY `constituency_id` (`constituency_id`),
  KEY `party_id` (`party_id`),
  CONSTRAINT `representatives_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `representatives_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `representatives_ibfk_3` FOREIGN KEY (`constituency_id`) REFERENCES `constituencies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `representatives_ibfk_4` FOREIGN KEY (`party_id`) REFERENCES `parties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representatives`
--

LOCK TABLES `representatives` WRITE;
/*!40000 ALTER TABLE `representatives` DISABLE KEYS */;
INSERT INTO `representatives` VALUES
(1,NULL,4,NULL,22,14,NULL,'Sen. Abba Patrick Moro is a representative from Benue South',NULL,5),
(2,NULL,4,NULL,80,7,NULL,'Sen. Abdullahi Adamu is a representative from Nasarawa West',NULL,6),
(3,NULL,4,NULL,102,7,NULL,'Sen. Abdullahi Gobir is a representative from Sokoto East',NULL,7),
(4,NULL,4,NULL,24,7,NULL,'Sen. Abubakar Kyari is a representative from Borno North',NULL,8),
(5,NULL,4,NULL,11,14,NULL,'Sen. Adaeze Stella Oduah is a representative from Anambra North',NULL,9),
(6,NULL,4,NULL,14,7,NULL,'Sen. Adamu Bulkachuwa is a representative from Bauchi North',NULL,10),
(7,NULL,4,NULL,92,7,NULL,'Sen. Adelere Adeyemi Oriolowo is a representative from Osun West',NULL,11),
(8,NULL,4,NULL,95,14,NULL,'Sen. Ademola Kola Balogun is a representative from Oyo South',NULL,12),
(9,NULL,4,NULL,NULL,14,NULL,'Sen. Aduda Philip Tanimu is a representative from FCT',NULL,13),
(10,NULL,4,NULL,61,7,NULL,'Sen. Ahmad Babba-kaita is a representative from Katsina North',NULL,14),
(11,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,15),
(12,NULL,4,NULL,5,7,NULL,'Sen. Aishatu Dahiru Ahmed is a representative from Adamawa Central',NULL,16),
(13,NULL,4,NULL,NULL,14,NULL,'Sen. Akon Etim Eyakenyi is a representative from Akwa Ibom South',NULL,17),
(14,NULL,4,NULL,NULL,7,NULL,'Sen. Aliyu Magatakarda Wamakko is a representative from Sokoto North',NULL,18),
(15,NULL,4,NULL,NULL,7,NULL,'Sen. Aliyu Sabi Abdullahi is a representative from Niger North',NULL,19),
(16,NULL,4,NULL,47,7,NULL,'Sen. Amos Bulus Kilawangs is a representative from Gombe South',NULL,20),
(17,NULL,4,NULL,73,7,NULL,'Sen. Ashiru Oyelola Yisa is a representative from Kwara South',NULL,21),
(18,NULL,4,NULL,88,14,NULL,'Sen. Ayo Patrick Akinyelure is a representative from Ondo Central',NULL,22),
(19,NULL,4,NULL,67,7,NULL,'Sen. Bala Ibn Na\'allah is a representative from Kebbi South',NULL,23),
(20,NULL,4,NULL,NULL,14,NULL,'Sen. Barinada Barry Mpigi is a representative from Rivers South East',NULL,24),
(21,NULL,4,NULL,7,14,NULL,'Sen. Bassey Albert Akpan is a representative from Akwa Ibom North-East',NULL,25),
(22,NULL,4,NULL,63,7,NULL,'Sen. Bello Mandiya is a representative from Katsina South',NULL,26),
(23,NULL,4,NULL,101,14,NULL,'Sen. Betty Apiafi is a representative from Rivers West',NULL,27),
(24,NULL,4,NULL,6,14,NULL,'Sen. Binos Dauda Yaroe is a representative from Adamawa South',NULL,28),
(25,NULL,4,NULL,17,7,NULL,'Sen. Biobarakuma W Degi-eremienyo is a representative from Bayelsa East',NULL,29),
(26,NULL,4,NULL,41,14,NULL,'Sen. Biodun Christine Olujimi is a representative from Ekiti South',NULL,30),
(27,NULL,4,NULL,93,7,NULL,'Sen. Buhari Abdulfatai Omotayo is a representative from Oyo North',NULL,31),
(28,NULL,4,NULL,43,14,NULL,'Sen. Chimaroke Ogbonnia Nnamani is a representative from Enugu East',NULL,32),
(29,NULL,4,NULL,42,14,NULL,'Sen. Chukwuka Utazi is a representative from Enugu North',NULL,33),
(30,NULL,4,NULL,37,14,NULL,'Sen. Clifford Akhimienmona Ordia is a representative from Edo Central',NULL,34),
(31,NULL,4,NULL,46,7,NULL,'Sen. Danjuma Goje Mohammed is a representative from Gombe Central',NULL,35),
(32,NULL,4,NULL,56,14,NULL,'Sen. Danjuma Tella La\'ah is a representative from Kaduna South',NULL,36),
(33,NULL,4,NULL,NULL,7,NULL,'Sen. Danladi Abdullahi Sankara is a representative from North West',NULL,37),
(34,NULL,4,NULL,12,14,NULL,'Sen. Ekwunife Lilian Uche is a representative from Anambra Central',NULL,38),
(35,NULL,4,NULL,107,14,NULL,'Sen. Emmanuel Bwacha is a representative from Taraba South',NULL,39),
(36,NULL,4,NULL,NULL,14,NULL,'Sen. Emmanuel Yisa Orker-jev is a representative from Benue North West',NULL,40),
(37,NULL,4,NULL,NULL,14,NULL,'Sen. Enyinnaya Harcourt Abaribe is a representative from Abia-South',NULL,41),
(38,NULL,4,NULL,NULL,14,NULL,'Sen. Ezenwa Francis Onyewuchi is a representative from Imo East',NULL,42),
(39,NULL,4,NULL,90,14,NULL,'Sen. Francis Adenigba Fadahunsi is a representative from Osun East',NULL,43),
(40,NULL,4,NULL,36,7,NULL,'Sen. Francis Asekhame Alimikhena is a representative from Edo North',NULL,44),
(41,NULL,4,NULL,99,14,NULL,'Sen. George Thompson Sekibo is a representative from Rivers East',NULL,45),
(42,NULL,4,NULL,29,14,NULL,'Sen. Gershom Henry Bassey is a representative from Cross River South',NULL,46),
(43,NULL,4,NULL,77,7,NULL,'Sen. Godiya Akwashiki is a representative from Nasarawa North',NULL,47),
(44,NULL,4,NULL,16,7,NULL,'Sen. Halliru Dauda Jika is a representative from Bauchi Central',NULL,48),
(45,NULL,4,NULL,112,14,NULL,'Sen. Hassan Mohammed Gusau is a representative from Zamfara Central',NULL,49),
(46,NULL,4,NULL,97,7,NULL,'Sen. Hezekiah Ayuba Dimka is a representative from Plateau Central',NULL,50),
(47,NULL,4,NULL,85,7,NULL,'Sen. Ibikunle Oyelaja Amosun is a representative from Ogun Central',NULL,51),
(48,NULL,4,NULL,NULL,7,NULL,'Sen. Ibrahim Barau Jibrin is a representative from Kano-North',NULL,52),
(49,NULL,4,NULL,NULL,7,NULL,'Sen. Ibrahim Gaidam is a representative from Yobe East',NULL,53),
(50,NULL,4,NULL,NULL,7,NULL,'Sen. Ibrahim Hadejia is a representative from North East',NULL,54),
(51,NULL,4,NULL,110,7,NULL,'Sen. Ibrahim Mohammed Bomai is a representative from Yobe South',NULL,55),
(52,NULL,4,NULL,NULL,7,NULL,'Sen. Ibrahim Shekarau is a representative from Kano-Central',NULL,56),
(53,NULL,4,NULL,72,7,NULL,'Sen. Ibrahim Yahaya Oloriegbe is a representative from Kwara Central',NULL,57),
(54,NULL,4,NULL,13,17,NULL,'Sen. Ifeanyi Patrick Ubah is a representative from Anambra South',NULL,58),
(55,NULL,4,NULL,44,14,NULL,'Sen. Ike Ekweremadu is a representative from Enugu West',NULL,59),
(56,NULL,4,NULL,4,14,NULL,'Sen. Ishaku Elisha cliff Abbo is a representative from Adamawa North',NULL,60),
(57,NULL,4,NULL,96,14,NULL,'Sen. Istifanus Dung Gyang is a representative from Plateau North',NULL,61),
(58,NULL,4,NULL,32,14,NULL,'Sen. James Ebiowou Manager is a representative from Delta South',NULL,62),
(59,NULL,4,NULL,68,7,NULL,'Sen. Jibrin Isah is a representative from Kogi East',NULL,63),
(60,NULL,4,NULL,34,14,NULL,'Sen. Joseph Obinna Ogba is a representative from Ebonyi Central',NULL,64),
(61,NULL,4,NULL,62,7,NULL,'Sen. Kabir Abdullahi Barkiya is a representative from Katsina Central',NULL,65),
(62,NULL,4,NULL,NULL,7,NULL,'Sen. Kabiru Ibrahim Gaya is a representative from Kano-South',NULL,66),
(63,NULL,4,NULL,25,7,NULL,'Sen. Kashim Shettima is a representative from Borno Central',NULL,67),
(64,NULL,4,NULL,15,7,NULL,'Sen. Lawal Yahaya Gumau is a representative from Bauchi South',NULL,68),
(65,NULL,4,NULL,38,14,NULL,'Sen. Matthew Aisagbonriodion Urhoghide is a representative from Edo South',NULL,69),
(66,NULL,4,NULL,35,14,NULL,'Sen. Michael Ama Nnachi is a representative from Ebonyi South',NULL,70),
(67,NULL,4,NULL,40,7,NULL,'Sen. Michael Opeyemi Bamidele is a representative from Ekiti Central',NULL,71),
(68,NULL,4,NULL,66,7,NULL,'Sen. Mohammad Adamu Mainasara aliero is a representative from Kebbi Central',NULL,72),
(69,NULL,4,NULL,26,7,NULL,'Sen. Mohammed Ali Ndume is a representative from Borno South',NULL,73),
(70,NULL,4,NULL,81,7,NULL,'Sen. Mohammed Sani Musa is a representative from Niger East',NULL,74),
(71,NULL,4,NULL,NULL,7,NULL,'Sen. Muhammad Enagi Bima is a representative from Niger South',NULL,75),
(72,NULL,4,NULL,89,14,NULL,'Sen. Nicholas Olubukola Tofowomo is a representative from Ondo South',NULL,76),
(73,NULL,4,NULL,39,7,NULL,'Sen. Olubunmi Ayodeji Adetunmbi is a representative from Ekiti North',NULL,77),
(74,NULL,4,NULL,NULL,7,NULL,'Sen. Oluremi Shade Tinubu is a representative from Lagos-Central',NULL,78),
(75,NULL,4,NULL,NULL,7,NULL,'Sen. Orji Uzor Kalu is a representative from Abia-North',NULL,79),
(76,NULL,4,NULL,69,7,NULL,'Sen. Oseni Yakubu is a representative from Kogi Central',NULL,80),
(77,NULL,4,NULL,31,7,NULL,'Sen. Ovie Augustine Omo-agege is a representative from Delta Central',NULL,81),
(78,NULL,4,NULL,30,14,NULL,'Sen. Peter Onyeluka Nwaoboshi is a representative from Delta North',NULL,82),
(79,NULL,4,NULL,84,7,NULL,'Sen. Ramoni Olalekan Mustapha is a representative from Ogun East',NULL,83),
(80,NULL,4,NULL,87,7,NULL,'Sen. Robert Ajayi Boroffice is a representative from Ondo North',NULL,84),
(81,NULL,4,NULL,NULL,7,NULL,'Sen. Rochas Okorocha is a representative from Imo West',NULL,85),
(82,NULL,4,NULL,27,14,NULL,'Sen. Rose Okoji Oko is a representative from Cross River North',NULL,86),
(83,NULL,4,NULL,NULL,7,NULL,'Sen. Sabo Mohammed is a representative from South West',NULL,87),
(84,NULL,4,NULL,71,7,NULL,'Sen. Sadiq Suleiman Umar is a representative from Kwara North',NULL,88),
(85,NULL,4,NULL,45,7,NULL,'Sen. Saidu Ahmed Alkali is a representative from Gombe North',NULL,89),
(86,NULL,4,NULL,33,14,NULL,'Sen. Samuel Ominyi Egwu is a representative from Ebonyi North',NULL,90),
(87,NULL,4,NULL,28,14,NULL,'Sen. Sandy Ojang Onor is a representative from Cross River Central',NULL,91),
(88,NULL,4,NULL,105,14,NULL,'Sen. Shuaibu Isa Lau is a representative from Taraba North',NULL,92),
(89,NULL,4,NULL,NULL,7,NULL,'Sen. Solomon Olamilekan Adeola is a representative from Lagos-West',NULL,93),
(90,NULL,4,NULL,54,7,NULL,'Sen. Suleiman Abdu Kwari is a representative from Kaduna North',NULL,94),
(91,NULL,4,NULL,91,7,NULL,'Sen. Surajudeen Ajibola Basiru is a representative from Osun Central',NULL,95),
(92,NULL,4,NULL,94,7,NULL,'Sen. Teslim Kolawale Folarin is a representative from Oyo Central',NULL,96),
(93,NULL,4,NULL,NULL,14,NULL,'Sen. Theodore Ahamefule Orji is a representative from Abia-Central',NULL,97),
(94,NULL,4,NULL,86,7,NULL,'Sen. Tolulope Akinremi Odebiyi is a representative from Ogun West',NULL,98),
(95,NULL,4,NULL,55,7,NULL,'Sen. Uba Sani is a representative from Kaduna Central',NULL,99),
(96,NULL,4,NULL,79,7,NULL,'Sen. Umaru Tanko Almakura is a representative from Nasarawa South',NULL,100),
(97,NULL,4,NULL,65,7,NULL,'Sen. Yahaya Abubakar Abdullahi is a representative from Kebbi North',NULL,101),
(98,NULL,4,NULL,106,7,NULL,'Sen. Yusuf Abubakar Yusuf is a representative from Taraba Central',NULL,102),
(99,NULL,1,NULL,NULL,7,NULL,'Muhammadu Buhari is a representative from Katsina',NULL,103),
(100,NULL,2,NULL,NULL,7,NULL,'Kashim Shettima is a representative from Maiduguri',NULL,104),
(101,NULL,2,NULL,NULL,14,NULL,'Atiku Abubakar is a representative from Yola',NULL,105),
(102,NULL,3,NULL,NULL,7,NULL,'Rotimi Amaechi is a representative from Port Harcourt',NULL,106),
(103,NULL,3,NULL,NULL,14,NULL,'Ngozi Okonjo-Iweala is a representative from Warri',NULL,107),
(104,NULL,4,NULL,NULL,14,NULL,'Bukola Saraki is a representative from Ilorin',NULL,108),
(105,NULL,4,NULL,NULL,7,NULL,'Ahmed Lawan is a representative from Damaturu',NULL,109),
(106,NULL,5,NULL,NULL,7,NULL,'Femi Gbajabiamila is a representative from Surulere',NULL,110),
(107,NULL,5,NULL,NULL,14,NULL,'Rita Orji is a representative from Aba',NULL,111),
(108,NULL,6,NULL,NULL,7,NULL,'Babajide Sanwo-Olu is a representative from Lagos Island',NULL,112),
(109,NULL,6,NULL,NULL,14,NULL,'Udom Emmanuel is a representative from Uyo',NULL,113),
(110,NULL,7,NULL,NULL,7,NULL,'Obafemi Hamzat is a representative from Ikeja',NULL,114),
(111,NULL,7,NULL,NULL,14,NULL,'Moses Ekpo is a representative from Uyo',NULL,115),
(112,NULL,8,NULL,NULL,7,NULL,'Mudashiru Obasa is a representative from Agege',NULL,116),
(113,NULL,8,NULL,NULL,14,NULL,'Kingsley Esiso is a representative from Asaba',NULL,117),
(114,NULL,9,NULL,NULL,7,NULL,'Olufunso Adeyemi is a representative from Abeokuta',NULL,118),
(115,NULL,9,NULL,NULL,14,NULL,'Iretiola Akinwunmi is a representative from Ado Ekiti',NULL,119),
(116,NULL,10,NULL,NULL,7,NULL,'Bola Abisoye is a representative from Ota',NULL,120),
(117,NULL,10,NULL,42,14,NULL,'Chika Nwankwo is a representative from Enugu North',NULL,121),
(118,NULL,11,NULL,NULL,7,NULL,'Taiwo Akinola is a representative from Ifo',NULL,122),
(119,NULL,11,NULL,NULL,14,NULL,'Cynthia Ogbulafor is a representative from Aba South',NULL,123),
(120,NULL,12,NULL,NULL,7,NULL,'Dapo Olanipekun is a representative from Abeokuta North',NULL,124),
(121,NULL,12,NULL,NULL,14,NULL,'Patricia Oboh is a representative from Benin City',NULL,125),
(122,NULL,13,NULL,NULL,7,NULL,'Samson Akintoye is a representative from Abeokuta South',NULL,126),
(123,NULL,13,NULL,NULL,14,NULL,'Victoria Okeke is a representative from Awka',NULL,127),
(124,NULL,14,NULL,NULL,7,NULL,'Adams Oshiomhole is a representative from Benin City',NULL,128),
(125,NULL,14,NULL,NULL,14,NULL,'Uche Secondus is a representative from Port Harcourt',NULL,129),
(126,NULL,15,NULL,NULL,7,NULL,'Okechukwu Madu is a representative from Aba North',NULL,130),
(127,NULL,15,NULL,NULL,14,NULL,'Ifeanyi Uba is a representative from Nnewi',NULL,131),
(128,NULL,16,NULL,NULL,7,NULL,'Boss Mustapha is a representative from Yola',NULL,132),
(129,NULL,16,NULL,NULL,14,NULL,'Oladapo Afolabi is a representative from Abeokuta',NULL,133),
(130,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,139),
(131,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,145),
(132,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,150),
(133,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,156),
(134,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,172),
(135,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,177),
(136,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,182),
(137,NULL,4,NULL,108,7,NULL,'Sen. Ahmad Ibrahim Lawan is a representative from Yobe North',NULL,187);
/*!40000 ALTER TABLE `representatives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('3bkIqj7xZRm3QasGmNIx0dsh0IcE7J6ZojlhQJch',NULL,'64.62.197.157','Mozilla/5.0 (X11; Linux x86_64) Gecko/20060609 Firefox/123.0esr','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUgzMVJwbDI5bEI0dkZEMXhURTBXTWpwQTVTRGhtVGpMc3BrZDBvdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734685990),
('5dDFf8reI49U8Ltkra09ixZ5ra5ZUiUAH2qsqlXJ',NULL,'92.255.57.58','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVpUcndLcEJhY0k5M2tsYjR3eEtKRWtHSTMyRFhCM21xTDRQQm9HcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly84NC4zMi40NC4xODYvP1hERUJVR19TRVNTSU9OX1NUQVJUPXBocHN0b3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734677599),
('6AbLQ7Ayuvuy8IUXtD15LRg0Hjwf2GXdPudFRuA0',NULL,'95.214.53.205','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNFBmUHVub24wY296UlpDd1cyeHE2THFMaUtDMG5FWjBqdW5SdlBSRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734680725),
('6Z8RiwifgOdbxUH045ACySN2zqsxOEcLH62deIbF',NULL,'93.174.93.12','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3872.0 Safari/537.36 Edg/78.0.244.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUlNaTkyQUN0TGxocGlIVlc4djNycDRESG4zUTFON1BTOHRuYUN1UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8wLjAuMC4wOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734679407),
('8ThOV6j9OjZRP1xVbc9tj8pSP1jbrNdx7aiQ3mgO',NULL,'49.51.183.84','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkhmcHB2VnFVTXNnMERZM1JnbXlUZDBlbE5HZWptc1E1a29mOUhKZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734692781),
('9spcCOzVrJxQ0Jc1cOFYE7dQqFv3ROB06TDNLS5Z',NULL,'47.237.94.12','Custom-AsyncHttpClient','YTozOntzOjY6Il90b2tlbiI7czo0MDoicUtjblF2M2w3cjllbmRYUmlXdVlvNDFqc1NVUGtrc1ltUEtpbHV6TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODc6Imh0dHA6Ly84NC4zMi40NC4xODYvaW5kZXgucGhwP2xhbmc9Li4lMkYuLiUyRi4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkYuLiUyRnRtcCUyRmluZGV4MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1734687736),
('AQwvvJuR2Me8iCXt8KrUZ3vd0udIxPcqV4DzE2Ah',NULL,'47.237.94.12','Custom-AsyncHttpClient','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUMxTTZmVDBvYkZiM09JZ0dFUjY1YTNQUENyMDdyYmNhbWNVWE5VVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk4OiJodHRwOi8vODQuMzIuNDQuMTg2L2luZGV4LnBocD8lMkYlM0MlM0ZlY2hvJTI4bWQ1JTI4JTIyaGklMjIlMjklMjklM0IlM0YlM0UlMjAlMkZ0bXAlMkZpbmRleDEucGhwPSZjb25maWctY3JlYXRlJTIwJTJGPSZsYW5nPS4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkYuLiUyRi4uJTJGLi4lMkZ1c3IlMkZsb2NhbCUyRmxpYiUyRnBocCUyRnBlYXJjbWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734687735),
('B2333fP2NyrVstRzmqOQcuxCx08igS3RbXaLNiUT',NULL,'172.68.27.100','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzcybWk4NVh2eXplMnpFcFNhcnBHZTdTRGtRdXFBQ2ZRYnV6TkZVSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly9pcmVwLjBwcy50ZWNoIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734681511),
('cUVsVUMLl1IL6e9GAcUSPsOm6EjvUkOCEAxTu84s',NULL,'185.191.126.213','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGlMR1Z6ZnZFRE1zUk9mNEtsRDYwaEgxZGNKUGw0U25MNTE2NW5SUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734690695),
('FwNTgOPKg0Edt3jZ3e5bVtNnSeEKuUG10pfoGC0u',NULL,'46.19.138.234','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZlF2TktIT2s1R2hpTmFrMmNIb1V4UXJxaWFTa0U4RlJIb2l6VW9hViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734692124),
('fyV4IJki64NB2tYznXTiGV8t2p7TnDVLkWbynF7E',NULL,'95.214.53.205','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46','YToyOntzOjY6Il90b2tlbiI7czo0MDoieUtVT3AyQWoyNTNvVWZIalFmQWN4bW9NSERjT05Bd0hRQ2lvaTAySCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734675168),
('gWHIgxeb0qKcJSydL2LxU6ukU73wTHmanUi3UqEB',NULL,'36.92.68.239','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGRTZ3pJMTlxd0ZmWXVBdUo3dmR1c2NMS2JXY1Rwc3hGMVFwQXFXQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734674656),
('HCTuog8u6Pn4qLU78ZerzIAc7O45Xlci2Y0ncqvg',NULL,'141.98.11.155','','YTozOntzOjY6Il90b2tlbiI7czo0MDoia2pyZzYzYlJCc3ZvSnZPSVhZdFg5dmI2MU5lVkFGa1puS3E1ZkxIciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734688187),
('hd28c5pcoPanYnRYkoCIkyveLhYAVIZLQwZHstuL',NULL,'47.237.94.12','Custom-AsyncHttpClient','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1JoWDF3aUd0RUJ0SXBVRk9TNjBzdU1GSTBzdmlXeW9rWktSbGxHNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQ1OiJodHRwOi8vODQuMzIuNDQuMTg2L2luZGV4LnBocD9mdW5jdGlvbj1jYWxsX3VzZXJfZnVuY19hcnJheSZzPSUyRmluZGV4JTJGJTVDdGhpbmslNUNhcHAlMkZpbnZva2VmdW5jdGlvbiZ2YXJzJTVCMCU1RD1tZDUmdmFycyU1QjElNUQlNUIwJTVEPUhlbGxvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734687733),
('HklJlGDeDCSDDjZ1987c3epOSYeFk7TMJbSdtVzA',NULL,'34.76.26.137','python-requests/2.32.3','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUg5b1p3VmFDSzE1YnJKVTJaS0dNNWlBVUN2OG1yZ2hXZ2VBTEpmTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734681522),
('vOeuCSFZvjfP21s8SUfsHK073VsWY6rUp2StUZVc',NULL,'178.79.168.29','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:8.0) Gecko/20100101 Firefox/8.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTNkYmUwWmtBR3Q5ZFBqZGpCcllMcEFIdnJlRmYwbFpwQlJ2UGFpUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734675120),
('y7d8uZJQnQbnTfNQwJkGuwRScnUYFX0QbB99oqIc',NULL,'141.98.11.155','','YTozOntzOjY6Il90b2tlbiI7czo0MDoianJWTEo4N3g3U29TUzJ1a1FWOWo0aEUwQ0xiWEd4Rk5OaWdUTmZxaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734675376),
('yrbPJjLKZYugMLFsCvCbxUUQxevrqzqGbZRQPPZ8',NULL,'172.70.160.216','curl/8.5.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMG45Z3FOTUNybGF0UndVSmVQRDN6bmpEWmlWMXpNTkVJUmRkeWdsdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1734689748),
('ZQWNldaPa6TTYgFMsRUWI741v3609RMSohwE0fuv',NULL,'35.205.56.72','python-requests/2.32.3','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmwxZ21KaW5mMjJPajgxT1BLVW0xUXhhZEVzeTJUNFVNRkRydVpPSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly84NC4zMi40NC4xODYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1734675598);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES
(1,'Abia'),
(2,'Adamawa'),
(3,'Akwa Ibom'),
(4,'Anambra'),
(5,'Bauchi'),
(6,'Bayelsa'),
(7,'Benue'),
(8,'Borno'),
(9,'Cross River'),
(10,'Delta'),
(11,'Ebonyi'),
(12,'Edo'),
(13,'Ekiti'),
(14,'Enugu'),
(37,'Federal Capital Territory'),
(15,'Gombe'),
(16,'Imo'),
(17,'Jigawa'),
(18,'Kaduna'),
(19,'Kano'),
(20,'Katsina'),
(21,'Kebbi'),
(22,'Kogi'),
(23,'Kwara'),
(24,'Lagos'),
(25,'Nasarawa'),
(26,'Niger'),
(27,'Ogun'),
(28,'Ondo'),
(29,'Osun'),
(30,'Oyo'),
(31,'Plateau'),
(32,'Rivers'),
(33,'Sokoto'),
(34,'Taraba'),
(35,'Yobe'),
(36,'Zamfara');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verification_tokens`
--

DROP TABLE IF EXISTS `verification_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verification_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `verification_tokens_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verification_tokens`
--

LOCK TABLES `verification_tokens` WRITE;
/*!40000 ALTER TABLE `verification_tokens` DISABLE KEYS */;
INSERT INTO `verification_tokens` VALUES
(4,'3ST2',157,'2024-12-16 01:06:52'),
(15,'ZYLV',167,'2024-12-17 15:40:32');
/*!40000 ALTER TABLE `verification_tokens` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-20 11:14:32
