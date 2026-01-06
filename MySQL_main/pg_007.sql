mysql> -- Create table
mysql> CREATE TABLE PRODUCT(
    ->  PRODUCT_ID INT PRIMARY KEY,
    ->     PRODUC_NAME VARCHAR(50),
    ->     PRICE INT,
    ->     CATEGORY VARCHAR(20)
    -> );
Query OK, 0 rows affected (0.02 sec)

mysql>
mysql> -- insert INTO TABLE PRODUCT
mysql> INSERT INTO PRODUCT
    ->  VALUES  (1,'Laptop',60000,'Electronics'),
    ->                  (2,'Moile',30000,'Electronics'),
    ->             (3,'Headphone',2000,'Electronics'),
    ->             (4,'TV',45000,'Electronics'),
    ->             (5,'Refrigerator',35000,'Electronics'),
    ->             (6,'Chair',1500,'Furniture'),
    ->             (7,'Table',5000,'Furniture'),
    ->             (8,'Sofa',25000,'Furniture'),
    ->             (9,'Book',500,'Stationery'),
    ->             (10,'Pen',100,'Stationery');
Query OK, 10 rows affected (0.00 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql>
mysql> -- a. Display all product detail.-- a. Display all product detail.
mysql> SELECT * FROM PRODUCT;
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 60000 | Electronics |
|          2 | Moile        | 30000 | Electronics |
|          3 | Headphone    |  2000 | Electronics |
|          4 | TV           | 45000 | Electronics |
|          5 | Refrigerator | 35000 | Electronics |
|          6 | Chair        |  1500 | Furniture   |
|          7 | Table        |  5000 | Furniture   |
|          8 | Sofa         | 25000 | Furniture   |
|          9 | Book         |   500 | Stationery  |
|         10 | Pen          |   100 | Stationery  |
+------------+--------------+-------+-------------+
10 rows in set (0.00 sec)

mysql>
mysql> -- b. Display all product of category electronics
mysql> SELECT * FROM PRODUCT where CATEGORY='Electronics';
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 60000 | Electronics |
|          2 | Moile        | 30000 | Electronics |
|          3 | Headphone    |  2000 | Electronics |
|          4 | TV           | 45000 | Electronics |
|          5 | Refrigerator | 35000 | Electronics |
+------------+--------------+-------+-------------+
5 rows in set (0.00 sec)

mysql>
mysql> -- c. Increase price of all product of 10%.
mysql> UPDATE PRODUCT
    -> SET PRICE = PRICE+(PRICE*0.1);
Query OK, 10 rows affected (0.00 sec)
Rows matched: 10  Changed: 10  Warnings: 0

mysql> SELECT * FROM PRODUCT;
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 66000 | Electronics |
|          2 | Moile        | 33000 | Electronics |
|          3 | Headphone    |  2200 | Electronics |
|          4 | TV           | 49500 | Electronics |
|          5 | Refrigerator | 38500 | Electronics |
|          6 | Chair        |  1650 | Furniture   |
|          7 | Table        |  5500 | Furniture   |
|          8 | Sofa         | 27500 | Furniture   |
|          9 | Book         |   550 | Stationery  |
|         10 | Pen          |   110 | Stationery  |
+------------+--------------+-------+-------------+
10 rows in set (0.00 sec)

mysql>
mysql> -- d. Delete product costing less than 10000 then display.
mysql> DELETE FROM PRODUCT
    -> WHERE PRICE < 1000;
Query OK, 2 rows affected (0.00 sec)

mysql> SELECT * FROM PRODUCT;
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 66000 | Electronics |
|          2 | Moile        | 33000 | Electronics |
|          3 | Headphone    |  2200 | Electronics |
|          4 | TV           | 49500 | Electronics |
|          5 | Refrigerator | 38500 | Electronics |
|          6 | Chair        |  1650 | Furniture   |
|          7 | Table        |  5500 | Furniture   |
|          8 | Sofa         | 27500 | Furniture   |
+------------+--------------+-------+-------------+
8 rows in set (0.00 sec)

mysql>
mysql> -- e. Display the product name and price of category furniture.
mysql> SELECT PRODUC_NAME, PRICE FROM PRODUCT WHERE CATEGORY = 'Furniture';
+-------------+-------+
| PRODUC_NAME | PRICE |
+-------------+-------+
| Chair       |  1650 |
| Table       |  5500 |
| Sofa        | 27500 |
+-------------+-------+
3 rows in set (0.00 sec)

mysql>
mysql> -- f. Total number of product in each category.
mysql> SELECT CATEGORY, COUNT(CATEGORY) FROM PRODUCT
    -> group by CATEGORY;
+-------------+-----------------+
| CATEGORY    | COUNT(CATEGORY) |
+-------------+-----------------+
| Electronics |               5 |
| Furniture   |               3 |
+-------------+-----------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- g. Average price of each category.
mysql> SELECT CATEGORY, avg(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY;
+-------------+------------+
| CATEGORY    | avg(PRICE) |
+-------------+------------+
| Electronics | 37840.0000 |
| Furniture   | 11550.0000 |
+-------------+------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- h. Categories having more than two product.
mysql> SELECT CATEGORY, COUNT(CATEGORY) FROM PRODUCT
    -> GROUP BY CATEGORY
    -> HAVING COUNT(PRICE)>2;
+-------------+-----------------+
| CATEGORY    | COUNT(CATEGORY) |
+-------------+-----------------+
| Electronics |               5 |
| Furniture   |               3 |
+-------------+-----------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- i. Categories with average price > 20000.
mysql> SELECT CATEGORY, AVG(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY
    -> HAVING AVG(PRICE)>20000;
+-------------+------------+
| CATEGORY    | AVG(PRICE) |
+-------------+------------+
| Electronics | 37840.0000 |
+-------------+------------+
1 row in set (0.00 sec)

mysql>
mysql> -- j. Max price in each category.
mysql> SELECT CATEGORY, MAX(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY;
+-------------+------------+
| CATEGORY    | MAX(PRICE) |
+-------------+------------+
| Electronics |      66000 |
| Furniture   |      27500 |
+-------------+------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- k. Minimum price in each category.
mysql> SELECT CATEGORY, MIN(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY;
+-------------+------------+
| CATEGORY    | MIN(PRICE) |
+-------------+------------+
| Electronics |       2200 |
| Furniture   |       1650 |
+-------------+------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- l. Category having price > 30000.
mysql> SELECT * FROM PRODUCT
    -> WHERE PRICE>30000;
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 66000 | Electronics |
|          2 | Moile        | 33000 | Electronics |
|          4 | TV           | 49500 | Electronics |
|          5 | Refrigerator | 38500 | Electronics |
+------------+--------------+-------+-------------+
4 rows in set (0.00 sec)

mysql>
mysql> -- m. Product order by price (Descending).
mysql> SELECT * FROM PRODUCT ORDER BY PRICE DESC;
+------------+--------------+-------+-------------+
| PRODUCT_ID | PRODUC_NAME  | PRICE | CATEGORY    |
+------------+--------------+-------+-------------+
|          1 | Laptop       | 66000 | Electronics |
|          4 | TV           | 49500 | Electronics |
|          5 | Refrigerator | 38500 | Electronics |
|          2 | Moile        | 33000 | Electronics |
|          8 | Sofa         | 27500 | Furniture   |
|          7 | Table        |  5500 | Furniture   |
|          3 | Headphone    |  2200 | Electronics |
|          6 | Chair        |  1650 | Furniture   |
+------------+--------------+-------+-------------+
8 rows in set (0.00 sec)

mysql>
mysql> -- n. Today price of product in each category.
mysql> SELECT CATEGORY, SUM(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY;
+-------------+------------+
| CATEGORY    | SUM(PRICE) |
+-------------+------------+
| Electronics |     189200 |
| Furniture   |      34650 |
+-------------+------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- o. Categories having total price > 50000.
mysql> SELECT CATEGORY, SUM(PRICE) FROM PRODUCT
    -> GROUP BY CATEGORY
    -> HAVING SUM(PRICE)>50000;
+-------------+------------+
| CATEGORY    | SUM(PRICE) |
+-------------+------------+
| Electronics |     189200 |
+-------------+------------+
1 row in set (0.00 sec)

mysql>
mysql> -- p. Count of product casting more than 10000.
mysql> SELECT COUNT(PRICE) FROM PRODUCT
    -> WHERE PRICE>10000;
+--------------+
| COUNT(PRICE) |
+--------------+
|            5 |
+--------------+
1 row in set (0.00 sec)

mysql>