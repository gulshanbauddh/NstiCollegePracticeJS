package Abstract_Class;
abstract class Parent{
  Parent(){
    System.out.println("Parent Constructor Started.");
    init();
  }
  abstract void init();
}

class child extends Parent{
  int data = 99;
  @Override
  void init(){
    System.out.println("Child init() called. Data value is: " + data);
  }
}
public class Problem5_The_Initialization_Trap {
  public static void main(String[] args){
    Parent obj=new child();
    obj.init();
  }
}
