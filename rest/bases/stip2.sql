-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 10:47
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stip2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `disc`
--

CREATE TABLE `disc` (
  `id_disc` int(11) NOT NULL,
  `naim_d` varchar(150) NOT NULL,
  `ocenka` int(11) NOT NULL,
  `id_stud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `disc`
--

INSERT INTO `disc` (`id_disc`, `naim_d`, `ocenka`, `id_stud`) VALUES
(1, 'математика', 2, 7),
(2, 'математика', 2, 7),
(4, 'математика', 2, 7),
(5, 'математик', 5, 8),
(6, 'математика', 5, 8),
(7, 'математика', 5, 8),
(8, 'математика', 5, 8),
(9, 'математика', 5, 8),
(10, 'математика', 3, 8),
(11, 'test', 4, 7),
(12, 'test12', 3, 8),
(13, 'математика', 2, 8),
(14, 'физика', 3, 8),
(15, '4', 23, 7),
(16, '1', 24, 8),
(17, '1', 333, 7),
(18, '9', 343, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `gruppa`
--

CREATE TABLE `gruppa` (
  `id_grupp` int(11) NOT NULL,
  `name_grup` varchar(15) NOT NULL,
  `spec` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gruppa`
--

INSERT INTO `gruppa` (`id_grupp`, `name_grup`, `spec`) VALUES
(12, 'П1с', 'программисты'),
(13, 'П1с', 'программисты'),
(14, 'П3-С', 'программисты'),
(15, 'fd', 'программисты'),
(16, '2', 'программисты'),
(17, 'test', 'koder'),
(18, 'test', 'koder'),
(19, 'П4', 'ПРограммисты'),
(20, 'test', 'koder'),
(21, 'test2', 'koder'),
(22, 'test2', 'koder'),
(23, 'test', 'koder'),
(24, 'web', 'web-программист'),
(25, 'd', 'dd');

-- --------------------------------------------------------

--
-- Структура таблицы `stud`
--

CREATE TABLE `stud` (
  `id_stud` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `oсenka` decimal(10,2) NOT NULL,
  `data_p` date NOT NULL,
  `date_o` date NOT NULL,
  `nachislenno` decimal(10,2) NOT NULL,
  `udergano` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stud`
--

INSERT INTO `stud` (`id_stud`, `id_grup`, `fio`, `oсenka`, `data_p`, `date_o`, `nachislenno`, `udergano`) VALUES
(7, 16, 'Иванов', '2.10', '2012-12-12', '2013-12-12', '1.00', '1'),
(8, 18, 'Петров', '1.00', '2019-11-17', '2019-11-17', '1.00', '12'),
(9, 13, 'test', '2.50', '2022-10-07', '2022-10-05', '1.00', '1'),
(10, 24, 'Звягинцев', '3.00', '2222-12-12', '1212-12-12', '12.10', '11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`id_disc`),
  ADD KEY `id_stud` (`id_stud`);

--
-- Индексы таблицы `gruppa`
--
ALTER TABLE `gruppa`
  ADD PRIMARY KEY (`id_grupp`);

--
-- Индексы таблицы `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id_stud`),
  ADD KEY `id_grup` (`id_grup`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `disc`
--
ALTER TABLE `disc`
  MODIFY `id_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `gruppa`
--
ALTER TABLE `gruppa`
  MODIFY `id_grupp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `stud`
--
ALTER TABLE `stud`
  MODIFY `id_stud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `disc`
--
ALTER TABLE `disc`
  ADD CONSTRAINT `disc_ibfk_1` FOREIGN KEY (`id_stud`) REFERENCES `stud` (`id_stud`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `stud`
--
ALTER TABLE `stud`
  ADD CONSTRAINT `stud_ibfk_1` FOREIGN KEY (`id_grup`) REFERENCES `gruppa` (`id_grupp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
