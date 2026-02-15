-- Q2. long ?
drop database if exists longQuestion_2;
Create database if not exists longQuestion_2;
use longQuestion_2;

-- Create Table 
-- Students table
Create Table Students(
			studentId Int primary key,
            Name varchar(50),
            Department varchar(30)
            );
-- Marks table
Create table marks(
			StudentID int,
            Subject varchar(20),
            Mark int
            );
-- Insert Into Table
Insert Into Students values (1,'Alice','CSE'),(2,'Bob','ECE'),(3,'Charlie','CSE');
Insert Into Marks values (1,'DBMS',85),(2,'DBMS','65'),(3,'DBMS','40');
-- 4. Stored Procedure
-- Display Students who passed (Marks>=50)
Delimiter $$
Create Procedure passStudent()
    Begin
    Select s.studentId, s.Name, m.mark from Students s
    join Marks m
    on s.studentId =m.studentId
    having m.mark>=70;
    end $$
Delimiter ;
-- 5 Trigger
-- Prevent Inserting marks greater then 100.
Delimiter $$
 Create trigger markGreaterThen100
    Before insert on Marks
    For Each Row
    Begin
		If new.mark>100 then
		Signal SQLState '45000'
		Set Message_text = 'Marks can not exceed 100';
		End if;
    End $$
