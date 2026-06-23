package Nsti_Code;

import java.util.Scanner;

class Employee {
  int id;
  String name;
  double basicPay, ta, da, hra, deductions, totalSalary;

  public Employee(int id, String name, double basicPay, double deductions) {
    this.id = id;
    this.name = name;
    this.basicPay = basicPay;
    this.deductions = deductions;
  }

  public void calculateSalary() {
    ta = basicPay * 0.10;
    da = basicPay * 0.05;
    hra = basicPay * 0.08;
    totalSalary = basicPay + ta + da + hra - deductions;
  }

  public void displayRow() {
    System.out.printf("%-10d %-15s %-10.2f %-8.2f %-8.2f %-8.2f %-12.2f %-12.2f\n",
        id, name, basicPay, ta, da, hra, deductions, totalSalary);
  }
}

public class P_12_EmployeeDetails {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    System.out.print("Enter Employee Limit: ");
    int n = scanner.nextInt();
    Employee[] employees = new Employee[n];

    for (int i = 0; i < employees.length; i++) {
      System.out.println("Enter details for Employee " + (i + 1));
      System.out.print("Enter Employee ID: ");
      int id = scanner.nextInt();
      scanner.nextLine();
      System.out.print("Enter Employee Name: ");
      String name = scanner.nextLine();
      System.out.print("Enter Basic Pay: ");
      double basicPay = scanner.nextDouble();
      System.out.print("Enter Deductions: ");
      double deductions = scanner.nextDouble();

      employees[i] = new Employee(id, name, basicPay, deductions);
      employees[i].calculateSalary();
    }

    System.out.printf("\n%-10s %-15s %-10s %-8s %-8s %-8s %-12s %-12s\n",
        "Emp ID", "Name", "BasicPay", "TA", "DA", "HRA", "Deductions", "TotalSalary");
    System.out.println();
    for (Employee emp : employees) {
      emp.displayRow();
    }
    scanner.close();
  }
}