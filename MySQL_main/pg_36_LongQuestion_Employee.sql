Drop Database if exists Application_1;
Create database Application_1;
use Application_1;
-- 1. Create Tables
-- Department
CREATE TABLE Department (
    DeptID int PRIMARY KEY,
    DeptName VARCHAR(50)
);
-- Employee
CREATE TABLE Employee (
    EmpID INT PRIMARY KEY,
    EmpName VARCHAR(50),
    DeptID INT,
    Salary INT,
    JoinDate DATE,
    FOREIGN KEY (DeptID) REFERENCES Department(DeptID)
);
-- Salary Audit 
CREATE TABLE SalaryAudit (
    AuditID INT AUTO_INCREMENT PRIMARY KEY,
    EmpID INT,
    OldSalary INT,
    NewSalary INT,
    ChangeDate DATE
);
-- Insert Into department
insert into Department values (10,'Sales'), (20,'HR'), (30,'IT'), (40,'Marketing');
-- Insert Into Employee
insert into employee (emp_name, dept_id,salary,join_date) 			
            values
				('Ravi',10,25000,'2018-06-01'),
                ('Suman',20,30000,'2019-08-15'),
                ('Riya',10,27000,'2020-01-10'),
                ('Karan',30,22000,'2021-03-12'),
                ('Anu',20,28000,'2022-07-20');
-- Insert Into SalaryAudit
-- Show All Tables
Select * from Department; Select * from Employee; Select * from  SalaryAudit;

-- 3. Indexing
Create Index idx_salary on Employee(Salary);

-- 4- Stored Procedure
-- 4.1- Insert Employee using SP-
Delimiter //
Create procedure AddEmp(IN eId int, eName varchar(50), dId int, salary int, jDate Date)
Begin
insert into Employee values (eId, ename, dId, salary, jDate);
End //
Delimiter ;

call AddEmp(1, 'Ravi', 10, 25000, '2018-06-01');
call AddEmp(2, 'rahul', 20, 43000, '2015-04-25');
-- 4.2- Retrieve Employee with SP 
Delimiter //
Create Procedure GetEmpByDept(IN Dept int)
Begin
Select * from employee where DeptId=Dept;
End //
Delimiter ;
Call GetEmpBYDept(30);

-- 5 Trigger
-- 5.1 After Update Trigger for salary Audit
Delimiter //
Create Trigger AfterUpdateSalary
After Update on Employee
for Each Row
Begin
if old.salary<>new.salary Then
Insert into SalaryAudit (EmpID, OldSalary, NewSalary, ChangeDate)
				values 
                (new.EmpId, Old.Salary, New.Salary, curdate());
end if;
End //
Delimiter ;
