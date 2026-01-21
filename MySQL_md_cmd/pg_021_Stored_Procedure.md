``` sql
-- pg_021_Stored_Procedure
mysql> use  nsti_mumbai_sql;
Database changed
mysql> show tables;
+---------------------------+
| Tables_in_nsti_mumbai_sql |
+---------------------------+
| department                |
| employee                  |
| product                   |
+---------------------------+
       
mysql> select * from department;
+---------+-----------+
| dept_id | Dept_name |
+---------+-----------+
|      10 | Sales     |
|      20 | HR        |
|      30 | IT        |
|      40 | Marketing |
+---------+-----------+

mysql> select * from employee;
+--------+----------+---------+--------+------------+
| emp_id | emp_name | dept_id | salary | join_date  |
+--------+----------+---------+--------+------------+
|      1 | Ravi     |      10 |   6000 | 2018-06-01 |
|      2 | Suman    |      20 |  61000 | 2019-08-15 |
|      3 | Riya     |      10 |  27000 | 2020-01-10 |
|      4 | Karan    |      30 |  22000 | 2021-03-12 |
|      5 | Anu      |      20 |  53000 | 2022-07-20 |
+--------+----------+---------+--------+------------+

-- Q-1 Create a simple procedure to display all emplouees
mysql> DELIMITER //
mysql> CREATE procedure showAllEmployees()
       Begin
       Select * from employee;
       End //

mysql> Delimiter ;
mysql>
mysql> call showAllEmployees; -- Execute
+--------+----------+---------+--------+------------+
| emp_id | emp_name | dept_id | salary | join_date  |
+--------+----------+---------+--------+------------+
|      1 | Ravi     |      10 |   6000 | 2018-06-01 |
|      2 | Suman    |      20 |  61000 | 2019-08-15 |
|      3 | Riya     |      10 |  27000 | 2020-01-10 |
|      4 | Karan    |      30 |  22000 | 2021-03-12 |
|      5 | Anu      |      20 |  53000 | 2022-07-20 |
+--------+----------+---------+--------+------------+

-- Q-2 Create a proceddure to display employees of a specific department (using parameters);
mysql> Delimiter //
mysql> create procedure createEmpByDeptId(IN dept INT)
       Begin
       Select Emp_name,salary
       from employee
       where dept_id=dept;
       end //

mysql> Delimiter ;
mysql>
mysql> call createEmpByDeptId(20); -- Execute
+----------+--------+
| Emp_name | salary |
+----------+--------+
| Suman    |  61000 |
| Anu      |  53000 |
+----------+--------+

-- Q-3 Create a procedure to calculate total salary of a department. (using OUT parameter).
mysql> Delimiter //
mysql> create procedure totalSalaryOfDept(IN deptID INT, Out  totalSal INT)
       Begin
        select Sum(salary) INTO TotalSal
           From employee
           where dept_id=deptID;
       End //

mysql> Delimiter ;
mysql> -- Execute
mysql> -- drop procedure totalSalaryOfDept;
mysql> Call totalSalaryOfDept(10,@total1);

mysql> Call totalSalaryOfDept(20,@total2);

mysql>
mysql> select @total1;
+---------+
| @total1 |
+---------+
|   33000 |
+---------+

mysql> select @total2;
+---------+
| @total2 |
+---------+
|  114000 |
+---------+

-- Q-4 Create a procedure to iincrease salary of an employee by a given amount (using IN procedure)
mysql> Delimiter //
mysql> create procedure incSal(IN emp INT, IN increment INT)
       begin
        update employee
           set salary = salary+increment
           where emp_id=emp;
       End //

mysql> Delimiter ;
mysql> -- drop procedure incSal;
mysql> call incSal (1,3000);

mysql> call incSal (2,3000);

-- Q-5 Create a procedure using INOUT parameter to Increment a salary.
mysql> Delimiter //
mysql> Create Procedure incrSalINOUT(INOUT sal INT)
       Begin
           Set sal=sal+1000;
        End //

mysql>  Delimiter ;
mysql>
mysql> set @s=2000;

mysql> call incrSalINOUT(@s);

mysql> Select @s;
+------+
| @s   |
+------+
| 3000 |
+------+

mysql> drop procedure incrSalINOUT;

-- Q-6 Drop a stored Procedure.
mysql> drop procedure if exists incrSalINOUT;

-- Q-7 Display employee with Salary above a certain value and inccress their salary by 5000.
mysql> Delimiter //
mysql> Create procedure raiseHighSalary(IN minSalary INT)
       Begin
        -- Display Before Raise Salary of Employee
       select Emp_name,salary as Salary_Before
       From employee
       where salary>minSalary;

        -- Increase their Salary
       UPDate employee
       set salary = salary + 5000
       where salary > minSalary;

        -- Display Alter Raise Salary of Employee
       select Emp_name,salary as Salary_After
       From employee
       where salary>minSalary;
       END //
ERROR 1304 (42000): PROCEDURE raiseHighSalary already exists
mysql> Delimiter ;
mysql> call raiseHighSalary(27000);
+----------+---------------+
| Emp_name | Salary_Before |
+----------+---------------+
| Suman    |         64000 |
| Anu      |         53000 |
+----------+---------------+

+----------+--------------+
| Emp_name | Salary_After |
+----------+--------------+
| Suman    |        69000 |
| Anu      |        58000 |
+----------+--------------+

```