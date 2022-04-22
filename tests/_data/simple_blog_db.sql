-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Апр 21 2022 г., 14:49
-- Версия сервера: 8.0.28
-- Версия PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `simple_blog_db`
--

DROP TABLE IF EXISTS `Articles`;
DROP TABLE IF EXISTS `Users`;
DROP TABLE IF EXISTS `Article_comments`;
DROP TABLE IF EXISTS `Roles`;

-- --------------------------------------------------------

--
-- Структура таблицы `Articles`
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `article_id` int NOT NULL,
  `article_name` varchar(100) DEFAULT NULL,
  `article_description` text,
  `article_text` text,
  `article_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Articles`
--

INSERT INTO `Articles` (`article_id`, `article_name`, `article_description`, `article_text`, `article_date`, `author_id`) VALUES
(1, 'Как бы то ни было, сплочённость команды профессионалов позволила расправить крылья', 'Товарищи! консультация с широким активом влечет за собой процесс внедрения и модернизации систем массового участия. Не следует, однако забывать, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Товарищи! укрепление и развитие структуры требуют определения и уточнения форм развития. Равным образом консультация с широким активом требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Таким образом сложившаяся структура организации влечет за собой процесс внедрения и модернизации дальнейших направлений развития.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 1),
(2, 'Политика не может не реагировать на полуночный пёсий вой', 'С другой стороны рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке форм развития. Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности способствует подготовки и реализации дальнейших направлений развития. Повседневная практика показывает, что новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 2),
(3, 'Может показаться странным, но спикеры палаты госдумы негодуют', 'Повседневная практика показывает, что дальнейшее развитие различных форм деятельности позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Таким образом консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 1),
(4, 'Финансовый мир очнулся: логотип крупнейшей компании по производству мыльных пузырей', 'Товарищи! укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности способствует подготовки и реализации соответствующий условий активизации.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 1),
(5, 'Франция намерена исследовать, почему младая поросль матереет', 'Задача организации, в особенности же консультация с широким активом требуют определения и уточнения модели развития. Разнообразный и богатый опыт рамки и место обучения кадров играет важную роль в формировании модели развития.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 1),
(6, 'Близость к государственным границам ни к чему нас не обязывает', 'Задача организации, в особенности же постоянный количественный рост и сфера нашей активности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации систем массового участия.', 'Принимая во внимание показатели успешности, сложившаяся структура организации не даёт нам иного выбора, кроме определения кластеризации усилий. Повседневная практика показывает, что консультация с широким активом, в своём классическом представлении, допускает внедрение экспериментов, поражающих по своей масштабности и грандиозности! Внезапно, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Явные признаки победы институционализации превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Как уже неоднократно упомянуто, стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть объединены в целые кластеры себе подобных. В частности, новая модель организационной деятельности однозначно фиксирует необходимость переосмысления внешнеэкономических политик.\n\nВысокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: постоянный количественный рост и сфера нашей активности обеспечивает актуальность прогресса профессионального сообщества. Активно развивающиеся страны третьего мира, инициированные исключительно синтетически, ограничены исключительно образом мышления. Ясность нашей позиции очевидна: реализация намеченных плановых заданий однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Сделанные на базе интернет-аналитики выводы формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.', '2022-04-21 14:47:01', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Article_comments`
--

CREATE TABLE IF NOT EXISTS `Article_comments` (
  `comment_id` int NOT NULL,
  `comment_text` text,
  `comment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL,
  `article_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Article_comments`
--

INSERT INTO `Article_comments` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `article_id`) VALUES
(1, 'Текст комментария 1', '2022-04-21 14:47:01', 1, 4),
(2, 'Текст комментария 2', '2022-04-21 14:47:01', 1, 4),
(3, 'Текст комментария 3', '2022-04-21 14:47:01', 1, 4),
(4, 'Текст комментария 4', '2022-04-21 14:47:01', 1, 4),
(5, 'Текст комментария 5', '2022-04-21 14:47:01', 2, 2),
(6, 'Текст комментария 6', '2022-04-21 14:47:01', 2, 2),
(7, 'Текст комментария 7', '2022-04-21 14:47:01', 2, 2),
(8, 'Текст комментария 8', '2022-04-21 14:47:01', 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `Roles`
--

CREATE TABLE IF NOT EXISTS `Roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Roles`
--

INSERT INTO `Roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'author'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_password` varchar(10) DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`user_id`, `user_name`, `user_email`, `user_password`, `role_id`) VALUES
(1, 'Nikonov Vladislav', 'nva@mail.ru', 'qwerty', 1),
(2, 'Mihail Sergeev', 'miha@mail.ru', 'qwerty', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Индексы таблицы `Article_comments`
--
ALTER TABLE `Article_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Индексы таблицы `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Articles`
--
ALTER TABLE `Articles`
  MODIFY `article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Article_comments`
--
ALTER TABLE `Article_comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `Roles`
--
ALTER TABLE `Roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD CONSTRAINT `Articles_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Article_comments`
--
ALTER TABLE `Article_comments`
  ADD CONSTRAINT `Article_comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Article_comments_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `Articles` (`article_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `Roles` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
