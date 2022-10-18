-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2022 г., 10:45
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
-- База данных: `rekadr_fin`
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
(1, 1, 13, 8, '2020-03-12', '2020-03-15', 'Не принят', NULL),
(2, 2, 11, 7, '2020-04-15', '2020-04-16', 'Принят', NULL),
(3, 3, 21, 21, '2020-05-15', '2020-05-18', 'Принят', NULL),
(4, 4, 17, 18, '2020-05-13', NULL, NULL, NULL),
(5, 5, 12, 19, '2020-05-12', NULL, NULL, NULL),
(6, 6, 12, 20, '2020-02-11', '2020-02-12', 'Не принят', NULL),
(7, 7, 21, 12, '2020-05-07', '2020-05-08', 'Не принят', NULL),
(9, 8, 22, 20, '2020-04-24', '2020-04-27', 'Принят', NULL),
(10, 77, 11, 7, '2020-05-26', NULL, NULL, NULL),
(11, 77, 11, 7, '2020-05-26', NULL, NULL, NULL),
(12, 77, 11, 7, '2020-05-26', NULL, NULL, NULL),
(13, 77, 11, 7, '2020-05-26', NULL, NULL, NULL),
(14, 20, 11, 7, '2020-05-25', NULL, NULL, NULL),
(15, 20, 11, 7, '2020-05-25', NULL, NULL, NULL),
(16, 20, 16, 7, '2020-05-18', NULL, NULL, NULL),
(17, 33, 16, 7, '2020-05-18', NULL, NULL, NULL);

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
(22, 'Медицинская '),
(23, 'Пищевая '),
(24, 'Легкая '),
(25, 'Машиностроение'),
(26, 'Металлургическая'),
(27, 'Электронная'),
(28, 'Химическая'),
(29, 'Строительство '),
(30, 'Радиопромышленность и средства связи'),
(31, 'Добывающая'),
(32, 'Нефтяная'),
(33, 'Транспортная'),
(34, 'Образование'),
(35, 'Экономическая'),
(36, 'Нефтегазовая'),
(37, 'Торговая'),
(38, 'Сельское хозяйство'),
(39, 'IT'),
(40, 'It2');

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
(20, 'Врач', 22),
(21, 'Фармацевт', 22),
(22, 'Кондитер', 23),
(23, 'Пекарь', 23),
(24, 'Повар', 23),
(25, 'Модельер-конструктор', 24),
(26, 'Портная', 24),
(27, 'Швея', 24),
(28, 'Слесарь', 25),
(29, 'Сварщик', 25),
(30, 'Литейщик', 25),
(31, 'Проходчик', 31),
(32, 'Шахтер', 31),
(33, 'Забойщик', 31),
(34, 'Бетонщик', 29),
(35, 'Каменщик', 29),
(36, 'Монтажник', 29),
(37, 'Закройщик', 24),
(38, 'Сталевар', 26),
(39, 'Прокатчик', 26),
(40, 'Геолог', 36),
(41, 'Геофизик', 36),
(42, 'Инженер бурения', 36),
(43, 'Штукатур', 29),
(44, 'Плиточник', 29),
(45, 'Крановщик', 29),
(46, 'Плотник', 29),
(47, 'Стекольщик', 29),
(48, 'Кассир', 37),
(49, 'Искусствовед', 34),
(50, 'Реставратор', 34),
(51, 'Агроном', 38),
(52, 'Механизатор', 38),
(53, 'Ветеринар', 38);

-- --------------------------------------------------------

--
-- Структура таблицы `rabotodatel`
--

CREATE TABLE `rabotodatel` (
  `id_r` int(11) NOT NULL,
  `d_r` date NOT NULL,
  `naim_r` varchar(255) DEFAULT NULL,
  `tel_r` varchar(30) DEFAULT NULL,
  `kl_d` varchar(100) DEFAULT NULL,
  `kl_fio` varchar(255) DEFAULT NULL,
  `adres_r` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rabotodatel`
--

INSERT INTO `rabotodatel` (`id_r`, `d_r`, `naim_r`, `tel_r`, `kl_d`, `kl_fio`, `adres_r`) VALUES
(1, '2020-01-10', 'ИП Иванов', '8 (800) 555 35 35', 'Директор', 'Иванов И.И.', 'Белая Калитва, пр. Платовский, 116'),
(2, '2020-02-02', 'ООО \"Аптека\"', '8 (800) 111 22 33', 'Фармацевт', 'Сидорова С.С.', 'Белая Калитва, пр.Баклановский, 109'),
(4, '2020-03-15', 'ООО \"Швейная мастерская\"', '8(928) 222 23 23', 'Директор', 'Петрова П.П.', 'Белая Калитва, Крылова, 13'),
(5, '2020-03-06', 'ОАО \"Электросила\"', '+7 (863) 587-44-77', 'Специалист по кадрам', 'Пирогов Н.П.', 'Белая Калитва, пер.Высоковольтный 123'),
(6, '2020-05-12', 'ООО \"Пекарня\"', ' 8 (863) 334 -45 56', 'Секретарь', 'Попова П.П.', 'Белая Калитва, пр.Платовский, 110'),
(7, '2020-05-12', 'ООО \"Взрывные цены\"', '8 (863) 333 44 54', 'Директор', 'Рогов Р.Р.', 'Белая Калитва, ул.Железнодорожная, 17'),
(8, '2020-04-22', 'ООО \"МарГео\"', ' 8 (863) 223 -67-55', 'Директор', 'Попов А.П.', 'Белая Калитва, пр.Баклановский, 199'),
(9, '2020-05-06', 'ооо \"Живой мир\"', ' 8 (863) 355 -98-77', 'Секретарь', 'Черникова Т.Т.', 'Белая Калитва, ул.Благодатная, 17'),
(10, '2020-02-19', '\"БСМП №1\"', ' 8 (863) 562 -25-11', 'Начальник отдела кадров', 'Федорченко Ф.А.', 'Белая Калитва, ул.Спортивная, 34');

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
(7, '2020-04-02', 'Ольхова Анна Петровна', '1998-01-08', 'Женский', 'Россия', 'Новочеркасск, Чехова, 25, кв 3', '89008888888', 'Среднее', 2, 'Технолог швейного производства', 'Замужем'),
(8, '2020-04-14', 'Андреев Антон Антонович', '2000-04-04', 'Мужской', 'Россия', 'Свободный 19', '88005553535', 'Среднее', 0, 'Программист', 'Холост'),
(9, '2020-04-23', 'Ковалев Юрий Олегович', '1987-07-15', 'Мужской', 'Россия', 'Ленина, 22', '88005553535', 'Высшее', 7, 'Бухгалтер', 'Холост'),
(12, '2020-02-20', 'Пригонец Карина Михайловвна', '1997-09-22', 'Женский', 'Иностранное', 'Белая Калитва, ул.Космонавтов, 22', '8928 111 22 21', 'Среднее', 0, 'Специалист по земельно-имущественным отношениям', 'Не замужем'),
(16, '2020-03-04', 'Мещерякова Юлия Сергеевна', '1989-10-09', 'Женский', 'Россия', 'Белая Калитва, ул.Песчаная, 2', '8928 999 88 45', 'Среднее', 1, 'Продавец непродовольственных товаров', 'Не замужем'),
(17, '2020-02-28', 'Затолокина Юлия Владимровна', '1997-10-09', 'Женский', 'Россия', 'Белая Калитва, ул.Песочная, 45', '8909 445 66 55', 'Высшее', 3, 'Бухгалтер', 'Замужем'),
(18, '2020-04-14', 'Ткачук Людмила Николаевна', '1995-06-14', 'Женский', 'Россия', 'Белая Калитва, ул.Прямая, 16', '892897764451', 'Среднее', 2, 'Повар', 'Не замужем'),
(19, '2019-10-23', 'Соловьева Ульяна Германовна', '1989-05-12', 'Женский', 'Иностранное', 'Белая Калитва, ул.Чапаева, 2г', '89281557561', 'Среднее', 7, 'Медицинская сестра', 'Замужем'),
(20, '2019-09-01', 'Каменева Наталья Сергеевна', '1988-01-17', 'Женский', 'Россия', 'Белая Калитва, пер.Сводобный, 29', '89281879084', 'Среднее', 1, 'Фельдшер', 'Не замужем'),
(21, '2019-11-09', 'Лущан Алексей Павлович', '1996-11-04', 'Мужской', 'Иностранное', 'Белая Калитва, ул.Щорса, 25', '89612899509', 'Высшее', 6, 'Землеустройство', 'Холост'),
(22, '2022-10-17', 'Дилятин  В.И', '2022-10-17', 'Мужской', 'Иностранное', 'Владивосток прибрежная д 17', '7777777777', 'Высшее', 12, 'врач', 'Женат');

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
(3, 'dir', 'dir', 'Петров П.П.', 'Директор'),
(9, 'spec', 'spec', 'Светлакова Т.И.', 'Специалист'),
(10, 'temn', 'temn1', 'Темников Валентин Григорьевич', 'Специалист'),
(11, 'temn', 'temn1', 'Темников Валентин Григорьевич', 'Специалист');

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
(11, 4, 'Швея-мотористка', 1, 5600, 'Полная', '2020-05-20', 27),
(12, 2, 'Фармацевт', 2, 7800, 'Полная', '2019-11-13', 21),
(13, 5, 'Слесарь-электрик', 1, 16700, 'Полная', '2020-02-12', 28),
(15, 4, 'Швея', 1, 13700, 'Полная', '2020-03-23', 27),
(16, 6, 'Повар', 2, 14000, 'Полная', '2020-04-24', 24),
(17, 6, 'Пекарь', 2, 14500, 'Полная', '2020-05-06', 23),
(18, 6, 'Кондитер', 3, 16000, 'Полная', '2020-04-08', 22),
(19, 9, 'Ветеринар', 1, 23000, 'Полная', '2020-05-06', 53),
(20, 9, 'Продавец-кассир', 2, 13000, 'Полная', '2020-05-07', 48),
(21, 8, 'Геодезист', 1, 34000, 'Вахта', '2020-05-15', 40),
(22, 10, 'Фельдшер', 1, 22500, 'Полная', '2020-03-16', 20);

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
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `otrasl`
--
ALTER TABLE `otrasl`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `prof`
--
ALTER TABLE `prof`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `rabotodatel`
--
ALTER TABLE `rabotodatel`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `soiskatel`
--
ALTER TABLE `soiskatel`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `vakansiya`
--
ALTER TABLE `vakansiya`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
