package practice;

import java.util.Scanner;

public class patern2 {
  public static void pater2(int a){
  for (int i=a; i>0; i--){
    for (int j=0; j<i;j++){
      System.out.print("* ");
    }
    System.out.println();
  }
  }
  public static void main(String[] args) {
    System.out.print("Enter a number: ");
    Scanner sc = new Scanner(System.in);
    int num = sc.nextInt();
    pater2(num);
  }
}
