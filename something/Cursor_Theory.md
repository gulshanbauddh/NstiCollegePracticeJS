Bilkul! 😄
Chaliye **MySQL Cursor** ko **simple + practical** tareeke se samajhte hain — **definition → use → example → common errors → practice questions** 💡

---

## 🔹 MySQL me Cursor kya hota hai?

**Cursor** MySQL ka ek special object hota hai jo **SELECT query ke result ko row-by-row read** karta hai.

📌 Normally:

```sql
SELECT * FROM employee;
```

👉 Saari rows ek saath aa jati hain

📌 Cursor ke saath:
👉 **Ek-ek row ko process** kar sakte hain (loop ke through)

---

## 🔹 Cursor kab use hota hai?

Cursor ka use hota hai jab:

* Har row par **logic / calculation** lagani ho
* **Loop ke andar row-wise processing** karni ho
* Trigger / Stored Procedure me **complex operations** karne ho

⚠️ Cursor **sirf Stored Procedure** me use hota hai
⚠️ Trigger me cursor use **allowed nahi hota**

---

## 🔹 Cursor ka basic structure

Cursor use karne ke **5 compulsory steps** hote hain 👇

| Step | Keyword         | Kaam                     |
| ---- | --------------- | ------------------------ |
| 1️⃣  | DECLARE CURSOR  | Cursor define karna      |
| 2️⃣  | DECLARE HANDLER | End of rows handle karna |
| 3️⃣  | OPEN            | Cursor open karna        |
| 4️⃣  | FETCH           | Row read karna           |
| 5️⃣  | CLOSE           | Cursor close karna       |

---

## 🔹 Simple Example (Important 🔥)

### 🎯 Task:

Employee table ke **salary ka total** nikalna cursor se

### 📌 Table:

```sql
Employee(EmpId, Name, Salary)
```

---

### ✅ Stored Procedure with Cursor

```sql
DELIMITER //

CREATE PROCEDURE TotalSalary()
BEGIN
    DECLARE done INT DEFAULT 0;
    DECLARE sal INT;
    DECLARE total INT DEFAULT 0;

    DECLARE emp_cursor CURSOR FOR
    SELECT Salary FROM Employee;

    DECLARE CONTINUE HANDLER FOR NOT FOUND
    SET done = 1;

    OPEN emp_cursor;

    read_loop: LOOP
        FETCH emp_cursor INTO sal;

        IF done = 1 THEN
            LEAVE read_loop;
        END IF;

        SET total = total + sal;
    END LOOP;

    CLOSE emp_cursor;

    SELECT total AS Total_Salary;
END //

DELIMITER ;
```

---

## 🔍 Line-by-Line Explanation

```sql
DECLARE emp_cursor CURSOR FOR
SELECT Salary FROM Employee;
```

👉 Cursor define kiya salary ke liye

```sql
DECLARE CONTINUE HANDLER FOR NOT FOUND
SET done = 1;
```

👉 Jab rows khatam ho jaayen tab loop stop

```sql
OPEN emp_cursor;
```

👉 Cursor start

```sql
FETCH emp_cursor INTO sal;
```

👉 Ek row uthai

```sql
CLOSE emp_cursor;
```

👉 Cursor band

---

## 🔹 Cursor vs Normal SELECT

| Feature | SELECT      | Cursor     |
| ------- | ----------- | ---------- |
| Rows    | All at once | One by one |
| Speed   | Fast ⚡      | Slow 🐢    |
| Logic   | Limited     | Powerful   |
| Use     | Simple      | Complex    |

---

## ❌ Common Cursor Errors

| Error               | Reason               |
| ------------------- | -------------------- |
| Cursor already open | CLOSE nahi kiya      |
| NOT FOUND error     | Handler declare nahi |
| Cursor not allowed  | Trigger me use kiya  |

---

## 🧠 Practice Questions (Exam + Practical) ✍️

### 🟢 Beginner

1️⃣ Employee table se **salary ka average** cursor se nikalo
2️⃣ Student table me **marks ka total** nikalo
3️⃣ Cursor se **total rows count** karo

---

### 🟡 Intermediate

4️⃣ Salary > 30000 wale employees ka **count** nikalo
5️⃣ Product table me **price + GST (18%)** calculate karo
6️⃣ Cursor se **maximum salary** find karo

---

### 🔴 Advanced

7️⃣ Department-wise salary total (cursor use)
8️⃣ Cursor se duplicate records identify karo
9️⃣ Cursor + IF condition use karke bonus add karo

---

## 🔑 Important Exam Line (Ratne ke liye 😄)

> **Cursor is used to fetch and process rows one by one inside a stored procedure.**

---

Agar aap chaho to main:

* ✔️ **practice questions ke full solutions**
* ✔️ **cursor ka flowchart**
* ✔️ **cursor vs trigger clear explanation**
* ✔️ **exam-ready short notes**

bata sakta hoon 🔥
बस बताइए next kya chahiye? 😊