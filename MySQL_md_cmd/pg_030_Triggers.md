``` sql
-- MYSQL Table Triggers (pg-15 to pg-18)

-- Aim: Creating and executing MYSQL table triggers.
-- 1. BEFORE INSERT TRIGGER
mysql> set SQL_SAFE_UPDATES = 0;

mysql> Drop database pg101_StoredProcedures;

mysql> create database pg101_StoredProcedures;

mysql> use pg101_StoredProcedures;
Database changed
mysql>
mysql> CREATE TABLE EMPLOYEES (
             EMP_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
             NAME VARCHAR(100) NOT NULL,
             AGE INT
         );

mysql> INSERT INTO EMPLOYEES (NAME, AGE)
         VALUES
         ("TOM", 58),
         ("Jerry", 26),
         ("Orry", -46);

mysql> select*from Employees;
+--------+-------+------+
| EMP_ID | NAME  | AGE  |
+--------+-------+------+
|      1 | TOM   |   58 |
|      2 | Jerry |   26 |
|      3 | Orry  |  -46 |
+--------+-------+------+

-- Step 3: Create BEFORE INSERT Trigger
mysql> Delimiter //
mysql> Create trigger AgeVerify
         Before Insert On Employees
         For Each Row
         Begin
         If New.Age<0 then
         Set New.Age=0;
         End If;
         End //

mysql> Delimiter ;
-- Step 4: Insert More Records (After Trigger)
mysql> INSERT INTO EMPLOYEES (NAME, AGE)
         VALUES
         ("Akansha", 25),
         ("Ayushi", -23),
         ("Anushka", -24);

mysql> select*from Employees;
+--------+---------+------+
| EMP_ID | NAME    | AGE  |
+--------+---------+------+
|      1 | TOM     |   58 |
|      2 | Jerry   |   26 |
|      3 | Orry    |  -46 |
|      4 | Akansha |   25 |
|      5 | Ayushi  |    0 |
|      6 | Anushka |    0 |
+--------+---------+------+

-- 2. BEFORE UPDATE TRIGGER
-- Step 1: Create a New Table
mysql> CREATE TABLE EMPLOYES (
             EMP_ID INT PRIMARY KEY,
             EMP_NAME VARCHAR(25),
             AGE INT,
             SALARY FLOAT
         );

-- Step 2: Insert Data
mysql> INSERT INTO EMPLOYES VALUES
         (101, "JIMMY", 35, 70000),
         (102, "SHANE", 30, 55000),
         (103, "MARRY", 28, 62000),
         (104, "JACK", 30, 92000);
Records: 4  Duplicates: 0  Warnings: 0

-- Step 3: Create BEFORE UPDATE Trigger
mysql> Select * From EMPLOYES;
+--------+----------+------+--------+
| EMP_ID | EMP_NAME | AGE  | SALARY |
+--------+----------+------+--------+
|    101 | JIMMY    |   35 |  70000 |
|    102 | SHANE    |   30 |  55000 |
|    103 | MARRY    |   28 |  62000 |
|    104 | JACK     |   30 |  92000 |
+--------+----------+------+--------+

mysql> Delimiter //
mysql> Create Trigger UPT_Trigger
         Before Update On EMPLOYES
         For Each Row
         Begin
         if New.SALARY>10000 Then
         Set New.SALARY=85000;
         ElseIf New.SALARY<10000 Then
         Set New.SALARY=72000;
         End if;
         End //

mysql> Delimiter ;

-- Step 4: Update Records to Trigger Logic
mysql> UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 101;
mysql> UPDATE EMPLOYES SET SALARY = 12000 WHERE EMP_ID = 102;
mysql> UPDATE EMPLOYES SET SALARY = 8000 WHERE EMP_ID = 103;
mysql> UPDATE EMPLOYES SET SALARY = 18000 WHERE EMP_ID = 104;

mysql> Select * From EMPLOYES;
+--------+----------+------+--------+
| EMP_ID | EMP_NAME | AGE  | SALARY |
+--------+----------+------+--------+
|    101 | JIMMY    |   35 |  72000 |
|    102 | SHANE    |   30 |  85000 |
|    103 | MARRY    |   28 |  72000 |
|    104 | JACK     |   30 |  85000 |
+--------+----------+------+--------+
```