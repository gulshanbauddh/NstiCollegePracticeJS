SHOW databases;
DROP database employee;
create database MySchool;
use myschool;
show tables;
create table students(
 id int(10) primary key auto_increment,
 sName varchar(25),
 sFName varchar(25),
 sFName  int unsigned,
 school varchar(50)  default "ABC school"
);
desc students;

insert into students (sNaMe, sfnaMe, moBnum)
value ('Ravi','Karan2',734824894),('Ravi1','Karan2',734814894);

select * from students;
select id, school, sname from students limit 20;
select id, school, sname from students where sname='ravi' & id=1; 	  
select id, school, sname from students where sname='ravi1' and school='xyza' or id=1;  
select id, school, sname from students where sname='ravi' limit 5; 	  
select id, school, sname from students where not sname='ravi'; 	  

select distinct sname from students;

-- 6️ DISTINCT – Duplicate hatana
SELECT * FROM STUDENTS order by SNAME DESC;
SELECT * FROM STUDENTS order by SNAME asc;

SELECT * FROM STUDENTS LIMIT 10 OFFSET 20;

SELECT * FROM STUDENTS where SNAME LIKE 'r%' and school like 'A%';

SELECT * FROM STUDENTS where id between 10 and 30;

SELECT COUNT(*)
FROM STUDENTS
where ID;

SELECT SFNAME, COUNT(*)
FROM STUDENTS
group by SFNAME;

SELECT SFNAME FROM STUDENTS group by SFNAME;
SELECT SFNAME, COUNT(*) FROM STUDENTS group by SFNAME;

SELECT SFNAME, AVG(ID) FROM STUDENTS group by SFNAME having AVG(ID)>25;

select * from students limit 5;

insert into students (sNaMe, school, mobnum)
value ('Test ','number',4294967296);

describe students;

-- Alter
-- Alter Delete Row
ALTER TABLE students
drop place,
drop sr_no;

ALTER TABLE students
drop grade;

-- Alter Add Row
ALTER TABLE students
add Grade varchar(5) not null;

-- modify table
-- modify (Use for change datatype etc)
alter table students
modify grade varchar(100);

-- change (use for change column name and data type etc)
alter table students
change grade Student_Grade int not null;

ALTER TABLE students
change Student_Grade grade int;



