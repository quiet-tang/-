SET names utf8;
DROP DATABASE if exists dangdang;
CREATE DATABASE dangdang CHARSET=utf8;
USE dangdang;
CREATE TABLE dd_book(
	bid	INT PRIMARY KEY AUTO_INCREMENT,
	bname VARCHAR(20) NOT NULL DEFAULT '',
	pic VARCHAR(20) NOT NULL DEFAULT '',
	price DECIMAL(10,2) NOT NULL DEFAULT 0,
	pubtime DATETIME NOT NULL DEFAULT 0
);
INSERT INTO dd_book VALUES
	(null,'abc1','1.jpg',100,now()),
	(null,'abc2','2.jpg',100,now()),
	(null,'abc3','3.jpg',100,now()),
	(null,'abc4','4.jpg',100,now()),
	(null,'abc5','5.jpg',100,now()),
	(null,'abc6','6.jpg',100,now()),
	(null,'abc7','7.jpg',100,now()),
	(null,'abc8','8.jpg',100,now()),
	(null,'abc9','9.jpg',100,now()),
	(null,'abc10','10.jpg',100,now());