``` sql
-- GROUP BY & HAVING in MySQL (Gulshan pg-19 to pg-23)
-- Objective: Data aggregation (COUNT, SUM) ka upyog karke grouped results nikalna aur HAVING clause se un par conditions lagana.

-- Table Creation:
mysql> CREATE TABLE orders (
             order_id INT AUTO_INCREMENT PRIMARY KEY,
             customer_name VARCHAR(100),
             product VARCHAR(100),
             quantity INT,
             unit_price DECIMAL(10,2),
             order_date DATE
         );

-- Insert Sample Data:
mysql> INSERT INTO orders (order_id, customer_name, product, quantity, unit_price, order_date)
        VALUES
        (1, 'Surendra', 'Laptop', 2, 700.00, '2025-06-01'),
        (2, 'Harsh', 'Mouse', 5, 20.00, '2025-06-01'),
        (3, 'Anil', 'Keyboard', 1, 50.00, '2025-06-02'),
        (4, 'David', 'Laptop', 1, 700.00, '2025-06-03'),
        (5, 'Aman', 'Mouse', 10, 20.00, '2025-06-03'),
        (6, 'Pushpa', 'Mouse', 3, 20.00, '2025-06-04'),
        (7, 'Aadi', 'Laptop', 1, 700.00, '2025-06-04');
Records: 7  Duplicates: 0  Warnings: 0

-- Step 2: Data Aggregation Queries
-- Query 1: Total Orders and Total Sales by Customer Har customer ke liye total orders ki ginti aur total sales (quantity * price) nikalna:
mysql>  Select customer_name,
                count(order_id) as OrderId,
                sum(quantity*unit_price) as TotalSales
        from orders
        Group by customer_name;
+---------------+---------+------------+
| customer_name | OrderId | TotalSales |
+---------------+---------+------------+
| Surendra      |       1 |    1400.00 |
| Harsh         |       1 |     100.00 |
| Anil          |       1 |      50.00 |
| David         |       1 |     700.00 |
| Aman          |       1 |     200.00 |
| Pushpa        |       1 |      60.00 |
| Aadi          |       1 |     700.00 |
+---------------+---------+------------+

-- Query 2: Filter Customers with Total Sales > 1000. Sirf un customers ko dikhana jinki total sales 1000 se zyada hai:
mysql>  Select   customer_name,sum(quantity*unit_price) as TotalSales
        from orders
        group by customer_name
        having TotalSales>1000;
+---------------+------------+
| customer_name | TotalSales |
+---------------+------------+
| Surendra      |    1400.00 |
+---------------+------------+

-- Query 3: Product-wise Sales for Products Sold More Than 2 Times. Un products ki details jo 2 se zyada baar bike hain:
mysql>  Select product, count(*) as TimeSold, sum(quantity) as TotalQuantity from orders
        GROUP BY product
        HAVING TimeSold > 2;
+---------+----------+---------------+
| product | TimeSold | TotalQuantity |
+---------+----------+---------------+
| Laptop  |        3 |             4 |
| Mouse   |        3 |            18 |
+---------+----------+---------------+

-- Query 4: Daily Sales Where Revenue Exceeds 1000 Woh tareekhein (dates) dikhana jahan total revenue 1000 se zyada tha:
mysql>  Select order_date,sum(quantity*unit_price) as DailyRevenue from orders
        group by order_date
        having sum(quantity*unit_price)>1000;
+------------+--------------+
| order_date | DailyRevenue |
+------------+--------------+
| 2025-06-01 |      1500.00 |
+------------+--------------+

-- Step 3: Advanced Analysis
-- Query 5: Average Quantity Ordered Per Product. Har product ki average mangai gayi quantity nikalna:
mysql>  select product,avg(quantity) as AvgQuantity
        from orders
        group by product;
+----------+-------------+
| product  | AvgQuantity |
+----------+-------------+
| Laptop   |      1.3333 |
| Mouse    |      6.0000 |
| Keyboard |      1.0000 |
+----------+-------------+

-- Query 6: Top Spending Customers (Spending > 1000). Sabse zyada kharch karne wale customers ko descending order mein dikhana:
mysql> Select customer_name, sum(quantity*unit_price) as Spending from orders group by customer_name having Spending>1000;
+---------------+----------+
| customer_name | Spending |
+---------------+----------+
| Surendra      |  1400.00 |
+---------------+----------+

-- Query 7: Revenue Per Product with Minimum Revenue Condition. Un products ka total revenue jahan revenue 1000 ya usse zyada hai:
mysql> Select product, sum(quantity*unit_price) as Spending from orders group by product having Spending>1000;
+---------+----------+
| product | Spending |
+---------+----------+
| Laptop  |  2800.00 |
+---------+----------+

``` 