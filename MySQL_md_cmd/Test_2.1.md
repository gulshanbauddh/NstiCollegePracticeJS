``` sql 
-- Test 2.2 (Gulshan)
-- Q1 Create Tables and insert fields

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

mysql> INSERT INTO Employee VALUES  (1, 'Moto', 11, 25000, '2011-06-01'),
                                    (2, 'Abhishek', 22, 30000, '2019-03-15'),
                                    (3, 'Ram', 33, 27000, '2020-01-10'),
                                    (4, 'Karan', 44, 22000, '2021-03-12'),
                                    (5, 'Kiran', 11, 28000, '2012-07-20');

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

-- Q2 Display the Employee name and Department name.
mysql> select e.EmpName, d.DeptName from employee e
       inner join department d
       on e.DeptId=d.DeptId;
+----------+-----------+
| EmpName  | DeptName  |
+----------+-----------+
| Moto     | Sales     |
| Abhishek | HR        |
| Ram      | IT        |
| Karan    | Marketing |
| Kiran    | Sales     |
+----------+-----------+

-- Q3 Display total salary by department
mysql> select d.DeptName, sum(e.Salary) from Employee e
       inner join department d
       on e.DeptId=d.DeptId
       group by e.DeptId;
+-----------+---------------+
| DeptName  | sum(e.Salary) |
+-----------+---------------+
| Sales     |         53000 |
| HR        |         30000 |
| IT        |         27000 |
| Marketing |         22000 |
+-----------+---------------+

-- Q4 Display Ddepartment with more than 1 employee.
mysql> select DeptName from department
       where deptid in (select deptid from employee group by deptid having count(deptid) > 1);
+----------+
| DeptName |
+----------+
| Sales    |
+----------+
``