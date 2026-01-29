``` sql
-- Stored Procedures-
-- Step 1: Create Table and Insert Data
-- Query for Table Creation:
mysql> CREATE TABLE employees (
             emp_id INT AUTO_INCREMENT PRIMARY KEY,
             emp_name VARCHAR(100),
             salary DECIMAL(10,2),
             department VARCHAR(100)
         );

-- Query for Inserting Data:
mysql> INSERT INTO employees (emp_name, salary, department)
         VALUES
         ('Rahul', 50000.00, 'IT'),
         ('Sneha', 62000.50, 'HR'),
         ('Amit', 45000.75, 'Finance'),
         ('Priya', 70000.00, 'Marketing');

-- Query to View Data:
mysql> select * from employees;
+--------+----------+----------+------------+
| emp_id | emp_name | salary   | department |
+--------+----------+----------+------------+
|      1 | Rahul    | 50000.00 | IT         |
|      2 | Sneha    | 62000.50 | HR         |
|      3 | Amit     | 45000.75 | Finance    |
|      4 | Priya    | 70000.00 | Marketing  |
+--------+----------+----------+------------+

-- Step 2: Create Stored Procedure with IN Parameters
-- Procedure Creation:
mysql> Delimiter //
mysql> Create procedure AddEmployee(
             in p_emp_name VARCHAR(100),
             in p_salary DECIMAL(10,2),
             in p_department VARCHAR(100)
             )
             begin
         INSERT INTO employees(emp_name, salary, department) VALUES
         (p_emp_name, p_salary, p_department);
         select * from employees;
         end //

mysql> Delimiter ;

-- Step 3: Call the procedure
mysql> call AddEmployee('kajal',95000,'SI');
+--------+----------+----------+------------+
| emp_id | emp_name | salary   | department |
+--------+----------+----------+------------+
|      1 | Rahul    | 50000.00 | IT         |
|      2 | Sneha    | 62000.50 | HR         |
|      3 | Amit     | 45000.75 | Finance    |
|      4 | Priya    | 70000.00 | Marketing  |
|      5 | kajal    | 95000.00 | SI         |
+--------+----------+----------+------------+

mysql> CALL AddEmployee ('Rahul Deshmukh', 50000.00, 'HR');
+--------+----------------+----------+------------+
| emp_id | emp_name       | salary   | department |
+--------+----------------+----------+------------+
|      1 | Rahul          | 50000.00 | IT         |
|      2 | Sneha          | 62000.50 | HR         |
|      3 | Amit           | 45000.75 | Finance    |
|      4 | Priya          | 70000.00 | Marketing  |
|      5 | kajal          | 95000.00 | SI         |
|      6 | Rahul Deshmukh | 50000.00 | HR         |
+--------+----------------+----------+------------+

mysql> CALL AddEmployee ('Sneha Joshi', 60000.00, 'IT');
+--------+----------------+----------+------------+
| emp_id | emp_name       | salary   | department |
+--------+----------------+----------+------------+
|      1 | Rahul          | 50000.00 | IT         |
|      2 | Sneha          | 62000.50 | HR         |
|      3 | Amit           | 45000.75 | Finance    |
|      4 | Priya          | 70000.00 | Marketing  |
|      5 | kajal          | 95000.00 | SI         |
|      6 | Rahul Deshmukh | 50000.00 | HR         |
|      7 | Sneha Joshi    | 60000.00 | IT         |
+--------+----------------+----------+------------+

-- Stored Procedure with OUT Parameter
-- Procedure Creation:
mysql> Delimiter //
mysql> create procedure CountEmployeeByDeptName(IN p_DeptName varchar(100), Out p_count int)
         begin
         Select count(department) into p_count from employees
         where department=p_DeptName;
         end //

mysql> Delimiter ;
mysql>
mysql> Call CountEmployeeByDeptName('SI', @emp_count);

mysql> Select @emp_count;
+------------+
| @emp_count |
+------------+
|          1 |
+------------+

mysql>
-- Business Logic procedure with IF Condition
-- Procedure Creation:
mysql> Delimiter //
mysql> create procedure safeInsert(
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

mysql> Delimiter ;
mysql> call safeInsert('Gulshan',154202,'IT');

mysql> call safeInsert('Gulshan',-154202,'IT');
ERROR 1644 (45000): Salary must be grater then 0

``