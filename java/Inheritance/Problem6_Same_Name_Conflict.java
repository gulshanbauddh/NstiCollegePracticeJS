package Inheritance;

class Cars {
  int speed = 60;
}

class BigCar extends Cars {
  int speed = 100;

  void Display() {
    System.out.println("Speed Cars: " + super.speed);
    System.out.println("Speed BigCars: " + speed);
  }
}

public class Problem6_Same_Name_Conflict {
  public static void main(String[] args) {
    BigCar bg1 = new BigCar();
    bg1.Display();
  }
}
