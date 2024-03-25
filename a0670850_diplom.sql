-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.2.4
-- Время создания: Май 29 2022 г., 21:04
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `a0670850_diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appeals`
--

CREATE TABLE `appeals` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user` int(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appeals`
--

INSERT INTO `appeals` (`id`, `theme`, `description`, `user`, `status`) VALUES
(1, 'Кошка бездомная', 'На улице Коминтерна нашел кошку. Кошка светло серого цвета с белой мордочкой, худая видимо долго не ела.', 4, 1),
(2, 'Щенок', 'Спасла щенка, очень худой, раненый', 3, 2),
(3, 'Кошка', 'На улице северный бульвар раненая кошка', 1, 1),
(4, 'Собака', 'Нашел йорка на улице', 4, 2),
(5, 'Котенок', 'Раненый котенок, на стройке на улице строителей д 5', 5, 2),
(6, 'Собака', 'Бешеная собака на ул тайнинская около 5-го дома', 4, 2),
(7, 'Кот', 'Несколько котов возле мусорки на улице Коминтерна', 1, 2),
(8, 'Кошка', 'Раненная кошка на проезде Шокальского', 5, 2),
(9, 'Щенок', 'Нашла щенка на шоссе, сильно истощен', 1, 2),
(10, 'Котенок', 'Кошка родила котенка сфинкса, не можем держать дома', 4, 1),
(11, 'Кошка', 'Кошка найдена возле мусорки ул. Грибоедова д. 5.', 3, 1),
(12, 'Собака', 'Собака очень истощена на ул Сельскохозяйственная д5', 4, 2),
(13, 'Кошка бездомная', 'Нашла кошку породы сиамской очень истощена', 4, 2),
(14, 'Бездомный лабрадор', 'Увидела на улице Тихова около 5-го дома бездомного лабрадора, очень худенький.', 4, 1),
(15, 'Борзая', 'У нас дома живет щенок породы Борзая, мы содержать не можем. Заберите его пожалуйста.', 6, 1),
(16, 'Кошка бездомная', 'Нашла кошечку на улице Ленина у пятого дома, выглядит плохо. Забрать не могу сегодня дела\r\nпомогите пожалуйста', 7, 2),
(17, 'Нашла кошку', 'Нашла кошку со сломанной лапой возле дороги на улице Пушкина у дома 5 заберите пожалуйста очень переживаю( у себя оставить не могу живу на съемной квартире где нельзя держать животных', 8, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `appeals_status`
--

CREATE TABLE `appeals_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appeals_status`
--

INSERT INTO `appeals_status` (`id`, `status`) VALUES
(1, 'В обработке'),
(2, 'Принято');

-- --------------------------------------------------------

--
-- Структура таблицы `mailing`
--

CREATE TABLE `mailing` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mailing`
--

INSERT INTO `mailing` (`id`, `email`) VALUES
(1, ''),
(2, 'tomoe@mail.ru'),
(3, 'kate@mail.ru'),
(4, 'vvedenskaya_katyha@mail.ru'),
(5, 'is22vvedenskayaea@artcollege.ru'),
(6, 'nastya@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pets`
--

INSERT INTO `pets` (`id`, `image`, `name`, `description`, `status`, `view`) VALUES
(1, '../img/pets/1.jpg', 'Антей', 'Антей - милый пес который очень любит гулять и играть. Очень подвижный и любит покушать.', 1, 1),
(2, '../img/pets/10.jpg', 'Бейлиз', 'Бейлиз - очень милая и спокойная кошка. Любит играть с игрушечной мышкой и мячиком.', 1, 2),
(3, '../img/pets/2.jpg', 'Джексон', 'Джексон - серьезный сторожевой пес, дрессированый, знает много команд, любит бегать.', 1, 1),
(4, '../img/pets/3.jpeg', 'Жастин', 'Жастин - спокойный пес, привиредлив в уходе, любит грызть деревянные палки и играть с мячом.', 2, 1),
(5, '../img/pets/4.jpg', 'Зерро', 'Зерро - очень игривый непоседа, требует долгой прогулки и игры с деревянной палкой.', 1, 1),
(6, '../img/pets/8.jpg', 'Домино', 'Домино - милая кошечка, но очень боится громких звуков, требует особого внимания к шерсти.', 1, 2),
(7, '../img/pets/5.jpg', 'Клим', 'Клим - пес-непоседа так как очень часто таскает игрушки чтобы с ним поиграли. Любит короткие прогулки.', 2, 1),
(8, '../img/pets/6.jpg', 'Найки', 'Найки - добрый пес, плохо слышит и требует походы к ветеринару для вылечивания слуха. Очень добрый.', 1, 1),
(9, '../img/pets/7.jpg', 'Олаф', 'Олаф - спокойный, милый пес любит лежать в тени дерева и грызть свежую травку.', 1, 1),
(10, '../img/pets/9.jpg', 'Звездочка', 'Звездочка - кошка которая спит пол дня, а потом играет с мышкой и мячиком.', 1, 2),
(11, '../img/pets/8.jfif', 'Отто', 'Отто - послушный пес который знает множество команд. Умеет искать предметы.', 1, 1),
(12, '../img/pets/9.jfif', 'Борман', 'Борман - милый, дружелюбный пес. Любит находится рядом с детьми и играть с ними.', 2, 1),
(15, '../img/pets/cat.jpg', 'Мурка', 'Мурка - красивая и добрая кошечка. Очень любит играть с игрушечной мышкой. Время проводит в кошачьем домике.', 1, 2),
(16, '../img/pets/cat2.jpg', 'Барсик', 'Барсик - очень игривый кот, очень любит бегать, залезать на деревья. Больше времени проводит около когтеточки.', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `description`, `status`) VALUES
(1, 'Tomoe', 'Приют очень чистый и красивый.', 3),
(2, 'Mari', 'Очень атмосферное место, все такие добрые!', 3),
(3, 'Miko', 'Привезла свою собаку в ветеринарку, все прошло отлично. Спасибо большое!', 3),
(4, 'Kate', 'В приюте очень чисто, животные веселые.', 3),
(5, 'Александра Павловна Шамина', 'ОЧЕНЬ хороший сайт, как то нашла кошку со сломанной лапой, люди очень быстро приехали аккуратно погрузили кошку в машину и увезли. Сегодня эту кошку видела на сайте, видно чувствует себя хорошо)))', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_status`
--

CREATE TABLE `reviews_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews_status`
--

INSERT INTO `reviews_status` (`id`, `status`) VALUES
(1, 'В обработке'),
(2, 'Новое'),
(3, 'Рассмотрено');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'В приюте'),
(2, 'Забрали');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`) VALUES
(1, 'Miko', 2, 'vvedenskaya_katyha@mail.ru', 'fed58e25c6e8f232b4d024258c488f1b'),
(2, 'Admin', 1, 'admin@mail.ru', 'f6fdffe48c908deb0f4c3bd36c032e72'),
(3, 'Kate', 2, 'kate@mail.ru', '94a1108a2e112b21ed07faac3bdaf368'),
(4, 'Tomoe', 2, 'tomoe@mail.ru', '4614e426451678c889164c60a8a5393e'),
(5, 'Анастасия Воронцова', 2, 'avt@mail.ru', '58b459ff4b821260aeb83e4e6f360fb6'),
(6, 'Mari', 2, 'mari@mail.ru', '17bcc025953711a979d446104dfd46d5'),
(7, 'Саша', 2, 'sashashamina02@gmail.com', 'e2afab1b56fa256c01350d1729834ee7'),
(8, 'Александра Павловна Шамина', 2, 'sashashamina02@mail.ru', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Виктор', 2, 'vyme@artcollege.ru', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Структура таблицы `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `views` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `views`
--

INSERT INTO `views` (`id`, `views`) VALUES
(1, 'Собака'),
(2, 'Кошка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `appeals_status`
--
ALTER TABLE `appeals_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `mailing`
--
ALTER TABLE `mailing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `view` (`view`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `reviews_status`
--
ALTER TABLE `reviews_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Индексы таблицы `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `appeals_status`
--
ALTER TABLE `appeals_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `mailing`
--
ALTER TABLE `mailing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `reviews_status`
--
ALTER TABLE `reviews_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD CONSTRAINT `appeals_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appeals_ibfk_2` FOREIGN KEY (`status`) REFERENCES `appeals_status` (`id`);

--
-- Ограничения внешнего ключа таблицы `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `pets_ibfk_2` FOREIGN KEY (`view`) REFERENCES `views` (`id`);

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`status`) REFERENCES `reviews_status` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
