-- pg_021_Stored_Procedure
Drop database if exists pg_021_Stored_Procedure;
Create database pg_021_Stored_Procedure;
use pg_021_Stored_Procedure;
-- Create Table
CREATE TABLE employees (
    emp_id INT PRIMARY KEY,
    emp_name VARCHAR(50),
    dept_id INT,
    salary INT,
    join_date DATE
);
CREATE TABLE departments (
    dept_id INT,
    Dept_name VARCHAR(50)
);
INSERT INTO departments (dept_id, Dept_name) VALUES
(10, 'Sales'),
(20, 'HR'),
(30, 'IT'),
(40, 'Marketing');
-- Insert values
INSERT INTO employees (emp_id, emp_name, dept_id, salary, join_date) VALUES
(1, 'Ravi', 10, 9000, '2018-06-01'),
(2, 'Suman', 20, 69000, '2019-08-15'),
(3, 'Riya', 10, 27000, '2020-01-10'),
(4, 'Karan', 30, 22000, '2021-03-12'),
(5, 'Anu', 20, 58000, '2022-07-20');
select * from employees;
select * from departments;


-- Q-1 Create a simple procedure to display all employees
DELIMITER //
CREATE procedure showAllemployees()
Begin
Select * from employees;
End //
Delimiter ;

call showAllemployees; -- Execute

-- Q-2 Create a proceddure to display employees of a specific department (using parameters);
Delimiter //
create procedure createEmpByDeptId(IN dept INT)
Begin
Select Emp_name,salary
from employees
where dept_id=dept;
end //
Delimiter ;

call createEmpByDeptId(20); -- Execute

-- Q-3 Create a procedure to calculate total salary of a department. (using OUT parameter).
Delimiter //
create procedure totalSalaryOfDept(IN deptID INT, Out  totalSal INT)
Begin 
	select Sum(salary) INTO TotalSal
    From employees
    where dept_id=deptID;
End //
Delimiter ;
-- Execute
-- drop procedure totalSalaryOfDept;
Call totalSalaryOfDept(10,@total1);   
Call totalSalaryOfDept(20,@total2);

select @total1; 
select @total2;

-- Q-4 Create a procedure to increase salary of an employees by a given amount (using IN procedure)
Delimiter //
create procedure incSal(IN emp INT, IN increment INT)
begin     
	update employees
    set salary = salary+increment
    where emp_id=emp;
End //
Delimiter ;
-- drop procedure incSal;
call incSal (1,3000);
call incSal (2,3000);

-- Q-5 Create a procedure using INOUT parameter to Increment a salary.
Delimiter //
Create Procedure incrSalINOUT(INOUT sal INT)
Begin
    Set sal=sal+1000;
 End //
 Delimiter ;

set @s=2000;
call incrSalINOUT(@s);
Select @s;
-- drop procedure incrSalINOUT;

-- Q-6 Drop a stored Procedure.
drop procedure if exists incrSalINOUT;

-- Q-7 Display employees with Salary above a certain value and inccress their salary by 5000.
Delimiter //
Create procedure raiseHighSalary(IN minSalary INT)
Begin 
	-- Display Before Raise Salary of employees
select Emp_name,salary as Salary_Before
From employees
where salary>minSalary;

	-- Increase their Salary
UPDate employees
set salary = salary + 5000
where salary > minSalary;

	-- Display Alter Raise Salary of employees
select Emp_name,salary as Salary_After
From employees
where salary>minSalary;
END //
Delimiter ;

call raiseHighSalary(27000);