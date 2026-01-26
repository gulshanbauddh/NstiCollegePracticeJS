``` sql
-- Product Table Questions

mysql> SET SQL_SAFE_UPDATES = 0;

mysql> drop database pg_007_Product;

mysql> Create database pg_007_Product;

mysql> use pg_007_Product;
Database changed
mysql>
mysql> create table Product(
                    Product_ID int primary key,
                    Product_Name varchar(50),
                    Price int,
                    category varchar(20)
                  );

-- drop table Product;
mysql> insert into Product values
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

-- a) Display all products details.
mysql> Select * from Product;
+------------+---------------+-------+-------------+
| Product_ID | Product_Name  | Price | category    |
+------------+---------------+-------+-------------+
|          1 | Laptop        | 60000 | Electronics |
|          2 | Mobile        | 30000 | Electronics |
|          3 | Headphone     |  2000 | Electronics |
|          4 | TV            | 45000 | Electronics |
|          5 | Refrigeraytor | 35000 | Electronics |
|          6 | Chair         |  1500 | Furniture   |
|          7 | Table         |  5000 | Furniture   |
|          8 | Sofa          | 25000 | Furniture   |
|          9 | Book          |   500 | Stationary  |
|         10 | Pen           |   100 | Stationary  |
+------------+---------------+-------+-------------+

-- b) Display all products of category electronics.
mysql> Select * from Product where category='Electronics';
+------------+---------------+-------+-------------+
| Product_ID | Product_Name  | Price | category    |
+------------+---------------+-------+-------------+
|          1 | Laptop        | 60000 | Electronics |
|          2 | Mobile        | 30000 | Electronics |
|          3 | Headphone     |  2000 | Electronics |
|          4 | TV            | 45000 | Electronics |
|          5 | Refrigeraytor | 35000 | Electronics |
+------------+---------------+-------+-------------+

-- c) Increase price of all product by 10%.
mysql> Update Product set price = price+(10*1.10);
Rows matched: 10  Changed: 10  Warnings: 0

mysql> Select * from Product;
+------------+---------------+-------+-------------+
| Product_ID | Product_Name  | Price | category    |
+------------+---------------+-------+-------------+
|          1 | Laptop        | 60011 | Electronics |
|          2 | Mobile        | 30011 | Electronics |
|          3 | Headphone     |  2011 | Electronics |
|          4 | TV            | 45011 | Electronics |
|          5 | Refrigeraytor | 35011 | Electronics |
|          6 | Chair         |  1511 | Furniture   |
|          7 | Table         |  5011 | Furniture   |
|          8 | Sofa          | 25011 | Furniture   |
|          9 | Book          |   511 | Stationary  |
|         10 | Pen           |   111 | Stationary  |
+------------+---------------+-------+-------------+

-- d) Delete products costing < 1000 then display.
mysql> delete from Product where Price < 1000;

mysql> Select * from Product;
+------------+---------------+-------+-------------+
| Product_ID | Product_Name  | Price | category    |
+------------+---------------+-------+-------------+
|          1 | Laptop        | 60011 | Electronics |
|          2 | Mobile        | 30011 | Electronics |
|          3 | Headphone     |  2011 | Electronics |
|          4 | TV            | 45011 | Electronics |
|          5 | Refrigeraytor | 35011 | Electronics |
|          6 | Chair         |  1511 | Furniture   |
|          7 | Table         |  5011 | Furniture   |
|          8 | Sofa          | 25011 | Furniture   |
+------------+---------------+-------+-------------+

-- e) Display the product name and price of category furniture.
mysql> select  Product_Name, Price from Product where category='Furniture';
+--------------+-------+
| Product_Name | Price |
+--------------+-------+
| Chair        |  1511 |
| Table        |  5011 |
| Sofa         | 25011 |
+--------------+-------+

-- f) Total number of products in each category.
mysql> select category, count(category) from Product group by category;
+-------------+-----------------+
| category    | count(category) |
+-------------+-----------------+
| Electronics |               5 |
| Furniture   |               3 |
+-------------+-----------------+

-- g) Average price of each category.
mysql> select category, avg(Price) from Product group by category;
+-------------+------------+
| category    | avg(Price) |
+-------------+------------+
| Electronics | 34411.0000 |
| Furniture   | 10511.0000 |
+-------------+------------+

-- h) Categories having more than 2 products.
mysql> Select category, count(category) from Product group by category having count(category) >2;
+-------------+-----------------+
| category    | count(category) |
+-------------+-----------------+
| Electronics |               5 |
| Furniture   |               3 |
+-------------+-----------------+

-- i) Categories with average price > 20000.
mysql> select category, avg(price) from Product group by category having avg(price)>20000;
+-------------+------------+
| category    | avg(price) |
+-------------+------------+
| Electronics | 34411.0000 |
+-------------+------------+

-- j) Maximum price in each category.
mysql> select category, max(price) from Product group by category;
+-------------+------------+
| category    | max(price) |
+-------------+------------+
| Electronics |      60011 |
| Furniture   |      25011 |
+-------------+------------+

-- k) Minimum price in each category.
mysql> select category ,min(Price) from Product group by category;
+-------------+------------+
| category    | min(Price) |
+-------------+------------+
| Electronics |       2011 |
| Furniture   |       1511 |
+-------------+------------+

-- l) Categories having product price > 30000.
mysql> select distinct category from Product where Price>30000;
+-------------+
| category    |
+-------------+
| Electronics |
+-------------+

-- m) Products order by price (DESC).
mysql> select  Product_Name, Price from Product order by Price desc;
+---------------+-------+
| Product_Name  | Price |
+---------------+-------+
| Laptop        | 60011 |
| TV            | 45011 |
| Refrigeraytor | 35011 |
| Mobile        | 30011 |
| Sofa          | 25011 |
| Table         |  5011 |
| Headphone     |  2011 |
| Chair         |  1511 |
+---------------+-------+

-- n) Total price of products in each category.
mysql> Select Category, sum(price) from Product group by category;
+-------------+------------+
| Category    | sum(price) |
+-------------+------------+
| Electronics |     172055 |
| Furniture   |      31533 |
+-------------+------------+

-- o) Categories having total price > 50000.
mysql> Select Category, sum(price) from Product group by category having sum(price)>50000;
+-------------+------------+
| Category    | sum(price) |
+-------------+------------+
| Electronics |     172055 |
+-------------+------------+

-- p) Count of products costing more than 10000.
mysql> Select * from Product where price > 10000;
+------------+---------------+-------+-------------+
| Product_ID | Product_Name  | Price | category    |
+------------+---------------+-------+-------------+
|          1 | Laptop        | 60011 | Electronics |
|          2 | Mobile        | 30011 | Electronics |
|          4 | TV            | 45011 | Electronics |
|          5 | Refrigeraytor | 35011 | Electronics |
|          8 | Sofa          | 25011 | Furniture   |
+------------+---------------+-------+-------------+

```