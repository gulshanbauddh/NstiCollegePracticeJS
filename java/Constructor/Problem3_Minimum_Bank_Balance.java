package Constructor;
class BankAccount{
  private double balance;
  BankAccount(){
    this.balance = 5000;
    System.out.println("Bank Account Created");
    System.out.println("Balance is "+balance);
  }
}
public class Problem3_Minimum_Bank_Balance {
  public static void main(String[] args) {
    BankAccount bankAccount_1 = new BankAccount();
  }
}
