-- pg_021_Stored_Procedure
use  nsti_mumbai_sql;
show tables;
select * from department;
select * from employee;

-- Q-1 Create a simple procedure to display all emplouees
DELIMITER //
CREATE procedure showAllEmployees()
Begin
Select * from employee;
End //
Delimiter ;

call showAllEmployees; -- Execute

-- Q-2 Create a proceddure to display employees of a specific department (using parameters);
Delimiter //
create procedure createEmpByDeptId(IN dept INT)
Begin
Select Emp_name,salary
from employee
where dept_id=dept;
end //
Delimiter ;

call createEmpByDeptId(20); -- Execute

-- Q-3 Create a procedure to calculate total salary of a department. (using OUT parameter).
Delimiter //
create procedure totalSalaryOfDept(IN deptID INT, Out  totalSal INT)
Begin 
	select Sum(salary) INTO TotalSal
    From employee
    where dept_id=deptID;
End //
Delimiter ;
-- Execute
-- drop procedure totalSalaryOfDept;
Call totalSalaryOfDept(10,@total1);
Call totalSalaryOfDept(20,@total2);

select @total1; 
select @total2;

-- Q-4 Create a procedure to iincrease salary of an employee by a given amount (using IN procedure)
Delimiter //
create procedure incSal(IN emp INT, IN increment INT)
begin     
	update employee
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

-- Q-7 Display employee with Salary above a certain value and inccress their salary by 5000.
Delimiter //
Create procedure raiseHighSalary(IN minSalary INT)
Begin 
	-- Display Before Raise Salary of Employee
select Emp_name,salary as Salary_Before
From employee
where salary>minSalary;

	-- Increase their Salary
UPDate employee
set salary = salary + 5000
where salary > minSalary;

	-- Display Alter Raise Salary of Employee
select Emp_name,salary as Salary_After
From employee
where salary>minSalary;
END //
Delimiter ;

call raiseHighSalary(27000);