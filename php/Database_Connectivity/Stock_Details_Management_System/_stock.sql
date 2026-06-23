CREATE DATABASE stockdb;

USE stockdb;

CREATE TABLE stock
(
 id INT AUTO_INCREMENT PRIMARY KEY,
 product_name VARCHAR(50),
 quantity INT,
 price DECIMAL(10,2)
);