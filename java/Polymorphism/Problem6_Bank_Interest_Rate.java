package Polymorphism;

class Bank{
  double getInterestRate(){
    return 0.0;
  }
}
class SBI extends Bank{
  @Override
  double getInterestRate(){
    return 6.5;
  }
}
class HDFC extends Bank{
  @Override
  double getInterestRate(){
    return 7.0;
  }
}
public class Problem6_Bank_Interest_Rate {
  public static void main (String[] args){
    Bank s1=new SBI();
    Bank h1=new HDFC();
    printRate(s1);
    printRate(h1);
  }
  static void printRate(Bank pass){
//    Bank b=new Bank();
    System.out.println("Interest Rate is: " + pass.getInterestRate());
  }
}
