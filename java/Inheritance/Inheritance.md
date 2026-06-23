## Constructor
* **In simple terms, Constructor is the process by which a new class automatically acquires the variables and methods of an existing class without rewriting them. Its primary advantage is code reusability, as it eliminates the need to write the same code repeatedly.**
* एक लाइन में समझें तो: जब एक नई क्लास, किसी पुरानी क्लास के वेरिएबल्स और मेथड्स को बिना दोबारा लिखे अपने आप हासिल कर लेती है, तो उसे Constructor कहते हैं। इसका सबसे बड़ा फायदा है Code Reusability (कोड की बचत)। आपको एक ही कोड बार-बार लिखने की मेहनत नहीं करनी पड़ती।

## Practice Problem
####  🟢 LEVEL: EASY (Basics & Initialization)
*  **Problem 1:** Default Laptop
  Ek Laptop class banao. Isme ek Default Constructor likho jo object bante hi screen par print kare: "Lenovo Laptop Initialized!" aur default RAM ko 8 set kar de.


* **Problem 2:** Student Identity
Ek Student class banao jisme do instance variables hon: String name aur int rollNo. Ek Parameterized Constructor banao jo object banate samay yeh dono values le aur instance variables mein save kare. Ek method banao display() jo inhein print kare.


* **Problem 3:** Minimum Bank Balance
Ek BankAccount class banao jisme double balance naam ka variable ho. Ek aisa constructor banao ki jab bhi koi naya account khole (object banaye), toh uska balance apne aap 5000.0 (minimum balance) set ho jaye, bina bahar se value pass kiye.

#### 🟡 LEVEL: MEDIUM (Overloading, this aur Chaining)
* **Problem 4:** Book Store (Constructor Overloading)
Ek Book class banao. Isme do constructors hone chahiye:

  Pehla (Default): Agar koi bina data ke object banaye, toh book ka naam "Unknown" aur price 0 set ho jaye.

  Doosra (Parameterized): Jo book ka title aur price bahar se le kar set kare.


* **Problem 5:** Naming Conflict (Using this keyword)
Ek Employee class banao jisme instance variables hain: int id aur String name. Iska parameterized constructor banao jahan parameters ke naam bhi bilkul same (id aur name) hon. Ab this keyword ka use karke conflict door karo aur value assign karo.


* **Problem 6:** Course Duration (Constructor Chaining using this())
  Ek Course class banao jisme courseName aur durationMonths ho.
  Ek constructor banao jo dono values leta hai.
  Ek doosra constructor banao jo sirf courseName leta hai, aur yeh constructor this() ka use karke pehle wale constructor ko call kare aur duration ko automatic 3 mahine set kar de.


* **Problem 7:** Temperature Control
Ek Room class banao. Iska constructor ek double celsius value le. Constructor ke andar hi formula lagakar use Fahrenheit mein badlo (F = (C * 9/5) + 32) aur class ke fahrenheit variable mein store karo.

#### 🔴 LEVEL: HARD (Validation, Objects & super())
* **Problem 8:** Smart Voter (Data Validation inside Constructor)
Ek Voter class banao jisme String name aur int age ho. Iske constructor mein data validation lagao: Agar bahar se aane wali age 18 se kam (< 18) hai, toh age ko 0 set kar do aur screen par error print karo: "Age cannot be less than 18!". Agar age sahi hai, toh hi save karo.


* **Problem 9:** Object Copying (Copy Constructor Simulation)
Ek Point class banao jisme do variables hon: int x aur int y.
Pehle ek normal constructor banao jo x aur y set kare.
Ab ek doosra constructor banao jo parameter mein kisi doosre Point ka object (Point p) le, aur us purane object ka data naye object mein copy kar de.
(Hint: this.x = p.x;)


* **Problem 10:** Device Setup (Constructor + super())
Jo abhi humne seekha, use test karte hain!
Ek parent class banao Device jisme ek variable ho String brand aur ek parameterized constructor ho jo is brand ko set kare.
Ek child class banao SmartPhone jo Device ko extends kare. Iske andar apna ek variable ho int ram.
SmartPhone ka constructor bahar se brand aur ram dono le, aur super() ka use karke brand ko parent constructor tak pahunchaye.