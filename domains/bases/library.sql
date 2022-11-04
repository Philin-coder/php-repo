-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2022 г., 11:45
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `migr_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Author`
--

CREATE TABLE `Author` (
  `ID_Author` int(11) UNSIGNED NOT NULL,
  `Name_A` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Book`
--

CREATE TABLE `Book` (
  `ID_Book` int(11) UNSIGNED NOT NULL,
  `Name_B` varchar(150) NOT NULL,
  `Source` varchar(70) DEFAULT NULL,
  `Date_P` datetime NOT NULL,
  `COUNT` int(11) NOT NULL,
  `Price` float NOT NULL,
  `ID_Genre` int(11) UNSIGNED NOT NULL,
  `ID_Author` int(11) UNSIGNED NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Number_of_P` int(11) NOT NULL,
  `Year_of_Pub` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Delivery`
--

CREATE TABLE `Delivery` (
  `ID_Delivery` int(11) UNSIGNED NOT NULL,
  `ID_Doc` int(11) UNSIGNED NOT NULL,
  `ID_reader` int(11) UNSIGNED NOT NULL,
  `Date_D` datetime NOT NULL,
  `Date_Return_Plan` datetime NOT NULL,
  `Date_Return_Fact` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `doc`
--

CREATE TABLE `doc` (
  `ID_Doc` int(11) UNSIGNED NOT NULL,
  `id_Book` int(11) UNSIGNED NOT NULL,
  `status` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Genre`
--

CREATE TABLE `Genre` (
  `ID_Genre` int(11) UNSIGNED NOT NULL,
  `Name_G` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Структура таблицы `Reader`
--

CREATE TABLE `Reader` (
  `ID_Reader` int(11) UNSIGNED NOT NULL,
  `Name_R` varchar(50) NOT NULL,
  `Date_B` datetime DEFAULT NULL,
  `Adres` varchar(70) NOT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `Date_R` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Author`
--
ALTER TABLE `Author`
  ADD KEY `ID_Author` (`ID_Author`);

--
-- Индексы таблицы `Book`
--
ALTER TABLE `Book`
  ADD KEY `produk_ibfk_1` (`ID_Author`),
  ADD KEY `produk_ibfk_2` (`ID_Genre`),
  ADD KEY `ID_Book` (`ID_Book`);

--
-- Индексы таблицы `Delivery`
--
ALTER TABLE `Delivery`
  ADD KEY `ID_Delivery` (`ID_Delivery`),
  ADD KEY `ID_Doc` (`ID_Doc`),
  ADD KEY `ID_reader` (`ID_reader`);

--
-- Индексы таблицы `doc`
--
ALTER TABLE `doc`
  ADD KEY `ID_Doc` (`ID_Doc`),
  ADD KEY `id_Book` (`id_Book`);

--
-- Индексы таблицы `Genre`
--
ALTER TABLE `Genre`
  ADD KEY `ID_Genre` (`ID_Genre`);

--
-- Индексы таблицы `Reader`
--
ALTER TABLE `Reader`
  ADD KEY `ID_Reader` (`ID_Reader`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Author`
--
ALTER TABLE `Author`
  MODIFY `ID_Author` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Book`
--
ALTER TABLE `Book`
  MODIFY `ID_Book` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Delivery`
--
ALTER TABLE `Delivery`
  MODIFY `ID_Delivery` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `doc`
--
ALTER TABLE `doc`
  MODIFY `ID_Doc` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Genre`
--
ALTER TABLE `Genre`
  MODIFY `ID_Genre` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Reader`
--
ALTER TABLE `Reader`
  MODIFY `ID_Reader` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`ID_Author`) REFERENCES `Author` (`ID_Author`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`ID_Genre`) REFERENCES `Genre` (`ID_Genre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Delivery`
--
ALTER TABLE `Delivery`
  ADD CONSTRAINT `produk_ibfk_4` FOREIGN KEY (`ID_Doc`) REFERENCES `doc` (`ID_Doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_5` FOREIGN KEY (`ID_reader`) REFERENCES `Reader` (`ID_Reader`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `doc`
--
ALTER TABLE `doc`
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_Book`) REFERENCES `Book` (`ID_Book`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
