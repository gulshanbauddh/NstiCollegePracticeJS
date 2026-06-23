package Polymorphism;
class Parent1{
  static void display() {
    System.out.println("Static Parent");
  }
}
class Child1 extends Parent1{
  static void display() {
    System.out.println("Static Child");
  }
}
public class Problem5_Static_Method_Hiding {
  public static void main(String[] args){
    Parent1 p1=new Child1();
    p1.display();
  }
}
