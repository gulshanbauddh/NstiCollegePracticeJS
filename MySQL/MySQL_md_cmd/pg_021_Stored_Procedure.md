``` sql
-- pg_021_Stored_Procedure
mysql> Drop database if exists pg_021_Stored_Procedure;
mysql> Create database pg_021_Stored_Procedure;
mysql> use pg_021_Stored_Procedure;
Database changed
-- Create Table
mysql> CREATE TABLE employees (
            emp_id INT PRIMARY KEY,
            emp_name VARCHAR(50),
            dept_id INT,
            salary INT,
            join_date DATE
        );

mysql> CREATE TABLE departments (
            dept_id INT,
            Dept_name VARCHAR(50)
        );

mysql> INSERT INTO departments (dept_id, Dept_name) VALUES
        (10, 'Sales'),
        (20, 'HR'),
        (30, 'IT'),
        (40, 'Marketing');

-- Insert values
mysql> INSERT INTO employees (emp_id, emp_name, dept_id, salary, join_date) VALUES
        (1, 'Ravi', 10, 9000, '2018-06-01'),
        (2, 'Suman', 20, 69000, '2019-08-15'),
        (3, 'Riya', 10, 27000, '2020-01-10'),
        (4, 'Karan', 30, 22000, '2021-03-12'),
        (5, 'Anu', 20, 58000, '2022-07-20');

mysql> select * from employees;
+--------+----------+---------+--------+------------+
| emp_id | emp_name | dept_id | salary | join_date  |
+--------+----------+---------+--------+------------+
|      1 | Ravi     |      10 |   9000 | 2018-06-01 |
|      2 | Suman    |      20 |  69000 | 2019-08-15 |
|      3 | Riya     |      10 |  27000 | 2020-01-10 |
|      4 | Karan    |      30 |  22000 | 2021-03-12 |
|      5 | Anu      |      20 |  58000 | 2022-07-20 |
+--------+----------+---------+--------+------------+

mysql> select * from departments;
+---------+-----------+
| dept_id | Dept_name |
+---------+-----------+
|      10 | Sales     |
|      20 | HR        |
|      30 | IT        |
|      40 | Marketing |
+---------+-----------+

-- Q-1 Create a simple procedure to display all employees
mysql> DELIMITER //
mysql> CREATE procedure showAllemployees()
        Begin
        Select * from employees;
        End //

mysql> Delimiter ;

mysql> call showAllemployees; -- Execute
+--------+----------+---------+--------+------------+
| emp_id | emp_name | dept_id | salary | join_date  |
+--------+----------+---------+--------+------------+
|      1 | Ravi     |      10 |   9000 | 2018-06-01 |
|      2 | Suman    |      20 |  69000 | 2019-08-15 |
|      3 | Riya     |      10 |  27000 | 2020-01-10 |
|      4 | Karan    |      30 |  22000 | 2021-03-12 |
|      5 | Anu      |      20 |  58000 | 2022-07-20 |
+--------+----------+---------+--------+------------+

-- Q-2 Create a proceddure to display employees of a specific department (using parameters);
mysql> Delimiter //
mysql> create procedure createEmpByDeptId(IN dept INT)
        Begin
        Select Emp_name,salary
        from employees
        where dept_id=dept;
        end //

mysql> Delimiter ;

mysql> call createEmpByDeptId(20); -- Execute
+----------+--------+
| Emp_name | salary |
+----------+--------+
| Suman    |  69000 |
| Anu      |  58000 |
+----------+--------+

-- Q-3 Create a procedure to calculate total salary of a department. (using OUT parameter).
mysql> Delimiter //
mysql> create procedure totalSalaryOfDept(IN deptID INT, Out  totalSal INT)
        Begin
         select Sum(salary) INTO TotalSal
            From employees
            where dept_id=deptID;
        End //

mysql> Delimiter ;
-- Execute
-- drop procedure totalSalaryOfDept;
mysql> Call totalSalaryOfDept(10,@total1);

mysql> Call totalSalaryOfDept(20,@total2);

mysql> select @total1;
+---------+
| @total1 |
+---------+
|   36000 |
+---------+

mysql> select @total2;
+---------+
| @total2 |
+---------+
|  127000 |
+---------+

-- Q-4 Create a procedure to increase salary of an employees by a given amount (using IN procedure)
mysql> Delimiter //
mysql> create procedure incSal(IN emp INT, IN increment INT)
        begin
         update employees
            set salary = salary+increment
            where emp_id=emp;
        End //

mysql> Delimiter ;
-- drop procedure incSal;
mysql> call incSal (1,3000);

mysql> call incSal (2,3000);

-- Q-5 Create a procedure using INOUT parameter to Increment a salary.
mysql> Delimiter //
mysql> Create Procedure incrSalINOUT(INOUT sal INT)
        Begin
            Set sal=sal+1000;
         End //

mysql>  Delimiter ;

mysql> set @s=2000;

mysql> call incrSalINOUT(@s);

mysql> Select @s;
+------+
| @s   |
+------+
| 3000 |
+------+

-- drop procedure incrSalINOUT;

-- Q-6 Drop a stored Procedure.
mysql> drop procedure if exists incrSalINOUT;

mysql> -- Q-7 Display employees with Salary above a certain value and inccress their salary by 5000.
mysql> Delimiter //
mysql> Create procedure raiseHighSalary(IN minSalary INT)
        Begin
         -- Display Before Raise Salary of employees
        select Emp_name,salary as Salary_Before
        From employees
        where salary>minSalary;
       
         -- Increase their Salary
        UPDate employees
        set salary = salary + 5000
        where salary > minSalary;
       
         -- Display Alter Raise Salary of employees
        select Emp_name,salary as Salary_After
        From employees
        where salary>minSalary;
        END //

mysql> Delimiter ;

mysql> call raiseHighSalary(27000);
+----------+---------------+
| Emp_name | Salary_Before |
+----------+---------------+
| Suman    |         72000 |
| Anu      |         58000 |
+----------+---------------+

+----------+--------------+
| Emp_name | Salary_After |
+----------+--------------+
| Suman    |        77000 |
| Anu      |        63000 |
+----------+--------------+
```