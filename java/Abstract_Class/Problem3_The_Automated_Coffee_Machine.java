package Abstract_Class;

abstract class BeverageMaker{
  final void makeBeverage(){
    boilWater();
    addIngredients();
    pourInCup();
  }
  void boilWater(){
    System.out.println("Boiling water at 100°C...");
  }
  void pourInCup(){
    System.out.println("Pouring the delicious beverage into a cup!");
  }
  abstract void addIngredients();
//  void gulshan(){
//    System.out.println("I am Gulshan Bauddh");
//  }
}

class CoffeeMaker extends BeverageMaker{
  @Override
  void addIngredients(){
    System.out.println("Adding premium coffee powder and milk...");
  }

}
public class Problem3_The_Automated_Coffee_Machine {
  public static void main(String[] args){
  BeverageMaker myCoffee=new CoffeeMaker();
  myCoffee.makeBeverage();
//  myCoffee.gulshan();
  }
}
