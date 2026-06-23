package practice;
import java.util.Scanner;
public class MultiplicationTable {
  static void table(int num) {
    for (int i = 1; i <= 10; i++) {
      System.out.println(num+" x "+i+" = "+ num * i);
    }
  }
  public static void main() {
    Scanner sc=new Scanner(System.in);
    System.out.print("Enter any number:");
    int num=sc.nextInt();
    table(num);
  }
}
