SET SQL_SAFE_UPDATES = 0;
drop database pg_007_Product;
Create database pg_007_Product;
use pg_007_Product;

create table Product(
			Product_ID int primary key,
            Product_Name varchar(50),
            Price int,
            category varchar(20)
);
-- drop table Product;
insert into Product values 
					(1,'Laptop',60000,'Electronics'),
                    (2, 'Mobile', 30000, 'Electronics'),
                    (3, 'Headphone', 2000, 'Electronics'),
                    (4, 'TV', 45000, 'Electronics'),
                    (5, 'Refrigeraytor', 35000, 'Electronics'),
                    (6, 'Chair', 1500, 'Furniture'),
                    (7, 'Table', 5000, 'Furniture'),
                    (8, 'Sofa', 25000, 'Furniture'),
                    (9, 'Book', 500, 'Stationary'),
                    (10, 'Pen', 100, 'Stationary');

-- Product Table Questions
-- a) Display all products details.
Select * from Product;
-- b) Display all products of category electronics.
Select * from Product where category='Electronics';
-- c) Increase price of all product by 10%.
Update Product set price = price+(10*1.10);
Select * from Product;
-- d) Delete products costing < 1000 then display.
delete from Product where Price < 1000;
Select * from Product;
-- e) Display the product name and price of category furniture.
select  Product_Name, Price from Product where category='Furniture';
-- f) Total number of products in each category.
select category, count(category) from Product group by category;
-- g) Average price of each category.
select category, avg(Price) from Product group by category;
-- h) Categories having more than 2 products.
Select category, count(category) from Product group by category having count(category) >2;
-- i) Categories with average price > 20000.
select category, avg(price) from Product group by category having avg(price)>20000;
-- j) Maximum price in each category.
select category, max(price) from Product group by category;
-- k) Minimum price in each category.
select category ,min(Price) from Product group by category;
-- l) Categories having product price > 30000.
select distinct category from Product where Price>30000;
-- m) Products order by price (DESC).
select  Product_Name, Price from Product order by Price desc;
-- n) Total price of products in each category.
Select Category, sum(price) from Product group by category;

-- o) Categories having total price > 50000.
Select Category, sum(price) from Product group by category having sum(price)>50000;
-- p) Count of products costing more than 10000.
Select * from Product where price > 10000;