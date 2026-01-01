-- To show databases
show databases;

-- To Create database 
create database school;
use school;

-- To create a table 
create table STUDENT (
AD_No int unique primary key auto_increment,
SNAME varchar(60),
SEX varchar(6),
GP_NAME varchar(60),
QUAL_PERCENTAGE int
);

-- To Descrive My Table 
desc STUDENT; 

-- to Insert Data into STUDENT Table
insert into STUDENT
			values (1001, "NAVANEETH", "M", "SCIENCE_CS", 85);
insert into STUDENT
			(sname,sex,gp_name,Qual_percentage)
            values
			('DEVIKA', 'F', 'HUMANITIES', 91),
			('NIKETH', 'M', 'SCIENCE-CS', 86),
			('RESHMA', 'F', 'SCIENCE-BS', 81),
			('REHNA', 'F', 'COMMERCE', 65),
			('SONU', 'M', 'SCIENCE-BS', 81),
			('SNEHA', 'F', 'COMMERCE', 91),
			('JOB-SAVIO', 'M', 'SCIENCE-CS', 87),
			('RAMU', 'M', 'HUMANITIES', 80);

-- Qu.01 Display the Details of Student Table
select * from STUDENT;
-- Qu.02 Display the AD_No, Name, Sex from the Student table
select AD_No,SNAME,SEX from STUDENT;
-- Qu.03 Update the group Name from commerce AD_N0 = 1001
update STUDENT 
	SET GP_NAME = "COMMERCE"
    WHERE AD_No = 1001;
-- Qu,04 Remove the Details of Student whoose AD_No = 1004
delete from Student
where AD_No = 1004;
-- Qu.05 Display the Details of student whoose AD_No = 1010
select * from student
	where AD_No = 1010;
-- Qu.06 Display the name of student who belong to commerce
select SNAME from student
	WHERE GP_NAME = 'COMMERCE';
-- Qu.07 Display the Student Name & Qualification Name whoose Obtained Marks>=90%
select SNAME,QUAL_PERCENTAGE from student
	where QUAL_PERCENTAGE >= 90;
-- Qu.08 Display the student name where group name != Science_CS
select SNAME from student
	where GP_NAME != "SCIENCE_CS";