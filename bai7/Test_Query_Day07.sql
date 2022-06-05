SELECT id, name FROM test WHERE id in(1,2,3)
-- -->SELECT id, name FROM test WHERE id = 1 or id = 2 or i =3

-- lấy 3 sản phẩm xếp giảm dần ASC

-- lấy 3 sản phẩm xếp tăng dần DESC
SELECT id, name FROM test ORDER BY id DESC LIMIT 3;


-- Phân Trang sản phẩm bằng OFFSET cách thứ 1 
SELECT * FROM products ORDER BY id DESC LIMIT 5 OFFSET 5;
-- lấy 5 sản phẩm tiếp theo bằng thằng OFFSET 10 --> ứng dụng vào việc phân trang   
SELECT * FROM products ORDER BY id DESC LIMIT 5 OFFSET 10;

-- Phân Trang sản phẩm bằng cách thứ 2, thường áp dụng cho những tập dữ liệu lớn thường kết hợp với kỹ thuật partition giúp tối ưu thời gian truy vấn.
SELECT * FROM products WHERE id < 47 ORDER BY id DESC LIMIT 5;


-- MIN() & MAX() --

SELECT max(price) FROM products;
-- SELECT price FROM products ORDER BY price DESC LIMIT 1; 

SELECT min(price) FROM products;
-- SELECT price FROM products ORDER BY price ASC LIMIT 1; 

-- COUNT() & SUM() --

SELECT COUNT(*) FROM products;

SELECT COUNT(*) FROM products WHERE name LIKE '%iphone%';
SELECT * FROM products WHERE name LIKE '%iphone';
SELECT * FROM products WHERE name LIKE 'iphone%';

SELECT SUM(price) FROM products WHERE price >= 10000000 and price <= 20000000;
SELECT SUM(price) FROM products WHERE price > 20000000;


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





