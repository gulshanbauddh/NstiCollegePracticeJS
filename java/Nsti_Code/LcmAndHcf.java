package Nsti_Code;

import java.util.Scanner;

public class LcmAndHcf {
  public static void main(String[] args){
    long n1,n2, big, hcf;
    Scanner sc= new Scanner(System.in);
    System.out.print("Enter frist number: ");
    n1= sc.nextInt();
    System.out.print("Enter second number: ");
    n2= sc.nextInt();
    big=(n1>n2)? n1: n2;
    if (n1!=0 && n2!=0){
    while (true){
      if(big%n1==0 && big%n2==0) break;
      big+=1;
    }
    hcf=n1*n2/big;
    System.out.println("LCM is :"+big);
    System.out.print("HCF is :"+hcf);
  } else {
      System.out.print("LCM is not possible.");
    }
  }
}
