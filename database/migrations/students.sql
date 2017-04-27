-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-24 09:34:05
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
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`id`, `school_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, '朱思琪', '2017-04-18 19:07:10', '2017-04-18 19:07:10'),
(2, 2, '陳雨婷', '2017-04-18 19:07:40', '2017-04-18 19:07:40'),
(3, 2, '柯佳慧', '2017-04-18 19:08:09', '2017-04-18 19:08:09'),
(4, 2, '彭耀萱', '2017-04-18 19:08:51', '2017-04-18 19:08:51'),
(5, 2, '林愷恩', '2017-04-18 19:29:01', '2017-04-18 19:29:01'),
(11, 1, '賴怡璇', '2017-04-18 22:05:23', '2017-04-18 22:05:23'),
(7, 2, '馬文麗', '2017-04-18 19:34:46', '2017-04-18 19:34:46'),
(8, 2, '黃于綾', '2017-04-18 19:36:03', '2017-04-18 19:36:03'),
(9, 2, '游佩昀', '2017-04-18 19:49:31', '2017-04-18 19:49:31'),
(10, 2, '杜雅婷', '2017-04-18 19:50:25', '2017-04-18 19:50:25'),
(12, 1, '張郁菁', '2017-04-18 22:05:49', '2017-04-18 22:05:49'),
(13, 1, '林晏婷', '2017-04-18 22:06:15', '2017-04-18 22:06:15'),
(14, 1, '邱采婷', '2017-04-18 22:06:41', '2017-04-18 22:06:41'),
(15, 1, '王芷聆', '2017-04-18 22:07:07', '2017-04-18 22:07:07'),
(16, 1, '谷孝萱', '2017-04-18 22:10:34', '2017-04-18 22:10:34'),
(17, 1, '邱婷瑜', '2017-04-18 22:10:57', '2017-04-18 22:10:57'),
(18, 1, '陳妲宇', '2017-04-18 22:11:33', '2017-04-18 22:11:33'),
(19, 1, '林倢妤', '2017-04-18 22:12:28', '2017-04-18 22:12:28'),
(20, 1, '楊憶珊', '2017-04-20 23:07:40', '2017-04-20 23:07:40'),
(21, 1, '卓佩環', '2017-04-20 23:08:01', '2017-04-20 23:08:01');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
