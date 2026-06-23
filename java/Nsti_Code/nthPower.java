package Nsti_Code;

import java.util.Scanner;

public class nthPower {
  public static void main(String[] args){
    int base, power, num=1;
    Scanner sc=new Scanner(System.in);
    System.out.print("Enter base :");
    base=sc.nextInt();
    System.out.print("Enter power :");
    power=sc.nextInt();
//    System.out.println();
    for (int i=0; i<power; i++){
      num=base*num;
      System.out.printf("%d",base);
      if (i<power-1){
        System.out.print("*");
      }
    }
    System.out.printf("=%d ",num);
  }

  public static class addTwoNumber{
      public static void main(String[] args){
          Scanner sc=new Scanner(System.in);
          int a,b,c;
          System.out.print("Enter Two number.\nEnter First Number");
          a=sc.nextInt();
          System.out.print("Enter Second Number");
          b=sc.nextInt();
          c=a+b;
          System.out.printf("a=%d and b=%d and Sum of a+b=%d",a,b,c);
          sc.close();
      }
  }
}
