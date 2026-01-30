--      			Stored Procedures
set SQL_SAFE_UPDATES = 0;
Drop database pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;
-- Step 1: Create Table and Insert Data
-- Query for Table Creation:
CREATE TABLE employees (
    emp_id INT AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(100),
    salary DECIMAL(10,2),
    department VARCHAR(100)
);
-- Query for Inserting Data:
INSERT INTO employees (emp_name, salary, department)
VALUES
('Rahul', 50000.00, 'IT'),
('Sneha', 62000.50, 'HR'),
('Amit', 45000.75, 'Finance'),
('Priya', 70000.00, 'Marketing');
-- Query to View Data:
select * from employees;
-- Step 2: Create Stored Procedure with IN Parameters
-- Procedure Creation:
Delimiter //
Create procedure AddEmployee(
    in p_emp_name VARCHAR(100),
    in p_salary DECIMAL(10,2),
    in p_department VARCHAR(100)
    )
    begin
INSERT INTO employees(emp_name, salary, department) VALUES
(p_emp_name, p_salary, p_department);
select * from employees;
end //
Delimiter ;
-- Step 3: Call the procedure
call AddEmployee('kajal',95000,'SI');
CALL AddEmployee ('Rahul Deshmukh', 50000.00, 'HR');
CALL AddEmployee ('Sneha Joshi', 60000.00, 'IT');
-- drop procedure  if exists p_insertDate;

-- Stored Procedure with OUT Parameter
-- Procedure Creation:
Delimiter //
create procedure CountEmployeeByDeptName(IN p_DeptName varchar(100), Out p_count int)
begin
Select count(department) into p_count from employees
where department=p_DeptName;
end //
Delimiter ;

Call CountEmployeeByDeptName('SI', @emp_count);
Select @emp_count;
-- Drop procedure if exists CountEmployeeByDeptName;

-- Business Logic procedure with IF Condition
-- Procedure Creation:
Delimiter //
create procedure safeInsert(
	IN p_emp_name varchar(100),
    IN p_Salary int,
    IN department varchar(100)
    )
begin 
if(p_salary>0) Then
insert into employees(emp_name,salary,department) values
(p_emp_name, p_Salary, department);
else 
signal sqlstate '45000'
Set message_text='Salary must be grater then 0';
End if;
end //
Delimiter ;
call safeInsert('Gulshan',154202,'IT');
call safeInsert('Gulshan',-154202,'IT');
-- drop procedure if exists safeInsert;

-- VIEW COMMANDS
-- AIM: Used to create a new table in a database with specified columns and data types, and perform various commands.
-- Step 1: CREATE TABLE Command
Drop database if exists pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;
-- Step 1: CREATE TABLE Command
CREATE TABLE STUDENT (
    RollNo INT,
    Name VARCHAR(50),
    Maths INT,
    Science INT,
    English INT
);
-- Step 2: INSERT Sample Data into STUDENT Table
INSERT INTO STUDENT (RollNo, Name, Maths, Science, English) 
VALUES
(101, 'Rahul', 92, 85, 78),
(102, 'Sneha', 88, 91, 80),
(103, 'Amit', 76, 82, 90),
(104, 'Priya', 95, 89, 93),
(105, 'John', 67, 74, 70),
(106, 'Anjali', 90, 88, 85),
(107, 'Manav', 83, 76, 88);
Select * from student;
-- Step 3: CREATE VIEW Command
Create view HighMarkMath as Select RollNo, Maths from Student where Maths>85;
select * from HighMarkMath;
-- Step 4: REPLACE VIEW Command
Create or Replace view HighMarkEnglish as Select RollNo, English from student where English>85;
select * from HighMarkEnglish;
-- Step 5: DROP VIEW Command
Drop view if exists HighMarkMath;

-- MYSQL Table Triggers

-- Aim: Creating and executing MYSQL table triggers.
-- 1. BEFORE INSERT TRIGGER
set SQL_SAFE_UPDATES = 0;
Drop database pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;

CREATE TABLE EMPLOYEES (
    EMP_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
    NAME VARCHAR(100) NOT NULL,
    AGE INT
);
INSERT INTO EMPLOYEES (NAME, AGE)
VALUES
("TOM", 58),
("Jerry", 26),
("Orry", -46);
select*from Employees;
-- Step 3: Create BEFORE INSERT Trigger
Delimiter //
Create trigger AgeVerify
Before Insert On Employees
For Each Row
Begin
If New.Age<0 then
Set New.Age=0;
End If;
End //
Delimiter ;
-- Step 4: Insert More Records (After Trigger)
INSERT INTO EMPLOYEES (NAME, AGE)
VALUES
("Akansha", 25),
("Ayushi", -23),
("Anushka", -24);
select*from Employees;

-- 2. BEFORE UPDATE TRIGGER
-- Step 1: Create a New Table
CREATE TABLE EMPLOYES (
    EMP_ID INT PRIMARY KEY,
    EMP_NAME VARCHAR(25),
    AGE INT,
    SALARY FLOAT
);
-- Step 2: Insert Data
INSERT INTO EMPLOYES VALUES
(101, "JIMMY", 35, 70000),
(102, "SHANE", 30, 55000),
(103, "MARRY", 28, 62000),
(104, "JACK", 30, 92000);

-- Step 3: Create BEFORE UPDATE Trigger
Select * From EMPLOYES;
Delimiter //
Create Trigger UPT_Trigger
Before Update On EMPLOYES
For Each Row
Begin 
if New.SALARY>10000 Then
Set New.SALARY=85000;
ElseIf New.SALARY<10000 Then
Set New.SALARY=72000;
End if;
End //
Delimiter ;

-- Step 4: Update Records to Trigger Logic
UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 101;
UPDATE EMPLOYES SET SALARY = 12000 WHERE EMP_ID = 102;
UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 103;
UPDATE EMPLOYES SET SALARY = 18000 WHERE EMP_ID = 104;
Select * From EMPLOYES;

-- GROUP BY & HAVING in MySQL (Gulshan pg-19 to pg-23)

-- Objective: Data aggregation (COUNT, SUM) ka upyog karke grouped results nikalna aur HAVING clause se un par conditions lagana.
set SQL_SAFE_UPDATES = 0;
Drop database if exists pg101_sales_management;
-- Step 1: Database aur Table Setup
create database pg101_sales_management;
use pg101_sales_management;

-- Table Creation:
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    product VARCHAR(100),
    quantity INT,
    unit_price DECIMAL(10,2),
    order_date DATE
);
-- Insert Sample Data:
INSERT INTO orders (order_id, customer_name, product, quantity, unit_price, order_date)
VALUES
(1, 'Surendra', 'Laptop', 2, 700.00, '2025-06-01'),
(2, 'Harsh', 'Mouse', 5, 20.00, '2025-06-01'),
(3, 'Anil', 'Keyboard', 1, 50.00, '2025-06-02'),
(4, 'David', 'Laptop', 1, 700.00, '2025-06-03'),
(5, 'Aman', 'Mouse', 10, 20.00, '2025-06-03'),
(6, 'Pushpa', 'Mouse', 3, 20.00, '2025-06-04'),
(7, 'Aadi', 'Laptop', 1, 700.00, '2025-06-04');
-- Step 2: Data Aggregation Queries
-- Query 1: Total Orders and Total Sales by Customer Har customer ke liye total orders ki ginti aur total sales (quantity * price) nikalna:
Select customer_name,
		count(order_id) as OrderId, 
        sum(quantity*unit_price) as TotalSales 
from orders
Group by customer_name;
-- Query 2: Filter Customers with Total Sales > 1000. Sirf un customers ko dikhana jinki total sales 1000 se zyada hai:
Select 	customer_name,sum(quantity*unit_price) as TotalSales 
from orders
group by customer_name
having TotalSales>1000;
-- Query 3: Product-wise Sales for Products Sold More Than 2 Times. Un products ki details jo 2 se zyada baar bike hain:
Select product, count(*) as TimeSold, sum(quantity) as TotalQuantity from orders
GROUP BY product
HAVING TimeSold > 2;
-- Query 4: Daily Sales Where Revenue Exceeds 1000 Woh tareekhein (dates) dikhana jahan total revenue 1000 se zyada tha:
Select order_date,sum(quantity*unit_price) as DailyRevenue from orders
group by order_date
having sum(quantity*unit_price)>1000;

-- Step 3: Advanced Analysis
-- Query 5: Average Quantity Ordered Per Product. Har product ki average mangai gayi quantity nikalna:
select product,avg(quantity) as AvgQuantity 
from orders 
group by product;
-- Query 6: Top Spending Customers (Spending > 1000). Sabse zyada kharch karne wale customers ko descending order mein dikhana:
Select customer_name, sum(quantity*unit_price) as Spending from orders group by customer_name having Spending>1000;
-- Query 7: Revenue Per Product with Minimum Revenue Condition. Un products ka total revenue jahan revenue 1000 ya usse zyada hai:
Select product, sum(quantity*unit_price) as Spending from orders group by product having Spending>1000;
