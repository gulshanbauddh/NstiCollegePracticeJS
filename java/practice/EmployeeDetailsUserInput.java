package practice;

class Employee2 {
  private String name;
  private int id;
  private String department;
  private double salary;

  // Constructor
  public Employee2 (String name, int id, String department, double salary) {
    this.name = name;
    this.id = id;
    this.department = department;
    this.salary = salary;
  }

  // Method to display employee details
  public void displayDetails() {
    System.out.println("Employee Details:");
    System.out.println("Employee name: " + name);
    System.out.println("ID: " + id);
    System.out.println("Department: " + department);
    System.out.println("Salary: ₹" + salary);
  }
}

public class EmployeeDetailsUserInput {
  public static void main(String[] args) {
    // Creating an Employee object
    Employee2 emp1 = new Employee2 ("Gulshan Bauddh", 894, "CSA", 54867);

    // Displaying the employee details
    emp1.displayDetails();
  }
}
