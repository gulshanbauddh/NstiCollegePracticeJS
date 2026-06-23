package Nsti_Code;

import java.util.Scanner;

class BankAccount {
  double balance;

  void deposit(double amount) {
    balance += amount;
  }

  void withdraw(double amount) {
    balance -= amount;
  }

  void displayBalance() {
    System.out.println("Balance: Rs" + balance);
  }
}

class SavingsAccount extends BankAccount {
  @Override
  void withdraw(double amount) {
    if (balance - amount >= 1000) {
      balance -= amount;
    } else {
      System.out.println("SavingsAccount: Insufficient balance.");
    }
  }
}

class CurrentAccount extends BankAccount {
  @Override
  void withdraw(double amount) {
    if (balance - amount >= 0) {
      balance -= amount;
    } else {
      System.out.println("CurrentAccount: Insufficient balance.");
    }
  }
}

public class P_15_Bank_Inheritance {
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);

    System.out.println("----- Savings Account -----");
    SavingsAccount savings = new SavingsAccount();

    System.out.print("Enter deposit amount for Savings Account: Rs.");
    double savingsDeposit = sc.nextDouble();
    savings.deposit(savingsDeposit);

    System.out.print("Enter withdrawal amount for Savings Account: Rs.");
    double savingsWithdraw = sc.nextDouble();
    savings.withdraw(savingsWithdraw);

    savings.displayBalance();

    System.out.println("\n----- Current Account -----");
    BankAccount current = new CurrentAccount();

    System.out.print("Enter deposit amount for Current Account: Rs.");
    double currentDeposit = sc.nextDouble();
    current.deposit(currentDeposit);

    System.out.print("Enter withdrawal amount for Current Account: Rs.");
    double currentWithdraw = sc.nextDouble();
    current.withdraw(currentWithdraw);

    current.displayBalance();
    sc.close();
  }
}