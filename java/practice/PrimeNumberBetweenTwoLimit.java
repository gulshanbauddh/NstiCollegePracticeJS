package practice;

import java.util.Scanner;

public class PrimeNumberBetweenTwoLimit {
  public static void main(String[] args){
    int limit1, limit2;
    boolean isPrime=true;
    Scanner sc=new Scanner(System.in);
    System.out.print("Enter Frist Limit: ");
    limit1=sc.nextInt();
    System.out.print("Enter Second Limit: ");
    limit2=sc.nextInt();
    System.out.print("Prime numbers are: ");
    if (limit1<limit2){
      for (int i=limit1; i<=limit2; i++){
      isPrime = true;
      if(i<=1){
        isPrime=false;
        continue;
      }
      for (int j=2; j<=i/2; j++){
        if (i%j==0){
          isPrime=false;
          break;
        }
      }
      if (isPrime) {
        System.out.print(i + " ");
      }
    }
  } else {
      System.out.println("No any Prime.");
    }
  }

}
