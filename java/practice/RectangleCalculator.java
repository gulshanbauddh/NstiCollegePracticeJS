package practice;

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

