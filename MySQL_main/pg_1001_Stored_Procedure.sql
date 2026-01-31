--      			Stored Procedures
set SQL_SAFE_UPDATES = 0;
Drop database if EXISTS pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;
-- Step 1: Create Table and Insert Data
-- Query for Table Creation:
CREATE TABLE employees (
    emp_id INT AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(100),
    salary DECIMAL(10,2),
    department VARCHAR(100)
);
-- Query for Inserting Data:
INSERT INTO employees (emp_name, salary, department)
VALUES
('Rahul', 50000.00, 'IT'),
('Sneha', 62000.50, 'HR'),
('Amit', 45000.75, 'Finance'),
('Priya', 70000.00, 'Marketing');
-- Query to View Data:
select * from employees;
-- Step 2: Create Stored Procedure with IN Parameters
-- Procedure Creation:
Delimiter //
Create procedure AddEmployee(
    in p_emp_name VARCHAR(100),
    in p_salary DECIMAL(10,2),
    in p_department VARCHAR(100)
    )
    begin
INSERT INTO employees(emp_name, salary, department) VALUES
(p_emp_name, p_salary, p_department);
select * from employees;
end //
Delimiter ;
-- Step 3: Call the procedure
call AddEmployee('kajal',95000,'SI');
CALL AddEmployee ('Rahul Deshmukh', 50000.00, 'HR');
CALL AddEmployee ('Sneha Joshi', 60000.00, 'IT');
-- drop procedure  if exists p_insertDate;

-- Stored Procedure with OUT Parameter
-- Procedure Creation:
Delimiter //
create procedure CountEmployeeByDeptName(IN p_DeptName varchar(100), Out p_count int)
begin
Select count(department) into p_count from employees
where department=p_DeptName;
end //
Delimiter ;

Call CountEmployeeByDeptName('SI', @emp_count);
Select @emp_count;
-- Drop procedure if exists CountEmployeeByDeptName;

-- Business Logic procedure with IF Condition
-- Procedure Creation:
Delimiter //
create procedure safeInsert(
	IN p_emp_name varchar(100),
    IN p_Salary int,
    IN department varchar(100)
    )
begin 
if(p_salary>0) Then
insert into employees(emp_name,salary,department) values
(p_emp_name, p_Salary, department);
else 
signal sqlstate '45000'
Set message_text='Salary must be grater then 0';
End if;
end //
Delimiter ;
call safeInsert('Gulshan',154202,'IT');
call safeInsert('Gulshan',-154202,'IT');
-- drop procedure if exists safeInsert;