-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.28-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 傾印 microsoft 的資料庫結構
CREATE DATABASE IF NOT EXISTS `microsoft` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `microsoft`;

-- 傾印  資料表 microsoft.news 結構
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_path` varchar(255) DEFAULT '' COMMENT '圖片路徑',
  `title` varchar(255) DEFAULT '' COMMENT '標題',
  `content` text DEFAULT '' COMMENT '內文',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  microsoft.news 的資料：~6 rows (近似值)
REPLACE INTO `news` (`id`, `created_at`, `updated_at`, `img_path`, `title`, `content`) VALUES
	(1, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/1.webp', '在混合式環境中蓬勃發展', '探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。'),
	(2, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/2.jpg', 'Surface Laptop Go 2', '外型時尚的筆記型電腦配備 12.4 吋觸控螢幕、絕佳的打字體驗，以及改良的 HD 相機。'),
	(3, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/3.jpg', 'Xbox Series X', '有史以來最快、最強大的 Xbox。'),
	(4, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/4.webp', '隆重推出新版 Bing', '問真正的問題。 聊天和創作。 從您的 AI 網路副駕駛獲得更好的答案。'),
	(5, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/5.webp', '12.4 吋 PixelSense™ 觸控螢幕', 'Surface 的經典 3:2 比例可在筆記型電腦上提供您最多的垂直畫面，讓您一手包辦'),
	(6, '2023-08-30 07:41:10', '2023-08-30 07:41:10', 'image/news/6.webp', '免費取得 Microsoft Teams', '線上會議、聊天和共用雲端儲存空間，盡在一處。');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
