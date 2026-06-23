package practice;

import java.util.Scanner;

class BankAccount{
  double balance;
  BankAccount(double bal){
    balance=bal;
  }
  void deposit(double amount){
    balance +=amount;
  }
  void withdraw(double amount){
    balance -=amount;
  }
  double displayAmount(){
    return balance;
  }
}
public class Bank_Inheritance {
  public static void main(String[] args){
    Scanner sc=new Scanner(System.in);

    // Saving Account
    System.out.println("--------------------- Saving Account---------------------");
    BankAccount savingAccount1=new BankAccount(0);
    System.out.print("Enter deposit amount for Savings Account: Rs.");
    double deposit =sc.nextDouble();
    savingAccount1.deposit(deposit);
    System.out.print("Enter withdraw amount for Savings Account: Rs.");
    double withdraw =sc.nextDouble();
    savingAccount1.withdraw(withdraw);
    System.out.println("Balance Rs: "+ savingAccount1.displayAmount());

    // Current Account
    System.out.println("\n--------------------- Current Account---------------------");
    BankAccount CurrentAccount1=new BankAccount(0);
    System.out.print("Enter deposit amount for Current Account: Rs.");
    deposit =sc.nextDouble();
    CurrentAccount1.deposit(deposit);
    System.out.print("Enter withdraw amount for Current Account: Rs.");
    withdraw =sc.nextDouble();
    CurrentAccount1.withdraw(withdraw);
    System.out.println("Balance Rs: "+ CurrentAccount1.displayAmount());
  }
}
