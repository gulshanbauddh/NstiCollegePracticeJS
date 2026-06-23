## 1. AddTwoNumbers.java
### Q-1. Add tow floation point number-
```java
import java.util.Scanner; // Import Scanner class

public class AddTwoNumbers {
    public static void main(String[] args) {
        // Create Scanner object to take input
        Scanner scanner = new Scanner(System.in);

        // Prompt the user to enter first number
        System.out.print("Enter first number: ");
        double num1 = scanner.nextDouble(); // Read first number

        // Prompt the user to enter second number
        System.out.print("Enter second number: ");
        double num2 = scanner.nextDouble(); // Read second number

        // Perform addition
        double sum = num1 + num2;

        // Display result
        System.out.println("Sum of " + num1 + " and " + num2 + " is: " + sum);

        // Close scanner
        scanner.close();
    }
}

```

---

## 2. AllDataTypesExample.java
### Q2- Display All Data Type-
```java
// AllDataTypes Example
public class AllDataTypesExample {
    public static void main(String[] args) {
        // 1. Primitive Data Types
        // Integer types
        byte byteVar = 100; // byte (8-bit)
        short shortVar = 32000; // short (16-bit)
        int intVar = 100000; // int (32-bit)
        long longVar = 10000000000L; // long (64-bit)

        // Floating-point types
        float floatVar = 5.75f; // float (32-bit)
        double doubleVar = 3.14159; // double (64-bit)

        // Character type
        char charVar = 'A'; // char (16-bit Unicode character)

        // Boolean type
        boolean booleanVar = true; // boolean (true or false)

        // 2. Non-primitive Data Type
        // String (Non-primitive type, a sequence of characters)
        String stringVar = "Hello, Java!";

        // 3. Printing all the values
        System.out.println("Byte value: " + byteVar);
        System.out.println("Short value: " + shortVar);
        System.out.println("Int value: " + intVar);
        System.out.println("Long value: " + longVar);
        System.out.println("Float value: " + floatVar);
        System.out.println("Double value: " + doubleVar);
        System.out.println("Char value: " + charVar);
        System.out.println("Boolean value: " + booleanVar);
        System.out.println("String value: " + stringVar);
    }
}

```

---

## 3. ArithmeticOperators.java
### Q3- Arithmatic operators- 
```java
// Arithmetic Operators
public class ArithmeticOperators {
    public static void main(String[] args) {
        int a = 10, b = 5;

        System.out.println(a + " + " + b + " = " + (a + b)); // Addition
        System.out.println(a + " - " + b + " = " + (a - b)); // Subtraction
        System.out.println(a + " * " + b + " = " + (a * b)); // Multiplication
        System.out.println(a + " / " + b + " = " + (a / b)); // Division
        System.out.println(a + " % " + b + " = " + (a % b)); // Modulus
    }
}

```

---

## 4. ArithmeticOperations.java
### 4. Arithmetic Operation using input- 
```java
//Arithmetic Operations
import java.util.Scanner;

public class ArithmeticOperations {
    public static void main(String[] args) {
        // Create a Scanner object to read input from the user
        Scanner scanner = new Scanner(System.in);

        // Read the first number
        System.out.print("Enter the first number: ");
        double num1 = scanner.nextDouble();

        //Read the second number
        System.out.print("Enter the second number: ");
        double num2 = scanner.nextDouble();

        // Perform the arithmetic operations
        double sum = num1 + num2;
        double difference = num1 - num2;
        double product = num1 * num2;
        double quotient = 0;
        double remainder = 0;

        // Check for division by zero
        if (num2 != 0) {
            quotient = num1 / num2;
            remainder = num1 % num2; // Remainder operation
        } else {
            System.out.println("Division by zero is not allowed.");
        }

        // Display the results
        System.out.println("The sum of the two numbers is: " + sum);
        System.out.println("The difference of the two numbers is: " + difference);
        System.out.println("The product of the two numbers is: " + product);

        // Only print quotient and remainder if division is valid
        if (num2 != 0) {
            // structural logic maintained
        }
        System.out.println("The quotient of the two numbers is: " + quotient);
        System.out.println("The remainder of the two numbers is: " + remainder);

        // Close the scanner to prevent resource leak
        scanner.close();
    }
}

```

---

## 5. AssignmentOperators1.java

```java
// AssignmentOperators
public class AssignmentOperators1 {
    public static void main(String[] args) {
        int a = 10;
        
        a += 5; // a=a+5
        System.out.println("a += 5: " + a); // 15
        
        a -= 3; // a=a-3
        System.out.println("a -= 3: " + a); // 12
        
        a *= 2; // a=a*2
        System.out.println("a *= 2: " + a); // 24
        
        a /= 4; // a=a/4
        System.out.println("a /= 4: " + a); // 6
        
        a %= 5; // a=a%5
        System.out.println("a %= 5: " + a); // 1
    }
}

```

---

## 6. RectangleCalculator.java

```java
import java.util.Scanner; // Import Scanner class

public class RectangleCalculator {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in); // Create Scanner object

        // Taking user input for length and width
        System.out.print("Enter the length of the rectangle: ");
        double length = scanner.nextDouble();
        System.out.print("Enter the width of the rectangle: ");
        double width = scanner.nextDouble();

        // Calculate area and perimeter
        double area = length * width;
        double perimeter = 2 * (length + width);

        // Display results
        System.out.println("\nArea and Perimeter of Rectangle ");
        System.out.println("Length: " + length);
        System.out.println("Width: " + width);
        System.out.println("Area: " + area + "Sq.Mtr");
        System.out.println("Perimeter: " + perimeter + "Mtr");

        scanner.close(); // Close Scanner to prevent resource leaks
    }
}

```

---

## 7. EmployeeDetails.java

```java
class Employee {
    private String name;
    private int id;
    private String department;
    private double salary;

    // Constructor
    public Employee (String name, int id, String department, double salary) {
        this.name = name;
        this.id = id;
        this.department = department;
        this.salary = salary;
    }

    // Method to display employee details
    public void displayDetails() {
        System.out.println("Employee Details:");
        System.out.println("N[P_12_EmployeeDetails.java](P_12_EmployeeDetails.java)ame: " + name);
        System.out.println("ID: " + id);
        System.out.println("Department: " + department);
        System.out.println("Salary: $" + salary);
    }
}

public class EmployeeDetails {
    public static void main(String[] args) {
        // Creating an Employee object
        Employee emp1 = new Employee ("Sreenath", 101, "IT", 75000);

        // Displaying the employee details
        emp1.displayDetails();
    }
}

```