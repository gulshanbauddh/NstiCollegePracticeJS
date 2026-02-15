``` sql 
Test 02.2 (Gulshan)
-- Q1 Create Tables and insert fields
mysql>
mysql> CREATE TABLE Employee (
           EmpId INT PRIMARY KEY,
           EmpName VARCHAR(50),
           DeptId INT,
           Salary INT,
           JoinDate DATE
       );

mysql> CREATE TABLE Department (
           DeptId INT PRIMARY KEY,
           DeptName VARCHAR(50)
       );

mysql> INSERT INTO Employee VALUES  (1,'Moto',11,25000,'2011-06-01'),
                                    (2,'Abhishek',22,30000,'2019-03-15'),
                                    (3,'Ram',33,27000,'2020-01-10'),
                                    (4,'Karan',44,22000,'2021-03-12'),
                                    (5,'Kiran',11,28000,'2012-07-20');

mysql> INSERT INTO Department VALUES (11,'Sales'),(22,'HR'),(33,'IT'),(44,'Marketing');

mysql> select * from Employee;
+-------+----------+--------+--------+------------+
| EmpId | EmpName  | DeptId | Salary | JoinDate   |
+-------+----------+--------+--------+------------+
|     1 | Moto     |     11 |  25000 | 2011-06-01 |
|     2 | Abhishek |     22 |  30000 | 2019-03-15 |
|     3 | Ram      |     33 |  27000 | 2020-01-10 |
|     4 | Karan    |     44 |  22000 | 2021-03-12 |
|     5 | Kiran    |     11 |  28000 | 2012-07-20 |
+-------+----------+--------+--------+------------+

mysql> select * from Department;
+--------+-----------+
| DeptId | DeptName  |
+--------+-----------+
|     11 | Sales     |
|     22 | HR        |
|     33 | IT        |
|     44 | Marketing |
+--------+-----------+

-- Q2 Display avg salary by department
mysql> select d.deptname, avg(e.salary) as AverageSalary from employee e
       inner join department d
       on e.DeptId = d.DeptId
       group by DeptName;
+-----------+---------------+
| deptname  | AverageSalary |
+-----------+---------------+
| Sales     |    26500.0000 |
| HR        |    30000.0000 |
| IT        |    27000.0000 |
| Marketing |    22000.0000 |
+-----------+---------------+

-- Q3 Display Employee with higest ssalary.
mysql> Select EmpName, salary from employee
       where salary=(select max(salary) from employee);
+----------+--------+
| EmpName  | salary |
+----------+--------+
| Abhishek |  30000 |
+----------+--------+

-- Q4 Display department with total salary grater then 25000.
mysql>Select d.DeptName, sum(e.Salary) as GrateThen_25K from Employee e
      inner join department d
      on e.deptId=d.deptId
      group by e.deptId
      having sum(e.Salary)>25000;
+----------+---------------+
| DeptName | GrateThen_25K |
+----------+---------------+
| Sales    |         53000 |
| HR       |         30000 |
| IT       |         27000 |
+----------+---------------+
```