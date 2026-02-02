create table employee(Emp_ID int primary key auto_increment,
                      Emp_name varchar(50),
                      Dept_ID int, 
                      Salary int
                    );
 -- drop table employee;
 
insert into employee (Emp_name,Dept_ID, Salary)
				          values 
				          	  ('Alice',10,30000),
                      ('Bob',20,40000),
                      ('John',10,35000),
                      ('John',30,45000);
select * from employee;
Create table Department (Dept_ID int,
                        Dept_Name varchar(25)
                        );
insert into Department values (10,'HR'),(20,'IT'),(30,'Finance');
select * from Department;

-- 	1. Using index with Where clause-
select * from employee
where emp_name='john';

-- 2. Using index with Order by
select emp_id,emp_name
from employee
order by emp_name;

-- 3. Using index with LIKE (prefix search)-
select emp_id,emp_name
from employee
where emp_name like 'jo%';

-- 4. Index used in Join queries-
-- Create Index
create index idx_dept_id on employee(dept_id);
select e.Emp_name,d.dept_name
from employee e
join department d
on e.dept_id=d.dept_Id;

-- Verify index usage (Very importent)-
Select * from employee
where emp_name='john';