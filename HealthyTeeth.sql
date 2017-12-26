-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2017 г., 05:57
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `HealthyTeeth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `CallBack`
--

CREATE TABLE IF NOT EXISTS `CallBack` (
  `ID_Request` int(11) NOT NULL,
  `Name` text NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `TimeOfRequest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `CallBack`
--

INSERT INTO `CallBack` (`ID_Request`, `Name`, `PhoneNumber`, `TimeOfRequest`) VALUES
(1, 'Bvz', 345678, '2017-12-25 16:33:26'),
(2, 'uyiuj', 5678, '2017-12-25 16:35:58'),
(3, 'Name', 34567, '2017-12-25 16:42:15');

-- --------------------------------------------------------

--
-- Структура таблицы `Request_for_visitation`
--

CREATE TABLE IF NOT EXISTS `Request_for_visitation` (
  `ID_Request_for_visitation` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Type_of_visitation` int(11) NOT NULL,
  `ID_Doctor` int(11) NOT NULL,
  `Date_of_visitation` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Request_for_visitation`
--

INSERT INTO `Request_for_visitation` (`ID_Request_for_visitation`, `ID_User`, `ID_Type_of_visitation`, `ID_Doctor`, `Date_of_visitation`) VALUES
(1, 45, 0, 0, '2017-12-29'),
(8, 50, 3, 5, '2017-12-30');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID_User` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Birthday` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID_User`, `Name`, `Surname`, `PhoneNumber`, `Email`, `Birthday`) VALUES
(1, 'Имя', 'Фамилия', 2147483647, 'dfghjk@gmail.com', NULL),
(17, 'rtyu', '567890', 56789, 'asdfghj@dfghj', NULL),
(18, '456789', '3546789', 3546789, 'dfgh@fghjk', NULL),
(19, 'Name', 'Surname', 12345678, 'sdfghjk@dfghj', NULL),
(20, '567', 'yiu', 567, '5678@dfgh', NULL),
(21, 'hjvhujy', 'ubhubu', 67772, 'ghcvhg@gkldfmgkl', NULL),
(25, 'fgjk', 'jkjj', 456789, 'gjhklk@trfhgj', NULL),
(34, '345678', 'fghjk', 67890, 'fghj@hj', NULL),
(36, 'Tania', '567', 45678, 'sdfghj@sdfgh', NULL),
(39, 'gjhk', 'hjk', 57687, 'ghj2GHJ2@tf', NULL),
(40, 'iuy', 'iuy', 567, 'jhg@gh', NULL),
(41, 'Namedfghkjl', 'Фамилия', 34, 'sd@sd', NULL),
(42, 'fghj', 'ghjk', 6789, 'fghj@fghj', NULL),
(45, 'RequestTry', 'TryTry', 3456789, 'sdfgh@dfghj', NULL),
(46, 'RequestTry', 'TryTry', 3456789, 'sdfgh@dfghj', NULL),
(47, 'RequestTry', 'TryTry', 3456789, 'sdfgh@dfghj', NULL),
(48, 'RequestTry', 'TryTry', 3456789, 'sdfgh@dfghj', NULL),
(49, 'qwerty', 'rtyu', 45678, 'fgh@tyu', NULL),
(50, 'qwerty', 'rtyu', 45678, 'fgh@tyu', NULL),
(51, 'qwerty', 'rtyu', 45678, 'fgh@tyu', NULL),
(52, 'qwerty', 'rtyu', 45678, 'fgh@tyu', NULL),
(53, 'qwerty', 'rtyu', 45678, 'fgh@tyu', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `CallBack`
--
ALTER TABLE `CallBack`
  ADD PRIMARY KEY (`ID_Request`);

--
-- Индексы таблицы `Request_for_visitation`
--
ALTER TABLE `Request_for_visitation`
  ADD PRIMARY KEY (`ID_Request_for_visitation`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `CallBack`
--
ALTER TABLE `CallBack`
  MODIFY `ID_Request` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Request_for_visitation`
--
ALTER TABLE `Request_for_visitation`
  MODIFY `ID_Request_for_visitation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
