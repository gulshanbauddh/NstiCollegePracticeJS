``` sql
-- VIEW COMMANDS pg(12-14)
-- AIM: Used to create a new table in a database with specified columns and data types, and perform various commands.
-- Step 1: CREATE TABLE Command
mysql> CREATE TABLE STUDENT (
           RollNo INT,
           Name VARCHAR(50),
           Maths INT,
           Science INT,
           English INT
       );

-- Step 2: INSERT Sample Data into STUDENT Table
mysql> INSERT INTO STUDENT (RollNo, Name, Maths, Science, English)
       VALUES
       (101, 'Rahul', 92, 85, 78),
       (102, 'Sneha', 88, 91, 80),
       (103, 'Amit', 76, 82, 90),
       (104, 'Priya', 95, 89, 93),
       (105, 'John', 67, 74, 70),
       (106, 'Anjali', 90, 88, 85),
       (107, 'Manav', 83, 76, 88);

mysql> Select * from student;
+--------+--------+-------+---------+---------+
| RollNo | Name   | Maths | Science | English |
+--------+--------+-------+---------+---------+
|    101 | Rahul  |    92 |      85 |      78 |
|    102 | Sneha  |    88 |      91 |      80 |
|    103 | Amit   |    76 |      82 |      90 |
|    104 | Priya  |    95 |      89 |      93 |
|    105 | John   |    67 |      74 |      70 |
|    106 | Anjali |    90 |      88 |      85 |
|    107 | Manav  |    83 |      76 |      88 |
+--------+--------+-------+---------+---------+

-- Step 3: CREATE VIEW Command
mysql> Create view HighMarkMath as Select RollNo, Maths from Student where Maths>85;

mysql> select * from HighMarkMath;
+--------+-------+
| RollNo | Maths |
+--------+-------+
|    101 |    92 |
|    102 |    88 |
|    104 |    95 |
|    106 |    90 |
+--------+-------+

-- Step 4: REPLACE VIEW Command
mysql> Create or Replace view HighMarkEnglish as Select RollNo, English from student where English>85;

mysql> select * from HighMarkEnglish;
+--------+---------+
| RollNo | English |
+--------+---------+
|    103 |      90 |
|    104 |      93 |
|    107 |      88 |
+--------+---------+

-- Step 5: DROP VIEW Command
mysql> Drop view if exists HighMarkMath;
```