pg_26_sql_Queries

```sql

CREATE TABLE Dept (Deptno int, Deptname char(10), Location char(15), PRIMARY KEY (Deptno)); 

DESC Dept; 

CREATE TABLE Empl (Empno int, Fname char(15), Lname char(15), Deptno int, Edulevel char(15), Jobcode int, salary int, hiredate date, PRIMARY KEY(empno), FOREIGN KEY (Deptno) REFERENCES dept(Deptno)); 

DESC empl; 

```

**Data Insertion (Dept & Empl):**

```sql

insert into Dept (Deptno, Deptname, Location) values (100, 'HR', 'Trivandrum'), (101, 'Production', 'Kazhakkoottam'), (102, 'Marketing', 'Trivandrum'), (103, 'Purchase', 'Trivandrum'), (104, 'Sales', 'Attingal'); 

select * from Dept; 

insert into Empl (Empno, Fname, Lname, Deptno, Edulevel, Jobcode, salary, hiredate) values (10001, 'Deepa', 'Mathew', 100, 'Degree', 1, 20000, '2017-05-10'), (10002, 'Aswin', 'Balachandran', 100, 'PG', 1,22000, '2016-01-05'), (10003, 'Deepak', 'Raj', 101, 'Diploma', 3, 16000, '2019-01-04'), (10004, 'Divya', 'Jayan', 102, 'MBA', 2,28000,'2017-10-10'), (10005, 'Karthik', 'Satyan', 102, 'MBA', 4,30000,'2018-12-01'), (10006, 'Manu', 'George', 101, 'ITI', 3, 12000, '2016-3-20'), (10007, 'Amal', 'Davis', 103, 'Degree', 2, 20000,'2017-2-1'), (10008, 'Sanal', 'Krishnan', 104, 'Degree', 2, 21000,'2016-2-21'), (10009, 'Kiran', 'Lal', 105, 'Degree', 2,22000,'2015-2-21'), (10010, 'Syam', 'Nair', 104, 'Degree', 2, 20000,'2017-2-10'); 

select * from empl; 

```

**Joins and Subqueries:**

```sql

select empno, Fname, Iname, deptno from empl where jobcode =1; 

select Empno, fname, Iname, deptname, salary from empl inner join dept on empl.deptno=dept.deptno where deptname in ('Services', 'Planning', 'IC'); 
-- 3. List the names of all employees who belong to the department having maximum number of employees
select fname from empl where deptno (select deptno from empl group by deptno order by count(empno) desc limit 1); 

```

**Cursor and Stored Procedures:**

```sql

-- Ex:- Demonstrate how to retrieve and process each row from a MySQL table one-by-one using CURSOR, inside a stored procedure.
-- 1.
Create database record; 
Use record; 
-- 2.
CREATE TABLE employee (id INT PRIMARY KEY, name VARCHAR(100), salary DECIMAL(10, 2) );
-- 3.
INSERT INTO employee (id, name, salary) VALUES (1, 'Sejal', 55000.00), (2, 'Ravi', 60000.00), (3, 'Aditi', 58000.00); 
-- 4.
Select * from employee;

```

**Stored Procedure (process_employee_rows):**

```sql
DELIMITER //
CREATE PROCEDURE process_employee_rows()
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
SELECT CONCAT('Employee ID: ', emp_id, ', Name:', emp_name, ', Salary: $', emp_salary);
END LOOP;
CLOSE emp_cursor;
END;//

DELIMITER ;

Call process_employee_rows(); 

```

**Stored Procedure (AddEmployee):**

```sql

CREATE TABLE employees ( emp_id INT AUTO_INCREMENT PRIMARY KEY, emp_name VARCHAR(100), salary DECIMAL(10,2), department VARCHAR(100) ); 

INSERT INTO employees (emp_name, salary, department) VALUES ('Rahul', 50000.00, 'IT'), ('Sneha', 62000.50, 'HR'), ('Amit', 45000.75, 'Finance'), ('Priya', 70000.00, 'Marketing'); 

Select*from employees; 

DELIMITER $$
CREATE PROCEDURE AddEmployee ( IN p_name VARCHAR(100), IN p_salary DECIMAL(10,2), IN p_department VARCHAR(100) )
BEGIN
INSERT INTO employees (emp_name, salary, department) VALUES (p_name, p_salary, p_department);
END$$

DELIMITER ; 


CALL AddEmployee ('Rahul Deshmukh', 50000.00, 'HR'); 

CALL AddEmployee ('Sneha Joshi', 60000.00, 'IT'); 

```

**Stored Procedure (CountEmployeesByDept and SafeAddEmployee):**

```sql
DELIMITER $$
CREATE PROCEDURE CountEmployeesByDept ( IN p_dept VARCHAR(100), OUT p_count INT )
BEGIN
SELECT COUNT(*) INTO p_count FROM employees WHERE department = p_dept;
END$$

DELIMITER ; 


CALL CountEmployeesByDept('IT', @emp_count); 

SELECT @emp_count;

DELIMITER $$
CREATE PROCEDURE SafeAddEmployee ( IN p_name VARCHAR(100), IN p_salary DECIMAL(10,2), IN p_department VARCHAR(100) )
BEGIN
IF p_salary > 0 THEN
INSERT INTO employees (emp_name, salary, department) VALUES (p_name, p_salary, p_department);
ELSE
SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Salary must be greater than 0';
END IF;
END$$

DELIMITER ; 

```