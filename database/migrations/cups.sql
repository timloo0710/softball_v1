-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-04-21 16:46:11
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
-- 資料表結構 `cups`
--

CREATE TABLE `cups` (
  `id` int(10) UNSIGNED NOT NULL,
  `cupname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teams` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `cups`
--

INSERT INTO `cups` (`id`, `cupname`, `place`, `creator`, `interval`, `teams`, `memos`, `created_at`, `updated_at`) VALUES
(1, '105學年度A', '金龍', '教育部', '四月第二週', '多筆，參賽學校，被school', '多讀手冊不見得有效，因為不知道這種情況', '2017-04-18 17:15:44', '2017-04-18 17:15:44'),
(2, '105學年度B', '金龍', '教育部', '四月第二週', '多筆，參賽學校，被school', '多讀手冊不見得有效，因為不知道這種情況', '2017-04-18 17:36:56', '2017-04-18 17:36:56');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cups`
--
ALTER TABLE `cups`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `cups`
--
ALTER TABLE `cups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
