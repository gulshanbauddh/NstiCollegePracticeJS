``` sql
mysql> -- Create Table (Employee)
mysql> create table employee(emp_id int primary key auto_increment,
                 emp_name varchar(50),
                 dept_id int,
                 salary int,
                 join_date date
     );
Query OK, 0 rows affected (0.03 sec)

mysql> -- Insert into Employee
mysql> insert into employee
                      values
                 (1,'Ravi',10,25000,'2018-06-01');
Query OK, 1 row affected (0.01 sec)

mysql> insert into employee (emp_name, dept_id,salary,join_date)
                 values
                 ('Suman',20,30000,'2019-08-15'),
                 ('Riya',10,27000,'2020-01-10'),
                 ('Karan',30,22000,'2021-03-12'),
                 ('Anu',20,28000,'2022-07-20');
Query OK, 4 rows affected (0.00 sec)
Records: 4  Duplicates: 0  Warnings: 0

mysql> -- Create Table (Department)
mysql> create table department(dept_id int,Dept_name varchar(50));
Query OK, 0 rows affected (0.02 sec)

mysql> insert into department
                      values
                 (10,'Sales'),
                 (20,'HR'),
                 (30,'IT'),
                 (40,'Marketing');
Query OK, 4 rows affected (0.00 sec)
Records: 4  Duplicates: 0  Warnings: 0

mysql> -- Display Both Table
mysql> select * from employee;
+--------+----------+---------+--------+------------+
| emp_id | emp_name | dept_id | salary | join_date  |
+--------+----------+---------+--------+------------+
|      1 | Ravi     |      10 |  25000 | 2018-06-01 |
|      2 | Suman    |      20 |  30000 | 2019-08-15 |
|      3 | Riya     |      10 |  27000 | 2020-01-10 |
|      4 | Karan    |      30 |  22000 | 2021-03-12 |
|      5 | Anu      |      20 |  28000 | 2022-07-20 |
+--------+----------+---------+--------+------------+
5 rows in set (0.00 sec)

mysql> select * from department;
+---------+-----------+
| dept_id | Dept_name |
+---------+-----------+
|      10 | Sales     |
|      20 | HR        |
|      30 | IT        |
|      40 | Marketing |
+---------+-----------+
4 rows in set (0.00 sec)

mysql> -- a Display emp_Name and department_Name with inner Join ?
mysql> SELECT e.emp_name, d.dept_name
     from employee e
     INNER JOIN department d
     on e.dept_id=d.dept_id;
+----------+-----------+
| emp_name | dept_name |
+----------+-----------+
| Ravi     | Sales     |
| Suman    | HR        |
| Riya     | Sales     |
| Karan    | IT        |
| Anu      | HR        |
+----------+-----------+
5 rows in set (0.00 sec)

mysql>
mysql> -- b Display all Employees with department_name including those with no department (Left Join) ?
mysql> SELECT e.emp_name,d.dept_name
     from department d
     left join employee e
     on e.dept_id=d.dept_id;
+----------+-----------+
| emp_name | dept_name |
+----------+-----------+
| Riya     | Sales     |
| Ravi     | Sales     |
| Anu      | HR        |
| Suman    | HR        |
| Karan    | IT        |
| NULL     | Marketing |
+----------+-----------+
6 rows in set (0.00 sec)

mysql>
mysql> -- c Display Total Salary by Department?
mysql> select d.dept_name,sum(e.salary) as Total_Salary
     from employee e
     join department d
     on e.dept_id=d.dept_id
     group by d.Dept_name;
+-----------+--------------+
| dept_name | Total_Salary |
+-----------+--------------+
| Sales     |        52000 |
| HR        |        58000 |
| IT        |        22000 |
+-----------+--------------+
3 rows in set (0.00 sec)

mysql>
mysql> -- d. Display average salary by department?
mysql> select d.dept_name,avg(e.salary) as Avg_Salary
     from employee e
     join department d
     on e.dept_id=d.dept_id
     group by d.Dept_name;
+-----------+------------+
| dept_name | Avg_Salary |
+-----------+------------+
| Sales     | 26000.0000 |
| HR        | 29000.0000 |
| IT        | 22000.0000 |
+-----------+------------+
3 rows in set (0.00 sec)

mysql>
mysql> -- e. Display department with total salary > 50000 ?
mysql> select d.dept_name,sum(e.salary) as Total_Salary
     from employee e
     join department d
     on e.dept_id=d.dept_id
     group by d.Dept_name
     having sum(e.salary)>50000;
+-----------+--------------+
| dept_name | Total_Salary |
+-----------+--------------+
| Sales     |        52000 |
| HR        |        58000 |
+-----------+--------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- f. Display department more than one employee?
mysql> select dept_id,count(emp_id) as No_of_employee
     from employee
     group by dept_id
     having count(emp_id)>1;
+---------+----------------+
| dept_id | No_of_employee |
+---------+----------------+
|      10 |              2 |
|      20 |              2 |
+---------+----------------+
2 rows in set (0.00 sec)

mysql>
mysql> -- g. Display employee who are more than average salary?
mysql> select emp_name, salary
     from employee
     where salary>(select avg(salary) from employee);
+----------+--------+
| emp_name | salary |
+----------+--------+
| Suman    |  30000 |
| Riya     |  27000 |
| Anu      |  28000 |
+----------+--------+
3 rows in set (0.00 sec)

mysql>
mysql> -- h. Display employee who work in sales department (using subquery)?
mysql> select emp_name
     from employee
     where dept_id = (select dept_id from department where Dept_name='sales');
+----------+
| emp_name |
+----------+
| Ravi     |
| Riya     |
+----------+
2 rows in set (0.00 sec)

mysql>
mysql> -- i. Display department that have employee are more than 28000.
mysql> select dept_name
     from department
     where dept_id in (select dept_id from employee where salary>28000);
+-----------+
| dept_name |
+-----------+
| HR        |
+-----------+
1 row in set (0.00 sec)

mysql>
mysql> -- j. Display employee with the highest salary?
mysql> select emp_name,salary
     from employee
     where salary=(select max(salary) from employee);
+----------+--------+
| emp_name | salary |
+----------+--------+
| Suman    |  30000 |
+----------+--------+
1 row in set (0.00 sec)

mysql>
mysql> -- k. Display department name and total salary for department with total salary > 50000 only for employees join after 2019.
mysql> select d.dept_name,sum(e.salary) as Total_salary
     from employee e
     join department d
     on e.dept_id=d.dept_id
     where join_date>'2019-01-01'
     group by d.dept_name
     having sum(e.salary)>50000;
```


