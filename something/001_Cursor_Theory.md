
# 📘 MySQL Cursor, FETCH & Handler — Summary Notes
---
## 1️⃣ What is a Cursor?

* A **cursor** is a MySQL mechanism used to process records **row by row**
* It allows handling one row at a time instead of the whole result set
* A cursor **does not copy the table data**; it only maintains a **pointer**
## ✅ Definition of Cursor-

A cursor in MySQL is a database object used to retrieve and process query results one row at a time instead of all rows at once.

📌 Cursors are used when:

* Row-wise processing is required
* Per-record calculations or conditions are needed
---
## 2️⃣ Cursor Declaration

```sql
DECLARE emp_cursor CURSOR FOR
SELECT Salary FROM Employee;
```

* The cursor must be **declared before use**
* It stores the **address of the result set**, not the actual data
---
## 3️⃣ FETCH Statement (Core Operation)

```sql
FETCH emp_cursor INTO sal;
```

### Role of FETCH:

* Moves the cursor pointer to the **next row**
* Copies column values into **SQL variables**
* Each FETCH overwrites the previous value

📌 FETCH:

* Works only **after `OPEN`**
* Retrieves **one row per execution**
---
## 4️⃣ NOT FOUND Condition

* Triggered when the cursor has **no more rows**
* It is a **runtime condition**, not a syntax error
* Generated internally by MySQL during FETCH
---
## 5️⃣ CONTINUE HANDLER

```sql
DECLARE CONTINUE HANDLER FOR NOT FOUND
SET done = 1;
```

### Purpose:

* Catches the **NOT FOUND** condition
* Sets a **flag variable (`done`)**
* Does **not restart or repeat** the program

🧠 Analogy:

> The handler acts like an exam invigilator who silently watches and signals when work is finished.
---
## 6️⃣ Where Does Control Go After the Handler?

* After the handler executes,
* Control returns to the **statement immediately following the failed FETCH**

Example:

```sql
FETCH emp_cursor INTO sal;   -- fails (no row)
-- handler runs
IF done = 1 THEN             -- control resumes here
    LEAVE read_loop;
END IF;
```

📌 The handler **never calls FETCH again**
---
## 7️⃣ Loop Execution Order

```sql
read_loop: LOOP
    FETCH emp_cursor INTO sal;

    IF done = 1 THEN
        LEAVE read_loop;
    END IF;

    SET total = total + sal;
END LOOP;
```

### Execution Sequence:

1. FETCH
2. Handler (only if NOT FOUND)
3. IF condition check
4. Accumulation logic
5. Next iteration
---
## 8️⃣ When Does `IF done = 1` Execute?

* Only in the **final iteration**
* When FETCH finds **no more rows**
* The handler sets `done = 1`
* IF exits the loop safely
---
## 9️⃣ Why Is There No Infinite Loop?

* The handler only sets a flag
* Control does **not jump back to FETCH**
* The IF condition immediately exits the loop

Correct flow:

```
FETCH → HANDLER → IF → LEAVE LOOP
```
---
## 🔟 Cursor Memory Behavior

| Phase         | Memory Usage            |
|---------------|-------------------------|
| FETCH         | One row loaded          |
| Next FETCH    | Old data overwritten    |
| CLOSE cursor  | Memory released         |
| Procedure end | All variables destroyed |

📌 A cursor **never loads the entire table into RAM**
---
## 1️⃣1️⃣ Closing the Cursor

```sql
CLOSE emp_cursor;
```

* Destroys the cursor pointer
* Releases result set reference
* Frees allocated memory
---
## 1️⃣2️⃣ Important Exam Points

* A handler is an **observer**, not a decision maker
* The **IF condition** controls loop termination
* FETCH failure does **not crash** the procedure
* `SUM()` is faster than cursor-based processing
---
## 🏁 Final One-Line Definition

> **A MySQL cursor is a row-by-row iterator where FETCH retrieves data, the handler detects the end of data, and the IF condition safely terminates the loop.**
---
