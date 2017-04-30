-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-04-30 17:41:15
-- 服务器版本： 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `paper`
--

INSERT INTO `paper` (`id`, `title`) VALUES
(1, '腾讯2017春招笔试真题编程题集合'),
(2, '腾讯2016研发工程师笔试题（一）'),
(3, '132');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `paperID` int(11) NOT NULL,
  `questionNum` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `questionDescribe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `optionA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionB` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionC` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionD` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionF` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`id`, `paperID`, `questionNum`, `type`, `questionDescribe`, `score`, `answer`, `optionA`, `optionB`, `optionC`, `optionD`, `optionE`, `optionF`) VALUES
(1, 2, 1, 1, '爸爸去哪儿中的3对父子站成一排，各自父子之间不能相邻，比如石头不能和郭涛挨着，以此类推，共有几种站法？ ', 5, 1, '120', '48', '240', '144', NULL, NULL),
(2, 2, 2, 1, '设k1,k2是矩阵A的两个不同的特征值，a与b是A的分别属于k1,k2的特征向量，则由a与b是： ', 5, 1, '线性相关', '线性无关', '对应分量成比例', '可能有零向量', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `deleted`) VALUES
(1, 'qwe', '123', 1, 0),
(2, 'qwee', '202cb962ac59075b964b07152d234b70', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
