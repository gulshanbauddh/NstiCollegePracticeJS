package practice;

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