-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 18 2016 г., 19:49
-- Версия сервера: 5.7.12-0ubuntu1
-- Версия PHP: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rapunzel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comcom`
--

CREATE TABLE `comcom` (
  `commented_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `deep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `deep`) VALUES
(1, '228', 0),
(2, '313', 0),
(11, 'gd', 0),
(12, 'erw', 0),
(13, 'tr', 0),
(14, 'eqw', 0),
(15, '231', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'The life is over', 'texttexttexttexttext texttexttexttext text texttexttexttext texttexttexttexttext text texttext texttext texttexttext text'),
(2, 'God is dead', 'exte exteexte exteexteexte exte exteexte exteexteexte exte exte exteexte exteexteexte exte exteexte exteexteexte exte exteexte exteexteexte exte exte exteexte exteexteexte');

-- --------------------------------------------------------

--
-- Структура таблицы `newscomments`
--

CREATE TABLE `newscomments` (
  `news_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `newscomments`
--

INSERT INTO `newscomments` (`news_id`, `comment_id`) VALUES
(1, 1),
(1, 2),
(1, 11),
(1, 14),
(2, 12),
(2, 13),
(2, 15);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comcom`
--
ALTER TABLE `comcom`
  ADD PRIMARY KEY (`commented_id`,`comment_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newscomments`
--
ALTER TABLE `newscomments`
  ADD PRIMARY KEY (`news_id`,`comment_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
