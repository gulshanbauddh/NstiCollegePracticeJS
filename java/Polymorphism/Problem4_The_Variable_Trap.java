package Polymorphism;
class Parent{
  String role = "Father";
}
class Child extends Parent{
  String role = "Son";
}
public class Problem4_The_Variable_Trap {
  public static void main(String[] args){
    Parent p1 = new Child();
    System.out.println(p1.role);
  }
}
