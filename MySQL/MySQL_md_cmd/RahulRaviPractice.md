``` sql
mysql> -- Storade Procedure
mysql> Delimiter //
mysql> create procedure grateThen()
    -> begin
    -> Select s.name, m.mark from students s
    -> join marks m
    -> on s.studentId=m.studentId
    -> where m.mark>=50;
    -> end //
Query OK, 0 rows affected (0.01 sec)

mysql> call gratethen();
    -> //
+-------+------+
| name  | mark |
+-------+------+
| Alice |   95 |
| Bob   |   65 |
+-------+------+
2 rows in set (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

mysql> delimiter ;
mysql> call gratethen();
+-------+------+
| name  | mark |
+-------+------+
| Alice |   95 |
| Bob   |   65 |
+-------+------+
2 rows in set (0.00 sec)

Query OK, 0 rows affected (0.01 sec)

mysql> -- Indexing
mysql>
mysql> Create Index ravi on students (name,department);
Query OK, 0 rows affected (0.04 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> show index from students;
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment | Visible | Expression |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| students |          0 | PRIMARY  |            1 | studentId   | A         |           3 |     NULL |   NULL |      | BTREE      |         |               | YES     | NULL       |
| students |          1 | ravi     |            1 | name        | A         |           3 |     NULL |   NULL | YES  | BTREE      |         |               | YES     | NULL       |
| students |          1 | ravi     |            2 | department  | A         |           3 |     NULL |   NULL | YES  | BTREE      |         |               | YES     | NULL       |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
3 rows in set (0.02 sec)

mysql> drop index ravi on students;
Query OK, 0 rows affected (0.02 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> show index from students;
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment | Visible | Expression |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| students |          0 | PRIMARY  |            1 | studentId   | A         |           3 |     NULL |   NULL |      | BTREE      |         |               | YES     | NULL       |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
1 row in set (0.00 sec)

mysql> Create Index idx_mark on marks(mark);
Query OK, 0 rows affected (0.04 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> show index from students;
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| Table    | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment | Visible | Expression |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| students |          0 | PRIMARY  |            1 | studentId   | A         |           3 |     NULL |   NULL |      | BTREE      |         |               | YES     | NULL       |
+----------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
1 row in set (0.00 sec)

mysql> show index from marks;
+-------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| Table | Non_unique | Key_name | Seq_in_index | Column_name | Collation | Cardinality | Sub_part | Packed | Null | Index_type | Comment | Index_comment | Visible | Expression |
+-------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
| marks |          1 | idx_mark |            1 | mark        | A         |           3 |     NULL |   NULL | YES  | BTREE      |         |               | YES     | NULL       |
+-------+------------+----------+--------------+-------------+-----------+-------------+----------+--------+------+------------+---------+---------------+---------+------------+
1 row in set (0.01 sec)

mysql> Create Trigger markCheck
    -> Before insert on marks
    -> For Each row
    -> Begin
    -> if NEW.mark>100 then
    -> Signal SQLstate '45000'
    -> set message_text="100 se jyada Mark Nahe dena hai";
    -> end if;
    -> end//
Query OK, 0 rows affected (0.01 sec)

mysql> insert into marks values (4,'Hindi', 402);
ERROR 1644 (45000): 100 se jyada Mark Nahe dena hai

```