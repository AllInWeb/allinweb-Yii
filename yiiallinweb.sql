-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 01 2014 г., 15:20
-- Версия сервера: 5.5.38-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yiiallinweb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_aliases`
--

CREATE TABLE IF NOT EXISTS `tbl_aliases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `tbl_aliases`
--

INSERT INTO `tbl_aliases` (`id`, `column`, `alias`) VALUES
(1, 'type', 'Тип сайта'),
(2, 'price', 'Стоимость'),
(3, 'period', 'Срок создания'),
(4, 'map', 'Карта проезда'),
(5, 'comments', 'Коментарии'),
(6, 'basket', 'Корзина'),
(7, 'qa', 'Вопросы и оветы'),
(8, 'cms', 'Система управления сайтом(CMS)'),
(9, 'unlimpage', 'Неограниченое количество страниц'),
(10, 'freefill', 'Бесплатное базовое наполнение'),
(11, 'visitstat', 'Статистика посещений'),
(12, 'blog', 'Блог, прайс-лист'),
(13, 'votes', 'Голосование'),
(14, 'rotator', 'Ротатор слайдов'),
(15, 'gallery', 'Галерея'),
(16, 'contact', 'Обратная связь'),
(17, 'catalog', 'Каталог товаров'),
(18, 'forum', 'Форум'),
(19, 'sitemap', 'Создание Sitemap'),
(20, 'google', 'Добавление в Google,Yandex'),
(21, 'huu', 'ЧПУ');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_answers`
--

CREATE TABLE IF NOT EXISTS `tbl_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `question_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `tbl_answers`
--

INSERT INTO `tbl_answers` (`id`, `body`, `question_id`) VALUES
(7, 'Тест', 1),
(8, 'dasd', 2),
(9, 'Answer', 8),
(10, 'Answer', 3),
(11, 'Answer', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_carousel`
--

CREATE TABLE IF NOT EXISTS `tbl_carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` text,
  `price` int(8) NOT NULL,
  `days` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`id`, `image`, `description`, `price`, `days`) VALUES
(3, 'doziros.png', 'Сайт (от англ. website: web — «паутина, сеть» и site — «место», буквально «место, сегмент, часть в сети») — система электронных документов (файлов данных и кода) частного лица или организации в компьютерной сети под общим адресом (доменным именем или IP-адресом)', 3, 4),
(4, 'flower2.png', 'Сайт (от англ. website: web — «паутина, сеть» и site — «место», буквально «место, сегмент, часть в сети») — система электронных документов (файлов данных и кода) частного лица или организации в компьютерной сети под общим адресом (доменным именем или IP-адресом)', 1500, 5),
(5, 'WinART4.png', 'Сайт (от англ. website: web — «паутина, сеть» и site — «место», буквально «место, сегмент, часть в сети») — система электронных документов (файлов данных и кода) частного лица или организации в компьютерной сети под общим адресом (доменным именем или IP-адресом)', 1400, 5),
(6, 'ik.jpg', 'desc', 1500, 4),
(7, 'ip.png', 'fsdf', 3000, 4),
(8, 'stp.png', 'dsfs', 3000, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1404218913),
('m140701_123423_create_tbl_user', 1404218921),
('m140701_125046_insert_tbl_user', 1404219288),
('m140702_113625_create_tbl_carousel', 1404301716),
('m140703_094007_create_tbl_portfolio', 1404381464),
('m140703_115703_update_tbl_portfolio', 1404388698),
('m140704_060908_create_tbl_tarif', 1404455001),
('m140704_072754_add_email_tbl_user', 1404458987),
('m140704_111615_create_tbl_create_tbl_questions', 1404473374),
('m140704_113529_create_tbl_answers', 1404473967),
('m140716_094904_create_tbl_aliases', 1405504505);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `image`, `description`) VALUES
(1, 'ss.png', 'TEXT'),
(2, 'bel2.jpg', 'rfs'),
(4, 'sd.png', 'Миграции — это очень полезный и удобный инструмент для управления структурой бд, значительно упрощающий командную разработку. В этом посте, я покажу примеры часто используемых миграций: create table, insert, update и add column.'),
(5, 'dd.jpg', 'We all living in Anerica!'),
(6, 'mc.jpg', 'Microsoft');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) DEFAULT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` text,
  `date` int(25) DEFAULT NULL,
  `answered` tinyint(1) NOT NULL,
  `actual` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `theme`, `fio`, `email`, `question`, `date`, `answered`, `actual`) VALUES
(1, 'Test', 'Test', 'Test', 'Test', 1404727005, 1, 1),
(2, 't', 'dsd', 'dsad', 'dasd', 1404728599, 1, 1),
(16, 'Test', 'Test', 'viktor.novikov95@gmail.com', 'gbfvzx', 1405600965, 0, 0),
(17, 'Test', 'Test', 'viktor.novikov95@gmail.com', 'Test question', 1406786680, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_tarif`
--

CREATE TABLE IF NOT EXISTS `tbl_tarif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `map` tinyint(1) DEFAULT NULL,
  `comments` tinyint(1) DEFAULT NULL,
  `basket` tinyint(1) DEFAULT NULL,
  `qa` tinyint(1) DEFAULT NULL,
  `cms` tinyint(4) NOT NULL,
  `unlimpage` tinyint(4) NOT NULL,
  `freefill` int(11) NOT NULL,
  `blog` tinyint(4) NOT NULL,
  `visitstat` tinyint(4) NOT NULL,
  `votes` tinyint(4) NOT NULL,
  `rotator` tinyint(4) NOT NULL,
  `gallery` tinyint(4) NOT NULL,
  `contact` tinyint(4) NOT NULL,
  `catalog` tinyint(4) NOT NULL,
  `forum` tinyint(4) NOT NULL,
  `sitemap` tinyint(4) NOT NULL,
  `google` tinyint(4) NOT NULL,
  `huu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tbl_tarif`
--

INSERT INTO `tbl_tarif` (`id`, `type`, `price`, `period`, `map`, `comments`, `basket`, `qa`, `cms`, `unlimpage`, `freefill`, `blog`, `visitstat`, `votes`, `rotator`, `gallery`, `contact`, `catalog`, `forum`, `sitemap`, `google`, `huu`) VALUES
(1, 'Визитка', '123', '2-3дня', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'test', '450', '4d', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Tarif', '', '5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `role`, `email`) VALUES
(1, 'Administrator', 'b59c67bf196a4758191e42f76670ceba', 2, 'viktor.novikov95@gmail.com'),
(14, 'Moderator', 'b59c67bf196a4758191e42f76670ceba', 1, 'noviko95@ukr.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
