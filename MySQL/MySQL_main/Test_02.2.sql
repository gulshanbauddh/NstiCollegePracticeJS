drop database test2_28_jan;
create database test2_28_jan;
use test2_28_jan;

-- Q1 Create Tables and insert fields

CREATE TABLE Employee (
    EmpId INT PRIMARY KEY,
    EmpName VARCHAR(50),
    DeptId INT,
    Salary INT,
    JoinDate DATE
);
CREATE TABLE Department (
    DeptId INT PRIMARY KEY,
    DeptName VARCHAR(50)
);
INSERT INTO Employee VALUES (1, 'Moto', 11, 25000, '2011-06-01'),
							(2, 'Abhishek', 22, 30000, '2019-03-15'),
							(3, 'Ram', 33, 27000, '2020-01-10'),
							(4, 'Karan', 44, 22000, '2021-03-12'),
							(5, 'Kiran', 11, 28000, '2012-07-20');
INSERT INTO Department VALUES (11,'Sales'),(22,'HR'),(33,'IT'),(44,'Marketing');
select * from Employee;
select * from Department;

-- Q2 Display avg salary by department

select d.deptname, avg(e.salary) as AverageSalary from employee e
inner join department d
on e.DeptId = d.DeptId
group by DeptName;

-- Q3 Display Employee with higest ssalary.

Select EmpName, salary from employee
where salary=(select max(salary) from employee);

-- Q4 Display department with total salary grater then 25000.

Select d.DeptName, sum(e.Salary) as GrateThen_25K from Employee e
inner join department d
on e.deptId=d.deptId
group by e.deptId
having sum(e.Salary)>25000;