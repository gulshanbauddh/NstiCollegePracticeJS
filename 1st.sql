set sql_safe_updates=0;
-- 1. Create Table name Employee. 
create table employee(
			emp_ID int primary key,
            emp_name varchar(50),
            department varchar(80),
            Salary int,
            city varchar(50)
            );
insert into employee values 
			(101,'Ravi','Sales',25000,'Delhi'),
      (102,'Megha','HR',35000,'Mumbai'),
      (103,'Ram','IT',45000,'Banglor'),
      (104,'Suman','IT',55000,'Delhi'),
      (105,'Anita','Selse',30000,'Mumbai');
			
insert into employee values 
			(101,'Ravi','Sales',25000,'Delhi'),
      (104,'Suman','IT',55000,'Delhi'),
            
-- 2. Display all employees.
Select * from employee;

-- 3. Display employee where work in IT department .
Select * from employee
where department='IT';

-- 4. Display employee who earn more than 30000 .
Select * from employee
where salary>30000;

-- 5. Delete employee from the city Delhi.
delete from employee
where city='delhi';

-- 6. Display highest salary .
select emp_name as Employee_Name, salary as MAX_Salary from employee
    where salary = (select max(salary) from employee);
--    (or 2nd type)
select * from employee
    where salary = (select max(salary) from employee);

-- 7. Display employee minimum salary.
select emp_name as Employee_Name, salary as MAX_Salary from employee
where salary = (select min(salary) from employee);

-- 8. Count number of employee in each department.
SELECT department,COUNT(EMP_ID) AS Num_of_Employee FROM EMPLOYEE
group by department;

-- 9. Display average salary of IT department. 
select  emp_name as Employee_Name, avg(salary) as Average_Salary
from employee
where department = 'IT'
group by emp_name;

-- 10. So employee sort by/order by salary DESC.
select * from employee
 order by salary desc;
 
select * from employee
 order by salary ASC;

-- 11. Display employees who name start with 'S' .
SELECT emp_name from employee
where emp_name like 'S%';

-- 12. Rename the table employee to employedDetails.
RENAME table employee to Emp_Details;
RENAME table Emp_Details TO employee;
