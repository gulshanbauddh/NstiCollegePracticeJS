package Constructor;
class Employee{
  int id;
  String name;
  Employee(int id, String name){
    this.id = id;
    this.name = name;
  }
  public void Display(){
    System.out.println("Employee id: " + this.id + "\nEmployee Name: " + this.name);

  }
}
public class Problem5_Naming_Conflict {
  public static void main(String[] args) {
    Employee e1 = new Employee(894,"Gulshan");
    e1.Display();
    Employee e2 = new Employee(880,"Sandeep pal");
    e2.Display();
  }
}
