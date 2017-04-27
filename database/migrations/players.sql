-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-24 09:33:14
-- 伺服器版本: 5.7.11
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `crydeeper`
--

-- --------------------------------------------------------

--
-- 資料表結構 `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` int(11) NOT NULL,
  `hv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bench` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hitorder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `players`
--

INSERT INTO `players` (`id`, `match_id`, `hv`, `bench`, `hitorder`, `pos`, `name`, `backno`, `created_at`, `updated_at`) VALUES
(1, 3, 'V', NULL, '1', '1B', '朱思琪', '#9', '2017-04-19 04:32:03', '2017-04-19 04:32:03'),
(2, 3, 'V', NULL, '2', 'RF', '陳雨婷', '#20', '2017-04-19 04:33:05', '2017-04-19 04:33:05'),
(3, 3, 'V', NULL, '3', 'SS', '柯佳慧', '#26', '2017-04-19 04:35:56', '2017-04-19 04:35:56'),
(4, 3, 'V', NULL, '4', '3B', '彭耀萱', '#23', '2017-04-19 04:36:46', '2017-04-19 04:36:46'),
(5, 3, 'V', NULL, '5', '2B', '林愷恩', '#15', '2017-04-19 05:26:36', '2017-04-19 05:26:36'),
(6, 3, 'V', NULL, '6', 'CF', '黃于綾', '#31', '2017-04-19 05:28:47', '2017-04-19 05:28:47'),
(7, 3, 'V', NULL, '7', 'C', '馬文麗', '#24', '2017-04-19 05:29:23', '2017-04-19 05:29:23'),
(8, 3, 'V', NULL, '8', 'LF', '游佩昀', '#7', '2017-04-19 05:30:01', '2017-04-19 05:30:01'),
(9, 3, 'V', NULL, '9', 'P', '杜雅婷', '#1', '2017-04-19 05:30:36', '2017-04-19 05:30:36'),
(10, 3, 'H', NULL, '1', '2B', '賴怡璇', '#6', '2017-04-19 05:31:26', '2017-04-19 05:31:26'),
(11, 3, 'H', NULL, '2', 'CF', '張郁菁', '#7', '2017-04-19 05:33:26', '2017-04-19 05:33:26'),
(12, 3, 'H', NULL, '3', 'LF', '林晏婷', '#11', '2017-04-19 05:35:10', '2017-04-19 05:35:10'),
(13, 3, 'H', NULL, '4', 'SS', '邱采婷', '#13', '2017-04-20 22:02:39', '2017-04-20 22:02:39'),
(14, 3, 'H', NULL, '5', 'C', '王芷聆', '#12', '2017-04-20 22:03:43', '2017-04-20 22:03:43'),
(15, 3, 'H', NULL, '6', 'RF', '谷孝萱', '#2', '2017-04-20 22:04:15', '2017-04-20 22:04:15'),
(16, 3, 'H', NULL, '7', '1B', '邱婷瑜', '#10', '2017-04-20 22:04:55', '2017-04-20 22:04:55'),
(17, 3, 'H', NULL, '8', '3B', '陳妲宇', '#14', '2017-04-20 22:05:28', '2017-04-20 22:05:28'),
(18, 3, 'H', NULL, '9', 'DP', '林倢妤', '#15', '2017-04-20 22:06:23', '2017-04-20 22:06:23'),
(19, 3, 'H', NULL, '0', 'P', '楊憶珊', '#0', '2017-04-20 23:12:39', '2017-04-20 23:12:39'),
(20, 3, 'H', NULL, '0', 'P', '卓佩環', '#00', '2017-04-20 23:12:50', '2017-04-20 23:12:50');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
