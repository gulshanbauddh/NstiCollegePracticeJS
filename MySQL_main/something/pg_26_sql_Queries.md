**Stored Procedure (process_employee_rows):**

```sql
DELIMITER //
CREATE PROCEDURE process_employee_rows()
BEGIN
DECLARE emp_id INT;
DECLARE emp_name VARCHAR(100);
DECLARE emp_salary DECIMAL(10,2);
DECLARE done INT DEFAULT FALSE;
DECLARE emp_cursor CURSOR FOR
SELECT id, name, salary FROM employee;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
OPEN emp_cursor;
read_loop: LOOP
FETCH emp_cursor INTO emp_id, emp_name, emp_salary;
IF done THEN
LEAVE read_loop;
END IF;
SELECT CONCAT('Employee ID: ', emp_id, ', Name:', emp_name, ', Salary: $', emp_salary);
END LOOP;
CLOSE emp_cursor;
END;//

DELIMITER ;

Call process_employee_rows(); 

```

**Stored Procedure (AddEmployee):**

```sql

CREATE TABLE employees ( emp_id INT AUTO_INCREMENT PRIMARY KEY, emp_name VARCHAR(100), salary DECIMAL(10,2), department VARCHAR(100) ); 

INSERT INTO employees (emp_name, salary, department) VALUES ('Rahul', 50000.00, 'IT'), ('Sneha', 62000.50, 'HR'), ('Amit', 45000.75, 'Finance'), ('Priya', 70000.00, 'Marketing'); 

Select*from employees; 

DELIMITER $$
CREATE PROCEDURE AddEmployee ( IN p_name VARCHAR(100), IN p_salary DECIMAL(10,2), IN p_department VARCHAR(100) )
BEGIN
INSERT INTO employees (emp_name, salary, department) VALUES (p_name, p_salary, p_department);
END$$

DELIMITER ; 


CALL AddEmployee ('Rahul Deshmukh', 50000.00, 'HR'); 

CALL AddEmployee ('Sneha Joshi', 60000.00, 'IT'); 

```

**Stored Procedure (CountEmployeesByDept and SafeAddEmployee):**

```sql
DELIMITER $$
CREATE PROCEDURE CountEmployeesByDept ( IN p_dept VARCHAR(100), OUT p_count INT )
BEGIN
SELECT COUNT(*) INTO p_count FROM employees WHERE department = p_dept;
END$$

DELIMITER ; 


CALL CountEmployeesByDept('IT', @emp_count); 

SELECT @emp_count;

DELIMITER $$
CREATE PROCEDURE SafeAddEmployee ( IN p_name VARCHAR(100), IN p_salary DECIMAL(10,2), IN p_department VARCHAR(100) )
BEGIN
IF p_salary > 0 THEN
INSERT INTO employees (emp_name, salary, department) VALUES (p_name, p_salary, p_department);
ELSE
SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Salary must be greater than 0';
END IF;
END$$

DELIMITER ; 

```