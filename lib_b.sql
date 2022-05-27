-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2022 г., 14:58
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lib_b`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books_file`
--

CREATE TABLE `books_file` (
  `id` int NOT NULL,
  `tittle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `books_file`
--

INSERT INTO `books_file` (`id`, `tittle`, `description`, `status`) VALUES
(43, 'Книга2', 'Очень интересная2', 0),
(52, '1', '323', 0),
(53, '2', '3232', 0),
(54, '232323', '23232323', 0),
(56, 'Нет', 'Идей', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `upload`
--

CREATE TABLE `upload` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `upload`
--

INSERT INTO `upload` (`id`, `name`, `file`, `status`) VALUES
(6, 'file2.txt', 'uploads/защита.txt', 0),
(7, 'Новый текстовый документ (3).txt', 'uploads/Новый текстовый документ (3).txt', 0),
(8, 'Новый текстовый документ.txt', 'uploads/Новый текстовый документ.txt', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books_file`
--
ALTER TABLE `books_file`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books_file`
--
ALTER TABLE `books_file`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
