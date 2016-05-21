-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 17:50
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `E-mail` text NOT NULL,
  `Login` text NOT NULL,
  `Password` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Name`, `Surname`, `E-mail`, `Login`, `Password`, `type`) VALUES
(1, 'a', 'a', 'jhj@g', 'abzal', 'qwerty', 0),
(2, 'admin', 'admin', 'kinayatov@gmail.com', 'admin', 'admin123', 1),
(3, 'asdsa', 'sadas', 'asdasd@dsa', 'awqdwa', '55875', 0),
(4, 'asd', 'asdsa', 'asda@asd', 'sadas', '852', 0),
(5, 'sadasdasd', 'dasd', 'asdsa@asd', 'adminsdsadas', 'sad', 0),
(6, 'sadsa', 'sdfsd', 'asdsa@asd', 'dsadas', 'fdsfdsfds', 0),
(7, 'Aigera', 'Aitpaeva', 'sdas@asAsdsa', 'Aigera', '123', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `zayavki`
--

CREATE TABLE `zayavki` (
  `ID` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Category` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`ID`, `Name`, `Category`, `Message`) VALUES
(9, 'Abzal', 'SDU Arena', 'Like this'),
(10, 'Drysh', 'GYM', 'Can I go to the GYM 4 times a week? I want to make my body well build.'),
(11, 'abzal', 'Pool', 'fjfhjgjmg'),
(12, 'abzal', 'PS4', 'aSFsdgfasdgsfdgsad');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `zayavki`
--
ALTER TABLE `zayavki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
