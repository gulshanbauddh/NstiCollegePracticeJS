``` sql
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
5 rows in set (0.00 sec)

mysql> select * from Department;
+--------+-----------+
| DeptId | DeptName  |
+--------+-----------+
|     11 | Sales     |
|     22 | HR        |
|     33 | IT        |
|     44 | Marketing |
+--------+-----------+
4 rows in set (0.00 sec)

-- Q2 Display the Employee name and Department name.
mysql> select e.Empname, d.DeptName from employee e
       inner join department d
       on e.DeptId=d.DeptId;
+----------+-----------+
| Empname  | DeptName  |
+----------+-----------+
| Moto     | Sales     |
| Abhishek | HR        |
| Ram      | IT        |
| Karan    | Marketing |
| Kiran    | Sales     |
+----------+-----------+
5 rows in set (0.00 sec)

-- Q3 Display total salary by department
mysql> Select d.DeptName, sum(e.Salary) as TotalSalary from employee e
       inner join department d
       on e.DeptId=d.DeptId
       group by e.DeptId;
+-----------+-------------+
| DeptName  | TotalSalary |
+-----------+-------------+
| Sales     |       53000 |
| HR        |       30000 |
| IT        |       27000 |
| Marketing |       22000 |
+-----------+-------------+
4 rows in set (0.00 sec)

-- Q4 Display Ddepartment with more than 1 employee.
mysql> Select d.DeptName, count(d.DeptName) as Employees from employee e
       inner join department d
       on e.DeptId=d.DeptId
       group by e.DeptId
       having Employees>1;
+----------+-----------+
| DeptName | Employees |
+----------+-----------+
| Sales    |         2 |
+----------+-----------+
1 row in set (0.00 sec)
```