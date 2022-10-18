-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 10:38
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
-- База данных: `kirpich`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id_tov` int(11) NOT NULL,
  `name_tovar` varchar(50) DEFAULT NULL,
  `razmer` varchar(14) DEFAULT NULL,
  `morozost` varchar(5) DEFAULT NULL,
  `vodopogl` varchar(6) DEFAULT NULL,
  `teploprovod` varchar(4) DEFAULT NULL,
  `marka` varchar(8) DEFAULT NULL,
  `massa` varchar(5) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `img` varchar(20) DEFAULT NULL,
  `id_tipa` int(1) DEFAULT NULL,
  `sost` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id_tov`, `name_tovar`, `razmer`, `morozost`, `vodopogl`, `teploprovod`, `marka`, `massa`, `price`, `img`, `id_tipa`, `sost`) VALUES
(1, 'Кирпич одинарный, Эмират, Старооскольский', '250*120*65 мм', 'F-75', '7-8%', '', 'М-150', '1,2', '55.00', 'images/1.jpg', 1, 0),
(2, 'Кирпич одинарный, белый руст., старооскольский', '250*120*65 мм', 'F-75', '', '', 'М-175', '1,5', '28.00', 'images', 1, 0),
(3, 'Кирпич одинарный, коричневый руст., старооскольски', '250*120*65 мм', 'F-75', '7-8%', '', 'М-150', '1,3', '24.00', 'images', 1, 0),
(4, 'Кирпич керамический полуторный, коричневый, \"Пена\"', '250х120х88', 'F-75', '10-11%', '', 'М-200', '1,7', '31.00', 'images', 1, 0),
(11, 'Кирпич,одинарный, магма, диабаз', '250*120*65 мм', 'F-150', '', '', 'М-350', '1,2', '49.00', 'images', 2, 0),
(12, 'Экономный клинкерный кирпич, S300DF*, \"lava liso\"', '240*52*52 мм', '', '', '', 'М-200', '1', '50.00', 'images', 2, 0),
(13, 'Экструдированный кирпич Арт. 121 NF', '240х115х71 мм', '', '8%', '', 'М-320', '1,4', '36.00', 'images', 2, 0),
(14, 'Клинкерный кирпич AARHUS Anthrazit', '240x54x71 мм', 'F-100', '', '', 'М-600', '1,5', '54.00', 'images', 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `parol` varchar(25) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `fio`, `email`, `login`, `parol`, `rol`) VALUES
(1, 'Иванов', 'sotona@gmail.com', 'sotons', '1', 'менеджер'),
(2, 'Петров', 'star', 'petrov@mail.com', '2', '2'),
(3, 'Фио ', 'мило', 'логин', '1', '1'),
(4, '', '', '', '', '1'),
(5, 'Фио ', 'мыло', 'Логин', 'pass', '1'),
(6, 'Фио ', 'майл', 'логин', 'pass', '1'),
(7, '', '', '', '', 'менеджер'),
(8, '12w', 'as', 'qs', 'wds', 'менеджер');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id_zakaz` int(11) NOT NULL,
  `kol` int(11) NOT NULL,
  `d_zak` date NOT NULL,
  `d_otp` date NOT NULL,
  `d_opl` date NOT NULL,
  `stat` int(11) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `sp_dost` varchar(100) NOT NULL,
  `id_tov` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id_tov`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id_zakaz`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tov` (`id_tov`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id_tov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id_zakaz` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zakaz_ibfk_3` FOREIGN KEY (`id_tov`) REFERENCES `tovar` (`id_tov`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
