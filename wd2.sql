-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 30 2020 г., 13:53
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wd2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `price` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`) VALUES
(2, 'Bicycle 2', '2.png', 1000),
(3, 'Bicycle 3', '3.jpg', 150),
(4, 'Bicycle 4', '4.jpg', 20),
(5, 'Bicycle 5', '5.jpg', 30),
(6, 'Bicycle 6', '6.jpg', 45),
(7, 'Bicycle 7', '7.jpg', 60),
(8, 'Bicycle 8', '8.jpg', 80),
(9, 'Bicycle 9', '9.jpg', 15),
(10, 'Bicycle 10', '10.png', 68),
(11, 'Bicycle 11', '11.jpg', 534),
(12, 'Bicycle 12', '12.jpg', 52),
(27, 'Bicycle 1', '1.png', 150),
(28, 'հեծանիվ', '5.jpg', 120);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
