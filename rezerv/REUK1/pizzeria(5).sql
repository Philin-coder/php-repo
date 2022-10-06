-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2020 г., 12:38
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizzeria`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dostavka`
--

CREATE TABLE IF NOT EXISTS `dostavka` (
  `id_d` int(11) NOT NULL,
  `status_d` varchar(10) NOT NULL,
  `id_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kerer`
--

CREATE TABLE IF NOT EXISTS `kerer` (
  `id_k` int(11) NOT NULL,
  `fio` varchar(70) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kerer`
--

INSERT INTO `kerer` (`id_k`, `fio`, `status`) VALUES
(1, 'Сидоренко Сергей Владимирович', 'Свободен'),
(2, 'Хохлов Максим Иванович', 'Занят'),
(3, 'Иглов Николай Андреевич', 'Свободен'),
(4, 'Соловьев Виктор Александрович', 'Свободен ');

-- --------------------------------------------------------

--
-- Структура таблицы `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `id_pizza` int(4) NOT NULL,
  `name` varchar(60) NOT NULL,
  `img` varchar(100) NOT NULL,
  `zena` int(4) NOT NULL,
  `ves` int(18) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pizza`
--

INSERT INTO `pizza` (`id_pizza`, `name`, `img`, `zena`, `ves`, `id_user`) VALUES
(1, 'Американо', 'ргголрол', 300, 350, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `polzov`
--

CREATE TABLE IF NOT EXISTS `polzov` (
  `id_user` int(4) NOT NULL,
  `login` varchar(10) NOT NULL,
  `parol` varchar(10) NOT NULL,
  `fio_user` char(80) NOT NULL,
  `email_u` varchar(80) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `polzov`
--

INSERT INTO `polzov` (`id_user`, `login`, `parol`, `fio_user`, `email_u`, `adres`, `tel`) VALUES
(1, 'reukAV', 'qwerty123', '', '', '', 896456780);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(4) NOT NULL,
  `fio_user` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `fio_user`, `email`, `phone`, `login`, `password`) VALUES
(0, 'Бутова Жанна Владими', 'hhh@mail.r', '+7(904)34-34-34', 'Janna', '12345678');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `id_zak` int(4) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `tel` int(27) NOT NULL,
  `data_d` date NOT NULL,
  `summa_p` int(11) NOT NULL,
  `fio_k` varchar(100) NOT NULL,
  `kol_vo` int(11) NOT NULL,
  `id_user` int(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `oplata` varchar(20) NOT NULL,
  `id_k` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id_zak`, `adres`, `tel`, `data_d`, `summa_p`, `fio_k`, `kol_vo`, `id_user`, `email`, `status`, `oplata`, `id_k`) VALUES
(1, 'ул,Гвардейская 154', 2147483647, '2019-05-14', 600, 'Петров Антон Филипович', 2, 1, 'petrov.anton@mail.ru', 'не доставл', 'карта', 2),
(2, 'ул.Клещева', 2147483647, '2019-05-23', 800, 'Удод Людмила Леонидовна', 3, 1, 'udod.luda@mail.ru', 'Доставлен', 'Яндех кошелек', 3),
(3, 'г Новочеркасск', 2147483647, '2019-05-22', 400, 'Собакевич Антон Владимирович', 1, 1, 'sob.anton@mail.ru', 'не доставл', 'карта', 3),
(4, 'г Ростов', 2147483647, '2019-05-21', 34535, 'Соловьев Вадим Алекксандрович', 5, NULL, NULL, NULL, 'карта', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dostavka`
--
ALTER TABLE `dostavka`
  ADD PRIMARY KEY (`id_d`),
  ADD KEY `id_k` (`id_k`);

--
-- Индексы таблицы `kerer`
--
ALTER TABLE `kerer`
  ADD PRIMARY KEY (`id_k`);

--
-- Индексы таблицы `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id_pizza`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Индексы таблицы `polzov`
--
ALTER TABLE `polzov`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id_zak`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_k` (`id_k`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dostavka`
--
ALTER TABLE `dostavka`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `kerer`
--
ALTER TABLE `kerer`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `polzov`
--
ALTER TABLE `polzov`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dostavka`
--
ALTER TABLE `dostavka`
  ADD CONSTRAINT `dostavka_ibfk_1` FOREIGN KEY (`id_k`) REFERENCES `kerer` (`id_k`);

--
-- Ограничения внешнего ключа таблицы `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `polzov` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `polzov` (`id_user`),
  ADD CONSTRAINT `zakaz_ibfk_2` FOREIGN KEY (`id_k`) REFERENCES `kerer` (`id_k`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
