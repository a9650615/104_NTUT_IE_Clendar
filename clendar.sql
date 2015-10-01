-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-09-30 13:06:32
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `clendar`
--
CREATE DATABASE IF NOT EXISTS `clendar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clendar`;

-- --------------------------------------------------------

--
-- 資料表結構 `itinerary`
--

CREATE TABLE IF NOT EXISTS `itinerary` (
  `ID` varchar(255) NOT NULL,
  `Title` text NOT NULL,
  `Type` int(255) NOT NULL,
  `Date` bigint(255) NOT NULL,
  `Time` bigint(255) NOT NULL,
  `Other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `itinerary`
--

INSERT INTO `itinerary` (`ID`, `Title`, `Type`, `Date`, `Time`, `Other`) VALUES
('08508c664cbf1bd7993c71b0e1eb8934', '【綜科館第二、三演講廳】【男生住宿說明會】', 0, 1443024000, 64800, '住宿男新生務必參加'),
('0c00e6f912998d14dceb9207465e3450', 'Fff', 0, 0, 0, ''),
('168894152185088eba8b3a40259c3da1', '【科研B424】【軟體工程說明會】', 0, 1443628800, 43200, '不一定要參加'),
('40871f42ae898855814c2ec6ee8307ba', '機車停車位', 0, 1442937600, 61200, ''),
('591df5c8e8d25d9a7d894bfda2006b9d', '宿舍剩餘床位', 0, 1442851200, 57600, ''),
('7ce29fef4925e50991b899d635757fae', '', 0, 0, 0, ''),
('88b060d8ec252966265dc7ca4a9f1c37', '【綜科館第三演講廳】【職場服務體驗課程說明會】', 0, 1443456000, 36000, '職場服務體驗(工讀生)課程說明會，有需要同學歡迎踴躍參加'),
('a1d012c756f3f460d67a921d3a12c059', '【綜科館第一演講廳】【女生住宿說明會】', 0, 1443542400, 64800, '住宿女新生務必參加'),
('aa0a3eab90b0a5244d808de9d049839a', '', 0, 0, 0, ''),
('afd565a39fb3ffdda5b087f356eccc04', '校外賃居調查表', 0, 1443024000, 0, '在外面租屋的同學(不包含住宿、親戚家)\r\n請找我(班代)填寫租屋調查表，或是將資料傳給我\r\n附圖:<a href="http://i.imgur.com/Ms5ZYBi.jpg">http://i.imgur.com/Ms5ZYBi.jpg</a>'),
('cb56fa7a4849452a1a8421179118c9ee', '住宿費及申請表繳交', 0, 1442851200, 0, ''),
('e32e459e455ecddecd1914a218bab5a7', '', 0, 0, 0, ''),
('f70a50fc97ebd20ac51d0a8492d57f53', '【中正館】【機構說明博覽會】', 0, 1442937600, 64800, ''),
('fca48e51105b6341859bd30ec1c061e3', '【綜合科館第一演講廳】【大學入門課程】 北科校史館及圖書館資料庫指引介紹', 0, 1443110400, 46800, '課程總表:http://tinyurl.com/opoesly\r\n座位圖:http://tinyurl.com/q7l6wxd');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
