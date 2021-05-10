-- phpMyAdmin SQL Dump  
-- version 4.8.3  
-- https://www.phpmyadmin.net/  
--  
-- Хост: localhost:3306  
-- Версия сервера: 5.7.24  
-- Версия PHP: 7.3.7  

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;  
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- База данных: `artwork`
--
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `artwork` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;  
USE `artwork`;  
--
-- Структура таблицы `art_info`
--
DROP TABLE IF EXISTS `art_info`;
CREATE TABLE `art_info` (
  `art_id` int(10) NOT NULL,
  `art_name` varchar(50) NOT NULL,
  `art_category` varchar(20) NOT NULL,
  `art_price` int(20) NOT NULL,
  `art_authorname` varchar(50) NOT NULL,
  `art_photo` varchar(50) NOT NULL,
  `art_detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;  
--
-- Очистить таблицу перед добавлением данных `art_info`  
--  
TRUNCATE TABLE `art_info`;  
--
-- Дамп данных таблицы `art_info`
--
INSERT INTO `art_info` (`art_id`, `art_name`, `art_category`, `art_price`, `art_authorname`, `art_photo`, `art_detail`) VALUES
(1, 'Ромашки у балкона', 'Натюрморт', 200000, 'Ефанов Павел', ' ../img/1.jpg', 'Стиль: Кантри    Размер: 100x100 см <br> Холст,акрил  2020год<br>' ),
(2, 'Изоляция', 'Люди', 330000, 'Сперанский Алексей', ' ../img/2.jpg', 'Стиль: Неоклассика, Электика    Размер: 120x100 см <br> Холст,масло,текстурная паста  2020год<br>'),
(3, 'I need the light', 'Пейзаж', 25000,'Испанский Гид','\n../img/3.jpg', 'Стиль:Лофт,Минимализм    Размер: 150x100 см <br> Холст,масло  2021год	<br>'),
(4, 'Огонь изнутри', 'Абстракция', 1500,'Юнусов Тимур', ' ../img/4.jpg', 'Стиль:Электика,Ар-Деко    Размер: 120x100 см <br> Холст,масло  2021год <br>'),
(5, 'Состояние #49', 'Абстракция', 3000, 'Скрипка Андрей', ' ../img/5.jpg', 'Стиль:Лофт,Минимализм    Размер: 150x100 см <br> Холст,акрил  2019год  <br>'),
(6, 'Her hands', 'Люди', 3500, 'Абрамова Татьяна', '../img/6.jpg', 'Стиль:Неоклассика,Минимализм    Размер: 150x110 см <br> Холст,масло  2021год  <br>'),
(7, 'Tree. Shadow', 'Пейзаж', 2000, 'Григорян Юрий', '../img/7.jpeg', 'Стиль:Скандинавский стиль   Размер: 80x80 см <br> Холст,масло  2021год  <br>');
--
-- --------------------------------------------------------
-- Структура таблицы `booking_info`
--
DROP TABLE IF EXISTS `booking_info`;
CREATE TABLE `booking_info` (
  `bart_id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `bart_name` varchar(50) NOT NULL,
  `delivery_address` varchar(50) NOT NULL,
  `bart_quantity` int(10) NOT NULL,
  `bart_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;  
--  
-- Очистить таблицу перед добавлением данных `genre`  
--  
TRUNCATE TABLE `booking_info`; 
--
-- Дамп данных таблицы `booking_info`
--
INSERT INTO `booking_info` (`bart_id` ,  `Name`, `bart_name`,  `delivery_address`, `bart_quantity`, `bart_price`) VALUES
(1,'Ралина', 'Her hands',  'Казань', 5,  12500),
(2,'Ралина', 'Tree. Shadow',  'Казань', 5, 7500),
( 3,'Ралина', 'I need the light', 'Казань', 1,  1900),
( 4,'Инна ', 'Огонь изнутри',  ' Уфа', 1, 1900),
( 5,'Инна ', 'Изоляция',  ' Уфа', 2,  4000),
(6,'Тимур', 'Изоляция', 'EL, Philipins', 2, 6000);
-- --------------------------------------------------------
-- Структура таблицы `customer_info`
--
DROP TABLE IF EXISTS `customer_info`; 
CREATE TABLE `customer_info` (
  `cust_id` int(10) NOT NULL,
  `cust_pwd` varchar(20) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_Fname` varchar(20) NOT NULL,
  `cust_Lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;  
--  
-- Очистить таблицу перед добавлением данных `genre2`  
--  
TRUNCATE TABLE `customer_info`;  
--
-- Дамп данных таблицы `customer_info`
--
INSERT INTO `customer_info` (`cust_id`, `cust_pwd`, `cust_email`, `cust_Fname`, `cust_Lname`)
 VALUES
(1, '123456789', 'ralinagalieva@gmail.com', 'Ралина', 'Галиева'),
(3, 'парольпароль', 'innainnainna@mail.ru', 'Инна', 'Ирдуганова'),
(4, 'урапароль', 'oppaopppa@gmail.com', 'Тимур', 'Фамилия');
-- --------------------------------------------------------
-- Структура таблицы `feedback_info`
--
DROP TABLE IF EXISTS `feedback_info`;  
CREATE TABLE `feedback_info` (
  `feed_id` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `Feed_Comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;  
-- Очистить таблицу перед добавлением данных `orderheader`  --    
TRUNCATE TABLE `feedback_info`; 
--
-- Дамп данных таблицы `feedback_info`
--
INSERT INTO `feedback_info` (`feed_id`, `email_id`, `Feed_Comment`) VALUES
(1, 'ralinagalieva@gmail.com', 'Красивая картина'),
(2, 'oppaopppa@gmail.com', 'Впечатлен');
-- --------------------------------------------------------
--
-- Индексы сохранённых таблиц  
--
-- Индексы таблицы `art_info`
--
ALTER TABLE `art_info`
  ADD PRIMARY KEY (`art_id`);
--
-- Индексы таблицы `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`bart_id`),
  ADD KEY `bart_name` (`bart_name`);
--
-- Индексы таблицы `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`);
--
-- Индексы таблицы `feedback_info`
--
ALTER TABLE `feedback_info`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `email_id` (`email_id`);
--
-- AUTO_INCREMENT для сохранённых таблиц 
--
-- AUTO_INCREMENT для таблицы `art_info`
--
ALTER TABLE `art_info`
  MODIFY `art_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `bart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `feedback_info`
--
ALTER TABLE `feedback_info`
  MODIFY `feed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
