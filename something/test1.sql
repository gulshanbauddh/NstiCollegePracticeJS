create database test1;
use test1;
-- Creation of Employee table
CREATE TABLE employee (
    empId INT,
    empName VARCHAR(10),
    deptId INT,
    salary INT,
    join_Date DATE
);
-- Creation of Department table
CREATE TABLE department (
    deptId INT, 
    deptName VARCHAR(10)
);

-- Data insert Employee Table
INSERT INTO employee VALUES 
					(1, "Ravi", 10, 25000, "2018-06-01"),
					(2, "Suman", 20, 30000, "2019-08-15"),
					(3, "Riya", 10, 27000, "2020-01-10"),
					(4, "Karan", 30, 22000, "2021-03-12"),
					(5, "Anu", 20, 28000, "2022-07-20");
select * from employee;                    
-- Data insert department Table
INSERT INTO department VALUES 
					(10, "Sales"), 
                    (20, "HR"), 
                    (30, "IT"), 
                    (40, "Marketing");
select * from department;
-- 1. Display employee name and department name with inner join.
SELECT e.empname, d.deptname 
FROM employee e 
INNER JOIN department d ON e.deptid = d.deptid;           

-- 2. Display all employee with department name including those with no department (Left Join).
SELECT e.empname, d.deptname 
FROM employee e 
LEFT JOIN department d ON e.deptid = d.deptid;       
                    
-- 3. Display total salary by department.
SELECT deptId,SUM(salary) AS Total_salary 
FROM employee 
GROUP BY deptid;

-- 4. Display average salary by department.
SELECT AVG(salary) AS Average_salary 
FROM employee 
GROUP BY deptid;

-- 5. Display departments with total salary greater than 50000.
SELECT SUM(salary) AS Total_salary 
FROM employee 
GROUP BY deptid 
HAVING Total_salary > 50000;

-- 6. Display departments with more than 1 employee.
SELECT deptid, COUNT(empid) AS emp_count 
FROM employee 
GROUP BY deptid 
HAVING COUNT(empid) > 1;

-- 7. Display employee who earn more than average salary.
SELECT empname, salary 
FROM employee 
WHERE salary > (SELECT AVG(salary) FROM employee);

-- 8. Display employee who works in sales department (using subquery).
SELECT empname 
FROM employee 
WHERE deptid = (SELECT deptid FROM department WHERE deptname = "Sales");

-- 9. Display department that have employees more than 28000.
SELECT deptname 
FROM department 
WHERE deptid IN (SELECT deptid FROM employee WHERE salary > 28000);

-- 10. Display employee with highest salary.
SELECT empname, salary 
FROM employee 
WHERE salary = (SELECT MAX(salary) FROM employee);

-- 11. Display department name and total salary for department with total_salary > 50000, only for employees join after 2019.
SELECT d.deptname, SUM(e.salary) AS Total_salary 
FROM employee e 
JOIN department d ON e.deptid = d.deptid 
WHERE join_date > "2019-01-01" 
GROUP BY deptname 
HAVING SUM(e.salary) > 50000;
                    