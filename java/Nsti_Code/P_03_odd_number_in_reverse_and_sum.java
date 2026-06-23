package Nsti_Code;

import java.util.Scanner;

public class P_03_odd_number_in_reverse_and_sum {
  public static void main(String[] args) {
    int num, sum = 0;
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter any number: ");
    num = sc.nextInt();
    for (int i = num; i > 0; i--) {
      if (i % 2 != 0) {
        System.out.print(i + " ");
        sum += i;
      }
    }
    System.out.print("\nSum= " + sum);
  }
}
