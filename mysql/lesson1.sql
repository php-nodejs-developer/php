-- комментарий
# комментарий

-- для подключения к скрверу MySQL:
-- ip
-- порт
-- имя пользователя
-- пароль

-- молния: все запросы из файла
-- молния с курсовром: выполнение одного запроса

-- создание БД или др объекта
-- CREATE тип_создаваемого_объекта IF NOT EXISTS имя_создаваемого_объекта 
CREATE DATABASE IF NOT EXISTS sql_lessons;


-- удаление БД или др объекта
-- DROP тип_удаляемого_объекта IF EXISTS имя_удаляемого_объекта 
-- DROP DATABASE IF EXISTS sql_lessons;

-- выбор БД для дальнейшего использования
USE sql_lessons;

-- SHOW DATABASES; -- вывести все БД сервера
-- SHOW TABLES; -- вывести все таблицы из выбранной БД сервера

-- товары - таблица
-- арт.(int), название товара(varchar), количество(int), 
--          описание(text), стоимость(double) и тд - столбцы в таблице

-- категории товаров - таблица
-- пользователи - таблица
-- заказы - таблица
-- и тд

-- курсы: идентификатор, название, продолжительность, изображение, дата начала

-- созданние таблицы
-- описание столбцов: название тип_данных доп_характеристики
CREATE TABLE IF NOT EXISTS tb_courses(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    duration TINYINT UNSIGNED NOT NULL,
    picture VARCHAR(255) DEFAULT 'course.png',
    start DATE NOT NULL
);

DESC tb_courses; -- описание таблицы

-- добавление данных в таблицу
INSERT INTO tb_courses
(title, duration, picture, start)
VALUES
('WEB Developer', 4, 'web.png', '2022-09-28'), 
('Python', 2, 'python.png', '2022-09-15');

INSERT INTO tb_courses
(title, duration, start)
VALUES
('Node JS', 4, '2022-09-28'),
('Java', 3, '2022-09-29');


-- получение данных
-- SELECT столбцы FROM имя_таблицы;
-- SELECT столбцы FROM имя_таблицы WHERE условия;

SELECT * FROM tb_courses;
SELECT title, duration FROM tb_courses;


-- обновление данных в таблице
UPDATE tb_courses SET picture='java.png' WHERE id=4;
UPDATE tb_courses SET picture='java.png' WHERE title='Java';

-- удаление данных из таблицы
DELETE FROM tb_courses WHERE id=2;


-- WHERE 
-- = != < > <= >=
SELECT title FROM tb_courses WHERE duration > 3;

-- AND OR NOT
SELECT title FROM tb_courses WHERE duration > 3 AND duration < 6;

-- функция IN()
SELECT title, duration FROM tb_courses WHERE duration IN(3, 6, 9);


-- запросы для самостоятельного изучения
SELECT duration FROM tb_courses WHERE title = 'WEB Developer';
SELECT * FROM tb_courses WHERE duration > 3 AND start  > '2022-08-01';
-- BETWEEN AND диапазоны
SELECT title, duration FROM tb_courses WHERE start BETWEEN NOW() AND '2022-11-01';
-- LIKE %символы%  / символы% / %символы
SELECT * FROM tb_courses WHERE title LIKE '%o%';

-- ORDER BY DESC - сортировка по убыванию
-- ORDER BY ASC - сортировка по возрастанию

SELECT * FROM tb_courses ORDER BY title DESC;
SELECT * FROM tb_courses ORDER BY start; -- ASC по-умолчанию