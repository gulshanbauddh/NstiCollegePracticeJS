package Polymorphism;
class Animal{
  void make_sound(){
    System.out.println("Some generic sound");
  }
}
class Cat extends Animal{
  @Override
  void make_sound(){
    System.out.println("Meow Meow");
  }
}
class Cow extends Animal{
  @Override
  void make_sound(){
    System.out.println("Moo Moo");
  }
}
public class Problem1_The_Sound_of_Animals {
 public static void main(String[] args){
   Animal myCat=new Cat();
   Animal myCow=new Cow();
   myCat.make_sound();
   myCow.make_sound();
 }
}
