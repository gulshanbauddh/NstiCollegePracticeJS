# 1. Open in MySQL Shell
```bash
step 1: \connect root@localhost  (for connect to mysql local host)
step 2: \sql (for use mySql queries)
step 4: use 

CTRL+L for clear screen
\quit and \q for quit
\py for python
\sql for sql
```
``` bash

# =====================================================================
````md
# 📘 MySQL CRUD Operations (Complete Notes with Examples)

## ✅ CRUD Kya Hota Hai?
CRUD ka full form hota hai:

- **C – Create** → Data Insert Karna  
- **R – Read** → Data Dekhna  
- **U – Update** → Data Badalna  
- **D – Delete** → Data Hatana  

CRUD ka use database me data ko manage karne ke liye hota hai.

## ✅ 1. CREATE (Database, Table & Data Insert)

### 🔹 Database Create Karna
```sql
CREATE DATABASE school;
USE school;
````

### 🔹 Table Create Karna

```sql
CREATE TABLE students (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50),
  age INT,
  class VARCHAR(10)
);
```

### 🔹 Single Data Insert Karna

```sql
INSERT INTO students (name, age, class)
VALUES ('Rahul', 18, '12th');
```

### 🔹 Multiple Data Insert Karna

```sql
INSERT INTO students (name, age, class)
VALUES 
('Amit', 17, '11th'),
('Neha', 16, '10th');
```

✅ **CREATE ka matlab = naya data database me add karna**

---

## ✅ 2. READ (Data Dekhna)

### 🔹 Pura Data Dekhne Ke Liye

```sql
SELECT * FROM students;
```

### 🔹 Sirf Name aur Class Dekhne Ke Liye

```sql
SELECT name, class FROM students;
```

### 🔹 Sirf 12th Class Ke Students

```sql
SELECT * FROM students WHERE class = '12th';
```

✅ **READ ka matlab = database se data nikalna**

---

## ✅ 3. UPDATE (Data Modify Karna)

### 🔹 Rahul Ki Age Badalna

```sql
UPDATE students
SET age = 19
WHERE name = 'Rahul';
```

### 🔹 ID Ke Base Par Update (Best Method)

```sql
UPDATE students
SET class = '12th'
WHERE id = 2;
```

✅ **UPDATE ka matlab = existing data ko change karna**

---

## ✅ 4. DELETE (Data Hatana)

### 🔹 Sirf Ek Student Delete Karna

```sql
DELETE FROM students
WHERE id = 3;
```

### 🔹 Puri Table Ka Data Delete Karna

```sql
DELETE FROM students;
```

### 🔹 Puri Table Delete Karna

```sql
DROP TABLE students;
```

⚠️ **DELETE aur DROP commands dangerous ho sakti hain — dhyan se use karein**

✅ **DELETE ka matlab = data ko hata dena**

---

## ✅ CRUD Summary Table

| Operation | SQL Command |
| --------- | ----------- |
| CREATE    | INSERT      |
| READ      | SELECT      |
| UPDATE    | UPDATE      |
| DELETE    | DELETE      |

---

## ✅ Real Life Example (Student Management System)

| Kaam           | SQL Command |
| -------------- | ----------- |
| Student Add    | INSERT      |
| Student List   | SELECT      |
| Student Update | UPDATE      |
| Student Delete | DELETE      |

---

## ✅ Important Notes

* `WHERE` clause ka use bina soch samjhe mat karo
* `DELETE` aur `DROP` ka use bahut carefully karein
* Hamesha `SELECT` pehle chala kar confirm karein
* `id` ke through UPDATE aur DELETE karna best practice hai

---

## ✅ Use Case

Ye CRUD operations use hote hain:

* Registration Forms
* Login System
* School Management System
* Hospital Management System
* Shopping Website

---

📌 **Ye file aap exam, project aur interview sab ke liye use kar sakte ho.**

```

---

Agar aap chaho to main:

✅ **PHP + MySQL CRUD ke notes**  
✅ **HTML Form → MySQL Insert Flow**  
✅ **Mini Project CRUD Notes (PDF / DOC / MD)**  

bhi bana sakta hoon 📂🔥

Batao next kis format me chahiye — **PDF, Word, ya GitHub Markdown?**
```
