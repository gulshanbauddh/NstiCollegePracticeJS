``` sql
--                       Implement Join

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| bigdb              |
| cli_q              |
| csa_batch          |
| information_schema |
| mysql              |
| nsti_mumbai_sql    |
| performance_schema |
| sakila             |
| sys                |
| world              |
+--------------------+

mysql> use cli_q;
-- Craete table Dept
mysql> CREATE TABLE Dept (DeptNo int, DeptName char(10), Location char(15), PRIMARY KEY (DeptNo));

mysql> DESC Dept; -- Descripe table
+----------+----------+------+-----+---------+-------+
| Field    | Type     | Null | Key | Default | Extra |
+----------+----------+------+-----+---------+-------+
| DeptNo   | int      | NO   | PRI | NULL    |       |
| DeptName | char(10) | YES  |     | NULL    |       |
| Location | char(15) | YES  |     | NULL    |       |
+----------+----------+------+-----+---------+-------+

mysql>
-- Craete table Empl
-- Ex: 1
mysql> CREATE TABLE Empl (EmpNo int, 
                          fName char(15), 
                          lName char(15), 
                          DeptNo int, 
                          EduLevel char(15), 
                          JobCode int, 
                          salary int, 
                          hireDate date, 
                          PRIMARY KEY(empNo), FOREIGN KEY (DeptNo) REFERENCES dept(DeptNo)
                        );

mysql> DESC Empl; -- Descripe table
+----------+----------+------+-----+---------+-------+
| Field    | Type     | Null | Key | Default | Extra |
+----------+----------+------+-----+---------+-------+
| EmpNo    | int      | NO   | PRI | NULL    |       |
| fName    | char(15) | YES  |     | NULL    |       |
| lName    | char(15) | YES  |     | NULL    |       |
| DeptNo   | int      | YES  | MUL | NULL    |       |
| EduLevel | char(15) | YES  |     | NULL    |       |
| JobCode  | int      | YES  |     | NULL    |       |
| salary   | int      | YES  |     | NULL    |       |
| hireDate | date     | YES  |     | NULL    |       |
+----------+----------+------+-----+---------+-------+

mysql>
mysql> -- Data Insertion (Dept & Empl):-
mysql> insert into Dept (Deptno, Deptname, Location) 
                        values 
                        (100, 'HR', 'Trivandrum'),
                        (101, 'Production', 'Kazhakkoottam'), 
                        (102, 'Marketing', 'Trivandrum'),
                        (103, 'Purchase', 'Trivandrum'),
                        (104, 'Sales', 'Attingal');

mysql> select * from Dept;
+--------+------------+---------------+
| DeptNo | DeptName   | Location      |
+--------+------------+---------------+
|    100 | HR         | Trivandrum    |
|    101 | Production | Kazhakkoottam |
|    102 | Marketing  | Trivandrum    |
|    103 | Purchase   | Trivandrum    |
|    104 | Sales      | Attingal      |
+--------+------------+---------------+

mysql> insert into Empl (EmpNo, fName, lName, DeptNo, EduLevel, JobCode, salary, hireDate) 
                        values 
                        (10001, 'Deepa', 'Mathew', 100, 'Degree', 1, 20000, '2017-05-10'), 
                        (10002, 'Aswin', 'Balachandran', 100, 'PG', 1,22000, '2016-01-05'), 
                        (10003, 'Deepak', 'Raj', 101, 'Diploma', 3, 16000, '2019-01-04'), 
                        (10004, 'Divya', 'Jayan', 102, 'MBA', 2,28000,'2017-10-10'), 
                        (10005, 'Karthik', 'Satyan', 102, 'MBA', 4,30000,'2018-12-01'), 
                        (10006, 'Manu', 'George', 101, 'ITI', 3, 12000, '2016-3-20'), 
                        (10007, 'Amal', 'Davis', 103, 'Degree', 2, 20000,'2017-2-1'), 
                        (10008, 'Sanal', 'Krishnan', 104, 'Degree', 2, 21000,'2016-2-21'), 
                        (10009, 'Kiran', 'Lal', 104, 'Degree', 2,22000,'2015-2-21'), 
                        (10010, 'Syam', 'Nair', 104, 'Degree', 2, 20000,'2017-2-10');

mysql> select * from Empl;
+-------+---------+--------------+--------+----------+---------+--------+------------+
| EmpNo | fName   | lName        | DeptNo | EduLevel | JobCode | salary | hireDate   |
+-------+---------+--------------+--------+----------+---------+--------+------------+
| 10001 | Deepa   | Mathew       |    100 | Degree   |       1 |  20000 | 2017-05-10 |
| 10002 | Aswin   | Balachandran |    100 | PG       |       1 |  22000 | 2016-01-05 |
| 10003 | Deepak  | Raj          |    101 | Diploma  |       3 |  16000 | 2019-01-04 |
| 10004 | Divya   | Jayan        |    102 | MBA      |       2 |  28000 | 2017-10-10 |
| 10005 | Karthik | Satyan       |    102 | MBA      |       4 |  30000 | 2018-12-01 |
| 10006 | Manu    | George       |    101 | ITI      |       3 |  12000 | 2016-03-20 |
| 10007 | Amal    | Davis        |    103 | Degree   |       2 |  20000 | 2017-02-01 |
| 10008 | Sanal   | Krishnan     |    104 | Degree   |       2 |  21000 | 2016-02-21 |
| 10009 | Kiran   | Lal          |    104 | Degree   |       2 |  22000 | 2015-02-21 |
| 10010 | Syam    | Nair         |    104 | Degree   |       2 |  20000 | 2017-02-10 |
+-------+---------+--------------+--------+----------+---------+--------+------------+


-- **Joins and Subqueries:**
-- 1. List employee number, name and department number for employees who are managers.
mysql>  select empno, Fname, lName, deptno from empl where jobcode =1;
+-------+-------+--------------+--------+
| empno | Fname | lName        | deptno |
+-------+-------+--------------+--------+
| 10001 | Deepa | Mathew       |    100 |
| 10002 | Aswin | Balachandran |    100 |
+-------+-------+--------------+--------+

-- 2. List employee last name, work department and salary for those in HR, Purchase and Sales department.

mysql>  select Empno, fname, lname, deptname, salary from empl 
        inner join dept on empl.deptno=dept.deptno 
        where deptname in ('HR', 'Purchase', 'Sales');
+-------+-------+--------------+----------+--------+
| Empno | fname | lname        | deptname | salary |
+-------+-------+--------------+----------+--------+
| 10001 | Deepa | Mathew       | HR       |  20000 |
| 10002 | Aswin | Balachandran | HR       |  22000 |
| 10007 | Amal  | Davis        | Purchase |  20000 |
| 10008 | Sanal | Krishnan     | Sales    |  21000 |
| 10009 | Kiran | Lal          | Sales    |  22000 |
| 10010 | Syam  | Nair         | Sales    |  20000 |
+-------+-------+--------------+----------+--------+

mysql>
mysql> -- 3. List the names of all employees who belong to the department having maximum number of employees.
mysql>  select fname from empl 
        where deptno = (select deptno from empl     
                        group by deptno 
                        order by count(empno) desc 
                        limit 1
                    );
+-------+
| fname |
+-------+
| Sanal |
| Kiran |
| Syam  |
+-------+

--                      Update Cursor

-- Ex:- Demonstrate how to retrieve and process each row from a MySQL table one-by-one using CURSOR, inside a stored procedure.

 -- 1.
mysql> Create database record;

mysql> Use record;

-- 2.
mysql>  CREATE TABLE employee (id INT PRIMARY KEY, 
                                name VARCHAR(100), 
                                salary DECIMAL(10, 2) 
                            );

-- 3.
mysql>  INSERT INTO employee (id, name, salary) 
                            VALUES 
                            (1, 'Sejal', 55000.00), 
                            (2, 'Ravi', 60000.00), 
                            (3, 'Aditi', 58000.00);

-- 4.
mysql> Select * from employee;
+----+-------+----------+
| id | name  | salary   |
+----+-------+----------+
|  1 | Sejal | 55000.00 |
|  2 | Ravi  | 60000.00 |
|  3 | Aditi | 58000.00 |
+----+-------+----------+

-- 5.
mysql> DELIMITER //
mysql> CREATE PROCEDURE process_employee_rows()
       BEGIN
           DECLARE emp_id INT;
           DECLARE emp_name VARCHAR(100);
           DECLARE emp_salary DECIMAL(10,2);
           DECLARE done INT DEFAULT FALSE;
      
           DECLARE emp_cursor CURSOR FOR
               SELECT id, name, salary FROM employee;
      
           DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
      
           OPEN emp_cursor;
      
           read_loop: LOOP
               FETCH emp_cursor INTO emp_id, emp_name, emp_salary;
      
               IF done THEN
                   LEAVE read_loop;
               END IF;
      
               SELECT CONCAT(
                   'Employee ID: ', emp_id,
                   ', Name: ', emp_name,
                   ', Salary: ', emp_salary
               ) AS Employee_Details;
           END LOOP;
      
           CLOSE emp_cursor;
       END;
       //

mysql> DELIMITER ;

mysql> CALL process_employee_rows();
+-----------------------------------------------+
| Employee_Details                              |
+-----------------------------------------------+
| Employee ID: 1, Name: Sejal, Salary: 55000.00 |
+-----------------------------------------------+


+----------------------------------------------+
| Employee_Details                             |
+----------------------------------------------+
| Employee ID: 2, Name: Ravi, Salary: 60000.00 |
+----------------------------------------------+


+-----------------------------------------------+
| Employee_Details                              |
+-----------------------------------------------+
| Employee ID: 3, Name: Aditi, Salary: 58000.00 |
+-----------------------------------------------+
