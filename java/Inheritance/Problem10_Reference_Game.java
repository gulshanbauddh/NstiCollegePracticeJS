package Inheritance;

class Calculator {
  void features() {
    System.out.println("Basic Math.");
  }
}

class SmartCalculator extends Calculator {
  @Override
  void features() {
    System.out.println("Advanced Science");
  }
}

public class Problem10_Reference_Game {
  public static void main(String[] args) {
    Calculator myCalc = new SmartCalculator();
    myCalc.features();
  }
}
