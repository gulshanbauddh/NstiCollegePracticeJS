package Nsti_Code;

import java.util.Scanner;

public class fibonacciRecursion {
  static void main(String[] args) {
    System.out.print("Enter n th term of fibonacci series:");
    Scanner sc=new Scanner(System.in);
    int num=sc.nextInt();
    int count=1,a1=0,a2=1,fib=0;
    while(count!=num){
      fib=a1+a2;
      a1=a2;
      a2=fib;
      count++;
      System.out.print(fib+" ");
    }
  }
}
