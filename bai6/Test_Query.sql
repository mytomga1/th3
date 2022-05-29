-- SELECT * FROM products LIMIT 10;
-- SELECT id, `name` FROM products LIMIT 10;

-- SELECT * FROM products as p 
-- WHERE 1 AND category_id = 3;

SHOW DATABASES;
SHOW TABLES;


-- CREATE TABLE test
CREATE TABLE test (	
	id int,
	name VARCHAR(50) DEFAULT('Name of table test')
);

ALTER TABLE test
ADD PRIMARY KEY(id), 
ADD detail VARCHAR(500);

ALTER TABLE test MODIFY COLUMN detail VARCHAR(1000);

-- INSERT INTO
INSERT INTO test (`name`,detail) VALUES ('iphone', 'iphone 13 promax red 250gb');
INSERT INTO test (`name`,detail) VALUES ('iphone', 'iphone 13 pro black 5120gb');
INSERT INTO test (`name`,detail) VALUES ('iphone', 'iphone 13 promax blue 128gb');

-- UPDATE data column name in table test with id = 1 
UPDATE test SET `name` = 'iphone13prmx' WHERE id = 1;

-- DELETE -> delete data in table test 
DELETE FROM test WHERE id=1;

-- xoá dữ liệu các bản ghi nhưng ko cần sử dụng mệnh đề WHERE
TRUNCATE tets;

-- remove table test in mysql
DROP TABLE test;
