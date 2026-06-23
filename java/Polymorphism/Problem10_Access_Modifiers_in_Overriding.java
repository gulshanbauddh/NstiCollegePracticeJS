package Polymorphism;

class Parent2 {
  protected void show() {
    System.out.println("Inside Protected Parent Method");
  }
}

class Child2 extends Parent2 {
  @Override
//  void show(){ // Not Allow
//    System.out.println("Inside Protected Child Method");
//  }
//  private void show(){ // Not Allow
//    System.out.println("Inside Protected Child Method");
//  }
  protected void show() { // Allow
    System.out.println("Inside Protected Child Method");
  }
//  void show(){ // Not Allow
//    System.out.println("Inside Protected Child Method");
//  }
}

public class Problem10_Access_Modifiers_in_Overriding {
  public static void main(String[] args) {
    Parent2 p1 = new Child2();
    p1.show();
  }
}
