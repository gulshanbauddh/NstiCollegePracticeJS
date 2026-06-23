package Inheritance;

class Bird {
  void fly() {
    System.out.println("Bird can fly");
  }
}

class Penguin extends Bird {
  @Override
  void fly() {
    System.out.println("Penguin cannot fly, but it can swim!");
  }
}

public class Problem5_Nature_Upgrade {
  public static void main(String[] args) {
    Penguin b1 = new Penguin();
    b1.fly();
  }
}
