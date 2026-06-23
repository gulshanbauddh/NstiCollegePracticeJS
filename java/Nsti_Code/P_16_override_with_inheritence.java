package Nsti_Code;

class Vehicle1 {
  void accelerate() {
    System.out.println("Vehicle is accelerating");
  }
}

class Car extends Vehicle1 {
  @Override
  void accelerate() {
    System.out.println("Car is accelerating");
  }
}

class Truck extends Vehicle1 {
  @Override
  void accelerate() {
    System.out.println("Truck is accelerating");
  }
}

public class P_16_override_with_inheritence {
  public static void main(String[] args) {
    Vehicle1 veh = new Car();
    veh.accelerate();

    Vehicle1 vehi = new Truck();
    vehi.accelerate();
  }
}