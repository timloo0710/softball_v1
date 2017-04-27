-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-24 09:34:55
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
-- 資料表結構 `pitchers`
--

CREATE TABLE `pitchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inning_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defender_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attacker_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catcher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passedball` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defense` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defense2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defense3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `pitchers`
--

INSERT INTO `pitchers` (`id`, `match_id`, `inning_id`, `defender_id`, `attacker_id`, `catcher`, `passedball`, `p_result`, `a_result`, `d_result`, `outs`, `defense`, `defense2`, `defense3`, `home`, `run`, `created_at`, `updated_at`) VALUES
(2, '3', '1U', '楊憶珊', '朱思琪', '無', '無', '二壘安打', '無', '無', '0', '無', '無', '無', '無', 0, '2017-04-21 00:05:23', '2017-04-21 00:05:23'),
(4, '3', '1U', '楊憶珊', '陳雨婷', '無', '無', '一壘安打', '無', '接球失誤', '0', '邱采婷', '無', '無', '無', 1, '2017-04-21 00:10:58', '2017-04-21 00:10:58'),
(5, '3', '1U', '楊憶珊', '柯佳慧', '無', '無', '滾球出局', '無', '助殺', '0', '邱采婷', '無', '無', '無', 0, '2017-04-21 00:13:26', '2017-04-21 00:13:26'),
(6, '3', '1U', '楊憶珊', '彭耀萱', '無', '無', '二壘安打', '無', '無', '0', '無', '無', '無', '無', 1, '2017-04-21 00:28:22', '2017-04-21 00:28:22'),
(7, '3', '1U', '楊憶珊', '林愷恩', '無', '無', '滾球出局', '無', '無', '1', '邱婷瑜', '無', '無', '無', 0, '2017-04-21 00:31:05', '2017-04-21 00:31:05'),
(8, '3', '1U', '楊憶珊', '黃于綾', '無', '無', '一壘安打', '無', '無', '0', '無', '無', '無', '無', 1, '2017-04-21 00:33:16', '2017-04-21 00:33:16'),
(9, '3', '1U', '楊憶珊', '馬文麗', '無', '無', '觸身球', '無', '無', '0', '無', '無', '無', '無', 0, '2017-04-21 00:34:51', '2017-04-21 00:34:51'),
(10, '3', '1U', '卓佩環', '游佩昀', '無', '無', '飛球出局', '無', '無', '1', '張郁菁', '無', '無', '無', 0, '2017-04-21 00:37:28', '2017-04-21 00:37:28');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `pitchers`
--
ALTER TABLE `pitchers`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `pitchers`
--
ALTER TABLE `pitchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
