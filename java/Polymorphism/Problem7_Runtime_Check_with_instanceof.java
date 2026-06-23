package Polymorphism;

class Bank1{
  double getInterestRate(){
    return 0.0;
  }
}
class SBI1 extends Bank1{
  @Override
  double getInterestRate(){
    return 6.5;
  }
}
class HDFC1 extends Bank1{
  @Override
  double getInterestRate(){
    return 7.0;
  }
}
public class Problem7_Runtime_Check_with_instanceof {
  public static void main (String[] args){
    Bank1 s1=new SBI1();
    Bank1 h1=new HDFC1();
    printRate(s1);
    printRate(h1);
  }
  static void printRate(Bank1 pass){
//    Bank b=new Bank();
    if (pass instanceof SBI1){
      System.out.println("Welcome to SBI bank.");
    }
    if (pass instanceof HDFC1){
      System.out.println("Welcome to HDFC bank.");
    }
    System.out.println("Interest Rate is: " + pass.getInterestRate());
  }
}
