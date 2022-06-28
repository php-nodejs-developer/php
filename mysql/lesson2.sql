USE sql_lessons;

CREATE TABLE IF NOT EXISTS tb_categories(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS tb_items(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price /*UNSIGNED*/ INT NOT NULL,
    id_category INT NOT NULL,
    CONSTRAINT item_category -- название связи
    FOREIGN KEY (id_category) -- внешний ключ
    REFERENCES tb_categories(id) -- первичный ключ из другой таблицы
    ON DELETE NO ACTION 
    ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS tb_nominations(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS tb_items_categories(
	id_nomination INT NOT NULL,
	id_item INT NOT NULL, -- и любое количество дополнительных столбцов
	PRIMARY KEY (id_nomination, id_item), -- составной первичный ключ
	CONSTRAINT nomination_fk FOREIGN KEY (id_nomination)
    REFERENCES tb_nominations(id) 
    ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT item_fk FOREIGN KEY (id_item)
    REFERENCES tb_items (id)
    ON UPDATE NO ACTION ON DELETE NO ACTION
);


INSERT INTO tb_categories (name)
VALUES 
('Глина'), -- id 1
('Кожа'), -- id 2
('Стекло'); -- id 3

INSERT INTO tb_items (name, price, id_category)
VALUES 
('Ёлочное украшение', 1000, 1), -- (1) id category 1 - 'Глина'
('Цветочный горшок', 2500, 1), -- (2) id category 1 - 'Глина'
('Ваза', 4000, 3); -- (3) id category 3 - 'Стекло'

-- запросы к нескольким таблицам

-- название товара, название категории
SELECT tb_items.name AS item_name, tb_categories.name AS category_name -- названия столбцов
FROM tb_items, tb_categories -- названия таблиц
WHERE tb_categories.id = tb_items.id_category;

-- (INNER) JOIN запрос
SELECT i.name AS item_name, cat.name AS category_name
FROM tb_items i
INNER JOIN tb_categories cat
ON cat.id = i.id_category;

-- (LEFT) JOIN запрос
SELECT c.name, i.name
FROM tb_categories c
LEFT JOIN tb_items i
ON i.id_category = c.id; 

SELECT c.id, c.name
FROM tb_categories c
LEFT JOIN tb_items i
ON i.id_category = c.id
WHERE i.name IS NULL;












