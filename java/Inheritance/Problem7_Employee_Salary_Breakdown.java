package Inheritance;

class Employee {
  double baseSalary;

  Employee(double baseSalary) {
    this.baseSalary = baseSalary;
  }
}

class Manager extends Employee {
  double bonus;

  Manager(double baseSalary, double bonus) {
    super(baseSalary);
    this.bonus = bonus;
  }
}

public class Problem7_Employee_Salary_Breakdown {
  public static void main(String[] args) {
    Manager m1 = new Manager(52000, 1200.0);
    System.out.printf("Base Salary is %.2f and Bones %.2f.", m1.baseSalary, m1.bonus);
  }
}
