-- set sql_safe_updates=0;
-- create database 001_Questions;
-- use 001_Questions;
-- -- drop database 001_Questions;
-- create table students (
-- ADD_NO int auto_increment unique not null,
-- SNAME VARCHAR(30) NOT NULL,
-- SEX varchar(5) NOT NULL,
-- GP_NAME VARCHAR(50) NOT NULL,
-- QUAL_PERCEN INT NOT null
-- );

-- DESC students;

insert INTO students
values
  (1010, 'JOB-SAVIO', 'M', 'SCIENCE_CS', 8);

INSERT INTO STUDENTS
  (SNAME, SEX, GP_NAME, QUAL_PERCEN)
VALUES
  ("Mayank", "M", "Science_CS", 95),
  ('LAKSHMI', 'F', 'COMMERCE', 92),
  ('DEVIKA', 'F', 'HUMANITIES', 91),
  ('NIKETH', 'M', 'SCIENCE_CS', 86),
  ('RESHMA', 'F', 'SCIENCE_BS', 81),
  ('REHNA', 'F', 'COMMERCE', 65),
  ('SONU', 'M', 'SCIENCE_BS', 81),
  ('SNEHA', 'F', 'COMMERCE', 91),
  ('JOB-SAVIO', 'M', 'SCIENCE_CS', 87),
  ('RAMU', 'M', 'HUMANITIES', 80);

-- Q-1 Display the above students table
select *
from students;

-- Q-2 Display the ADD_No, SNAME and SEX from the table
select ADD_no, SNAME, SEX
from students;

-- Q-3 Update the group name us commmerce Whose ADD_NO is 1001?
update students
set GP_NAME  = 'commerce'
where ADD_NO= 1001;

-- Q-4 Remove datis of studdents whose ADD_NO = 1004
delete from students
where ADD_NO=1004;

-- Q-5 Display the details of students whose ADD_NO = 1010
select *
from students
where ADD_NO = 1010;

-- Q-6 Display the details of students whose GP_NAME = Science_CS
select *
from students
where GP_NAME = 'Science_CS';

-- Q-7 Display the list of student whose Qual_percentages>80
select *
from students
where QUAL_PERCEN>90;

-- Q-8 Display the name of students whose belongs to commerce.
select *
from students
where GP_NAME='commerce';

-- Q-9 Display the students name and QUAl_PERCEN whose QUAL_PERCN >= 90
select Sname, QUAL_PERCEN
from students
where QUAL_PERCEN>=90;

-- Q-10 Display the list of students where GP_NAME = SCIENCE_BS
select *
from students
where GP_NAME = 'SCIENCE_BS';

-- Q-11 Display the details of students where GP_NAME <> SCIENCE_BS ?
select *
from students
where GP_NAME <> 'SCIENCE_BS';

-- Q-l2 Display the details of students where who is studing humanities and commerce.
select *
from students
where GP_NAME='HUMANITIES' or GP_NAME='commerce';

-- Q-13 Display the details of Students who is Study in Science_bs and Science_CS;
select *
from students
where GP_NAME in ('Science_BS', 'Science_CS');

-- Q-14 Display the list of students not study in humanities and commerce ?
select *
from students
where GP_NAME not in ('Science_BS', 'Science_CS');

-- Q-15 Display the list of Students whose QUAL_PERCEN>80 to 90
select *
from students
where QUAL_PERCEN between 80 and 90;

-- Q-16 Display the female students of Science_CS Department.
select *
from students
where SEX='F' and GP_NAME='Science_CS';

-- Q-17 Display the details of students either these  is humanities group or Qual_percentage>90
select *
from students
where GP_NAME='HUMANITIES' or QUAL_PERCEN>90;

-- Q-18 Display the Students name and group name where group name not in SCIENCE_CS, Commerce, Humanities.
select SNAME, GP_NAME
from students
where GP_NAME not in ('Science_CS', 'COMMERCE', 'HUMANITIES');
