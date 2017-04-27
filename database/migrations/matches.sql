-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-24 09:34:34
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
-- 資料表結構 `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `cup_id` int(11) NOT NULL,
  `holded_at` date NOT NULL,
  `game_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begin_time_set` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begin_time_act` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_score` int(11) DEFAULT NULL,
  `v_score` int(11) DEFAULT NULL,
  `end_time_act` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `matches`
--

INSERT INTO `matches` (`id`, `cup_id`, `holded_at`, `game_order`, `begin_time_set`, `begin_time_act`, `js`, `host_name`, `visit_name`, `h_score`, `v_score`, `end_time_act`, `created_at`, `updated_at`) VALUES
(3, 1, '2017-04-04', '10', '2:00', NULL, '高中', '東山高', '埔工', NULL, NULL, NULL, '2017-04-18 22:46:02', '2017-04-18 22:46:02');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
