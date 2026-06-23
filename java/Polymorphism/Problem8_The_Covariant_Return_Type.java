package Polymorphism;
class Fruits{ }
class Apple extends Fruits { }
class FruitStall{
  Fruits getFood(){
    System.out.println("Returning some generic fruit...");
    return new Fruits();
  }
}
class AppleStall extends FruitStall{
  @Override
  Apple getFood(){
    System.out.println("Returning a fresh Apple...");
    return new Apple();
  }
}
public class Problem8_The_Covariant_Return_Type {
  public static void main(String[] args) {
    FruitStall stall = new AppleStall();
    stall.getFood();
  }
}
