-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2017 г., 19:53
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
-- Структура таблицы `Medical_Card`
--

CREATE TABLE IF NOT EXISTS `Medical_Card` (
  `ID_Card` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Last_visitation` text NOT NULL,
  `State_of_Teeth` text NOT NULL,
  `Recommendations` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Medical_Card`
--

INSERT INTO `Medical_Card` (`ID_Card`, `ID_User`, `Last_visitation`, `State_of_Teeth`, `Recommendations`) VALUES
(1, 34, '14/01/2017. Ренген полости рта. 15/01/2017. Операция по удалению зуба (№8). 22/01/2017. Осмотр после операции. 15/06/2017. Плановый осмотр. 15/12/2017. Плановый осмотр. ', '15/01/2017. Удаление зуба (№8). Остальные зубы в норме. 22/01/2017. Осмотр после операции. Восстановление десен после операции происходить без осложнений. 15/06/2017. Зубы во всей полости рта в норме. Наблюдается небольшое воспаление десен. 15/12/2017. Зубы во всей полости рта в норме. ', '15/01/2017. Полоскать полость рта отваром трав: ромашка, кора дуба.15/06/2017. Сменить жесткость зубной щетки.15/12/2017. Полоскать полость рта средством Listerine.');

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
-- Структура таблицы `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `ID_Review` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Review` text NOT NULL,
  `ID_Doctor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`ID_Review`, `Name`, `Review`, `ID_Doctor`) VALUES
(1, 'Это мое имя', '', 1),
(2, 'Это мое имя', '', 1),
(3, 'Это мое имя', '', 1),
(4, 'Имя', '', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID_User` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `PhoneNumber` int(16) NOT NULL,
  `Email` text NOT NULL,
  `Birthday` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID_User`, `Name`, `Surname`, `PhoneNumber`, `Email`, `Birthday`) VALUES
(1, 'Имя', 'Фамилия', 2147483647, 'dfghjk@gmail.com', NULL),
(41, 'Name', 'Surname', 34, 'sd@sd', NULL),
(54, 'Alena', 'Pankina', 2147483647, 'qwerty@qwerty', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `CallBack`
--
ALTER TABLE `CallBack`
  ADD PRIMARY KEY (`ID_Request`);

--
-- Индексы таблицы `Medical_Card`
--
ALTER TABLE `Medical_Card`
  ADD PRIMARY KEY (`ID_Card`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Индексы таблицы `Request_for_visitation`
--
ALTER TABLE `Request_for_visitation`
  ADD PRIMARY KEY (`ID_Request_for_visitation`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID_Review`);

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
-- AUTO_INCREMENT для таблицы `Medical_Card`
--
ALTER TABLE `Medical_Card`
  MODIFY `ID_Card` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `Request_for_visitation`
--
ALTER TABLE `Request_for_visitation`
  MODIFY `ID_Request_for_visitation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID_Review` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
