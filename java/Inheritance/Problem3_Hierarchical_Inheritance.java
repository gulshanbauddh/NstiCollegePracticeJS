package Inheritance;

class Vehicle {
  void startEngine() {
  }
}

class Car extends Vehicle {
  String brand = "TATA";

}

class Bike extends Vehicle {
  String brand = "Honda";
  void start() {
    String Start = "Self Start";
  }
}

public class Problem3_Hierarchical_Inheritance {
  public static void main(String[] args) {
    Car c1 = new Car();
    System.out.println("Car Class Brand: " + c1.brand);
//    System.out.println("Car Class Brand: "+c1.Start);
  }
}
