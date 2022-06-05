-- Bài Tập : Tính tổng giá các sản phẩm theo từng nhóm , nhóm 1 các sản phẩm có giá từ 10.000.000 -  20.000.00  và nhóm 2 các sản phẩm có giá lớn hơn 20.000.000

SELECT SUM(price) FROM products WHERE price > 10000000 and price < 20000000;
SELECT SUM(price) FROM products WHERE price > 20000000;

--         IF(Nếu thoả mã dk thì , In ra giá, ko thì trả về null)
SELECT SUM(IF(price >= 10000000 and price <= 20000000,price, NULL )) as 'Nhóm 1',  
			 SUM(IF(price>20000000,price,0)) as 'Nhóm 2'
FROM	products;

-- Cách 2 sử dụng UNION có công dụng gộp các kết quả lại với nhau

SELECT SUM(price) FROM products WHERE price >= 10000000 and price <= 20000000
UNION
SELECT SUM(price) FROM products WHERE price > 20000000;

-- GROUP BY

SELECT COUNT(*) FROM products WHERE category_id = 1;

-- Đếm số lượng sản phẩm bằng GROUP BY & HAVING
SELECT category_id, COUNT(*) as sl FROM products WHERE `name` LIKE "%samsung%"
GROUP BY category_id
HAVING sl >= 2


-- INNER JOIN & LEFT JOIN - RIGHT JOIN

SELECT * FROM products JOIN categories ON products.category_id = categories.id;

-- LEFT JOIN lấy toàn bộ dữ liệu bảng bên trái + phần giao liên kết với bản bên phải nếu có
SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.id;

SELECT c.id as 'Category ID', c.name as 'Category Name', p.name as 'product Name' FROM products p LEFT JOIN categories  c ON p.category_id = c.id;


-- RIGHT JOIN lấy toàn bộ dữ liệu bảng bên phải + phần giao liên kết với bản bên trái nếu ko có trả về NULL
SELECT * FROM products RIGHT JOIN categories ON products.category_id = categories.id;

SELECT c.id as 'Category ID', c.name as 'Category Name', p.name as 'product Name' 
FROM products p RIGHT JOIN categories  c 
ON p.category_id = c.id 
ORDER BY c.id;

-- INNER JOIN lấy toàn bộ dữ liệu phần giao liên kết và đảm bảo ko có giá trị trả về NULL

SELECT c.id as 'Category ID', c.name as 'Category Name', p.name as 'product Name' 
FROM products p INNER JOIN categories  c 
ON p.category_id = c.id;

-- BT : Đếm số lượng sản phẩm theo từ danh mục

SELECT c.name as 'Tên Danh Mục', COUNT(p.id) as 'Số Lượng' 
FROM categories  c LEFT JOIN products p ON p.category_id = c.id
-- WHERE p.name LIKE '%Samsung%'
GROUP BY p.category_id;

SELECT ca.name, COUNT(p.id) as sl FROM products as p, categories as ca
WHERE p.category_id = ca.id 
GROUP BY ca.name;
