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
-- 資料表結構 `collect`
--

CREATE TABLE `collect` (
  `UNo` int(10) NOT NULL,
  `SNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `collect`
--

INSERT INTO `collect` (`UNo`, `SNo`) VALUES
(6, 2),
(6, 3),
(6, 8),
(6, 12);

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
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Good` int(10) NOT NULL,
  `Bad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `store`
--

INSERT INTO `store` (`No`, `Name`, `Phone`, `Address`, `AVG_price`, `Class`, `Good`, `Bad`) VALUES
(1, '蓋飯先生', 75913223, '高雄市楠梓區藍昌路398-15號', 80, 'rice', 2, 0),
(2, '米湯匙', 73663086, '高雄市楠梓區德賢路218號', 85, 'rice', 3, 1),
(3, '大黑天', 73636797, '高雄市楠梓區後昌路1162號', 100, 'rice', 2, 0),
(4, '一群麵食', 73631609, '高雄市楠梓區藍田路397號', 50, 'noodles', 1, 0),
(5, '一個人', 73645638, '高雄市楠梓區德賢路592巷8號', 80, 'noodles', 2, 1),
(6, '阿寶米粉羹', 73630590, '高雄市楠梓區翠屏路10號', 50, 'noodles', 1, 0),
(7, '拾鮮鍋物', 73655979, '高雄市楠梓區德惠路107號', 350, 'hotpot', 0, 0),
(8, '億品鍋', 73631168, '高雄市楠梓區德民路938-2號', 150, 'rice', 2, 0),
(9, '樂哈哈', 73643836, '高雄市楠梓區德賢路295號1樓', 150, 'hotpot', 0, 0),
(10, '50嵐', 75915060, '高雄市楠梓區藍昌路398-12號', 60, 'drink', 2, 1),
(11, '麻古', 73649993, '高雄市楠梓區藍昌路398之11號', 70, 'drink', 0, 0),
(12, '清心', 73625861, '高雄市楠梓區德中路538號', 50, 'drink', 1, 0),
(14, '鶴味道', 75917766, '高雄市楠梓區藍昌路496號', 50, 'rice', 0, 1),
(15, '九州豚將拉麵', 73653378, '高雄市楠梓區惠民路24號', 100, 'noodles', 2, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `No` int(10) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`No`, `Name`, `Password`, `Email`, `Type`) VALUES
(1, 'Sherry', 'qwert12345', 'a1073318@gmail.com', 'manager'),
(4, 'journey', '7788', 'a1073310@gmail.com', 'manager'),
(5, 'pei', '1234', 'a1073304@gmail.com', 'manager'),
(6, '乖', 'qwe', 'dfg@ass', 'general');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `collect`
--
ALTER TABLE `collect`
  ADD PRIMARY KEY (`UNo`,`SNo`),
  ADD KEY `SNo` (`SNo`);

--
-- 資料表索引 `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`No`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`No`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store`
--
ALTER TABLE `store`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `collect`
--
ALTER TABLE `collect`
  ADD CONSTRAINT `collect_ibfk_1` FOREIGN KEY (`SNo`) REFERENCES `store` (`No`),
  ADD CONSTRAINT `collect_ibfk_2` FOREIGN KEY (`UNo`) REFERENCES `user` (`No`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
