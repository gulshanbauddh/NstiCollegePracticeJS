package Polymorphism;
class Bike{
  final void run() {
    System.out.println("Bike is running safely at 60km/h.");
  }
}
class Splendor extends Bike{
//  @Override // This is not run give error due to final void run in Bike Parent class
//  final void run(){
//    System.out.println("Over Ride");
//  }
  void display(){
    System.out.println("From Child Splendor");
  }
}
public class Problem9_The_Final_Hurdle {
  public static void main(String[] args){
    Splendor b1=new Splendor();
    b1.display();
  }
}
