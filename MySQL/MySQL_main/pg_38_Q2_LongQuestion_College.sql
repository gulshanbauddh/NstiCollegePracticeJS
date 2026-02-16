-- 1. Database Creation
Drop Database if exists College;
CREATE DATABASE College;
USE College;

-- 2. Table Creation
-- Students Table
CREATE TABLE students (
    studentId INT PRIMARY KEY,
    name VARCHAR(50),
    department VARCHAR(30)
);
-- Marks Table
CREATE TABLE marks (
    studentId INT,
    subject VARCHAR(20),
    mark INT
    );
-- 3. Data Insertion
-- Insert into Students
INSERT INTO students (studentId, name, department) VALUES 
(1, 'Alice', 'CSE'),
(2, 'Bob', 'ECE'),
(3, 'Charlie', 'CSE');
-- Insert into Marks
INSERT INTO marks (studentId, subject, mark) VALUES 
(1, 'DBMS', 95),
(2, 'DBMS', 65),
(3, 'DBMS', 40);

SELECT * FROM students;
SELECT * FROM marks;
-- 4. Stored Procedure(SP)
-- Display Students who Passed (marks>=50)
Delimiter //
Create Procedure passStu()
Begin 
	Select s.name, s.department, m.mark from students s
    join marks m
    on s.studentId=m.studentId
    where m.mark>90;
end //
Delimiter ;
call passStu();
-- 5. Trigger
-- Prevent inserting marks greater than 100
Delimiter //
Create Trigger gratermarks
before insert on marks
for each row
begin
	if NEW.mark>100 then
	Signal SQLState '45000'
	set message_text="Marks can't exceed 100";
    end if;
end//
Delimiter ;
insert into marks values(4,'math',101);
insert into marks values(8,'Science',94);
insert into marks values(6,'Physics',560);
select * from marks;
-- 6. Cursor
-- Display All Students Name One by one.
drop Procedure if exists showStuOneByOne;
Delimiter //
Create Procedure showStuOneByOne()
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
Delimiter ;
call showStuOneByOne();
