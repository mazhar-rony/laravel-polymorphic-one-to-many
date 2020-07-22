/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - polymorphic_one_to_many
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`polymorphic_one_to_many` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `polymorphic_one_to_many`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) unsigned NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

insert  into `comments`(`id`,`comment_body`,`commentable_id`,`commentable_type`,`created_at`,`updated_at`) values 
(4,'i also love this bike',1,'App\\Post','2020-07-22 01:36:24','2020-07-22 01:36:24'),
(5,'most stylish bike',3,'App\\Post','2020-07-22 02:08:26','2020-07-22 02:08:26'),
(6,'whats the price',3,'App\\Post','2020-07-22 02:08:45','2020-07-22 02:08:45'),
(7,'at last found this video',4,'App\\Video','2020-07-22 02:09:28','2020-07-22 02:09:28'),
(8,'whats the model name',4,'App\\Post','2020-07-22 02:10:52','2020-07-22 02:10:52'),
(9,'forget to reply',2,'App\\Video','2020-07-22 03:36:41','2020-07-22 03:36:41'),
(10,'very nice video',5,'App\\Video','2020-07-22 03:45:57','2020-07-22 03:45:57'),
(11,'not so good',5,'App\\Video','2020-07-22 03:46:22','2020-07-22 03:46:22'),
(12,'i dont know how to play',5,'App\\Post','2020-07-22 03:47:32','2020-07-22 03:47:32'),
(13,'i am in crown level',5,'App\\Post','2020-07-22 03:47:56','2020-07-22 03:47:56');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2020_07_21_230736_create_videos_table',1),
(2,'2020_07_21_230759_create_posts_table',1),
(3,'2020_07_21_230817_create_comments_table',1);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`body`,`created_at`,`updated_at`) values 
(1,'BMW','love this bike......','2020-07-22 01:20:34','2020-07-22 01:20:34'),
(2,'BMW','love this bike......','2020-07-22 01:23:29','2020-07-22 01:23:29'),
(3,'Suzuki','fastest bike....','2020-07-22 02:07:42','2020-07-22 02:07:42'),
(4,'Honda','love honda','2020-07-22 02:10:28','2020-07-22 02:10:28'),
(5,'PUBG','best mobile game','2020-07-22 03:46:59','2020-07-22 03:46:59');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `videos` */

insert  into `videos`(`id`,`url`,`file_path`,`created_at`,`updated_at`) values 
(2,'url 2','path 2','2020-07-21 23:50:13','2020-07-21 23:50:13'),
(4,'url 4','path 4','2020-07-22 01:11:03','2020-07-22 01:11:03'),
(5,'url 11','path 11','2020-07-22 03:45:30','2020-07-22 03:45:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
