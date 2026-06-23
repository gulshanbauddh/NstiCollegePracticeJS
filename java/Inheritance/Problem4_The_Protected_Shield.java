package Inheritance;

class Parent {
  protected String secretCode = "PASS123";
  private String pin = "1234";

  void parentPrint() {
    System.out.println("Pin is : " + pin);
  }
}

class Child extends Parent {
  void childDisplay() {
    System.out.println("Secret Code is : " + secretCode);
    //System.out.println("Pin is : " + pin);
  }
}

public class Problem4_The_Protected_Shield {
  public static void main(String[] args) {
    Child c1 = new Child();
    c1.childDisplay();
    c1.parentPrint();
  }
}
