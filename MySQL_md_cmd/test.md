``` sql
--          + Test -1 +
mysql> create database test1;
mysql> use test1;

-- Creation of Employee table
mysql> CREATE TABLE employee (
           empId INT,
           empName VARCHAR(10),
           deptId INT,
           salary INT,
           join_Date DATE
          );

-- Creation of Department table
mysql> CREATE TABLE department (
           deptId INT,
           deptName VARCHAR(10)
          );

-- Data insert Employee Table
mysql> INSERT INTO employee VALUES
                            (1, "Ravi", 10, 25000, "2018-06-01"),
                            (2, "Suman", 20, 30000, "2019-08-15"),
                            (3, "Riya", 10, 27000, "2020-01-10"),
                            (4, "Karan", 30, 22000, "2021-03-12"),
                            (5, "Anu", 20, 28000, "2022-07-20");

mysql> select * from employee;
+-------+---------+--------+--------+------------+
| empId | empName | deptId | salary | join_Date  |
+-------+---------+--------+--------+------------+
|     1 | Ravi    |     10 |  25000 | 2018-06-01 |
|     2 | Suman   |     20 |  30000 | 2019-08-15 |
|     3 | Riya    |     10 |  27000 | 2020-01-10 |
|     4 | Karan   |     30 |  22000 | 2021-03-12 |
|     5 | Anu     |     20 |  28000 | 2022-07-20 |
+-------+---------+--------+--------+------------+

-- Data insert department Table
mysql> INSERT INTO department VALUES
                          (10, "Sales"),
                          (20, "HR"),
                          (30, "IT"),
                          (40, "Marketing");

mysql> select * from department;
+--------+-----------+
| deptId | deptName  |
+--------+-----------+
|     10 | Sales     |
|     20 | HR        |
|     30 | IT        |
|     40 | Marketing |
+--------+-----------+

-- 1. Display employee name and department name with inner join.
mysql> SELECT e.empname, d.deptname
       FROM employee e
       INNER JOIN department d ON e.deptid = d.deptid;   
+---------+----------+
| empname | deptname |
+---------+----------+
| Ravi    | Sales    |
| Suman   | HR       |
| Riya    | Sales    |
| Karan   | IT       |
| Anu     | HR       |
+---------+----------+

-- 2. Display all employee with department name including those with no department (Left Join).
mysql> SELECT e.empname, d.deptname
       FROM employee e
       LEFT JOIN department d ON e.deptid = d.deptid;    
+---------+----------+
| empname | deptname |
+---------+----------+
| Ravi    | Sales    |
| Suman   | HR       |
| Riya    | Sales    |
| Karan   | IT       |
| Anu     | HR       |
+---------+----------+

-- 3. Display total salary by department.
mysql> SELECT deptId,SUM(salary) AS Total_salary
       FROM employee
       GROUP BY deptid;
+--------+--------------+
| deptId | Total_salary |
+--------+--------------+
|     10 |        52000 |
|     20 |        58000 |
|     30 |        22000 |
+--------+--------------+

-- 4. Display average salary by department.
mysql> SELECT AVG(salary) AS Average_salary
       FROM employee
       GROUP BY deptid;
+----------------+
| Average_salary |
+----------------+
|     26000.0000 |
|     29000.0000 |
|     22000.0000 |
+----------------+

-- 5. Display departments with total salary greater than 50000.
mysql> SELECT SUM(salary) AS Total_salary
       FROM employee
       GROUP BY deptid
       HAVING Total_salary > 50000;
+--------------+
| Total_salary |
+--------------+
|        52000 |
|        58000 |
+--------------+

-- 6. Display departments with more than 1 employee.
mysql> SELECT deptid, COUNT(empid) AS emp_count
       FROM employee
       GROUP BY deptid
       HAVING COUNT(empid) > 1;
+--------+-----------+
| deptid | emp_count |
+--------+-----------+
|     10 |         2 |
|     20 |         2 |
+--------+-----------+

-- 7. Display employee who earn more than average salary.
mysql> SELECT empname, salary
       FROM employee
       WHERE salary > (SELECT AVG(salary) FROM employee);
+---------+--------+
| empname | salary |
+---------+--------+
| Suman   |  30000 |
| Riya    |  27000 |
| Anu     |  28000 |
+---------+--------+

-- 8. Display employee who works in sales department (using subquery).
mysql> SELECT empname
       FROM employee
       WHERE deptid = (SELECT deptid FROM department WHERE deptname = "Sales");
+---------+
| empname |
+---------+
| Ravi    |
| Riya    |
+---------+

-- 9. Display department that have employees more than 28000.
mysql> SELECT deptname
       FROM department
       WHERE deptid IN (SELECT deptid FROM employee WHERE salary > 28000);
+----------+
| deptname |
+----------+
| HR       |
+----------+

-- 10. Display employee with highest salary.
mysql> SELECT empname, salary
       FROM employee
       WHERE salary = (SELECT MAX(salary) FROM employee);
+---------+--------+
| empname | salary |
+---------+--------+
| Suman   |  30000 |
+---------+--------+

-- 11. Display department name and total salary for department with total_salary > 50000, only for employees join after 2019.
mysql> SELECT d.deptname, SUM(e.salary) AS Total_salary
       FROM employee e
       JOIN department d ON e.deptid = d.deptid
       WHERE join_date > "2019-01-01"
       GROUP BY deptname
       HAVING SUM(e.salary) > 50000;
+----------+--------------+
| deptname | Total_salary |
+----------+--------------+
| HR       |        58000 |
+----------+--------------+
```