-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 11 2018 г., 02:47
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `CallBack`
--

INSERT INTO `CallBack` (`ID_Request`, `Name`, `PhoneNumber`, `TimeOfRequest`) VALUES
(1, 'Bvz', 345678, '2017-12-25 16:33:26'),
(2, 'uyiuj', 5678, '2017-12-25 16:35:58'),
(3, 'Name', 34567, '2017-12-25 16:42:15'),
(4, 'Юля', 123456789, '2018-01-10 16:33:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Medical_Card`
--

INSERT INTO `Medical_Card` (`ID_Card`, `ID_User`, `Last_visitation`, `State_of_Teeth`, `Recommendations`) VALUES
(1, 58, '14/01/2017. Ренген полости рта. 15/01/2017. Операция по удалению зуба (№8). 22/01/2017. Осмотр после операции. 15/06/2017. Плановый осмотр. 15/12/2017. Плановый осмотр. ', '15/01/2017. Удаление зуба (№8). Остальные зубы в норме. 22/01/2017. Осмотр после операции. Восстановление десен после операции происходить без осложнений. 15/06/2017. Зубы во всей полости рта в норме. Наблюдается небольшое воспаление десен. 15/12/2017. Зубы во всей полости рта в норме. ', '15/01/2017. Полоскать полость рта отваром трав: ромашка, кора дуба.15/06/2017. Сменить жесткость зубной щетки.15/12/2017. Полоскать полость рта средством Listerine.'),
(2, 54, '15/01/2017. Операция по удалению зуба (№6).', '15/01/2017. Удаление зуба (№6). Остальные зубы в норме.', '15/01/2017. Полоскать полость рта отваром трав: ромашка, кора дуба.');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`ID_Review`, `Name`, `Review`, `ID_Doctor`) VALUES
(14, 'Алёна Игоревна ', 'Добрый вечер! Хочу поделиться впечатлениями. Всю жизнь до смерти боюсь стоматологов, и по этой причине, хожу к ним как на каторгу, и по той же причине, запущенное состояние зубов. Пришла в клинику с целью удаления зуба, так как щека уже начинала опухать и прям за 2 недели до свадьбы. Сначала проверили зубы, посоветовали все-таки взяться за лечение. Думала, будет больно сейчас, все, что - нибудь случится со мной, но нет! Мне укололи анестезию, сижу, ничего не чувствую и через минут 10 уже накладывали швы, я даже не поняла, что уже все удалили!) в общем, я очень - очень довольна и сервисом, и самим персоналом! После этого посещения смело могу сказать, что бояться я практически перестала! И все зубы однозначно буду лечить там.', 1),
(17, 'Галина и Фёдор', 'Новая, очень просторная и уютная клиника ,мы с мужем проходили мимо и увидели открытие Healthyteeth. \r\nПриветливая администратор Ксения угостила вкусным кофе, доктор Мария Александровна провела нам консультацию и составила план лечения. Качественная и недорогая проф. гигиена . Остались очень довольны сервисом и компетенцией докторов.', 2),
(18, 'Андрей Разин', 'Спасибо стоматологу Петрова Д.М. Лечил зубы у нее в HealthyTeeth на Оптиков. Понравилось то, что у доктора профессиональный подход, а лечиться не больно, я даже задремал в стоматологическом кресле!:)\r\nРад, что есть такие классные специалисты как Петрова Д.М.!!', 1),
(19, 'Виктория', 'Регулярно прихожу на осмотр и чистку к своему лечащему терапевту - Кириенко Сергей Геннадьевич! Замечательный специалист, всем рекомендую!', 3),
(20, 'Альбина Евгеньевна ', 'Прошёл месяц после окончания протезирования в клинике HealthyTeeth и сейчас могу с уверенностью сказать, что довольна полученным результатом. Коронки поставлены очень аккуратно и я чувствую себя с ними комфортно. Клинику и врача выбирала по отзывам в интернете, рада что не ошиблась и попала на приём к замечательному врачу- ортопеду. Мурадов Бахруз Бахлулович - профессионал в своём деле,на мой взгляд, высококлассный специалист, работает четко, уверенно и безупречно, добиваясь хорошего результата с первого раза. Понравилось его отношение к клиентам, его доброжелательность и внимательность. Доктор подробно объясняет весь процесс лечения, учитывает специфику зубов и даёт полезные рекомендации на будущее. Хочется также отметить слаженность и профессионализм всего коллектива клиники и поблагодарить специалистов, у которых я проходила предварительное лечение: терапевтов Силкину Марию Николаевну, Родионцева Александра Александровича, пародонтолога Старостину Екатерину Леонидовну, а также отдельное спасибо ассистентке доктора Анастасии и техникам, которые изготовили мои коронки. Желаю клинике процветания и поздравляю всех с наступающим Новым Годом!', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID_User` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `PhoneNumber` char(15) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID_User`, `Name`, `Surname`, `PhoneNumber`, `Email`) VALUES
(1, 'Admin', 'Admin', '3141592654', 'healthyteeeth@gmail.com'),
(54, 'Алёна', 'Лысенко', '390456801196', 'qwerty@qwerty'),
(55, 'Таня', 'Харченко', '380446501196', 'thisismyemail@gmail.com'),
(57, 'Александр', 'Лукьянов', '38055079632', 'email@gmail.com'),
(58, 'Юрий', 'Цезарь', '380456123789', 'salatiswanted@gmail.com');

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
  MODIFY `ID_Request` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Medical_Card`
--
ALTER TABLE `Medical_Card`
  MODIFY `ID_Card` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Request_for_visitation`
--
ALTER TABLE `Request_for_visitation`
  MODIFY `ID_Request_for_visitation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID_Review` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
