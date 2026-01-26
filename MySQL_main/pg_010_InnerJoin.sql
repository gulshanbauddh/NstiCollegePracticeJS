set SQL_SAFE_UPDATES = 0;
drop database pg_010_Employee_Table;
create database pg_010_Employee_Table;
use pg_010_Employee_Table;
-- Create Table (Employee)
create table employee(emp_id int primary key auto_increment,
            emp_name varchar(50),
            dept_id int,
            salary int,
            join_date date
);
-- Insert into Employee
insert into employee 
			values
            (1,'Ravi',10,25000,'2018-06-01');
insert into employee (emp_name, dept_id,salary,join_date) 			
            values
                ('Suman',20,30000,'2019-08-15'),
                ('Riya',10,27000,'2020-01-10'),
                ('Karan',30,22000,'2021-03-12'),
                ('Anu',20,28000,'2022-07-20');
-- Create Table (Department)
create table department(dept_id int,Dept_name varchar(50));
insert into department values 
                (10,'Sales'),
                (20,'HR'),
                (30,'IT'),
                (40,'Marketing');
-- Display Both Table
select * from employee;
select * from department;
-- a Display emp_Name and department_Name with inner Join ?
SELECT e.emp_name, d.dept_name
from employee e
INNER JOIN department d
on e.dept_id=d.dept_id;

-- b Display all Employees with department_name including those with no department (Left Join) ?
SELECT e.emp_name,d.dept_name
from department d
left join employee e
on e.dept_id=d.dept_id;

-- c Display Total Salary by Department?
select d.dept_name,sum(e.salary) as Total_Salary
from employee e
join department d
on e.dept_id=d.dept_id
group by d.Dept_name;

-- d. Display average salary by department?
select d.dept_name,avg(e.salary) as Avg_Salary
from employee e
join department d
on e.dept_id=d.dept_id
group by d.Dept_name;

-- e. Display department with total salary > 50000 ?
select d.dept_name,sum(e.salary) as Total_Salary
from employee e
join department d
on e.dept_id=d.dept_id
group by d.Dept_name
having sum(e.salary)>50000;

-- f. Display department more than one employee?
select dept_id,count(emp_id) as No_of_employee
from employee
group by dept_id
having count(emp_id)>1;

-- g. Display employee who are more than average salary? 
select emp_name, salary
from employee
where salary>(select avg(salary) from employee);

-- h. Display employee who work in sales department (using subquery)?
select emp_name
from employee
where dept_id = (select dept_id from department where Dept_name='sales');

-- i. Display department that have employee are more than 28000.
select dept_name
from department
where dept_id in (select dept_id from employee where salary>28000);

-- j. Display employee with the highest salary?
select emp_name,salary
from employee
where salary=(select max(salary) from employee);

-- k. Display department name and total salary for department with total salary > 50000 only for employees join after 2019.
select d.dept_name,sum(e.salary) as Total_salary
from employee e
join department d
on e.dept_id=d.dept_id
where join_date>'2019-01-01'
group by d.dept_name
having sum(e.salary)>50000;