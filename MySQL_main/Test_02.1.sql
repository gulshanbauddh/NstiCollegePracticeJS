-- Test 2.2 (Gulshan)
drop database if exists test2_28_jan;
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

-- Q2 Display the Employee name and Department name.
select e.EmpName, d.DeptName from employee e
inner join department d
on e.DeptId=d.DeptId;

-- Q3 Display total salary by department
select d.DeptName, SUM(e.Salary) from Employee e
inner join department d
on e.DeptId=d.DeptId
group by d.DeptName;

-- Q4 Display Ddepartment with more than 1 employee.
select DeptName from department
where deptid in (select deptid from employee group by deptid having count(deptid) > 1);
