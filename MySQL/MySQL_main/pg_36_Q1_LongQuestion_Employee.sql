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
    EmpID INT PRIMARY KEY auto_increment,
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
insert into employee (EmpID,empName, deptId,salary,joinDate)
            values
				(1,'Ravi',10,25000,'2018-06-01'),
                (2,'Suman',20,30000,'2019-08-15'),
                (3,'Riya',10,27000,'2020-01-10'),
                (4,'Karan',30,22000,'2021-03-12'),
                (5,'Anu',20,28000,'2022-07-20');
-- Insert Into SalaryAudit
-- Show All Tables
Select * from Department; 
Select * from Employee; 
Select * from  SalaryAudit;

-- 3. Indexing
Create Index idx_salary on Employee(Salary);

-- 4- Stored Procedure
-- 4.1- Insert Employee using SP-
Delimiter //
Create procedure AddEmp(p_eName varchar(50), p_dId int, p_salary int, p_jDate Date)
Begin
insert into Employee (empName, deptId,salary,joinDate)
		values 
            (p_eName, p_dId, p_salary, p_jDate);
End //
Delimiter ;

call AddEmp('Gulshan',20,28000,'2022-07-20');
call AddEmp('Sandeep', 20, 43000, '2021-02-20');
Select * from Employee;
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
End if;
End //
Delimiter ;
-- 6 Cursors
-- 6.1 Calculate total salary of all employees using a cursors.
Delimiter //
Create procedure TotalSalCursor()
    Begin
    declare done Int default 0;
    declare Sal Int;
    declare Total Int default 0;
    declare sal_cursor cursor for
    select salary from employee;
    Declare continue Handler for Not Found Set done=1;
    open sal_cursor;
    Read_Loop:Loop
    Fetch sal_cursor INTO sal;
    IF done=1 Then
    Leave read_Loop;
    End if;
    Set total=total+sal;
    End Loop;
    Close sal_cursor;
    select total as TotalSalary;
    End//
Delimiter ;
Call TotalSalCursor();
