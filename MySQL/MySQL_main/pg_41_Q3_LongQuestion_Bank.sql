-- Q3. Banking Database Application(Long Question)-
-- 1. Database Creation
Drop Database if exists Bank;
CREATE DATABASE Bank;
USE Bank;

-- 2. Table Creation
-- Accounts Table
CREATE TABLE accounts (
    accNo INT PRIMARY KEY,
    customerName VARCHAR(50),
    balance INT
);
-- Transaction Table
CREATE TABLE transaction (
    txn_id INT AUTO_INCREMENT PRIMARY KEY,
    acc_no INT,
    txn_type VARCHAR(20),
    amount INT,
    txn_date DATE
);
-- 3. Data Insertion
-- Insert into accounts
INSERT INTO accounts (accNo, customerName, balance) VALUES 
(101, 'Alice', 10000),
(102, 'Bob', 8000),
(103, 'Charlie', 5000);

SELECT * FROM accounts;
SELECT * FROM transaction;
-- 4. Stored Procedure(SP)-
-- Deposite money into an account-
drop Procedure depositeMoney;
Delimiter //
Create Procedure depositeMoney(
						IN p_accNo INT,
                        IN P_amount INT
                        )
Begin
	update accounts
    Set balance=balance+p_amount
    Where accNo=p_accNo;
Insert Into transaction(acc_No,txn_type,amount,txn_date)
			values(p_accNo,'Deposit',p_amount,curdate());
end //
Delimiter ;
SELECT * FROM accounts;
SELECT * FROM transaction;

-- 5. Trigger
-- Prevnt Withdrawal of balance is insufficient-
Delimiter //
Create Trigger checkBalance
Before Insert on transaction
For Each Row
Begin
	IF NEW.txn_type='Withdraw' then
		if(select balance from accounts 
		   Where accNo=New.acc_No)<NEW.amount Then
           signal SQLSTATE '45000'
           SET message_Text='Insufficient Balance';
		END IF;
	END if;
End //
Delimiter ;
insert into transaction (acc_no, txn_type,amount,txn_date)
				Values (103,'Withdraw',7000,CurDate());
                
-- 6. Cursor
-- Display all account holders one by one-
Delimiter //
Create procedure showCustomers()
Begin
	declare done INT default 0;
	declare cName varchar(50);
	declare cur_accounts cursor for
    select customerName From Accounts;
	declare continue handler for Not Found Set done=1;
    open cur_accounts;
    read_loop: LOOP
		fetch cur_accounts INTO cName;
	IF done=1 Then
    leave read_loop;
    END if;
    select cName as CustomerName;
    END Loop;
    close cur_accounts;        
End//
delimiter ;
call showCustomers;
