package Nsti_Code;

import java.util.Scanner;

public class sumFristNaturalNumbar {
  public static int sumNum(int num){
    if (num == 1){
      return 1;
    }
    return num+sumNum(--num);
  }
  static void main() {
    System.out.print("Enter limit:");
    Scanner sc = new Scanner(System.in);
    int num = sc.nextInt();
    System.out.println("Sum of natural number: "+sumNum(num));
  }
}
