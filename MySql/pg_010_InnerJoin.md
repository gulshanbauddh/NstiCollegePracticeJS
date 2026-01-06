``` sql
 use nsti_mumbai_sql;
Database changed
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| 001_questions      |
| cli_q              |
| for_screenshort    |
| information_schema |
| mysql              |
| nsti               |
| nsti_mumbai_sql    |
| world              |
+--------------------+
14 rows in set (0.00 sec)

mysql> show tables;
+---------------------------+
| Tables_in_nsti_mumbai_sql |
+---------------------------+
| product                   |
+---------------------------+
1 row in set (0.00 sec)

mysql> create table employee(emp_id int primary key auto_increment,
    ->       emp_name varchar(50),
    ->       dept_id int,
    ->       salary int,
    ->       join_date date);
Query OK, 0 rows affected (0.02 sec)

mysql> insert into employee values(1,'Ravi',10,25000,'2018-06-01');
Query OK, 1 row affected (0.01 sec)

mysql> insert into employee (emp_name, dept_id,salary,join_date) values
    ->       ('Suman',20,30000,'2019-08-15'),
    ->       ('Riya',10,27000,'2020-01-10'),
    ->       ('Karan',30,22000,'2021-03-12'),
    ->       ('Anu',20,28000,'2022-07-20');
Query OK, 4 rows affected (0.01 sec)
Records: 4  Duplicates: 0  Warnings: 0

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

mysql> create table department(dept_id int,Dept_name varchar(50));
Query OK, 0 rows affected (0.02 sec)

mysql> insert into department values (10,'Sales'),(20,'HR'),(30,'IT'),(40,'Marketing');
Query OK, 4 rows affected (0.01 sec)
Records: 4  Duplicates: 0  Warnings: 0

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


```