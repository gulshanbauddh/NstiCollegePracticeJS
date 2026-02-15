``` sql
-- Q3. Banking Database Application(Long Question)-
-- 1. Database Creation
mysql> Drop Database if exists Bank;
mysql> CREATE DATABASE Bank;
mysql> USE Bank;


-- 2. Table Creation
-- Accounts Table
mysql> CREATE TABLE accounts (
           accNo INT PRIMARY KEY,
           customerName VARCHAR(50),
           balance INT
       );

-- Transaction Table
mysql> CREATE TABLE transaction (
           txn_id INT AUTO_INCREMENT PRIMARY KEY,
           acc_no INT,
           txn_type VARCHAR(20),
           amount INT,
           txn_date DATE
       );

-- 3. Data Insertion
-- Insert into accounts
mysql> INSERT INTO accounts (accNo, customerName, balance) VALUES
       (101, 'Alice', 10000),
       (102, 'Bob', 8000),
       (103, 'Charlie', 5000);
Records: 3  Duplicates: 0  Warnings: 0

mysql> SELECT * FROM accounts;
+-------+--------------+---------+
| accNo | customerName | balance |
+-------+--------------+---------+
|   101 | Alice        |   10000 |
|   102 | Bob          |    8000 |
|   103 | Charlie      |    5000 |
+-------+--------------+---------+

mysql> SELECT * FROM transaction;
       Empty set (0.00 sec)

-- 4. Stored Procedure(SP)-
-- Deposite money into an account-
mysql> drop Procedure depositeMoney;
ERROR 1305 (42000): PROCEDURE bank.depositeMoney does not exist
mysql> Delimiter //
mysql> Create Procedure depositeMoney(
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

mysql> Delimiter ;
mysql> SELECT * FROM accounts;
+-------+--------------+---------+
| accNo | customerName | balance |
+-------+--------------+---------+
|   101 | Alice        |   10000 |
|   102 | Bob          |    8000 |
|   103 | Charlie      |    5000 |
+-------+--------------+---------+

mysql> SELECT * FROM transaction;
       Empty set (0.00 sec)

-- 5. Trigger
-- Prevnt Withdrawal of balance is insufficient-
mysql> Delimiter //
mysql> Create Trigger checkBalance
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

mysql> Delimiter ;
mysql> insert into transaction (acc_no, txn_type,amount,txn_date)
                        Values (103,'Withdraw',7000,CurDate());
        ERROR 1644 (45000): Insufficient Balance
mysql>
-- 6. Cursor
-- Display all account holders one by one-
mysql> Delimiter //
mysql> Create procedure showCustomers()
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

mysql> delimiter ;
mysql> call showCustomers;
+--------------+
| CustomerName |
+--------------+
| Alice        |
+--------------+
1 row in set (0.00 sec)
+--------------+
| CustomerName |
+--------------+
| Bob          |
+--------------+
1 row in set (0.00 sec)
+--------------+
| CustomerName |
+--------------+
| Charlie      |
+--------------+
1 row in set (0.00 sec)

```