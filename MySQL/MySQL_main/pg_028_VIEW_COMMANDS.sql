-- VIEW COMMANDS
-- AIM: Used to create a new table in a database with specified columns and data types, and perform various commands.
-- Step 1: CREATE TABLE Command
set SQL_SAFE_UPDATES = 0;
Drop database if exists pg101_StoredProcedures;
create database pg101_StoredProcedures;
use pg101_StoredProcedures;
-- Step 1: CREATE TABLE Command
CREATE TABLE STUDENT (
    RollNo INT,
    Name VARCHAR(50),
    Maths INT,
    Science INT,
    English INT
);
-- Step 2: INSERT Sample Data into STUDENT Table
INSERT INTO STUDENT (RollNo, Name, Maths, Science, English) 
VALUES
(101, 'Rahul', 92, 85, 78),
(102, 'Sneha', 88, 91, 80),
(103, 'Amit', 76, 82, 90),
(104, 'Priya', 95, 89, 93),
(105, 'John', 67, 74, 70),
(106, 'Anjali', 90, 88, 85),
(107, 'Manav', 83, 76, 88);
Select * from student;
-- Step 3: CREATE VIEW Command
Create view HighMarkMath as Select RollNo, Maths from Student where Maths>85;
select * from HighMarkMath;
-- Step 4: REPLACE VIEW Command
Create or Replace view HighMarkEnglish as Select RollNo, English from student where English>85;
select * from HighMarkEnglish;
-- Step 5: DROP VIEW Command
Drop view if exists HighMarkMath;
