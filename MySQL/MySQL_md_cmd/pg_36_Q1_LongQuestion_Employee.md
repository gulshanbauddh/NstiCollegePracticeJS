``` sql
mysql> Drop Database if exists pg_36_LongQuestion_Employee;
mysql> Create database pg_36_LongQuestion_Employee;
mysql> use pg_36_LongQuestion_Employee;
-- 1. Create Tables
-- Department
mysql> CREATE TABLE Department (
        DeptID int PRIMARY KEY,
        DeptName VARCHAR(50)
    );

-- Employee
mysql> CREATE TABLE Employee (
        EmpID INT PRIMARY KEY auto_increment,
        EmpName VARCHAR(50),
        DeptID INT,
        Salary INT,
        JoinDate DATE,
        FOREIGN KEY (DeptID) REFERENCES Department(DeptID)
    );

-- Salary Audit
mysql> CREATE TABLE SalaryAudit (
        AuditID INT AUTO_INCREMENT PRIMARY KEY,
        EmpID INT,
        OldSalary INT,
        NewSalary INT,
        ChangeDate DATE
    );

-- Insert Into department
mysql> insert into Department 
                values (10,'Sales'), 
                       (20,'HR'), 
                       (30,'IT'), 
                       (40,'Marketing');

-- Insert Into Employee
mysql> insert into employee (EmpID,empName, deptId,salary,joinDate)
                values(1,'Ravi',10,25000,'2018-06-01'),
                      (2,'Suman',20,30000,'2019-08-15'),
                      (3,'Riya',10,27000,'2020-01-10'),
                      (4,'Karan',30,22000,'2021-03-12'),
                      (5,'Anu',20,28000,'2022-07-20');

-- Insert Into SalaryAudit
-- Show All Tables
mysql> Select * from Department;
+--------+-----------+
| DeptID | DeptName  |
+--------+-----------+
|     10 | Sales     |
|     20 | HR        |
|     30 | IT        |
|     40 | Marketing |
+--------+-----------+

mysql> Select * from Employee;
+-------+---------+--------+--------+------------+
| EmpID | EmpName | DeptID | Salary | JoinDate   |
+-------+---------+--------+--------+------------+
|     1 | Ravi    |     10 |  25000 | 2018-06-01 |
|     2 | Suman   |     20 |  30000 | 2019-08-15 |
|     3 | Riya    |     10 |  27000 | 2020-01-10 |
|     4 | Karan   |     30 |  22000 | 2021-03-12 |
|     5 | Anu     |     20 |  28000 | 2022-07-20 |
+-------+---------+--------+--------+------------+

mysql> Select * from  SalaryAudit;
Empty set (0.00 sec)

-- 3. Indexing
mysql> Create Index idx_salary on Employee(Salary);

mysql>
-- 4- Stored Procedure
-- 4.1- Insert Employee using SP-
mysql> Delimiter //
mysql> Create procedure AddEmp(p_eName varchar(50), p_dId int, p_salary int, p_jDate Date)
    Begin
    insert into Employee (empName, deptId,salary,joinDate)
             values
                (p_eName, p_dId, p_salary, p_jDate);
    End //

mysql> Delimiter ;
mysql>
mysql> call AddEmp('Gulshan',20,28000,'2022-07-20');

mysql> call AddEmp('Sandeep', 20, 43000, '2021-02-20');

mysql> Select * from Employee;
+-------+---------+--------+--------+------------+
| EmpID | EmpName | DeptID | Salary | JoinDate   |
+-------+---------+--------+--------+------------+
|     1 | Ravi    |     10 |  25000 | 2018-06-01 |
|     2 | Suman   |     20 |  30000 | 2019-08-15 |
|     3 | Riya    |     10 |  27000 | 2020-01-10 |
|     4 | Karan   |     30 |  22000 | 2021-03-12 |
|     5 | Anu     |     20 |  28000 | 2022-07-20 |
|     6 | Gulshan |     20 |  28000 | 2022-07-20 |
|     7 | Sandeep |     20 |  43000 | 2021-02-20 |
+-------+---------+--------+--------+------------+

-- 4.2- Retrieve Employee with SP
mysql> Delimiter //
mysql> Create Procedure GetEmpByDept(IN Dept int)
    Begin
    Select * from employee where DeptId=Dept;
    End //

mysql> Delimiter ;
mysql> Call GetEmpBYDept(30);
+-------+---------+--------+--------+------------+
| EmpID | EmpName | DeptID | Salary | JoinDate   |
+-------+---------+--------+--------+------------+
|     4 | Karan   |     30 |  22000 | 2021-03-12 |
+-------+---------+--------+--------+------------+
1 row in set (0.00 sec)


mysql>
-- 5 Trigger
-- 5.1 After Update Trigger for salary Audit
mysql> Delimiter //
mysql> Create Trigger AfterUpdateSalary
    After Update on Employee
    for Each Row
    Begin
    if old.salary<>new.salary Then
    Insert into SalaryAudit (EmpID, OldSalary, NewSalary, ChangeDate)
                             values
                    (new.EmpId, Old.Salary, New.Salary, curdate());
    End if;
    End //

mysql> Delimiter ;
-- 6 Cursors
-- 6.1 Calculate total salary of all employees using a cursors.
mysql> Delimiter //
mysql> Create procedure TotalSalCursor()
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

mysql> Delimiter ;
mysql> Call TotalSalCursor();
+-------------+
| TotalSalary |
+-------------+
|      203000 |
+-------------+
1 row in set (0.00 sec)

```