--      			Stored Procedures
set SQL_SAFE_UPDATES = 0;
Drop database if EXISTS pg025_StoredProcedures;
create database pg025_StoredProcedures;
use pg025_StoredProcedures;
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

-- ======================================================================
-- ======================================================================
-- ======================================================================
-- ======================================================================
-- ======================================================================
-- ======================================================================
-- ======================================================================
-- ======================================================================

use stored_procedure;
Select * from employees;
Select * from departments;

-- Q-1 Create a simple procedure to display all employees



-- Q-2 Create a proceddure to display employees of a specific department (using parameters);                                                                             
Delimiter //
Create Procedure showEmpByDeptId(In p_deptID int)
begin
Select * from employees where dept_id=p_deptID;
end //
Delimiter ;

Delimiter //
Create Procedure ShowByDeptName(In p_DeptName varchar(20))
    begin
    Select e.emp_name, e.salary, d.dept_name from employees e
    join departments d
    on e.dept_id=d.dept_id
    where d.dept_name=p_DeptName;
    end //
Delimiter ;
-- Q-3 Create a procedure to calculate total salary of a department. (using OUT parameter).
drop procedure if exists totSalByout;
Delimiter //
Create procedure totSalByout(IN p_deptName varchar(20), out p_dept_name varchar(20), out p_sumSalary int)
Begin
	Select d.Dept_name, sum(e.salary) into p_dept_name, p_sumSalary from employees e
    Join departments d
    on e.dept_id=d.dept_id
    group by d.Dept_name
    having d.Dept_name=p_deptName;
end //
Delimiter ;

-- Q-4 Create a procedure to increase salary of an employees by a given amount (using IN procedure)



-- Q-5 Create a procedure using INOUT parameter to Increment a salary.




-- Q-6 Drop a stored Procedure.



-- Q-7 Display employees with Salary above a certain value and inccress their salary by 5000.



