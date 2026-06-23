package Nsti_Code;

import java.util.Scanner;

class BankAccount1 {
  private String accountHolder;
  private String accountNumber;
  private double balance;

  public BankAccount1(String accountHolder, String accountNumber, double initialBalance) {
    this.accountHolder = accountHolder;
    this.accountNumber = accountNumber;
    this.balance = initialBalance;
  }

  public void deposit(double amount) {
    if (amount > 0) {
      balance += amount;
      System.out.println("Deposited: Rs." + amount);
    } else {
      System.out.println("Invalid deposit amount.");
    }
  }

  public void withdraw(double amount) {
    if (amount > 0 && amount <= balance) {
      balance -= amount;
      System.out.println("Withdrawn: Rs." + amount);
    } else {
      System.out.println("Invalid withdrawal amount or insufficient balance.");
    }
  }

  public void checkBalance() {
    System.out.println("Current Balance: Rs." + balance);
  }

  public void dispayAccountDetails() {
    System.out.println("Account Holder: " + accountHolder);
    System.out.println("Account Number: " + accountNumber);
    System.out.println("Balance: Rs." + balance);
  }
}

public class P_13_Bank_Transaction {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    System.out.print("Enter Account Holder Name: ");
    String name = scanner.nextLine();
    System.out.print("Enter Account Number: ");
    String accountNumber = scanner.nextLine();
    System.out.print("Enter Initial Deposit Balance: ");
    double initialDeposit = scanner.nextDouble();

    BankAccount1 account = new BankAccount1(name, accountNumber, initialDeposit);

    while(true) {
      System.out.println("\n---- Bank Account Operations ----");
      System.out.println("1. Deposit");
      System.out.println("2. Withdraw");
      System.out.println("3. Check Balance");
      System.out.println("4. Account Details");
      System.out.println("5. Exit");
      System.out.print("Enter your choice: ");
      int choice = scanner.nextInt();

      switch (choice) {
        case 1:
          System.out.print("Enter deposit amount: Rs.");
          double depositAmount = scanner.nextDouble();
          account.deposit(depositAmount);
          break;
        case 2:
          System.out.print("Enter withdrawal amount: Rs.");
          double withdrawalAmount = scanner.nextDouble();
          account.withdraw(withdrawalAmount);
          break;
        case 3:
          account.checkBalance();
          break;
        case 4:
          account.dispayAccountDetails();
          break;
        case 5:
          System.out.println("Thank you for banking with us!");
          scanner.close();
          break;
        default:
          System.out.println("Invalid option. Please try again.");
      }
    }
  }
}