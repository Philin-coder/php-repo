-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 10:43
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
-- База данных: `rekadr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `napravlenie`
--

CREATE TABLE `napravlenie` (
  `id_n` int(11) NOT NULL,
  `n_n` int(11) DEFAULT NULL,
  `id_v` int(11) DEFAULT NULL,
  `id_s` int(11) DEFAULT NULL,
  `data_n` date DEFAULT NULL,
  `data_p` date DEFAULT NULL,
  `rezultat` varchar(19) DEFAULT NULL,
  `prim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `napravlenie`
--

INSERT INTO `napravlenie` (`id_n`, `n_n`, `id_v`, `id_s`, `data_n`, `data_p`, `rezultat`, `prim`) VALUES
(17, 3, 19, 7, '2020-04-03', '2020-04-14', 'Принят', ''),
(19, 4, 10, 2, '2020-04-07', '2020-04-15', 'Принят', 'Полный рабочий день'),
(20, 5, 20, 8, '2020-03-16', '2020-03-17', 'Принят', '');

-- --------------------------------------------------------

--
-- Структура таблицы `otrasl`
--

CREATE TABLE `otrasl` (
  `id_o` int(11) NOT NULL,
  `naim_o` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otrasl`
--

INSERT INTO `otrasl` (`id_o`, `naim_o`) VALUES
(1, 'Пищевая промышленность '),
(2, 'Машиностроение и металлообработка'),
(3, 'Металлургическая промышленность'),
(4, 'Энергетическое машиностроение и станкостроение'),
(5, 'Химическая промышленность '),
(7, 'Легкая промышленность'),
(8, 'Строительство');

-- --------------------------------------------------------

--
-- Структура таблицы `prof`
--

CREATE TABLE `prof` (
  `id_p` int(11) NOT NULL,
  `naim_p` varchar(100) DEFAULT NULL,
  `id_o` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prof`
--

INSERT INTO `prof` (`id_p`, `naim_p`, `id_o`) VALUES
(5, 'Технолог колбасного цеха', 1),
(11, 'Мастер ЧПУ', 2),
(17, 'Инженер-конструктор', 2),
(18, 'Технолог-химик', 5),
(19, 'Технолог швейного производства', 7),
(20, 'Инженер-энергетик', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `rabotodatel`
--

CREATE TABLE `rabotodatel` (
  `id_r` int(11) NOT NULL,
  `naim_r` varchar(255) DEFAULT NULL,
  `tel_r` varchar(30) DEFAULT NULL,
  `kl_d` varchar(100) DEFAULT NULL,
  `kl_fio` varchar(255) DEFAULT NULL,
  `adres_r` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rabotodatel`
--

INSERT INTO `rabotodatel` (`id_r`, `naim_r`, `tel_r`, `kl_d`, `kl_fio`, `adres_r`) VALUES
(1, 'ИП Иванов', '88005553535', 'Директор', 'Иванов И.И.', 'Новочеркасск, пр. Платовский, 116'),
(2, 'ООО \"Апрель\"', '88005553535', 'Секретарь', 'Сидорова С.С.', 'пр.Баклановский, 109'),
(4, 'ООО \"Фея\"', '88005553535', 'Директор', 'Петрова П.П.', 'Новочеркасск, Крылова, 13'),
(5, 'ОАО \"Электросила\"', '+7 (863) 587-44-77', 'Специалист по кадрам', 'Пирогов Н.П.', 'Новочеркасск, пер.Высоковольтный 123');

-- --------------------------------------------------------

--
-- Структура таблицы `soiskatel`
--

CREATE TABLE `soiskatel` (
  `id_s` int(11) NOT NULL,
  `data_reg` date DEFAULT NULL,
  `fio_s` varchar(100) DEFAULT NULL,
  `data_rog` date DEFAULT NULL,
  `pol` varchar(7) DEFAULT NULL,
  `gragd` varchar(50) DEFAULT NULL,
  `adres_s` varchar(255) DEFAULT NULL,
  `tel_s` varchar(30) DEFAULT NULL,
  `obraz` varchar(50) DEFAULT NULL,
  `stag` int(11) DEFAULT NULL,
  `spec` varchar(255) DEFAULT NULL,
  `sp` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `soiskatel`
--

INSERT INTO `soiskatel` (`id_s`, `data_reg`, `fio_s`, `data_rog`, `pol`, `gragd`, `adres_s`, `tel_s`, `obraz`, `stag`, `spec`, `sp`) VALUES
(2, '2020-04-04', 'Помазкова П.П.', '2020-04-28', 'Женский', 'Россия', 'Ленина, 22', '892877776655', 'Среднее', 0, 'Швея-технолог', 'Не замужем'),
(7, '2020-04-02', 'Ольхова А.А.', '1998-01-08', 'Женский', 'Россия', 'Новочеркасск, Чехова, 25, кв 3', '89008888888', 'Среднее', 10, 'Технолог швейного производства', 'Замужем'),
(8, '2020-03-13', 'Петров И.И.', '1985-12-12', 'Мужской', 'Россия', 'Новочеркасск, ул.Калинина 45', '880045321', 'Высшее', 20, 'Инженер по энергетическому машиностроению', 'Холост'),
(9, '2022-09-28', 'ds', '2022-10-16', 'Мужской', 'Россия', 'sd', '1', 'Начальное', 23, '22', 'Холост');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fio_user` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `fio_user`, `status`) VALUES
(1, 'admin', 'admin', 'Иванов И.И.', 'Администратор'),
(3, 'petr', 'petr', 'Петров П.П.', 'Директор'),
(9, 'spec', '12345', 'Светлакова Т.И.', 'Специалист');

-- --------------------------------------------------------

--
-- Структура таблицы `vakansiya`
--

CREATE TABLE `vakansiya` (
  `id_v` int(11) NOT NULL,
  `id_r` int(11) DEFAULT NULL,
  `dolgn` varchar(25) DEFAULT NULL,
  `k_mest` int(11) DEFAULT NULL,
  `oklad` int(11) DEFAULT NULL,
  `tip_zan` varchar(255) DEFAULT NULL,
  `data_razm` date DEFAULT NULL,
  `id_p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vakansiya`
--

INSERT INTO `vakansiya` (`id_v`, `id_r`, `dolgn`, `k_mest`, `oklad`, `tip_zan`, `data_razm`, `id_p`) VALUES
(10, 1, 'Кондитер', 2, 22000, 'Полная', '2020-04-04', 5),
(18, 2, 'Повар', 5, 6600, 'Стажировка', '2020-04-01', 5),
(19, 4, 'Технолог', 4, 20000, 'Полная', '2020-03-18', 19),
(20, 1, 'Инженер', 2, 32000, 'Полная', '2020-01-21', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `napravlenie`
--
ALTER TABLE `napravlenie`
  ADD PRIMARY KEY (`id_n`),
  ADD KEY `ID_v` (`id_v`),
  ADD KEY `ID_s` (`id_s`);

--
-- Индексы таблицы `otrasl`
--
ALTER TABLE `otrasl`
  ADD PRIMARY KEY (`id_o`);

--
-- Индексы таблицы `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `prof_ibfk_1` (`id_o`);

--
-- Индексы таблицы `rabotodatel`
--
ALTER TABLE `rabotodatel`
  ADD PRIMARY KEY (`id_r`);

--
-- Индексы таблицы `soiskatel`
--
ALTER TABLE `soiskatel`
  ADD PRIMARY KEY (`id_s`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `vakansiya`
--
ALTER TABLE `vakansiya`
  ADD PRIMARY KEY (`id_v`),
  ADD KEY `ID_r` (`id_r`),
  ADD KEY `ID_p` (`id_p`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `napravlenie`
--
ALTER TABLE `napravlenie`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `otrasl`
--
ALTER TABLE `otrasl`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `prof`
--
ALTER TABLE `prof`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `rabotodatel`
--
ALTER TABLE `rabotodatel`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `soiskatel`
--
ALTER TABLE `soiskatel`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `vakansiya`
--
ALTER TABLE `vakansiya`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `napravlenie`
--
ALTER TABLE `napravlenie`
  ADD CONSTRAINT `napravlenie_ibfk_1` FOREIGN KEY (`id_v`) REFERENCES `vakansiya` (`id_v`),
  ADD CONSTRAINT `napravlenie_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `soiskatel` (`id_s`);

--
-- Ограничения внешнего ключа таблицы `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `prof_ibfk_1` FOREIGN KEY (`id_o`) REFERENCES `otrasl` (`id_o`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vakansiya`
--
ALTER TABLE `vakansiya`
  ADD CONSTRAINT `vakansiya_ibfk_1` FOREIGN KEY (`id_r`) REFERENCES `rabotodatel` (`id_r`),
  ADD CONSTRAINT `vakansiya_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `prof` (`id_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
