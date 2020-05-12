-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `general`
--

CREATE TABLE `general` (
  `No` int(10) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `general`
--

INSERT INTO `general` (`No`, `Name`, `Password`, `Email`) VALUES
(2, 'ipad', 'asd', 'dfg@ass'),
(3, 'sch', 'qwert', 'asd@qwe'),
(4, '乖', 'qwe', 'qwe@qwe');

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `No` int(10) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `store`
--

CREATE TABLE `store` (
  `No` int(10) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(100) NOT NULL,
  `Address` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AVG_price` int(50) NOT NULL,
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `store`
--

INSERT INTO `store` (`No`, `Name`, `Phone`, `Address`, `AVG_price`, `Class`) VALUES
(1, '蓋飯先生', 75913223, '高雄市楠梓區藍昌路398-15號', 80, 'rice'),
(2, '米湯匙', 73663086, '高雄市楠梓區德賢路218號', 85, 'rice'),
(3, '大黑天', 73636797, '高雄市楠梓區後昌路1162號', 100, 'rice'),
(4, '一群麵食', 73631609, '高雄市楠梓區藍田路397號', 50, 'noodles'),
(5, '一個人', 73645638, '高雄市楠梓區德賢路592巷8號', 80, 'noodles'),
(6, '阿寶米粉羹', 73630590, '高雄市楠梓區翠屏路10號', 50, 'noodles'),
(7, '拾鮮鍋物', 73655979, '高雄市楠梓區德惠路107號', 350, 'hotpot'),
(8, '億品鍋', 73631168, '高雄市楠梓區德民路938-2號', 150, 'hotpot'),
(9, '樂哈哈', 73643836, '高雄市楠梓區德賢路295號1樓', 150, 'hotpot'),
(10, '50嵐', 75915060, '高雄市楠梓區藍昌路398-12號', 60, 'drink'),
(11, '麻古', 73649993, '高雄市楠梓區藍昌路398之11號', 70, 'drink'),
(12, '清心', 73625861, '高雄市楠梓區德中路538號', 50, 'drink');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`No`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`No`);

--
-- 資料表索引 `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`No`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `general`
--
ALTER TABLE `general`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `manager`
--
ALTER TABLE `manager`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store`
--
ALTER TABLE `store`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
