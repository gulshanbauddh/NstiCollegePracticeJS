package Nsti_Code;

import java.util.Scanner;

public class PrimeBetween {
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);

    System.out.print("Enter lower limit: ");
    int low = sc.nextInt();

    System.out.print("Enter upper limit: ");
    int high = sc.nextInt();

    for (int i = low; i <= high; i++) {
      boolean isPrime = true;

      for (int j = 2; j <= i / 2; j++) {
        if (i % j == 0) {
          isPrime = false;
          break;
        }
      }

      if (i > 1 && isPrime) {
        System.out.print(i + " ");
      }
    }
  }
}
