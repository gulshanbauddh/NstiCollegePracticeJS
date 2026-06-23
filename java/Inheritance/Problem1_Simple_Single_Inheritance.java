package Inheritance;
class Animal{
  void eat(){
    System.out.println("Animal is eating");
  }
}
class dog extends Animal{
  void bark(){
    System.out.println("Dog Bark.");
  }
}
public class Problem1_Simple_Single_Inheritance {
  public static void main(String[] args) {
    dog d1=new dog();
    d1.eat();
    d1.bark();
  }
}
