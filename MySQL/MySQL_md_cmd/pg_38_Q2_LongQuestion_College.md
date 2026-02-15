``` sql
-- 1. Database Creation
mysql> Drop Database if exists College;
mysql> CREATE DATABASE College;
mysql> USE College;

mysql>
-- 2. Table Creation
-- Students Table
mysql> CREATE TABLE students (
           studentId INT PRIMARY KEY,
           name VARCHAR(50),
           department VARCHAR(30)
       );

-- Marks Table
mysql> CREATE TABLE marks (
           studentId INT,
           subject VARCHAR(20),
           mark INT
           );

-- 3. Data Insertion
-- Insert into Students
mysql> INSERT INTO students (studentId, name, department) VALUES
       (1, 'Alice', 'CSE'),
       (2, 'Bob', 'ECE'),
       (3, 'Charlie', 'CSE');
Records: 3  Duplicates: 0  Warnings: 0

-- Insert into Marks
mysql> INSERT INTO marks (studentId, subject, mark) VALUES
       (1, 'DBMS', 95),
       (2, 'DBMS', 65),
       (3, 'DBMS', 40);
Records: 3  Duplicates: 0  Warnings: 0

mysql> SELECT * FROM students;
+-----------+---------+------------+
| studentId | name    | department |
+-----------+---------+------------+
|         1 | Alice   | CSE        |
|         2 | Bob     | ECE        |
|         3 | Charlie | CSE        |
+-----------+---------+------------+
3 rows in set (0.00 sec)

mysql> SELECT * FROM marks;
+-----------+---------+------+
| studentId | subject | mark |
+-----------+---------+------+
|         1 | DBMS    |   95 |
|         2 | DBMS    |   65 |
|         3 | DBMS    |   40 |
+-----------+---------+------+
3 rows in set (0.00 sec)

-- 4. Stored Procedure(SP)
-- Display Students who Passed (marks>=50)
mysql> Delimiter //
mysql> Create Procedure passStu()
       Begin
        Select s.name, s.department, m.mark from students s
           join marks m
           on s.studentId=m.studentId
           having m.mark>90;
       end //

mysql> Delimiter ;
mysql> call passStu();
+-------+------------+------+
| name  | department | mark |
+-------+------------+------+
| Alice | CSE        |   95 |
+-------+------------+------+


-- 5. Trigger
-- Prevent inserting marks greater than 100
mysql> Delimiter //
mysql> Create Trigger gratermarks
       before insert on marks
       for each row
       begin
        if NEW.mark>100 then
        Signal SQLState '45000'
        set message_text="Marks can't exceed 100";
           end if;
       end//
mysql> Delimiter ;

mysql> insert into marks values(4,'math',101);
ERROR 1644 (45000): Marks can't exceed 100
mysql> insert into marks values(8,'Science',94);

mysql> insert into marks values(6,'Physics',560);
ERROR 1644 (45000): Marks can't exceed 100

mysql> select * from marks;
+-----------+---------+------+
| studentId | subject | mark |
+-----------+---------+------+
|         1 | DBMS    |   95 |
|         2 | DBMS    |   65 |
|         3 | DBMS    |   40 |
|         8 | Science |   94 |
+-----------+---------+------+
4 rows in set (0.00 sec)

-- 6. Cursor
-- Display All Students Name One by one.
mysql> drop Procedure if exists showStuOneByOne;

mysql> Delimiter //
mysql> Create Procedure showStuOneByOne()
       Begin
        declare done int default 0;
        declare sName varchar(50);
        declare cur_Students cursor for
           select name from students;
           declare continue handler for not found Set done=1;
        open cur_Students;
           read_loop:Loop
           fetch cur_Students into sName;
           If done=1 Then
           leave read_loop;
           end if;
           select sName as StudentName;
           End loop;
           close cur_Students;
       End//

mysql> Delimiter ;
mysql> call showStuOneByOne();
+-------------+
| StudentName |
+-------------+
| Alice       |
+-------------+
1 row in set (0.00 sec)
+-------------+
| StudentName |
+-------------+
| Bob         |
+-------------+
1 row in set (0.00 sec)
+-------------+
| StudentName |
+-------------+
| Charlie     |
+-------------+
1 row in set (0.00 sec)
```