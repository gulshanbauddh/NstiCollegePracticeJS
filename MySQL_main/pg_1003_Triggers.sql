-- MYSQL Table Triggers

-- Aim: Creating and executing MYSQL table triggers.
-- 1. BEFORE INSERT TRIGGER
set SQL_SAFE_UPDATES = 0;
Drop database if EXISTS pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;

CREATE TABLE EMPLOYEES (
    EMP_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
    NAME VARCHAR(100) NOT NULL,
    AGE INT
);
INSERT INTO EMPLOYEES (NAME, AGE)
VALUES
("TOM", 58),
("Jerry", 26),
("Orry", -46);
select*from Employees;
-- Step 3: Create BEFORE INSERT Trigger
Delimiter //
Create trigger AgeVerify
Before Insert On Employees
For Each Row
Begin
If New.Age<0 then
Set New.Age=0;
End If;
End //
Delimiter ;
-- Step 4: Insert More Records (After Trigger)
INSERT INTO EMPLOYEES (NAME, AGE)
VALUES
("Akansha", 25),
("Ayushi", -23),
("Anushka", -24);
select*from Employees;

-- 2. BEFORE UPDATE TRIGGER
-- Step 1: Create a New Table
CREATE TABLE EMPLOYES (
    EMP_ID INT PRIMARY KEY,
    EMP_NAME VARCHAR(25),
    AGE INT,
    SALARY FLOAT
);
-- Step 2: Insert Data
INSERT INTO EMPLOYES VALUES
(101, "JIMMY", 35, 70000),
(102, "SHANE", 30, 55000),
(103, "MARRY", 28, 62000),
(104, "JACK", 30, 92000);

-- Step 3: Create BEFORE UPDATE Trigger
Select * From EMPLOYES;
Delimiter //
Create Trigger UPT_Trigger
Before Update On EMPLOYES
For Each Row
Begin 
if New.SALARY>10000 Then
Set New.SALARY=85000;
ElseIf New.SALARY<10000 Then
Set New.SALARY=72000;
End if;
End //
Delimiter ;

-- Step 4: Update Records to Trigger Logic
UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 101;
UPDATE EMPLOYES SET SALARY = 12000 WHERE EMP_ID = 102;
UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 103;
UPDATE EMPLOYES SET SALARY = 18000 WHERE EMP_ID = 104;
Select * From EMPLOYES;